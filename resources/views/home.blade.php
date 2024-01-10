@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-warning text-white">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <p class="mb-4">{{ __('Halo,') }} <strong>{{ Auth::user()->name }}</strong>! {{ __('Selamat datang di Sistem Manajemen Penyaluran barang pada Toko Kucingxid!') }}</p>
                    
                    <div class="alert alert-info" role="alert">
                        {{ __('Sistem Penyaluran Barang Antar Toko Kucingxid memberikan gambaran cepat dan efisien tentang operasional penyaluran stok. Dengan grafik kinerja stok yang intuitif, pemantauan real-time status pengantaran, notifikasi instan, dan laporan analisis, pengguna dapat dengan mudah melacak jumlah barang yang disalurkan, status pengiriman, serta mendapatkan wawasan mendalam terkait performa dan keuangan sistem secara keseluruhan.') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
