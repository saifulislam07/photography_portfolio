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
                    <div class="col-sm-6 ">
                        <a href="{{ route('aboutme') }}" class="btn btn-sm btn-info float-right"><i
                                class="fa fa-plus-square"></i> About Me</a>
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
                                <h3 class="card-title"> <i class="fa fa-list-alt"></i>About Me</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <form class="form-horizontal" action="{{ route('storeaboutme') }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group row">
                                        <div class=" col-sm-12">
                                            <div class="form-group">
                                                <label>Title</label>
                                                <input type="text" placeholder="Title Here (like : Freelance Photographer)"
                                                    class="form-control" name="title">
                                            </div>
                                        </div>
                                        <div class=" col-sm-6 ">
                                            <div class="form-group">
                                                <label>Image <span style="color: red">*</span></label>
                                                <input type="file" class="form-control" name="image">
                                                @error('photo')
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
                                                <label>My Logo <span style="color: red">*</span></label>
                                                <input type="file" class="form-control" name="mylogo">
                                                @error('mylogo')
                                                    <div style="color: red; padding: 0;">
                                                        <strong>
                                                            {{ $message }}
                                                        </strong>

                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class=" col-sm-6">
                                            <div class="form-group">
                                                <label>Contact</label>
                                                <input type="text" placeholder="+8801675909939" class="form-control"
                                                    name="contact">
                                            </div>
                                        </div>
                                        <div class=" col-sm-6 ">
                                            <div class="form-group">
                                                <label>Email</label>
                                                <input type="email" placeholder="Email address" class="form-control"
                                                    name="email">

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
@enderror                                                                                                                                   </textarea>
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
