{{--@extends('resources.views.layouts.mail')--}}
@extends('layouts.mail')


@section('content')

    Please add {{ $userName }} to the completed certifications list.

    <br>
    ID: {{ $userID }}

@endsection