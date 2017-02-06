<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Config;
use Mail;

class MailController extends Controller
{
    public function sentMail(){
        dd(Config::get('mail'));

//        $user = array('title'=>'m', 'name'=>"CHHUM Heng", 'id'=>1, 'phone'=>'015204520');
//        $emails = ['chhumheng2014@gmail.com','heng@open.org.kh'];
//
//        Mail::send('emails.newApplicant', ['user' => $user], function ($m) use ($emails) {
//            $m->to($emails, 'CHHUM Heng Recieve 12Exam')->subject('Registration confirmation E-mail');
//        });
    }
}
