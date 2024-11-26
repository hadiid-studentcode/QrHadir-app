<?php

use App\Http\Controllers\KelolaAbsenController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



Route::get('absensi/{id}', [KelolaAbsenController::class, 'getDataAbsensi']);
