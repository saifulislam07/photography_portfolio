@extends('admin.masterTemplate')

@section('menu-name')
    ALL GALLERY VIDEO
@endsection
@section('main-content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h5 class="m-0 text-dark">ALL VIDEO</h5>
                    </div><!-- /.col -->
                    <div class="col-sm-6 ">
                        <a href="{{ route('vgallery') }}" class="btn btn-sm btn-info float-right"><i
                                class="fa fa-plus-square"></i> Add Video</a>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
            <hr class="style18">

        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Info boxes -->
                <div class="row">
                    <!-- /.col -->
                    <div class="col-12 col-sm-6 col-md-12">
                        @if (session()->has('success'))
                            <div class="alert alert-success">
                                {{ session()->get('success') }}
                            </div>
                        @endif

                        <div class="card">
                            <div class="card-header bg-cyan">
                                <h3 class="card-title"> <i class="fa fa-users"></i> All gallery video</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>SL</th>
                                            <th>Category</th>
                                            <th>Title</th>
                                            <th>Description</th>
                                            <th>Link</th>


                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i = 1; ?>
                                        @foreach ($galleriImages as $key => $value)
                                            <tr>
                                                <td>{{ $i++ }}</td>
                                                <td>{{ $value->cname }}</td>
                                                <td>{{ $value->title }}</td>
                                                <td>{{ $value->description }}</td>
                                                <td>
                                                    <a href="{{ $value->link }}" target="_blank" rel="noopener noreferrer">
                                                        <img width="60px" src="{{ asset('logos/yt.png') }}" alt=""
                                                            srcset="">
                                                    </a>
                                                </td>


                                                <td>
                                                    <a href="edit-video/{{ $value->id }} " class="btn btn-xs btn-info"><i
                                                            class="fas fa-pencil-alt"></i></a>
                                                    <a onclick="return confirm('Are you sure you want to Delete This Record ?')"
                                                        href="delete-video/{{ $value->id }} "
                                                        class="btn btn-xs btn-danger"><i class="fas fa-trash-alt"></i></a>
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
        <!-- /.content -->
    </div>
@endsection
<!-- Content Wrapper. Contains page content -->
