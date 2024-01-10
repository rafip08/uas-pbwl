@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Form Edit Penerima Barang</h5>
            <div class="col-sm-8">
                <form class="row g-3 mt-2" action="{{ url('penerima/' . $row->id) }}" method="POST">
                    <input type="hidden" name="_method" value="PATCH">
                    @csrf

                    <div class="mb-3">
                        <label for="kode_toko" class="form-label">Kode Toko*</label>
                        <input type="text" class="form-control" id="kode_toko" name="kode_toko" value="{{ $row->kode_toko }}" placeholder="Inputkan kode_toko Penerima..." required>
                    </div>
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama Toko*</label>
                        <input type="text" class="form-control" id="nama" name="nama" value="{{ $row->nama }}" placeholder="Inputkan Nama Penerima..." required>
                    </div>

                    <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat Toko*</label>
                        <input type="text" class="form-control" id="alamat" name="alamat" value="{{ $row->alamat }}" placeholder="Inputkan Alamat..." required>
                    </div>

                    <div class="mb-3">
                        <label for="nope" class="form-label">No Hp Toko*</label>
                        <input type="text" class="form-control" id="nope" name="nope" value="{{ $row->nope }}" placeholder="Inputkan Nomor nope..." required>
                    </div>

                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary">Update</button>
                        <a href="{{ url('penerima') }}" class="btn btn-warning" >Kembali</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
