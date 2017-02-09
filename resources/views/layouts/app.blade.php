<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {{--@include('includes._google_crawl')--}}
    {{--<link rel="shortcut icon" href="/favicon.png">--}}
    <title>@yield('title')</title>

    <!-- Bootstrap -->
    <link href="{{ URL::asset('lib/bower_components/bootstrap/dist/css/bootstrap.min.css') }}" rel='stylesheet' type='text/css'>

    <!-- Fonts -->
    <link href="{{ URL::asset('lib/bower_components/font-awesome/css/font-awesome.min.css') }}" rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>

    <!-- Styles -->
    <link rel="stylesheet" href="{{ URL::asset('lib/bower_components/normalize-css/normalize.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ URL::asset('lib/bower_components/flag-icon-css/css/flag-icon.min.css') }}" type="text/css">

    {{--CSS--}}
    @yield('extraCSS')
    <link href="{{ URL::asset('css/index.css') }}" rel='stylesheet' type='text/css'>
</head>
<body id="app-layout">
    <nav class="navbar navbar-default navbar-static-top navbar-fixed-top nav-background">

        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}">
                    12Exam
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    <li><a href="{{ url('/account') }}">Dashboard</a></li>
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Login</a></li>
                        <li><a href="{{ url('/register') }}">Register</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>
    <div class="margin-top-under-fixed-top"></div>
    @yield('content')


    @include('../includes._footer')

    <!-- JavaScripts -->
    <script src="{{ URL::asset('lib/bower_components/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ URL::asset('lib/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    @yield('extraJS')


</body>
</html>
