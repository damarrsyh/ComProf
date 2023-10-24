@extends('layout.dashboard')

@section('page')
<!-- Page Heading -->   
    <div class="d-sm-flex align-items-center mb-4">
        <h1 class="h3 mb-0 mr-3 text-gray-800">Customize Gallery Page</h1>

        <a type="button" class="btn btn-primary" href="/dashboard/index">
        <div class="wrapper">
            <i class="fa-solid fa-caret-left"></i>
        </div>
        </a>
        <a href="/gallery/create" class="btn btn-primary mx-3">Add New</a>
    </div>

    <div class="row">
        <div class="col-10 table-responsive d-flex">
            <table class="table table-borderless md-auto">
                <thead class="table-dark" align="center">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Image</th>
                        <th scope="col">Title</th>
                        <th scope="col">Description</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody align="center">
                    @foreach ($galleries as $gallery)    
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td><img src="{{ asset('storage/'. $gallery->image) }}" alt="" width="100px"
                            height="50px"></td>
                        <td>{{ $gallery->title }}</td>
                        <td>{{ $gallery->description }}</td>
                        <td>
                            <a href="/gallery/edit/{{ $gallery->id }}" class="btn btn-success mx-3">Edit</a>
                            <form class="d-inline" action="/gallery/destroy/{{ $gallery->id }}" method="POST">
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
