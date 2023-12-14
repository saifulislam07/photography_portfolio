@extends('frontend.masterTemp')
@section('fmenuname')
    HOME
@endsection
@section('front-main-content')
    @include('frontend.include.slider')
    <div class="content-wrapper">
        <div class="wrapper light-wrapper">
            <div class="container inner pt-60">
                <div class="boxed">
                    <div class="bg-white shadow rounded">
                        <div class="image-block-wrapper">

                            <div class="image-block col-lg-6">

                                <div class="image-block-bg bg-image">

                                    @if ($aboutme)
                                        <img style="margin-left: 10px; margin-top: 10px" width="100%"
                                            src="{{ asset('./aboutmes/' . $aboutme->homeimage) }}" alt="">
                                    @endif

                                </div>
                            </div>
                            <!--/.image-block -->
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-lg-6 offset-lg-6">
                                        <div class="box d-flex">
                                            <div class="align-self-center">
                                                <h3 data-aos="fade-up">About Me</h3>
                                                <h5 data-aos="fade-down " style="color:rgb(24, 138, 138)">
                                                    @if ($aboutme)
                                                        {{ $aboutme->title }}
                                                    @endif
                                                </h5>
                                                <p style="text-align: justify;">
                                                    @if ($aboutme)
                                                        {!! Str::words($aboutme->details, 200, '<br> <a style="color :blue" href="/aboutsme">Read More</a>') !!}
                                                    @endif
                                                </p>
                                                <div class="card">
                                                    <div class="card-body text-center hover">
                                                        <ul class="social social-color" data-aos="fade-up"
                                                            data-aos-easing="linear" data-aos-duration="5000">
                                                            <li>
                                                                <a target="_blank"
                                                                    href="
                                                                @if (isset($socialMedia)) ) {
                                                              echo  $socialMedia->facebook; @endif
                                                                ">

                                                                    <i class="fa fa-facebook"></i></a>
                                                            </li>
                                                            <li>
                                                                <a target="_blank"
                                                                    href="
                                                               @if (isset($socialMedia)) ) {
                                                               echo $socialMedia->instagram; @endif
                                                                    ">

                                                                    <i class="fa fa-instagram"></i></a>
                                                            </li>
                                                            <li>
                                                                <a target="_blank"
                                                                    href="
                                                               @if (isset($socialMedia)) ) {
                                                               echo $socialMedia->twitter; @endif
                                                                    ">

                                                                    <i class="fa fa-twitter"></i></a>
                                                            </li>
                                                            <li>
                                                                <a target="_blank"
                                                                    href="
                                                               @if (isset($socialMedia)) {
                                                               echo $socialMedia->linkedin; @endif
                                                                    ">
                                                                    <i class="fa fa-linkedin"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <!-- /.box -->
                                    </div>
                                    <!--/column -->
                                </div>
                                <!--/.row -->
                            </div>
                            <!--/.container-fluid -->
                        </div>
                        <!--/.image-block-wrapper -->
                    </div>
                    <!-- /.bg -->
                </div>
                <!-- /.boxed -->
            </div>
            <!-- /.container -->
        </div>

        <div class="wrapper light-wrapper">
            <div class="container inner">
                <h2 class="section-title section-title-upper larger text-center">Some of My Recent Photos</h2>
                <p class="lead text-center">Photography is my passion and I love to turn ideas into beautiful things.</p>
                <div class="space20"></div>

                <div id="cube-grid" class="cbp light-gallery">
                    @foreach ($recentimages as $eachphoto)
                        <div class="cbp-item food">
                            <figure class="overlay overlay3 rounded">
                                <a href="{{ asset('uploads/gallery/' . $eachphoto->images) }}" data-sub-html="#caption1">
                                    <img src="{{ asset('uploads/gallery/' . $eachphoto->images) }}" alt="" />
                                </a>
                            </figure>
                        </div>
                    @endforeach
                </div>
            </div>
            <!-- /.container -->
        </div>
    </div>
@endsection
