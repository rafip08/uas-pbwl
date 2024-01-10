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


        <strong><h3>Data Toko</h3></strong>
        <a href="{{ url('penerima/create') }}" class="btn btn-primary mb-3 float-end"><i class="bi bi-plus"></i> Tambah Baru</a>

        <table id="dataTable" class="table table-hover table-striped table-bordered"><table class="table table-hover table-striped table-bordered">
            <thead>
            <tr>
                <th scope="col" class="text-center">No</th>
                <th scope="col">Kode Toko</th>
                <th scope="col">Nama Toko</th>
                <th scope="col">Alamat Toko</th>
                <th scope="col">No Hp  Toko</th>
                <th scope="col" class="text-center">Aksi</th>
            </tr>
            </thead>
            <tbody>
            @php $no = 1; @endphp
            @foreach($rows as $penerima)
            <tr>
                <th class="text-center">{{ $no++ }}</th>
                <td>{{ $penerima->kode_toko }}</td>
                <td>{{ $penerima->nama }}</td>
                <td>{{ $penerima->alamat }}</td>
                <td>{{ $penerima->nope }}</td>
                <td class="text-center">
                    <div class="btn-group" role="group">
                        <a href="{{ url('penerima/edit/' . $penerima->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ url('penerima/' . $penerima->id) }}" method="post">
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