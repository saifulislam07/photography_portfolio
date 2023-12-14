@extends('admin.masterTemplate')
@section('menu-name')
    Achievement
@endsection

@section('main-content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h5 class="m-0 text-dark">Achievement</h5>
                    </div><!-- /.col -->
                    <div class="col-sm-6 ">
                        <a href="{{ route('addachievement') }}" class="btn btn-sm btn-info float-right"><i
                                class="fa fa-plus-square"></i> Add achievement</a>
                    </div>
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
            <hr class="style18">
        </div>
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">

                    <div class="col-md-12">
                        <!-- Profile Image -->
                        <div class="card">
                            <div class="card-header bg-cyan">
                                <h3 class="card-title"> <i class="fa fa-users"></i> All Achievement</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body ">
                                <table id="example1" class="table table-bordered table-striped ">
                                    <thead>
                                        <tr>
                                            <th>SL</th>
                                            <th>Type</th>
                                            <th>Title</th>
                                            <th>Image</th>
                                            <th>URL</th>
                                            <th>Details</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i = 1; ?>
                                        @foreach ($allachievement as $key => $value)
                                            <tr>
                                                <td>{{ $i++ }}</td>
                                                <td>{{ $value->type }}</td>
                                                <td>{{ $value->title }}</td>
                                                <td>{{ $value->image }}</td>
                                                <td>{{ $value->url }}</td>
                                                <td>{!! $value->details !!}</td>
                                                <td> <?php if ($value->status == 1) {
    echo 'Active';
} else {
    echo 'Inactive';
} ?></td>
                                                <td>
                                                    <a href="" class="btn btn-xs btn-info"><i
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
