@extends('layouts.main')

@section('container')
    {{-- tempat content --}}
    <h1>Tabel Data Siswa</h1>
    <table class="table" id="coffee-table">
        <thead>
            <tr>
                <th scope="col">Nama</th>
                <th scope="col">Gender</th>
                <th scope="col">Umur</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($siswa as $student)
                <tr>
                    <td>{{ $student->nama }}</td>
                    <td>{{ $student->gender }}</td>
                    <td>{{ $student->umur }}</td>
                    <td>
                        <a type="button" class="btn btn-primary" href="/siswa/detail/{{$student->id}}">Detail</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
