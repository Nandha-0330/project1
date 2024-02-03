<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\FacebookRequest;
use App\Models\Notification;
use App\Models\PdfFile;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use App\Models\InstaRequest;
use App\Models\YoutubeRequest;

class AdminController extends Controller
{
    public function dashboard()
    {
        $this->middleware('auth:admin');
        $insta_requests = InstaRequest::all();
        return view('admin.dashboard', ['insta_requests' => $insta_requests]);
    }
    public function facebook()
    {
        $this->middleware('auth:admin');
        $facebook_requests = FacebookRequest::all();
        return view('admin.facebook', ['fb_requests' => $facebook_requests]);
    }

    public function youtube()
    {
        $this->middleware('auth:admin');
        $yt_requests = YoutubeRequest::all();
        return view('admin.youtube', ['yt_requests' => $yt_requests]);
    }


}
