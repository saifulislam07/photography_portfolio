@extends('admin.masterTemplate')
@section('menu-name')
    Story
@endsection

@section('main-content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h5 class="m-0 text-dark">Story</h5>
                    </div><!-- /.col -->
                    <div class="col-sm-6 ">
                        <a href="{{ route('addstory') }}" class="btn btn-sm btn-info float-right"><i
                                class="fa fa-plus-square"></i> Add Story</a>
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
                                <h3 class="card-title"> <i class="fa fa-users"></i> All Story</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>SL</th>
                                            <th>Title</th>
                                            {{-- <th>Details</th> --}}
                                            <th>Cover</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i = 1; ?>
                                        @foreach ($allstory as $key => $value)
                                            <tr>
                                                <td>{{ $i++ }}</td>
                                                <td>{{ $value->title }}</td>
                                                {{-- <td>{!! $value->details !!}</td> --}}
                                                <td><img width="70px" class="zoom"
                                                        src="{{ asset('/storycover/' . $value->image) }}" alt="">
                                                </td>
                                                <td> <?php if ($value->status == 1) {
                                                    echo 'Active';
                                                } else {
                                                    echo 'Inactive';
                                                } ?></td>
                                                <td>
                                                    <a href="{{ route('edit-story', $value->id) }}"
                                                        class="btn btn-xs btn-info"><i class="fas fa-edit"></i></a>
                                                    <a href="" class="btn btn-xs btn-success"><i
                                                            class="fas fa-desktop"></i></a>
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
