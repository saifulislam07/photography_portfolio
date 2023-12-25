@extends('admin.masterTemplate')
@section('menu-name')
    Edit Achievement
@endsection
@section('main-content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h5 class="m-0 text-dark">Edit Achievement</h5>
                    </div><!-- /.col -->
                    <div class="col-sm-6 ">
                        <a href="{{ route('achievement') }}" class="btn btn-sm btn-info float-right"><i
                                class="fa fa-plus-square"></i> All Achievement</a>
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
                                <h3 class="card-title"> <i class="fa fa-list-alt"></i> Edit Achievement</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <form class="form-horizontal"
                                    action="{{ route('update-achievment', $achievementdata->id) }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group row">
                                        <div class=" col-sm-6 ">
                                            <div class="form-group">
                                                <label>Type <span style="color: red">*</span></label>
                                                <select name="type" class="form-control">
                                                    <option @if ($achievementdata->type == 'International') {{ 'selected' }} @endif
                                                        value="International">International</option>
                                                    <option @if ($achievementdata->type == 'National') {{ 'selected' }} @endif
                                                        value="National">National</option>
                                                </select>
                                                @error('type')
                                                    <div style="color: red; padding: 0;">
                                                        <strong>
                                                            {{ $message }}
                                                        </strong>
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class=" col-sm-6 ">
                                            <div class="form-group">
                                                <label>Title <span style="color: red">*</span></label>
                                                <input type="text" value="{{ $achievementdata->title }}"
                                                    class="form-control" name="title"
                                                    placeholder="Type Achievement title">
                                                @error('title')
                                                    <div style="color: red; padding: 0;">
                                                        <strong>
                                                            {{ $message }}
                                                        </strong>
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class=" col-sm-5 ">
                                            <div class="form-group">
                                                <label>Logo <span style="color: red">*</span></label>
                                                <input type="hidden" name="oldimage" value="{{ $achievementdata->image }}">
                                                <input type="file" class="form-control" name="image"
                                                    placeholder="Type story title">
                                                @error('image')
                                                    <div style="color: red; padding: 0;">
                                                        <strong>
                                                            {{ $message }}
                                                        </strong>

                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class=" col-sm-5 ">
                                            <div class="form-group" style="margin-top: 33px">
                                                <img width="75px" class="zoom"
                                                    src="{{ asset('achievements/' . $achievementdata->image) }}"
                                                    alt="">
                                            </div>
                                        </div>
                                        <div class=" col-sm-12 ">
                                            <div class="form-group">
                                                <label>URL </label>
                                                <input type="text" value="{{ $achievementdata->url }}"
                                                    class="form-control" name="url" placeholder="Youtube embeded url">
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label>Details </label>
                                                <textarea class="textarea" name="details" placeholder="Place some text here"
                                                    style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{ $achievementdata->details }}
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
