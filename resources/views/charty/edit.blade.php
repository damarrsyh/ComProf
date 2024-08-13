@extends('layout.dashboard')

@section('page')
  <div class="d-sm-flex align-items-center mb-4">
    <h1 class="h3 mb-0 mr-3 text-gray-800">Edit Annual Chart Page</h1>
    <a type="button" class="btn btn-primary" href="/admin/charty/index">
      <div class="wrapper">
        <i class="fa-solid fa-caret-left"></i>
      </div>
    </a>
  </div>
  <div class="row">
    <div class="col-3">
      <form action="/admin/charty/update/{{ $charty->id }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group mb-3">
          <label class="form-label">Tahun</label>
          <input type="text" class="form-control" name="tahun" value="{{ $charty->tahun }}">
          @error('tahun')
            <p class="text-danger">
              {{ $message }}
            </p>
          @enderror
        </div>
        <div class="form-group mb-3">
          <label class="form-label">Jumlah Data</label>
          <input type="text" class="form-control" name="value" value="{{ $charty->value }}">
          @error('value')
            <p class="text-danger">
              {{ $message }}
            </p>
          @enderror
        </div>
        <button type="submit" class="btn btn-success">Save</button>
      </form>
    </div>
  </div>
@endsection
