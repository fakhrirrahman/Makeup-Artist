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
            <form action="{{ route('AdminReser.update',$AdminReser ->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label>Judul</label>
                    <input type="text" class="form-control" name="judul" value="{{$AdminReser -> judul}}" required />
                  </div>
                  <div class="form-group">
                    <label>Isi</label>
                    <input type="text" class="form-control" name="isi" value="{{$AdminReser -> isi}}" required />
                  </div>
                <div class="form-group">
                  <label>Foto</label>
                  <input type="file" class="form-control" name="foto" value="{{ asset('foto/' . $AdminReser->foto) }}" required />
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
