<?php

namespace App\Http\Controllers;

use App\Models\InstaRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class FormController extends Controller
{
    public function index(Request $request)
    {
        $value = $request->input('value', 'default_value');
        if ($value === 'likes') {
            $type = 'Likes';
        }
        elseif ($value === 'followers') {
            $type = 'Followers';
        }
        elseif ($value === 'views') {
            $type = 'Views';
        }
        else {
            abort(404);
        }
        return view('pages.instagram', ['type' => $type]);
    }

    public function store(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'transaction_id' => 'required|string',
            'package' => 'required|string',
            'username' => 'required|string',
            'url' => 'required|url',
            'user_type' => 'required|string',
            'request_for ' => 'string',
            'email' => 'required|email',
        ]);
        // Create a new request record in the database
        InstaRequest::create([
            'transaction_id' => $request->input('transaction_id'),
            'package'=> $request->input('package'),
            'username' => $request->input('username'),
            'url' => $request->input('url'),
            'user_type' => $request->input('user_type'),
            'request_for' => $request->input('request_for'),
            'email' => $request->input('email'),


        ]

        );
        Session::flash('success', 'Data inserted successfully!');
        return redirect()->route('home');


    }


}
