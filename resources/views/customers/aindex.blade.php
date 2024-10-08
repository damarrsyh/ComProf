@extends('layout.dashboard')

@section('page')
  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center mb-4">
    <h1 class="h3 mb-0 mr-3 text-gray-800">Customize Customers Page</h1>
    <a href="/admin/customers/create" class="btn btn-success mx-3">Add New</a>
  </div>

  <div class="row">
    <div class="col table-responsive d-flex">
      <table class="table table-borderless md-auto">
        <thead class="table-dark" align="center">
          <tr>
            <th scope="col">No</th>
            <th scope="col">Image</th>
            <th scope="col">Name</th>
            <th scope="col">Branch</th>
            <th scope="col">Business</th>
            <th scope="col">Financing Amount</th>
            <th scope="col">description</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody align="center">
          @foreach ($customers as $customers)
            <tr>
              <th scope="row">{{ $loop->iteration }}</th>
              <td class="col-2"><img src="{{ asset("storage/$customers->image") }}" alt="" width="150px"></td>
              <td class="col-1">{{ $customers->name }}</td>
              <td class="col-1">{{ $customers->branch }}</td>
              <td class="col-2">{{ $customers->business }}</td>
              <td class="col-2">
                @foreach (explode(',', $customers->financing) as $financing)
                  <p>{{ $financing }}</p>
                @endforeach
              </td>
              <td class="col-3">
                {!! Str::limit($customers->description, 400, '...') !!}</td>
              <td class="col-1">
                <a href="/admin/customers/edit/{{ $customers->id }}" class="btn btn-warning my-2">Edit</a>
                <br>
                <form class="d-inline" action="/admin/customers/destroy/{{ $customers->id }}" method="POST">
                  @csrf
                  <button class="btn btn-danger" onclick="return confirm('Delete This Customers?')">Delete</button>
                </form>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
@endsection
