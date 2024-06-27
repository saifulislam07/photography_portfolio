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
                                <li><a href="/">Home</a></li>
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
                        @foreach ($mypublication as $pub)
                            <div class="col-lg-4 col-md-6">
                                <div class="de-post-poster">
                                    <a class="d-overlay" target="_blank" href="{{ $pub->url }}">
                                        <div class="d-content">
                                            <span class="d-tag text-dark">{{ $pub->title }}</span>
                                            {{-- <h3>5 Things That Take a Room from Good to Great</h3> --}}
                                            <br>
                                            <span class="d-date">{{ $pub->created_at }}</span>
                                        </div>
                                    </a>
                                    <div class="d-image"
                                        style="background-image: url('{{ asset('/publication/' . $pub->image) }}');"></div>
                                </div>
                            </div>
                        @endforeach

                        <div class="spacer-single"></div>


                        <div class="text-center pb-3">
                            {{ $mypublication->links() }}
                        </div>

                    </div>

                </div>
            </div>

        </div>
    </div>
@endsection
