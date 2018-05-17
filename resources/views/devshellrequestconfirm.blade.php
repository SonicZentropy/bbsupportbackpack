@extends('layouts.userLayout')


@section('content')

    <!-- Bootstrap boilerplate... -->
    <!--HEADING-->
    {{HTML::image('img/PTCLogo.png', 'Pulaski Technical College logo', array('class' => 'headerlogo'))}}
    <div class="bbheader centered">Blackboard<sup>&reg;</sup></div><br/>
    <div class="bbsubheader centered">Dev Shell Request</div><br/>

    Your request has been received.  Please allow up to 24 hours for creation.  If you have any questions or issues, please email ofs@uaptc.edu


@endsection

@section('scripts')

@endsection
