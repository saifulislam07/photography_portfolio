@extends('admin.masterTemplate')
@section('menu-name')
    EDIT STORY
@endsection
@section('main-content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h5 class="m-0 text-dark">STORY</h5>
                    </div><!-- /.col -->
                    <div class="col-sm-6 ">
                        <a href="{{ route('story') }}" class="btn btn-sm btn-info float-right"><i
                                class="fa fa-plus-square"></i> ALL STORY</a>
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
                                <h3 class="card-title"> <i class="fa fa-list-alt"></i> EDIT STORY</h3>
                            </div>


                            <!-- /.card-header -->
                            <div class="card-body">
                                <form class="form-horizontal" action="{{ route('storyupdate', $storydata->id) }}"
                                    method="POST" enctype="multipart/form-data">
                                    @csrf

                                    <div class="form-group row">
                                        <div class=" col-sm-12 ">
                                            <div class="form-group">
                                                <label>Title <span style="color: red">*</span></label>
                                                <input type="text" class="form-control" value="{{ $storydata->title }}"
                                                    name="title" placeholder="Type story title">
                                                @error('title')
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
                                                <label>Category <span style="color: red">*</span></label>
                                                <select name="category" id="" class="form-control">
                                                    <option value="">Select Category</option>
                                                    @foreach ($category as $each)
                                                        <option @if ($storydata->category_id == $each->id) {{ 'selected' }} @endif
                                                            value="{{ $each->id }}">{{ $each->title }}</option>
                                                    @endforeach
                                                </select>
                                                @error('category')
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
                                                <label>Story Cover photo<span style="color: red">*</span></label>
                                                <input type="file" class="form-control" name="image">

                                                <input type="hidden" name="oldimage" value="{{ $storydata->image }}">
                                                @error('image')
                                                    <div style="color: red; padding: 0;">
                                                        <strong>
                                                            {{ $message }}
                                                        </strong>
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="com-sm-01">
                                            <div class="form-group" style="margin-top: 30px">
                                                <img width="70px" class="zoom"
                                                    src="{{ asset('/storycover/' . $storydata->image) }}" alt="">
                                            </div>
                                        </div>

                                        <div class=" col-sm-12 ">
                                            <div class="form-group">
                                                <label>Tags <span style="color: red">*</span></label>
                                                <input type="text" autocomplete="off" value="{{ $storydata->tages }}"
                                                    class="form-control" name="tages"
                                                    placeholder="Type here your hastag example #lifestyle spance another one">
                                                @error('title')
                                                    <div style="color: red; padding: 0;">
                                                        <strong>
                                                            {{ $message }}
                                                        </strong>
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-sm-12">
                                            <textarea class="textarea textareavalue" name="details" placeholder=" Place some text here"
                                                style="width: 100%;  font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"> {{ $storydata->details }}
                                           </textarea>
                                        </div>
                                        <div class=" col-sm-6 ">
                                            <button type="submit" class="btn btn-info ">UPDATE</button>
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
