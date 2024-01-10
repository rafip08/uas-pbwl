<?php

namespace App\Http\Controllers;

use App\Models\Penerima;
use App\Models\Jenis;
use App\Models\Penyaluran;
use Illuminate\Http\Request;

class PenyaluranController extends Controller
{
    public function index()
    {
        $rows = Penyaluran::with('penerima', 'jenis')->get();
        return view('penyaluran.index', compact('rows'));

    }

    public function create()
    {
        $penerimas = Penerima::select('id', 'nama')->get();
        $jeniss = Jenis::select('id', 'nama_barang')->get();

        return view('penyaluran.create', compact('penerimas','jeniss'));
    }

    public function store(Request $request)
    {

        // Simpan data
        Penyaluran::create([
            'id_penerima' => $request->id_penerima,
            'id_jenis' => $request->id_jenis,
            'jumlah_barang' => $request->jumlah_barang,
            'tgl_penyaluran' => $request->tgl_penyaluran
        ]);

        // Set pesan alert
        $request->session()->flash('alert-success', 'Data berhasil disimpan!');

        // Arahkan pengguna ke rute yang diinginkan
        return redirect('penyaluran');
    }

    public function edit(string $id)
    {
        $row = Penyaluran::findOrFail($id);
        $penerimas = Penerima::select('id', 'nama')->get();
        $jeniss = Jenis::select('id', 'nama_barang')->get();

        return view('penyaluran.edit', compact('row', 'penerimas','jeniss'));
    }

    public function update(Request $request, string $id)
    {
        $row = Penyaluran::findOrFail($id);
        $row->update([
            'id_penerima' => $request->id_penerima,
            'id_jenis' => $request->id_jenis,
            'jumlah_barang' => $request->jumlah_barang,
            'tgl_penyaluran' => $request->tgl_penyaluran
        ]);

        // Set pesan alert
        $request->session()->flash('alert-success', 'Data berhasil diupdate!');

        // Arahkan pengguna ke rute yang diinginkan
        return redirect('penyaluran');
    }

    public function destroy(string $id)
    {
        $row = Penyaluran::findOrFail($id);

        $row->delete();

        // Set pesan alert
        session()->flash('alert-success', 'Data berhasil dihapus!');

        // Arahkan pengguna ke rute yang diinginkan
        return redirect('penyaluran');
    }
}
