@extends('frontend.masterTemp')
@section('fmenuname')
    HOME
@endsection
@section('front-main-content')
    @include('frontend.include.slider')
    <div id="content" class="no-bottom no-top">


        <div id="wrapper">
            <section id="section-text " style="padding-bottom: 5px!important">
                <div class="container">


                    <div class="row">
                        <div class="col-md-12">
                            <div class="de_large-portfolio no-bottom">
                                <div class="d_inner">
                                    <h2 class="ultra-big wow fadeInUp" data-wow-delay=".1s">{{ $aboutme->your_name }}
                                    </h2>

                                    <div class="d_image jarallax">

                                        <img style="width: 467px" src="{{ asset('aboutmes/' . $aboutme->homeimage) }}"
                                            alt="{{ $aboutme->homeimage }}" class="img-fluid wow fadeInUp">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="spacer-triple"></div>

                    <div class="row">
                        <div class="col-md-8 offset-md-2">
                            <div class="text-center">
                                <h2 class="wow fadeInUp">About Me</h2>
                                <div class="separator" style="background-size: cover;"><span><i
                                            class="fa fa-circle"></i></span></div>
                                <p class="wow fadeInUp text-white">{!! $aboutme->details !!}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <hr>
            <section class="no-top no-bottom  sm-mt0">
                <div class="container">
                    <div class="text-center">
                        <h2 class="wow fadeInRight ">Latest Photos</h2>
                        <div class="separator " style="background-size: cover;"><span><i class="fa fa-circle"></i></span>
                        </div>
                    </div>
                </div>
                <div class="grid" data-col="4" data-gridspace="10" data-ratio="466/700">

                    <div class="grid-sizer"></div>
                    @foreach ($recentimages as $recent)
                        <div class="grid-item residential">
                            <div class="item">
                                <div class="picframe">
                                    <img src="{{ asset('/galleryImage/' . $recent->images) }}" alt="" />
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </section>

            <!-- section close -->


            <!-- section begin -->
            <section id="view-all-projects" class="call-to-action bg-color text-center" data-speed="5"
                data-type="background" aria-label="view-all-projects">
                <a href="{{ route('mygallery') }}" class="btn btn-line black btn-big">View more Photos</a>
            </section>
            <!-- logo carousel section close -->


            <!-- section begin -->
            <section id="section-testimonial" class="text-light">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 offset-md-3 text-center wow fadeInUp">
                            <h1>Happy Clients Says</h1>
                            <div class="separator"><span><i class="fa fa-circle"></i></span></div>
                            <div class="spacer-single"></div>
                        </div>
                    </div>
                    <div id="testimonial-carousel" class="owl-carousel owl-theme de_carousel wow fadeInUp"
                        data-wow-delay=".3s">

                        <div class="item">
                            <div class="de_testi">
                                <blockquote>
                                    <p>I'm always impressed with the services. Lorem ipsum dolor sit amet, consectetur
                                        adipisicing
                                        elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
                                        ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
                                    <div class="de_testi_by">
                                        John, Customer
                                    </div>
                                </blockquote>

                            </div>
                        </div>

                        <div class="item">
                            <div class="de_testi">
                                <blockquote>
                                    <p>I have very much enjoyed with your services. Lorem ipsum dolor sit amet,
                                        consectetur
                                        adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                                        aliqua.
                                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                                        aliquip.</p>
                                    <div class="de_testi_by">
                                        Michael, Customer
                                    </div>
                                </blockquote>
                            </div>
                        </div>

                        <div class="item">
                            <div class="de_testi">
                                <blockquote>
                                    <p>I totally recommend your services. Lorem ipsum dolor sit amet, consectetur
                                        adipisicing
                                        elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
                                        ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
                                    <div class="de_testi_by">
                                        Patrick, Customer
                                    </div>
                                </blockquote>
                            </div>
                        </div>

                        <div class="item">
                            <div class="de_testi">
                                <blockquote>
                                    <p>I have very much enjoyed with your services. Lorem ipsum dolor sit amet,
                                        consectetur
                                        adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                                        aliqua.
                                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                                        aliquip.</p>
                                    <div class="de_testi_by">
                                        James, Customer
                                    </div>
                                </blockquote>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </div>
    </div>
@endsection
