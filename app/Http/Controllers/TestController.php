<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Flash;

class TestController extends Controller
{
    public function __construct()
    {
        //$this->middleware('auth');
    }

    public function index()
    {
        Flash::message( 'Test Flush message' );

        return view('accounts/test');
    }

}
