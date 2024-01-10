@extends('layouts.app')

@section('content')
<div class="container"> 
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Form Edit pengiriman barang</h5>
            <div class="col-sm-8">
                <form class="row g-3 mt-2" action="{{ url('penyaluran/' . $row->id) }}" method="POST">
                    <input type="hidden" name="_method" value="PATCH">
                    @csrf

                    <div class="mb-3">
                        <label for="id_penerima" class="form-label">Penerima Barang*</label>
                        <select class="form-control" name="id_penerima" id="id_penerima">
                            <option value="">-- Pilih --</option>
                            @foreach($penerimas as $penerima)
                            <option value="{{ $penerima->id }}" {{ $row->id_penerima == $penerima->id ? 'selected' : ''}}>{{ $penerima->nama }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="id_jenis" class="form-label">Jenis Barang*</label>
                        <select class="form-control" name="id_jenis" id="id_jenis">
                            <option value="">-- Pilih --</option>
                            @foreach($jeniss as $jenis)
                            <option value="{{ $jenis->id }}" {{ $row->id_jenis == $jenis->id ? 'selected' : ''}}>{{ $jenis->nama_barang }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="jumlah_barang" class="form-label">Jumlah Barang*</label>
                        <input type="number" class="form-control" id="jumlah_barang" name="jumlah_barang" value="{{ $row->jumlah_barang }}" placeholder="Inputkan Jumlah Barang..." required>
                    </div>

                    <div class="mb-3">
                        <label for="tgl_penyaluran" class="form-label">Tanggal Pengiriman*</label>
                        <input type="date" class="form-control" id="tgl_penyaluran" name="tgl_penyaluran" value="{{ $row->tgl_penyaluran }}" placeholder="Inputkan Tanggal..." required>
                    </div>


                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary">Update</button>
                        <a href="{{ url('penyaluran') }}" class="btn btn-warning" >Kembali</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
