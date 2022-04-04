<?php

use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/student', function () {
    return view('student.studentlogin');
})->name('studlogin');

Route::get('/lecturer', function () {
    return view('lecturer.lectlogin');
});

Route::get('/admin', function () {
    return view('admin.adminlogin');
});


Route::get('/auth/redirect', function () {
    return Socialite::driver('google')->redirect();
});

Route::get('/google/callback', function () {
    $user = Socialite::driver('google')->user();

    // Check is the email is belong to studen or not
    $isStudent = strpos($user->email, "student");

    $isStudent ? dd("Student") : dd("Not student");
});
