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
                <div class="form-group">
                  <label>Layanan</label>
                  <select class="form-control" name="layanan">
                      <option value="layanan1" {{ $reservasi->layanan == 'layanan1' ? 'selected' : '' }}>
                          Make Up Wisuda + Hair Do
                      </option>
                      <!-- Masukkan opsi layanan lainnya di sini -->
                  </select>
                </div>
                <div class="form-group">
                  <label>Tanggal Reservasi</label>
                  <input type="date" class="form-control" name="tanggal" id="tanggal" value="{{ $reservasi->tanggal }}" required />
                </div>
                <div class="form-group">
                  <label>Tanggal Bayar</label>
                  <input type="date" class="form-control" name="bayar" value="{{ $reservasi->bayar }}" required />
                </div>
                <div class="form-group">
                  <label>Jumlah Bayar</label>
                  <input type="text" class="form-control" name="jumlah" value="{{ $reservasi->jumlah }}" required />
                </div>
                <div class="form-group">
                  <label>Bukti Bayar</label>
                  <input type="file" class="form-control" name="bukti_bayar" id="bukti_bayar" />
                  @if ($reservasi->bukti_bayar)
                    <img src="{{ asset('bukti_bayar/' . $reservasi->bukti_bayar) }}" alt="Bukti Bayar" width="150">
                  @endif
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

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Mendapatkan semua tanggal reservasi yang sudah ada dari database
    fetch('/reservasi/get-existing-dates')
        .then(response => response.json())
        .then(data => {
            let existingDates = data;
            let tanggalReservasiInput = document.getElementById('tanggal');
            
            existingDates.forEach(date => {
                // Format tanggal menjadi yyyy-mm-dd
                let formattedDate = new Date(date).toISOString().split('T')[0];
                
                // Menambahkan attribute disabled pada tanggal yang sudah ada
                let option = document.createElement('option');
                option.value = formattedDate;
                option.disabled = true;
                option.text = formattedDate;
                tanggalReservasiInput.appendChild(option);
            });
        });
});
</script>

@endsection
