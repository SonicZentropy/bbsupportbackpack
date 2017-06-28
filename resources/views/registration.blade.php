@extends('layouts.userLayout')


@section('content')

    <!--HEADING-->
    {{HTML::image('img/PTCLogo.png', 'Pulaski Technical College logo', array('class' => 'headerlogo'))}}
    <div class="bbheader centered">Blackboard<sup>&reg;</sup></div><br/>
    <div class="bbsubheader centered">Training Certificate Registration</div><br/>



    <!-- Display validation errors -->
    @include('common.errors')


    <div class="formcontentbg">
        <!-- New Registration form -->
        <form action="/training/registration" method="POST" class="form-horizontal">
            {{csrf_field()}}

            <div class="form-group">

                <div class="row>">
                    <div class="col-sm-1 formiconimg row-m-t-ten">
                        {{HTML::image('img/PersonIcon.png', 'Name Icon', array('class' => 'formiconimg'))}}
                    </div>
                    <div class="col-sm-11 row-m-t-ten">
                        <input type="text" name="name" id="training_registration-name" class="form-control"
                               placeholder="Full Name"
                               value="Casey">
                    </div>
                </div>

                <div class="row>">
                    <div class="col-sm-1 formiconimg row-m-t-ten">
                        {{HTML::image('img/EmployeeIDIcon.png', 'ID Icon', array('class' => 'formiconimg'))}}
                    </div>
                    <div class="col-sm-11 row-m-t-ten">
                        <input type="number" name="personal_id" id="training_registration-personal_id"
                               placeholder="Student/Faculty ID Number"
                               class="form-control" value="123456789">
                    </div>
                </div>

                <div class="col-sm-1 formiconimg row-m-t-ten">
                    {{HTML::image('img/EmailIcon.png', 'Email Icon', array('class' => 'formiconimg'))}}
                </div>
                <div class="col-sm-11 row-m-t-ten">
                    <input type="email" name="email" id="training_registration-email" class="form-control"
                           placeholder="Email Address"
                           value="cbailey@pulaskitech.edu">
                </div>

                <div class="col-sm-1 formiconimg row-m-t-ten">
                    {{HTML::image('img/InstitutionIcon.png', 'Institution Icon', array('class' => 'formiconimg'))}}
                </div>
                <div class="col-sm-11 row-m-t-ten">
                    <input type="text" name="institution" id="training_registration-institution"
                           placeholder="Institution"
                           class="form-control" value="PTC">
                </div>


                <div class="col-sm-12 row-m-t-ten allmargins-ten">
                    <div class="boldtext">What courses have you taught or will be teaching (within 1 year)?
                    </div>
                    <input type="text" name="courses_taught" id="training_registration-courses_taught"
                           class="form-control" value="Basic">
                </div>

                <div class="col-sm-12 allmargins-ten">
                    <div class="boldtext">How do you plan to use Blackboard as part of your course?</div>

                    {{Form::radio('course_type',  'basic', true)}}I am teaching a classroom course and will use it as a
                    supplemental shell.<br/>
                    {{Form::radio('course_type', 'hybrid')}}I am teaching a hybrid course.<br/>
                    {{Form::radio('course_type', 'online')}}I am teaching an online course.<br/>
                    {{Form::radio('course_type', 'unknown')}}I am not sure.<br/>

                </div>
                <div class="col-sm-12 allmargins-ten">
                    <div class="boldtext">Will you bring a laptop?</div>
                    {{--<input type="checkbox" name="laptop" id="training_registration-laptop" value="true" class="form-control">--}}
                    {{Form::radio('laptop', 'true')}}Yes.<br/>
                    {{Form::radio('laptop', 'false', true)}}No.<br/>
                </div>

                <div class="col-sm-12 sidemargins-ten">
                    <div class="boldtext">Will you need accommodations? If so, please contact us.</div>
                    {{--<input type="checkbox" name="laptop" id="training_registration-laptop" value="true" class="form-control">--}}
                    {{Form::radio('accommodations', '1')}}Yes.<br/>
                    {{Form::radio('accommodations', '0', true)}}No.<br/>
                </div>

            </div>
            <div class="col-sm-12 allmargins-ten boldtext centered">Select a training option.</div>
            <div class="panel-body">
                <table class="table table-striped training_registration-table">

                    <!-- Table Headings -->
                    <thead>
                    <th class="table-text">
                        <div>SELECT ONE</div>
                    </th>
                    <th class="table-text">
                        <div>TRAINING TYPE</div>
                    </th>
                    <th class="table-text">
                        <div>FIRST SESSION DATE</div>
                    </th>
                    <th class="table-text">
                        <div>SECOND SESSION DATE</div>
                    </th>

                    </thead>

                    <!-- Table Body -->
                    <tbody>

                    <tr>
                        <td class="table-text">
                            <div>{{Form::radio('training_session_id', 1, true)}}</div>
                        </td>
                        <td class="table-text">
                            <div>ONLINE</div>
                        </td>
                        <td class="table-text">
                            <div>ANY</div>
                        </td>
                        <td class="table-text">
                            <div>ANY</div>
                        </td>


                    </tr>
                    @foreach ($trainingSessions as $session)

                        <tr>
                            <!-- Task Name -->
                            <td class="table-text">
                                <div>{{ Form::radio('training_session_id', $session->id)}}</div>
                            </td>
                            <td class="table-text">
                                <div>{{ $session->training_type }}</div>
                            </td>
                            <td class="table-text">
                                <div>{{Carbon\Carbon::parse($session->first_session)->format('F j, Y')}}: 9AM-12PM</div>
                            </td>
                            <td class="table-text">
                                <div>{{Carbon\Carbon::parse($session->second_session)->format('F j, Y')}}: 9AM-12PM
                                </div>
                            </td>


                            <!-- Delete Button -->
                            {{--<td>
                                <form action="/registration/{{ $registration->id }}" method="POST">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}

                                    <button>Delete Registration</button>
                                </form>
                            </td>--}}
                        </tr>
                        </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>


        {{--{!! app('captcha')->display(); !!}--}}



            <div class="col-sm-12 boldtext">Lastly, review and acknowledge the following policies.</div>

            <div class="col-sm-12 bottommargin-ten">
                {{Form::checkbox('Policy1Agreement')}}I understand that I must submit this form to reserve my spot.
            </div>
            <div class="col-sm-12 bottommargin-ten">
                {{Form::checkbox('Policy2Agreement')}}I understand that in order to cancel my registration, I will need
                to contact OFS@pulaskitech.edu.

            </div>
            <div class="col-sm-12 bottommargin-ten">
                {{Form::checkbox('Policy3Agreement')}}I understand that it is my responsibility to communicate with
                UA-PTC Blackboard Support about any accommodations that I may need.

            </div>
            <div class="col-sm-12 bottommargin-ten">
                {{Form::checkbox('Policy4Agreement')}}I understand that if I miss more than 25% of the workshop series,
                I will need to restart the training in another session.

            </div>
            <div class="col-sm-12 bottommargin-ten">
                {{Form::checkbox('Policy5Agreement')}}I understand that attending the workshop series does not equate to
                a certification, and I must complete ALL course requirements with scores of 85% or more to receive my
                certification.

            </div>

            <div class="form-group">
                <div class="col-sm-12 centered">
                    <button type="submit" class="btn btn-default">
                        <i class="fa fa-plus"></i> Add Registration
                    </button>
                </div>
            </div>
        </form>
    </div>





@endsection

@section('scripts')

@endsection
