@extends('layout.dashboard')

@section('page')
  <div class="d-sm-flex align-items-center mb-4">
    <h1 class="h3 mb-0 mr-3 text-gray-800">Edit News Page</h1>
    <a type="button" class="btn btn-primary" href="/admin/news/aindex">
      <div class="wrapper">
        <i class="fa-solid fa-caret-left"></i>
      </div>
    </a>
  </div>
  <div class="row">
    <div class="col-6">
      <form action="/admin/news/update/{{ $news->id }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group mb-3">
          <label class="form-label">Title</label>
          <input type="text" class="form-control" name="title" value="{{ $news->title }}">
          @error('title')
            <p class="text-danger">
              {{ $message }}
            </p>
          @enderror
        </div>
        <label for="" class="form-label">Image</label>
        <input type="hidden" name="oldImage" value="{{ $news->image }}">
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
          <label class="form-label" for="description">description</label>
          <input id="description" type="hidden" name="description" value="{{ $news->description }}">
          <trix-editor input="description"></trix-editor>
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
