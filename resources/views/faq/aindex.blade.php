@extends('layout.dashboard')

@section('page')
  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center mb-4">
    <h1 class="h3 mb-0 mr-3 text-gray-800">Customize Faq Page</h1>
    <a href="/admin/faq/create" class="btn btn-success mx-3">Add New</a>
  </div>

  <div class="row">
    <div class="col table-responsive d-flex">
      <table class="table table-borderless md-auto">
        <thead class="table-dark" align="center">
          <tr>
            <th scope="col">No</th>
            <th scope="col">Question</th>
            <th scope="col">Answer</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody align="center">
          @foreach ($faq as $faq)
            <tr>
              <th scope="row">{{ $loop->iteration }}</th>
              <td>{{ $faq->question }}</td>
              <td>{!! $faq->answer !!}</td>
              <td>
                <a href="/admin/faq/edit/{{ $faq->id }}" class="btn btn-warning my-2">Edit</a>
                <br>
                <form class="d-inline" action="/admin/faq/destroy/{{ $faq->id }}" method="POST">
                  @csrf
                  <button class="btn btn-danger" onclick="return confirm('Delete This Faq?')">Delete</button>
                </form>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
@endsection
