@extends('frontend.masterTemp')
@section('fmenuname')
    Gallery
@endsection
@section('front-main-content')
    <style>
        .normal_css {
            background: orange !important;
            color: white !important
        }

        .menuActive {
            background: rgb(255, 255, 255);
            color: orange !important;
        }

        @media only screen and (max-width: 992px) {
            .container .col-md-11 {
                margin-bottom: 0px;
            }
        }



        .social-icons-inline {
            display: flex;
            align-items: center;
            /* Align items vertically in the center */
        }

        .social-icons-inline ul {
            list-style: none;
            /* Remove default list styles */
            margin: 0;
            /* Remove default margin */
            padding: 0;
            /* Remove default padding */
            display: flex;
        }

        .social-icons-inline ul li {
            margin-right: 10px;
            /* Adjust spacing between icons */
        }

        .social-icons-inline ul li a {
            display: block;
            padding: 5px;
            text-decoration: none;
            color: white;
            /* Default text color */
            background-color: transparent;
            /* Default background color */

            /* 50% border-radius for full round shape */
            transition: background-color 0.3s, color 0.3s;
            /* Smooth transition effect */
        }

        .social-icons-inline ul li a:hover {
            background-color: orange;
            /* Hover background color */
            color: black;
            /* Hover text color */
        }

        .paddingClass {
            padding-top: 0px !important;
        }

        .fa-facebook {
            color: blue;
        }

        .fa-twitter {
            color: rgb(17, 134, 212);
        }

        .fa-linkedin {
            color: rgb(7, 46, 71);
        }

        .fa-whatsapp {
            color: green;
        }
    </style>
    @php

        $current_route = Route::current()->parameters;
        $current_route_id = 0;

        if (empty($current_route)) {
            $current_route_id = 0;
        } else {
            $current_route_id = $current_route['id'];
        }
    @endphp
    <div class="content-wrapper">
        <div id="wrapper">
            <section id="subheader" data-speed="8" data-type="background">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1>Gallery</h1>
                            <ul class="crumb">
                                <li><a href="/">Home</a></li>
                                <li class="sep">/</li>
                                <li>Gallery</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
            <div id="content" class="no-top no-bottom">
                <!-- section begin -->
                <section id="section-portfolio" class="no-top no-bottom" aria-label="section-portfolio">
                    <div class="container">

                        <div class="spacer-single"></div>

                        <!-- portfolio filter begin -->
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <ul id="filters_new" class="wow fadeInUp" data-wow-delay="0s">
                                    <li><a href="{{ route('getImageList', 'all-images') }}" data-filter="*"
                                            class="selected">All Photos</a></li>
                                    @foreach ($allcategorycount as $each_category)
                                        @php
                                            $string = str_replace(' ', '', $each_category->catname);
                                        @endphp
                                        <li><a href="{{ route('getImageList', $each_category->catId) }}"
                                                data-filter=".{{ $string }}">
                                                {{ $each_category->catname }} ({{ $each_category->total }})
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>


                        <!-- portfolio filter close -->
                        <form action="{{ route('galleryImagesBySearch') }}" class="form-inline" method="POST">
                            @csrf
                            <div class="row form-row align-items-center">
                                <div class=" col-md-11">
                                    <input type="text" class="form-control mb-2" name="search_value"
                                        placeholder="search by amount, title, tag ...." value="{{ $searchValue ?? '' }}">
                                </div>
                                <div class=" col-md-1">
                                    <button type="submit" class="btn btn-warning mb-2">SEARCH</button>
                                </div>
                            </div>
                        </form>




                        <div id="gallery" class="row grid_gallery gallery de-gallery wow fadeInUp" data-wow-delay=".3s">
                            @foreach ($allrecentimages as $eachimage)
                                @php
                                    $imagecatid = str_replace(' ', '', $eachimage->title);
                                @endphp
                                <div class="col-md-3 item {{ $imagecatid }}">

                                    <div class="picframe">
                                        <a class="image-popup-gallery"
                                            href="{{ asset('/galleryImage/' . $eachimage->images) }}">
                                            <span class="overlay">
                                                <span class="pf_text">
                                                    <span style="font-size: 25px" aria-hidden="true"
                                                        class="icon_plus_alt2"></span>
                                                </span>
                                            </span>
                                        </a>
                                        <img src="{{ asset('/galleryImage/' . $eachimage->images) }}"
                                            alt="{{ $eachimage->images }}" />
                                    </div>

                                    @if ($eachimage->price)
                                        <div style="background: rgb(230, 227, 227); 
}" class="mt-1">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <a href="{{ route('add.to.cart', $eachimage->id) }}">
                                                        <i style="font-size: 20px; color: orange" class="fa fa-fw"
                                                            aria-hidden="true" title="Copy to use cart-plus"></i>
                                                    </a>
                                                </div>
                                                <div class="col-md-5" style="font-size: 13px;">
                                                    @php
                                                        $shareButtonss = ShareWidget();
                                                    @endphp

                                                    <div class="social-icons-inline" style="text-align: center;">
                                                        {!! $shareButtonss !!}
                                                    </div>
                                                </div>
                                                <div class="col-md-4" style="text-align: right;">
                                                    <b style="color: orange; margin-right:3px">{{ $eachimage->price }}$
                                                    </b>
                                                </div>
                                            </div>
                                        </div>
                                    @else
                                        <div style="background: rgb(230, 227, 227)">
                                            <a style="color: orange; margin-left: 2px">Contact Me for price</a>
                                        </div>
                                    @endif
                                </div>
                            @endforeach
                        </div>
                    </div>
                </section>
                <!-- section close -->

                <!-- section begin -->
                <section id="call-to-action" class="call-to-action bg-color dark text-center" data-speed="5"
                    data-type="background" aria-label="call-to-action">
                    <a href="{{ route('contacts') }}" class="btn btn-line black btn-big">Contact Me</a>
                </section>
                <!-- logo carousel section close -->
            </div>
        </div>
    </div>
@endsection
