@extends('faculty.templates.app')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <div class="row align-items-center">
                    <div class="col-8">
                        <h3 class="mb-0">specialist Management</h3>

                    </div>
                        <div class="col-4 text-right">
                            <a href="/specialists" class="btn btn-primary btn-sm" style="background-color: #0307 !important">Back to List</a>
                        </div>
                </div>

                <div class="card shadow mt-3">
                    <div class="card-header">
                        {{ $specialists->name }}
                    </div>

                        {{-- <div class="card-header">
                            {{ $products->price }}
                        </div>

                            <div class="card-header">
                                {{ $products->discount }}
                            </div>

                                <div class="card-header">
                                    {{ $products->sp }}
                                </div>

                                    <div class="card-header">
                                        {{ $products->color }}
                                    </div> --}}
                <div class="card-body">

                    <p class="card mt-3">
                        <img src="{{asset($specialists->image) }}" alt="img" style="width: 100px; height:100px;">
                    </p>






                        <p>{{ $specialists->body }}</p>
                        <br>
                        <p>{{ $specialists->created_at->diffforhumans() }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
