@extends('frontend.masterTemp')
@section('fmenuname')
Contact Me
@endsection



@section('front-main-content')
<div class="wrapper light-wrapper">
    <div class="container inner pt-70">
        <div class="row">
            <div class="space20"></div>
            <div class="space20"></div>
            <div class="space20"></div>
            <div class="space20"></div>
            <div class="row">

                <!--/column -->
                <aside class="col-md-6 sidebar">
                    <div class="box bg-white shadow p-30 text-center" data-aos="fade-left">
                        <img data-aos="zoom-in" src="{{ asset('./aboutmes/abc.jpg') }}" alt="frame" width="50%"
                            style="margin: 0 auto ; padding-bottom: 17px">

                        <p>If you need pictures for office, home, magazine, calendar or any other work,
                            please contact
                            me, I will frame your choice and deliver it to your home or office.</p>

                    </div>
                    <!--/.box -->
                </aside>
                <aside class="col-md-6 sidebar">
                    <div class="box bg-white shadow p-30" data-aos="fade-right">
                        <h4>For Buy Photos</h4>
                        <p>If you are interested to buy any of my photographs for the calendar, magazine, office, house
                            or other purposes please contact me to following email address</p>
                        <ul class="icon-list text-center">
                            <a class="btn btn-xs btn-info" href="{{ route('contacts')}}">
                                <li><i class="fa fa-map"></i>Contact</li>
                            </a>
                            <li><i class="fa fa-envelope"></i><a href="mailto:{{ $aboutme->email }}"
                                    class="nocolor">{{ $aboutme->email }}</a></li>
                            <li><i class="fa fa-phone-square"></i>{{ $aboutme->contact }}</li>
                        </ul>

                        <div class="card">
                            <div class="card-body text-center hover">
                                <ul class="social social-color" data-aos="fade-up" data-aos-easing="linear"
                                    data-aos-duration="5000">
                                    <li><a target="_blank" href="{{ $socialMedia->facebook }}"><i
                                                class="fa fa-facebook"></i></a></li>
                                    <li><a target="_blank" href="{{ $socialMedia->instagram }}"><i
                                                class="fa fa-instagram"></i></a></li>
                                    <li><a target="_blank" href="{{ $socialMedia->twitter }}"><i
                                                class="fa fa-twitter"></i></a></li>
                                    <li><a target="_blank" href="{{ $socialMedia->linkedin }}"><i
                                                class="fa fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--/.box -->
                </aside>
                <!-- /column .sidebar -->
            </div>
            <!-- /column -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</div>
</div>
@endsection