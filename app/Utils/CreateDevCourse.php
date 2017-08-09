<?php
require_once('classes/Rest.class.php');
require_once('classes/Token.class.php');
require_once('classes/Datasource.class.php');
require_once('classes/Term.class.php');
require_once('classes/Course.class.php');
require_once('classes/User.class.php');
require_once('classes/Membership.class.php');

$rest = new Rest();
$token = new Token();
$datasource = new Datasource();
$term = new Term();
$course = new Course();
$user = new User();
$membership = new Membership();

$token = $rest->authorize();
//var_dump($token);



$access_token = $token->access_token;

//$dses = $rest->GetAllDatasources($access_token);
//var_dump($dses);

//exit();

//$datasource = $rest->createDatasource($access_token, 'TEST_ID', "Testing Key");
//var_dump($datasource);
//$dsk_id = $datasource->id;
$dsk_id = '_188_1';
//var_dump($rest->GetAllTerms($access_token));

$term = $rest->readTerm($access_token, '_22_1');




////
//////$courses = $rest->getCourses($access_token);
//////var_dump($courses);
////
////$term = $rest->createTerm($access_token, $dsk_id);
//////var_dump($term);
////$term_id = $term->id;
////
////$course = $rest->createCourse($access_token, $dsk_id, $term_id);
//////var_dump($course);
////$course_id = $course->id;

//$course = $rest->readCourse($access_token, $course_id);
//var_dump($course);

/////////////////// ENROLL USER IN BBTRAIN COURSE AS STUDENT
$course_id = "courseId:BBTRAIN.BASICS.001";
$course = $rest->readCourse($access_token, $course_id);
//var_dump($course);

$user_id = 'externalId:resttest';
$user = $rest->readUser($access_token, $user_id);
//var_dump($user);



$id = '_52361_1';
$id = 'externalId:resttest';
$membership = $rest->createMembership($access_token, "_2_1", $course->id,  $user->id, 'Student');

//CREATE COURSE FOR USER
$course = new Course();

$course->dataSourceId = $dsk_id;
$course->termId = $term->id;
$course->availability = new Availability();
$course->courseId = 'BBTRAIN.DEV.FINAL.' . $user->userName;
$course->externalId = $course->courseId . $user->userName;
$course->name = $course->courseId;
$course->uuid = uniqid("", true);
print "Creating course from object";
$newcourse = $rest->createCourseFromObject($access_token, $course);

//exit();

$instructor = $rest->createMembership($access_token, "_2_1", $newcourse->id, $user->id, 'Instructor');


//$rest->deleteMembership($access_token, $course_id, $user->id);

//$datasource = $rest->updateDatasource($access_token,$dsk_id);

//var_dump($datasource);

//$term = $rest->createTerm($access_token, $dsk_id);
//var_dump($term);
//
//$term_id = $term->id;
//$rest->deleteCourse($access_token, $course_id);
//$rest->deleteTerm($access_token, $term_id);
//$rest->deleteDatasource($access_token,$dsk_id);

////////////////////////////////
/// BBTRAIN.BASICS.001
/// testuser
////////////////////////////////

//$term = $rest->readTerm($access_token, $term_id);
//var_dump($term);
//
//$term = $rest->updateTerm($access_token, $dsk_id, $term_id);
//var_dump($term);

//$course = $rest->createCourse($access_token, $dsk_id, $term_id);
//var_dump($course);
//
//$course_id = $course->id;



//$user_id = 'testuser2';
//$user = $rest->readUser($access_token, $user_id);
//var_dump($user);

//$user = $rest->updateUser($access_token, $dsk_id, $user_id, $user->uuid, $user->created);
//var_dump($user);
//
//$membership = $rest->createMembership($access_token, $dsk_id, $course_id, $user_id);
//var_dump($membership);
//
//$membership = $rest->readMembership($access_token, $course_id, $user_id);
//var_dump($membership);
//
//$membership = $rest->updateMembership($access_token, $dsk_id, $course_id, $user_id, $membership->created);
//var_dump($membership);
//
//$result = $rest->deleteMembership($access_token, $course_id, $user_id);
//var_dump($result);
//
//$result = $rest->deleteUser($access_token, $user_id);
//var_dump($result);
//
//$result = $rest->deleteCourse($access_token, $course_id);
//var_dump($result);
//
//$result = $rest->deleteTerm($access_token, $term_id);
//var_dump($result);
//
//$result = $rest->deleteDatasource($access_token,$dsk_id);
//var_dump($result);*/
