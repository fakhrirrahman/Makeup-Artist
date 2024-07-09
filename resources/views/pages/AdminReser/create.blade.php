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
            <form action="{{ route('AdminReser.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label>Judul</label>
                    <input type="text" class="form-control" name="judul" value="" required />
                  </div>
                  <div class="form-group">
                    <label>Isi</label>
                    <input type="text" class="form-control" name="isi" value="" required />
                  </div>
                <div class="form-group">
                  <label>Foto</label>
                  <input type="file" class="form-control" name="foto" value="" required />
                </div>
                <br>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


@endsection
