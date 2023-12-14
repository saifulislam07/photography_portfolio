@extends('admin.masterTemplate')
@section('menu-name')
    Client
@endsection

@section('main-content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h5 class="m-0 text-dark">Client</h5>
                    </div><!-- /.col -->
                    <div class="col-sm-6 ">
                        <a href="{{ route('createclient') }}" class="btn btn-sm btn-info float-right"><i
                                class="fa fa-plus-square"></i> Add Client</a>
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
                                <h3 class="card-title"> <i class="fa fa-users"></i> All Client</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>SL</th>
                                            <th>logo</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i = 1; ?>
                                        @foreach ($allclient as $key => $value)
                                            <tr>
                                                <td>{{ $i++ }}</td>
                                                <td><img class="profile-user-img img-fluid "
                                                        src="{{ asset('/clients/' . $value->image) }}"></td>
                                                <td>
                                                    <a href="{{ 'deleteclient/' . $value->id }}"
                                                        class="btn btn-xs btn-danger"><i class="fas fa-trash"></i></a>

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
