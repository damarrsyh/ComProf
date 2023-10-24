@extends('layout.dashboard')

@section('page')
<div class="d-sm-flex align-items-center mb-4">
  <h1 class="h3 mb-0 mr-3 text-gray-800">Create Summary Page</h1>
  <a type="button" class="btn btn-primary" href="/summary/index">
    <div class="wrapper">
      <i class="fa-solid fa-caret-left"></i>
    </div>
  </a>
</div>
<div class="row">
  <div class="col-3">
    <form action="/summary/store" method="POST" enctype="multipart/form-data">
      @csrf
      <div class="form-group mb-3">
        <label class="form-label">Name</label>
        <input type="text" class="form-control" name="nama" value="{{ $summary->nama }}">
        @error('name')
          <p class="text-danger">
            {{ $message }}
          </p>
        @enderror
      </div>
      <div class="form-group mb-3">
        <label class="form-label">Jumlah</label>
        <input type="text" class="form-control" name="jumlah" value="{{ $summary->jumlah }}">
        @error('price')
          <p class="text-danger">
            {{ $message }}
          </p>
        @enderror
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
</div>
@endsection