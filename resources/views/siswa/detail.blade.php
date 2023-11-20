@extends('layouts.main')

@section('container')
    {{-- tempat content --}}
    <h1>Tabel Data Siswa</h1>
    <table class="table" id="makanan-table">
        <thead>
            <tr>
                <th scope="col">Nama</th>
                <th scope="col">Gender</th>
                <th scope="col">tanggal_lahir</th>
                <th scope="col">Makanan_favorit</th>
                <th scope="col">Minuman_favorit</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
                <tr>
                    <td>{{ $siswa->nama }}</td>
                    <td>{{ $siswa->gender }}</td>
                    <td>{{ $siswa->tanggal_lahir }}</td>
                    <td>{{ $siswa->makanan_favorit }}</td>
                    <td>{{ $siswa->minuman_favorit }}</td>
                    <td>
                        <a type="button" class="btn btn-primary" href="/siswa/all/">Back</a>
                    </td>
                </tr>
        </tbody>
    </table>
@endsection

