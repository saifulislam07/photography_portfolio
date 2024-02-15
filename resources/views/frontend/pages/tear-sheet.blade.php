@extends('frontend.masterTemp')
@section('fmenuname')
    Tear Sheet
@endsection
@section('front-main-content')
    <div class="content-wrapper">
        <div id="wrapper">
            <section id="subheader" data-speed="8" data-type="background">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1> Tear Sheet</h1>
                            <ul class="crumb">
                                <li><a href="index.html">Home</a></li>
                                <li class="sep">/</li>
                                <li> Tear Sheet</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
            <div id="content">
                <div class="container">
                    <div class="row g-2">
                        <div class="col-md-12">


                            <div id="gallery" class="row grid_gallery gallery de-gallery wow fadeInUp"
                                data-wow-delay=".3s">
                                @foreach ($tearSheet as $tear)
                                    <!-- gallery item -->
                                    <div class="col-md-3 item ">
                                        <div class="picframe">
                                            <a href="{{ $tear->url }}" target="_blank">
                                                <span class="overlay">
                                                    <span class="pf_text">
                                                        <span class="project-name">{{ $tear->title }}</span>
                                                    </span>
                                                </span>
                                            </a>
                                            <img src="{{ asset('/TearSheet/' . $tear->image) }}"
                                                alt="{{ $tear->image }}" />
                                        </div>
                                    </div>
                                @endforeach
                            </div>

                        </div>



                        <div class="spacer-single"></div>

                        <div class="text-center pb-3">
                            {{ $tearSheet->links() }}
                        </div>

                    </div>

                </div>
            </div>

        </div>
    </div>
@endsection
