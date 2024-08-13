@extends('layout.dashboard')

@section('page')
  <div class="d-sm-flex align-items-center mb-4">
    <h1 class="h3 mb-0 mr-3 text-gray-800">Edit Monthly Chart Page</h1>
    <a type="button" class="btn btn-primary" href="/admin/chartm/index">
      <div class="wrapper">
        <i class="fa-solid fa-caret-left"></i>
      </div>
    </a>
  </div>
  <div class="row">
    <div class="col-3">
      <form action="/admin/chartm/update/{{ $chartm->id }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group mb-3">
          <label class="form-label">Data</label>
          <input type="text" class="form-control" name="data" value="{{ $chartm->data }}">
          @error('data')
            <p class="text-danger">
              {{ $message }}
            </p>
          @enderror
        </div>
        <div class="form-group mb-3">
          <label class="form-label">Jan</label>
          <input type="text" class="form-control" name="jan" value="{{ $chartm->jan }}">
          @error('jan')
            <p class="text-danger">
              {{ $message }}
            </p>
          @enderror
        </div>
        <div class="form-group mb-3">
          <label class="form-label">feb</label>
          <input type="text" class="form-control" name="feb" value="{{ $chartm->feb }}">
          @error('feb')
            <p class="text-danger">
              {{ $message }}
            </p>
          @enderror
        </div>
        <div class="form-group mb-3">
          <label class="form-label">mar</label>
          <input type="text" class="form-control" name="mar" value="{{ $chartm->mar }}">
          @error('mar')
            <p class="text-danger">
              {{ $message }}
            </p>
          @enderror
        </div>
        <div class="form-group mb-3">
          <label class="form-label">apr</label>
          <input type="text" class="form-control" name="apr" value="{{ $chartm->apr }}">
          @error('apr')
            <p class="text-danger">
              {{ $message }}
            </p>
          @enderror
        </div>
        <div class="form-group mb-3">
          <label class="form-label">mei</label>
          <input type="text" class="form-control" name="mei" value="{{ $chartm->mei }}">
          @error('mei')
            <p class="text-danger">
              {{ $message }}
            </p>
          @enderror
        </div>
        <div class="form-group mb-3">
          <label class="form-label">jun</label>
          <input type="text" class="form-control" name="jun" value="{{ $chartm->jun }}">
          @error('jun')
            <p class="text-danger">
              {{ $message }}
            </p>
          @enderror
        </div>
        <div class="form-group mb-3">
          <label class="form-label">jul</label>
          <input type="text" class="form-control" name="jul" value="{{ $chartm->jul }}">
          @error('jul')
            <p class="text-danger">
              {{ $message }}
            </p>
          @enderror
        </div>
        <div class="form-group mb-3">
          <label class="form-label">agu</label>
          <input type="text" class="form-control" name="agu" value="{{ $chartm->agu }}">
          @error('agu')
            <p class="text-danger">
              {{ $message }}
            </p>
          @enderror
        </div>
        <div class="form-group mb-3">
          <label class="form-label">sep</label>
          <input type="text" class="form-control" name="sep" value="{{ $chartm->sep }}">
          @error('sep')
            <p class="text-danger">
              {{ $message }}
            </p>
          @enderror
        </div>
        <div class="form-group mb-3">
          <label class="form-label">okt</label>
          <input type="text" class="form-control" name="okt" value="{{ $chartm->okt }}">
          @error('okt')
            <p class="text-danger">
              {{ $message }}
            </p>
          @enderror
        </div>
        <div class="form-group mb-3">
          <label class="form-label">nov</label>
          <input type="text" class="form-control" name="nov" value="{{ $chartm->nov }}">
          @error('nov')
            <p class="text-danger">
              {{ $message }}
            </p>
          @enderror
        </div>
        <div class="form-group mb-3">
          <label class="form-label">des</label>
          <input type="text" class="form-control" name="des" value="{{ $chartm->des }}">
          @error('des')
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
