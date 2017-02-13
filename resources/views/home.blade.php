@extends('layouts.app')

@section('content')
<div class="containner-fluid" style="overflow: hidden;">
    <div class="img-margin-top-home" style="margin-top: -25px">
        <img class="img-responsive" style="width: 100%;" src="{!! asset('images/img_home.png') !!}"/>
    </div>

    {{--<a href="{!! route('routeName') !!}"><img src="/whatever/pic.jpg"></a>--}}
</div>
@endsection
