<?php

namespace App\Http\Controllers;

use App\Models\Kelola_absensi;
use Illuminate\Http\Request;

class KelolaAbsenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $resultKelolaAbsensi = new Kelola_absensi();
        $dataKelolaAbsensi = $resultKelolaAbsensi->getKelolaAbsensi();


        return view('pages.kelola.index')
            ->with('kelola_absensi', $dataKelolaAbsensi);
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
            'check_out_time' => $check_out_time
        ];

        $resultKelolaAbsensi = new Kelola_absensi();
        $resultKelolaAbsensi->setKelolaAbsensi($data);

        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
        $resultKelolaAbsensi = new Kelola_absensi();
        $resultKelolaAbsensi->deleteKelolaAbsensi($id);

        return back();
    }
}
