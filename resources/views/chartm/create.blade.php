@extends('layout.dashboard')

@section('page')
  <div class="d-sm-flex align-items-center mb-4">
    <h1 class="h3 mb-0 mr-3 text-gray-800">Create Monthly Chart Page</h1>
    <a type="button" class="btn btn-primary" href="/admin/chartm/index">
      <div class="wrapper">
        <i class="fa-solid fa-caret-left"></i>
      </div>
    </a>
  </div>
  <div class="row">
    <div class="col-3">
      <form action="/admin/chartm/store" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group mb-3">
          <label class="form-label">Data</label>
          <input type="text" class="form-control" name="data">
          @error('data')
            <p class="text-danger">
              {{ $message }}
            </p>
          @enderror
        </div>
        <div class="form-group mb-3">
          <label class="form-label">Jan</label>
          <input type="text" class="form-control" name="jan">
          @error('jan')
            <p class="text-danger">
              {{ $message }}
            </p>
          @enderror
        </div>
        <div class="form-group mb-3">
          <label class="form-label">feb</label>
          <input type="text" class="form-control" name="feb">
          @error('feb')
            <p class="text-danger">
              {{ $message }}
            </p>
          @enderror
        </div>
        <div class="form-group mb-3">
          <label class="form-label">mar</label>
          <input type="text" class="form-control" name="mar">
          @error('mar')
            <p class="text-danger">
              {{ $message }}
            </p>
          @enderror
        </div>
        <div class="form-group mb-3">
          <label class="form-label">apr</label>
          <input type="text" class="form-control" name="apr">
          @error('apr')
            <p class="text-danger">
              {{ $message }}
            </p>
          @enderror
        </div>
        <div class="form-group mb-3">
          <label class="form-label">mei</label>
          <input type="text" class="form-control" name="mei">
          @error('mei')
            <p class="text-danger">
              {{ $message }}
            </p>
          @enderror
        </div>
        <div class="form-group mb-3">
          <label class="form-label">jun</label>
          <input type="text" class="form-control" name="jun">
          @error('jun')
            <p class="text-danger">
              {{ $message }}
            </p>
          @enderror
        </div>
        <div class="form-group mb-3">
          <label class="form-label">jul</label>
          <input type="text" class="form-control" name="jul">
          @error('jul')
            <p class="text-danger">
              {{ $message }}
            </p>
          @enderror
        </div>
        <div class="form-group mb-3">
          <label class="form-label">agu</label>
          <input type="text" class="form-control" name="agu">
          @error('agu')
            <p class="text-danger">
              {{ $message }}
            </p>
          @enderror
        </div>
        <div class="form-group mb-3">
          <label class="form-label">sep</label>
          <input type="text" class="form-control" name="sep">
          @error('sep')
            <p class="text-danger">
              {{ $message }}
            </p>
          @enderror
        </div>
        <div class="form-group mb-3">
          <label class="form-label">okt</label>
          <input type="text" class="form-control" name="okt">
          @error('okt')
            <p class="text-danger">
              {{ $message }}
            </p>
          @enderror
        </div>
        <div class="form-group mb-3">
          <label class="form-label">nov</label>
          <input type="text" class="form-control" name="nov">
          @error('nov')
            <p class="text-danger">
              {{ $message }}
            </p>
          @enderror
        </div>
        <div class="form-group mb-3">
          <label class="form-label">des</label>
          <input type="text" class="form-control" name="des">
          @error('des')
            <p class="text-danger">
              {{ $message }}
            </p>
          @enderror
        </div>
        <button type="submit" class="btn btn-success">Submit</button>
      </form>
    </div>
  </div>
@endsection
