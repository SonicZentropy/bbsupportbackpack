{{--@extends('resources.views.layouts.mail')--}}
@extends('beautymail::templates.minty')


@section('content')

    @include('beautymail::templates.minty.contentStart')

    <tr>
        <td class="titlecentered">
            Blackboard
        </td>
    </tr>
    <tr>
        <td class="subtitlecentered">
            Training Registration
        </td>
    </tr>

    <tr>
        <td width="100%" height="25"></td>
    </tr>

    <tr>
        <td class="paragraph">
            You are successfully registered for Blackboard Training!
        </td>
    </tr>

    <tr>
        <td width="100%" height="10"></td>
    </tr>

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
