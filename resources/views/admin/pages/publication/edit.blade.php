@extends('admin.masterTemplate')
@section('menu-name')
    Edit Publication
@endsection
@section('main-content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h5 class="m-0 text-dark">Edit Publication</h5>
                    </div><!-- /.col -->
                    <div class="col-sm-6 ">
                        <a href="{{ route('publicationindex') }}" class="btn btn-sm btn-info float-right"><i
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
                                <h3 class="card-title"> <i class="fa fa-list-alt"></i> Edit Publication </h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <form class="form-horizontal" action="{{ route('publicationdupdate', $editinfo->id) }}"
                                    method="POST" enctype="multipart/form-data">
                                    @csrf
                                    {{-- @method('PUT') --}}
                                    <div class="form-group row">
                                        <div class=" col-sm-6">
                                            <div class="form-group">
                                                <label>Title</label>
                                                <input type="text" placeholder="Title Here " class="form-control"
                                                    name="title" value="{{ $editinfo->title }}">
                                            </div>
                                        </div>
                                        <input type="hidden" value="{{ $editinfo->image }}" name="oldimage">
                                        <div class=" col-sm-4">
                                            <div class="form-group">
                                                <label>Image</label>
                                                <input type="file" name="image" class="form-control">
                                            </div>
                                        </div>

                                        <div class="col-sm-1 mt-4" style="padding-top: 10px">
                                            <img class="zoom" width="60px"
                                                src="{{ asset('publication/' . $editinfo->image) }}" alt="">
                                        </div>
                                        <div class=" col-sm-12">
                                            <div class="form-group">
                                                <label>URL</label>
                                                <input type="text" placeholder="url" class="form-control" name="url"
                                                    value="{{ $editinfo->url }}">
                                            </div>
                                        </div>

                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label>Details <span style="color: red">*</span></label>
                                                <textarea class="textarea" name="details" placeholder="Place some text here"
                                                    style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                                                    {{ $editinfo->details }}
                                                </textarea>
                                            </div>
                                        </div>

                                        <div class=" col-sm-6 ">
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
