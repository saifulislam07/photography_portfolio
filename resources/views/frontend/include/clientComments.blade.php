@php
    $clientMessage = App\Models\ClientMessage::where('status', 'Active')->get();

@endphp
<section id="section-testimonial" class="text-light">
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3 text-center wow fadeInUp">
                <h1>Happy Clients Says</h1>
                <div class="separator"><span><i class="fa fa-circle"></i></span></div>
                <div class="spacer-single"></div>
            </div>
        </div>
        <div id="testimonial-carousel" class="owl-carousel owl-theme de_carousel wow fadeInUp" data-wow-delay=".3s">
            @foreach ($clientMessage as $each)
                <div class="item">
                    <div class="de_testi">
                        <blockquote>
                            <p>{{ $each->message }}</p>
                            <div class="de_testi_by">
                                {{ $each->client_name }}
                            </div>
                        </blockquote>

                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
