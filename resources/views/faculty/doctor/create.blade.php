@extends('faculty.templates.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <a href="/doctors" class="btn btn-primary btn-sm">Back</a>
                    </div>
                    <div class="card-body">
                        <form action="/doctors" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group" >
                                <label for="name">Doctor Name</label>
                                <input id="name" class="form-control" type="text" name="name" placeholder="Doctor Name">
                            </div>
                            <div class="form-group">
                                <label for="image">Feature Image</label>
                                <input type="file" class="form-control" name="image" accept="image/*">
                              </div>


                            <div class="form-group">
                                <label for="images">Other Images</label>
                                <input id="images" class="form-control-file" type="file" name="images[]" multiple>
                            </div>
                            <button type="submit" class="btn btn-primary btn-sm float-right">Save</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
