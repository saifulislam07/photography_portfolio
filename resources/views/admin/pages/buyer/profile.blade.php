@extends('admin.masterTemplate')
@section('menu-name')
    PROFILE
@endsection
@section('main-content')
    <style>
        .tablestyle3 {
            margin: 0;
            padding: 0;
            line-height: 0;
            font-size: 10px;
        }
    </style>
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h5 class="m-0 text-dark">PROFILE</h5>
                    </div><!-- /.col -->

                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
            <hr class="style18">
        </div>
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header bg-warning">
                                <h3 class="card-title"> <i class="fa fa-users"></i> Buyer Profile</h3>
                            </div>
                            <div class="card-body">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th class="bg-warning">Name</th>
                                            <td>{{ $userInfos->name }}</td>
                                        </tr>
                                        <tr>
                                            <th class="bg-warning">Email</th>
                                            <td>{{ $userInfos->email }}</td>
                                        </tr>
                                        <tr>
                                            <th class="bg-warning">Phone</th>
                                            <td>{{ $userInfos->phone }}</td>
                                        </tr>
                                        <tr>
                                            <th class="bg-warning">Join</th>
                                            <td>{{ $userInfos->created_at }}</td>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header bg-warning">
                                <h3 class="card-title"> <i class="fa fa-users"></i> Update Profile</h3>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('user-profile-update', $userInfos->id) }}" method="post">
                                    <div class="form-group row">
                                        <div class="col-sm-6">
                                            <label for="inputName" class="col-sm-3 col-form-label">Name</label>
                                            <input type="text" name="name" value="{{ $userInfos->name }}"
                                                class="form-control" id="" placeholder="Your name">
                                            @error('name')
                                                <div style="color: red; padding: 0;">
                                                    <strong>
                                                        {{ $message }}
                                                    </strong>
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="col-sm-6">
                                            <label for="inputName" class="col-sm-3 col-form-label">Email</label>
                                            <input type="text" readonly value="{{ $userInfos->email }}"
                                                class="form-control" id="" placeholder="Your email">
                                            @error('email')
                                                <div style="color: red; padding: 0;">
                                                    <strong>
                                                        {{ $message }}
                                                    </strong>
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="col-sm-6">
                                            <label for="inputName" class="col-sm-3 col-form-label">Phone</label>
                                            <input type="text" name="phone" value="{{ $userInfos->phone }}"
                                                class="form-control" id="" placeholder="Your phone">
                                            @error('phone')
                                                <div style="color: red; padding: 0;">
                                                    <strong>
                                                        {{ $message }}
                                                    </strong>
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="col-sm-6">
                                            <label for="inputName" class="col-sm-6 col-form-label">Join</label>
                                            <input readonly value="{{ $userInfos->created_at }}" class="form-control"
                                                id="">
                                            @error('password')
                                                <div style="color: red; padding: 0;">
                                                    <strong>
                                                        {{ $message }}
                                                    </strong>
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="col-sm-6">
                                            <label for="inputName" class="col-sm-6 col-form-label">Password</label>
                                            <input type="password" name="password" value="" class="form-control"
                                                id="" placeholder="Password">
                                            @error('password')
                                                <div style="color: red; padding: 0;">
                                                    <strong>
                                                        {{ $message }}
                                                    </strong>
                                                </div>
                                            @enderror
                                        </div>

                                        <div class="col-sm-6">
                                            <label for="inputName" class="col-sm-6 col-form-label">Confirm Password</label>
                                            <input type="text" name="confirm_password" value=""
                                                class="form-control" id="" placeholder="Confirm password">
                                            @error('confirm_password')
                                                <div style="color: red; padding: 0;">
                                                    <strong>
                                                        {{ $message }}
                                                    </strong>
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="col-sm-6 mt-4 ">

                                            <button type="submit"
                                                class="btn btn-warning form-control text-white">Update</button>

                                        </div>

                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
