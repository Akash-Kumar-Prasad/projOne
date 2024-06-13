<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
//use App\Http\Controllers\FormController;
use App\Http\Controllers\GradecardController;

Route::get('/', function () {
    return view('welcome');
});

// Route::view('userpage', 'userform');

// Route::post('processuserform', [FormController::class,'savedata']);

//Grade card

Route::view('gradepage', 'gradecard');

Route::post('processgradecard',[GradecardController::class,'searchdata']);