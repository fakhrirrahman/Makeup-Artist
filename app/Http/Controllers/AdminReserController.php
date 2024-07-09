<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AdminReser;

class AdminReserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $AdminReser = AdminReser::get();

        return view('pages.AdminReser.index', compact('AdminReser'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.AdminReser.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'isi' => 'required',
            'foto' => 'required|image',
        ]);

        $input = $request->all();

        // Handle file upload
        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $imageName = $file->getClientOriginalName();
            $destinationPath = 'foto/';
            $file->move($destinationPath, $imageName);
            $input['foto'] = $imageName;
        }

        AdminReser::create($input);

        return redirect()->route('AdminReser.index')->with('success', 'berhasil ditambahkan');
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
        $AdminReser = AdminReser::findOrFail($id);

        return view('pages.AdminReser.edit', compact('AdminReser'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'judul' => 'required',
            'isi' => 'required',
            'foto' => 'required|image',
        ]);

        $AdminReser = AdminReser::findOrFail($id);
    
        // Menggunakan data yang diinputkan kecuali untuk foto
        $input = $request->except('foto');
    
        // Handle file upload jika ada
        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $imageName = time() . '.' . $file->getClientOriginalExtension();
            $destinationPath = 'foto/';
            $file->move($destinationPath, $imageName);
            // Hapus foto lama jika ada
            // if ($AdminReser->foto) {
            //     unlink(public_path($destinationPath . $AdminReser->foto));
            // }
            $input['foto'] = $imageName;
        }
    
        // Update data AdminReser
        $AdminReser->update($input);
    
        return redirect()->route('AdminReser.index')->with('success', 'Data berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $AdminReser = AdminReser::findOrFail($id);
        $AdminReser->delete();
        return redirect()->route('AdminReser.index')->with('success', ' deleted successfully');
    }
}
