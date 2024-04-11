<?php

namespace App\Http\Controllers;

use App\Models\Guests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class GuestController extends Controller
{
    protected $guests;

    public function __construct(Guests $guests)
    {
        $this->guests = $guests;
    }

    public function index()
    {
        $dataGuest = $this->guests->all();

        return view('pages.guest.index', [
            'guests' => $dataGuest,
            'title' => 'Guest',
            'active' => 'guests'
        ]);
    }

    public function show($id)
    {
        // Asumsikan getGuestsById adalah query scope atau metode kustom pada model Guests
        $dataGuest = $this->guests->findOrFail($id);

        if (empty($dataGuest->qr_code)) {
            // Menggunakan Eloquent untuk update, lebih aman dan praktis
            $dataGuest->qr_code = $dataGuest->id . '-' . Hash::make($dataGuest->nama);
            $dataGuest->save(); // Menyimpan perubahan ke database
        }

        return view('pages.guest.show', [
            'title' => 'Guest',
            'active' => 'guests',
            'guest' => $dataGuest
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'delegasi' => 'required',
        ]);

        $this->guests->create([
            'nama_lengkap' => $request->nama,
            'delegasi' => $request->delegasi,
            // Tambahkan field lain sesuai kebutuhan
        ]);

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

    // Tambahkan metode lain sesuai kebutuhan
}
