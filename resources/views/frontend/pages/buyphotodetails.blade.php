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
                    <div class="col-md-9">
                        <div class="col-md-9">
                            <div class="row p-single">
                                <div class="col-md-6">
                                    <div class="p-carousel owl-carousel owl-theme">
                                        <a href="{{ route('buyPhotoDetails', $forsale->id) }}">
                                            <img src="{{ asset('galleryImage/' . $forsale->images) }}" class="img-fluid"
                                                alt="{{ $forsale->images }}">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="p-desc">
                                        <h3>{{ $forsale->title }}</h3>

                                        <div class="price">$420</div>
                                        <p>{{ $forsale->details }}</p>

                                        <h6 class="text-light  mb10">Quantity</h6>
                                        <span class="f-input-number-decrement">–</span><input class="f-input-number"
                                            type="text" value="1" min="0" max="10"><span
                                            class="f-input-number-increment">+</span>
                                        <div class="spacer-single"></div>
                                        <a href="#" class="btn btn-line">Add To Cart</a>
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
                                                <p>Consequat occaecat ullamco amet non eiusmod nostrud dolore irure
                                                    incididunt est duis anim sunt officia. Fugiat velit proident aliquip
                                                    nisi incididunt nostrud exercitation proident est nisi. Irure magna elit
                                                    commodo anim ex veniam culpa eiusmod id nostrud sit cupidatat in veniam
                                                    ad. Eiusmod consequat eu adipisicing minim anim aliquip cupidatat culpa
                                                    excepteur quis. Occaecat sit eu exercitation irure Lorem incididunt
                                                    nostrud.</p>
                                            </div>
                                            <div class="tab-pane fade" id="nav-profile" role="tabpanel"
                                                aria-labelledby="nav-profile-tab">
                                                <p>Ad pariatur nostrud pariatur exercitation ipsum ipsum culpa mollit
                                                    commodo mollit ex. Aute sunt incididunt amet commodo est sint nisi
                                                    deserunt pariatur do. Aliquip ex eiusmod voluptate exercitation cillum
                                                    id incididunt elit sunt. Qui minim sit magna Lorem id et dolore velit
                                                    Lorem amet exercitation duis deserunt. Anim id labore elit adipisicing
                                                    ut in id occaecat pariatur ut ullamco ea tempor duis.</p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div id="sidebar" class="col-md-3">
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
                    </div>

                </div>
            </div>
        </div>
    @endsection
