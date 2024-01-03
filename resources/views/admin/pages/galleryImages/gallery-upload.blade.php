@extends('admin.masterTemplate')

@section('menu-name')
    Gallery Images Upload
@endsection
@section('main-content')
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
    <!-- Include Toastr CSS and JS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h5 class="m-0 text-dark">GALLERY</h5>
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

                                <form action="" enctype="multipart/form-data" method="post" id="imageForm">
                                    @csrf
                                    <div class="row">
                                        <div class="form-row col-md-12">
                                            <table class="table table-bordered table-hover ">
                                                <thead>
                                                    <tr>
                                                        <th colspan="8">Select Image Item</th>
                                                    </tr>
                                                    <tr>

                                                        <td class="text-center"><strong>Category</strong></td>
                                                        <td class="text-center"><strong>Title</strong></td>
                                                        <td class="text-center"><strong>Image</strong></td>
                                                        <td class="text-center"><strong>URL</strong></td>
                                                        <td class="text-center"><strong>TAG</strong></td>
                                                        <td class="text-center"><strong>Details</strong></td>
                                                        <td class="text-center"><strong>Action</strong></td>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <select name="category_id" class="form-control catid"
                                                                id="categoryID" data-placeholder="Search Category">
                                                                <option disabled selected value="">---Select
                                                                    Category---</option>
                                                                @foreach ($categorys as $each)
                                                                    <option catName="{{ $each->title }}"
                                                                        value="{{ $each->id }}">
                                                                        {{ $each->title }}</option>
                                                                @endforeach
                                                            </select>
                                                        </td>
                                                        <td>
                                                            <input type="text" name="title" step="any"
                                                                placeholder="Image title" id="title"
                                                                class="form-control">
                                                        </td>
                                                        <td>
                                                            <input type="file" name="images" step="any"
                                                                id="images" class="form-control  image reset_image">
                                                        </td>
                                                        <td>
                                                            <input type="text" step="any"
                                                                class="form-control  url reset_url" name="url"
                                                                id="url" placeholder="Drive link for download">
                                                        </td>
                                                        <td>
                                                            <textarea type="text" step="any" name="tags" rows="1" class="form-control tagInput tags reset_tags"
                                                                id="tags" placeholder="Tags (maximum 10)"></textarea>
                                                        </td>
                                                        <td>
                                                            <textarea type="text" step="any" rows="1" class="form-control " name="details" id="details"
                                                                placeholder="Image Short Details"></textarea>
                                                        </td>
                                                        <td class="text-center">
                                                            <a class="btn btn-info text-white" type="submit" id="addButton"
                                                                style="white-space: nowrap">
                                                                <i class="fa fa-plus"></i>
                                                                Save Image
                                                            </a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
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

            <script>
                $(document).ready(function() {
                    $('#addButton').click(function() {
                        var formData = new FormData($('#imageForm')[0]);
                        var image = $('#images').val();
                        if (image == '' || image == null) {
                            toastr.error('Image can not be empty');
                            return false;
                        }

                        $.ajax({
                            type: 'POST',
                            url: '/insert-image',
                            data: formData,
                            processData: false,
                            contentType: false,
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            },
                            success: function(response) {
                                toastr.success('Image addedd successfully');
                                $('#details').val('');
                                $('#url').val('');
                                $('#title').val('');
                                $('#tags').val('');
                                $('#categoryID').val('');
                                $('#images').val('');
                            },
                            error: function(error) {

                                if (error.responseJSON && error.responseJSON.errors) {
                                    // Handle validation errors using Toastr
                                    var errors = error.responseJSON.errors;
                                    Object.keys(errors).forEach(function(key) {
                                        toastr.error(errors[key][0]);
                                    });
                                } else {
                                    console.log(error);
                                }
                            }
                        });
                    });
                });
            </script>


        </section>
        <!-- /.content -->
    </div>
@endsection
<!-- Content Wrapper. Contains page content -->
