@extends('frontend.masterTemp')
@section('fmenuname')
    My Commercial
@endsection
@section('front-main-content')
    <div class="content-wrapper">
        <div id="wrapper">
            <section id="subheader" data-speed="8" data-type="background">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1> My Commercial Work</h1>
                            <ul class="crumb">
                                <li><a href="/">Home</a></li>
                                <li class="sep">/</li>
                                <li>Commercial</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
            <div id="content">
                <div class="container">
                    <div class="row">

                        @foreach ($mycommercials as $com)
                            <div class="col-md-3 mb-2">
                                <h3><span class="id-color">{{ $com->title }}</span></h3>
                                <img src="{{ asset('/commercial/' . $com->image) }}" class="img-responsive" alt="">
                                <div class="spacer-single"></div>
                                <a href="{{ route('mycommercials-details', $com->id) }}" class="btn-line btn-fullwidth">Read
                                    More</a>
                            </div>
                        @endforeach
                    </div>
                </div>



            </div>

        </div>
    </div>
@endsection
