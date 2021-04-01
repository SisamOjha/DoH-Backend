@extends('faculty.templates.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-20">
                <div class="card">
                    <div class="card-header">
                        <div class="card-header card-header-primary" >
                            <h4 class="card-title">Hospital Management</h4>
                        </div>
                        <a href="/doctors/create" class="btn btn-primary btn-sm float-right"style="background-color: #030731 !important">Add Doctor</a>
                    </div>
                    <div class="card-body">
                        <table class="table table-sm table-bordered table-striped" id="datatable">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Doctor Name</th>
                                    <th>Specialist</th>
                                    <th>Telephone</th>
                                    <th>Country</th>
                                    <th>Zone</th>
                                    <th>District</th>
                                    <th>City</th>
                                    <th>Ward</th>
                                    <th>Province</th>
                                    <th>Mobile</th>
                                    <th>Latitude</th>
                                    <th>Longitude</th>
                                    <th>Description</th>
                                    <th>Image</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($doctors as $doctor)
                                    <tr>
                                        <td>{{ $doctor->id }}</td>
                                        <td>{{ $doctor->name }}</td>
                                      <td> {{  $doctor->specialist->name }}</td>
                                        <td>{{ $doctor->telephone }}</td>
                                        <td>{{ $doctor->country }}</td>
                                        <td>{{ $doctor->zone }}</td>
                                        <td>{{ $doctor->district }}</td>
                                        <td>{{ $doctor->city }}</td>
                                        <td>{{ $doctor->ward }}</td>
                                        <td>{{ $doctor->province }}</td>
                                        <td>{{ $doctor->mobile }}</td>
                                        <td>{{ $doctor->lat }}</td>
                                        <td>{{ $doctor->lon }}</td>
                                        <td>{{ $doctor->description }}</td>

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

                                        <td>
                                        <div class="col">
                                        <a href="/doctors/{{ $doctor->id }}/edit"class="btn btn-primary btn-sm" style="background-color: #030731 !important">Edit</a>
                                        </div>
                                        <div class="col">
                                            <a href="/doctors/{{ $doctor->id }}" class="btn btn-primary btn-sm" style="background-color: #030731 !important">Show</a>

                                        </div>
                                            <div class="col">
                                            <form action="/doctors/{{ $doctor->id }}" method="post">
                                              @csrf
                                              @method('delete')

                                              <button type="submit" class="btn btn-primary btn-sm" style="background-color: #990008 !important">Delete</button>
                                           </form>
                                        </div>
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
