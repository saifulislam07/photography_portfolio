@extends('frontend.masterTemp')
@section('fmenuname')
    Gallery
@endsection
@section('front-main-content')
    <div class="content-wrapper">
        <div id="wrapper">
            <section id="subheader" data-speed="8" data-type="background">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1>Gallery</h1>
                            <ul class="crumb">
                                <li><a href="index.html">Home</a></li>
                                <li class="sep">/</li>
                                <li>Gallery</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
            <div id="content" class="no-top no-bottom">
                <!-- section begin -->
                <section id="section-portfolio" class="no-top no-bottom" aria-label="section-portfolio">
                    <div class="container">

                        <div class="spacer-single"></div>

                        <!-- portfolio filter begin -->
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <ul id="filters_new" class="wow fadeInUp" data-wow-delay="0s">
                                    <li><a href="{{ route('getImageList', 'all-images') }}" data-filter="*"
                                            class="selected">All
                                            Photos</a></li>
                                    @foreach ($allcategorycount as $each_category)
                                        @php
                                            $string = str_replace(' ', '', $each_category->catname);
                                        @endphp
                                        <li><a href="{{ route('getImageList', $each_category->catId) }}"
                                                data-filter=".{{ $string }}">
                                                {{ $each_category->catname }} ({{ $each_category->total }})
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>

                            </div>

                        </div>
                        <!-- portfolio filter close -->

                        <div id="gallery" class="row grid_gallery gallery de-gallery wow fadeInUp" data-wow-delay=".3s">


                            @foreach ($allrecentimages as $eachimage)
                                @php
                                    $imagecatid = str_replace(' ', '', $eachimage->title);
                                @endphp
                                <div class="col-md-3 item <?php echo $imagecatid; ?>">
                                    <div class="picframe">
                                        <a class="image-popup-gallery"
                                            href="{{ asset('/galleryImage/' . $eachimage->images) }}">
                                            <span class="overlay">
                                                <span class="pf_text">
                                                    <span style="font-size: 25px" aria-hidden="true"
                                                        class="icon_plus_alt2"></span>
                                                </span>
                                            </span>
                                        </a>
                                        <img src="{{ asset('/galleryImage/' . $eachimage->images) }}"
                                            alt="{{ $eachimage->images }}" />
                                    </div>

                                    @if ($eachimage->price)
                                        <div style="background: rgb(230, 227, 227)" class="mt-1">
                                            <a href="{{ route('add.to.cart', $eachimage->id) }}">
                                                <i style="font-size: 20px; color: orange" class="fa fa-fw"
                                                    aria-hidden="true" title="Copy to use cart-plus"></i>
                                            </a>
                                            <b style="color: orange; margin-right: 2px"
                                                class="float-end">{{ $eachimage->price }}$</b>
                                        </div>
                                    @else
                                        <div style="background: rgb(230, 227, 227)">
                                            <a style="color: orange; margin-left: 2px">Contact
                                                Me for price</a>
                                        </div>
                                    @endif

                                </div>
                            @endforeach
                            <!-- gallery item -->

                            <!-- close gallery item -->


                            <!-- close gallery item -->

                        </div>

                    </div>

                </section>
                <!-- section close -->


                <!-- section begin -->
                <section id="call-to-action" class="call-to-action bg-color dark text-center" data-speed="5"
                    data-type="background" aria-label="call-to-action">
                    <a href="{{ route('contacts') }}" class="btn btn-line black btn-big">Contact Me</a>
                </section>
                <!-- logo carousel section close -->

            </div>
        </div>
    </div>
@endsection
