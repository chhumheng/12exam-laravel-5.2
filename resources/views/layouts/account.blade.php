<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{--<meta name="csrf-token" content="{{ csrf_token() }}">--}}
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

{{--    <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}">--}}
    {{--<link rel="stylesheet" href="{{ URL::asset('css/bootstrapCustom.css') }}">--}}
    @yield('extraCSS')

    <!-- Script -->
    <script src="{{ URL::asset('lib/bower_components/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ URL::asset('lib/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>

</head>
<body>
    {{--<nav></nav>--}}
    {{--@yield('breadcrumbs')--}}


    {{--<div class="container-fluid">--}}
        {{--<div class="row" style="background-color: #7a43b6">--}}
            {{--hello world--}}
            {{--<div class="col-md-3" style="background-color: #00b3ee">--}}
                {{--<span>col-md-3</span>--}}
            {{--</div>--}}
            {{--<div class="col-md-9" style="background-color: #2ca02c">--}}
                {{--sdsdg--}}
                {{--@yield('content')--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}


    @include('../includes._footer')

    @yield('extraJS')

</body>
</html>
