        <!-- revolution slider begin -->
        <section id="section-slider" class="fullwidthbanner-container" aria-label="section-slider">
            @php
                $slidersImages = DB::table('sliders')
                    ->select('*')
                    ->where('type', 1)
                    ->get();
            @endphp
            <div id="revolution-slider">
                <ul>

                    @foreach ($slidersImages as $slid)
                        <li data-transition="fade" data-slotamount="10" data-masterspeed="200" data-thumb="">
                            <!--  BACKGROUND IMAGE -->
                            <img src="{{ asset('/slider/' . $slid->image) }}" alt="" />
                            <div class="tp-caption big-white sft" data-x="center" data-y="150" data-speed="1600"
                                data-start="400" data-easing="easeInOutExpo" data-endspeed="450">

                            </div>

                            <div class="tp-caption ultra-big-white customin customout start" data-x="center"
                                data-y="center"
                                data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:2;scaleY:2;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.85;scaleY:0.85;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                data-speed="1600" data-start="400" data-easing="easeInOutExpo" data-endspeed="400">
                                {{ $slid->title ?? '' }}
                            </div>

                            <div class="tp-caption sfb" data-x="center" data-y="335" data-speed="1000"
                                data-start="800" data-easing="easeInOutExpo">
                                <a href="{{ route('mygallery') }}" class="btn-slider">My Gallery
                                </a>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </section>
        <!-- revolution slider close -->
