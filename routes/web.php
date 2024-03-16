<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    
    return view('welcome');
});

Route::post('/', [LoginController::class, 'authenticate'])->name('login.authenticate');