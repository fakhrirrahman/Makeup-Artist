@extends('layouts.app')

@section('body')
<div class="container">
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">Reservasi</h1>
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
                <tr>
                    <th>#</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Nomor</th>
                    <th>Alamat</th>
                    <th>Layanan</th>
                    <th>Tanggal reservasi</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse($reservasi as $reser)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $reser->nama }}</td>
                    <td>{{ $reser->email }}</td>
                    <td>{{ $reser->nomor }}</td>
                    <td>{{ $reser->alamat }}</td>
                    <td>
                        @switch($reser->layanan)
                        @case('layanan1')
                        Make Up Wisuda + Hair Do
                        @break

                        @case('layanan2')
                        Make Up Prewedding + Hair Do + Kostum
                        @break

                        @case('layanan3')
                        Make Up Wedding (Pengantin Wanita + Pria) + Hair Do + Baju + Asesoris
                        @break

                        @case('layanan4')
                        Make Up Wedding (2 Pengantin + 2 Bapak + 2 Ibu) + Hair Do + Baju + Asesoris
                        @break

                        @case('layanan5')
                        Make Up + Hair Do Engagement
                        @break

                        @case('layanan6')
                        Make Up + Hair Do Engagement
                        @break

                        @default
                        Unknown Layanan
                        @endswitch
                    </td>
                    <td>{{ $reser->tanggal }}</td>
                    <td>
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <a href="{{ route('reservasi.edit', $reser->id)}}" type="button" class="btn btn-warning">Edit</a>
                            <form action="{{ route('reservasi.destroy', $reser->id) }}" method="POST" type="button" class="btn btn-danger p-0"
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
