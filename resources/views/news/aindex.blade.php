@extends('layout.dashboard')

@section('page')
  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center mb-4">
    <h1 class="h3 mb-0 mr-3 text-gray-800">Customize News Page</h1>
    <a href="/admin/news/create" class="btn btn-success mx-3">Add New</a>
  </div>

  <div class="row">
    <div class="col-12 table-responsive d-flex">
      <table class="table table-borderless md-auto">
        <thead class="table-dark" align="center">
          <tr>
            <th scope="col">No</th>
            <th scope="col">Title</th>
            <th scope="col">Image</th>
            <th scope="col">description</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody align="center">
          @foreach ($news as $news)
            <tr>
              <th scope="row">{{ $loop->iteration }}</th>
              <td class="col-2">{{ $news->title }}</td>
              <td class="col-2"><img src="{{ asset("storage/$news->image") }}" alt="" width="200px"
                  height="140px"></td>
              <td class="col-5">
                {!! Str::limit($news->description, 300, '...') !!}</td>
              <td class="col-3">
                <a href="/admin/news/edit/{{ $news->id }}" class="btn btn-warning my-2">Edit</a>
                <br>
                <form class="d-inline" action="/admin/news/destroy/{{ $news->id }}" method="POST">
                  @csrf
                  <button class="btn btn-danger" onclick="return confirm('Delete This News?')">Delete</button>
                </form>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
@endsection
