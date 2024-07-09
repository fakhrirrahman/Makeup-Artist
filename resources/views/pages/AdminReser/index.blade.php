@extends('layouts.app')

@section('body')
<div class="container">
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">Edit Data Layanan</h1>
        {{-- <a href="{{route('reservasi.create')}}" class="btn btn-primary">Add Book</a> --}}
    </div>
    <hr />
    @if(Session::has('success'))
    <div class="alert alert-success" role="alert">
        {{ Session::get('success') }}
    </div>
    @endif
    <div class="table-responsive">
        <table class="table table-hover">
            <thead class="table-primary">
                <a href="{{route('AdminReser.create')}}" class="btn btn-primary">Tambah</a>
                <tr>
                    <th>#</th>
                    <th>Judul</th>
                    <th>Isi</th>
                    <th>Foto</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @if($AdminReser->count() > 0)
                @foreach($AdminReser as $reser)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $reser->judul }}</td>
                    <td>{{ $reser->isi }}</td>
                    <td><img src="{{ asset('foto/' . $reser->foto) }}" alt="AdminReser Bayar" width="100"></td>

                    </td>
                    <td>
                    <div class="btn-group" role="group" aria-label="Basic example">
                        <a href="{{ route('AdminReser.edit', $reser->id)}}" type="button" class="btn btn-warning">Edit</a>
                        <form action="{{ route('AdminReser.destroy', $reser->id) }}" method="POST" type="button" class="btn btn-danger p-0"
                            onsubmit="return confirm('Delete?')">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger m-0">Delete</button>
                        </form>
                    </div>
                </td>
                </tr>
                @endforeach
                @else
                <tr>
                    <td class="text-center" colspan="10">Deskripsi tidak ada</td>
                </tr>
                @endif
            </tbody>
        </table>
    </div>
</div>
@endsection