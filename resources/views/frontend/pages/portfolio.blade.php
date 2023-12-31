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

            <div id="content" class="no-top no-bottom mt70 sm-mt0">
                <section data-bgcolor="#202124">
                    <div class="text-center">
                        <h1>Click The Link For Details</h1>
                    </div>
                </section>

                <section>
                    <div class="container">
                        <div class="row">
                            @foreach ($medialink as $media)
                                <div class="col-md-3 mb-3">
                                    <a href="{{ $media->url }}" target="_blank" rel="noopener noreferrer">
                                        <div class="card">
                                            <div class="card-body" style="border: 1px solid orange">
                                                <div class="box-icon">
                                                    <span class="icon"><i class="id-color icon-recycle"></i></span>
                                                    <div class="text pt-3">
                                                        <h3 class="style-1">{{ $media->title }}</h3>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </section>
            </div>
        </div>

    </div>
@endsection
