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
                    <h5 class="mb-0">Detail Club</h5>
                </div>
                <div class="card-body">
                    <h5 class="card-title">{{ $club['nama'] }}</h5>
                    <p class="card-text">
                        <strong>Tropy:</strong> {{ $club['tropy'] }}
                    </p>
                    <p class="card-text">
                        <strong>Logo:</strong> <img src="{{ asset('img/' . $club["image"]) }}" alt="Club Logo" class="img-thumbnail custom-image">
                    </p>
                    <p class="card-text">
                        <strong>Tanggal Berdiri:</strong> {{ $club['tgl_berdiri'] }}
                    </p>
                    <p class="card-text">
                        <strong>Stadium:</strong> {{ $club['stadium'] }}
                    </p>
                    
                    <a href="javascript:history.back()" class="btn custom-back-btn">Back</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
