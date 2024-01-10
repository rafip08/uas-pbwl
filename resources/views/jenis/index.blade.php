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


        <strong><h3>Data Jenis Barang</h3></strong>
        <a href="{{ url('jenis/create') }}" class="btn btn-primary mb-3 float-end"><i class="bi bi-plus"></i> Tambah Data Barang </a>

        <table id="dataTable" class="table table-hover table-striped table-bordered"><table class="table table-hover table-striped table-bordered">
            <thead>
            <tr>
                <th scope="col" class="text-center">No</th>
                <th scope="col">Jenis Barang</th>
                <th scope="col">Keterangan</th>
                <th scope="col" class="text-center">Aksi</th>
            </tr>
            </thead>
            <tbody>
            @php $no = 1; @endphp
            @foreach($rows as $jenis)
            <tr>
                <th class="text-center">{{ $no++ }}</th>
                <td>{{ $jenis->nama_barang }}</td>
                <td>{{ $jenis->keterangan }}</td>
                <td class="text-center">
                    <div class="btn-group" role="group">
                        <a href="{{ url('jenis/edit/' . $jenis->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ url('jenis/' . $jenis->id) }}" method="post">
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