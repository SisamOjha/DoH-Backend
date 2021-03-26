<style>
    .custom-file-upload {
        color: transparent;
    }

    .custom-file-upload::-webkit-file-upload-button {
        visibility: hidden;
    }

    .custom-file-upload::before {
        content: 'Change Image';
        display: inline-block;
        color: black;
        background: linear-gradient(top, #f9f9f9, #e3e3e3);
        border: 1px solid #999;
        border-radius: 3px;
        padding: 5px 8px;
        outline: none;
        white-space: nowrap;
        cursor: pointer;
        text-shadow: 1px 1px #fff;
        font-weight: 700;
        font-size: 10pt;
    }

</style>
@extends('faculty.templates.app')
@section('content')

    <div class="content">

        <div class="flash-message">
            @foreach (['danger', 'warning', 'success', 'info'] as $msg)
              @if(Session::has('alert-' . $msg))

              <p  id="alert" class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
              @endif
            @endforeach
          </div> <!-- end .flash-message -->
        <div class="row">
            <div class="col-md-4">
                <div class="card card-user">
                    <div class="image">
                        @if (Auth::user()->profile_image == null)
                            <img src="{{ asset('dist/img/user.png') }}" alt="..." class="center" style=" width:100%; max-height:30vh; object-fit:contain;   display: block;
                                    margin-left: auto;
                                    margin-right: auto;">

                        @else
                            <img id="img_prv" src="{{ asset('profileImage/' . Auth::user()->profile_image) }}" alt="..."
                                style=" width:100%; max-height:30vh; object-fit:contain;   display: block;
                                margin-left: auto;
                                margin-right: auto;">

                        @endif


                    </div>
                    <br>

                    <form class="col-md-12" action="/profile/{{ Auth::user()->id }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="text-center" style="  margin-left: auto;
                                        margin-right: auto;">

                                <label for="profile_image" Image Upload></label>
                                <input type="file" class="custom-file-upload" name="profile_image" accept="image/*"
                                    id="img_file_upld">

                                <span id="mgs_ta">

                                </span>

                                <span id="sendButton">

                                </span>










                            </div>



                        </div>
                    </form>
                    <div class="card-body">
                        <div class="author">
                            <a href="#">
                                <h5 class="title">{{ __(auth()->user()->name) }}</h5>
                            </a>
                            <p class="description">
                                @ {{ __(auth()->user()->name) }}
                            </p>

                        </div>


                    </div>



                    {{-- <div class="fileinput fileinput-new text-center" data-provides="fileinput"  name="profile_image" accept="image/*">



                        <div class="fileinput-preview fileinput-exists thumbnail img-circle img-raised"></div>
                        <div>

                            <br />
                            <a href="#pablo" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i>Remove</a>
                        </div>
                    </div> --}}

                </div>

            </div>
            <div class="col-md-8 text-center">
                <form class="col-md-12" action="/profile/{{ Auth::user()->id }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="card">
                        <div class="card-header">
                            <h5 class="title">{{ __('Edit Profile') }}</h5>
                        </div>

                        <div class="card-body">
                            <div class="row">
                                <label class="col-md-3 col-form-label">Name</label>
                                <div class="col-md-9">
                                    <div class="form-group">
                                        <input type="text" name="name" class="form-control" placeholder="Name" value="{{ __(auth()->user()->name) }}"
                                            required>

                                            @if ($errors->has('name'))
                                            <span class="invalid-feedback" style="display: block;" role="alert">
                                                <strong>{{ $errors->first('name') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                            </div>


                        </div>

                        <div class="card-footer ">
                            <div class="row">
                                <div class="col-md-12 text-center">
                                    <button type="submit" class="btn btn-info btn-sm float-right"style="background-color: #030731 !important">{{ __('Save Changes') }}</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>

                <form class="col-md-12" action="/profile/{{ Auth::user()->id }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="card">
                        <div class="card-header">
                            <h5 class="title">{{ __('Change Password') }}</h5>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <label class="col-md-3 col-form-label">{{ __('Old Password') }}</label>
                                <div class="col-md-9">
                                    <div class="form-group">
                                        <input type="password" name="current_password" class="form-control"
                                            placeholder="Old password" required value="{{old('current_password')}}">
                                    </div>
                                    @if ($errors->has('current_password'))
                                        <span class="invalid-feedback" style="display: block;" role="alert">
                                            <strong>{{ $errors->first('current_password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-md-3 col-form-label">{{ __('New Password') }}</label>
                                <div class="col-md-9">
                                    <div class="form-group">
                                        <input type="password" name="new_password" class="form-control" placeholder="Password" required  value="{{old('new_password')}}">
                                    </div>


                                    @if ($errors->has('new_password'))
                                        <span class="invalid-feedback" style="display: block;" role="alert">
                                            <strong>{{ $errors->first('new_password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-md-3 col-form-label">{{ __('Password Confirmation') }}</label>
                                <div class="col-md-9">
                                    <div class="form-group">
                                        <input type="password" name="new_confirm_password" class="form-control" value="{{old('new_confirm_password')}}"
                                            placeholder="Password Confirmation" required>
                                    </div>
                                    @if ($errors->has('new_confirm_password'))
                                        <span class="invalid-feedback" style="display: block;" role="alert">
                                            <strong>{{ $errors->first('new_confirm_password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="card-footer ">
                            <div class="row">
                                <div class="col-md-12 text-center">
                                    <button type="submit"
                                        class="btn btn-info btn-sm float-right"style="background-color: #030731 !important">{{ __('Save Changes') }}</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection
{{-- <script>
    $(document).ready(function(){

      var checkField;

      //checking the length of the value of message and assigning to a variable(checkField) on load
      checkField = $("input#img_file_upld").val().length;

      var enableDisableButton = function(){
        if(checkField > 0){
          $('#sendButton').removeAttr("disabled");
        }
        else {
          $('#sendButton').attr("disabled","disabled");
        }
      }

      //calling enableDisableButton() function on load
      enableDisableButton();

      $('input#img_file_upld').keyup(function(){
        //checking the length of the value of message and assigning to the variable(checkField) on keyup
        checkField = $("input#img_file_upld").val().length;
        //calling enableDisableButton() function on keyup
        enableDisableButton();
      });
    });
    </script> --}}
