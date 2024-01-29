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

Route::get('/instagram', [FormController::class, 'index'])->name('instagram');
Route::post('/store-requestt', [FormController::class, 'store'])->name('store.request');


Route::view('register','admin.auth.register')->name('admin.register.view')->middleware('guest');
Route::view('login','admin.auth.login')->name('admin.login.view')->middleware('guest');
Route::post('/aunthenticate',[LoginController::class,'authenticate'])->name('admin.login');
Route::post('/store',[RegisterController::class,'store'])->name('store');
Route::get('logout',[LoginController::class,'logout'])->name('logout');


Route::middleware(['auth'])->group(function () {
    Route::group(['prefix' => 'admin'], function () {
        Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');

    });

    // Add other authenticated routes here

});
Route::post('/send-email', [EmailController::class, 'sendEmail'])->name('send.email');
