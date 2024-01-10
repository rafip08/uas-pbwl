    @extends('layouts.app')
    
    @section('content')
    <div class="container">
    <div class="card">
        <div class="card-body">
            
        <!-- Konten Anda -->
        <script>
            @if(session('alert-success'))
                alert('{{ session('alert-success') }}');
            @endif
        </script>


        <strong><h3>Data Penyaluran Barang</h3></strong>
        <a href="{{ url('penyaluran/create') }}" class="btn btn-primary mb-3 float-end"><i class="bi bi-plus"></i> Tambah Baru</a>

        <table id="dataTable" class="table table-hover table-striped table-bordered"><table class="table table-hover table-striped table-bordered">
            <thead>
            <tr>
                <th scope="col" class="text-center">No</th>
                <th scope="col">Penerima</th>
                <th scope="col">Jenis Barang</th>
                <th scope="col">Jumlah Barang</th>
                <th scope="col">Tanggal Pengiriman</th>
                <th scope="col" class="text-center">Aksi</th>
            </tr>
            </thead>
            <tbody>
            @php $no = 1; @endphp
            @foreach($rows as $penyaluran)
            <tr>
                <th class="text-center">{{ $no++ }}</th>
                <td>{{ $penyaluran->penerima->nama }}</td>
                <td>{{ $penyaluran->jenis->nama_barang }}</td>
                <td>{{ $penyaluran->jumlah_barang }}</td>
                <td>{{ \Carbon\Carbon::parse($penyaluran->tgl_penyaluran)->format('d/m/Y') }}</td>
                <td class="text-center">
                    <div class="btn-group" role="group">
                        <a href="{{ url('penyaluran/edit/' . $penyaluran->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ url('penyaluran/' . $penyaluran->id) }}" method="post">
                            <input type="hidden" name="_method" value="DELETE">
                            @csrf
                            <input type="submit" value="Delete" class="btn btn-danger" onclick="return confirm('Yakin Ingin Menghapus Data Ini ?');">
                        </form>
                    </div>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
        </div>
    </div>
    </div>
    @endsection