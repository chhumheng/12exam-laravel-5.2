@extends('layouts.app')

@section('content')
    <div class="container">
        @include('flash::message')

        <div class="containner-fluid">
            <div class="row">
                <a href="{{ URL::asset('/student/course') }}"><img class="img-responsive col-lg-3 col-md-3 col-sm-3 col-xs-6" style="padding: 2px;"   src="{!! asset('images/tests/math.png') !!}"/></a>
                <a href="{{ URL::asset('/student/course') }}"><img class="img-responsive col-lg-3 col-md-3 col-sm-3 col-xs-6" style="padding: 2px;"   src="{!! asset('images/tests/math.png') !!}"/></a>
                <a href="{{ URL::asset('/student/course') }}"><img class="img-responsive col-lg-3 col-md-3 col-sm-3 col-xs-6" style="padding: 2px;"   src="{!! asset('images/tests/math.png') !!}"/></a>
                <a href="{{ URL::asset('/student/course') }}"><img class="img-responsive col-lg-3 col-md-3 col-sm-3 col-xs-6" style="padding: 2px;"   src="{!! asset('images/tests/math.png') !!}"/></a>
            </div>
        </div>

        {!! Form::open(['url' => '/test']) !!}
        //
        dsdgsg
        {!! Form::close() !!}

    </div>
@endsection

@section('extraJS')

@endsection
