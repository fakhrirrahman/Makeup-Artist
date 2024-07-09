<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bukti;

class BuktiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bukti = Bukti::get();

        return view('pages.bukti.index', compact('bukti'));
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
            'bayar' => 'required',
            'jumlah' => 'required',
            'bukti_bayar' => 'required|image',
        ]);

        $input = $request->all();

        // Handle file upload
        if ($request->hasFile('bukti_bayar')) {
            $file = $request->file('bukti_bayar');
            $imageName = $file->getClientOriginalName();
            $destinationPath = 'bukti_bayar/';
            $file->move($destinationPath, $imageName);
            $input['bukti_bayar'] = $imageName;
        }

        Bukti::create($input);

        return redirect()->route('awal.berhasil')->with('success', 'berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $bukti = Bukti::find($id);

        return view('pages.bukti.show', compact('bukti'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $bukti = Bukti::findOrFail($id);

        return view('pages.bukti.edit', compact('bukti'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $bukti = bukti::findOrFail($id);

        $bukti->update($request->all());

        return redirect()->route('bukti.index')->with('success', ' updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $bukti = Bukti::findOrFail($id);
        $bukti->delete();
        return redirect()->route('bukti.index')->with('success', ' deleted successfully');
    }
}
