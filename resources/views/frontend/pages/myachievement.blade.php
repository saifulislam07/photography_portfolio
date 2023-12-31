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
                                <li><a href="index.html">Home</a></li>
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
                                <div class="col-md-4 wow fadeInUp pb-3" data-wow-delay=".25s">
                                    <div class="box-icon">
                                        <span class="icon wow fadeIn" data-wow-delay=".75s">
                                            <i class="id-color icon-trophy"></i>
                                        </span>
                                        <div class="text ">
                                            <h3 class="id-color">{{ $national->title }}</h3>
                                            <p>{{ $national->details }}</p>
                                            {{-- @if ($national->url)
                                                <h4 class="id-color"> <a class="btn btn-outline-warning btn-xs"
                                                        href="http://" target="_blank" rel="noopener noreferrer">CLICK HERE
                                                        FOR
                                                        DETAILS</a> </h4>
                                            @endif --}}
                                        </div>
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
                            @foreach ($internationalaward as $national)
                                <div class="col-md-4 wow fadeInUp pb-3" data-wow-delay=".25s">
                                    <div class="box-icon">
                                        <span class="icon wow fadeIn" data-wow-delay=".75s"><i
                                                class="id-color icon-trophy"></i></span>
                                        <div class="text ">
                                            <h3 class="id-color">{{ $national->title }}</h3>
                                            <p>{{ $national->details }}</p>
                                            {{-- @if ($national->url)
                                                <h4 class="id-color"> <a class="btn btn-outline-warning btn-xs"
                                                        href="http://" target="_blank" rel="noopener noreferrer">CLICK HERE
                                                        FOR
                                                        DETAILS</a> </h4>
                                            @endif --}}
                                        </div>
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
