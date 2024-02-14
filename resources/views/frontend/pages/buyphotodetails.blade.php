@extends('frontend.masterTemp')
@section('fmenuname')
    BUY PHOTO details
@endsection
@section('front-main-content')
    <div id="content" class="no-bottom no-top">

        <section id="subheader" data-speed="8" data-type="background">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1>BUY photo details</h1>
                        <ul class="crumb">
                            <li><a href="/">Home</a></li>
                            <li class="sep">/</li>
                            <li>BUY photo details</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>


        <div id="content">
            <div class="container">
                <div class="row">

                    <div class="col-md-12">
                        <div class="row p-single">
                            <div class="col-md-8">
                                <div class="p-carousel owl-carousel owl-theme">
                                    <a href="{{ route('buyPhotoDetails', $forsale->id) }}">
                                        <img src="{{ asset('galleryImage/' . $forsale->images) }}" class="img-fluid"
                                            alt="{{ $forsale->images }}">
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="p-desc">
                                    <h3>{{ $forsale->title }}</h3>

                                    <div class="price">${{ $forsale->price }}</div>
                                    {{-- <p>{{ $forsale->details }}</p> --}}

                                    <h6 class="text-light  mb10">Quantity</h6>
                                    <span class="f-input-number-decrement">–</span><input class="f-input-number"
                                        type="text" value="1" min="0" max="10"><span
                                        class="f-input-number-increment">+</span>
                                    <div class="spacer-single"></div>
                                    <a href="{{ route('add.to.cart', $forsale->id) }}" class="btn btn-line">Add To
                                        Cart</a>
                                </div>
                            </div>

                            <div class="spacer-double"></div>

                            <div class="col-md-12">
                                <div class="tab-default">
                                    <nav>
                                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                            <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab"
                                                data-bs-target="#nav-home" type="button" role="tab"
                                                aria-controls="nav-home" aria-selected="true">Description</button>
                                            <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab"
                                                data-bs-target="#nav-profile" type="button" role="tab"
                                                aria-controls="nav-profile" aria-selected="false">Additional
                                                Information</button>
                                        </div>
                                    </nav>

                                    <div class="tab-content" id="nav-tabContent">
                                        <div class="tab-pane fade show active" id="nav-home" role="tabpanel"
                                            aria-labelledby="nav-home-tab">
                                            <p>{{ $forsale->details }}</p>
                                        </div>
                                        <div class="tab-pane fade" id="nav-profile" role="tabpanel"
                                            aria-labelledby="nav-profile-tab">
                                            <p></p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>



                    {{-- <div id="sidebar" class="col-md-3">
                        <div class="widget widget_search mb-3 pb-3">
                            <input type='text' name='search' id='search' class="form-control"
                                placeholder="search photo">
                            <button id="btn-search" type='submit'></button>
                            <div class="clearfix"></div>
                        </div>

                        <div class="widget widget_category">
                            <h4 class="pb-2">Photo Category</h4>
                            <ul>
                                @foreach ($categorys as $category)
                                    <li>
                                        <a href="#" style=" border: 1px solid orange">{{ $category->title }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div> --}}

                </div>
            </div>
        </div>
    @endsection
