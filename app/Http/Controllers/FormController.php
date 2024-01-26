<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
