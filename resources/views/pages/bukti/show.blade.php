@extends('layouts.app')

@section('body')
<div class="container">
    {{-- <h1 class="mb-4">Bukti Bayar</h1> --}}
    <div class="text-center">
        <img src="{{ asset('bukti_bayar/' . $bukti->bukti_bayar) }}" alt="Bukti Bayar" class="img-fluid" style="max-width: 100%; height: auto;">
    </div>
    <br>
    <center> 
        <a href="{{ route('bukti.index', $bukti->id)}}" type="button" class="btn btn-primary">Kembali</a>
    </center>
</div>
@endsection
