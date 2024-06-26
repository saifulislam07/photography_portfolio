@php
    // $clientMessage = App\Models\ClientMessage::where('status', 'Active')->get();
    $bestofbest = App\Models\WebGallery::where('status', 1)->where('my_best', '1')->get();

@endphp
<section id="section-testimonial" class="text-light">
    <div class="col-md-12">
        <div class="widget widget_tags mt-5">

            <div class="card mb-4" style="border: 1px solid orange; background: rgb(173, 164, 145)">
                <div class="card-body text-center">
                    <h1>BEST OF BEST
                    </h1>
                </div>
            </div>

            <div class="row">
                <div id="testimonial-carousel-4-cols" class="owl-carousel owl-theme wow fadeInUp">
                    @forelse ($bestofbest as $related)
                        <div class="col-md-12" style="border: 1px solid rgb(48, 43, 43); ">
                            <div class="p-1">
                                <img src="{{ asset('/galleryImage/' . $related->images) }}" alt="" />

                            </div>
                            <div class="text-center line-clamp-1" style="margin-bottom: 2px;">
                                {{ $related->title }}
                            </div>
                        </div>
                    @empty
                        <div class="card" style="border: 1px solid orange">
                            <div class="card-body text-center">
                                <h1>NO BEST OF BEST IMAGES SELECTED</h1>
                            </div>
                        </div>
                    @endforelse

                </div>
            </div>
        </div>
    </div>
</section>
