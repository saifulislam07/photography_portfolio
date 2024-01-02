@extends('frontend.masterTemp')
@section('fmenuname')
    About
@endsection

@section('front-main-content')
    <style>
        div.transbox {

            background-color: #ffffff;
            border: 1px solid rgb(255, 217, 0);
            opacity: 0.1;
            filter: grayscale(100%);
        }

        div.transbox p {
            margin: 5%;
            font-weight: bold;
            color: #ffa600;
        }
    </style>
    <div id="content" class="no-bottom no-top">
        <div id="wrapper">
            <section id="subheader" data-speed="8" data-type="background">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1>Profile</h1>
                            <ul class="crumb">
                                <li><a href="index.html">Home</a></li>
                                <li class="sep">/</li>
                                <li>Profile</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
            <!-- subheader close -->

            <!-- content begin -->
            <div id="content" class="no-top no-bottom">
                <section id="section-about-us-2" class="side-bg no-padding">
                    <div class="row mt-4 pb-4">
                        <div class="col-lg-3 col-md-6 offset-lg-2">
                            <!-- team member -->
                            <div class="de-team-list">
                                <div class="team-pic">
                                    <img style="width: 467px" src="{{ asset('aboutmes/' . $aboutme->aboutppageimage) }}"
                                        alt="{{ $aboutme->aboutppageimage }}" class="img-responsive img-fluid wow fadeInUp">
                                </div>
                                <div class="team-desc text-center">
                                    <h3>{{ $aboutme->your_name }}</h3>
                                    <p class="lead">{{ $aboutme->title }}</p>


                                    <div class="social text-center">

                                        <div class="social-icons">
                                            <a target="_blank" href="{{ $socialMedia->facebook }}"><i
                                                    class="fa fa-facebook fa-lg"></i></a>
                                            <a target="_blank" href="{{ $socialMedia->twitter }}"><i
                                                    class="fa fa-twitter fa-lg"></i></a>
                                            <a target="_blank" href="{{ $socialMedia->instagram }}"><i
                                                    class="fa fa-instagram fa-lg"></i></a>
                                            <a target="_blank" href="{{ $socialMedia->linkedin }}"><i
                                                    class="fa fa-linkedin fa-lg"></i></a>
                                        </div>

                                        <div class="transbox mt-2">
                                            <img style="width: 450px"
                                                src="{{ asset('aboutmes/' . $aboutme->aboutppageimage) }}"
                                                alt="{{ $aboutme->aboutppageimage }}"
                                                class="img-responsive img-fluid wow fadeInUp">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 ">
                            <!-- team member -->
                            <div class="team-desc">
                                <h2>{{ $aboutme->title }}</h2>
                                <p class="intro">
                                    {!! $aboutme->details !!}
                                </p>
                            </div>
                            <!-- team close -->
                        </div>
                    </div>
                </section>



                <section id="section-testimonial" class="text-light">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 offset-md-3 text-center wow fadeInUp">
                                <h1>Clients</h1>
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

                <!-- section begin -->
                <section id="view-all-projects" class="call-to-action bg-color dark text-center" data-speed="5"
                    data-type="background" aria-label="view-all-projects">
                    <a href="{{ route('contacts') }}" class="btn btn-line black btn-big">Talk With Me</a>
                </section>
                <!-- logo carousel section close -->



            </div>
        </div>
    @endsection
