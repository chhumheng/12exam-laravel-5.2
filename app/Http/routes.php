<?php

//Route::group(['prefix' => LaravelLocalization::setLocale()], function()
//{
    Route::group(['middleware' => 'web'], function () {
        Route::auth();
        Route::get('/', function (){ return view('home'); });
        Route::get('/student/course', function (){ return view('accounts/students/dashboard'); });
        Route::group(['prefix' => 'account'], function () {
            Route::get('/', 'AccountController@account');

        });

        //    Route::get('/country', 'CountryController@index');
        Route::resource('/country', 'CountryController');









        Route::get('/mail',function(){
            dd(Config::get('mail'));
//        return "Hi! mail testing ........ !!!!!";

//        Mail::send('template/mail/festival/test', ['user' => 'Tasol Solution Pvt Ltd'], function($m){
//            $m->to('chhumheng2014@gmail.com', 'CHHUM Heng')->subject('Testing mail!!!');
//        });
//        return "successfully mail send";
        } );


    });
// #end middleware

//});
