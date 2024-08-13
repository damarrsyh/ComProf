@extends('layout.dashboard')

@section('page')
  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center mb-4">
    <h1 class="h3 mb-0 mr-3 text-gray-800">Customize Monthly Chart Page</h1>
    <a href="/admin/chartm/create" class="btn btn-success mx-3">Add New</a>
  </div>

  <div class="row">
    <div class="col table-responsive d-flex">
      <table class="table table-borderless md-auto">
        <thead class="table-dark" align="center">
          <tr>
            <th scope="col">No</th>
            <th scope="col">Data</th>
            <th scope="col">Jan</th>
            <th scope="col">Feb</th>
            <th scope="col">Mar</th>
            <th scope="col">Apr</th>
            <th scope="col">Mei</th>
            <th scope="col">Jun</th>
            <th scope="col">Jul</th>
            <th scope="col">Agu</th>
            <th scope="col">Sep</th>
            <th scope="col">Okt</th>
            <th scope="col">Nov</th>
            <th scope="col">Des</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody class align="center">
          @foreach ($chartm as $c)
            <tr>
              <th scope="row">{{ $loop->iteration }}</th>
              <td>{{ $c->data }}</td>
              <td>{{ $c->jan }}</td>
              <td>{{ $c->feb }}</td>
              <td>{{ $c->mar }}</td>
              <td>{{ $c->apr }}</td>
              <td>{{ $c->mei }}</td>
              <td>{{ $c->jun }}</td>
              <td>{{ $c->jul }}</td>
              <td>{{ $c->agu }}</td>
              <td>{{ $c->sep }}</td>
              <td>{{ $c->okt }}</td>
              <td>{{ $c->nov }}</td>
              <td>{{ $c->des }}</td>
              <td>
                <a class="btn btn-warning btn-xl" href="/admin/chartm/edit/{{ $c->id }}">
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
