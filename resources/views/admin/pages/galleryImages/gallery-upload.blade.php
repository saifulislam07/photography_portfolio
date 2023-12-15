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
                                <form action="{{ route('store') }}" enctype="multipart/form-data" method="post">
                                    @csrf


                                    <div class="row">
                                        <div class="form-row col-md-12">


                                            {{-- html load by js --}}


                                            <table class="table table-bordered table-hover " id="show_item">
                                                <thead>
                                                    <tr>
                                                        <th colspan="8">Select Image Item</th>
                                                    </tr>
                                                    <tr>

                                                        <td class="text-center"><strong>Category</strong></td>
                                                        <td class="text-center"><strong>Image</strong></td>
                                                        <td class="text-center"><strong>URL</strong></td>
                                                        <td class="text-center"><strong>Action</strong></td>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>

                                                        <td>
                                                            <select class="form-control catName reset" id="categoryID"
                                                                data-placeholder="Search Category">
                                                                <option disabled selected>---Select Category---</option>
                                                                @foreach ($categorys as $each)
                                                                    <option catName="{{ $each->title }}"
                                                                        value="{{ $each->id }}">
                                                                        {{ $each->title }}</option>
                                                                @endforeach
                                                            </select>
                                                        </td>

                                                        <td>
                                                            <input type="file" readonly step="any" id="image"
                                                                class="form-control text-right image reset_image"
                                                                placeholder="sku code">
                                                        </td>
                                                        <td>
                                                            <input type="text" step="any"
                                                                class="form-control text-right url reset_url" id="url"
                                                                placeholder="Quantity">
                                                        </td>
                                                        <td class="text-center">
                                                            <a id="add_item" class="btn btn-info "
                                                                style="white-space: nowrap" href="javascript:;"
                                                                title="Add Item">
                                                                <i class="fa fa-plus"></i>
                                                                Add Image
                                                            </a>
                                                        </td>
                                                    </tr>

                                                </tbody>

                                            </table>
                                        </div>

                                    </div>




                                    <button class="btn btn-primary">SAVE IMAGE</button>
                                </form>
                            </div>
                            <!-- /.card-body -->
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->


            <script type="text/javascript">
                $(document).on('click', '#add_item', function() {
                    var parent = $(this).parents('tr');
                    var image = $('.image').val();
                    var url = $('.url').val();
                    var catId = $('.catName').val();
                    var catName = $(".catName").find('option:selected').attr('catName');

                    console.log(catId);

                    if (catId == '' || catId == null) {
                        toastr.error('Category can not be empty');
                        // alertMessage.error("Product can't be empty.");
                        return false;
                    }
                    if (image == '' || image == null) {
                        toastr.error('Image can not be empty');
                        // alertMessage.error("Product can't be empty.");
                        return false;
                    }

                    // start check duplicate product
                    let seaschproduct = $('#categoryID option:selected')[0].getAttribute("value");
                    let tbody = $('tbody').find(".new_item" + seaschproduct).length;


                    // end check duplicate product

                    if (url == '' || url == null || url == 0) {
                        toastr.error('URL can not be empty');
                        // alertMessage.error('Quantity cannot be empty');
                        return false;
                    } else {


                        const row = `
                    <tr class="new_item${catId}">

                        <td class="text-right">${catName}<input type="hidden" class=" " product-id="${catId}" name="catName[]" value="${catId}"></td>

                        <td class="text-right">${image}<input type="hidden" class="ttlurl" name="image[]" value="${image}"></td>
                        <td class="text-right">${url}<input type="hidden" class="ttlurl" name="url[]" value="${url}"></td>


                        <td>
                            <a del_id="${catId}" class="delete_item btn form-control btn-danger " href="javascript:;" title="">
                                <i class="fa fa-times"></i> Remove
                            </a>
                        </td>
                    </tr>
                `;
                        $("#show_item tbody").append(row);
                    }

                    $('.reset_image').val('');
                    $('.reset_url').val('');
                    $(".reset").val(null).trigger("change");
                });




                $(document).on('click', '.delete_item', function() {

                    let deleteItem = $(this).parents('tr');
                    deleteItem.remove();
                    // let deleteitem = () => {
                    //     $(this).parents('tr').remove();
                    // }
                    //  toastr.error('{{ Session::get('error', 'Item removed!!') }}');
                    //  alertMessage.confirm('You want to remove this', deleteitem);

                });
            </script>

            {{-- <script>
                $(document).ready(function() {
                    // Trigger Toastr messages in JavaScript
                    toastr.success('This is a success message');
                    toastr.error('This is an error message');
                    toastr.warning('This is a warning message');
                    toastr.info('This is an info message');
                });
            </script> --}}
        </section>
        <!-- /.content -->
    </div>
@endsection
<!-- Content Wrapper. Contains page content -->
