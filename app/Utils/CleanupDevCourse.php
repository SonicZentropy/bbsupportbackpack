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

$dsk_id = '_188_1';


$term = $rest->readTerm($access_token, '_22_1');


/////////////////// ENROLL USER IN BBTRAIN COURSE AS STUDENT
$course_id = "courseId:BBTRAIN.BASICS.001";
$course = $rest->readCourse($access_token, $course_id);
//var_dump($course);

$user_id = 'userName:resttest';
$user = $rest->readUser($access_token, $user_id);
//var_dump($user);


//$membership = $rest->createMembership($access_token, "_2_1", $course_id,  $user->id, 'Student');
$membership = $rest->deleteMembership($access_token, $course_id, $user->id);

//CREATE COURSE FOR USER

$newCourseId = 'courseId:BBTRAIN.DEV.FINAL.' . $user->userName;
$membership = $rest->deleteMembership($access_token, $newCourseId, $user->id);

$deletedCourse = $rest->deleteCourse($access_token, $newCourseId);
exit();

