@extends('layouts.main')

@section('content')
<div class="container mt-4">
    <h1>Club</h1>

    <table class="table table-bordered table-striped">
        <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Trophy</th>
                <th scope="col">Nama</th>
                <th scope="col">Logo</th>
                <th scope="col">Tanggal Berdiri</th>
                <th scope="col">Stadium</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @php $no = 1 @endphp
            @foreach($clubs as $club)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $club["tropy"] }}</td>
                <td>{{ $club["nama"] }}</td>
                <td>
                    <img src="{{ asset('img/' . $club["image"]) }}" alt="Club Logo" style="width: 80px; height: 85px">
                </td>
                <td>{{ $club["tgl_berdiri"] }}</td>
                <td>{{ $club["stadium"] }}</td>
                <td>
                    <a href="{{ route('clubs.show', ['club' => $club]) }}"  class="btn btn-primary" style="background-color: #818FB4; border-color: #818FB4;">Detail</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
