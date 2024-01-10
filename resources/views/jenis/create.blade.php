@extends('layouts.app')

@section('content')
<div class="container"> 
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Tambah Jenis Barang</h5>
            <div class="col-sm-8">
                <form class="row g-3 mt-2" action="{{ url('jenis') }}" method="POST">
                    @csrf

                    <div class="mb-3">
                        <label for="nama_barang" class="form-label">Jenis Barang*</label>
                        <input type="text" class="form-control" id="nama_barang" name="nama_barang" placeholder="Inputkan Jenis Barang..." required>
                    </div>
                    
                    <div class="mb-3">
                        <label for="keterangan" class="form-label">Keterangan*</label>
                        <input type="text" class="form-control" id="keterangan" name="keterangan" placeholder="Inputkan keterangan..." required>
                    </div>

                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <a href="{{ url('jenis') }}" class="btn btn-warning" >Kembali</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
