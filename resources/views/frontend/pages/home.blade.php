@extends('frontend.masterTemp')
@section('fmenuname')
    HOME
@endsection
@section('front-main-content')
    @include('frontend.include.slider')
    <div id="content" class="no-bottom no-top">


        <div id="wrapper">
            <section id="section-about-us-2" class="side-bg no-padding">
                <div class="row mt-4 pb-4">
                    <div class="col-lg-3 col-md-6 offset-lg-2">
                        <!-- team member -->
                        <div class="de-team-list">
                            <div class="team-pic">
                                <img style="width: 467px" src="{{ asset('aboutmes/' . $aboutme->homeimage) }}"
                                    alt="{{ $aboutme->homeimage }}" class="img-responsive img-fluid wow fadeInUp">
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
                                        <img style="width: 450px" src="{{ asset('aboutmes/' . $aboutme->homeimage) }}"
                                            alt="{{ $aboutme->homeimage }}" class="img-responsive img-fluid wow fadeInUp">
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
            {{-- <section id="section-text " style="padding-bottom: 5px!important">
                <div class="container">


                    <div class="row">
                        <div class="col-md-12">
                            <div class="de_large-portfolio no-bottom">
                                <div class="d_inner">
                                    @php

                                        $name_slice = explode(' ', $aboutme->your_name);
                                        $fade_classes = ['fadeInUp', 'fadeInRight', 'fadeInUp']; // Add more classes as needed
                                        $delay = 0.9; // Initial delay value
                                    @endphp

                                    <h2 class="ultra-big">
                                        @foreach ($name_slice as $namePart)
                                            @php
                                                $fade_class = $fade_classes[array_rand($fade_classes)]; // Randomly select a fade class
                                            @endphp
                                            <span class="wow {{ $fade_class }}" style="color: orange"
                                                data-wow-delay="{{ $delay }}s">{{ $namePart }}</span> <br>
                                            @php
                                                $delay += 0.9; // Increment the delay for the next element
                                            @endphp
                                        @endforeach
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
            </section> --}}


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
            @include('frontend.include.clientComments');

        </div>
    </div>
@endsection
