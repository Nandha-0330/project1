<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function store(Request $request){
        $request->validate(
            [
            'name' => 'required',
            'email' => 'required',
            'password' => 'required'
            ]
            );

        $admin = new Admin;
        $admin->name = $request->input('name');
        $admin->email = $request->input('email');
        $admin->password = Hash::make($request->input('password'));
        $admin->save();

        Auth::login($admin);

        return redirect()->route('admin.login.view')->with('success', 'Admin Register Successfully');

    }
}
