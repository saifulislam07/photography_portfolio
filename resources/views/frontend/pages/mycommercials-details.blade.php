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
            <div id="content" class="bg-white paddingClass">
                <br>
                <div class="container">





                    @foreach ($mycommercials as $com)
                        <div class="row ">
                            <div class="col-md-4 mb-2 ">
                                <img style="border: 3px solid orange" src="{{ asset('/commercial/' . $com->image) }}"
                                    class="img-responsive" alt="">
                            </div>
                            <div class="col-md-8">
                                <h3><span class="id-color">{{ $com->title }}</span></h3>
                                <p> {!! $com->details !!}</p>
                                <div class="spacer-single"></div>
                            </div>
                        </div>
                        <hr>
                    @endforeach




                </div>



            </div>

        </div>
    </div>
@endsection
