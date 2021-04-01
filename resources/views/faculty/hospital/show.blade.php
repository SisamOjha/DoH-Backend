@extends('faculty.templates.app')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <div class="row align-items-center">
                    <div class="col-8">
                        <h3 class="mb-0">Hospital</h3>

                    </div>
                        <div class="col-4 text-right">
                            <a href="/hospitals/" class="btn btn-primary btn-sm" style="background-color: #030713 !important">Back to Hospital Management</a>
                        </div>
                </div>

                <div class="card shadow mt-3">
                    <div class="card-header">
                        {{ $hospitals->name }}
                    </div>

                        {{-- <div class="card-header">
                            {{ $hospitals->price }}
                        </div>

                            <div class="card-header">
                                {{ $hospitals->discount }}
                            </div>

                                <div class="card-header">
                                    {{ $hospitals->sp }}
                                </div>

                                    <div class="card-header">
                                        {{ $hospitals->color }}
                                    </div> --}}
                <div class="card-body">

                    <p class="card mt-3">
                        <img src="{{asset($hospitals->image) }}" alt="img" style="width: 100px; height:100px;">
                    </p>

                        <p>{{ $hospitals->body }}</p>
                        <br>
                        <p>{{ $hospitals->created_at->diffforhumans() }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
