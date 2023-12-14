@extends('frontend.masterTemp')
@section('fmenuname')
    Porffolio Link
@endsection
@section('front-main-content')
    <style>
        .myclass {
            background: rgb(2, 0, 36);
            background: linear-gradient(90deg, rgba(2, 0, 36, 1) 17%, rgba(46, 21, 106, 1) 100%);
            color: white;
        }

    </style>
    <div class="content-wrapper">
        <div class="space20"></div>
        <div class="space20"></div>
        <div class="space20"></div>
        <div class="wrapper gray-wrapper">
            <div class="container inner">
                <!--<div class="col-md-12">-->
                    <div class="col-md-12 text-center col-sm-12">
                        <img style="margin: 0 auto" width="100%" src="{{ asset('./aboutmes/' . $aboutme->coverimage) }}" alt="">
                    </div>
                <!--</div>-->
                <br>
                <h5 class=" mb-40 text-center" style="color: rgb(22, 19, 209)">{{ $aboutme->title }} <br>

                    <b style="color: red">Others portfolio links</b>
                </h5>
                <div class="row counter">
                    @foreach ($allmedialink as $each)
                        <div class="col-md-3 mb-5">
                            <a href="{{ $each->url }}" target="_blank">
                                <div class="box bg-white shadow myclass">
                                    <div class="d-flex flex-row justify-content-center">
                                        <div>
                                            <p>{{ $each->title }}</p>
                                        </div>
                                    </div>
                                </div>
                                <!--/.box -->
                            </a>
                        </div>
                    @endforeach

                    <!--/column -->

                    <!--/column -->
                </div>
                <!--/.row -->
            </div>
            <!-- /.container -->
        </div>
    </div>
@endsection
