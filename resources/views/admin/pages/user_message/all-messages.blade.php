@extends('admin.masterTemplate')
@section('menu-name')
    Al Message
@endsection
@section('main-content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h5 class="m-0 text-dark">All Message</h5>
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
                                <h3 class="card-title"> <i class="fa fa-users"></i> All Message</h3>
                            </div>

                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped ">
                                    <thead>
                                        <tr>
                                            <th>SL</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th> Type</th>
                                            <th>Message</th>
                                            <th>Status</th>
                                            <th>Date</th>
                                            <th>Action</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        
                                        $i = 1; ?>
                                        @foreach ($allcontactme as $key => $value)
                                            <tr>
                                                <td>{{ $i++ }}</td>
                                                <td>{{ $value->name }}</td>
                                                <td>{{ $value->email }}</td>
                                                <td>{{ $value->story_id }}</td>
                                                <td>{{ $value->message }}</td>
                                                <td>{{ $value->status }}</td>
                                                <td>{{ $value->created_at }}</td>

                                                <td>

                                                    <a href="" class="btn btn-xs btn-danger"><i
                                                            class="fas fa-trash-alt"></i></a>
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
        </section>
    </div>
@endsection
