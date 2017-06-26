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
@endsection