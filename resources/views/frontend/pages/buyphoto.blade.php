@extends('frontend.masterTemp')
@section('fmenuname')
    BUY PHOTO
@endsection
@section('front-main-content')
    <div id="content" class="no-bottom no-top">

        <section id="subheader" data-speed="8" data-type="background">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1>BUY photo</h1>
                        <ul class="crumb">
                            <li><a href="index.html">Home</a></li>
                            <li class="sep">/</li>
                            <li>BUY photo</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>


        <div id="content">
            <div class="container">
                <div class="row">
                    <div class="col-md-9">
                        <ul class="products row">
                            @foreach ($forsale as $photo)
                                <li class="col-xl-3 col-lg-4 col-md-6 product">
                                    <div class="p-inner">
                                        <div class="p-images">
                                            <a href="{{ route('buyPhotoDetails', $photo->id) }}">
                                                <img src="{{ asset('galleryImage/' . $photo->images) }}"
                                                    class="pi-1 img-responsive" alt="{{ $photo->images }}">
                                            </a>
                                        </div>
                                        <a href="{{ route('buyPhotoDetails', $photo->id) }}">
                                            <h4>{{ $photo->title }}</h4>
                                        </a>
                                        <div class="price">${{ $photo->price }}</div>
                                        <a href="{{ route('add.to.cart', $photo->id) }}" role="button"
                                            class="btn btn-line">Add To
                                            Cart</a>
                                    </div>
                                </li>
                            @endforeach

                        </ul>

                        <div class="text-center">
                            <ul class="pagination">
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
