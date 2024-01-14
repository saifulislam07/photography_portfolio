@extends('frontend.masterTemp')
@section('fmenuname')
    Photo story details
@endsection
@section('front-main-content')

<style>
   .social-icons-inline {
        display: flex;
        align-items: center; /* Align items vertically in the center */
    }

    .social-icons-inline ul {
        list-style: none; /* Remove default list styles */
        margin: 0; /* Remove default margin */
        padding: 0; /* Remove default padding */
        display: flex;
    }

    .social-icons-inline ul li {
        margin-right: 10px; /* Adjust spacing between icons */
    }

    .social-icons-inline ul li a {
        display: block;
        padding: 5px;
        text-decoration: none;
        color: white; /* Default text color */
        background-color: transparent; /* Default background color */
        border-radius: 50%; /* 50% border-radius for full round shape */
        transition: background-color 0.3s, color 0.3s; /* Smooth transition effect */
    }

    .social-icons-inline ul li a:hover {
        background-color: orange; /* Hover background color */
        color: black; /* Hover text color */
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

        <div id="content">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="blog-read">
                            <div class="post-content">
                                <div class="post-image">
                                    <img src="{{ asset('storycover/' . $lastStory->image) }}" alt="" />
                                </div>

                                @php
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

                    <div id="sidebar" class="col-md-4">
                        <div class="widget widget-text">
                            <img class="mb-3" width="300px" src="{{ asset('aboutmes/' . $aboutme->storyimage) }}"
                                alt="">
                            <h4>About Me</h4>
                            <div class="small-border"></div>
                            {!! Str::words($aboutme->details, 100, '......') !!}
                            <br>
                            @if (str_word_count($aboutme->details) > 100)
                                <a class="btn btn-warning btn-sm mt-2" href="{{ route('aboutsme') }}">Read
                                    More</a>
                            @endif

                        </div>
                        <div class="widget widget_tags mt-5">
                            <h4>Tags</h4>
                            <div class="small-border"></div>
                            <ul>
                                @php
                                    $tags = $lastStory->tages;
                                    $alltags = explode(' ', $tags);
                                @endphp

                                @foreach ($alltags as $key => $eachtage)
                                    <li><a href="{{ $eachtage }}">{{ $eachtage }}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
