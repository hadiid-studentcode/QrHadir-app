<?php

use App\Http\Controllers\AbsensiController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\KelolaAbsenController;
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
Route::resource('/kelola-absensi', KelolaAbsenController::class);

// absensi
Route::get('/absensi/{qr_code}', [AbsensiController::class, 'store'])->name('absen.store');

Route::get('/absensi', [AbsensiController::class, 'index'])->name('absen.index');
