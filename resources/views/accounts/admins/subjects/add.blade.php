@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading"><big>Subsubject</big></div>

                    <div class="panel-body">
                        <div class="row">
                            <div class="text-center col-md-11">
                                @include('flash::message')
                            </div>
                        </div>

                        {!! Form::open(array('url' => '/', 'class' => 'form-horizontal', 'student' => 'form')) !!}

                        <div class="form-group{{ $errors->has('pkSubjectsID') ? ' has-error' : '' }}">
                            {!! Form::label('pkSubjectsID', 'Subject Name', ['class' => 'col-md-3 control-label']) !!}
                            <div class="col-md-7">
                                {!! Form::select('pkSubjectsID', array( 1 => trans('text_lang.active'), 0 => trans('text_lang.inActive')), null, ['class' => 'form-control']) !!}
                                @if ($errors->has('pkSubjectsID'))
                                    <span class="help-block">
                            <strong>{!!  $errors->first('pkSubjectsID') !!}</strong>
                        </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('subjectsName') ? ' has-error' : '' }}">
                            {!! Html::decode(Form::label('subjectsName', 'Subsubject Name' . ' <span class="requredStar">***</span>', array('class' => 'col-md-3 control-label'))) !!}
                            <div class="col-md-7">
                                {!! Form::text('subjectsName', old('subjectsName'), ['class' => 'form-control', 'required' => 'required']) !!}
                                @if ($errors->has('subjectsName'))
                                    <span class="help-block">
                            <strong>{!! $errors->first('subjectsName') !!}</strong>
                        </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('countriesStatus') ? ' has-error' : '' }}">
                            {!! Form::label('countriesStatus', trans('text_lang.Status'), ['class' => 'col-md-3 control-label']) !!}
                            <div class="col-md-7">
                                {!! Form::select('countriesStatus', array( 1 => trans('text_lang.active'), 0 => trans('text_lang.inActive')), null, ['class' => 'form-control']) !!}
                                @if ($errors->has('countriesStatus'))
                                    <span class="help-block">
                            <strong>{!!  $errors->first('countriesStatus') !!}</strong>
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
