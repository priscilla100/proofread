<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <title>Blank Page - Target Admin</title>

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

<div class="mainbar">

    @include('include.mainbar')

</div> <!-- /.mainbar -->


<div class="container">

    <div class="content">

        <div class="content-container">


            <div class="content-header">
                <h2 class="content-header-title">Blank Page</h2>
                <ol class="breadcrumb">
                    <li><a href="./index.html">Home</a></li>
                    <li><a href="javascript:;">Extra Pages</a></li>
                    <li class="active">Blank Page</li>
                </ol>
            </div> <!-- /.content-header -->
            <h1>Pheew!</h1>


            @yield('content')


        </div> <!-- /.content-container -->

    </div> <!-- /.content -->

</div> <!-- /.container -->


<footer class="footer">

   @include('include.footer')

</footer>

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