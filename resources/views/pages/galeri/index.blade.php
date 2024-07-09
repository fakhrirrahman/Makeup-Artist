@extends('layouts.app')

@section('body')
<div class="container">
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">GALERI</h1>
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
                <div class="card-header border-0 mt-2 text-start">
                <a href="{{route('galeri.create')}}" class="btn btn-primary">Tambah</a>
            </div>
                <tr>
                    <th>#</th>
                    <th>Foto</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse($galeri as $gambar)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td><img src="{{ asset('foto_galeri/' . $gambar->foto) }}" alt="foto_produk" width="100"></td>
                    <td>
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <a href="{{ route('galeri.edit', $gambar->id)}}" type="button" class="btn btn-warning">Edit</a>
                            <form action="{{ route('galeri.destroy', $gambar->id) }}" method="POST" type="button" class="btn btn-danger p-0"
                                onsubmit="return confirm('Delete?')">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger m-0">Delete</button>
                            </form>
                        </div>
                    </td>
                </tr>
                @empty
                <tr>
                    <td class="text-center" colspan="8">Deskripsi tidak ada</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
