<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class PaginationController extends Controller
{
    public function allUsers()
    {
        $users = User::paginate(20);
        return view('users', compact('users'));
    }
}
