@extends('admin.masterTemplate')
@section('menu-name')
    Edit Tearsheet
@endsection
@section('main-content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h5 class="m-0 text-dark">Edit Tearsheet</h5>
                    </div><!-- /.col -->
                    <div class="col-sm-6 ">
                        <a href="{{ route('aboutme') }}" class="btn btn-sm btn-info float-right"><i
                                class="fa fa-plus-square"></i> Tearsheet</a>
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
                                <h3 class="card-title"> <i class="fa fa-list-alt"></i> Edit Tearsheet </h3>
                            </div>


                            <!-- /.card-header -->
                            <div class="card-body">
                                <form class="form-horizontal" action="{{ route('tearsheets.update', $editdata->id) }}"
                                    method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-group row">
                                        <div class=" col-sm-4">
                                            <div class="form-group">
                                                <label>URL</label>
                                                <input type="text" placeholder="URL Here" class="form-control"
                                                    name="url" value="{{ $editdata->url }}">
                                            </div>
                                        </div>


                                        <div class=" col-sm-4 ">
                                            <div class="form-group">
                                                <label> Image <span style="color: red">*</span></label>
                                                <input type="file" class="form-control" name="image">
                                                <input type="hidden" class="form-control" value="{{ $editdata->image }}"
                                                    name="oldimage">
                                                @error('image')
                                                    <div style="color: red; padding: 0;">
                                                        <strong>
                                                            {{ $message }}
                                                        </strong>
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div style="margin-top: 33px">
                                            <img width="40px" src="{{ asset('TearSheet/' . $editdata->image) }}"
                                                alt="">
                                        </div>



                                        <div class=" col-sm-3 " style="margin-top: 33px">
                                            <button type="submit" class="btn btn-info">UPDATE</button>
                                        </div>

                                    </div>


                                </form>
                            </div>
                            <!-- /.card-body -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
