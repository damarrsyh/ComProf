@extends('layout.dashboard')

@section('page')
  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center mb-4">
    <h1 class="h3 mb-0 mr-3 text-gray-800">Customize Header Page</h1>
    <a href="/admin/header/create" class="btn btn-primary mx-3">Add New</a>
  </div>

  <div class="row">
    <div class="col-6 table-responsive d-flex">
      <table class="table table-borderless md-auto">
        <thead class="table-dark" align="center">
          <tr>
            <th scope="col">No</th>
            <th scope="col">Name</th>
            <th scope="col">Image</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody align="center">
          @foreach ($headers as $key => $header)
            <tr>
              <th scope="row">{{ $loop->iteration }}</th>
              <td>Header {{ $key + 1 }}</td>
              <td><img src="{{ asset('storage/' . $header->image) }}" alt="" width="150px"></td>
              <td>
                <a href="/admin/header/edit/{{ $header->id }}" class="btn btn-success mx-2">Edit</a>
                <form class="d-inline" action="/admin/header/destroy/{{ $header->id }}" method="POST">
                  @csrf
                  <button class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                </form>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
@endsection
