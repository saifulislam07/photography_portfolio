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
                            <li><a href="index.html">Go</a></li>
                            <li class="sep">/</li>
                            <li>
                                @if (Auth::check())
                                    <a class="btn btn-line" href="{{ route('dashboard') }}"> <i class="fa fa-user"></i>
                                        {{ Auth::user()->name }}</a>
                                @else
                                    <a class="btn btn-line" href="/client-area"> <i class="fa fa-user"></i>
                                        Login</a>
                                @endif
                            </li>
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

                            @forelse ($forsale as $photo)
                                <li class="col-xl-3 col-lg-4 col-md-6 product ">
                                    <div class="p-inner h-100">
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
                            @empty

                                <div class="card" style="border: 1px solid orange">
                                    <div class="card-body text-center">
                                        <h1>No image yet for sale to this <strong class="text-warning">{{ $category_name}}</strong> category</h1>
                                        <h1>Contact me for image request</h1>
                                        <a href="/contact-me" role="button" class="btn btn-line mt-2">Click here</a>
                                    </div>
                                </div>
                            @endforelse


                        </ul>

                        <div class="text-center pb-3">
                            {{ $forsale->links() }}
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
                                <li><a href="{{ route('image-sorting', ['id' => 0, 'title' => 'All Images']) }}"
                                        style="border: 1px solid orange">All Images</a></li>
                                @foreach ($categorys as $category)
                                    <li>
                                        <a href="{{ route('image-sorting', ['id' => $category->id, 'title' => $category->title]) }}"
                                            style="border: 1px solid orange">{{ $category->title }}</a>
                                    </li>
                                @endforeach
                            </ul>


                          
                        </div>
                    </div>

                </div>
            </div>
        </div>
    @endsection
