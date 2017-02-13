@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="text-center panel-body" >
            {{--<div class="row">--}}
                {{--<div class="text-center col-md-12">--}}
                    {{--@include('flash::message')--}}
                {{--</div>--}}
            {{--</div>--}}

            <div class="row">
                <div class="text-right col-md-12">
                    {!! Html::decode(link_to( '/account/country/create','<span class="glyphicon glyphicon-plus"></span> '.trans('text_lang.addCountry'), $attributes = array('class' => 'btn btn-sm btn-info','title' => trans('text_lang.addCountry') ))) !!}
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover table-condensed" >
                            <thead class="text-center">
                            <tr>
                                <th>{{ trans('text_lang.id')}}</th>
                                <th>{{ trans('text_lang.name')}}</th>
                                <th width="100">{{ trans ('text_lang.action') }}</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($countries as $row)
                                <tr @if( $row->countriesStatus == 0 ) class="danger" @endif >
                                    <td>{{ $row->pkCountriesID }}</td>
                                    <td>
                                        {{ object_get($row, "countriesName{$lang}" ) }}
                                    </td>
                                    <td class="text-center">
                                        {!! Html::decode(link_to( '/account/country/'.$row->pkCountriesID.'/edit','<span class="glyphicon glyphicon-pencil"></span>', $attributes = array('class' => 'btn btn-sm btn-info', 'title' => trans('text_lang.editCountry') ))) !!}
                                        {!! Html::decode(link_to( '/account/country/'.$row->pkCountriesID,'<span class="glyphicon glyphicon-trash"></span>', $attributes = array('class' => 'btn btn-sm btn-danger btndelete','title' => trans('text_lang.deleteCountry') , 'data-title'=> trans('text_lang.title_delete'), 'data-content' => trans('text_lang.content_delete'), 'onClick'=>'return false;'))) !!}
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="row text-right noPadding">
                        <div class="col-md-12">
                            {!! $countries->links() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{--#text-center panel-body--}}
    </div>
    @include('includes._modal_dialog')
@endsection

@section('extraJS')
    {{--input more script here--}}
@endsection
