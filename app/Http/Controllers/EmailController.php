<?php

namespace App\Http\Controllers;

use App\Mail\RequestNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class EmailController extends Controller
{
    public function sendEmail(Request $request)
    {
        $request->validate([
            'email' => 'string|email',
            'package' => 'string',
            'username' => 'string',
        ]);

        $email = $request->input('email');

        Mail::to($email)->send(new RequestNotification($request->all()));

        return redirect()->back()->with('success', 'Email sent successfully.');
    }
}
