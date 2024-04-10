<?php

namespace App\Http\Controllers;

use App\Models\Absensi;
use App\Models\Guests;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // total guest
        $totalGuests = Guests::count();
        // total guest yang hadir diambil dari table absensi
        $totalHadir = Absensi::where('status', 'hadir')->count();
        dd($totalHadir);

        // end


        return view('pages.dashboard.index')
            ->with('active', 'dashboard')
            ->with('title', 'Dashboard');
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
        //
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
        //
    }
}
