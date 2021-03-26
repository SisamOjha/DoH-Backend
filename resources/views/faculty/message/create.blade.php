@extends('faculty.templates.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <a href="/doctors" class="btn btn-primary btn-sm float-right"style="background-color: #030731 !important">Back to Doctor Management</a>
                    </div>
                    <div class="card-body">
                        <form action="/doctors" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="name">Doctor Name</label>
                                <input id="name" class="form-control" type="text" name="name" placeholder="Doctor Name">
                            </div>
                            <button type="submit" class="btn btn-primary btn-sm float-right"style="background-color: #030731 !important">Save Details</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
