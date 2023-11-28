@extends('layouts.main')

@section('content')
<style>
    .custom-image {
        max-width: 200px; 
    }

    .custom-back-btn {
        background-color: #818FB4;
        border-color: #818FB4;
        color: #fff;
    }

    .custom-back-btn:hover {
        background-color: #606c84;
        border-color: #606c84;
        color: #fff;
    }
</style>

<div class="container mt-4">
    <div class="row justify-content-center"> 
        <div class="col-md-6">
            <div class="card">
                <div class="card-header bg-info text-white">
                    <h5 class="mb-0">Detail Fixture</h5>
                </div>
                <div class="card-body">
                    <p class="card-text">
                        <strong>Jumlah Pertemuan:</strong> {{ $fixture['hasil_terakhir'] }}
                    </p>
                    <p class="card-text">
                        <strong>Club:</strong> {{ $fixture['Club1']}}
                    </p>
                    <p class="card-text">
                        <strong>Club:</strong> {{ $fixture['Club2'] }}
                    </p>
                    <p class="card-text">
                        <strong>Tanggal Pertandingan:</strong> {{ $fixture['tgl_main'] }}
                    </p>
                    <p class="card-text">
                        <strong>Stadium:</strong> {{ $fixture['venue'] }}
                    </p>
                    
                    <a href="javascript:history.back()" class="btn custom-back-btn">Back</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
