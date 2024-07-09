@extends('layouts.app')

@section('body')
    <h1 class="mb-0">Add reservasi</h1>
    <hr />
    <form action="{{ route('reservasi.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Name</label>
                <input type="text" name="nama" class="form-control" placeholder="Nama" value="" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Email</label>
                <input type="text" name="email" class="form-control" placeholder="Email" value="" >
            </div>
            <div class="col mb-3">
                <label class="form-label">No HP</label>
                <input type="text" name="nomor" class="form-control" placeholder="No HP" value="" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Alamat</label>
                <input type="text" name="alamat" class="form-control" placeholder="Alamat" value="" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Layanan</label>
                <select name="layanan" class="form-control">
                    <option value="1">Layanan 1</option>
                    <option value="2">Layanan 2</option>
                    <option value="3">Layanan 3</option>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Tanggal</label>
                <input type="date" name="tanggal" class="form-control" placeholder="Tanggal" value="" >
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Jumlah Bayar</label>
                <input type="text" name="jumlah" class="form-control" placeholder="Jumlah Bayar" value="" >
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Bukti Bayar</label>
                <input type="file" name="bukti_bayar" class="form-control" >
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection
