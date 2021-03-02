<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{

    public function index()
    {
        return view('register');
    }

    public function registerSubtmit(Request $request)
    {
        return "Form Submitted Successfully!";
    }
}
