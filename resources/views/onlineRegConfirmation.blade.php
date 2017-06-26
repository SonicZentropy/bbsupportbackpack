@extends('layouts.userLayout')


@section('content')

    <!-- Bootstrap boilerplate... -->
    {{HTML::image('img/PTCLogo.png', 'Pulaski Technical College logo', array('class' => 'headerlogo'))}}
    <div class="bbheader centered">Blackboard<sup>&reg;</sup></div><br/>
    <div class="bbsubheader centered">Training Certificate Registration</div><br/>

    <br/>
    <div class="centered boldtext biggertext">You are successfully registered for the Online Blackboard Training!</div>

    <div class="p">From the date that you are provided access to this course, you will be allotted 60 days to complete
    ALL course requirements. After 60 days, any training progress will be lost.
    </div>
    <br/>
    <div class="centered boldtext">Blackboard Training Server</div>
    <div class="p">
    The Blackboard training takes places in a Blackboard training server. This will be different from the typical way
    you may access Blackboard using MyPTCPortal. You will need to visit training.pulaskitech.blackboard.com.
    You will log in using your UA-PTC employee ID and the password Letmein123. All of your training will take places
    in this server. Once logged in, you will find a course syllabus containing all of the information
    that you need to succeed in this course. Below you will find the essentials to get you started.
    </div>

    <br/>
    <div class="centered boldtext">Course Shells</div>
    Once logged into the training server, you should have access to two courses. The first course
    titled BBTRAIN.BASICS.ONLINE is the course you be taking as a student. You will walk through
    all of the content in this course. The second course titled BBTRAIN.O.2017.MM.00# - Your.Name is
    the course you will be building as an instructor. This course is you development shell (dev shell).
    You will toggle between these two course shells as you complete your training.

    <br/><br/>
    <div class="centered boldtext">Final</div>
    Once you have completed ALL course assignments, you will need to email OFS@pulaskitech.edu to
    request a "BB training course final dev shell." Be sure to mention Blackboard training in your
    request as we receive various requests through this email address. You will receive a confirmation
    email that your request has been received, and a second email once your final dev shell has been created.

    <br/><br/>
    <div class="centered boldtext">Help</div>
    If you have any trouble logging into the system or accessing your course shells, please email OFS@pulaskitech.edu.
    You will be notified if, for any reason, it is expected that either Blackboard server will be done.
    Please understand there will be no deadline extensions allowed.
    <br/><br/>
    Best of luck on completing your certification,
    UA-PTC Blackboard Support Team


@endsection

@section('scripts')

@endsection
