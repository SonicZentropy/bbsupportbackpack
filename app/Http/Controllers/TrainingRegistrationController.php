<?php

namespace App\Http\Controllers;

//use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\User;
use App\Mail\CourseFullWarningMail;
use App\Mail\OnlineRegistrationConfirmation;
use App\Mail\RegistrationConfirmation;
use App\Repositories\TrainingRegistrationRepository;
use App\Repositories\TrainingSessionRepository;
use App\Models\{
    TrainingSession, TrainingRegistration
};
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use \Log;

use App\REST\Rest;

use Snowfire\Beautymail\Beautymail;

use App\REST\DTO\Course;
use App\REST\DTO\Availability;


require_once 'HTTP/Request2.php';
//require_once 'App/Utils/classes/Rest.class.php';
//include(app_path() . '/Utils/classes/Rest.class.php');


class TrainingRegistrationController extends Controller
{
    public $registrations;
    public $trainingSessions;
    private $bmail;


    public function __construct(TrainingRegistrationRepository $regs, TrainingSessionRepository $ses)
    {
        $this->registrations = $regs;
        $this->trainingSessions = $ses;
        $this->bmail = app(Beautymail::class);
    }



    /**
     * @param Request $req
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(Request $req)
    {
        /*$rest = new Rest();
        $token = $rest->authenticateREST();

        $access_token = $token->access_token;

        $rest->createDatasource($access_token, 'restsource', 'rest source');

        $ds = $rest->GetAllDatasources($access_token);
        $id = 1;
        foreach($ds->results as $result) {
            if ($result->externalId == 'restsource') {
                $id = $result->id;
            }
        }
        if ($id != 1) {
            $rest->deleteDatasource($access_token, $id);
        }

        $courses = $rest->getCourses($access_token);
	*/
        Log::debug("In Training Registration Controller");

        //\Debugbar::addMessage('Another message');
        return view('registration', [
            'registrations' => $this->registrations->getTrainingRegistrations(),
            'trainingSessions' => $this->trainingSessions->getNextThreeTrainingSessions(),
        ]);
    }

    /**
     * @param Request $request
     * @return $this|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function store(Request $request)
    {
        Log::debug("In TrainingRegistrationController::store");
        $this->validate($request, [
            'name' => 'required|max:255',
            'institution' => 'required',
            'personal_id' => 'required',
            'email' => 'required',
            'courses_taught' => 'required',
            'course_type' => 'required',
            'training_session_id' => 'required',
            'Policy1Agreement' => 'required',
            'Policy2Agreement' => 'required',
            'Policy3Agreement' => 'required',
            'Policy4Agreement' => 'required',
            'Policy5Agreement' => 'required',
            //'g-recaptcha-response' => 'required|captcha'
        ]);

        $user = $this->ProcessOrCreateUser($request);


        $reg = $this->CreateRegistration($request);

        $isOnline = $request->training_session_id == "1"; //Is online training, this is fragile imo

        //#TODO: Send email to jas when number enrolled is 15
        $this->SetupBlackboard($user, $reg, $isOnline);

        if($isOnline) { //Is online training, this is fragile imo
            $this->SendOnlineVerificationEmail($reg, $user);
            return view('onlineRegConfirmation');
        }


        $selectedTraining = TrainingSession::where('id', $reg->training_session_id)->first();
        $this->SendRegularVerificationEmail($reg, $selectedTraining, $user);

        $this->SendNewRegNotificationEmail($reg, $selectedTraining, $user);

        if ($selectedTraining->number_enrolled >= 15) {
            $this->SendFullCourseAlertEmail($selectedTraining);
        }


        return view('regConfirmation')
            ->with('first_date', $selectedTraining->first_session)
            ->with('second_date', $selectedTraining->second_session);
    }

    private function SetupBlackboard($user, $reg, $isOnline) {
        $rest = new Rest();
        $user_id = "userName:" . $user->personal_id;


        $access = $rest->authenticateREST();
        $access_token = $access->access_token;
        $dsk_id = $rest->GetDataSourceKeyIDFromName($access_token, "BBTRAINING");

        /////////////////// ENROLL USER IN BBTRAIN COURSE AS STUDENT

        if ($isOnline)
            $course_id = "courseId:BBTRAIN.BASICS.ONLINE";
        else
            $course_id = "courseId:BBTRAIN.BASICS.001";
        $course = $rest->readCourse($access_token, $course_id);

        $userBB = $rest->readUser($access_token, $user_id);

        //if user isn't already in BB, add them

        if ($userBB->id === "") {
            Log::debug("Need to create new user");
            $userBB = $rest->createUserFromModel($access_token, $dsk_id, $user);
        }

        $membership = $rest->createMembership($access_token, "_2_1", $course->id,  $userBB->id, 'Student');

//CREATE COURSE FOR USER
        $course = new Course();

        $course->dataSourceId = $dsk_id;
        $course->termId = '_22_1'; // For BBTraining Term
        $course->availability = 'yes';
        $course->courseId = 'BBTRAIN.DEV.FINAL.' . $user->getAttribute("personal_id");
        $newcourseid = "courseId:" . $course->courseId;
        $course->externalId = $course->courseId;
        $course->description = "BB Training Development shell";
        //BBTRAIN.O.2017.MM.00# - Your.Name
        $course->name = 'BBTRAIN.DEV.FINAL.' . $userBB->name->given . $userBB->name->family;
        //$course->name = $course->courseId;
        $course->uuid = uniqid("", true);
        //print "Creating course from object";
        $newcourse = $rest->createCourseFromObject($access_token, $course);

        //$insCourse = $rest->readCourse($access_token, $newcourseid);

// ENROLL USER IN OWN COURSE AS INSTRUCTOR
        $instructor = $rest->createMembership($access_token, "_2_1", $newcourse->id, $userBB->id, 'Instructor');

    }

    private function CreateRegistration(Request $request) {
        $reg = new TrainingRegistration();
        $reg->name = $request->name;
        $reg->personal_id = $request->personal_id;
        $reg->email = $request->email;
        $reg->courses_taught = $request->courses_taught;
        $reg->course_type = $request->course_type;
        //$laptop = $request->laptop;
        //$acc = $request->accommodations;
        $reg->laptop = checkbox_boolean($request->laptop);
        $reg->accommodations = checkbox_boolean($request->accommodations);
        $reg->training_session_id = $request->training_session_id;
        $reg->registered_user_id = User::where('personal_id', '=', $request->personal_id)->first()->id;
        $reg->save();
        Log::debug("Saved registration model to database");

        //increment number enrolled
        TrainingSession::where('id', $reg->training_session_id)->first()->increment('number_enrolled');
        return $reg;
    }



    private function ProcessOrCreateUser(Request $request) {
        $user = User::where('personal_id', '=', $request->personal_id)->first();
        if (is_null($user)) {
            $newuser = new User();
            $newuser->name = $request->name;
            $newuser->email = $request->email;
            $newuser->institution = $request->institution;
            $newuser->password = bcrypt('Letmein123');
            $newuser->isAdmin = false;
            $newuser->personal_id = $request->personal_id;
            $newuser->save();
            return $newuser;
        }
        return $user;
    }

    private function SendFullCourseAlertEmail(TrainingSession $selectedTraining) {
        Log::debug("Course is full, emailing jasmine");
        Mail::to("jcwilliams@pulaskitech.edu")->send(new CourseFullWarningMail($selectedTraining));
    }

    private function SendRegularVerificationEmail(TrainingRegistration $reg, TrainingSession $selectedTraining, $user) {
        Log::debug("In sending verification email to " . $user->email);
        //Mail::to($user->email)->send(new RegistrationConfirmation($reg, $user));
        $this->bmail->send('mails.regConfirmMail', [
            'first_date' => prettydate($selectedTraining->first_session),
            'second_date' => prettydate($selectedTraining->second_session)],
            function($message) use ($user) {
                $message->from('ofs@pulaskitech.edu')
                    ->to($user->email)
                    ->subject("Online Registration Confirmation");
        });
    }

    private function SendNewRegNotificationEmail(TrainingRegistration $reg, TrainingSession $selectedTraining, $user) {
        Log::debug("In sending notification verification email to jcwilliams@uaptc.edu" );
        //Mail::to($user->email)->send(new RegistrationConfirmation($reg, $user));

        $this->bmail->send('mails.NewRegNotificationMail', [
            'username' => $user->name,
            'userid' => $user->personal_id,
            'user_email' => $user->email,
            'first_date' => prettydate($selectedTraining->first_session),
            'second_date' => prettydate($selectedTraining->second_session)],
            function($message) use ($user) {
                $message->from('ofs@pulaskitech.edu')
                    ->to('cbailey@pulaskitech.edu')
                    ->subject("New Blackboard Registration Submitted");
            });
    }

    public function destroy(Request $request, $trainingId) {
        TrainingRegistration::findOrFail($trainingId)->delete();
        return redirect('/training/Admin');
    }

    private function SendOnlineVerificationEmail($reg, $user)
    {
        Log::debug("In sending ONLINE verification email to " . $user->email);
        //Mail::to($user->email)->send(new OnlineRegistrationConfirmation($reg, $user));
        $this->bmail->send('mails.onlineRegConfirmMail', [], function($message) use ($user) {
            $message->from('ofs@pulaskitech.edu')
                    ->to($user->email)
                    ->subject("Online Registration Confirmation");
        });
    }

    //public function destroy(Request $request, TrainingRegistrationModel $trainingReg) {
    //	$trainingReg->delete();
    //	//public function destroy(Request $request, $trainingId) {
    //	//	Training::findOrFail($trainingId)->delete();
    //	return redirect('/training/Admin');
    //}

}
