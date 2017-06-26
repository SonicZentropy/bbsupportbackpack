<!DOCTYPE html>
<html lang="en">
<head>
    <title>Blackboard Support - Base</title>

    <!-- CSS and Javascript -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/bootstrap-datetimepicker.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/trainingRegistration.css')}}"/>

    <script type="text/javascript" src="{{asset('js/moment.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/bootstrap-datetimepicker.min.js')}}"></script>


    @yield('css')
</head>

<body>
<!-- Bootstrap boilerplate... -->

<div class="container-fluid text-center">
    <div class="row content">
        <div class="col-sm-2 sidenav"></div>


        <div class="col-sm-8 text-left widthclamp">

@yield('content')
        </div>

        <div class="col-sm-2 sidenav"></div>

        </div>
    </div>

@yield('scripts')
</body>

</html>