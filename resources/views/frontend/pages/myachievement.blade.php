@extends('frontend.masterTemp')
@section('fmenuname')
    Achievement
@endsection
@section('front-main-content')
    <div class="content-wrapper">
        <div id="wrapper">
            <section id="subheader" data-speed="8" data-type="background">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1> My Achievement </h1>
                            <ul class="crumb">
                                <li><a href="/">Home</a></li>
                                <li class="sep">/</li>
                                <li>Achievement</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
            <div id="content" class="no-top no-bottom mt70 sm-mt0">
                <section>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 text-center fadeInUp">
                                <h2>National Achievement</h2>
                            </div>
                            <hr>
                            @foreach ($nationalaward as $national)
                                <div class="col-xl-3 col-lg-4 col-md-6 product mt-2">
                                    <div class="p-inner text-center"
                                        style="background-size: cover; min-height: 250px; border: 1px solid orange">
                                        <div class="p-images" style="background-size: cover;">
                                            <img width="250px" src="{{ asset('achievements/' . $national->image) }}"
                                                alt="">
                                        </div>
                                        <div class="price" style="background-size: cover;">{{ $national->title }}</div>
                                        <a href="{{ route('showachievement', $national->id) }}" class="btn btn-line">More
                                            details</a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </section>

                <section class="de_light bg-white">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <h2>International Achievement</h2>
                            </div>
                            <hr>
                            @foreach ($internationalaward as $international)
                                <div class="col-xl-3 col-lg-4 col-md-6 product mt-2">
                                    <div class="p-inner text-center"
                                        style="background-size: cover; min-height: 250px; border: 1px solid orange">
                                        <div class="p-images" style="background-size: cover;">
                                            <img width="250px" src="{{ asset('achievements/' . $international->image) }}"
                                                alt="">
                                        </div>
                                        <div class="price" style="background-size: cover;">{{ $international->title }}
                                        </div>
                                        <a href="{{ route('showachievement', $international->id) }}"
                                            class="btn btn-line">More
                                            details</a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
@endsection
