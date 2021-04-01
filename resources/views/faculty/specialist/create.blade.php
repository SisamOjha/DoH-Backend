@extends('faculty.templates.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <a href="/specialists" class="btn btn-primary btn-sm-float-right" style="background-color: #030731 !important">Back to specialist Management</a>
                    </div>
                    <div class="card-body">
                        <form action="/specialists" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group" >
                                <label for="name">specialist Name</label>
                                <input id="name" class="form-control" type="text" name="name" placeholder="specialist Name">
                            </div>

                            <button type="submit" class="btn btn-primary btn-sm float-right"  style="background-color: #030731 !important">Save</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
