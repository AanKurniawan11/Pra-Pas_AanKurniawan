@extends('layouts.main')

@section('content')
<div class="container mt-4">
    <h1 class="mb-4">Detail Player</h1>

    <div class="card border-primary shadow">
        <div class="card-body">
            <h5 class="card-title text-center mb-4 text-primary">Detail Player</h5>
            <div class="text-center">
                <img src="{{ asset('img/' . $player["image"]) }}" alt="Player Image" class="img-fluid rounded-circle border border-primary" style="width: 150px; height: 150px;">
            </div>
            <div class="mt-4">
                <p class="card-text"><strong>No Punggung:</strong> {{ $player['no_pung'] }}</p>
                <p class="card-text"><strong>Nama:</strong> {{ $player['nama'] }}</p>
                <p class="card-text"><strong>Tanggal Lahir:</strong> {{ $player['tgl_lahir'] }}</p>
                <p class="card-text"><strong>Club:</strong> {{ $player['club'] }}</p>
            </div>
            <div class="text-center mt-4">
                <a href="javascript:history.back()" class="btn btn-primary">Back</a>
            </div>
        </div>
    </div>
</div>
@endsection
