@extends('layouts.userLayout')


@section('content')

    <!-- Bootstrap boilerplate... -->
    <!--HEADING-->
    {{HTML::image('img/PTCLogo.png', 'Pulaski Technical College logo', array('class' => 'headerlogo'))}}
    <div class="bbheader centered">Blackboard<sup>&reg;</sup></div><br/>
    <div class="bbsubheader centered">Dev Shell Request</div><br/>

    Your request was not processed correctly.  Please re-check your information (especially employee ID) and try again.  If you still encounter issues, please email ofs@uaptc.edu


@endsection

@section('scripts')

@endsection
