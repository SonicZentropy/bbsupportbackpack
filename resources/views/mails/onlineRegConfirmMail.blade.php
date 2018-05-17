{{--@extends('resources.views.layouts.mail')--}}
@extends('beautymail::templates.minty')


@section('content')

    @include('beautymail::templates.minty.contentStart')

    <tr>
        <td class="titlecentered">
            Blackboard
        </td>
    </tr>
    <tr>
        <td class="subtitlecentered">
            Training Certificate Registration
        </td>
    </tr>

    <tr>
        <td width="100%" height="25"></td>
    </tr>

    <tr>
        <td class="paragraph">
            You are successfully registered for the Online Blackboard Training!
        </td>
    </tr>

    <tr>
        <td width="100%" height="10"></td>
    </tr>

    <tr>
        <td class="paragraph">
            From the date that you are provided access to this course, you will be allotted 60 days to complete
            ALL course requirements. After 60 days, any training progress will be lost.
        </td>
    </tr>

    <tr>
        <td width="100%" height="10"></td>
    </tr>

    <tr>
        <td class="subtitlecentered">
            Blackboard Training Server
        </td>
    </tr>

    <tr>
        <td width="100%" height="10"></td>
    </tr>

    <tr>
        <td class="paragraph">
                This training takes place within Blackboard.  In order to get started, you will log into Blackboard in the usual manner, via the MyPTC portal.  You will now see two new Blackboard courses you've been enrolled in.  Below you will find the essentials to get you started.
        </td>
    </tr>

    <tr>
        <td width="100%" height="10"></td>
    </tr>

    <tr>
        <td class="subtitlecentered">
            Course Shells
        </td>
    </tr>

    <tr>
        <td width="100%" height="10"></td>
    </tr>

    <tr>
        <td class="paragraph">
            Once logged into the Blackboard server, you should have access to two courses. The first course
            titled BBTRAIN.BASICS.ONLINE is the course you be taking as a student. You will walk through
            all of the content in this course. The second course titled BBTRAIN.O.2017.MM.00# - Your.Name is
            the course you will be building as an instructor. This course is you development shell (dev shell).
            You will toggle between these two course shells as you complete your training.
        </td>
    </tr>

    <tr>
        <td width="100%" height="10"></td>
    </tr>

    <tr>
        <td class="subtitlecentered">
            Final
        </td>
    </tr>

    <tr>
        <td width="100%" height="10"></td>
    </tr>

    <tr>
        <td class="paragraph">
            Once you have completed ALL course assignments, you will need to email OFS@uaptc.edu to
            request a "BB training course final dev shell." Be sure to mention Blackboard training in your
            request as we receive various requests through this email address. You will receive a confirmation
            email that your request has been received, and a second email once your final dev shell has been created.

        </td>
    </tr>

    <tr>
        <td width="100%" height="10"></td>
    </tr>

    <tr>
        <td class="subtitlecentered">
            Help
        </td>
    </tr>

    <tr>
        <td width="100%" height="10"></td>
    </tr>

    <tr>
        <td class="paragraph">
            If you have any trouble logging into the system or accessing your course shells, please email OFS@uaptc.edu.
            You will be notified if, for any reason, it is expected that either Blackboard server will be done.
            Please understand there will be no deadline extensions allowed.
        </td>
    </tr>

    <tr>
        <td width="100%" height="25"></td>
    </tr>

    <tr>
        <td class="paragraph">
            Best of luck on completing your certification,
            UA-PTC Blackboard Support Team
        </td>
    </tr>

    @include('beautymail::templates.minty.contentEnd')

    {{--<div class="bbheader centered">Blackboard<sup>&reg;</sup></div><br/>
    <div class="bbsubheader centered">Training Certificate Registration</div><br/>

    <br/>
    <div class="centered boldtext biggertext">You are successfully registered for the Online Blackboard Training!</div>

    <div class="p">From the date that you are provided access to this course, you will be allotted 60 days to complete
        ALL course requirements. After 60 days, any training progress will be lost.
    </div>
    <br/>
    <div class="centered boldtext">Blackboard Training Server</div>
    <div class="p">
        The Blackboard training takes places in Blackboard courses.  You will log into Blackboard in the usual way, via the MyPTC portal.  Once logged in, you will find two new courses. Below you will find the essentials to get you started.
    </div>

    <br/>
    <div class="centered boldtext">Course Shells</div>
    Once logged into the Blackboard server, you should have access to two courses. The first course
    titled BBTRAIN.BASICS.ONLINE is the course you be taking as a student. You will walk through
    all of the content in this course. The second course titled BBTRAIN.O.2017.MM.00# - Your.Name is
    the course you will be building as an instructor. This course is you development shell (dev shell).
    You will toggle between these two course shells as you complete your training.

    <br/><br/>
    <div class="centered boldtext">Final</div>
    Once you have completed ALL course assignments, you will need to email OFS@uaptc.edu to
    request a "BB training course final dev shell." Be sure to mention Blackboard training in your
    request as we receive various requests through this email address. You will receive a confirmation
    email that your request has been received, and a second email once your final dev shell has been created.

    <br/><br/>
    <div class="centered boldtext">Help</div>
    If you have any trouble logging into the system or accessing your course shells, please email OFS@uaptc.edu.
    You will be notified if, for any reason, it is expected that either Blackboard server will be done.
    Please understand there will be no deadline extensions allowed.
    <br/><br/>
    Best of luck on completing your certification,
    UA-PTC Blackboard Support Team--}}

@endsection
