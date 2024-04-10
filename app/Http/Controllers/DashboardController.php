<?php

namespace App\Http\Controllers;

use App\Models\Absensi;
use App\Models\Guests;
use App\Models\Kelola_absensi;

class DashboardController extends Controller
{
    protected $guests;
    protected $absensi;
    protected $kelolaAbsensi;

    public function __construct(Guests $guests, Absensi $absensi, Kelola_absensi $kelolaAbsensi)
    {
        $this->guests = $guests;
        $this->absensi = $absensi;
        $this->kelolaAbsensi = $kelolaAbsensi;
    }

    public function index()
    {
        $totalGuests = $this->guests->jumlahGuests();
        $totalHadir = $this->absensi->getGuestAbsensiHadir();
        $kelolaAbsensiDataTerbaru = $this->kelolaAbsensi->getKelolaAbsensi()->last()->first();

        $absenBerdasarkanTanggalTerbaru = $this->absensi->getAbsensiByDate($kelolaAbsensiDataTerbaru->date);




        $data = [
            'totalGuests' => $totalGuests,
            'totalHadir' => $totalHadir,
            'kelolaAbsensiData' => $kelolaAbsensiDataTerbaru,
            'date' => $kelolaAbsensiDataTerbaru->date,
            'time_first' => $kelolaAbsensiDataTerbaru->check_in_time,
            'time_last' => $kelolaAbsensiDataTerbaru->check_out_time,
            'absenBerdasarkanTanggalTerbaru' => $absenBerdasarkanTanggalTerbaru,
            'active' => 'dashboard',
            'title' => 'Dashboard'
        ];

       



        return view('pages.dashboard.index', $data);
    }
}
