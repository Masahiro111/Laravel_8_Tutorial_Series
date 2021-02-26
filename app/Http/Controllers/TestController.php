<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function getFistLastName()
    {
        return splitName("Mark John");
    }
}
