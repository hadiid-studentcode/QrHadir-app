<?php

namespace App\Http\Controllers;

use App\Models\Absensi;
use App\Models\Guests;
use Carbon\Carbon;
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




        // cari guest berdasarkan qrcode
        $dataGuests = $this->guests->getGuestsByQrCode($qrcode);


        if ($dataGuests == null) {
            return 'not found';
        } else {



            // tambahkan absensi
            $data = [
                'id_guests' => $dataGuests->id,
                'date' => Carbon::now('Asia/Jakarta')->format('Y-m-d'),
                'time' => Carbon::now('Asia/Jakarta')->format('H:i:s'),
                'status' => 'Hadir',
            ];


            // kondisi jika data sudah masuk dan tidak duplikat
            $absensi = Absensi::where('id_guests', $dataGuests->id)->first();

            try {
                if ($absensi != null) {

                    return redirect('/qr-scanner')->with('warning', 'Data Sudah Ada');
                } else {


                    $resultAbsensi = new Absensi();
                    $resultAbsensi->setAbsensi($data);
                    return redirect('/qr-scanner')->with('success', 'Absensi telah ditambahkan');

                }
            } catch (\Throwable $th) {
                return redirect('/qr-scanner')->with('warning', 'Terjadi Kesalahan');
            }


        }
    }
}
