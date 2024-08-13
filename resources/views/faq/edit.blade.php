@extends('layout.dashboard')

@section('page')
  <div class="d-sm-flex align-items-center mb-4">
    <h1 class="h3 mb-0 mr-3 text-gray-800">Edit Faq Page</h1>
    <a type="button" class="btn btn-primary" href="/admin/faq/aindex">
      <div class="wrapper">
        <i class="fa-solid fa-caret-left"></i>
      </div>
    </a>
  </div>
  <div class="row">
    <div class="col-6">
      <form action="/admin/faq/update/{{ $faq->id }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group mb-3">
          <label class="form-label">Q</label>
          <input type="text" class="form-control" name="question" value="{{ $faq->question }}">
          @error('question')
            <p class="text-danger">
              {{ $message }}
            </p>
          @enderror
        </div>
        <div class="form-group mb-3">
          <label class="form-label" for="answer">Answer</label>
          <input id="answer" type="hidden" name="answer" value="{!! $faq->answer !!}">
          <trix-editor input="answer"></trix-editor>
          @error('answer')
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
