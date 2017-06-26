{{--@extends('resources.views.layouts.mail')--}}
@extends('layouts.mail')


@section('content')


	Your Blackboard Training Session Registration is Confirmed!<br>
	Training will be in the second floor Library computer lab (Room 200) on:<br><br>
	{{ $first_date }}am.<br>
	and<br>
	{{ $second_date }}am.<br><br>

	Each training day will last 3 hours.
@endsection