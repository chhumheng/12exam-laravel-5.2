<!DOCTYPE html>
<html lang="en">
<head>
    @include('includes._header');
</head>
<body id="app-layout">
    @include('includes._navigation')
    <div class="margin-top-under-fixed-top"></div>
    @yield('content')

        @if($role == 1)
            @include('../accounts/admins/dashboard')
        @else
            @include('../accounts/students/dashboard')
        @endif

    @include('../includes._footer')
    <!-- JavaScripts -->
    <script src="{{ URL::asset('lib/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    @yield('extraJS')
</body>
</html>
