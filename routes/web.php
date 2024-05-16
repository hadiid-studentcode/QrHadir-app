



<?php


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
