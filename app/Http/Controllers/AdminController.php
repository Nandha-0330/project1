<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Notification;
use App\Models\PdfFile;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use App\Models\InstaRequest;

class AdminController extends Controller
{
    public function dashboard()
    {
        $this->middleware('auth:admin');
        $insta_requests = InstaRequest::all();
        return view('admin.dashboard', ['insta_requests' => $insta_requests]);
    }


}
