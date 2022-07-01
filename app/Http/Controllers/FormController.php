<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function index(Request $request)
    {
        return view('home');
    }

    public function download(Request $request)
    {
        return view('home');
    }
}
