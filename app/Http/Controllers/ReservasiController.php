<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservasi;


class ReservasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reservasi = Reservasi::get();

        return view('pages.reserv.index', compact('reservasi'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.reserv.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $existingDate = Reservasi::where('tanggal', $request->tanggal)->first();

    if ($existingDate) {
        return redirect()->back()->with('error', 'Reservasi sudah penuh, silahkan ganti tanggal.');
    }

    Reservasi::create($request->all());

    return redirect()->route('awal.konfir')->with('success', 'Reservasi berhasil.');
}


   
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $reservasi = Reservasi::find($id);

        return view('pages.reserv.show', compact('reservasi'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $reservasi = Reservasi::findOrFail($id);

        return view('pages.reserv.edit', compact('reservasi'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $reservasi = Reservasi::findOrFail($id);

        $reservasi->update($request->all());

        return redirect()->route('reservasi.index')->with('success', 'deskripsi updated successfully');
    }



    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $reservasi = Reservasi::findOrFail($id);
        $reservasi->delete();
        return redirect()->route('reservasi.index')->with('success', 'deskripsi deleted successfully');
    }
    public function getExistingDates()
{
    $dates = Reservasi::pluck('tanggal')->toArray();
    return response()->json($dates);
}



}

