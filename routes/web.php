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

Route::middleware('auth:web')->group(function () {
    //get pdf
    Route::get('getresume', [\App\Http\Controllers\HtmlPdfController::class, 'htmlPdf'])->name('htmlPdf');

    Route::get('/contact', [\App\Http\Controllers\ComponentController::class, "getcontact"]);
    Route::get('/skills', [\App\Http\Controllers\ComponentController::class, "getskill"]);
    Route::get('/education', [\App\Http\Controllers\ComponentController::class, "geteducation"]);
    Route::get('/work-history', [\App\Http\Controllers\ComponentController::class, "gethistory"]);
//    Route::get('/resumes', [\App\Http\Controllers\ResumeController::class, 'getresumetemp']);

    Route::post('/edit-contact', [\App\Http\Controllers\ResumeController::class, 'editcontact']);

    Route::post('/create-contact', [\App\Http\Controllers\ResumeController::class, 'create']);
    Route::post('/create-skills', [\App\Http\Controllers\ResumeController::class, 'createskills']);
    Route::post('/create-experience', [\App\Http\Controllers\ResumeController::class, 'createExperience']);
    Route::post('/create-education', [\App\Http\Controllers\ResumeController::class, 'createEducation']);
    Route::get('/html-pdf', [HTMLPDFController::class, 'htmlpdf'])->name('htmlPdf');

    Route::get('/logout', [\App\Http\Controllers\UsersController::class, 'logout'])->name('logout');
    Route::get('/resume', [\App\Http\Controllers\ResumeController::class, 'getresume']);
    Route::get('/oldresume', [\App\Http\Controllers\ResumeController::class, 'getresume']);


});
    Route::get('/', function () {
        return view('home');
    });
    Route::post('/register', [\App\Http\Controllers\UsersController::class, 'register']);
    Route::post('/login', [\App\Http\Controllers\UsersController::class, 'login']);

    Route::get('/login', function () {
        return view('login');
    })->name('login');

    Route::get('/signup', function () {
        return view('signup');
    });
    Route::get('/newresume', function () {
    return view('cv');
    });
    Route::get('/fluent',[\App\Http\Controllers\FluentController::class, 'fluent']);
