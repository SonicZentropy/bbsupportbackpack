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

//use app\UtilsPHP\PTChelpers;


class TrainingRegistrationController extends Controller
{
    public $registrations;
    public $trainingSessions;

    public function __construct(TrainingRegistrationRepository $regs, TrainingSessionRepository $ses)
    {
        $this->registrations = $regs;
        $this->trainingSessions = $ses;
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(Request $request)
    {
        Log::info("In Training Registration Controller");
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

        //#TODO: Send email to jas when number enrolled is 15

        if($request->training_session_id == "1") { //Is online training, this is fragile imo
            $this->SendOnlineVerificationEmail($reg, $user);
            return view('onlineRegConfirmation');
        }

        $this->SendRegularVerificationEmail($reg, $user);

        $selectedTraining = TrainingSession::where('id', $reg->training_session_id)->first();

        if ($selectedTraining->number_enrolled >= 15) {
            $this->SendFullCourseAlertEmail($selectedTraining);
        }

        return view('regConfirmation')
            ->with('first_date', $selectedTraining->first_session)
            ->with('second_date', $selectedTraining->second_session);
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

    private function SendRegularVerificationEmail(TrainingRegistration $reg, $user) {
        Log::debug("In sending verification email to " . $user->email);
        Mail::to($user->email)->send(new RegistrationConfirmation($reg, $user));
    }

    public function destroy(Request $request, $trainingId) {
        TrainingRegistration::findOrFail($trainingId)->delete();
        return redirect('/training/Admin');
    }

    private function SendOnlineVerificationEmail($reg, $user)
    {
        Log::debug("In sending ONLINE verification email to " . $user->email);
        Mail::to($user->email)->send(new OnlineRegistrationConfirmation($reg, $user));
    }

    //public function destroy(Request $request, TrainingRegistrationModel $trainingReg) {
    //	$trainingReg->delete();
    //	//public function destroy(Request $request, $trainingId) {
    //	//	Training::findOrFail($trainingId)->delete();
    //	return redirect('/training/Admin');
    //}

}
