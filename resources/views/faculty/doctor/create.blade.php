@extends('faculty.templates.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <a href="/doctors" class="btn btn-primary btn-sm-float-right" style="background-color: #030731 !important">Back to Doctor Management</a>
                    </div>
                    <div class="card-body">
                        <form action="/doctors" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group" >
                                <label for="name">Doctor Name</label>
                                <input id="name" class="form-control" type="text" name="name" placeholder="Doctor Name">
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
                                <input id="name" class="form-control" type="text" name="telephone" placeholder="Telephone">
                            </div>
                            <div class="form-group">
                                <label for="name">Country</label>
                                <input id="name" class="form-control" type="text" name="country" placeholder="Country" >
                            </div>
                            <div class="form-group">
                                <label for="name">Zone</label>
                                <input id="name" class="form-control" type="text" name="zone" placeholder="zone">
                            </div>
                            <div class="form-group">
                                <label for="name">District</label>
                                <input id="name" class="form-control" type="text" name="district" placeholder="District">
                            </div>
                            <div class="form-group">
                                <label for="name">City</label>
                                <input id="name" class="form-control" type="text" name="city" placeholder="City" >
                            </div>
                            <div class="form-group">
                                <label for="name">Ward</label>
                                <input id="name" class="form-control" type="text" name="ward" placeholder="Ward" >
                            </div>
                            <div class="form-group">
                                <label for="name">Province</label>
                                <input id="name" class="form-control" type="text" name="province" placeholder="Province" >
                            </div>
                            <div class="form-group">
                                <label for="name">Mobile</label>
                                <input id="name" class="form-control" type="text" name="mobile" placeholder="Mobile" >
                            </div>
                            <div class="form-group">
                                <label for="name">Latitude</label>
                                <input id="name" class="form-control" type="text" name="lat" placeholder="Latitude" >
                            </div>
                            <div class="form-group">
                                <label for="name">Longitude</label>
                                <input id="name" class="form-control" type="text" name="lon" placeholder="Longitude" >
                            </div>
                            <div class="form-group">
                                <label for="name">Description</label>
                                <input id="name" class="form-control" type="text" name="description" placeholder="Description" >
                            </div>

                            <div class="form-group">
                                <label for="image">Feature Image</label>
                                <input type="file" class="form-control" name="image" accept="image/*">
                              </div>


                            <div class="form-group">
                                <label for="images">Other Images</label>
                                <input id="images" class="form-control-file" type="file" name="images[]" multiple>
                            </div>
                            <button type="submit" class="btn btn-primary btn-sm float-right"  style="background-color: #030731 !important">Save</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
