<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <title>Blank Page - Target Admin</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Proof Read') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">

    {{--<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,700italic,400,600,700">--}}
    {{--<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Oswald:400,300,700">--}}
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="{{ asset('Theme/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('Theme/js/libs/css/ui-lightness/jquery-ui-1.9.2.custom.min.css')}}">
    <link rel="stylesheet" href="{{ asset('Theme/css/bootstrap.min.css') }}">

    <!-- App CSS -->
    <link rel="stylesheet" href="{{ asset('Theme/css/target-admin.css') }}">
    <link rel="stylesheet" href="{{ asset('Theme/css/custom.css') }}">
    {{--<link rel="stylesheet" href="{{ asset('css/style.css') }}">--}}


    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<div class="navbar">

    @include('include.navbar')

</div> <!-- /.navbar -->


    <hr class="account-header-divider">

    <div class="account-wrapper">

        <div class="account-logo">
            <img src="{{ asset('Theme/img/logo-login.png') }}" alt="Target Admin">
        </div>

        <div class="account-body">


            @yield('content')


            {{--<form class="form account-form" method="POST" action="{{ route('login') }}">--}}

                {{--{{ csrf_field() }}--}}

                {{--<div class="form-group">--}}
                    {{--<label for="login-username" class="placeholder-hidden">Username</label>--}}
                    {{--<input type="text" class="form-control" id="login-username" placeholder="Username" tabindex="1">--}}

                {{--</div> <!-- /.form-group -->--}}

                {{--<div class="form-group">--}}
                    {{--<label for="login-password" class="placeholder-hidden">Password</label>--}}
                    {{--<input type="password" class="form-control" id="login-password" placeholder="Password" tabindex="2">--}}
                {{--</div> <!-- /.form-group -->--}}

                {{--<div class="form-group clearfix">--}}
                    {{--<div class="pull-left">--}}
                        {{--<label class="checkbox-inline">--}}
                            {{--<input type="checkbox" class="" value="" tabindex="3">Remember me--}}
                        {{--</label>--}}
                    {{--</div>--}}

                    {{--<div class="pull-right">--}}
                        {{--<a href="/reset">Forgot Password?</a>--}}
                    {{--</div>--}}
                {{--</div> <!-- /.form-group -->--}}

                {{--<div class="form-group">--}}
                    {{--<button type="submit" class="btn btn-primary btn-block btn-lg" tabindex="4">--}}
                        {{--Signin &nbsp; <i class="fa fa-play-circle"></i>--}}
                    {{--</button>--}}
                {{--</div> <!-- /.form-group -->--}}

            {{--</form>--}}


        </div> <!-- /.account-body -->

        @yield('account-footer')
    </div> <!-- /.account-wrapper -->

@if(Auth::check())
<footer class="footer">

   @include('include.footer')

</footer>
@endif
<script src="{{ asset('Theme/js/libs/jquery-1.10.1.min.js') }}"></script>
<script src="{{ asset('Theme/js/libs/jquery-ui-1.9.2.custom.min.js') }}"></script>
<script src="{{ asset('Theme/js/libs/bootstrap.min.js') }}"></script>

<!--[if lt IE 9]>
<script src="{{ asset('Theme/js/libs/excanvas.compiled.js') }}"></script>
<![endif]-->
<!-- App JS -->
<script src="{{ asset('Theme/js/target-admin.js') }}"></script>




</body>
</html>
