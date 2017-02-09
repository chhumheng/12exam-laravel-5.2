<?php

//Route::group(['prefix' => LaravelLocalization::setLocale()], function()
//{
    Route::group(['middleware' => 'web'], function () {
        Route::auth();

        Route::get('/', 'HomeController@index');
        Route::get('/test', 'TestController@index');

        Route::get('/student/course', function (){
            return view('accounts/course');
        } );

//    Route::get('/country', 'CountryController@index');
        Route::resource('/country', 'CountryController');
        ;

        Route::get('/mail',function(){
            dd(Config::get('mail'));
//        return "Hi! mail testing ........ !!!!!";

//        Mail::send('template/mail/festival/test', ['user' => 'Tasol Solution Pvt Ltd'], function($m){
//            $m->to('chhumheng2014@gmail.com', 'CHHUM Heng')->subject('Testing mail!!!');
//        });
//        return "successfully mail send";
        } );


//============ authentication ===========
        //Route::auth();
        //OR

        // Authentication Routes...
//    $this->get('login', 'Auth\AuthController@showLoginForm');
//    $this->post('login', 'Auth\AuthController@login');
//    $this->get('logout', 'Auth\AuthController@logout');
//
//// Registration Routes...
//    $this->get('register', 'Auth\AuthController@showRegistrationForm');
//    $this->post('register', 'Auth\AuthController@register');
//
//// Password Reset Routes...
//    $this->get('password/reset/{token?}', 'Auth\PasswordController@showResetForm');
//    $this->post('password/email', 'Auth\PasswordController@sendResetLinkEmail');
//    $this->post('password/reset', 'Auth\PasswordController@reset');
    });
// #end middleware

//});
