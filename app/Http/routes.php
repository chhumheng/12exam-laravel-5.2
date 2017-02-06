<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/', 'HomeController@index');
    Route::get('/account', 'AccountController@index');





    //Mail
//    Route::get('/sendMail', 'MailController@sentMail');

    Route::get('/mail',function(){
        dd(Config::get('mail'));
//        return "Hi! mail testing ........ !!!!!";

//        Mail::send('template/mail/festival/test', ['user' => 'Tasol Solution Pvt Ltd'], function($m){
//            $m->to('chhumheng2014@gmail.com', 'CHHUM Heng')->subject('Testing mail!!!');
//        });
//        return "successfully mail send";
    } );







//    Route::get('/', 'HomeController@index');

//    Route::get('/', function () {
//        return view('login');
//    });
//
//    Route::get('/c', function () {
//        return view('layouts/child');
//    });

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
