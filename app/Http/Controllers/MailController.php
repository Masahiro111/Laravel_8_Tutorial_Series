<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sendEmail()
    {

        $details = [
            'title' => 'Mail from Surfside Media',
            'body' => 'This is for testing mail using mailtrap',
        ];

        Mail::to("")->send(new TestMail($details));
        return "Email Sent";
    }
}
