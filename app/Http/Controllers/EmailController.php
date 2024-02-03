<?php

namespace App\Http\Controllers;

use App\Mail\RequestNotification;
use App\Models\FacebookRequest;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Models\InstaRequest;
use App\Models\YoutubeRequest;

class EmailController extends Controller
{
    public function sendEmail(Request $request)
{
    $requestId =  $request->input('id');


    // Find the InstaRequest by ID
    $instaRequest = InstaRequest::find($requestId);

    // Check if the InstaRequest exists
    if ($instaRequest) {
        // Update the status in the database
        $instaRequest->status = $request->status ?? 'approved';
        $instaRequest->save();
        
        $request->validate([
            'email' => 'string|email',
            'package' => 'string',
            'username' => 'string',
        ]);

        $email = $request->input('email');

        // Log some information for debugging
        Log::info('EmailController - sendEmail - Email: ' . $email);

        // Send email
        Mail::to($email)->send(new RequestNotification($request->all()));

        return redirect()->back()->with('success', 'Email sent successfully.');
    }
    // Log an error if InstaRequest does not exist
    Log::error('EmailController - sendEmail - Invalid request ID.');

    return redirect()->back()->with('error', 'Invalid request ID.');
}


public function sendYTEmail(Request $request)
{
    $requestId =  $request->input('id');


    // Find the InstaRequest by ID
    $instaRequest = YoutubeRequest::find($requestId);

    // Check if the InstaRequest exists
    if ($instaRequest) {
        // Update the status in the database
        $instaRequest->status = $request->status ?? 'approved';
        $instaRequest->save();
        
        $request->validate([
            'email' => 'string|email',
            'package' => 'string',
            'username' => 'string',
        ]);

        $email = $request->input('email');

        // Log some information for debugging
        Log::info('EmailController - sendEmail - Email: ' . $email);

        // Send email
        Mail::to($email)->send(new RequestNotification($request->all()));

        return redirect()->back()->with('success', 'Email sent successfully.');
    }
    // Log an error if InstaRequest does not exist
    Log::error('EmailController - sendEmail - Invalid request ID.');

    return redirect()->back()->with('error', 'Invalid request ID.');
}


public function sendFBEmail(Request $request)
{
    $requestId =  $request->input('id');


    // Find the InstaRequest by ID
    $instaRequest = FacebookRequest::find($requestId);

    // Check if the InstaRequest exists
    if ($instaRequest) {
        // Update the status in the database
        $instaRequest->status = $request->status ?? 'approved';
        $instaRequest->save();
        
        $request->validate([
            'email' => 'string|email',
            'package' => 'string',
            'username' => 'string',
        ]);

        $email = $request->input('email');

        // Log some information for debugging
        Log::info('EmailController - sendEmail - Email: ' . $email);

        // Send email
        Mail::to($email)->send(new RequestNotification($request->all()));

        return redirect()->back()->with('success', 'Email sent successfully.');
    }
    // Log an error if InstaRequest does not exist
    Log::error('EmailController - sendEmail - Invalid request ID.');

    return redirect()->back()->with('error', 'Invalid request ID.');
}

public function disapprove(Request $request)
{
    $requestId =  $request->input('id');
    // Find the InstaRequest by ID
    $instaRequest = InstaRequest::find($requestId);

    // Check if the InstaRequest exists
    if ($instaRequest) {
        // Update the status in the database
        $instaRequest->status = $request->status ?? 'disapproved';
        $instaRequest->save();

        return redirect()->back()->with('success', 'Status Changed successfully.');
    }
    
    return redirect()->back()->with('error', 'Invalid request ID.');
}


public function fbdisapprove(Request $request)
{
    $requestId =  $request->input('id');
    // Find the InstaRequest by ID
    $instaRequest = FacebookRequest::find($requestId);

    // Check if the InstaRequest exists
    if ($instaRequest) {
        // Update the status in the database
        $instaRequest->status = $request->status ?? 'disapproved';
        $instaRequest->save();

        return redirect()->back()->with('success', 'Status Changed successfully.');
    }
    
    return redirect()->back()->with('error', 'Invalid request ID.');
}


public function ytdisapprove(Request $request)
{
    $requestId =  $request->input('id');
    // Find the InstaRequest by ID
    $instaRequest = YoutubeRequest::find($requestId);

    // Check if the InstaRequest exists
    if ($instaRequest) {
        // Update the status in the database
        $instaRequest->status = $request->status ?? 'disapproved';
        $instaRequest->save();

        return redirect()->back()->with('success', 'Status Changed successfully.');
    }
    
    return redirect()->back()->with('error', 'Invalid request ID.');
}
}
