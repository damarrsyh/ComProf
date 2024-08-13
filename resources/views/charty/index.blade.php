@extends('layout.dashboard')

@section('page')
  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center mb-4">
    <h1 class="h3 mb-0 mr-3 text-gray-800">Customize Annual Chart Page</h1>
    <a href="/admin/charty/create" class="btn btn-success mx-3">Add New</a>
  </div>

  <div class="row">
    <div class="col table-responsive d-flex">
      <table class="table table-borderless md-auto">
        <thead class="table-dark" align="center">
          <tr>
            <th scope="col">No</th>
            <th scope="col">Tahun</th>
            <th scope="col">Jumlah Data</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody class align="center">
          @foreach ($charty as $y)
            <tr>
              <th scope="row">{{ $loop->iteration }}</th>
              <td>{{ $y->tahun }}</td>
              <td>{{ $y->value }}</td>
              <td>
                <a class="btn btn-warning btn-xl" href="/admin/charty/edit/{{ $y->id }}">
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
