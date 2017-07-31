<?php
if(!isset($_POST['submit']))
{
	//This page should not be accessed directly. Need to submit the form.
	echo "error; you need to submit the form!";
}
$name = $_POST['first-name'];
$visitor_email = $_POST['email'];
$coursename = $_POST['course-name'];
$courseid = $_POST['course-id'];
$coursecopyfrom = $_POST['course-copy-from'];
$comments = $_POST['comments'];
	

//Validate first
if(empty($name)||empty($visitor_email)) 
{
    echo "Name and email are mandatory!";
    exit;
}

if(IsInjected($visitor_email))
{
    echo "Bad email value!";
    exit;
}

$email_from = 'no-reply@pulaskitech.edu';//<== update the email address
$email_subject = "Developmental Course Shell Request";
$email_body = "You have received a request for a new developmental course shell from $name.\n".
    "Name: $name\n"
	"Email: $email\n"
	"Course Name: $coursename\n"
	"Course ID: $courseid\n"
	"Course Copy From: $coursecopyfrom\n"
	"Comments: $comments\n";
    
$to = "ofs@pulaskitech.edu";//<== update the email address
$headers = "From: $email_from \r\n";
$headers .= "Reply-To: $visitor_email \r\n";
//Send the email!
mail($to,$email_subject,$email_body,$headers);
//done. redirect to thank-you page.
header('Location: thank-you.html');


// Function to validate against any email injection attempts
function IsInjected($str)
{
  $injections = array('(\n+)',
              '(\r+)',
              '(\t+)',
              '(%0A+)',
              '(%0D+)',
              '(%08+)',
              '(%09+)'
              );
  $inject = join('|', $injections);
  $inject = "/$inject/i";
  if(preg_match($inject,$str))
    {
    return true;
  }
  else
    {
    return false;
  }
}
   
?> 
