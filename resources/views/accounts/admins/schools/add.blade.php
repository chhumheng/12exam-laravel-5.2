@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading"><big>{{ trans('text_lang.addCountry')}}</big></div>

                    <div class="panel-body">
                        <div class="row">
                            <div class="text-center col-md-11">
                                @include('flash::message')
                            </div>
                        </div>

                        {!! Form::open(array('url' => '/', 'class' => 'form-horizontal', 'student' => 'form')) !!}

                        <div class="form-group{{ $errors->has('schoolsName') ? ' has-error' : '' }}">
                            {!! Html::decode(Form::label('schoolsName', 'School Name' . ' <span class="requredStar">***</span>', array('class' => 'col-md-3 control-label'))) !!}
                            <div class="col-md-7">
                                {!! Form::text('schoolsName', old('schoolsName'), ['class' => 'form-control', 'required' => 'required']) !!}
                                @if ($errors->has('schoolsName'))
                                    <span class="help-block">
                            <strong>{!! $errors->first('schoolsName') !!}</strong>
                        </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('schoolsFirstName') ? ' has-error' : '' }}">
                            {!! Html::decode(Form::label('schoolsFirstName', 'Contact Name' . ' <span class="requredStar">***</span>', array('class' => 'col-md-3 control-label'))) !!}
                            <div class="col-md-7">
                                {!! Form::text('schoolsFirstName', old('schoolsFirstName'), ['class' => 'form-control', 'required' => 'required']) !!}
                                @if ($errors->has('schoolsFirstName'))
                                    <span class="help-block">
                            <strong>{!! $errors->first('schoolsFirstName') !!}</strong>
                        </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('schoolsLastName') ? ' has-error' : '' }}">
                            {!! Html::decode(Form::label('schoolsLastName', 'Contact Last Name' . ' <span class="requredStar">***</span>', array('class' => 'col-md-3 control-label'))) !!}
                            <div class="col-md-7">
                                {!! Form::text('schoolsLastName', old('schoolsLastName'), ['class' => 'form-control', 'required' => 'required']) !!}
                                @if ($errors->has('schoolsLastName'))
                                    <span class="help-block">
                            <strong>{!! $errors->first('schoolsLastName') !!}</strong>
                        </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group form-group-lg">
                            <div class="col-md-7 col-md-offset-3">
                                <em class="requredStar"><b>{{ trans('text_lang.noteStar') }}</b> {{ trans('text_lang.descriptionNotesRequired') }}</em>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="text-right col-md-7 col-md-offset-3">
                                <button type="submit" class="btn btn-primary">
                                    {{ trans('text_lang.save')}}
                                </button>
                                <a class="btn btn-success" href="{{ '/student' }}">{{ trans('text_lang.cancel')}}</a>
                            </div>
                        </div>
                        {!! Form::close() !!}
                    </div>
                    {{--#panel-body--}}
                </div>
            </div>
        </div>
    </div>

@endsection
