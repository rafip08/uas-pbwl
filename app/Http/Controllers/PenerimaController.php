<?php

namespace App\Http\Controllers;

use App\Models\Penerima;
use Illuminate\Http\Request;

class PenerimaController extends Controller
{
    public function index()
    {
        $rows = Penerima::all();

        return view('penerima.index', compact('rows'));
    }

    public function create()
    {
        return view('penerima.create');
    }

    public function store(Request $request)
    {
        // Simpan data
        Penerima::create([
            'kode_toko' => $request->kode_toko,
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'nope' => $request->nope
        ]);

        // Set pesan alert
        $request->session()->flash('alert-success', 'Data berhasil disimpan!');

        // Arahkan pengguna ke rute yang diinginkan
        return redirect('penerima');
    }
    

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $row = Penerima::find($id);
        return view('penerima.edit', compact('row'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $row = Penerima::findOrFail($id);
        $row->update([
            'kode_toko' => $request->kode_toko,
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'nope' => $request->nope
        ]);

        // Set pesan alert
        $request->session()->flash('alert-success', 'Data berhasil diupdate!');

        // Arahkan pengguna ke rute yang diinginkan
        return redirect('penerima');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $row = Penerima::findOrFail($id);

        $row->delete();

        // Set pesan alert
        session()->flash('alert-success', 'Data berhasil dihapus!');

        // Arahkan pengguna ke rute yang diinginkan
        return redirect('penerima');
    }
}
