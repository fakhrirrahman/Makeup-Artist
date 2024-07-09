@extends('layouts.app')

@section('body')
    <div class="container">
        {{-- <h1 class="mb-4">Bukti Bayar</h1> --}}
        <div class="text-center">
            <img src="{{ asset('bukti_bayar/' . $reservasi->bukti_bayar) }}" alt="Bukti Bayar" width="400">
        </div>
        <br>
       <center> <a href="{{ route('reservasi.index', $reservasi->id)}}" type="button" class="btn btn-primary">Kembali</a></center>
    </div>
@endsection