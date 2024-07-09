@extends('layouts.app')

@section('body')
<div class="container">
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">Bukti pembayaran</h1>
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
                    <th>Tanggal bayar</th>
                    <th>Jumlah</th>
                    <th>Bukti Bayar</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @if($bukti->count() > 0)
                @foreach($bukti as $reser)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $reser->bayar }}</td>
                    <td>{{ $reser->jumlah }}</td>
                    <td><img src="{{ asset('bukti_bayar/' . $reser->bukti_bayar) }}" alt="Bukti Bayar" width="100"></td>

                    </td>
                    <td>
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <a href="{{ route('bukti.show', $reser->id) }}" type="button"
                                class="btn btn-secondary">Detail</a>
                            <form action="{{ route('bukti.destroy', $reser->id) }}" method="POST" type="button"
                                class="btn btn-danger p-0" onsubmit="return confirm('Delete?')">
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