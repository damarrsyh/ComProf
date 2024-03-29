@extends('layout.dashboard')

@section('page')
  <div class="d-sm-flex align-items-center mb-4">
    <h1 class="h3 mb-0 mr-3 text-gray-800">Create Gallery Page</h1>
    <a type="button" class="btn btn-primary" href="/gallery/index">
      <div class="wrapper">
        <i class="fa-solid fa-caret-left"></i>
      </div>
    </a>
  </div>
  <div class="row">
    <div class="col-6">
      <form action="/admin/gallery/store" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="" class="form-label">Image</label>
        <div class="custom-file mb-3">
          <input type="file" class="custom-file-input" id="image" name="image">
          <label class="custom-file-label" for="image">Choose file</label>
          @error('image')
            <p class="text-danger">
              {{ $message }}
            </p>
          @enderror
        </div>
        <div class="form-group mb-3">
          <label class="form-label">Title</label>
          <input type="text" class="form-control" name="title">
          @error('title')
            <p class="text-danger">
              {{ $message }}
            </p>
          @enderror
        </div>
        <div class="form-group mb-3">
          <label class="form-label">Description</label>
          <input type="text" class="form-control" name="description">
          @error('description')
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
