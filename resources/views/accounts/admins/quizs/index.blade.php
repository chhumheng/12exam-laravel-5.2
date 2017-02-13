@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="col-md-1"></div>
        <div class="col-md-10">
            <div id="page-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Quiz Lists!</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
            </div>
        </div>
    </div>







    {{--TABLE--}}
    <div class="container">
        @include('flash::message')

        <div class="text-center panel-body" >
            @if (Session::has('flash_notification.message'))
                <div class="row">
                    <div class="text-center col-md-12">
                        @include('flash::message')
                    </div>
                </div>
            @endif
            <div class="row">
                <div class="text-right col-md-12">
                    {!! Html::decode(link_to( '/account/school/create','<span class="glyphicon glyphicon-plus"></span> '.'Add New School', $attributes = array('class' => 'btn btn-sm btn-info','title' => 'Add New School' ))) !!}
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover table-condensed" >
                            <thead class="text-center">
                            <tr>
                                <th>Number</th>
                                <th>Contact Name</th>
                                <th>Title</th>
                                <th>Phone</th>
                                <th>Website</th>
                                <th>Fax</th>
                                <th>Address</th>
                                <th width="100">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>DD</td>
                                    <td>DD</td>
                                    <td>DD</td>
                                    <td>DD</td>
                                    <td>DD</td>
                                    <td>DD</td>
                                    <td>
                                        {!! Html::decode(link_to( '/','<span class="glyphicon glyphicon-pencil"></span>', $attributes = array('class' => 'btn btn-sm btn-info', 'title' => 'Edit' ))) !!}
                                        {!! Html::decode(link_to( '/','<span class="glyphicon glyphicon-pencil"></span>', $attributes = array('class' => 'glyphicon glyphicon-trash', 'title' => 'Delete' ))) !!}
                                    </td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>DD</td>
                                    <td>DD</td>
                                    <td>DD</td>
                                    <td>DD</td>
                                    <td>DD</td>
                                    <td>DD</td>
                                    <td>DD</td>
                                </tr>
                            {{--@foreach($countries as $row)--}}
                                {{--<tr @if( $row->countriesStatus == 0 ) class="danger" @endif >--}}
                                    {{--<td>{{ $row->pkCountriesID }}</td>--}}
                                    {{--<td>--}}
                                        {{--{{ object_get($row, "countriesName{$lang}" ) }}--}}
                                    {{--</td>--}}
                                    {{--<td class="text-center">--}}
                                        {{--{!! Html::decode(link_to( '/'.LaravelLocalization::getCurrentLocale().'/'.config("constants.ROUTE_PREFIX_NAME").'/country/'.$row->pkCountriesID.'/edit','<span class="glyphicon glyphicon-pencil"></span>', $attributes = array('class' => 'btn btn-sm btn-info', 'title' => trans('text_lang.editCountry') ))) !!}--}}
                                        {{--{!! Html::decode(link_to( '/'.LaravelLocalization::getCurrentLocale().'/'.config("constants.ROUTE_PREFIX_NAME").'/country/'.$row->pkCountriesID,'<span class="glyphicon glyphicon-trash"></span>', $attributes = array('class' => 'btn btn-sm btn-danger btndelete','title' => trans('text_lang.deleteCountry') , 'data-title'=> trans('text_lang.title_delete'), 'data-content' => trans('text_lang.content_delete'), 'onClick'=>'return false;'))) !!}--}}
                                    {{--</td>--}}
                                {{--</tr>--}}
                            {{--@endforeach--}}
                            </tbody>
                        </table>
                    </div>
                    <div class="row text-right noPadding">
                        <div class="col-md-12">
{{--                            {!! $countries->links() !!}--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{--#text-center panel-body--}}



    </div>
@endsection

