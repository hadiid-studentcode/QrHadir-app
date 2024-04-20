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
        $kelolaAbsensiDataTerbaru = $this->kelolaAbsensi->getKelolaAbsensiLastFirst();

        if (!empty($kelolaAbsensiDataTerbaru)) {
            $absenBerdasarkanTanggalTerbaru = $this->absensi->getAbsensiByDate($kelolaAbsensiDataTerbaru->date);

            $date = $kelolaAbsensiDataTerbaru->date;
            $time_first = $kelolaAbsensiDataTerbaru->check_in_time;
            $time_last = $kelolaAbsensiDataTerbaru->check_out_time;
        } else {
            $kelolaAbsensiDataTerbaru = null;
            $date = null;
            $time_first = null;
            $time_last = null;
            $absenBerdasarkanTanggalTerbaru = [];
        }






        $data = [
            'totalGuests' => $totalGuests,
            'totalHadir' => $totalHadir,
            'kelolaAbsensiData' => $kelolaAbsensiDataTerbaru,
            'date' => $date,
            'time_first' => $time_first,
            'time_last' => $time_last,
            'absenBerdasarkanTanggalTerbaru' => $absenBerdasarkanTanggalTerbaru,
            'active' => 'dashboard',
            'title' => 'Dashboard'
        ];






        return view('pages.dashboard.index', $data);
    }
}
