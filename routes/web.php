<?php

use App\Http\Controllers\FormController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\EmailController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/instagram', [FormController::class, 'Instagram'])->name('instagram');
Route::post('/store-insta-request', [FormController::class, 'store'])->name('store.request');

Route::get('/facebook', [FormController::class, 'Facebook'])->name('Facebook');
Route::post('/store-fb-request', [FormController::class, 'fbstore'])->name('store.request.fb');

Route::get('/youtube', [FormController::class, 'youtube'])->name('youtube');
Route::post('/store-yt-request', [FormController::class, 'ytstore'])->name('store.request.yt');

Route::get('/thank-you', function () {return view('thankyou');})->name('thankyou');


// Route::view('register','admin.auth.register')->name('admin.register.view')->middleware('guest');
Route::view('login','admin.auth.login')->name('admin.login.view')->middleware('guest');
Route::post('/aunthenticate',[LoginController::class,'authenticate'])->name('admin.login');
Route::post('/store',[RegisterController::class,'store'])->name('store');
Route::get('logout',[LoginController::class,'logout'])->name('logout');


Route::middleware(['auth'])->group(function () {
    Route::group(['prefix' => 'admin'], function () {
        Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
        Route::get('/facebook_requests', [AdminController::class, 'facebook'])->name('facebook_requests');
        Route::get('/youtube_requests', [AdminController::class, 'youtube'])->name('youtube_requests');




    });

    // Add other authenticated routes here

});
Route::post('/send-email', [EmailController::class, 'sendEmail'])->name('send.email');
Route::post('/send-ytemail', [EmailController::class, 'sendYTEmail'])->name('send.ytemail');
Route::post('/send-fbemail', [EmailController::class, 'sendFBEmail'])->name('send.fbemail');

Route::post('/cancel_request', [EmailController::class, 'disapprove'])->name('disapprove');
Route::post('/cancel_ytrequest', [EmailController::class, 'ytdisapprove'])->name('ytdisapprove');
Route::post('/cancel_fbrequest', [EmailController::class, 'fbdisapprove'])->name('fbdisapprove');
