@extends('layouts.userLayout')


@section('content')

    <!-- Bootstrap boilerplate... -->
    <!--HEADING-->
    {{HTML::image('img/PTCLogo.png', 'Pulaski Technical College logo', array('class' => 'headerlogo'))}}
    <div class="bbheader centered">Blackboard<sup>&reg;</sup></div><br/>
    <div class="bbsubheader centered">Training Certificate Registration</div><br/>

    Your Blackboard Training Session Registration is Confirmed!<br/>
    Training will be in the second floor Library computer lab (Room 200) on:<br/><br/>
    {{Carbon\Carbon::parse($first_date)->format('F jS, Y - g:ia')}}<br/>

@endsection

@section('scripts')

@endsection
