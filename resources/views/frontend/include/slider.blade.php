@php
$allslider = \App\Models\Slider::where('type', 1)->get();
@endphp

<style>
    .slide {
        width: 100%;
        height: 100%;
    }

    @media screen and (max-width: 900px) {
        .slide {
            height: 80vh;
        }

        .myclass {
            height: 326px !important;
        }

        .tp-fullwidth-forcer {
            height: 295px !important;
        }
    }

    @media screen and (max-width: 700px) {
        .slide {
            height: 70vh;
        }

        .myclass {
            height: 326px !important;
        }

        .tp-fullwidth-forcer {
            height: 295px !important;
        }
    }

    @media screen and (max-width: 600px) {
        .slide {
            height: 60vh;
        }

        .myclass {
            height: 326px !important;
        }

        .tp-fullwidth-forcer {
            height: 295px !important;
        }
    }

    @media screen and (max-width: 500px) {
        .slide {
            height: 50vh;
        }

        .myclass {
            height: 326px !important;
        }

        .tp-fullwidth-forcer {
            height: 295px !important;
        }
    }

    @media screen and (max-width: 400px) {
        .slide {
            height: 40vh;
        }

        .myclass {
            height: 326px !important;
        }

        .tp-fullwidth-forcer {
            height: 295px !important;
        }
    }

    @media screen and (max-width: 300px) {
        .slide {
            height: 30vh;
        }

        .myclass {
            height: 326px !important;
        }

        .tp-fullwidth-forcer {
            height: 295px !important;
        }
    }

</style>

<div class="rev_slider_wrapper fullscreen-container myclass">
    <div id="slider10" class="rev_slider fullscreenbanner dark-wrapper " data-version="5.4.7">
        <ul>
            @foreach ($allslider as $eachslider)
                <li data-transition="fade" data-thumb="{{ asset('./slider/' . $eachslider->image) }}">
                    <div class="slide">
                        <img class="slide" src="{{ asset('./slider/' . $eachslider->image) }}"
                            alt="{{ $eachslider->image }}" />
                    </div>
                </li>
            @endforeach
        </ul>
        <div class="tp-bannertimer tp-bottom "></div>
    </div>
    <!-- /.rev_slider -->

</div>
