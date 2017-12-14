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
use App\REST\Constants;


require_once 'HTTP/Request2.php';
//require_once 'App/Utils/classes/Rest.class.php';
//include(app_path() . '/Utils/classes/Rest.class.php');


class DevShellRequestController extends Controller
{

    public function __construct()
    {
    }



    /**
     * @param Request $req
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(Request $req)
    {
        Log::debug("In Dev Shell Request Controller");

        //\Debugbar::addMessage('Another message');
        return view('devshellrequest');
    }

    public function store(Request $req) {
        $this->validate($req, [
            'name' => 'required|max:255',
            'personal_id' => 'required',
            'email' => 'required',
            'courseid' => 'required|min:6|max:8',
            //'g-recaptcha-response' => 'required|captcha'
        ]);
        $name = $req->request->get("name");
        $id = $req->request->get("personal_id");
        $email = $req->request->get('email');
        $courseid = $req->request->get('courseid');
        $id = preg_replace("/[^A-Za-z0-9]/", '', $id);
	    $courseid = preg_replace("/[^A-Za-z0-9]/", '', $courseid);

        $course = new Course();
        $course->dataSourceId = '_444_1';
        $course->termId = '_7_1';
        $course->availability = 'yes';
        $course->courseId = 'SP.2018.' . $courseid . '.DEV.' . $id;
        $newcourseid = "courseId:" . $course->courseId;
        $course->externalId = $course->courseId;
        $course->description = $id . " Development shell";
        //BBTRAIN.O.2017.MM.00# - Your.Name
        $course->name = $course->courseId;
        //$course->name = $course->courseId;
        $course->uuid = uniqid("", true);
        //$course->id = $course->courseId;
        //print "Creating course from object";
        $rest = new Rest();
        $access = $rest->authenticateREST();
        $access_token = $access->access_token;
        $user = $rest->readUser($access_token, 'userName:' . $id);
        $newcourse = $rest->createCourseFromObject($access_token, $course);

        $course_id = "courseId:" . $course->courseId;
        $courseFound = $rest->readCourse($access_token, $course_id);

        if ($courseFound->courseId != "" && $user->id != "") {
            $instructor = $rest->createMembership($access_token, $newcourse->dataSourceId, $courseFound->id, $user->id, 'Instructor');
            Mail::raw('SUCCESSFUL DEV SHELL REQUEST FOR: ' . $name . ' ID: ' . $id . " EMAIL: " . $email . " COURSEID: " . $courseid, function ($message) {
                $message->to(Constants::ADMIN_EMAIL);
                $message->subject('successful dev shell request');
            });
        }
        else {
            //failed to add membership
            Mail::raw('FAILED DEV SHELL REQUEST FOR: ' . $name . ' ID: ' . $id . " EMAIL: " . $email . " COURSEID: " . $courseid, function ($message) {
                $message->to(Constants::ADMIN_EMAIL);
                $message->subject('FAILED DEV SHELL REQUEST');
            });
        }

        return view('devshellrequestconfirm');
    }

    /* $course = new Course();

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
    */


}
