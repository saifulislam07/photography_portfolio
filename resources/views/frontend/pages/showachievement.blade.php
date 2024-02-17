@extends('frontend.masterTemp')
@section('fmenuname')
    Achievement Details
@endsection
@section('front-main-content')
    <div class="content-wrapper">
        <div id="wrapper">
            <section id="subheader" data-speed="8" data-type="background">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1> My Achievement Details</h1>
                            <ul class="crumb">
                                <li><a href="/">Home</a></li>
                                <li class="sep">/</li>
                                <li>Achievement Details</li>
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
                                <h2>Achievement Details</h2>
                            </div>
                            <hr>
                            <div id="content">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="row p-single">
                                                <div class="col-md-4">
                                                    <img src="{{ asset('achievements/' . $showachievement->image) }}"
                                                        alt="">
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="p-desc">
                                                        <h3>{{ $showachievement->title }}</h3>

                                                        <p>{!! $showachievement->details !!}</p>


                                                        <a href="{{ route('myachievement') }}" class="btn btn-line">Back</a>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>


                                    </div>
                                </div>



                            </div>
                        </div>
                    </div>
                </section>


            </div>
        </div>
    </div>
@endsection
