@extends('layouts.app')

@section('content')
<div class="container"> 
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Form Tambah Data Pengiriman</h5>
            <div class="col-sm-8">
                <form class="row g-3 mt-2" action="{{ url('penerima') }}" method="POST">
                    @csrf

                    <div class="mb-3">
                        <label for="kode_toko" class="form-label">Kode Toko*</label>
                        <input type="text" class="form-control" id="kode_toko" name="kode_toko" placeholder="Inputkan kode_toko Penerima..." required>
                    </div>
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama Toko*</label>
                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Inputkan Nama Penerima..." required>
                    </div>

                    <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat Toko*</label>
                        <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Inputkan Alamat..." required>
                    </div>

                    <div class="mb-3">
                        <label for="nope" class="form-label">No Hp Toko*</label>
                        <input type="text" class="form-control" id="nope" name="nope" placeholder="Inputkan Nomor nope..." required>
                    </div>

                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <a href="{{ url('penerima') }}" class="btn btn-warning" >Kembali</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
