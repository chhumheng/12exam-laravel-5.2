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


<div class="row">
    <div class="col-md-5 col-md-offset-4">
        <div class="col-md-12 text-center">
            <br/>
            <h3><b>Login</b></h3>
            <br/>
        </div>
        @if (Session::has('flash_notification.message'))
            <div class="row">
                <div class="text-center col-md-10 col-md-offset-1">
                    @include('flash::message')
                </div>
            </div>
        @endif
        <form class="form-horizontal" role="form" method="POST">
            {!! csrf_field() !!}
            <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                <label class="col-md-10 col-md-offset-1">
                    {{ trans('text_lang.email') }} <span class="requredStar">***</span>
                </label>

                <div class="col-md-10 col-md-offset-1">
                    <div class="right-inner-addon">
                        <i class="glyphicon glyphicon-envelope"></i>
                        <input type="email" class="form-control" name="email" value="{{ old('email') }}">
                    </div>
                    @if ($errors->has('email'))
                        <span class="help-block">
                                <strong>{!! $errors->first('email')  !!}</strong>
                            </span>
                    @endif
                </div>
            </div>

            <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
                <label class="col-md-10 col-md-offset-1">
                    {{ trans('text_lang.password') }} <span class="requredStar">***</span>
                </label>

                <div class="col-md-10 col-md-offset-1">
                    <div class="right-inner-addon">
                        <i class="glyphicon glyphicon-lock"></i>
                        <input type="password" class="form-control" name="password">
                    </div>
                    @if ($errors->has('password'))
                        <span class="help-block">
                                <strong>{!! $errors->first('password')  !!}</strong>
                            </span>
                    @endif
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-10 col-md-offset-1">
                    <button type="submit" class="btn btn-primary  btn-block">
                        {{ trans('text_lang.loginAsEmployer') }}
                    </button>
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-7 col-md-offset-1">
                    <em class="requredStar"><b>{{ trans('text_lang.noteStar') }}</b> {{ trans('text_lang.descriptionNotesRequired') }}</em>
                </div>
            </div>
        </form>
    </div>
</div>


@include('../includes._footer')

@yield('extraJS')

</body>
</html>
