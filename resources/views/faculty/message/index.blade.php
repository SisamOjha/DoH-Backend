@extends('faculty.templates.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">FAQ</h3>

                            </div>
                                <div class="col-4 text-right">
                                    <a href="/faq/create" class="btn btn-primary btn-sm" style="background-color: #030713 !important">Add FAQ</a>
                                </div>
                        </div>

                    </div>
                    <div class="card-body">
                        <table class="table table-sm table-bordered table-striped" id="datatable">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Question</th>
                                    {{-- <th>Image</th> --}}
                                    <th>Answer</th>
                                    {{-- <th>Sub Category</th> --}}
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($faqs as $faq)
                                    <tr>
                                        <td>{{ $faq->id }}</td>
                                        <td>{{ $faq->question }}</td>
                                        {{-- <td>
                                            <span class="avatar avatar-lg rounded-circle">
                                                <img class="avatar border-gray"
                                                    src="{{asset($faq->image) }}" alt="..."
                                                    style="  vertical-align: middle;
                                                    width: 70px;
                                                    height: 70px;
                                                    border-radius: 50%;">
                                            </span>
                                        </td> --}}
                                        <td>{{ $faq->answer }}</td>
                                        <td>
                                            <div class="row">
                                            <div class="col">
                                                <a href="faq/{{ $faq->id }}/edit" class="btn btn-primary btn-sm" style="background-color: #030731 !important">Edit</a>
                                            </div>
                                            <div class="col">
                                                <a href="faq/{{ $faq->id }}" class="btn btn-info btn-sm">Show</a>
                                            </div>
                                            <div class="col">
                                            <form action="faq/{{ $faq->id }}" method="post">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="btn btn-danger btn-sm" style="background-color: #030731 !important">Delete</button>
                                            </form>
                                            </div>
                                        </td>
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
