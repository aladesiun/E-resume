<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('home');
});
Route::get('/history', function () {
    return view('work-history');
});
Route::get('/education', function () {
    return view('education');
});
Route::get('/skills', function () {
    return view('skills');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/signup', function () {
    return view('signup');
});

Route::post('/register', [\App\Http\Controllers\UsersController::class, 'register']);
Route::post('/login', [\App\Http\Controllers\UsersController::class, 'login']);
Route::get('/logout', [\App\Http\Controllers\UsersController::class, 'logout']);
Route::post('/create', [\App\Http\Controllers\ResumeController::class, 'create']);
Route::get('/resume', [\App\Http\Controllers\ResumeController::class, 'getresume']);
Route::post('/create-skills', [\App\Http\Controllers\ResumeController::class, 'createskills']);
Route::post('/create-experience', [\App\Http\Controllers\ResumeController::class, 'createExperience']);
