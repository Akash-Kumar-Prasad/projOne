<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
//use App\Http\Controllers\FormController;
// use App\Http\Controllers\GradecardController;
//use App\Http\Controllers\ProcessFormController;
//use App\Http\Controllers\SessionController;
use App\Http\Controllers\LLController;

Route::get('/', function () {
    return view('welcome');
});

Route::view('ll','loginlogout');

Route::post('llprocess', [LLcontroller::class,'login']);
Route::get('logout', [LLcontroller::class,'logout']);

//for verification of email and enrollment
// Route::view('userform','epveri');

// Route::post('processform',[ProcessFormController::class, 'search']);

//session management
// Route::view('sform', 'home');

// Route::post('processsession',[SessionController::class,'makesession']);