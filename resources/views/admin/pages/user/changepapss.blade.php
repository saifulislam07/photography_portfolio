@extends('admin.masterTemplate')
@section('menu-name')
    Password change
@endsection
@section('main-content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h5 class="m-0 text-dark">Password change</h5>
                    </div><!-- /.col -->

                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
            <hr class="style18">
        </div>
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header bg-cyan">
                                <h3 class="card-title"> <i class="fa fa-users"></i> Password change</h3>
                            </div>

                            <div class="card-body">
                                <form method="POST" action="{{ route('storepass') }}">
                                    @csrf

                                    <div class="form-group row">
                                        <label for="password" class="col-md-4 col-form-label text-md-right">New
                                            Password</label>

                                        <div class="col-md-6">
                                            <input id="new_password" type="password" class="form-control"
                                                name="new_password" autocomplete="current-password">
                                            @foreach ($errors->all() as $error)
                                                <p class="text-danger">{{ $error }}</p>
                                            @endforeach
                                        </div>

                                    </div>

                                    <div class="form-group row">
                                        <label for="password" class="col-md-4 col-form-label text-md-right">New Confirm
                                            Password</label>

                                        <div class="col-md-6">
                                            <input id="new_confirm_password" type="password" class="form-control"
                                                name="new_confirm_password" autocomplete="current-password">
                                        </div>
                                    </div>

                                    <div class="form-group row mb-0">
                                        <div class="col-md-8 offset-md-4">
                                            <button type="submit" class="btn btn-primary">
                                                Update Password
                                            </button>
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
