@extends('layouts.app')

@section('body')

<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Edit Data</h3>
          </div>
          <div class="card-body">
            <form action="{{ route('reservasi.update', $reservasi->id) }}" method="POST" enctype="multipart/form-data">
              @csrf
              @method('PUT')
              <div class="form-group">
                <label>Nama</label>
                <input type="text" class="form-control" name="nama" value="{{ $reservasi->nama }}" required />
              </div>
              <div class="form-group">
                <label>Nomor</label>
                <input type="text" class="form-control" name="nomor" value="{{ $reservasi->nomor }}" required />
              </div>
              <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" name="email" value="{{ $reservasi->email }}" required />
              </div>
              <div class="form-group col-md-6">
                <label for="layanan" style="color: black">Pilih Layanan</label>
                <select class="form-control" id="layanan" name="layanan">
                  <option value="layanan1" {{ $reservasi->layanan == 'layanan1' ? 'selected' : '' }}>Make up wisuda + hair do</option>
                  <option value="layanan2" {{ $reservasi->layanan == 'layanan2' ? 'selected' : '' }}>Make up prewedding + hair do + kostum</option>
                  <option value="layanan3" {{ $reservasi->layanan == 'layanan3' ? 'selected' : '' }}>Make up wedding (pengantin wanita + pria) + hair do + baju + asesoris</option>
                  <option value="layanan4" {{ $reservasi->layanan == 'layanan4' ? 'selected' : '' }}>Make up wedding (2 pengantin + 2 bapak + 2 ibu) + hair do + baju + asesoris</option>
                  <option value="layanan5" {{ $reservasi->layanan == 'layanan5' ? 'selected' : '' }}>Make up + hair do engagement</option>
                </select>
              </div>
              
              <div class="form-group">
                <label>Tanggal Reservasi</label>
                <input type="date" class="form-control" name="tanggal" id="tanggal" value="{{ $reservasi->tanggal }}"
                  required />
              </div>

              <br>
              <button type="submit" class="btn btn-primary">Edit</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection