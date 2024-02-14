@extends('admin.masterTemplate')

@section('menu-name')
    Images Edit
@endsection
@section('main-content')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
    <!-- Include Toastr CSS and JS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h5 class="m-0 text-dark"> Images Edit</h5>
                    </div><!-- /.col -->
                    <div class="col-sm-6 ">
                        <a href="{{ route('list-gallery') }}" class="btn btn-sm btn-info float-right"><i
                                class="fa fa-list-alt"></i> All Images</a>
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

                            <!-- /.card-header -->
                            <div class="card-body">

                                <form action="{{ route('updateImage', $image_data->id) }}" enctype="multipart/form-data"
                                    method="post" id="imageForm">
                                    @csrf
                                    <div class="row">

                                        <div class="form-group row">
                                            <div class=" col-sm-6">
                                                <div class="form-group">
                                                    <label>Category <span style="color: red">*</span></label>
                                                    <select name="category" class="form-control">
                                                        <option value="">Select</option>
                                                        @foreach ($categorys as $each)
                                                            <option @if ($image_data->category == $each->id) selected @endif
                                                                value="{{ $each->id }}">{{ $each->title }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class=" col-sm-6">
                                                <div class="form-group">
                                                    <label>Title <span style="color: red">*</span></label>
                                                    <input type="text" value="{{ $image_data->title }}"
                                                        class="form-control" name="title">
                                                    @error('title')
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
                                                    <label>Price</label>
                                                    <input type="text" value="{{ $image_data->price }}"
                                                        class="form-control" name="price">
                                                    @error('price')
                                                        <div style="color: red; padding: 0;">
                                                            <strong>
                                                                {{ $message }}
                                                            </strong>
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class=" col-sm-4">
                                                <div class="form-group">
                                                    <label>Image <span style="color: red">*</span></label>
                                                    <input type="file" class="form-control" name="images">
                                                    <span style="color: red">500px x 500px</span>
                                                    @error('image')
                                                        <div style="color: red; padding: 0;">
                                                            <strong>
                                                                {{ $message }}
                                                            </strong>
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class=" col-sm-2">
                                                <div class="col-sm-2 mt-4">
                                                    <img class="zoom" width="70px"
                                                        src="{{ asset('galleryImage/' . $image_data->images) }}"
                                                        alt="">
                                                </div>
                                            </div>

                                            <input type="hidden" name="old_image" value="{{ $image_data->images }}">

                                            <div class=" col-sm-6">
                                                <div class="form-group">
                                                    <label>URL </label>
                                                    <input type="text" value="{{ $image_data->url }}"
                                                        class="form-control" name="url">
                                                    @error('url')
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
                                                    <label>Tags </label>
                                                    <input type="text" value="{{ $image_data->tags }}"
                                                        class="form-control" name="tags">
                                                    @error('tags')
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
                                                    <label>Details </label>
                                                    <textarea type="text" class="form-control" name="details">{{ $image_data->details }}</textarea>
                                                    @error('details')
                                                        <div style="color: red; padding: 0;">
                                                            <strong>
                                                                {{ $message }}
                                                            </strong>
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class=" col-sm-6 ">
                                                <button type="submit" class="btn btn-info">Update</button>
                                            </div>
                                        </div>
                                    </div>

                                </form>
                            </div>
                            <!-- /.card-body -->
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->



        </section>
        <!-- /.content -->
    </div>
@endsection
<!-- Content Wrapper. Contains page content -->
