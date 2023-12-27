@extends('frontend.masterTemp')
@section('fmenuname')
    About
@endsection

@section('front-main-content')
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
                                    <img src="{{ URL::to('/frontend_assets') }}/images/team/team_pic_2.jpg"
                                        class="img-responsive" alt="" />
                                </div>
                                <div class="team-desc">
                                    <h3>Michael Dennis</h3>
                                    <p class="lead">Creative Director</p>
                                    <div class="small-border"></div>
                                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                        fugiat
                                        nulla pariatur.</p>

                                    <div class="social">
                                        <a href="#"><i class="fa fa-facebook fa-lg"></i></a>
                                        <a href="#"><i class="fa fa-twitter fa-lg"></i></a>
                                        <a href="#"><i class="fa fa-google-plus fa-lg"></i></a>
                                        <a href="#"><i class="fa fa-skype fa-lg"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- team close -->
                        </div>

                        <div class="col-lg-6 col-md-6 ">
                            <!-- team member -->


                            <div class="team-desc">

                                <h2>Award Winning Interior Design</h2>

                                <p class="intro">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                    eiusmod tempor incididunt
                                    ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                    exercitation
                                    ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua.
                                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                                ex ea
                                commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                cillum
                                dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,
                                sunt in
                                culpa qui officia deserunt mollit anim id est laborum.

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
                    <a href="contact.html" class="btn btn-line black btn-big">Talk With Us</a>
                </section>
                <!-- logo carousel section close -->



            </div>
        </div>
    @endsection
