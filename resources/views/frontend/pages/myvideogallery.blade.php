@extends('frontend.masterTemp')
@section('fmenuname')
    Video Gallery
@endsection
@section('front-main-content')
    <div id="content" class="no-bottom no-top">
        <div id="wrapper">
            <section id="subheader" data-speed="8" data-type="background">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1>Projects Video</h1>
                            <ul class="crumb">
                                <li><a href="index.html">Home</a></li>
                                <li class="sep">/</li>
                                <li>Projects Video</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
            <!-- subheader close -->

            <!-- content begin -->
            <div id="content">
                <div class="container">

                    <div class="spacer-single"></div>
                    <div id="gallery" class="row gallery full-gallery de-gallery pf_4_cols hover-1 wow fadeInUp"
                        data-wow-delay=".3s">
                        @foreach ($myvideos as $index => $each)
                            <div class="col-md-3 col-sm-6 col-xs-12 item mb30 ">

                                <iframe class="video-iframe" width="360" height="204" src="{{ $each->link }}"
                                    frameborder="0" allowfullscreen data-index="{{ $index }}"></iframe>
                            </div>
                        @endforeach
                    </div>
                    <div class="text-center pb-3">
                        {{ $myvideos->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('extra_js')
    <script>
        $(document).ready(function() {
            var videos = $('.video-iframe');

            videos.on('click', function() {
                var index = $(this).data('index');

                // Pause all other videos
                videos.not(':eq(' + index + ')').each(function() {
                    this.contentWindow.postMessage(
                        '{"event":"command","func":"pauseVideo","args":""}', '*');
                });
            });
        });
    </script>
@endsection
