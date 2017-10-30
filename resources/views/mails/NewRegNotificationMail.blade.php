{{--@extends('resources.views.layouts.mail')--}}
@extends('beautymail::templates.minty')


@section('content')

    @include('beautymail::templates.minty.contentStart')
    A new registration has been submitted for Blackboard Training.<br>

    USER: {{$username}}<br>
    USER ID: {{$userid}}<br>
    USER EMAIL: {{$user_email}}<br>

    <tr>
        <td class="paragraph">
            Training will be in the second floor Library computer lab (Room 200) on:<br><br>
            1) {{ $first_date }}.<br>

            2) {{ $second_date }}.<br><br>

            Each training day will last 3 hours.
        </td>
    </tr>


    @include('beautymail::templates.minty.contentEnd')


@endsection
