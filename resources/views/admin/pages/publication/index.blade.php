@extends('admin.masterTemplate')
@section('menu-name')
    Publication
@endsection

@section('main-content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h5 class="m-0 text-dark">Publication</h5>
                    </div><!-- /.col -->
                    <div class="col-sm-6 ">
                        <a href="{{ route('public.create') }}" class="btn btn-sm btn-info float-right"><i
                                class="fa fa-plus-square"></i> Add Publication</a>
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
                                <h3 class="card-title"> <i class="fa fa-users"></i> All Publication</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>SL</th>
                                            <th>Title</th>
                                            <th>URL</th>
                                            <th>Image</th>
                                            <th>Details</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i = 1; ?>
                                        @foreach ($publication as $key => $value)
                                            <tr>
                                                <td>{{ $i++ }}</td>
                                                <td>{{ $value->title }}</td>
                                                <td>{{ $value->url }}</td>
                                                <td><img width="50px" class="zoom "
                                                        src="{{ asset('./publication/' . $value->image) }}">
                                                </td>
                                                <td>{!! $value->details !!}</td>

                                                <td>


                                                    <a href="{{ route('public.edit', $value->id) }}"
                                                        class="btn btn-xs btn-info"><i class="fas fa-edit"></i></a>
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
