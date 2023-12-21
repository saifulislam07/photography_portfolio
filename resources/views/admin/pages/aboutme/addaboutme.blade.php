@extends('admin.masterTemplate')
@section('menu-name')
    Add About Me
@endsection
@section('main-content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h5 class="m-0 text-dark">Add About Me</h5>
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
                        <!-- Profile Image -->
                        <div class="card">
                            <div class="card-header bg-cyan">
                                <h3 class="card-title"> <i class="fa fa-list-alt"></i> About Me </h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <form class="form-horizontal" action="{{ route('storeaboutme', $aboutme->id) }}"
                                    method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group row">
                                        <div class=" col-sm-12">
                                            <div class="form-group">
                                                <label>Title</label>
                                                <input type="text"
                                                    placeholder="Title Here (like : Freelance Photographer)"
                                                    class="form-control" value="{{ $aboutme->title }}" name="title">
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
                                                <label>Home Image </label>
                                                <input type="file" class="form-control" name="homeimage">
                                                <input type="hidden" name="old_homeimage"
                                                    value="{{ $aboutme->homeimage }}">
                                                @error('homeimage')
                                                    <div style="color: red; padding: 0;">
                                                        <strong>
                                                            {{ $message }}
                                                        </strong>

                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class=" col-sm-1 ">
                                            <div class="form-group" style="padding-top: 20px">
                                                <img width="60px" class="zoom"
                                                    src="{{ asset('./aboutmes/' . $aboutme->homeimage) }} " alt="">
                                            </div>
                                        </div>

                                        <div class=" col-sm-5 ">
                                            <div class="form-group">
                                                <label>About Page Image </label>
                                                <input type="file" class="form-control" name="aboutppageimage">
                                                <input type="hidden" name="old_aboutppageimage"
                                                    value="{{ $aboutme->aboutppageimage }}">
                                                @error('aboutppageimage')
                                                    <div style="color: red; padding: 0;">
                                                        <strong>
                                                            {{ $message }}
                                                        </strong>

                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class=" col-sm-1 ">
                                            <div class="form-group" style="padding-top: 20px">
                                                <img width="60px" class="zoom"
                                                    src="{{ asset('./aboutmes/' . $aboutme->aboutppageimage) }} "
                                                    alt="">
                                            </div>
                                        </div>
                                        <div class=" col-sm-5 ">
                                            <div class="form-group">
                                                <label>Story Image </label>
                                                <input type="file" class="form-control" name="storyimage">
                                                <input type="hidden" name="old_storyimage"
                                                    value="{{ $aboutme->storyimage }}">
                                                @error('storyimage')
                                                    <div style="color: red; padding: 0;">
                                                        <strong>
                                                            {{ $message }}
                                                        </strong>

                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class=" col-sm-1 ">
                                            <div class="form-group" style="padding-top: 20px">
                                                <img width="60px" class="zoom"
                                                    src="{{ asset('./aboutmes/' . $aboutme->storyimage) }} "
                                                    alt="">
                                            </div>
                                        </div>
                                        <div class=" col-sm-5 ">
                                            <div class="form-group">
                                                <label>Cover for Portfolio Image </label>
                                                <input type="file" class="form-control" name="coverimage">
                                                <input type="hidden" name="old_coverimage"
                                                    value="{{ $aboutme->coverimage }}">
                                                @error('coverimage')
                                                    <div style="color: red; padding: 0;">
                                                        <strong>
                                                            {{ $message }}
                                                        </strong>

                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class=" col-sm-1 ">
                                            <div class="form-group" style="padding-top: 20px">
                                                <img width="60px" class="zoom"
                                                    src="{{ asset('./aboutmes/' . $aboutme->coverimage) }} "
                                                    alt="">
                                            </div>
                                        </div>


                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label>Ablut Me <span style="color: red">*</span></label>
                                                <textarea class="textarea" name="details" placeholder="Place some text here"
                                                    style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                                                         @error('details')
<div style="color: red; padding: 0;">
                                                            <strong>
                                                                {{ $message }}
                                                            </strong>

                                                        </div>
@enderror                                                                                                                                  {{ $aboutme->details }} </textarea>
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
