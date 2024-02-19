@extends('frontend.masterTemp')
@section('fmenuname')
    Clients
@endsection
@section('front-main-content')
    <div class="content-wrapper">
        <div id="wrapper">
            <section id="subheader" data-speed="8" data-type="background">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1> My Clients </h1>
                            <ul class="crumb">
                                <li><a href="index.html">Home</a></li>
                                <li class="sep">/</li>
                                <li>Clients</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
            <section id="section-partners">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center wow fadeInUp">
                            <h1>My Clients</h1>
                            <div class="separator"><span><i class="fa fa-square"></i></span></div>
                            <div class="spacer-single"></div>
                        </div>

                        @foreach ($clients as $each)
                            <div class="col-md-2 mb-4">
                                <div class="card">
                                    <div class="card-body">
                                        <img src="{{ asset('/clients/' . $each->image) }}" class="img-responsive"
                                            alt="">
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </section>
            @include('frontend.include.clientComments');
        </div>
    </div>
@endsection
