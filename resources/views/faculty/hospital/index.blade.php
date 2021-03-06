@extends('faculty.templates.app')
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-20">

                <div class="card">
                    <div class="card-header">
                        <div class="card-header card-header-primary" >
                            <h4 class="card-title">Hospital Management</h4>
                          </div>
                        <a href="/hospitals/create" class="btn btn-primary btn-sm float-right"style="background-color: #030731 !important">Add Hospital</a>
                    </div>
                    <div class="card-body">
                        <table class="table table-sm table-bordered table-striped" id="datatable">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Hospital Name</th>
                                    <th>Image</th>

                                    {{-- <th>Created_at</th> --}}
                                    {{-- <th>Updated_At</th> --}}
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($hospitals as $hospital)
                                    <tr>
                                        <td>{{ $hospital->id }}</td>
                                        <td>{{ $hospital->name }}</td>

                                        {{-- <td>{{ $hospital->created_at }}</td>
                                        <td>{{ $hospital->updated_at }}</td> --}}
                                        <td>
                                            <span class="avatar avatar-lg rounded-circle">
                                                <img class="avatar border-gray"
                                                    src="{{ asset('uploadedFiles/' . $hospital->image) }}" alt="..."
                                                    style="  vertical-align: middle;
                                                    width: 70px;
                                                    height: 70px;
                                                    border-radius: 50%;">
                                            </span>
                                        </td>

                                        <td>
                                            <div class="col">
                                            <a href="/hospitals/{{ $hospital->id }}/edit" class="btn btn-primary btn-sm" style="background-color: #030731 !important">Edit</a>
                                            </div>
                                            <div class="col">
                                                <a href="/hospitals/{{ $hospital->id }}" class="btn btn-primary btn-sm" >Show</a>

                                            </div>
                                            <div class="col">
                                                <form action="/hospitals/{{ $hospital->id }}" method="post">
                                                  @csrf
                                                  @method('delete')

                                                  <button type="submit" class="btn btn-primary btn-sm" style="background-color: #990008 !important">Delete</button>
                                               </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
