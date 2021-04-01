@extends('faculty.templates.app')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <div class="row align-items-center">
                    <div class="col-8">
                        <h3 class="mb-0">Doctor Management</h3>

                    </div>
                        <div class="col-4 text-right">
                            <a href="/doctors" class="btn btn-primary btn-sm" style="background-color: #0307 !important">Back to List</a>
                        </div>
                </div>

                <div class="card shadow mt-3">
                    <div class="card-header">
                        {{ $doctors->name }}
                    </div>

                        <div class="card-header">
                        {{ $doctors->specialist->name }}
                        </div>

                            <div class="card-header">
                                {{ $doctors->telephone }}
                            </div>

                                <div class="card-header">
                                    {{ $doctors->country}}
                                </div>

                                    <div class="card-header">
                                        {{ $doctors->zone }}
                                    </div>
                                    <div class="card-header">
                                        {{ $doctors->district }}
                                    </div>
                                    <div class="card-header">
                                        {{ $doctors->city }}
                                    </div>
                                    <div class="card-header">
                                        {{ $doctors->ward }}
                                    </div>
                                    <div class="card-header">
                                        {{ $doctors->province }}
                                    </div>
                                    <div class="card-header">
                                        {{ $doctors->mobile }}
                                    </div>
                                    <div class="card-header">
                                        {{ $doctors->lat }}
                                    </div>
                                    <div class="card-header">
                                        {{ $doctors->lon }}
                                    </div>
                                    <div class="card-header">
                                        {{ $doctors->description }}
                                    </div>
                <div class="card-body">

                    <p class="card mt-3">
                        <img src="{{asset($doctors->image) }}" alt="img" style="width: 100px; height:100px;">
                    </p>






                        <p>{{ $doctors->body }}</p>
                        <br>
                        <p>{{ $doctors->created_at->diffforhumans() }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
