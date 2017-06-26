@extends('layouts.app')

@section('css')
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.min.css">
@endsection

@section('content')

	<!-- Bootstrap boilerplate... -->

	<div class="panel-body">
		<!-- Display validation errors -->
	@include('common.errors')

	<!-- New Registration form -->
		<form action="/training/Admin" method="POST" class="form-horizontal">
			{{csrf_field()}}

			<div class="form-group">
				<label for="training" class="col-sm-12 control-label">Create New Training Session</label>

				<div class="col-sm-12">
					Title:<input type="text" name="title" id="training_session-title" class="form-control">
				</div>
				{{--<div class="col-sm-6">
					First Session Date:<input type="text" name="first_session" id="training_session-first_session" class="form-control">
				</div>--}}

				{{--<div class="form-group">--}}
				<div class="row">
				<div class="col-sm-3">First Session Date:</div>
				<div class="col-sm-4">
					<div class='input-group date' id="datetimepicker1">
						<input type='text' class="form-control" name="first_session" id="training_session-first_session"/>
						<span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
					</div>
				</div>
				</div>
				{{--</div>--}}
				<br>
				<div class="row">
				{{--<div class="form-group">--}}
				<div class="col-sm-3">Second Session Date:</div>
				<div class="col-sm-4">
					<div class='input-group date' id="datetimepicker2">
						<input type='text' name="second_session" class="form-control" id="training_session-second_session"/>
						<span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
					</div>
				</div>
				</div>
				{{--</div>--}}

				{{--<div class="col-sm-6">
					Second Session Date:<input type="text" name="second_session" id="training_session-second_session" class="form-control">
				</div>--}}
				<div class="col-sm-12">
					Training Type:<input type="text" name="training_type" id="training_session-training_type" class="form-control">
				</div>
			</div>

			<!-- add button -->
			<div class="form-group">
				<div class="col-sm-offset-3 col-sm-6">
					<button type="submit" class="btn btn-default">
						<i class="fa fa-plus"></i> Add Training Session
					</button>
				</div>
			</div>
		</form>
	</div>

	<!-- Current REGISTRATIONS -->
	@if (count($registrations) > 0)
		<ul class="nav nav-tabs">
			<li class="active">
                <a data-toggle="tab" href="#allreg">All Registrations</a>
			</li>
            <li><a data-toggle="tab" href="#upcomingreg">Future Registrations</a></li>
            <li><a data-toggle="tab" href="#pastreg">Previous Registrations</a></li>
        </ul>
			<div class="tab-content">
                <div id="allreg" class="tab-pane fade in active">
				<table class="table table-striped training_registration-table">

					<tbody>
					<td class="table-text">
						<div><b>NAME</b></div>
					</td>
					<td class="table-text">
						<div><b>ID</b></div>
					</td>
					<td class="table-text">
						<div><b>EMAIL</b></div>
					</td>
					<td class="table-text">
						<div><b>LAPTOP</b></div>
					</td>
					<td class="table-text">
						<div><b>ACCOMMODATIONS</b></div>
					</td>
					<td class="table-text">
						<div><b>TRAINING BEGIN</b></div>
					</td>
					<td class="table-text">
						<div><b>DELETE</b></div>
					</td>

					@foreach ($registrations as $registration)

                        @php
                            $userinfo = $registration->user()->get()->first()
                        @endphp

						<tr>
							<!-- Task Name -->
							<td class="table-text">
								<div>{{ $userinfo->name }}</div>
							</td>
							<td class="table-text">
								<div>{{ $userinfo->personal_id }}</div>
							</td>
							<td class="table-text">
								<div>{{ $userinfo->email }}</div>
							</td>
							<td class="table-text">
								<div>{{ $registration->laptop }}</div>
							</td>
							<td class="table-text">
								<div>{{ $registration->accommodations }}</div>
							</td>
							<td class="table-text">
								<div>{{ prettydate($registration->chosenTraining()->first_session) }}</div>
							</td>


							<!-- Delete Button -->
							<td>
								<form action="/training/Admin/rmUser/{{ $registration->id }}" method="POST">
									{{ csrf_field() }}
									{{ method_field('DELETE') }}

									<button>Delete Registration</button>
								</form>
							</td>
						</tr>
						</td>
						</tr>
					@endforeach
					</tbody>
				</table>
                </div>
                <div id="upcomingreg" class="tab-pane fade">TEST</div>
                <div id="pastreg" class="tab-pane fade">PAST REG</div>

			</div>
		</ul>
	@endif

	<!-- Current SESSIONS -->
	@if (count($trainings) > 0)
        <ul class="nav nav-tabs">
            <li class="active">
                <a data-toggle="tab" href="#allses">All Sessions</a>
            </li>
            <li><a data-toggle="tab" href="#upcomingses">Future Sessions</a></li>
            <li><a data-toggle="tab" href="#pastses">Previous Sessions</a></li>
        </ul>

			<div class="tab-content">
                <div id="allses" class="tab-pane fade in active">
    				<table class="table table-striped training_session-table">

					<!-- Table Headings -->
					{{--<thead>
					<th>Name</th>
					<th>&nbsp;</th>
					</thead>--}}

					<!-- Table Body -->
					<tbody>

					<td class="table-text">
						<div><b>TITLE</b></div>
					</td>
					<td class="table-text">
						<div><b>FIRST SESSION</b></div>
					</td>
					<td class="table-text">
						<div><b>SECOND SESSION</b></div>
					</td>
					<td class="table-text">
						<div><b>NUMBER ENROLLED</b></div>
					</td>
					<td class="table-text">
						<div><b>TYPE</b></div>
					</td>

					@foreach ($trainings as $training)

						<tr>
							<!-- Task Name -->
							<td class="table-text">
								<div>{{ HTML::linkRoute('sessionAdminEdit', $training->title, $training->id) }}</div>
							</td>
							<td class="table-text">
								<div>{{ $training->first_session }}</div>
							</td>
							<td class="table-text">
								<div>{{ $training->second_session }}</div>
							</td>
							<td class="table-text">
								<div>{{ $training->number_enrolled }}</div>
							</td>
							<td class="table-text">
								<div>{{ $training->training_type }}</div>
							</td>
							<!-- Delete Button -->
							{{--<td>
								<form action="/trainingAdmin/{{ $training->id }}" method="POST">
									{{ csrf_field() }}
									{{ method_field('DELETE') }}

									<button>Delete Training Session</button>
								</form>
							</td>--}}
						</tr>
						</td>
						</tr>
					@endforeach
					</tbody>
				</table>
                </div>

                <div id="upcomingses" class="tab-pane fade">
                    <table class="table table-striped training_session-table">

                        <!-- Table Headings -->
                    {{--<thead>
                    <th>Name</th>
                    <th>&nbsp;</th>
                    </thead>--}}

                    <!-- Table Body -->
                        <tbody>

                        <td class="table-text">
                            <div><b>TITLE</b></div>
                        </td>
                        <td class="table-text">
                            <div><b>FIRST SESSION</b></div>
                        </td>
                        <td class="table-text">
                            <div><b>SECOND SESSION</b></div>
                        </td>
                        <td class="table-text">
                            <div><b>NUMBER ENROLLED</b></div>
                        </td>
                        <td class="table-text">
                            <div><b>TYPE</b></div>
                        </td>

                        @foreach ($upcoming_sessions as $training)

                            <tr>
                                <!-- Task Name -->
                                <td class="table-text">
                                    <div>{{ $training->title }}</div>
                                </td>
                                <td class="table-text">
                                    <div>{{ $training->first_session }}</div>
                                </td>
                                <td class="table-text">
                                    <div>{{ $training->second_session }}</div>
                                </td>
                                <td class="table-text">
                                    <div>{{ $training->number_enrolled }}</div>
                                </td>
                                <td class="table-text">
                                    <div>{{ $training->training_type }}</div>
                                </td>
                                <!-- Delete Button -->
                                {{--<td>
                                    <form action="/trainingAdmin/{{ $training->id }}" method="POST">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}

                                        <button>Delete Training Session</button>
                                    </form>
                                </td>--}}
                            </tr>
                            </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>

                <div id="pastses" class="tab-pane fade">
                    <table class="table table-striped training_session-table">

                        <tbody>

                        <td class="table-text">
                            <div><b>TITLE</b></div>
                        </td>
                        <td class="table-text">
                            <div><b>FIRST SESSION</b></div>
                        </td>
                        <td class="table-text">
                            <div><b>SECOND SESSION</b></div>
                        </td>
                        <td class="table-text">
                            <div><b>NUMBER ENROLLED</b></div>
                        </td>
                        <td class="table-text">
                            <div><b>TYPE</b></div>
                        </td>

                        @foreach ($past_sessions as $training)

                            <tr>
                                <!-- Task Name -->
                                <td class="table-text">
                                    <div>{{ $training->title }}</div>
                                </td>
                                <td class="table-text">
                                    <div>{{ $training->first_session }}</div>
                                </td>
                                <td class="table-text">
                                    <div>{{ $training->second_session }}</div>
                                </td>
                                <td class="table-text">
                                    <div>{{ $training->number_enrolled }}</div>
                                </td>
                                <td class="table-text">
                                    <div>{{ $training->training_type }}</div>
                                </td>
                                <!-- Delete Button -->
                                {{--<td>
                                    <form action="/trainingAdmin/{{ $training->id }}" method="POST">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}

                                        <button>Delete Training Session</button>
                                    </form>
                                </td>--}}
                            </tr>
                            </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
			</div>
		</div>
	@endif
@endsection