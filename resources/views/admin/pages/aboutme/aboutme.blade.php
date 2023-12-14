@extends('admin.masterTemplate')
@section('menu-name')
    About Me
@endsection

@section('main-content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h5 class="m-0 text-dark">About Me</h5>
                    </div><!-- /.col -->
                    <div class="col-sm-6 ">
                        <a href="{{ route('addaboutme') }}" class="btn btn-sm btn-info float-right"><i
                                class="fa fa-plus-square"></i> Add About Me</a>
                    </div>
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
            <hr class="style18">
        </div>
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-10">
                        <!-- Profile Image -->
                        <div class="card">
                            <div class="card-header bg-cyan">
                                <h3 class="card-title"> <i class="fa fa-users"></i> All About Me</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>SL</th>
                                            <th>About Me</th>
                                            <th>Image</th>
                                            <th>logo</th>
                                            <th>Contact</th>
                                            <th>Email</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i = 1; ?>
                                        @foreach ($aboutme as $key => $value)
                                            <tr>
                                                <td>{{ $i++ }}</td>
                                                <td>{!! $value->details !!}</td>
                                                <td><img class="profile-user-img img-fluid "
                                                        src="{{ asset('./aboutmes/' . $value->photo) }}"></td>
                                                <td><img class="profile-user-img img-fluid "
                                                        src="{{ asset('./aboutmes/' . $value->mylogo) }}"></td>
                                                <td>{{ $value->contact }}</td>
                                                <td>{{ $value->email }}</td>
                                                <td>
                                                    <a href="{{ 'editabout/' . $value->id }}" class="btn btn-xs btn-info"><i
                                                            class="fas fa-edit"></i></a>
                                                    <a href="" class="btn btn-xs btn-danger"><i
                                                            class="fas fa-trash"></i></a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
