<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});

Route::view('userpage', 'userform');

Route::post('processuserform', [FormController::class,'savedata']);