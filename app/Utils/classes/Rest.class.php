<?php
namespace App\Utils\classes\Rest;

require_once 'HTTP/Request2.php';
//require_once 'classes/Availability.class.php';
//require_once 'classes/Constants.class.php';
//require_once 'classes/Contact.class.php';
//require_once 'classes/Name.class.php';

use App\Utils\classes\Contact;
use App\Utils\classes\Name;
use App\Utils\classes\Availability;
use App\Utils\classes\Constants;
use App\Utils\classes\Token;


class RestClass {

	public $constants = '';
	public $doLogging = true;

	private function Log($logmsg) {
	    if ($this->doLogging) {
	        print $logmsg;
        }
    }
	
	public function authorize() {
		
		$constants = new Constants();
		$token = new Token();
		
		$request = new HTTP_Request2($constants->HOSTNAME . $constants->AUTH_PATH, HTTP_Request2::METHOD_POST);
		$request->setAuth($constants->KEY, $constants->SECRET, HTTP_Request2::AUTH_BASIC);
		$request->setBody('grant_type=client_credentials');
		$request->setHeader('Content-Type', 'application/x-www-form-urlencoded');
		$request->setAdapter('curl');
		
		
		try {
			$response = $request->send();
			if (200 == $response->getStatus()) {
				$this->Log(" Authorize Application...\n");
				$token = json_decode($response->getBody());
			} else {
				print 'Unexpected HTTP status: ' . $response->getStatus() . ' ' .
						$response->getReasonPhrase();
				$BbRestException = json_decode($response->getBody());
				var_dump($BbRestException);
			}
		} catch (HTTP_Request2_Exception $e) {
			print 'Error: ' . $e->getMessage();
		}
		
		return $token;
	}
	
		public function createDatasource($access_token, $external_id, $description) {
			$constants = new Constants();
			$datasource = new Datasource();
			$datasource->externalId = $external_id;
			$datasource->description = $description;
			
			$request = new HTTP_Request2($constants->HOSTNAME . $constants->DSK_PATH, HTTP_Request2::METHOD_POST);
			$request->setHeader('Authorization', 'Bearer ' . $access_token);
			$request->setHeader('Content-Type', 'application/json');
			$request->setBody(json_encode($datasource));
			
			try {
				$response = $request->send();
				if (201 == $response->getStatus()) {
					print "\n Create Datasource...\n";
					$datasource = json_decode($response->getBody());
				} else {
					print 'Unexpected HTTP status: ' . $response->getStatus() . ' ' .
							$response->getReasonPhrase();
					$BbRestException = json_decode($response->getBody());
					var_dump($BbRestException);
				}
			} catch (HTTP_Request2_Exception $e) {
				print 'Error: ' . $e->getMessage();
			}
			
			return $datasource;
		}

		public function GetAllDatasources($access_token) {
            $constants = new Constants();
            $request = new HTTP_Request2($constants->HOSTNAME . "/learn/api/public/v1/dataSources", HTTP_Request2::METHOD_GET);
            $request->setHeader('Authorization', 'Bearer ' . $access_token);
            $datasource = new Datasource();

            try {
                $response = $request->send();
                if (200 == $response->getStatus()) {
                    print "\n Read Datasource...\n";
                    $datasource = json_decode($response->getBody());
                } else {
                    print 'Unexpected HTTP status: ' . $response->getStatus() . ' ' .
                        $response->getReasonPhrase();
                    $BbRestException = json_decode($response->getBody());
                    var_dump($BbRestException);
                }
            } catch (HTTP_Request2_Exception $e) {
                print 'Error: ' . $e->getMessage();
            }

            return $datasource;
        }
		
		public function readDatasource($access_token, $dsk_id) {
			$constants = new Constants();
			$datasource = new Datasource();
			
			$request = new HTTP_Request2($constants->HOSTNAME . $constants->DSK_PATH . '/' . $dsk_id, HTTP_Request2::METHOD_GET);
			$request->setHeader('Authorization', 'Bearer ' . $access_token);
		
			try {
				$response = $request->send();
				if (200 == $response->getStatus()) {
					print "\n Read Datasource...\n";
					$datasource = json_decode($response->getBody());
				} else {
					print 'Unexpected HTTP status: ' . $response->getStatus() . ' ' .
							$response->getReasonPhrase();
					$BbRestException = json_decode($response->getBody());
					var_dump($BbRestException);
				}
			} catch (HTTP_Request2_Exception $e) {
				print 'Error: ' . $e->getMessage();
			}
		
			return $datasource;
		}
		
		public function updateDatasource($access_token, $dsk_id) {
			$constants = new Constants();
			$datasource = new Datasource();
			
			$datasource->id = $dsk_id;
			
			$request = new HTTP_Request2($constants->HOSTNAME . $constants->DSK_PATH . '/' . $dsk_id, 'PATCH');
			$request->setHeader('Authorization', 'Bearer ' . $access_token);
			$request->setHeader('Content-Type', 'application/json');
			$request->setBody(json_encode($datasource));
			
			try {
				$response = $request->send();
				if (200 == $response->getStatus()) {
					print "\n Update Datasource...\n";
					$datasource = json_decode($response->getBody());
				} else {
					print 'Unexpected HTTP status: ' . $response->getStatus() . ' ' .
							$response->getReasonPhrase();
					$BbRestException = json_decode($response->getBody());
					var_dump($BbRestException);
				}
			} catch (HTTP_Request2_Exception $e) {
				print 'Error: ' . $e->getMessage();
			}
		
			return $datasource;
		}
		
		public function deleteDatasource($access_token, $dsk_id) {
			$constants = new Constants();
			
			$request = new HTTP_Request2($constants->HOSTNAME . $constants->DSK_PATH . '/' . $dsk_id, HTTP_Request2::METHOD_DELETE);
			$request->setHeader('Authorization', 'Bearer ' . $access_token);
			$request->setHeader('Content-Type', 'application/json');
		
			try {
				$response = $request->send();
				if (204 == $response->getStatus()) {
					print "Datasource Deleted";
				} else {
					print 'Unexpected HTTP status: ' . $response->getStatus() . ' ' .
							$response->getReasonPhrase();
					$BbRestException = json_decode($response->getBody());
					var_dump($BbRestException);
					return FALSE;
				}
			} catch (HTTP_Request2_Exception $e) {
				print 'Error: ' . $e->getMessage();
				return FALSE;
			}
		
			return TRUE;
		}
		
		public function createTerm($access_token, $dsk_id) {
			$constants = new Constants();
			$term = new Term();
			
			$term->dataSourceId = $dsk_id;
			$term->availability = new Availability();
		
			$request = new HTTP_Request2($constants->HOSTNAME . $constants->TERM_PATH, HTTP_Request2::METHOD_POST);
			$request->setHeader('Authorization', 'Bearer ' . $access_token);
			$request->setHeader('Content-Type', 'application/json');
			$request->setBody(json_encode($term));
		
			try {
				$response = $request->send();
				if (201 == $response->getStatus()) {
					print "\n Create Term...\n";
					$term = json_decode($response->getBody());
				} else {
					print 'Unexpected HTTP status: ' . $response->getStatus() . ' ' .
							$response->getReasonPhrase();
							$BbRestException = json_decode($response->getBody());
							var_dump($BbRestException);
				}
			} catch (HTTP_Request2_Exception $e) {
				print 'Error: ' . $e->getMessage();
			}
		
			return $term;
		}

		public function GetAllTerms($access_token) {
	        $constants = new Constants();

            $request = new HTTP_Request2($constants->HOSTNAME . 'learn/api/public/v1/terms', HTTP_Request2::METHOD_GET);
            $request->setHeader('Authorization', 'Bearer ' . $access_token);

            $term = new Term();

            try {
                $response = $request->send();
                if (200 == $response->getStatus()) {
                    print "\n Getting all terms Terms...\n";
                    $term = json_decode($response->getBody());
                } else {
                    print 'Unexpected HTTP status: ' . $response->getStatus() . ' ' .
                        $response->getReasonPhrase();
                    $BbRestException = json_decode($response->getBody());
                    var_dump($BbRestException);
                }
            } catch (HTTP_Request2_Exception $e) {
                print 'Error: ' . $e->getMessage();
            }

            return $term;
        }
		
		public function readTerm($access_token, $term_id) {
			$constants = new Constants();
			$term = new Term();
	
			$request = new HTTP_Request2($constants->HOSTNAME . $constants->TERM_PATH . '/' . $term_id, HTTP_Request2::METHOD_GET);
			$request->setHeader('Authorization', 'Bearer ' . $access_token);
		
			try {
				$response = $request->send();
				if (200 == $response->getStatus()) {
					print "\n Read Term...\n";
					$term = json_decode($response->getBody());
				} else {
					print 'Unexpected HTTP status: ' . $response->getStatus() . ' ' .
							$response->getReasonPhrase();
							$BbRestException = json_decode($response->getBody());
							var_dump($BbRestException);
				}
			} catch (HTTP_Request2_Exception $e) {
				print 'Error: ' . $e->getMessage();
			}
		
			return $term;
		}
		
		public function updateTerm($access_token, $dsk_id, $term_id) {
			$constants = new Constants();
			$term = new Term();
		
			$term->id = $term_id;
			$term->dataSourceId = $dsk_id;
		
			$request = new HTTP_Request2($constants->HOSTNAME . $constants->TERM_PATH . '/' . $term_id, 'PATCH');
			$request->setHeader('Authorization', 'Bearer ' . $access_token);
			$request->setHeader('Content-Type', 'application/json');
			$request->setBody(json_encode($term));
		
			try {
				$response = $request->send();
				if (200 == $response->getStatus()) {
					print "\n Update Term...\n";
					$datasource = json_decode($response->getBody());
				} else {
					print 'Unexpected HTTP status: ' . $response->getStatus() . ' ' .
							$response->getReasonPhrase();
							$BbRestException = json_decode($response->getBody());
							var_dump($BbRestException);
				}
			} catch (HTTP_Request2_Exception $e) {
				print 'Error: ' . $e->getMessage();
			}
		
			return $term;
		}
		
		public function deleteTerm($access_token, $term_id) {
			$constants = new Constants();
			
			$request = new HTTP_Request2($constants->HOSTNAME . $constants->TERM_PATH . '/' . $term_id, HTTP_Request2::METHOD_DELETE);
			$request->setHeader('Authorization', 'Bearer ' . $access_token);
			$request->setHeader('Content-Type', 'application/json');
		
			try {
				$response = $request->send();
				if (204 == $response->getStatus()) {
					print "Term Deleted";
				} else {
					print 'Unexpected HTTP status: ' . $response->getStatus() . ' ' .
							$response->getReasonPhrase();
							$BbRestException = json_decode($response->getBody());
							var_dump($BbRestException);
							return FALSE;
				}
			} catch (HTTP_Request2_Exception $e) {
				print 'Error: ' . $e->getMessage();
				return FALSE;
			}
		
			return TRUE;
		}

		public function createCourseFromObject($access_token, Course $course) {
	        $constants = new Constants();

            $request = new HTTP_Request2($constants->HOSTNAME . $constants->COURSE_PATH, HTTP_Request2::METHOD_POST);
            $request->setHeader('Authorization', 'Bearer ' . $access_token);
            $request->setHeader('Content-Type', 'application/json');
            $request->setBody(json_encode($course));

            try {
                $response = $request->send();
                if (201 == $response->getStatus()) {
                    print "\n Create Course...\n";
                    $course = json_decode($response->getBody());
                } else {
                    print 'Unexpected HTTP status: ' . $response->getStatus() . ' ' .
                        $response->getReasonPhrase();
                    $BbRestException = json_decode($response->getBody());
                    var_dump($BbRestException);
                }
            } catch (HTTP_Request2_Exception $e) {
                print 'Error: ' . $e->getMessage();
            }

            return $course;
        }
		
		public function createCourse($access_token, $dsk_id, $term_id) {
			$constants = new Constants();
			$course = new Course();
		
			$course->dataSourceId = $dsk_id;
			$course->termId = $term_id;
			$course->availability = new Availability();
		
			$request = new HTTP_Request2($constants->HOSTNAME . $constants->COURSE_PATH, HTTP_Request2::METHOD_POST);
			$request->setHeader('Authorization', 'Bearer ' . $access_token);
			$request->setHeader('Content-Type', 'application/json');
			$request->setBody(json_encode($course));
		
			try {
				$response = $request->send();
				if (201 == $response->getStatus()) {
					print "\n Create Course...\n";
					$course = json_decode($response->getBody());
				} else {
					print 'Unexpected HTTP status: ' . $response->getStatus() . ' ' .
							$response->getReasonPhrase();
							$BbRestException = json_decode($response->getBody());
							var_dump($BbRestException);
				}
			} catch (HTTP_Request2_Exception $e) {
				print 'Error: ' . $e->getMessage();
			}
		
			return $course;
		}

		public function getCourses($access_token) {
            $constants = new Constants();
	        $reqpath = $constants->HOSTNAME . $constants->COURSE_PATH;
            $request = new HTTP_Request2($constants->HOSTNAME . $constants->COURSE_PATH, HTTP_Request2::METHOD_GET);
            $request->setHeader('Authorization', 'Bearer ' . $access_token);

            try {
                $response = $request->send();
                if (200 == $response->getStatus()) {
                    print "\n Getting All Courses...\n";
                    $course = json_decode($response->getBody());
                } else {
                    print 'Unexpected HTTP status: ' . $response->getStatus() . ' ' .
                        $response->getReasonPhrase();
                    $BbRestException = json_decode($response->getBody());
                    var_dump($BbRestException);
                }
            } catch (HTTP_Request2_Exception $e) {
                print 'Error: ' . $e->getMessage();
            }

            return $course;
        }
		
		public function readCourse($access_token, $course_id) {
			$constants = new Constants();
			$course = new Course();
		    $readpath = $constants->HOSTNAME . $constants->COURSE_PATH . '/' . $course_id;
		    print $readpath;
			$request = new HTTP_Request2($constants->HOSTNAME . $constants->COURSE_PATH . '/' . $course_id, HTTP_Request2::METHOD_GET);
			$request->setHeader('Authorization', 'Bearer ' . $access_token);
            //$request->setAdapter('curl');

			try {
				$response = $request->send();
				if (200 == $response->getStatus()) {
					print "\n Read Course with id = " . $course_id . "\n";
					$course = json_decode($response->getBody());
				} else {
					print 'Unexpected HTTP status: ' . $response->getStatus() . ' ' .
							$response->getReasonPhrase();
							$BbRestException = json_decode($response->getBody());
							var_dump($BbRestException);
				}
			} catch (HTTP_Request2_Exception $e) {
				print 'Error: ' . $e->getMessage();
			}
		
			return $course;
		}
		
		public function updateCourse($access_token, $dsk_id, $course_id, $course_uuid, $course_created, $termId) {
			$constants = new Constants();
			$course = new Course();
		
			$course->id = $course_id;
			$course->uuid = $course_uuid;
			$course->created = $course_created;
			$course->dataSourceId = $dsk_id;
			$course->termId = $termId;
		
			$request = new HTTP_Request2($constants->HOSTNAME . $constants->COURSE_PATH . '/' . $course_id, 'PATCH');
			$request->setHeader('Authorization', 'Bearer ' . $access_token);
			$request->setHeader('Content-Type', 'application/json');
			$request->setBody(json_encode($course));
		
			try {
				$response = $request->send();
				if (200 == $response->getStatus()) {
					print "\n Update Course...\n";
					$course = json_decode($response->getBody());
				} else {
					print 'Unexpected HTTP status: ' . $response->getStatus() . ' ' .
							$response->getReasonPhrase();
							$BbRestException = json_decode($response->getBody());
							var_dump($BbRestException);
				}
			} catch (HTTP_Request2_Exception $e) {
				print 'Error: ' . $e->getMessage();
			}
		
			return $course;
		}
		
		public function deleteCourse($access_token, $course_id) {
			$constants = new Constants();
		
			$request = new HTTP_Request2($constants->HOSTNAME . $constants->COURSE_PATH . '/' . $course_id, HTTP_Request2::METHOD_DELETE);
			$request->setHeader('Authorization', 'Bearer ' . $access_token);
			$request->setHeader('Content-Type', 'application/json');
		
			try {
				$response = $request->send();
				if (204 == $response->getStatus()) {
					print "Course Deleted";
				} else {
					print 'Unexpected HTTP status: ' . $response->getStatus() . ' ' .
							$response->getReasonPhrase();
							$BbRestException = json_decode($response->getBody());
							var_dump($BbRestException);
							return FALSE;
				}
			} catch (HTTP_Request2_Exception $e) {
				print 'Error: ' . $e->getMessage();
				return FALSE;
			}
		
			return TRUE;
		}
		
		public function createUser($access_token, $dsk_id) {
			$constants = new Constants();
			$user = new User();
		
			$user->dataSourceId = $dsk_id;
			$user->availability = new Availability();
			$user->name = new Name();
			$user->contact = new Contact();
		
			$request = new HTTP_Request2($constants->HOSTNAME . $constants->USER_PATH, HTTP_Request2::METHOD_POST);
			$request->setHeader('Authorization', 'Bearer ' . $access_token);
			$request->setHeader('Content-Type', 'application/json');
			$request->setBody(json_encode($user));
		
			try {
				$response = $request->send();
				if (201 == $response->getStatus()) {
					print "\n Create User...\n";
					$user = json_decode($response->getBody());
				} else {
					print 'Unexpected HTTP status: ' . $response->getStatus() . ' ' .
							$response->getReasonPhrase();
							$BbRestException = json_decode($response->getBody());
							var_dump($BbRestException);
				}
			} catch (HTTP_Request2_Exception $e) {
				print 'Error: ' . $e->getMessage();
			}
		
			return $user;
		}
		
		public function readUser($access_token, $user_id) {
			$constants = new Constants();
			$user = new User();

			print($constants->HOSTNAME . $constants->USER_PATH . '/' . $user_id);
			$request = new HTTP_Request2($constants->HOSTNAME . $constants->USER_PATH . '/' . $user_id, HTTP_Request2::METHOD_GET);
			$request->setHeader('Authorization', 'Bearer ' . $access_token);
		
			try {
				$response = $request->send();
				if (200 == $response->getStatus()) {
					print "\n Read User...\n";
					$user = json_decode($response->getBody());
				} else {
					print 'Unexpected HTTP status: ' . $response->getStatus() . ' ' .
							$response->getReasonPhrase();
							$BbRestException = json_decode($response->getBody());
							var_dump($BbRestException);
				}
			} catch (HTTP_Request2_Exception $e) {
				print 'Error: ' . $e->getMessage();
			}
		
			return $user;
		}
		
		public function updateUser($access_token, $dsk_id, $user_id, $user_uuid, $user_created) {
			$constants = new Constants();
			$user = new User();
		
			$user->id = $user_id;
			$user->uuid = $user_uuid;
			$user->created = $user_created;
			$user->dataSourceId = $dsk_id;
		
			$request = new HTTP_Request2($constants->HOSTNAME . $constants->USER_PATH . '/' . $user_id, 'PATCH');
			$request->setHeader('Authorization', 'Bearer ' . $access_token);
			$request->setHeader('Content-Type', 'application/json');
			$request->setBody(json_encode($user));
		
			try {
				$response = $request->send();
				if (200 == $response->getStatus()) {
					print "\n Update User...\n";
					$user = json_decode($response->getBody());
				} else {
					print 'Unexpected HTTP status: ' . $response->getStatus() . ' ' .
							$response->getReasonPhrase();
							$BbRestException = json_decode($response->getBody());
							var_dump($BbRestException);
				}
			} catch (HTTP_Request2_Exception $e) {
				print 'Error: ' . $e->getMessage();
			}
		
			return $user;
		}
		
		public function deleteUser($access_token, $user_id) {
			$constants = new Constants();
		
			$request = new HTTP_Request2($constants->HOSTNAME . $constants->USER_PATH . '/' . $user_id, HTTP_Request2::METHOD_DELETE);
			$request->setHeader('Authorization', 'Bearer ' . $access_token);
			$request->setHeader('Content-Type', 'application/json');
		
			try {
				$response = $request->send();
				if (204 == $response->getStatus()) {
					print "User Deleted";
				} else {
					print 'Unexpected HTTP status: ' . $response->getStatus() . ' ' .
							$response->getReasonPhrase();
							$BbRestException = json_decode($response->getBody());
							var_dump($BbRestException);
							return FALSE;
				}
			} catch (HTTP_Request2_Exception $e) {
				print 'Error: ' . $e->getMessage();
				return FALSE;
			}
		
			return TRUE;
		}
		
	
		public function createMembership($access_token, $dsk_id, $course_id, $user_id, $courseRoleId) {
			$constants = new Constants();
			$membership = new Membership();
		
			$membership->dataSourceId = $dsk_id;
			$membership->availability = new Availability();
			$membership->userId = $user_id;
			$membership->courseId = $course_id;
			$membership->courseRoleId = $courseRoleId;
	
		    $path = $constants->HOSTNAME . $constants->COURSE_PATH . '/' . $course_id . '/users/' . $user_id;
		    print $path;
			$request = new HTTP_Request2($constants->HOSTNAME . $constants->COURSE_PATH . '/' . $course_id . '/users/' . $user_id, HTTP_Request2::METHOD_PUT);
			$request->setHeader('Authorization', 'Bearer ' . $access_token);
			$request->setHeader('Content-Type', 'application/json');
			$request->setBody(json_encode($membership));
		
			try {
				$response = $request->send();
				if (201 == $response->getStatus()) {
					print "\n Create Membership...\n";
					$membership = json_decode($response->getBody());
				} else {
					print 'Unexpected HTTP status: ' . $response->getStatus() . ' ' .
							$response->getReasonPhrase();
							$BbRestException = json_decode($response->getBody());
							var_dump($BbRestException);
				}
			} catch (HTTP_Request2_Exception $e) {
				print 'Error: ' . $e->getMessage();
			}
		
			return $membership;
		}
		
		public function readMembership($access_token, $course_id, $user_id) {
			$constants = new Constants();
			$membership = new Membership();
		
			$request = new HTTP_Request2($constants->HOSTNAME . $constants->COURSE_PATH . '/' . $course_id . '/users/' . $user_id,  HTTP_Request2::METHOD_GET);
			$request->setHeader('Authorization', 'Bearer ' . $access_token);
		
			try {
				$response = $request->send();
				if (200 == $response->getStatus()) {
					print "\n Read Membership...\n";
					$membership = json_decode($response->getBody());
				} else {
					print 'Unexpected HTTP status: ' . $response->getStatus() . ' ' .
							$response->getReasonPhrase();
							$BbRestException = json_decode($response->getBody());
							var_dump($BbRestException);
				}
			} catch (HTTP_Request2_Exception $e) {
				print 'Error: ' . $e->getMessage();
			}
		
			return $membership;
		}
		
		public function updateMembership($access_token, $dsk_id, $course_id, $user_id, $membership_created) {
			$constants = new Constants();
			$membership = new Membership();
		
			$membership->dataSourceId = $dsk_id;
			$membership->userId = $user_id;
			$membership->courseId = $course_id;
			$membership->created = $membership_created;
		
			$request = new HTTP_Request2($constants->HOSTNAME . $constants->COURSE_PATH . '/' . $course_id . '/users/' . $user_id, 'PATCH');
			$request->setHeader('Authorization', 'Bearer ' . $access_token);
			$request->setHeader('Content-Type', 'application/json');
			$request->setBody(json_encode($membership));
		
			try {
				$response = $request->send();
				if (200 == $response->getStatus()) {
					print "\n Update Membership...\n";
					$membership = json_decode($response->getBody());
				} else {
					print 'Unexpected HTTP status: ' . $response->getStatus() . ' ' .
							$response->getReasonPhrase();
							$BbRestException = json_decode($response->getBody());
							var_dump($BbRestException);
				}
			} catch (HTTP_Request2_Exception $e) {
				print 'Error: ' . $e->getMessage();
			}
		
			return $membership;
		}
		
		public function deleteMembership($access_token, $course_id, $user_id) {
			$constants = new Constants();
		
			$request = new HTTP_Request2($constants->HOSTNAME . $constants->COURSE_PATH . '/' . $course_id . '/users/' . $user_id, HTTP_Request2::METHOD_DELETE);
			$request->setHeader('Authorization', 'Bearer ' . $access_token);
			$request->setHeader('Content-Type', 'application/json');
		
			try {
				$response = $request->send();
				if (204 == $response->getStatus()) {
					print "Membership Deleted";
				} else {
					print 'Unexpected HTTP status: ' . $response->getStatus() . ' ' .
							$response->getReasonPhrase();
							$BbRestException = json_decode($response->getBody());
							var_dump($BbRestException);
							return FALSE;
				}
			} catch (HTTP_Request2_Exception $e) {
				print 'Error: ' . $e->getMessage();
				return FALSE;
			}
		
			return TRUE;
		}


    public function createEnrollment($access_token, $dsk_id, $course_id, $user_id) {
        $constants = new Constants();
        $membership = new Membership();

        $membership->dataSourceId = $dsk_id;
        $membership->availability = new Availability();
        $membership->userId = $user_id;
        $membership->courseId = $course_id;


        $request = new HTTP_Request2($constants->HOSTNAME . $constants->COURSE_PATH . '/' . $course_id . '/users/' . $user_id, HTTP_Request2::METHOD_PUT);
        $request->setHeader('Authorization', 'Bearer ' . $access_token);
        $request->setHeader('Content-Type', 'application/json');
        $request->setBody(json_encode($membership));

        try {
            $response = $request->send();
            if (201 == $response->getStatus()) {
                print "\n Create Membership...\n";
                $membership = json_decode($response->getBody());
            } else {
                print 'Unexpected HTTP status: ' . $response->getStatus() . ' ' .
                    $response->getReasonPhrase();
                $BbRestException = json_decode($response->getBody());
                var_dump($BbRestException);
            }
        } catch (HTTP_Request2_Exception $e) {
            print 'Error: ' . $e->getMessage();
        }

        return $membership;
    }

    public function readEnrollment($access_token, $course_id, $user_id) {
        $constants = new Constants();
        $membership = new Membership();

        $request = new HTTP_Request2($constants->HOSTNAME . $constants->COURSE_PATH . '/' . $course_id . '/users/' . $user_id,  HTTP_Request2::METHOD_GET);
        $request->setHeader('Authorization', 'Bearer ' . $access_token);

        try {
            $response = $request->send();
            if (200 == $response->getStatus()) {
                print "\n Read Membership...\n";
                $membership = json_decode($response->getBody());
            } else {
                print 'Unexpected HTTP status: ' . $response->getStatus() . ' ' .
                    $response->getReasonPhrase();
                $BbRestException = json_decode($response->getBody());
                var_dump($BbRestException);
            }
        } catch (HTTP_Request2_Exception $e) {
            print 'Error: ' . $e->getMessage();
        }

        return $membership;
    }

    public function updateEnrollment($access_token, $dsk_id, $course_id, $user_id, $membership_created) {
        $constants = new Constants();
        $membership = new Membership();

        $membership->dataSourceId = $dsk_id;
        $membership->userId = $user_id;
        $membership->courseId = $course_id;
        $membership->created = $membership_created;

        $request = new HTTP_Request2($constants->HOSTNAME . $constants->COURSE_PATH . '/' . $course_id . '/users/' . $user_id, 'PATCH');
        $request->setHeader('Authorization', 'Bearer ' . $access_token);
        $request->setHeader('Content-Type', 'application/json');
        $request->setBody(json_encode($membership));

        try {
            $response = $request->send();
            if (200 == $response->getStatus()) {
                print "\n Update Membership...\n";
                $membership = json_decode($response->getBody());
            } else {
                print 'Unexpected HTTP status: ' . $response->getStatus() . ' ' .
                    $response->getReasonPhrase();
                $BbRestException = json_decode($response->getBody());
                var_dump($BbRestException);
            }
        } catch (HTTP_Request2_Exception $e) {
            print 'Error: ' . $e->getMessage();
        }

        return $membership;
    }

    public function deleteEnrollment($access_token, $course_id, $user_id) {
        $constants = new Constants();

        $request = new HTTP_Request2($constants->HOSTNAME . $constants->COURSE_PATH . '/' . $course_id . '/users/' . $user_id, HTTP_Request2::METHOD_DELETE);
        $request->setHeader('Authorization', 'Bearer ' . $access_token);
        $request->setHeader('Content-Type', 'application/json');

        try {
            $response = $request->send();
            if (204 == $response->getStatus()) {
                print "Membership Deleted";
            } else {
                print 'Unexpected HTTP status: ' . $response->getStatus() . ' ' .
                    $response->getReasonPhrase();
                $BbRestException = json_decode($response->getBody());
                var_dump($BbRestException);
                return FALSE;
            }
        } catch (HTTP_Request2_Exception $e) {
            print 'Error: ' . $e->getMessage();
            return FALSE;
        }

        return TRUE;
    }


	}
