<?php

namespace App\Http\Controllers;

use App\Models\Guests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class GuestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $resultGuest = new Guests();
        $dataGuest = $resultGuest->GetGuests();

        return view('pages.guest.index')
            ->with('guests', $dataGuest)
            ->with('title', 'Guest')
            ->with('active', 'guests');
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
        $request->validate([
            'nama' => 'required',
            'delegasi' => 'required',
        ]);

        $data = [
            'nama_lengkap' => $request->nama,
            'delegasi' => $request->delegasi,
            'link' => '',
            'qr_code' => '',

        ];


        $resultGuest = new Guests();
        $resultGuest->setGuests($data);

        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

        $resultGuest = new Guests();
        $dataGuest = $resultGuest->getGuestsById($id);


        if(empty($dataGuest->qr_code)){

           
            $data = [

                'qr_code' => $dataGuest->id . '-' . bcrypt($dataGuest->nama)

            ];

            // update data
            $resultGuest = new Guests();
            $resultGuest->updateGuests($data, $id);
        }


       

        return view('pages.guest.show')
        ->with('title', 'Guest')
            ->with('active', 'guests')
            ->with('guest', $dataGuest);
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
        $resultGuest = new Guests();
        $resultGuest->deleteGuests($id);

        return back();
    }

    public function cetak()
    {

        $resultGuest = new Guests();
        $dataGuest = $resultGuest->GetGuests();

        return view('pages.guest.cetak')
            ->with('guests', $dataGuest);
    }
}
