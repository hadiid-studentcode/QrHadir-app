<?php

namespace App\Http\Controllers;

use App\Models\Guests;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    protected $guests;

    public function __construct(Guests $guests)
    {
        $this->guests = $guests;
    }

    public function index()
    {
        $dataGuest = $this->guests->GetGuests();

        return view('pages.guest.index', [
            'guests' => $dataGuest,
            'title' => 'Guest',
            'active' => 'guests',
        ]);
    }

    public function show($id)
    {

        // Asumsikan getGuestsById adalah query scope atau metode kustom pada model Guests
        $dataGuest = $this->guests->findOrFail($id);

        if (empty($dataGuest->qr_code)) {
            $dataQR = hash('crc32', $dataGuest->nama_customer);
            // Menggunakan Eloquent untuk update, lebih aman dan praktis
            $dataGuest->qr_code = $dataGuest->id.'-'.$dataQR;

            $dataGuest->save(); // Menyimpan perubahan ke database
        }

        return view('pages.guest.show', [
            'title' => 'Guest',
            'active' => 'guests',
            'guest' => $dataGuest,
            'nama' => $dataGuest->nama_customer,
            'kota' => $dataGuest->kota,
            'segmen' => $dataGuest->segmen,
        ]);
    }

    public function store(Request $request)
    {

        $jumlahGuests = $this->guests->jumlahGuests();

        $id = $jumlahGuests + 1;

        $data = [
            'id' => $id,
            'nama_customer' => $request->nama_customer,
            'kota' => $request->kota,
            'segmen' => $request->segmen,

        ];

        $this->guests->create($data);

        return back()->with('success', 'Data tamu berhasil ditambahkan.');
    }

    public function destroy($id)
    {
        try {

            $guest = $this->guests->findOrFail($id);
            $guest->delete();

            return back()->with('success', 'Data tamu berhasil dihapus.');
        } catch (\Exception $e) {
            return back();
        }
    }

    public function create(Request $r)
    {
        $search = $r->search;

        $guestsSearch = $this->guests->search($search);

        return view('pages.guest.index')
            ->with('guestsSearch', $guestsSearch)
            ->with('title', 'Guest')
            ->with('active', 'guests')
            ->with('search', $search);
    }

    public function nonQR()
    {

        $dataGuest = $this->guests->GetGuestsNonQR();

        return view('pages.guest.index')
            ->with('title', 'Guest')
            ->with('active', 'guests')
            ->with('guests_NonQR', $dataGuest);
    }

    // Tambahkan metode lain sesuai kebutuhan
}
