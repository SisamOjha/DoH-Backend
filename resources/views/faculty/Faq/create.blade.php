@extends('faculty.templates.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col-12">
                                <h3 class="mb-0">FAQ</h3>

                            </div>
                                <div class="col-12 text-right">
                                  <a href="/faqs" class="btn btn-primary btn-sm" style="background-color: #030713 !important">Back to FAQ</a>
                                </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="/faq" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="question">Question</label>
                                <input id="question" class="form-control" type="text" name="question" placeholder="Question">
                            </div>
                            <div class="form-group">
                                <label for="answer">Answer</label>
                                <input id="answer" class="form-control" type="text" name="answer" placeholder="Answer ">
                            </div>
                            {{-- <div class="form-group">
                                <label for="image">Upload</label>
                                <input type="file" class="form-control" name="image" accept="image/*">
                            </div> --}}
                            <button type="submit" class="btn btn-primary btn-sm float-right" style="background-color: #030713 !important">Save</button>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
