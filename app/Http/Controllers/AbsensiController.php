<?php

namespace App\Http\Controllers;

use App\Models\Absensi;
use App\Models\Guests;

class AbsensiController extends Controller
{
    public function index()
    {

        return view('pages.absensi.index');
    }

    public function store(string $id)
    {

        $qrcode = $id;

        // cari guest berdasarkan qrcode
        $resultGuests = new Guests();
        $dataGuests = $resultGuests->getGuestsByQrCode($qrcode);


        if ($dataGuests == null) {
            return 'not found';
        } else {

            // tambahkan absensi
            $data = [
                'id_guests' => $dataGuests->id,
                'date' => date('Y-m-d'),
                'time' => date('H:i:s'),
                'status' => 'Hadir',
            ];

            $resultAbsensi = new Absensi();
            $resultAbsensi->setAbsensi($data);

            return 'Absensi telah ditambahkan';

        }
    }
}
