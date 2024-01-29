@extends('layout.dashboard')

@section('page')
  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center mb-4">
    <h1 class="h3 mb-0 mr-3 text-gray-800">Customize Summary Page</h1>
  </div>

  <div class="row">
    <div class="col-6 table-responsive d-flex">
      <table class="table table-borderless md-auto">
        <thead class="table-dark" align="center">
          <tr>
            <th scope="col">No</th>
            <th scope="col">Name</th>
            <th scope="col">Total</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody align="center">
          @foreach ($summary as $s)
            <tr>
              <th scope="row">{{ $loop->iteration }}</th>
              <td>{{ $s->nama }}</td>
              <td>{{ $s->jumlah }}</td>
              <td>
                <a class="btn btn-success btn-xl" href="/admin/summary/edit/{{ $s->id }}">
                  <div class="wrapper">
                    <span>Edit</span>
                  </div>
                </a>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
@endsection
