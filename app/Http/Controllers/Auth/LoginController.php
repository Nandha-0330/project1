<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{

    public function authenticate(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $email = $request->input('email');
        $password = $request->input('password');

        if (Auth::attempt(['email' => $email, 'password' => $password])) {
            // Authentication successful
            return redirect()->route('dashboard')->with('success', 'Admin Login Successfully');
        } else {
            // Authentication failed
            return redirect()->route('admin.login.view')->with('alert', 'Mismatch Details');
        }
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('admin.login.view');
    }
}
