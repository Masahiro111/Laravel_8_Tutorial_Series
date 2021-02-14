<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $name = 'jon';
        $users = array(
            "name" => "Smith John",
            "email" => "smjohn@example.com",
            "phone" => "0123456789",
        );

        return view('user', compact('name', 'users'));
    }
}
