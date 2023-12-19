@extends('admin.masterTemplate')
@section('menu-name')
    Create Publication
@endsection
@section('main-content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h5 class="m-0 text-dark">Create Publication</h5>
                    </div><!-- /.col -->
                    <div class="col-sm-6 ">
                        <a href="{{ route('public.index') }}" class="btn btn-sm btn-info float-right"><i
                                class="fa fa-plus-square"></i> All Publication</a>
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
                                <h3 class="card-title"> <i class="fa fa-list-alt"> </i> Create Publication</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <form class="form-horizontal" action="{{ route('public.store') }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group row">
                                        <div class=" col-sm-6">
                                            <div class="form-group">
                                                <label>Title</label>
                                                <input type="text" placeholder="Publication Title here"
                                                    class="form-control" name="title">
                                            </div>
                                        </div>
                                        <div class=" col-sm-6 ">
                                            <div class="form-group">
                                                <label>Image <span style="color: red">*</span></label>
                                                <input type="file" class="form-control" name="image">
                                                @error('image')
                                                    <div style="color: red; padding: 0;">
                                                        <strong>
                                                            {{ $message }}
                                                        </strong>
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class=" col-sm-12">
                                            <div class="form-group">
                                                <label>URL</label>
                                                <input type="text" placeholder="url" class="form-control" name="url">
                                            </div>
                                        </div>

                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label>Details <span style="color: red">*</span></label>
                                                <textarea class="textarea" name="details" placeholder="Place some text here"
                                                    style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                                                         @error('details')
<div style="color: red; padding: 0;">
                                                            <strong>
                                                            {{ $message }}
                                                            </strong>

                                                            </div>
@enderror
                                            </textarea>
                                            </div>
                                        </div>
                                        <div class=" col-sm-6 ">
                                            <button type="submit" class="btn btn-info">SAVE</button>
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
