<!DOCTYPE html>
<html>
<head>
    <link href="{{ URL::asset('css/login.css') }}" rel='stylesheet' type='text/css'>

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
<div class="conntainner-fluid">
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <h2 align="center">Login Form</h2>

            <form action="action_page.php">
                <div class="imgcontainer">
                    {{--<img src="img_avatar2.png" alt="Avatar" class="avatar">--}}
                    <img src="{{ URL::asset('images/img_avatar2.png') }}" alt="Avatar" class="avatar">
                </div>

                <div class="login-pading">
                    <label><b>Username</b></label>
                    <input type="text" placeholder="Enter Username" name="uname" required>

                    <label><b>Password</b></label>
                    <input type="password" placeholder="Enter Password" name="psw" required>

                    <button type="submit">Login</button>
                    <input type="checkbox" checked="checked"> Remember me
                </div>

                <div class="login-pading" style="background-color:#f1f1f1">
                    <button type="button" class="cancelbtn">Cancel</button>
                    <span class="psw">Forgot <a href="#">password?</a></span>
                </div>
            </form>
        </div>
        <div class="col-md-4"></div>
    </div>
</div>
</body>
</html>