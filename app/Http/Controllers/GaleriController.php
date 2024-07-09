<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Galeri;

class GaleriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $galeri = Galeri::get();
        return view('pages.galeri.index',compact('galeri'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.galeri.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'foto' => 'required|image',
        ]);
    
        $input = $request->all();
    
        // Handle file upload
        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $imageName = $file->getClientOriginalName();
            $destinationPath = 'foto_galeri/';
            $file->move($destinationPath, $imageName);
            $input['foto'] = $imageName;
        }
    
        Galeri::create($input);
    
        return redirect()->route('galeri.index')->with('success', 'berhasil ditambahkan');
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
        $galeri = Galeri::findOrFail($id);

        return view('pages.galeri.edit', compact('galeri'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'foto' => 'nullable|image', // Mengubah required menjadi nullable agar tidak wajib diisi
        ]);
    
        $galeri = Galeri::findOrFail($id);
    
        // Menggunakan data yang diinputkan kecuali untuk foto
        $input = $request->except('foto');
    
        // Handle file upload jika ada
        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $imageName = time() . '.' . $file->getClientOriginalExtension();
            $destinationPath = 'foto_galeri/';
            $file->move($destinationPath, $imageName);
            // Hapus foto lama jika ada
            if ($galeri->foto) {
                unlink(public_path($destinationPath . $galeri->foto));
            }
            $input['foto'] = $imageName;
        }
    
        // Update data galeri
        $galeri->update($input);
    
        return redirect()->route('galeri.index')->with('success', 'Data berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $galeri = Galeri::findOrFail($id);
        $galeri->delete();
        return redirect()->route('galeri.index')->with('success', 'deleted successfully');
    }
}
