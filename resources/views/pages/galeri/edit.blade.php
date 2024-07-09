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
            <form action="{{ route('galeri.update',$galeri ->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                  <label>Gambar</label>
                  <input type="file" class="form-control" name="foto" value="{{$galeri -> foto}}" required />
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
