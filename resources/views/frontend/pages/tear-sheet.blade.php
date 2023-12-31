@extends('frontend.masterTemp')
@section('fmenuname')
    Publication
@endsection
@section('front-main-content')
    <div class="content-wrapper">
        <div id="wrapper">
            <section id="subheader" data-speed="8" data-type="background">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1>My Publications</h1>
                            <ul class="crumb">
                                <li><a href="index.html">Home</a></li>
                                <li class="sep">/</li>
                                <li>Publications</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
            <div id="content">
                <div class="container">
                    <div class="row g-2">
                        @foreach ($tearSheet as $tear)
                            <div class="col-lg-3 col-md-6">
                                <div class="de-post-poster">
                                    <a class="d-overlay" target="_blank" href="{{ $tear->url }}">
                                    </a>
                                    <div class="d-image"
                                        style="background-image: url('{{ asset('/TearSheet/' . $tear->image) }}');"></div>
                                </div>
                            </div>
                        @endforeach

                        <div class="spacer-single"></div>

                        <ul class="pagination m-auto">
                            <li><a href="#">Prev</a></li>
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li><a href="#">Next</a></li>
                        </ul>

                    </div>

                </div>
            </div>

        </div>
    </div>
@endsection
