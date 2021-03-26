@extends('faculty.templates.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <a href="/doctors/create" class="btn btn-primary btn-sm">CREATE</a>
                    </div>
                    <div class="card-body">
                        <table class="table table-sm table-bordered table-striped" id="datatable">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Doctor Name</th>
                                    <th>Image</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($doctors as $doctor)
                                    <tr>
                                        <td>{{ $doctor->id }}</td>
                                        <td>{{ $doctor->name }}</td>
                                        <td>
                                            <span class="avatar avatar-lg rounded-circle">
                                                <img class="avatar border-gray"
                                                    src="{{ asset('uploadedFiles/' . $doctor->image) }}" alt="..."
                                                    style="  vertical-align: middle;
                                                    width: 70px;
                                                    height: 70px;
                                                    border-radius: 50%;">
                                            </span>
                                        </td>
                                        <td><a href="/doctors/{{ $doctor->id }}/edit">Edit</a></td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
