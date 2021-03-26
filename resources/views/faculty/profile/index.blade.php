@extends('faculty.templates.app')
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="row align-items-center">
                                <div class="col-8">
                                    <h3 class="mb-0">User Management</h3>

                                </div>
                                <div class="col-4 text-right">
                                    <a href="/register"
                                        class="btn btn-sm btn-primary float-right" style="background-color: #030731 !important">Add User</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">


                            <div class="table-responsive">
                                <table class="table">
                                    <thead class=" head-light">
                                        <tr>
                                            <th>
                                                Photo
                                            </th>
                                            <th>Name</th>
                                            <th>
                                                Email
                                            </th>
                                            <th>
                                                User Type
                                            </th>
                                            <th>
                                                Creation Date
                                            </th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($admins as  $admin)
                                            <tr>
                                                <td>{{ $admin->name }}</td>

                                                <td>
                                                    <span class="avatar avatar-md rounded-circle">
                                                        <img class="avatar border-gray" src="{{ asset('profileImage/' . $admin->profile_image) }}" alt="...">
                                                    </span>
                                                </td>
                                                <td>{{$admin->profile_image}}</td>
                                                <td>{{ $admin->name }}</td>
                                                <td>{{$admin->email}}</td>
                                                <td>{{$admin->user_type}}</td>
                                                <td>{{$admin->email_verified_at}}</td>
                                            </tr>

                                        @endforeach
                                        {{-- @foreach ($users as  $user)
                                        <tr>
                                            <td>{{$user->profile_image}}</td>
                                            <td>{{ $user->name }}</td>
                                            <td>{{$user->email}}</td>
                                            <td>{{$user->user_type}}</td>
                                            <td>{{$user->email_verified_at}}</td>



                                        </tr>

                                    @endforeach --}}


                                    </tbody>

                                </table>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
