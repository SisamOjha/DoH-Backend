@extends('faculty.templates.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <a href="/hospitals" class="btn btn-primary btn-sm float-right"style="background-color: #030731 !important">Back to Hospital Management</a>
                    </div>
                    <div class="card-body">
                        <form action="/hospitals/{{ $hospitals->id }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="form-group">
                                <label for="name">Hospital Name</label>
                                <input id="name" class="form-control" type="text" name="name" placeholder="Hospital Name" value="{{ $hospitals->name }}">
                            </div>

                            <div class="form-group">
                                <label for="image">Feature Image</label>
                                <input type="file" class="form-control" name="image" accept="image/*">
                            </div>


                            <div class="form-group">
                                <label for="images">Other Images</label>
                                <input id="images" class="form-control-file" type="file" name="images[]" multiple>
                            </div>
                            <button type="submit" class="btn btn-primary btn-sm float-right" style="background-color: #030731 !important">Update</button>

                            @foreach ($hospitals->images as $image)

                                <img src="{{ asset($image->name) }}" alt="" width="120">
                            @endforeach

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
