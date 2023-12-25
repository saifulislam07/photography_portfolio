@extends('admin.masterTemplate')

@section('menu-name')
    DASHBOARD
@endsection
@section('main-content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h5 class="m-0 text-dark">DASHBOARD</h5>
                    </div><!-- /.col -->

                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
            <hr class="style18">
        </div>
        <!-- /.content-header -->
        @if (Auth::user()->type == 'Admin')
            <section class="content">
                <div class="container-fluid">
                    <!-- Info boxes -->
                    <div class="row">
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box">
                                <span class="info-box-icon bg-info elevation-1">
                                    <i class="fas fa-image"></i>
                                </span>

                                <div class="info-box-content">
                                    <span class="info-box-text">Total Gallery Image</span>
                                    <span class="info-box-number">
                                        {{ $galleryimage }}
                                    </span>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                        </div>
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box">
                                <span class="info-box-icon bg-warning elevation-1">
                                    <i class="fas fa-camera"></i>
                                </span>

                                <div class="info-box-content">
                                    <span class="info-box-text">Total Gallery Video</span>
                                    <span class="info-box-number">
                                        {{ $galleryvideo }}
                                    </span>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                        </div>
                        <!-- /.col -->
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box mb-3">
                                <span class="info-box-icon bg-danger elevation-1">
                                    <i class="fas fa-list"></i></span>

                                <div class="info-box-content">
                                    <span class="info-box-text">Albam</span>
                                    <span class="info-box-number">{{ $categorycount }}</span>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                        </div>
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box mb-3">
                                <span class="info-box-icon bg-danger elevation-1">
                                    <i class="fas fa-book"></i></span>

                                <div class="info-box-content">
                                    <span class="info-box-text">Total Story</span>
                                    <span class="info-box-number">{{ $story }}</span>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                        </div>
                        <!-- /.col -->

                        <!-- fix for small devices only -->
                        <div class="clearfix hidden-md-up"></div>


                        <div class="col-12 col-sm-6 col-md-12">
                            <div class="info-box mb-3">

                                <div class="col-12 col-sm-6 col-md-4">
                                    <div class="info-box mb-3">
                                        <span class="info-box-icon bg-success elevation-1">
                                            <i class="fas fa-envelope"></i></span>

                                        <div class="info-box-content">
                                            <span class="info-box-text">Email</span>
                                            <span class="info-box-number">{{ $contactemail }}</span>
                                        </div>
                                        <!-- /.info-box-content -->
                                    </div>
                                    <!-- /.info-box -->
                                </div>


                                <div class="col-12 col-sm-6 col-md-4">
                                    <div class="info-box mb-3">
                                        <span class="info-box-icon bg-danger elevation-1">
                                            <i class="fas fa-award" style="color: green"></i></span>

                                        <div class="info-box-content">
                                            <span class="info-box-text">National Achievement</span>
                                            <span class="info-box-number">{{ $national }}</span>
                                        </div>
                                        <!-- /.info-box-content -->
                                    </div>
                                    <!-- /.info-box -->
                                </div>
                                <div class="col-12 col-sm-6 col-md-4">
                                    <div class="info-box mb-3">
                                        <span class="info-box-icon bg-black elevation-1">
                                            <i class="fas fa-award" style="color :white"></i></span>

                                        <div class="info-box-content">
                                            <span class="info-box-text">International Achievement</span>
                                            <span class="info-box-number">{{ $international }}</span>
                                        </div>
                                        <!-- /.info-box-content -->
                                    </div>
                                    <!-- /.info-box -->
                                </div>
                            </div>
                        </div>
                        <!-- /.col -->

                        <!-- /.col -->
                    </div>
                    <!-- /.row -->


                    <!-- /.row -->

                    <!-- Main row -->

                    <!-- /.row -->
                </div>
                <!--/. container-fluid -->
            </section>
        @elseif(Auth::user()->type == 2)
        @endif


        <!-- Main content -->

        <!-- /.content -->
    </div>
@endsection
<!-- Content Wrapper. Contains page content -->
