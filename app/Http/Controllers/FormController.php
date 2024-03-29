<?php

namespace App\Http\Controllers;

use App\Models\FacebookRequest;
use App\Models\InstaRequest;
use App\Models\YoutubeRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class FormController extends Controller
{
    public function Instagram(Request $request)
    {
        $app_name = 'Instagram';
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
        return view('pages.socialapp', ['type' => $type , 'app_name' => $app_name]);
    }

    public function store(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'transaction_id' => 'string',
            'package' => 'required|string',
            'username' => 'required|string',
            'url' => 'required|url',
            'user_type' => 'string',
            'request_for ' => 'string',
            'email' => 'email',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
      
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs('uploads', $imageName, 'public'); // Adjust the storage path as needed
        }
        $imageName = "";

        InstaRequest::create([
            'transaction_id' => $request->input('transaction_id'),
            'package'=> $request->input('package'),
            'username' => $request->input('username'),
            'url' => $request->input('url'),
            'user_type' => $request->input('user_type'),
            'request_for' => $request->input('request_for'),
            'email' => $request->input('email'),
            'image' => !empty($imageName) ? 'uploads/' . $imageName : null,

        ]

        );
        Session::flash('success', 'Data inserted successfully!');
        return redirect()->route('thankyou');


    }

    public function facebook(Request $request)
    {
        $app_name = 'Facebook';
        $value = $request->input('value', 'default_value');
        if ($value === 'followers') {
            $type = 'Followers';
        }
        else {
            abort(404);
        }
        return view('pages.socialapp', ['type' => $type , 'app_name' => $app_name]);
    }

    public function fbstore(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'transaction_id' => 'string',
            'package' => 'required|string',
            'username' => 'required|string',
            'url' => 'required|url',
            'request_for ' => 'string',
            'email' => 'required|email',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        // Create a new request record in the database
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs('uploads', $imageName, 'public'); // Adjust the storage path as needed
        }
        $imageName = "";
        
        FacebookRequest::create([
            'transaction_id' => $request->input('transaction_id'),
            'package'=> $request->input('package'),
            'username' => $request->input('username'),
            'url' => $request->input('url'),
            'user_type' => $request->input('user_type'),
            'request_for' => $request->input('request_for'),
            'email' => $request->input('email'),
            'image' => !empty($imageName) ? 'uploads/' . $imageName : null,
        ]
        );
        Session::flash('success', 'Data inserted successfully!');
        return redirect()->route('thankyou');


    }

    public function youtube(Request $request)
    {
        $app_name = 'Youtube';
        $value = $request->input('value', 'default_value');
        if ($value === 'subscribers') {
            $type = 'Subscribers';
        }
        else {
            abort(404);
        }
        return view('pages.socialapp', ['type' => $type , 'app_name' => $app_name]);
    }

    public function ytstore(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'transaction_id' => 'string',
            'package' => 'required|string',
            'username' => 'required|string',
            'url' => 'required|url',
            'request_for ' => 'string',
            'email' => 'required|email',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        // Create a new request record in the database
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs('uploads', $imageName, 'public'); // Adjust the storage path as needed
        }

        $imageName = "";

        YoutubeRequest::create([
            'transaction_id' => $request->input('transaction_id'),
            'package'=> $request->input('package'),
            'username' => $request->input('username'),
            'url' => $request->input('url'),
            'user_type' => $request->input('user_type'),
            'request_for' => $request->input('request_for'),
            'email' => $request->input('email'),
            'image' => !empty($imageName) ? 'uploads/' . $imageName : null,
        ]
        );
        Session::flash('success', 'Data inserted successfully!');
        return redirect()->route('thankyou');


    }


}
