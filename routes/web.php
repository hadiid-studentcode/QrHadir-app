



<?php

use App\Exports\GuestsExport;
use App\Http\Controllers\AbsensiController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\KelolaAbsenController;
use App\Http\Controllers\LoginController;
use App\Models\Guests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Maatwebsite\Excel\Facades\Excel;

Route::get('/', function () {

    return view('welcome');
})->middleware('guest')->name('login');

Route::post('/', [LoginController::class, 'authenticate'])->name('authenticate')->middleware('guest');

Route::get('/logout', [LoginController::class, 'logout'])->name('logout')->middleware('auth');

// dashboard
Route::resource('/dashboard', DashboardController::class);

// guest

Route::resource('/guests', GuestController::class);
Route::get('/guests/show/non-generate-qr', [GuestController::class, 'nonQR'])->name('guests.nonQR');

Route::get('/cetak', [GuestController::class, 'cetak'])->name('guests.cetak');

// kelola absensi
Route::resource('/kelola-absensi', KelolaAbsenController::class);


Route::get('/kelola-absensi/show/export-excel/{date}/{check_in_time}/{check_out_time}', [KelolaAbsenController::class, 'cetak'])->name('kelola-absensi.cetak');

// absensi
// Route::get('/absensi/{qr_code}', [AbsensiController::class, 'store'])->name('absen.store');

Route::get('/qr-scanner', [AbsensiController::class, 'index'])->name('absen.index');

// Route::get('/qr-scanner', function () {

//     return view('pages.qrScanner.index');
// });

Route::post('/save', [AbsensiController::class, 'store'])->name('absen.store');

// Route::post('/save', function (Request $r) {

//     $string = $r->data;
//     $parts = explode('-', $string, 2); // Batasi hasil pecahan menjadi 2 bagian

//     $kode = $parts[1];

//     // get id guest by kode
//     $resultGuests = new Guests();
//     $dataGuests = $resultGuests->getGuestsByQrCode($r->data);
//     dd($dataGuests->id);

//     return back();
// });

Route::get('/hasing', function () {

    $test = hash('crc32', 'hadiid andri yulison');

    dd($test);
});

Route::get('/export-excel', function () {

   return Excel::download(new GuestsExport, 'guests.xlsx');
});

require __DIR__ . '/auth.php';




