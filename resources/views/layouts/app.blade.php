<!DOCTYPE html>
<html lang="en">
<head>
    <title>Blackboard Support - Base</title>

    <!-- CSS and Javascript -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/bootstrap-datetimepicker.min.css')}}"/>

    <script type="text/javascript" src="{{asset('js/moment.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/bootstrap-datetimepicker.min.js')}}"></script>


    @yield('css')
</head>

<body>


@yield('content')
<script>

    $(document).ready(function () {

        $("#datetimepicker1").datetimepicker({
            format:'YYYY-MM-DD hh:mm:00',
            /*showOn: "button",
             buttonImage: "/crudv2/public/overcast/images/calendar19.gif",
             buttonImageOnly: true,
             dateFormat: "yy-mm-dd",
             changeMonth: true,
             changeYear: true*/
        });
        $("#datetimepicker2").datetimepicker({
            format:'YYYY-MM-DD hh:mm:00',
            /*showOn: "button",
             buttonImage: "/crudv2/public/overcast/images/calendar19.gif",
             buttonImageOnly: true,
             dateFormat: "yy-mm-dd",
             changeMonth: true,
             changeYear: true*/
        });

    });
</script>
@yield('scripts')
</body>

</html>