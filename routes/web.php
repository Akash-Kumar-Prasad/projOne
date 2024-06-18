<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
//use App\Http\Controllers\FormController;
// use App\Http\Controllers\GradecardController;
use App\Http\Controllers\ProcessFormController;

Route::get('/', function () {
    return view('welcome');
});


Route::view('userform','epveri');

Route::post('processform',[ProcessFormController::class, 'search']);