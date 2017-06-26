@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.min.css">
@endsection

@section('content')
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
                <div><b>USER NAME</b></div>
            </td>
            <td class="table-text">
                <div><b>USER ID</b></div>
            </td>
            <td class="table-text">
                <div><b>Attended first</b></div>
            </td>
            <td class="table-text">
                <div><b>Attended Second</b></div>
            </td>
            <td class="table-text">
                <div><b>Completed Training</b></div>
            </td>

            @foreach ($enrolled as $user)
                @php
                $theuser = $user->getUser()->first();
                @endphp
                <tr>

                    <td class="table-text">
                        <div>{{ $theuser->name }}</div>
                    </td>
                    <td class="table-text">
                        <div>{{ $theuser->personal_id }}</div>
                    </td>
                    <td class="table-text">
                        <div>{{Form::checkbox('attended1', 1, $user->attended1 )}}</div>
                    </td>
                    <td class="table-text">
                        <div>{{Form::checkbox('attended2', 1, $user->attended2 )}}</div>
                    </td>
                    <td class="table-text">
                        <div>{{Form::checkbox('completed', 1, $user->completed )}}</div>
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
            @endforeach
            </tbody>
        </table>
    </div>
@endsection