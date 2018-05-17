<?php


namespace App\REST;

use App\REST\DTO\CourseForCreation;
use App\REST\DTO\DatasourceForCreation;
use App\REST\DTO\MembershipForCreation;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;

use Illuminate\Support\Facades\Mail;
use \Log;

use App\REST\DTO\Availability;
use App\REST\DTO\Contact;
use App\REST\DTO\Course;
use App\REST\DTO\Datasource;
use App\REST\DTO\Membership;
use App\REST\DTO\Name;
use App\REST\DTO\Term;
use App\REST\DTO\Token;
use App\REST\DTO\User;


class Rest
{
    private $client;
    private $hostname;

    public function __construct(bool $UseDevMode = false)
    {

        if ($UseDevMode) {
            $this->hostname = Constants::DEVHOSTNAME;
            $this->client = new Client([ 'verify' => false ]);
        } else {
            $this->hostname = Constants::HOSTNAME;
            $this->client = new Client();
        }
    }

    public function authenticateREST()
    {
        $token = new Token();

        $response = $this->client->request('POST', $this->hostname . CONSTANTS::AUTH_PATH, [
            'auth' => [Constants::KEY, Constants::SECRET],
            'body' => 'grant_type=client_credentials',
            'headers' => ['Content-Type' => 'application/x-www-form-urlencoded'],
        ]);

        Log::info($response->getStatusCode());

        try {

            if (200 == $response->getStatusCode()) {
                Log::info(" Authorize Application...\n");
                $token = json_decode($response->getBody());
            } else {
                Log::error('Unexpected HTTP status: ' . $response->getStatusCode() . ' ' .
                    $response->getReasonPhrase());
                $BbRestException = json_decode($response->getBody());
                var_dump($BbRestException);
            }
        } catch (ClientException $e) {
            Log::error('Error authenticating REST: ' . $e->getMessage());


            Mail::raw('Could not authenticate REST properly', function ($message) {
                $message->to(Constants::ADMIN_EMAIL);
                $message->subject('Error in BB Registration REST API');
            });

        }

        return $token;
    }

    public function createDatasource($access_token, $external_id, $description)
    {
        $datasource = new Datasource();
        $datasource->externalId = $external_id;
        $datasource->description = $description;

        $ds = new DatasourceForCreation();
        $ds->setFromDatasource($datasource);

        try {
            $response = $this->client->request('POST', $this->hostname . CONSTANTS::DSK_PATH, [
                'json' => $ds,
                'headers' => ['Authorization' => 'Bearer ' . $access_token],
                'synchronous' => true
            ]);


            if (201 == $response->getStatusCode()) {
                Log::debug(" Create Datasource...");
                $datasource = json_decode($response->getBody());
            } else {
                Log::error('Unexpected HTTP status: ' . $response->getStatusCode() . ' ' .
                    $response->getReasonPhrase());
                $BbRestException = json_decode($response->getBody());
                var_dump($BbRestException);
                return -1;
            }
        } catch (ClientException $e) {
            Log::error('Error Creating Datasource with external id: ' . $external_id . ' :' . $e->getMessage());


            Mail::raw('Could not Create Datasource properly', function ($message) {
                $message->to(Constants::ADMIN_EMAIL);
                $message->subject('Error in BB Registration REST API');
            });
            return -1;
        }

        return $datasource;
    }

    public function GetDataSourceKeyIDFromName($access_token, $name)
    {
        $dsks = $this->GetAllDatasources($access_token);
        $id = -1;
        foreach ($dsks->results as $dsk) {
            if ($dsk->externalId == $name)
                $id = $dsk->id;
        }
        if ($id == -1) {
            Log::error("Data source key not found for " . $name);
        }
        return $id;
    }

    public function GetAllDatasources($access_token)
    {

        //$request = new HTTP_Request2($this->hostname . "/learn/api/public/v1/dataSources", HTTP_Request2::METHOD_GET);
        //$request->setHeader('Authorization', 'Bearer ' . $access_token);
        $datasource = new Datasource();

        try {
            $response = $this->client->request('GET', $this->hostname . CONSTANTS::DSK_PATH, [

                'headers' => ['Authorization' => 'Bearer ' . $access_token]
            ]);


            if (200 == $response->getStatusCode()) {
                Log::debug(" Read Datasource...");
                $datasource = json_decode($response->getBody());
            } else {
                Log::error('Unexpected HTTP status: ' . $response->getStatusCode() . ' ' .
                    $response->getReasonPhrase());
                $BbRestException = json_decode($response->getBody());
                var_dump($BbRestException);
                return -1;
            }
        } catch (ClientException $e) {
            Log::error('Error: ' . $e->getMessage());
            return -1;
        }

        return $datasource;
    }

    public function readDatasource($access_token, $dsk_id)
    {

        $datasource = new Datasource();

        try {
            $response = $this->client->request('GET', $this->hostname . Constants::DSK_PATH . '/' . $dsk_id, [

                'headers' => ['Authorization' => 'Bearer ' . $access_token]
            ]);


            if (200 == $response->getStatusCode()) {
                Log::debug(" Read Datasource...");
                $datasource = json_decode($response->getBody());
            } else {
                Log::error('Unexpected HTTP status: ' . $response->getStatusCode() . ' ' .
                    $response->getReasonPhrase());
                $BbRestException = json_decode($response->getBody());
                var_dump($BbRestException);
                return -1;
            }
        } catch (ClientException $e) {
            Log::error('Error reading datasource: ' . $e->getMessage());


            Mail::raw('Could not read datasource properly', function ($message) {
                $message->to(Constants::ADMIN_EMAIL);
                $message->subject('Error in BB Registration REST API');
            });
            return -1;
        }

        return $datasource;
    }

    public function updateDatasource($access_token, $dsk_id)
    {

        $datasource = new Datasource();

        $datasource->id = $dsk_id;
        try {

            $response = $this->client->request('POST', $this->hostname . Constants::DSK_PATH . '/' . $dsk_id, [
                'body' => json_encode($datasource),
                'headers' => [
                    'Authorization' => 'Bearer ' . $access_token,
                    'Content-Type' => 'application/json'],
            ]);


            if (200 == $response->getStatusCode()) {
                Log::debug(" Update Datasource...");
                $datasource = json_decode($response->getBody());
            } else {
                Log::error('Unexpected HTTP status: ' . $response->getStatusCode() . ' ' .
                    $response->getReasonPhrase());
                $BbRestException = json_decode($response->getBody());
                var_dump($BbRestException);
                return -1;
            }
        } catch (ClientException $e) {
            Log::error('Error updating datasource: ' . $dsk_id . '  ' . $e->getMessage());


            Mail::raw('Could not update datasource properly', function ($message) {
                $message->to(Constants::ADMIN_EMAIL);
                $message->subject('Error in BB Registration REST API');
            });
            return -1;
        }

        return $datasource;
    }

    public function deleteDatasource($access_token, $dsk_id)
    {

        try {

            $response = $this->client->request('DELETE', $this->hostname . CONSTANTS::DSK_PATH . '/' . $dsk_id, [
                'headers' => [
                    'Authorization' => 'Bearer ' . $access_token,
                    'Content-Type' => 'application/json'],
            ]);


            if (204 == $response->getStatusCode()) {
                Log::debug("Datasource Deleted");
            } else {
                Log::error('Unexpected HTTP status: ' . $response->getStatusCode() . ' ' .
                    $response->getReasonPhrase());
                $BbRestException = json_decode($response->getBody());
                var_dump($BbRestException);
                return FALSE;
            }
        } catch (ClientException $e) {
            Log::error('Error deleting datasource: ' . $dsk_id . $e->getMessage());
            Mail::raw('Could not delete datasource properly', function ($message) {
                $message->to(Constants::ADMIN_EMAIL);
                $message->subject('Error in BB Registration REST API');
            });
            return FALSE;
        }

        return TRUE;
    }

    public function createTerm($access_token, $dsk_id)
    {

        $term = new Term();

        $term->dataSourceId = $dsk_id;
        $term->availability = new Availability();

        try {
            $response = $this->client->request('POST', $this->hostname . CONSTANTS::TERM_PATH, [
                'json' => $term,
                'headers' => [
                    'Authorization' => 'Bearer ' . $access_token]
            ]);


            if (201 == $response->getStatusCode()) {
                Log::debug(" Create Term...");
                $term = json_decode($response->getBody());
            } else {
                Log::error('Unexpected HTTP status: ' . $response->getStatusCode() . ' ' .
                    $response->getReasonPhrase());
                $BbRestException = json_decode($response->getBody());
                var_dump($BbRestException);
                return -1;
            }
        } catch (ClientException $e) {
            Log::error('Error creating term: ' . $dsk_id . $e->getMessage());
            Mail::raw('Could not create term properly', function ($message) {
                $message->to(Constants::ADMIN_EMAIL);
                $message->subject('Error in BB Registration REST API');
            });
            return -1;
        }

        return $term;
    }

    public function getAllTerms($access_token)
    {

        $term = new Term();

        try {
            $response = $this->client->request('GET', $this->hostname . '/learn/api/public/v1/terms', [
                'headers' => [
                    'Authorization' => 'Bearer ' . $access_token]
            ]);


            if (200 == $response->getStatusCode()) {
                Log::debug(" Getting all terms Terms...");
                $term = json_decode($response->getBody());
            } else {
                Log::error('Unexpected HTTP status: ' . $response->getStatusCode() . ' ' .
                    $response->getReasonPhrase());
                $BbRestException = json_decode($response->getBody());
                var_dump($BbRestException);
                return -1;
            }
        } catch (ClientException $e) {
            Log::error('Error getting all terms: ' . $e->getMessage());
            //Mail::raw('Could not get all terms properly', function ($message) {
            //    $message->to(Constants::ADMIN_EMAIL);
            //    $message->subject('Error in BB Registration REST API');
            //});
            return -1;
        }

        return $term;
    }

    public function readTerm($access_token, $term_id)
    {

        $term = new Term();

        try {
            $response = $this->client->request('GET', $this->hostname . Constants::TERM_PATH . '/' . $term_id, [

                'headers' => ['Authorization' => 'Bearer ' . $access_token]
            ]);

            if (200 == $response->getStatusCode()) {
                Log::debug(" Read Term...");
                $term = json_decode($response->getBody());
            } else {
                Log::error('Unexpected HTTP status: ' . $response->getStatusCode() . ' ' .
                    $response->getReasonPhrase());
                $BbRestException = json_decode($response->getBody());
                var_dump($BbRestException);
                return -1;
            }
        } catch (ClientException $e) {
            Log::error('Error: ' . $e->getMessage());
            return -1;
        }

        return $term;
    }

    public function updateTerm($access_token, $dsk_id, $term_id)
    {

        $term = new Term();

        $term->id = $term_id;
        $term->dataSourceId = $dsk_id;

        try {
            $response = $this->client->request('POST', $this->hostname . Constants::TERM_PATH . '/' . $term_id, [
                'body' => json_encode($term),
                'headers' => [
                    'Authorization' => 'Bearer ' . $access_token,
                    'Content-Type' => 'application/json'],
            ]);


            if (200 == $response->getStatusCode()) {
                Log::debug(" Update Term...");
                $term = json_decode($response->getBody());
            } else {
                Log::error('Unexpected HTTP status: ' . $response->getStatusCode() . ' ' .
                    $response->getReasonPhrase());
                $BbRestException = json_decode($response->getBody());
                var_dump($BbRestException);
                return -1;
            }
        } catch (ClientException $e) {
            Log::error('Error updating term: ' . $dsk_id . $e->getMessage());
            Mail::raw('Could not update term properly', function ($message) {
                $message->to(Constants::ADMIN_EMAIL);
                $message->subject('Error in BB Registration REST API');
            });
            return -1;
        }

        return $term;
    }

    public function deleteTerm($access_token, $term_id)
    {

        try {
            $response = $this->client->request('DELETE', $this->hostname . Constants::TERM_PATH . '/' . $term_id, [
                'headers' => [
                    'Authorization' => 'Bearer ' . $access_token,
                    'Content-Type' => 'application/json'],
            ]);


            if (204 == $response->getStatusCode()) {
                Log::debug("Term Deleted");
            } else {
                Log::error('Unexpected HTTP status: ' . $response->getStatusCode() . ' ' .
                    $response->getReasonPhrase());
                $BbRestException = json_decode($response->getBody());
                var_dump($BbRestException);
                return FALSE;
            }
        } catch (ClientException $e) {
            Log::error('Error deleting term: ' . $dsk_id . $e->getMessage());
            Mail::raw('Could not delete term properly', function ($message) {
                $message->to(Constants::ADMIN_EMAIL);
                $message->subject('Error in BB Registration REST API');
            });
            return FALSE;
        }

        return TRUE;
    }

    public function createCourseFromObject($access_token, Course $course)
    {
        $jsonbody = json_encode($course);
        $courseForCreation = new CourseForCreation();
        $courseForCreation->SetFromCourse($course);

        try {
            $response = $this->client->request('POST', $this->hostname . Constants::COURSE_PATH, [
                'body' => json_encode($courseForCreation),
                'headers' => [
                    'Authorization' => 'Bearer ' . $access_token,
                    'Content-Type' => 'application/json',
                ],
            ]);


            if (201 == $response->getStatusCode()) {
                Log::debug(" Create Course...");
                $course = json_decode($response->getBody());
            } else {
                Log::error('Unexpected HTTP status: ' . $response->getStatusCode() . ' ' .
                    $response->getReasonPhrase());
                $BbRestException = json_decode($response->getBody());
                var_dump($BbRestException);
                return -1;
            }
        } catch (ClientException $e) {
            Log::error('Error: ' . $e->getMessage() . ' Failed to create course with Id ' . $course->courseId);
            //Mail::raw('Could not create course properly', function ($message) {
            //    $message->to(Constants::ADMIN_EMAIL);
            //    $message->subject('Error in BB Registration REST API');
            //});
            return -1;
        }

        return $course;
    }

    public function createCourse($access_token, $dsk_id, $term_id)
    {

        $course = new Course();

        $course->dataSourceId = $dsk_id;
        $course->termId = $term_id;
        $course->availability = new Availability();


        try {
            $response = $this->client->request('POST', $this->hostname . CONSTANTS::COURSE_PATH, [
                'body' => json_encode($course),
                'headers' => [
                    'Authorization' => 'Bearer ' . $access_token,
                    'Content-Type' => 'application/json'],
            ]);

            if (201 == $response->getStatusCode()) {
                Log::debug(" Create Course...");
                $course = json_decode($response->getBody());
            } else {
                Log::error('Unexpected HTTP status: ' . $response->getStatusCode() . ' ' .
                    $response->getReasonPhrase());
                $BbRestException = json_decode($response->getBody());
                var_dump($BbRestException);
                return -1;
            }
        } catch (ClientException $e) {
            Log::error('Error: ' . $e->getMessage() . ' Failed to create course with Id ' . $course->courseId);
            Mail::raw('Could not create course properly', function ($message) {
                $message->to(Constants::ADMIN_EMAIL);
                $message->subject('Error in BB Registration REST API');
            });
            return -1;
        }

        return $course;
    }

    public function getCourses($access_token)
    {

        $course = 1;

        try {
            $response = $this->client->request('GET', $this->hostname . Constants::COURSE_PATH, [
                'headers' => [
                    'Authorization' => 'Bearer ' . $access_token]

            ]);

            if (200 == $response->getStatusCode()) {
                Log::debug(" Getting All Courses...");
                $course = json_decode($response->getBody());
            } else {
                Log::error('Unexpected HTTP status: ' . $response->getStatusCode() . ' ' .
                    $response->getReasonPhrase());
                $BbRestException = json_decode($response->getBody());
                var_dump($BbRestException);
                return -1;
            }
        } catch (ClientException $e) {
            Log::error('Error Getting All Courses: ' . $e->getMessage());
            return -1;
        }

        return $course;
    }

    public function readCourse($access_token, $course_id)
    {

        $course = new Course();

        try {
            $response = $this->client->request('GET', $this->hostname . Constants::COURSE_PATH . '/' . $course_id, [
                'headers' => ['Authorization' => 'Bearer ' . $access_token]
            ]);


            if (200 == $response->getStatusCode()) {
                Log::debug(" Read Course with id = " . $course_id . "");
                $course = json_decode($response->getBody());
            } else {
                Log::error('Unexpected HTTP status: ' . $response->getStatusCode() . ' ' .
                    $response->getReasonPhrase());
                $BbRestException = json_decode($response->getBody());
                var_dump($BbRestException);
                return -1;
            }
        } catch (ClientException $e) {
            Log::error('Error Getting Course: ' . $e->getMessage());
            return -1;
        }

        return $course;
    }

    public function updateCourse($access_token, $dsk_id, $course_id, $course_uuid, $course_created, $termId)
    {

        $course = new Course();

        $course->id = $course_id;
        $course->uuid = $course_uuid;
        $course->created = $course_created;
        $course->dataSourceId = $dsk_id;
        $course->termId = $termId;

        try {
            $response = $this->client->request('PATCH', $this->hostname . Constants::COURSE_PATH . '/' . $course_id, [
                'json' => $course,
                'headers' => ['Authorization' => 'Bearer ' . $access_token],
                'synchronous' => true
            ]);


            if (200 == $response->getStatusCode()) {
                Log::debug(" Update Course...");
                $course = json_decode($response->getBody());
            } else {
                Log::error('Unexpected HTTP status: ' . $response->getStatusCode() . ' ' .
                    $response->getReasonPhrase());
                $BbRestException = json_decode($response->getBody());
                var_dump($BbRestException);
                return -1;
            }
        } catch (ClientException $e) {
            Log::error('Error updating course:' .  $e->getMessage());
            Mail::raw('Could not update course properly', function ($message) {
                $message->to(Constants::ADMIN_EMAIL);
                $message->subject('Error in BB Registration REST API');
            });
            return -1;
        }

        return $course;
    }

    public function deleteCourse($access_token, $course_id)
    {

        try {
            $response = $this->client->request('DELETE', $this->hostname . Constants::COURSE_PATH . '/' . $course_id, [
                'headers' => [
                    'Authorization' => 'Bearer ' . $access_token,
                    'Content-Type' => 'application/json'],
            ]);


            if (204 == $response->getStatusCode()) {
                Log::debug("Course Deleted");
            } else {
                Log::error('Unexpected HTTP status: ' . $response->getStatusCode() . ' ' .
                    $response->getReasonPhrase());
                $BbRestException = json_decode($response->getBody());
                var_dump($BbRestException);
                return FALSE;
            }
        } catch (ClientException $e) {
            //print 'Error: ' . $e->getMessage();
            return FALSE;
        }

        return TRUE;
    }

    public function createUser($access_token, $dsk_id)
    {

        $user = new User();

        $user->dataSourceId = $dsk_id;
        $user->availability = new Availability();
        $user->name = new Name();
        $user->contact = new Contact();

        try {
            $response = $this->client->request('POST', $this->hostname . CONSTANTS::USER_PATH, [
                'body' => json_encode($user),
                'headers' => [
                    'Authorization' => 'Bearer ' . $access_token,
                    'Content-Type' => 'application/json'],
            ]);


            if (201 == $response->getStatusCode()) {
                Log::debug(" Create User...");
                $user = json_decode($response->getBody());
            } else {
                Log::error('Unexpected HTTP status: ' . $response->getStatusCode() . ' ' .
                    $response->getReasonPhrase());
                $BbRestException = json_decode($response->getBody());
                var_dump($BbRestException);
                return -1;
            }
        } catch (ClientException $e) {
            print 'Error: ' . $e->getMessage();
            return -1;
        }

        return $user;
    }

    public function createUserFromModel($access_token, $dsk_id, $userModel)
    {

        $user = new User();

        $user->dataSourceId = $dsk_id;
        $user->availability = new Availability();

        $user->name = new Name();
        $usermodelname = $userModel->getAttribute('name');
        $namepieces = explode(" ", $usermodelname);
        $user->name->given = $namepieces[0];
        unset($namepieces[0]);
        $user->name->family = implode(" ", $namepieces);
        $user->contact = new Contact();
        $user->contact->email = $userModel->getAttribute("email");
        $user->userName = $userModel->getAttribute("personal_id");
        $user->studentId = $user->userName;
        $user->externalId = $user->userName;


        try {
            $response = $this->client->request('POST', $this->hostname . CONSTANTS::USER_PATH, [
                'body' => json_encode($user),
                'headers' => [
                    'Authorization' => 'Bearer ' . $access_token,
                    'Content-Type' => 'application/json'],
            ]);


            if (201 == $response->getStatusCode()) {
                Log::debug(" Create User...");
                $user = json_decode($response->getBody());
            } else {
                Log::error('Unexpected HTTP status: ' . $response->getStatusCode() . ' ' .
                    $response->getReasonPhrase());
                $BbRestException = json_decode($response->getBody());
                var_dump($BbRestException);
                return -1;
            }
        } catch (ClientException $e) {
            print 'Error: ' . $e->getMessage();
            return -1;
        }

        return $user;
    }

    public function readUser($access_token, $user_id)
    {

        $path = $this->hostname . Constants::USER_PATH . '/' . $user_id;
        $user = new User();


        try {
            $response = $this->client->request('GET', $this->hostname . Constants::USER_PATH . '/' . $user_id, [
                'headers' => ['Authorization' => 'Bearer ' . $access_token]
            ]);


            if (200 == $response->getStatusCode()) {
                Log::debug(" Read User...");
                $user = json_decode($response->getBody());
            } else {
                Log::error('Unexpected HTTP status: ' . $response->getStatusCode() . ' ' .
                    $response->getReasonPhrase());
                $BbRestException = json_decode($response->getBody());
                var_dump($BbRestException);
                return -1;
            }
        } catch (ClientException $e) {
            Log::warning('Error: ' . $e->getMessage());
            return -1;
        }

        return $user;
    }

    public function updateUser($access_token, $dsk_id, $user_id, $user_uuid, $user_created)
    {

        $user = new User();

        $user->id = $user_id;
        $user->uuid = $user_uuid;
        $user->created = $user_created;
        $user->dataSourceId = $dsk_id;

        try {
            $response = $this->client->request('PATCH', $this->hostname . Constants::USER_PATH . '/' . $user_id, [
                'json' => $user,
                'headers' => ['Authorization' => 'Bearer ' . $access_token],
                'synchronous' => true
            ]);


            if (200 == $response->getStatusCode()) {
                Log::debug(" Update User...");
                $user = json_decode($response->getBody());
            } else {
                Log::error('Unexpected HTTP status: ' . $response->getStatusCode() . ' ' .
                    $response->getReasonPhrase());
                $BbRestException = json_decode($response->getBody());
                var_dump($BbRestException);
                return -1;
            }
        } catch (ClientException $e) {
            print 'Error: ' . $e->getMessage();
            return -1;
        }

        return $user;
    }

    public function deleteUser($access_token, $user_id)
    {

        try {
            $response = $this->client->request('DELETE', $this->hostname . Constants::USER_PATH . '/' . $user_id, [
                'headers' => [
                    'Authorization' => 'Bearer ' . $access_token,
                    'Content-Type' => 'application/json'],
            ]);


            if (204 == $response->getStatusCode()) {
                Log::debug("User Deleted");
            } else {
                Log::error('Unexpected HTTP status: ' . $response->getStatusCode() . ' ' .
                    $response->getReasonPhrase());
                $BbRestException = json_decode($response->getBody());
                var_dump($BbRestException);
                return FALSE;
            }
        } catch (ClientException $e) {
            print 'Error: ' . $e->getMessage();
            return FALSE;
        }

        return TRUE;
    }


    public function createMembership($access_token, $dsk_id, $course_id, $user_id, $courseRoleId)
    {

        $path = $this->hostname . CONSTANTS::COURSE_PATH . '/externalId:' . $course_id . '/users/externalId:' . $user_id;
        $membership = new Membership();

        $membership->dataSourceId = $dsk_id;
        $membership->availability = new Availability();
        $membership->availability->available = "Yes";
        $membership->userId = $user_id;
        $membership->courseId = $course_id;
        $membership->courseRoleId = $courseRoleId;
        //$membership->created = "2017-12-04T22:06:56:592Z";
        $mem = new MembershipForCreation();
        $mem->SetFromMembership($membership);

        //$request = new HTTP_Request2($this->hostname . Constants::COURSE_PATH . '/' . $course_id . '/users/' . $user_id, HTTP_Request2::METHOD_PUT);
        //$request->setHeader('Authorization', 'Bearer ' . $access_token);
        //$request->setHeader('Content-Type', 'application/json');
        //$request->setBody(json_encode($membership));


        try {
            $response = $this->client->request('PUT', $this->hostname . CONSTANTS::COURSE_PATH . '/' . $course_id . '/users/' . $user_id, [
            //$response = $this->client->request('PUT', $path, [
                'body' => json_encode($mem),
                'headers' => [
                    'Authorization' => 'Bearer ' . $access_token,
                    'Content-Type' => 'application/json'],
            ]);

            if (201 == $response->getStatusCode()) {
                Log::debug(" Create Membership...");
                $membership = json_decode($response->getBody());
            } else {
                Log::error('Unexpected HTTP status: ' . $response->getStatusCode() . ' ' .
                    $response->getReasonPhrase());
                $BbRestException = json_decode($response->getBody());
                var_dump($BbRestException);
                return -1;
            }
        } catch (ClientException $e) {
            Log::error('Error: ' . $e->getMessage());
            //Mail::raw('Could not create membership in ' . $membership->courseId . ' For ' . $user_id, function ($message) {
            //    $message->to(Constants::ADMIN_EMAIL);
            //    $message->subject('Error in BB Registration REST API');
            //});
            return -1;
        }

        return $membership;
    }

    public function readMembership($access_token, $course_id, $user_id)
    {

        $membership = new Membership();

        try {
            $response = $this->client->request('GET', $this->hostname . Constants::COURSE_PATH . '/' . $course_id . '/users/' . $user_id, [
                'headers' => ['Authorization' => 'Bearer ' . $access_token]
            ]);


            if (200 == $response->getStatusCode()) {
                Log::debug(" Read Membership...");
                $membership = json_decode($response->getBody());
            } else {
                Log::error('Unexpected HTTP status: ' . $response->getStatusCode() . ' ' .
                    $response->getReasonPhrase());
                $BbRestException = json_decode($response->getBody());
                var_dump($BbRestException);
                return -1;
            }
        } catch (ClientException $e) {
            print 'Error: ' . $e->getMessage();
            return -1;
        }

        return $membership;
    }

    public function updateMembership($access_token, $dsk_id, $course_id, $user_id, $membership_created)
    {

        $membership = new Membership();

        $membership->dataSourceId = $dsk_id;
        $membership->userId = $user_id;
        $membership->courseId = $course_id;
        $membership->created = $membership_created;

        try {
            $response = $this->client->request('PATCH', $this->hostname . Constants::COURSE_PATH . '/' . $course_id . '/users/' . $user_id, [
                'json' => $membership,
                'headers' => ['Authorization' => 'Bearer ' . $access_token],
                'synchronous' => true
            ]);


            if (200 == $response->getStatusCode()) {
                Log::debug(" Update Membership...");
                $membership = json_decode($response->getBody());
            } else {
                Log::error('Unexpected HTTP status: ' . $response->getStatusCode() . ' ' .
                    $response->getReasonPhrase());
                $BbRestException = json_decode($response->getBody());
                var_dump($BbRestException);
                return -1;
            }
        } catch (ClientException $e) {
            print 'Error: ' . $e->getMessage();
            return -1;
        }

        return $membership;
    }

    public function deleteMembership($access_token, $course_id, $user_id)
    {

        try {
            $response = $this->client->request('DELETE', $this->hostname . Constants::COURSE_PATH . '/' . $course_id . '/users/' . $user_id, [
                'headers' => [
                    'Authorization' => 'Bearer ' . $access_token,
                    'Content-Type' => 'application/json'],
            ]);


            if (204 == $response->getStatusCode()) {
                Log::debug("Membership Deleted");
            } else {
                Log::error('Unexpected HTTP status: ' . $response->getStatusCode() . ' ' .
                    $response->getReasonPhrase());
                $BbRestException = json_decode($response->getBody());
                var_dump($BbRestException);
                return FALSE;
            }
        } catch (ClientException $e) {
            print 'Error: ' . $e->getMessage();
            return FALSE;
        }

        return TRUE;
    }


    public function createEnrollment($access_token, $dsk_id, $course_id, $user_id)
    {

        $membership = new Membership();

        $membership->dataSourceId = $dsk_id;
        $membership->availability = new Availability();
        $membership->userId = $user_id;
        $membership->courseId = $course_id;

        try {
            $response = $this->client->request('PUT', $this->hostname . Constants::COURSE_PATH . '/' . $course_id . '/users/' . $user_id, [
                'body' => json_encode($membership),
                'headers' => [
                    'Authorization' => 'Bearer ' . $access_token,
                    'Content-Type' => 'application/json'],
            ]);


            if (201 == $response->getStatusCode()) {
                Log::debug(" Create Membership...");
                $membership = json_decode($response->getBody());
            } else {
                Log::error('Unexpected HTTP status: ' . $response->getStatusCode() . ' ' .
                    $response->getReasonPhrase());
                $BbRestException = json_decode($response->getBody());
                var_dump($BbRestException);
                return -1;
            }
        } catch (ClientException $e) {
            print 'Error: ' . $e->getMessage();
            return -1;
        }

        return $membership;
    }

    public function readEnrollment($access_token, $course_id, $user_id)
    {

        $membership = new Membership();

        try {
            $response = $this->client->request('GET', $this->hostname . Constants::COURSE_PATH . '/' . $course_id . '/users/' . $user_id, [
                'headers' => ['Authorization' => 'Bearer ' . $access_token]
            ]);


            if (200 == $response->getStatusCode()) {
                Log::debug(" Read Membership...");
                $membership = json_decode($response->getBody());
            } else {
                Log::error('Unexpected HTTP status: ' . $response->getStatusCode() . ' ' .
                    $response->getReasonPhrase());
                $BbRestException = json_decode($response->getBody());
                var_dump($BbRestException);
                return -1;
            }
        } catch (ClientException $e) {
            print 'Error: ' . $e->getMessage();
            return -1;
        }

        return $membership;
    }

    public function updateEnrollment($access_token, $dsk_id, $course_id, $user_id, $membership_created)
    {

        $membership = new Membership();

        $membership->dataSourceId = $dsk_id;
        $membership->userId = $user_id;
        $membership->courseId = $course_id;
        $membership->created = $membership_created;

        try {
            $response = $this->client->request('PATCH', $this->hostname . Constants::COURSE_PATH . '/' . $course_id . '/users/' . $user_id, [
                'json' => $membership,
                'headers' => ['Authorization' => 'Bearer ' . $access_token],
                'synchronous' => true
            ]);


            if (200 == $response->getStatusCode()) {
                Log::debug(" Update Membership...");
                $membership = json_decode($response->getBody());
            } else {
                Log::error('Unexpected HTTP status: ' . $response->getStatusCode() . ' ' .
                    $response->getReasonPhrase());
                $BbRestException = json_decode($response->getBody());
                var_dump($BbRestException);
                return -1;
            }
        } catch (ClientException $e) {
            print 'Error: ' . $e->getMessage();
            return -1;
        }

        return $membership;
    }

    public function deleteEnrollment($access_token, $course_id, $user_id)
    {

        try {
            $response = $this->client->request('DELETE', $this->hostname . Constants::COURSE_PATH . '/' . $course_id . '/users/' . $user_id, [
                'headers' => [
                    'Authorization' => 'Bearer ' . $access_token,
                    'Content-Type' => 'application/json'],
            ]);


            if (204 == $response->getStatusCode()) {
                Log::debug("Membership Deleted");
            } else {
                Log::error('Unexpected HTTP status: ' . $response->getStatusCode() . ' ' .
                    $response->getReasonPhrase());
                $BbRestException = json_decode($response->getBody());
                var_dump($BbRestException);
                return FALSE;
            }
        } catch (ClientException $e) {
            print 'Error: ' . $e->getMessage();
            return FALSE;
        }

        return TRUE;
    }


}
