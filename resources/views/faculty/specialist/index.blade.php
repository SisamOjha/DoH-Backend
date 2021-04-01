@extends('faculty.templates.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-header card-header-primary" >
                            <h4 class="card-title">Hospital Management</h4>
                        </div>
                        <a href="/specialists/create" class="btn btn-primary btn-sm float-right"style="background-color: #030731 !important">Add specialist</a>
                    </div>
                    <div class="card-body">
                        <table class="table table-sm table-bordered table-striped" id="datatable">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>specialist Name</th>

                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($specialists as $specialist)
                                    <tr>
                                        <td>{{ $specialist->id }}</td>
                                        <td>{{ $specialist->name }}</td>
                                        <td>

                                        </td>

                                        <td>
                                        <div class="col">
                                        <a href="/specialists/{{ $specialist->id }}/edit"class="btn btn-primary btn-sm" style="background-color: #030731 !important">Edit</a>
                                        </div>
                                        <div class="col">
                                            <a href="/specialists/{{ $specialist->id }}" class="btn btn-primary btn-sm">Show</a>

                                        </div>
                                            <div class="col">
                                            <form action="/specialists/{{ $specialist->id }}" method="post">
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
