@extends('frontend.masterTemp')
@section('fmenuname')
    Photo story
@endsection
@section('front-main-content')
    <style>
        /* Media Queries */
        @media (max-width: 768px) {
            .post-text {
                flex-direction: column;
                align-items: flex-start;
            }

            .post-text p {
                margin-top: 10px;
            }

            .btn-more {
                padding: 7px 15px;
            }
        }

        @media (max-width: 480px) {
            .post-text h3 {
                font-size: 1.2rem;
            }

            .post-text p {
                margin-top: 8px;
            }

            .btn-more {
                padding: 8px 20px;
                font-size: 0.9rem;
            }
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
                        <h1>Photo Story</h1>
                        <ul class="crumb">
                            <li><a href="#">Home</a></li>
                            <li class="sep">/</li>
                            <li>Photo story</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <div id="content" class="paddingClass">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <ul class="blog-list">


                            @foreach ($lastStory as $story)
                                <li>
                                    <div class="post-content">
                                        <div class="post-image">
                                            <img src="{{ asset('storycover/' . $story->image) }}" alt="" />
                                        </div>

                                        @php
                                            $createdAt = $story->created_at;
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

                                        <div class="post-text d-flex justify-content-between ">
                                            <h3>
                                                <a href="#">{{ $story->title }}</a>
                                            </h3>
                                            <p style="margin-top: 15px">
                                                <a href="{{ route('storyDetails', $story->id) }}" class="btn-more">Read
                                                    More</a>
                                            </p>
                                        </div>



                                    </div>
                                    <div class="line-clamp-2">
                                        <p class="">
                                            {!! $story->details !!}
                                        </p>
                                    </div>
                                </li>
                            @endforeach

                        </ul>

                        <div class="text-center pb-3">
                            {{ $lastStory->links() }}
                        </div>
                    </div>

                    {{-- <div id="sidebar" class="col-md-4" style="margin-top: 10px">
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
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
@endsection
