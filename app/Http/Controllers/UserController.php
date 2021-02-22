<?php

namespace App\Http\Controllers;

use App\Models\Phone;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(Request $request)
    {
        return $request->path();
    }

    public function insertRecord()
    {
        $phone = new Phone();
        $phone->phone = "1234567890";

        $user = new User();
        $user->name = "john";
        $user->email = "user@example.com";
        $user->password = encrypt('password');
        $user->save();
        $user->phone()->save($phone);

        return "record has been created successfully";
    }

    public function fetchPhoneByUser($id)
    {
        $phone = User::find($id)->phone;
        return $phone;
    }
}
