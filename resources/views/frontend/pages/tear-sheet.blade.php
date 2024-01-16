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

                        <div class="text-center pb-3">
                            {{ $tearSheet->links() }}
                        </div>

                    </div>

                </div>
            </div>

        </div>
    </div>
@endsection
