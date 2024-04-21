



<?php


// use App\Http\Controllers\ProfileController;
// use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

// require __DIR__ . '/auth.php';

use App\Http\Controllers\AbsensiController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\KelolaAbsenController;
use App\Http\Controllers\LoginController;
use App\Http\Resources\AbsenResource;
use App\Models\Guests;
use Illuminate\Http\Request;
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


Route::get('/qr-scanner', function () {

    return view('pages.qr-scanner');
});


Route::post('/save', function (Request $r) {



    $string = $r->data;
    $parts = explode('-', $string, 2); // Batasi hasil pecahan menjadi 2 bagian

    $kode = $parts[1];

  return back();
});
