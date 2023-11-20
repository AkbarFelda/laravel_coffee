@extends('layouts.main')

@foreach ($coffee as $drinks)
    <tr>
        <td>{{ $drinks->nama }}</td>
        <td>{{ $drinks->jenis }}</td>
        <td>{{ $drinks->harga }}</td>
        <td>
            <a type="button" class="btn btn-primary" href="/coffee/detail/{{ $drinks->id }}">Detail</a>
            <a type="button" class="btn btn-warning">Edit</a>
            <a type="button" class="btn btn-danger">Danger</a>
        </td>
    </tr>
@endforeach
