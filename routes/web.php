<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    return view('welcome');
});

Route::post('/', [LoginController::class, 'authenticate'])->name('login.authenticate');

// dashboard
Route::resource('/dashboard', DashboardController::class);

// guest

Route::resource('/guests', GuestController::class);
Route::get('/cetak', [GuestController::class, 'cetak'])->name('guests.cetak');

// kelola absensi
