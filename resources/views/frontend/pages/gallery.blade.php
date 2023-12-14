@extends('frontend.masterTemp')
@section('fmenuname')
    HOME
@endsection
@section('front-main-content')
    <style type="text/css">
        .grid-view.brows-job-lis {
            position: relative;
            text-align: center;
            padding-bottom: 0;
            margin-bottom: 45px;
        }

        .brows-job-lis {
            display: table;
            width: 100%;
            clear: both;
            padding: 15px 0;
            padding-bottom: 15px;
            margin-bottom: 15px;
            transition: .4s;
            border: 1px solid #eaeff5;
            background: #fff;
            border-radius: 6px;
            box-shadow: 0 0 10px 0 rgba(88, 96, 109, .14);
            -webkit-box-shadow: 0 0 10px 0 rgba(88, 96, 109, .14);
            -moz-box-shadow: 0 0 10px 0 rgba(88, 96, 109, .14);
        }

    </style>
    <div class="clearfix"></div>

    <!-- Title Header Start -->
    <section class="inner-header-title">
        <div class="container">
            <h1>Gallery</h1>
        </div>
    </section>
    <div class="clearfix"></div>
    <!-- Title Header End -->

    <!-- ========== Begin: Brows job Category ===============  -->
    <section class="brows-job-category">
        <div class="container">
            <!-- Company Searrch Filter Start -->

            <!-- Company Searrch Filter End -->

            <!--Browse Job In Grid-->
            <div class="row extra-mrg">
                <div class="col-md-4 col-sm-6">
                    <div class="grid-view brows-job-lis">
                        <div class="gimage">
                            <img src="{{ asset('frontend_assets/assets/img/simple-banner.jpg') }}" class="img-responsive"
                                alt="" />
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="grid-view brows-job-list">
                        <div class="gimage">
                            <img src="{{ asset('frontend_assets/assets/img/simple-banner.jpg') }}" class="img-responsive"
                                alt="" />
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="grid-view brows-job-lis">
                        <div class="gimage">
                            <img src="{{ asset('frontend_assets/assets/img/simple-banner.jpg') }}" class="img-responsive"
                                alt="" />
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="grid-view brows-job-lis">
                        <div class="gimage">
                            <img src="{{ asset('frontend_assets/assets/img/simple-banner.jpg') }}" class="img-responsive"
                                alt="" />
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="grid-view brows-job-lis">
                        <div class="gimage">
                            <img src="{{ asset('frontend_assets/assets/img/simple-banner.jpg') }}" class="img-responsive"
                                alt="" />
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="grid-view brows-job-lis">
                        <div class="gimage">
                            <img src="{{ asset('frontend_assets/assets/img/simple-banner.jpg') }}" class="img-responsive"
                                alt="" />
                        </div>
                    </div>
                </div>
            </div>
            <!--/.Browse Job In Grid-->
        </div>
    </section>
    <!-- ========== Begin: Brows job Category End ===============  -->
@endsection
