<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
//use App\Http\Controllers\FormController;
// use App\Http\Controllers\GradecardController;
use App\Http\Controllers\ProcessFormController;
use App\Http\Controllers\SessionController;

Route::get('/', function () {
    return view('welcome');
});


// Route::view('userform','epveri');

// Route::post('processform',[ProcessFormController::class, 'search']);

Route::view('sform', 'home');

Route::post('processsession',[SessionController::class,'makesession']);