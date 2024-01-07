@extends('layout.dashboard')

@section('page')
  <div class="d-sm-flex align-items-center mb-4">
    <h1 class="h3 mb-0 mr-3 text-gray-800">Edit Customers Page</h1>
    <a type="button" class="btn btn-primary" href="/customers/aindex">
      <div class="wrapper">
        <i class="fa-solid fa-caret-left"></i>
      </div>
    </a>
  </div>
  <div class="row">
    <div class="col-6">
      <form action="/customers/update/{{ $customers->id }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="" class="form-label">Image</label>
        <input type="hidden" name="oldImage" value="{{ $customers->image }}">
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
          <label class="form-label">Name</label>
          <input type="text" class="form-control" name="name" value="{{ $customers->name }}">
          @error('name')
            <p class="text-danger">
              {{ $message }}
            </p>
          @enderror
        </div>
        <div class="form-group mb-3">
          <label class="form-label">Branch</label>
          <input type="text" class="form-control" name="branch" value="{{ $customers->branch }}">
          @error('branch')
            <p class="text-danger">
              {{ $message }}
            </p>
          @enderror
        </div>
        <div class="form-group mb-3">
          <label class="form-label">Business</label>
          <input type="text" class="form-control" name="business" value="{{ $customers->business }}">
          @error('business')
            <p class="text-danger">
              {{ $message }}
            </p>
          @enderror
        </div>
        <div class="form-group mb-3" id="financing-container">
          <label class="form-label">Financing</label>
          @foreach (explode(',', $customers->financing) as $financing)
            <div class="d-flex mb-1 financing-input-container">
              <input type="text" class="form-control " name="financing[]" value="{{ $financing }}">
              <button class="btn btn-danger btn-sm remove-financing-btn mx-2" type="button">x</button>
            </div>
          @endforeach
          @error('financing')
            <p class="text-danger">
              {{ $message }}
            </p>
          @enderror
        </div>
        <div class="mb-3">
          <button class="btn btn-primary btn-sm" id="add-financing-btn" type="button">+</button>
        </div>
        <div class="form-group mb-3">
          <label class="form-label" for="description">description</label>
          <input id="description" type="hidden" name="description" value="{{ $customers->description }}">
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

  <script>
    $("#add-financing-btn").click(() => $("#financing-container").append(financingInput()))

    $(document).on("click", ".remove-financing-btn", function() {
      $(this).closest(".financing-input-container").remove()
    })

    function financingInput() {
      return `
            <div class="d-flex mb-1 financing-input-container">
              <input type="text" class="form-control " name="financing[]">
              <button class="btn btn-danger btn-sm remove-financing-btn" type="button">Hapus</button>
            </div>
            `
    }
  </script>
@endsection
