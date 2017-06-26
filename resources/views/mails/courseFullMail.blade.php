{{--@extends('resources.views.layouts.mail')--}}
@extends('layouts.mail')


@section('content')

Blackboard training session has filled up!
    {{ $first_date }}am.<br>
    and<br>
    {{ $second_date }}am.<br><br>

@endsection