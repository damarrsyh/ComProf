@extends('layout.dashboard')

@section('page')
  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center mb-4">
    <h1 class="h3 mb-0 mr-3 text-gray-800">Customize Article Page</h1>
    <a href="/admin/article/create" class="btn btn-success mx-3">Add New</a>
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
          @foreach ($article as $article)
            <tr>
              <th scope="row">{{ $loop->iteration }}</th>
              <td class="col-2">{{ $article->title }}</td>
              <td class="col-2"><img src="{{ asset("storage/$article->image") }}" alt="" width="200px"
                  height="140px"></td>
              <td class="col-5">
                {!! Str::limit($article->description, 400, '...') !!}</td>
              <td class="col-3">
                <a href="/admin/article/edit/{{ $article->id }}" class="btn btn-warning my-2">Edit</a>
                <br>
                <form class="d-inline" action="/admin/article/destroy/{{ $article->id }}" method="POST">
                  @csrf
                  <button class="btn btn-danger" onclick="return confirm('Delete This Article?')">Delete</button>
                </form>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
@endsection
