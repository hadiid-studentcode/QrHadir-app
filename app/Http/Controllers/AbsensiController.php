<?php

namespace App\Http\Controllers;

use App\Models\Absensi;
use App\Models\Guests;
use Illuminate\Http\Request;


class AbsensiController extends Controller
{

    protected $guests;

    public function __construct(Guests $guests)
    {
        $this->guests = $guests;
    }

    public function index()
    {

        return view('pages.qrScanner.index');
    }

    public function store(Request $r)
    {

        $qrcode = $r->data;

        

        dd($qrcode);

        // cari guest berdasarkan qrcode
        $dataGuests = $this->guests->getGuestsByQrCode($qrcode);


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

            return redirect('/qr-scanner')->with('success', 'Absensi telah ditambahkan');
        }
    }

}
