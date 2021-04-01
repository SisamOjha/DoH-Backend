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
                        <form action="/doctors/{{ $doctor->id }}" method="post">
                            @csrf
                            @method('put')
                            <div class="form-group">
                                <label for="name">Doctor Name</label>
                                <input id="name" class="form-control" type="text" name="name" placeholder="Doctor Name" value="{{ $doctor->name }}">
                            </div>


                            <div class="form-group">
                                <label for="specialist_id">Select  Specialist</label>
                                <select id="specialist_id" class="form-control" name="specialist_id">
                                    @foreach ($specialists as $specialist)
                                       <option value="{{ $specialist->id }}">{{ $specialist->name }}</option>
                                   @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="name">Telephone</label>
                                <input id="name" class="form-control" type="text" name="telephone" placeholder="Telephone" value="{{ $doctor->telephone }}">
                            </div>
                            <div class="form-group">
                                <label for="name">Country</label>
                                <input id="name" class="form-control" type="text" name="country" placeholder="Country" value="{{ $doctor->country }}">
                            </div>
                            <div class="form-group">
                                <label for="name">Zone</label>
                                <input id="name" class="form-control" type="text" name="zone" placeholder="zone" value="{{ $doctor->zone}}">
                            </div>
                            <div class="form-group">
                                <label for="name">District</label>
                                <input id="name" class="form-control" type="text" name="district" placeholder="District" value="{{ $doctor->district}}">
                            </div>
                            <div class="form-group">
                                <label for="name">City</label>
                                <input id="name" class="form-control" type="text" name="city" placeholder="City" value="{{ $doctor->city}}">
                            </div>
                            <div class="form-group">
                                <label for="name">Ward</label>
                                <input id="name" class="form-control" type="text" name="ward" placeholder="Ward" value="{{ $doctor->ward }}">
                            </div>
                            <div class="form-group">
                                <label for="name">Province</label>
                                <input id="name" class="form-control" type="text" name="province" placeholder="Province" value="{{ $doctor->province }}">
                            </div>
                            <div class="form-group">
                                <label for="name">Mobile</label>
                                <input id="name" class="form-control" type="text" name="mobile" placeholder="Mobile" value="{{ $doctor->mobile }}">
                            </div>
                            <div class="form-group">
                                <label for="name">Latitude</label>
                                <input id="name" class="form-control" type="text" name="lat" placeholder="Latitude" value="{{ $doctor->lat }}">
                            </div>
                            <div class="form-group">
                                <label for="name">Longitude</label>
                                <input id="name" class="form-control" type="text" name="lon" placeholder="Longitude" value="{{ $doctor->lon }}">
                            </div>
                            <div class="form-group">
                                <label for="name">Description</label>
                                <input id="name" class="form-control" type="text" name="description" placeholder="Description" value="{{ $doctor->description }}">
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

                            @foreach ($doctor->images as $image)

                                <img src="{{ asset($image->name) }}" alt="" width="120">
                            @endforeach
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
