@extends('layouts.userLayout')


@section('content')

    <!--HEADING-->
    {{HTML::image('img/PTCLogo.png', 'Pulaski Technical College logo', array('class' => 'headerlogo'))}}
    <div class="bbheader centered">Blackboard<sup>&reg;</sup></div><br/>
    <div class="bbsubheader centered">Developmental Shell Request</div><br/>



    <!-- Display validation errors -->
    @include('common.errors')


    <div class="formcontentbg">
        <!-- New Registration form -->
        <form action="/devshellrequest" method="POST" class="form-horizontal">
            {{csrf_field()}}

            <div class="form-group">

                <div class="row>">
                    <div class="col-sm-1 formiconimg row-m-t-ten">
                        {{HTML::image('img/PersonIcon.png', 'Name Icon', array('class' => 'formiconimg'))}}
                    </div>
                    <div class="col-sm-11 row-m-t-ten">
                        <input type="text" name="name" id="training_registration-name" class="form-control"
                               placeholder="Full Name">
                    </div>
                </div>

                <div class="row>">
                    <div class="col-sm-1 formiconimg row-m-t-ten">
                        {{HTML::image('img/EmployeeIDIcon.png', 'ID Icon', array('class' => 'formiconimg'))}}
                    </div>
                    <div class="col-sm-11 row-m-t-ten">
                        <input type="number" name="personal_id" id="training_registration-personal_id"
                               placeholder="Faculty ID Number"
                               class="form-control">
                    </div>
                </div>

                <div class="col-sm-1 formiconimg row-m-t-ten">
                    {{HTML::image('img/EmailIcon.png', 'Email Icon', array('class' => 'formiconimg'))}}
                </div>
                <div class="col-sm-11 row-m-t-ten">
                    <input type="email" name="email" id="training_registration-email" class="form-control"
                           placeholder="Email Address">
                </div>

                <div class="row">
                    <div class="col-sm-12 courseid row-m-t-ten">
                    Course ID For Shell:
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-1"></div>
                    <div class="col-sm-10 row-m-t-ten">
                        <input type="text" name="courseid" id="courseid" class="form-control" placeholder="CIS1103">
                    </div>
                    <div class="col-sm-1"></div>
                </div>


            </div>



            {{--{!! app('captcha')->display(); !!}--}}


            <div class="form-group">
                <div class="col-sm-12 centered">
                    <button type="submit" class="btn btn-default">
                        <i class="fa fa-plus"></i> Complete Request
                    </button>
                </div>
            </div>
        </form>
    </div>





@endsection

@section('scripts')

@endsection
