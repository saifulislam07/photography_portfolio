@extends('admin.masterTemplate')
@section('menu-name')
    ADD RULES
@endsection
@section('main-content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h5 class="m-0 text-dark">RULES</h5>
                    </div><!-- /.col -->
                    <div class="col-sm-6 ">
                        <a href="{{ route('story') }}" class="btn btn-sm btn-info float-right"><i
                                class="fa fa-plus-square"></i> All Rules</a>
                    </div>
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
            <hr class="style18">
        </div>
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-10">
                        <!-- Profile Image -->
                        <div class="card">
                            <div class="card-header bg-cyan">
                                <h3 class="card-title"> <i class="fa fa-list-alt"></i> Add Story</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <form class="form-horizontal" action="{{ route('storestory') }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group row">
                                        <div class=" col-sm-12 ">
                                            <div class="form-group">
                                                <label>Title <span style="color: red">*</span></label>
                                                <input type="text" class="form-control" name="title"
                                                    placeholder="Type story title">
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
                                                        <option value="{{ $each->id }}">{{ $each->title }}</option>
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
                                        <div class=" col-sm-6 ">
                                            <div class="form-group">
                                                <label>Story Cover photo<span style="color: red">*</span></label>
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

                                        <div class=" col-sm-12 ">
                                            <div class="form-group">
                                                <label>Tags <span style="color: red">*</span></label>
                                                <input type="text" autocomplete="off" class="form-control" name="tages"
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

                                        <div class="col-sm-12" >

                                            <textarea class="textarea textareavalue" name="details" placeholder=" Place some text here"
                                                style="width: 100%;  font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                                           </textarea>
                                        </div>

                                        <div class=" col-sm-6 ">
                                            <button id="submitButtonID" type="submit" class="btn btn-info ">SAVE</button>
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
