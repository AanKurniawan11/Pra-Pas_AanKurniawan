@extends('layouts.main')

@section('content')
<div class="container mt-4">
    <h1>Fixture</h1>

    <table class="table table-bordered table-striped">
        <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Jumlah Pertemuan</th>
                <th scope="col">Club</th>
                <th scope="col">Club</th>
                <th scope="col">Tanggal Pertandingan</th>
                <th scope="col">Stadium</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @php $no = 1 @endphp
            @foreach($fixtures as $fixture)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $fixture["hasil_terakhir"] }}</td>
                <td>{{ $fixture["Club1"] }}</td>
                <td>{{ $fixture["Club2"] }}</td>
                <td>{{ $fixture["tgl_main"] }}</td>
                <td>{{ $fixture["venue"] }}</td>
                <td>
                <a href="{{ route('fixtures.show', ['fixture' => $fixture]) }}"  class="btn btn-primary" style="background-color: #818FB4; border-color: #818FB4;">Detail</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
