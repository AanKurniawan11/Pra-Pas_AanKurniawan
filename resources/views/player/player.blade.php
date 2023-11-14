@extends('layouts.main')

@section('content')
<div class="container mt-4">
    <h1>Player</h1>

    <table class="table table-bordered table-striped">
        <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">No Punggung</th>
                <th scope="col">Nama</th>
                <th scope="col">Pemain</th>
                <th scope="col">Tanggal Lahir</th>
                <th scope="col">Club</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @php $no = 1 @endphp
            @foreach($players as $player)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $player["no_pung"] }}</td>
                <td>{{ $player["nama"] }}</td>
                <td>
                    <img src="{{ asset('img/' . $player["image"]) }}" alt="Player Image" style="width: 80px; height: 85px">
                </td>
                <td>{{ $player["tgl_lahir"] }}</td>
                <td>{{ $player["club"] }}</td>
                <td>
                <a href="{{ route('players.show', ['player' => $player]) }}" class="btn btn-primary" style="background-color: #818FB4; border-color: #818FB4;">Detail</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
    