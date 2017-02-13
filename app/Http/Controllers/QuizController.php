<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class QuizController extends Controller
{

    public function index()
    {
        return view('accounts.admins.quizs.index');
    }

    public function create()
    {
        return view('accounts.admins.quizs.add');
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
