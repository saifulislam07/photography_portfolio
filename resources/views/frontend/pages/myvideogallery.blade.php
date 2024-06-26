@extends('frontend.masterTemp')
@section('fmenuname')
    Video Gallery
@endsection
@section('front-main-content')
    <div id="content" class="no-bottom no-top">
        <div id="wrapper">
            <section id="subheader" data-speed="8" data-type="background">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1>Projects Video</h1>
                            <ul class="crumb">
                                <li><a href="index.html">Home</a></li>
                                <li class="sep">/</li>
                                <li>Projects Video</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
            <!-- subheader close -->

            <!-- content begin -->
            <div id="content" class="paddingClass">
                <div class="container">

                    <div class="spacer-single"></div>

                    <!-- portfolio filter begin -->

                    <!-- portfolio filter close -->

                    <div id="gallery" class="row gallery full-gallery de-gallery pf_4_cols hover-1 wow fadeInUp"
                        data-wow-delay=".3s">
                        @foreach ($myvideos as $each)
                            <div class="col-md-3 col-sm-6 col-xs-12 item mb30 ">
                                <iframe width="360" height="204" src="{{ $each->link }}" frameborder="0"
                                    allowfullscreen></iframe>
                            </div>
                        @endforeach
                        <!-- gallery item -->
                    </div>
                    <div class="text-center pb-3">
                        {{ $myvideos->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('extra_js')
@endsection
