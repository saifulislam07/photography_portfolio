@extends('frontend.masterTemp')
@section('fmenuname')
    Portfolio
@endsection
@section('front-main-content')
    <div class="content-wrapper">
        <div id="wrapper">
            <section id="subheader" data-speed="8" data-type="background">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1> My Portfolio </h1>
                            <ul class="crumb">
                                <li><a href="index.html">Home</a></li>
                                <li class="sep">/</li>
                                <li>Portfolio</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>

            <div id="content" class="no-top no-bottom mt70 sm-mt0 ">
                <section data-bgcolor="#202124">
                    <div class="text-center">
                        <h1>Click The Link For Details</h1>
                    </div>
                </section>

                <section>
                    <div class="container">
                        <div class="row">
                            <div class="item pricing">
                                <div class="row">
                                    @foreach ($medialink as $media)
                                        <div class="col-md-3 mb-4">
                                            <a href="{{ $media->url }}" target="_blank" rel="noopener noreferrer"
                                                class="text-decoration-none">
                                                <div class="pricing-s1">
                                                    <div class="ribbon">Saleable</div>
                                                    <div class="top" style="min-height: 353px;">
                                                        <h2 style="padding-top: 19px;">{{ $media->title }}</h2>
                                                        <p class="price mt-1">
                                                            <img src="{{ asset('media/' . $media->image) }}"
                                                                alt="{{ $media->title }}" class="img-fluid">
                                                        </p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    @endforeach
                                </div>


                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>

    </div>
@endsection
