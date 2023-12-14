@extends('admin.masterTemplate')

@section('menu-name')
    Add Category
@endsection
@section('main-content')
    {{-- <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script> --}}
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h5 class="m-0 text-dark">Add Category</h5>
                    </div><!-- /.col -->
                    <div class="col-sm-6 ">
                        <a href="{{ route('category') }}" class="btn btn-sm btn-info float-right"><i
                                class="fa fa-plus-square"></i> ALL Category</a>
                    </div>
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
            <hr class="style18">
        </div>
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">

                    <!-- /.col -->

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header bg-blue text-center">-: ADD NEW Category :-</div>
                            <div class="card-body">
                                <div class="tab-content">
                                    <div class="active tab-pane">
                                        <form class="form-horizontal" method="POST" action="{{ route('storecat') }}"
                                            enctype="multipart/form-data">
                                            @csrf

                                            <div class="form-group row">
                                                <label for="inputName" class="col-sm-3 col-form-label">Title</label>
                                                <div class="col-sm-9">
                                                    <input type="text" name="title" value="" class="form-control"
                                                        id="" placeholder="Category Title">
                                                    @error('title')
                                                        <div style="color: red; padding: 0;">
                                                            <strong>
                                                                {{ $message }}
                                                            </strong>

                                                        </div>
                                                    @enderror
                                                </div>

                                            </div>




                                    </div>

                                    <div class="form-group row">

                                        <div class=" col-sm-3 "></div>
                                        <div class=" col-sm-3 ">
                                            <button type="submit" class="btn btn-info btn-block">SAVE</button>
                                        </div>
                                    </div>
                                    </form>
                                </div>

                                <!-- /.tab-pane -->


                                <!-- /.tab-pane -->
                            </div>
                            <!-- /.tab-content -->
                        </div><!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </section>
    </div><!-- /.container-fluid -->
    <!-- /.content -->
@endsection
<!-- Content Wrapper. Contains page content -->
