@extends('frontend.masterTemp')
@section('fmenuname')
    Photo story details
@endsection
@section('front-main-content')
    <style>
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
            border-radius: 50%;
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
    </style>



    <div id="content" class="no-bottom no-top">

        <section id="subheader" data-speed="8" data-type="background">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1>Photo Story details</h1>
                        <ul class="crumb">
                            <li><a href="#">Home</a></li>
                            <li class="sep">/</li>
                            <li>Photo story details</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <div id="content" class="paddingClass">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="blog-read">
                            <div class="post-content">
                                <div class="post-image">
                                    <img src="{{ asset('storycover/' . $lastStory->image) }}" alt="" />
                                </div>

                                @php
                                    $related_stories = \App\Models\Story::where('category_id', $lastStory->category_id)
                                        ->where('id', '!=', $lastStory->id)
                                        ->get();

                                    $createdAt = $lastStory->created_at;
                                    $day = \Carbon\Carbon::parse($createdAt)->format('d');
                                    $month = \Carbon\Carbon::parse($createdAt)->format('M');
                                    $year = \Carbon\Carbon::parse($createdAt)->format('Y');
                                @endphp

                                <div class="date-box">
                                    <div class="day">{{ $day }}</div>
                                    <div class="month">{{ $month }}</div>
                                    <div class="year" style=" border-bottom: 1px solid orange ">
                                        {{ $year }}</div>
                                </div>

                                <div class="post-text">
                                    <h3><a href="#">{{ $lastStory->title }}</a>
                                        <hr>
                                    </h3>

                                    <p>
                                        {!! $lastStory->details !!}
                                    </p>

                                </div>

                                @php
                                    $shareButtonss = ShareWidget();
                                @endphp




                            </div>

                        </div>
                        <div class="card">

                            <div class="card-body social-icons-inline " style="text-align: center;">
                                Social Share: &nbsp; {!! $shareButtonss !!}
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="widget widget_tags mt-5">

                            <div class="card mb-4" style="border: 1px solid orange; background: orange">
                                <div class="card-body text-center">
                                    <h1>Related story
                                    </h1>
                                </div>
                            </div>

                            <div class="row">
                                <div id="testimonial-carousel-4-cols" class="owl-carousel owl-theme wow fadeInUp">
                                    @forelse ($related_stories as $related)
                                        <div class="col-md-12" style="border: 1px solid orange; height: 240px">
                                            <div class="p-1">

                                                <img src="{{ asset('storycover/' . $related->image) }}" alt="" />
                                            </div>
                                            <div class="text-center" style="margin-bottom: 2px;">
                                                {{ $related->title }}
                                            </div>
                                        </div>

                                    @empty
                                        <div class="card" style="border: 1px solid orange">
                                            <div class="card-body text-center">
                                                <h1>No story for this category
                                                </h1>
                                            </div>
                                        </div>
                                    @endforelse

                                </div>
                            </div>



                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
