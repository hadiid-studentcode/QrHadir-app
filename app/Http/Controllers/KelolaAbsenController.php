<?php

namespace App\Http\Controllers;

use App\Models\Absensi;
use App\Models\Kelola_absensi;
use Illuminate\Http\Request;

class KelolaAbsenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    protected $kelola;

    protected $absensi;

    public function __construct(Kelola_absensi $kelola, Absensi $absensi)
    {
        $this->kelola = $kelola;
        $this->absensi = $absensi;
    }

    public function index()
    {

        $dataKelolaAbsensi = $this->kelola->getKelolaAbsensi();

        return view('pages.kelola.index')
            ->with('kelola_absensi', $dataKelolaAbsensi)
            ->with('title', 'Kelola Absensi')
            ->with('active', 'kelola');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $date = $request->tanggal;
        $check_in_time = $request->check_in;
        $check_out_time = $request->check_out;

        $data = [
            'date' => $date,
            'check_in_time' => $check_in_time,
            'check_out_time' => $check_out_time,
        ];

        $this->kelola->setKelolaAbsensi($data);

        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

        //    get tanggal di kelola absensi

        $dataKelolaAbsensi = $this->kelola->getKelolaAbsensiById($id);

        $dataAbsensi = $this->absensi->getAbsensiByDate($dataKelolaAbsensi->date);

        return view('pages.kelola.show')
            ->with('absensi', $dataAbsensi)
            ->with('date', $dataKelolaAbsensi->date)
            ->with('first_time', $dataKelolaAbsensi->check_in_time)
            ->with('title', 'Kelola Absensi')
            ->with('active', 'kelola')
            ->with('last_time', $dataKelolaAbsensi->check_out_time);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $this->kelola->deleteKelolaAbsensi($id);

        return back();
    }
}
