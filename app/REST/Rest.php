<?php


namespace App\REST;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
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
    
    public function __construct() {
        $this->client = new Client();
    }

    public function authenticateREST() {
        $token = new Token();
        
        $response = $this->client->request('POST', Constants::HOSTNAME . CONSTANTS::AUTH_PATH, [
            'auth' => [Constants::KEY, Constants::SECRET],
            'body' => 'grant_type=client_credentials',
            'headers' => ['Content-Type' => 'application/x-www-form-urlencoded'],
        ] );

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
        } catch (RequestException $e) {
            Log::error('Error: ' . $e->getMessage());
        }

        return $token;
    }

    public function createDatasource($access_token, $external_id, $description) {
        $datasource = new Datasource();
        $datasource->externalId = $external_id;
        $datasource->description = $description;

        //$response = $this->client->request('POST', Constants::HOSTNAME . CONSTANTS::DSK_PATH, [
        //    'body' => json_encode($datasource),
        //    'headers' => [
        //        'Authorization' => 'Bearer ' . $access_token,
        //        'Content-Type' => 'application/json'],
        //] );

        $response = $this->client->request('POST', Constants::HOSTNAME . CONSTANTS::DSK_PATH, [
            'json' => $datasource,
            'headers' => [ 'Authorization' => 'Bearer ' . $access_token ],
            'synchronous' => true
        ] );

        //$request = new HTTP_Request2(Constants::HOSTNAME . Constants::DSK_PATH, HTTP_Request2::METHOD_POST);
        //$request->setHeader('Authorization', 'Bearer ' . $access_token);
        //$request->setHeader('Content-Type', 'application/json');
        //$request->setBody(json_encode($datasource));

        try {
            
            if (201 == $response->getStatusCode()) {
                Log::debug(" Create Datasource...");
                $datasource = json_decode($response->getBody());
            } else {
                Log::error('Unexpected HTTP status: ' . $response->getStatusCode() . ' ' .
                    $response->getReasonPhrase());
                $BbRestException = json_decode($response->getBody());
                var_dump($BbRestException);
            }
        } catch (RequestException $e) {
            print 'Error: ' . $e->getMessage();
        }

        return $datasource;
    }

    public function GetDataSourceKeyIDFromName($access_token, $name) {
        $dsks = $this->GetAllDatasources($access_token);
        $id = -1;
        foreach($dsks->results as $dsk) {
            if ($dsk->externalId == $name)
                $id = $dsk->id;
        }
        if ($id == -1) {
            Log::error("Data source key not found for " . $name);
        }
        return $id;
    }

    public function GetAllDatasources($access_token) {
        
        //$request = new HTTP_Request2(Constants::HOSTNAME . "/learn/api/public/v1/dataSources", HTTP_Request2::METHOD_GET);
        //$request->setHeader('Authorization', 'Bearer ' . $access_token);
        $datasource = new Datasource();

        $response = $this->client->request('GET', Constants::HOSTNAME . CONSTANTS::DSK_PATH, [

            'headers' => ['Authorization' => 'Bearer ' . $access_token ]
        ] );

        try {
            
            if (200 == $response->getStatusCode()) {
                Log::debug(" Read Datasource...");
                $datasource = json_decode($response->getBody());
            } else {
                Log::error('Unexpected HTTP status: ' . $response->getStatusCode() . ' ' .
                    $response->getReasonPhrase());
                $BbRestException = json_decode($response->getBody());
                var_dump($BbRestException);
            }
        } catch (RequestException $e) {
            print 'Error: ' . $e->getMessage();
        }

        return $datasource;
    }

    public function readDatasource($access_token, $dsk_id) {
        
        $datasource = new Datasource();

        $response = $this->client->request('GET', Constants::HOSTNAME . Constants::DSK_PATH . '/' . $dsk_id, [

            'headers' => ['Authorization' => 'Bearer ' . $access_token ]
        ] );



        try {
            
            if (200 == $response->getStatusCode()) {
                Log::debug(" Read Datasource...");
                $datasource = json_decode($response->getBody());
            } else {
                Log::error('Unexpected HTTP status: ' . $response->getStatusCode() . ' ' .
                    $response->getReasonPhrase());
                $BbRestException = json_decode($response->getBody());
                var_dump($BbRestException);
            }
        } catch (RequestException $e) {
            print 'Error: ' . $e->getMessage();
        }

        return $datasource;
    }

    public function updateDatasource($access_token, $dsk_id) {
        
        $datasource = new Datasource();

        $datasource->id = $dsk_id;

        $response = $this->client->request('POST', Constants::HOSTNAME . Constants::DSK_PATH . '/' . $dsk_id, [
            'body' => json_encode($datasource),
            'headers' => [
                'Authorization' => 'Bearer ' . $access_token,
                'Content-Type' => 'application/json'],
        ] );



        try {
            
            if (200 == $response->getStatusCode()) {
                Log::debug(" Update Datasource...");
                $datasource = json_decode($response->getBody());
            } else {
                Log::error('Unexpected HTTP status: ' . $response->getStatusCode() . ' ' .
                    $response->getReasonPhrase());
                $BbRestException = json_decode($response->getBody());
                var_dump($BbRestException);
            }
        } catch (RequestException $e) {
            print 'Error: ' . $e->getMessage();
        }

        return $datasource;
    }

    public function deleteDatasource($access_token, $dsk_id) {
        

        $response = $this->client->request('DELETE', Constants::HOSTNAME . CONSTANTS::DSK_PATH . '/' . $dsk_id, [
            'headers' => [
                'Authorization' => 'Bearer ' . $access_token,
                'Content-Type' => 'application/json'],
        ] );


        try {
            
            if (204 == $response->getStatusCode()) {
                Log::debug("Datasource Deleted");
            } else {
                Log::error('Unexpected HTTP status: ' . $response->getStatusCode() . ' ' .
                    $response->getReasonPhrase());
                $BbRestException = json_decode($response->getBody());
                var_dump($BbRestException);
                return FALSE;
            }
        } catch (RequestException $e) {
            print 'Error: ' . $e->getMessage();
            return FALSE;
        }

        return TRUE;
    }

    public function createTerm($access_token, $dsk_id) {
        
        $term = new Term();

        $term->dataSourceId = $dsk_id;
        $term->availability = new Availability();

        $response = $this->client->request('POST', Constants::HOSTNAME . CONSTANTS::TERM_PATH, [
            'json' => $term,
            'headers' => [
                'Authorization' => 'Bearer ' . $access_token ]
        ] );


        try {
            
            if (201 == $response->getStatusCode()) {
                Log::debug(" Create Term...");
                $term = json_decode($response->getBody());
            } else {
                Log::error('Unexpected HTTP status: ' . $response->getStatusCode() . ' ' .
                    $response->getReasonPhrase());
                $BbRestException = json_decode($response->getBody());
                var_dump($BbRestException);
            }
        } catch (RequestException $e) {
            print 'Error: ' . $e->getMessage();
        }

        return $term;
    }

    public function getAllTerms($access_token) {

        $response = $this->client->request('GET', Constants::HOSTNAME . '/learn/api/public/v1/terms', [
            'headers' => [
                'Authorization' => 'Bearer ' . $access_token ]
        ] );


        $term = new Term();

        try {
            
            if (200 == $response->getStatusCode()) {
                Log::debug(" Getting all terms Terms...");
                $term = json_decode($response->getBody());
            } else {
                Log::error('Unexpected HTTP status: ' . $response->getStatusCode() . ' ' .
                    $response->getReasonPhrase());
                $BbRestException = json_decode($response->getBody());
                var_dump($BbRestException);
            }
        } catch (RequestException $e) {
            print 'Error: ' . $e->getMessage();
        }

        return $term;
    }

    public function readTerm($access_token, $term_id) {
        
        $term = new Term();

        $response = $this->client->request('GET', Constants::HOSTNAME . Constants::TERM_PATH . '/' . $term_id, [

            'headers' => ['Authorization' => 'Bearer ' . $access_token ]
        ] );

        //$request = new HTTP_Request2(Constants::HOSTNAME . Constants::TERM_PATH . '/' . $term_id, HTTP_Request2::METHOD_GET);
        //$request->setHeader('Authorization', 'Bearer ' . $access_token);

        try {
            
            if (200 == $response->getStatusCode()) {
                Log::debug(" Read Term...");
                $term = json_decode($response->getBody());
            } else {
                Log::error('Unexpected HTTP status: ' . $response->getStatusCode() . ' ' .
                    $response->getReasonPhrase());
                $BbRestException = json_decode($response->getBody());
                var_dump($BbRestException);
            }
        } catch (RequestException $e) {
            print 'Error: ' . $e->getMessage();
        }

        return $term;
    }

    public function updateTerm($access_token, $dsk_id, $term_id) {
        
        $term = new Term();

        $term->id = $term_id;
        $term->dataSourceId = $dsk_id;

        $response = $this->client->request('POST', Constants::HOSTNAME . Constants::TERM_PATH . '/' . $term_id, [
            'body' => json_encode($term),
            'headers' => [
                'Authorization' => 'Bearer ' . $access_token,
                'Content-Type' => 'application/json'],
        ] );

        try {
            
            if (200 == $response->getStatusCode()) {
                Log::debug(" Update Term...");
                $term = json_decode($response->getBody());
            } else {
                Log::error('Unexpected HTTP status: ' . $response->getStatusCode() . ' ' .
                    $response->getReasonPhrase());
                $BbRestException = json_decode($response->getBody());
                var_dump($BbRestException);
            }
        } catch (RequestException $e) {
            print 'Error: ' . $e->getMessage();
        }

        return $term;
    }

    public function deleteTerm($access_token, $term_id) {

        $response = $this->client->request('DELETE', Constants::HOSTNAME . Constants::TERM_PATH . '/' . $term_id, [
            'headers' => [
                'Authorization' => 'Bearer ' . $access_token,
                'Content-Type' => 'application/json'],
        ] );


        try {
            
            if (204 == $response->getStatusCode()) {
                Log::debug("Term Deleted");
            } else {
                Log::error('Unexpected HTTP status: ' . $response->getStatusCode() . ' ' .
                    $response->getReasonPhrase());
                $BbRestException = json_decode($response->getBody());
                var_dump($BbRestException);
                return FALSE;
            }
        } catch (RequestException $e) {
            print 'Error: ' . $e->getMessage();
            return FALSE;
        }

        return TRUE;
    }

    public function createCourseFromObject($access_token, Course $course) {

        $response = $this->client->request('POST', Constants::HOSTNAME . Constants::COURSE_PATH, [
            'body' => json_encode($course),
            'headers' => [
                'Authorization' => 'Bearer ' . $access_token,
                'Content-Type' => 'application/json',
                ],
        ] );

        try {
            
            if (201 == $response->getStatusCode()) {
                Log::debug(" Create Course...");
                $course = json_decode($response->getBody());
            } else {
                Log::error('Unexpected HTTP status: ' . $response->getStatusCode() . ' ' .
                    $response->getReasonPhrase());
                $BbRestException = json_decode($response->getBody());
                var_dump($BbRestException);
            }
        } catch (RequestException $e) {
            print 'Error: ' . $e->getMessage();
        }

        return $course;
    }

    public function createCourse($access_token, $dsk_id, $term_id) {
        
        $course = new Course();

        $course->dataSourceId = $dsk_id;
        $course->termId = $term_id;
        $course->availability = new Availability();

        $response = $this->client->request('POST', Constants::HOSTNAME . CONSTANTS::COURSE_PATH, [
            'body' => json_encode($course),
            'headers' => [
                'Authorization' => 'Bearer ' . $access_token,
                'Content-Type' => 'application/json'],
        ] );

        try {
            
            if (201 == $response->getStatusCode()) {
                Log::debug(" Create Course...");
                $course = json_decode($response->getBody());
            } else {
                Log::error('Unexpected HTTP status: ' . $response->getStatusCode() . ' ' .
                    $response->getReasonPhrase());
                $BbRestException = json_decode($response->getBody());
                var_dump($BbRestException);
            }
        } catch (RequestException $e) {
            print 'Error: ' . $e->getMessage();
        }

        return $course;
    }

    public function getCourses($access_token) {

        $response = $this->client->request('GET', Constants::HOSTNAME . Constants::COURSE_PATH, [
            'headers' => [
                'Authorization' => 'Bearer ' . $access_token ]

        ] );

        $course = 1;

        try {
            
            if (200 == $response->getStatusCode()) {
                Log::debug(" Getting All Courses...");
                $course = json_decode($response->getBody());
            } else {
                Log::error('Unexpected HTTP status: ' . $response->getStatusCode() . ' ' .
                    $response->getReasonPhrase());
                $BbRestException = json_decode($response->getBody());
                var_dump($BbRestException);
            }
        } catch (RequestException $e) {
            print 'Error: ' . $e->getMessage();
        }

        return $course;
    }

    public function readCourse($access_token, $course_id) {
        
        $course = new Course();

        $response = $this->client->request('GET', Constants::HOSTNAME . Constants::COURSE_PATH . '/' . $course_id, [
            'headers' => ['Authorization' => 'Bearer ' . $access_token ]
        ] );


        try {
            
            if (200 == $response->getStatusCode()) {
                Log::debug(" Read Course with id = " . $course_id . "");
                $course = json_decode($response->getBody());
            } else {
                Log::error('Unexpected HTTP status: ' . $response->getStatusCode() . ' ' .
                    $response->getReasonPhrase());
                $BbRestException = json_decode($response->getBody());
                var_dump($BbRestException);
            }
        } catch (RequestException $e) {
            print 'Error: ' . $e->getMessage();
        }

        return $course;
    }

    public function updateCourse($access_token, $dsk_id, $course_id, $course_uuid, $course_created, $termId) {
        
        $course = new Course();

        $course->id = $course_id;
        $course->uuid = $course_uuid;
        $course->created = $course_created;
        $course->dataSourceId = $dsk_id;
        $course->termId = $termId;

        $response = $this->client->request('PATCH', Constants::HOSTNAME . Constants::COURSE_PATH . '/' . $course_id, [
            'json' => $course,
            'headers' => [ 'Authorization' => 'Bearer ' . $access_token ],
            'synchronous' => true
        ] );



        try {
            
            if (200 == $response->getStatusCode()) {
                Log::debug(" Update Course...");
                $course = json_decode($response->getBody());
            } else {
                Log::error('Unexpected HTTP status: ' . $response->getStatusCode() . ' ' .
                    $response->getReasonPhrase());
                $BbRestException = json_decode($response->getBody());
                var_dump($BbRestException);
            }
        } catch (RequestException $e) {
            print 'Error: ' . $e->getMessage();
        }

        return $course;
    }

    public function deleteCourse($access_token, $course_id) {

        $response = $this->client->request('DELETE', Constants::HOSTNAME . Constants::COURSE_PATH . '/' . $course_id, [
            'headers' => [
                'Authorization' => 'Bearer ' . $access_token,
                'Content-Type' => 'application/json'],
        ] );

        try {
            
            if (204 == $response->getStatusCode()) {
                Log::debug("Course Deleted");
            } else {
                Log::error('Unexpected HTTP status: ' . $response->getStatusCode() . ' ' .
                    $response->getReasonPhrase());
                $BbRestException = json_decode($response->getBody());
                var_dump($BbRestException);
                return FALSE;
            }
        } catch (RequestException $e) {
            print 'Error: ' . $e->getMessage();
            return FALSE;
        }

        return TRUE;
    }

    public function createUser($access_token, $dsk_id) {
        
        $user = new User();

        $user->dataSourceId = $dsk_id;
        $user->availability = new Availability();
        $user->name = new Name();
        $user->contact = new Contact();

        $response = $this->client->request('POST', Constants::HOSTNAME . CONSTANTS::USER_PATH, [
            'body' => json_encode($user),
            'headers' => [
                'Authorization' => 'Bearer ' . $access_token,
                'Content-Type' => 'application/json'],
        ] );

        try {
            
            if (201 == $response->getStatusCode()) {
                Log::debug(" Create User...");
                $user = json_decode($response->getBody());
            } else {
                Log::error('Unexpected HTTP status: ' . $response->getStatusCode() . ' ' .
                    $response->getReasonPhrase());
                $BbRestException = json_decode($response->getBody());
                var_dump($BbRestException);
            }
        } catch (RequestException $e) {
            print 'Error: ' . $e->getMessage();
        }

        return $user;
    }

    public function readUser($access_token, $user_id) {
        
        $user = new User();

        $response = $this->client->request('GET', Constants::HOSTNAME . Constants::USER_PATH . '/' . $user_id, [
            'headers' => ['Authorization' => 'Bearer ' . $access_token ]
        ] );



        try {
            
            if (200 == $response->getStatusCode()) {
                Log::debug(" Read User...");
                $user = json_decode($response->getBody());
            } else {
                Log::error('Unexpected HTTP status: ' . $response->getStatusCode() . ' ' .
                    $response->getReasonPhrase());
                $BbRestException = json_decode($response->getBody());
                var_dump($BbRestException);
            }
        } catch (RequestException $e) {
            print 'Error: ' . $e->getMessage();
        }

        return $user;
    }

    public function updateUser($access_token, $dsk_id, $user_id, $user_uuid, $user_created) {
        
        $user = new User();

        $user->id = $user_id;
        $user->uuid = $user_uuid;
        $user->created = $user_created;
        $user->dataSourceId = $dsk_id;

        $response = $this->client->request('PATCH', Constants::HOSTNAME . Constants::USER_PATH . '/' . $user_id, [
            'json' => $user,
            'headers' => [ 'Authorization' => 'Bearer ' . $access_token ],
            'synchronous' => true
        ] );

        try {
            
            if (200 == $response->getStatusCode()) {
                Log::debug(" Update User...");
                $user = json_decode($response->getBody());
            } else {
                Log::error('Unexpected HTTP status: ' . $response->getStatusCode() . ' ' .
                    $response->getReasonPhrase());
                $BbRestException = json_decode($response->getBody());
                var_dump($BbRestException);
            }
        } catch (RequestException $e) {
            print 'Error: ' . $e->getMessage();
        }

        return $user;
    }

    public function deleteUser($access_token, $user_id) {

        $response = $this->client->request('DELETE', Constants::HOSTNAME . Constants::USER_PATH . '/' . $user_id, [
            'headers' => [
                'Authorization' => 'Bearer ' . $access_token,
                'Content-Type' => 'application/json'],
        ] );

        try {
            
            if (204 == $response->getStatusCode()) {
                Log::debug("User Deleted");
            } else {
                Log::error('Unexpected HTTP status: ' . $response->getStatusCode() . ' ' .
                    $response->getReasonPhrase());
                $BbRestException = json_decode($response->getBody());
                var_dump($BbRestException);
                return FALSE;
            }
        } catch (RequestException $e) {
            print 'Error: ' . $e->getMessage();
            return FALSE;
        }

        return TRUE;
    }


    public function createMembership($access_token, $dsk_id, $course_id, $user_id, $courseRoleId) {
        
        $membership = new Membership();

        $membership->dataSourceId = $dsk_id;
        $membership->availability = new Availability();
        $membership->userId = $user_id;
        $membership->courseId = $course_id;
        $membership->courseRoleId = $courseRoleId;

        $response = $this->client->request('PUT', Constants::HOSTNAME . CONSTANTS::COURSE_PATH . '/' . $course_id . '/users/' . $user_id, [
            'body' => json_encode($membership),
            'headers' => [
                'Authorization' => 'Bearer ' . $access_token,
                'Content-Type' => 'application/json'],
        ] );

        //$request = new HTTP_Request2(Constants::HOSTNAME . Constants::COURSE_PATH . '/' . $course_id . '/users/' . $user_id, HTTP_Request2::METHOD_PUT);
        //$request->setHeader('Authorization', 'Bearer ' . $access_token);
        //$request->setHeader('Content-Type', 'application/json');
        //$request->setBody(json_encode($membership));

        try {
            
            if (201 == $response->getStatusCode()) {
                Log::debug(" Create Membership...");
                $membership = json_decode($response->getBody());
            } else {
                Log::error('Unexpected HTTP status: ' . $response->getStatusCode() . ' ' .
                    $response->getReasonPhrase());
                $BbRestException = json_decode($response->getBody());
                var_dump($BbRestException);
            }
        } catch (RequestException $e) {
            print 'Error: ' . $e->getMessage();
        }

        return $membership;
    }

    public function readMembership($access_token, $course_id, $user_id) {
        
        $membership = new Membership();

        $response = $this->client->request('GET', Constants::HOSTNAME . Constants::COURSE_PATH . '/' . $course_id . '/users/' . $user_id, [
            'headers' => ['Authorization' => 'Bearer ' . $access_token ]
        ] );



        try {
            
            if (200 == $response->getStatusCode()) {
                Log::debug(" Read Membership...");
                $membership = json_decode($response->getBody());
            } else {
                Log::error('Unexpected HTTP status: ' . $response->getStatusCode() . ' ' .
                    $response->getReasonPhrase());
                $BbRestException = json_decode($response->getBody());
                var_dump($BbRestException);
            }
        } catch (RequestException $e) {
            print 'Error: ' . $e->getMessage();
        }

        return $membership;
    }

    public function updateMembership($access_token, $dsk_id, $course_id, $user_id, $membership_created) {
        
        $membership = new Membership();

        $membership->dataSourceId = $dsk_id;
        $membership->userId = $user_id;
        $membership->courseId = $course_id;
        $membership->created = $membership_created;

        $response = $this->client->request('PATCH', Constants::HOSTNAME . Constants::COURSE_PATH . '/' . $course_id . '/users/' . $user_id, [
            'json' => $membership,
            'headers' => [ 'Authorization' => 'Bearer ' . $access_token ],
            'synchronous' => true
        ] );

        try {
            
            if (200 == $response->getStatusCode()) {
                Log::debug(" Update Membership...");
                $membership = json_decode($response->getBody());
            } else {
                Log::error('Unexpected HTTP status: ' . $response->getStatusCode() . ' ' .
                    $response->getReasonPhrase());
                $BbRestException = json_decode($response->getBody());
                var_dump($BbRestException);
            }
        } catch (RequestException $e) {
            print 'Error: ' . $e->getMessage();
        }

        return $membership;
    }

    public function deleteMembership($access_token, $course_id, $user_id) {

        $response = $this->client->request('DELETE', Constants::HOSTNAME . Constants::COURSE_PATH . '/' . $course_id . '/users/' . $user_id, [
            'headers' => [
                'Authorization' => 'Bearer ' . $access_token,
                'Content-Type' => 'application/json'],
        ] );

        try {
            
            if (204 == $response->getStatusCode()) {
                Log::debug("Membership Deleted");
            } else {
                Log::error('Unexpected HTTP status: ' . $response->getStatusCode() . ' ' .
                    $response->getReasonPhrase());
                $BbRestException = json_decode($response->getBody());
                var_dump($BbRestException);
                return FALSE;
            }
        } catch (RequestException $e) {
            print 'Error: ' . $e->getMessage();
            return FALSE;
        }

        return TRUE;
    }


    public function createEnrollment($access_token, $dsk_id, $course_id, $user_id) {
        
        $membership = new Membership();

        $membership->dataSourceId = $dsk_id;
        $membership->availability = new Availability();
        $membership->userId = $user_id;
        $membership->courseId = $course_id;

        $response = $this->client->request('PUT', Constants::HOSTNAME . Constants::COURSE_PATH . '/' . $course_id . '/users/' . $user_id, [
            'body' => json_encode($membership),
            'headers' => [
                'Authorization' => 'Bearer ' . $access_token,
                'Content-Type' => 'application/json'],
        ] );



        try {
            
            if (201 == $response->getStatusCode()) {
                Log::debug(" Create Membership...");
                $membership = json_decode($response->getBody());
            } else {
                Log::error('Unexpected HTTP status: ' . $response->getStatusCode() . ' ' .
                    $response->getReasonPhrase());
                $BbRestException = json_decode($response->getBody());
                var_dump($BbRestException);
            }
        } catch (RequestException $e) {
            print 'Error: ' . $e->getMessage();
        }

        return $membership;
    }

    public function readEnrollment($access_token, $course_id, $user_id) {
        
        $membership = new Membership();

        $response = $this->client->request('GET', Constants::HOSTNAME . Constants::COURSE_PATH . '/' . $course_id . '/users/' . $user_id, [
            'headers' => ['Authorization' => 'Bearer ' . $access_token ]
        ] );


        try {
            
            if (200 == $response->getStatusCode()) {
                Log::debug(" Read Membership...");
                $membership = json_decode($response->getBody());
            } else {
                Log::error('Unexpected HTTP status: ' . $response->getStatusCode() . ' ' .
                    $response->getReasonPhrase());
                $BbRestException = json_decode($response->getBody());
                var_dump($BbRestException);
            }
        } catch (RequestException $e) {
            print 'Error: ' . $e->getMessage();
        }

        return $membership;
    }

    public function updateEnrollment($access_token, $dsk_id, $course_id, $user_id, $membership_created) {
        
        $membership = new Membership();

        $membership->dataSourceId = $dsk_id;
        $membership->userId = $user_id;
        $membership->courseId = $course_id;
        $membership->created = $membership_created;

        $response = $this->client->request('PATCH', Constants::HOSTNAME . Constants::COURSE_PATH . '/' . $course_id . '/users/' . $user_id, [
            'json' => $membership,
            'headers' => [ 'Authorization' => 'Bearer ' . $access_token ],
            'synchronous' => true
        ] );

        try {
            
            if (200 == $response->getStatusCode()) {
                Log::debug(" Update Membership...");
                $membership = json_decode($response->getBody());
            } else {
                Log::error('Unexpected HTTP status: ' . $response->getStatusCode() . ' ' .
                    $response->getReasonPhrase());
                $BbRestException = json_decode($response->getBody());
                var_dump($BbRestException);
            }
        } catch (RequestException $e) {
            print 'Error: ' . $e->getMessage();
        }

        return $membership;
    }

    public function deleteEnrollment($access_token, $course_id, $user_id) {

        $response = $this->client->request('DELETE', Constants::HOSTNAME . Constants::COURSE_PATH . '/' . $course_id . '/users/' . $user_id, [
            'headers' => [
                'Authorization' => 'Bearer ' . $access_token,
                'Content-Type' => 'application/json'],
        ] );

        try {
            
            if (204 == $response->getStatusCode()) {
                Log::debug("Membership Deleted");
            } else {
                Log::error('Unexpected HTTP status: ' . $response->getStatusCode() . ' ' .
                    $response->getReasonPhrase());
                $BbRestException = json_decode($response->getBody());
                var_dump($BbRestException);
                return FALSE;
            }
        } catch (RequestException $e) {
            print 'Error: ' . $e->getMessage();
            return FALSE;
        }

        return TRUE;
    }


}