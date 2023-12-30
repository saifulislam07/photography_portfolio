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
                                <ul id="filters" class="wow fadeInUp" data-wow-delay="0s">
                                    <li><a href="#" data-filter="*" class="selected">All Projects</a></li>
                                    @foreach ($allcategorycount as $each_category)
                                        @php
                                            $string = str_replace(' ', '', $each_category->catname);
                                        @endphp
                                        <li><a href="#"
                                                data-filter=".{{ $string }}">{{ $each_category->catname }}
                                                ({{ $each_category->total }})
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
                    <a href="contact.html" class="btn btn-line black btn-big">Get Quotation</a>
                </section>
                <!-- logo carousel section close -->



            </div>
        </div>
    </div>
@endsection
