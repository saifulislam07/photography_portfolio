@extends('frontend.masterTemp')
@section('fmenuname')
    Achievement
@endsection
@section('front-main-content')
    <div class="content-wrapper">
        <div class="wrapper gray-wrapper">
            <div class="space20"></div>
           

            <div class="container inner">
                <h2 class="section-title mb-40 text-center">My National Achievement</h2>
                <div class="row text-center">
                    @foreach ($nationalaward as $eachnational)
                        <div class="col-md-12 pb-5">
                            <div class="box bg-white shadow">
                                <div class="icon fs-50 icon-color color-rose mb-20">
                                    <img data-aos="fade-up" width="100px"
                                        src="{{ asset('public/achievements/' . $eachnational->image) }}" alt="">
                                </div>
                                <h5>{{ $eachnational->title }}</h5>
                                <p> {!! $eachnational->details !!}</p>
                            </div>
                            <!--/.box -->
                        </div>
                    @endforeach


                </div>
                <!--/.row -->
            </div>
            <!-- /.container -->
        </div>
        <div class="wrapper gray-wrapper">
            <div class="container inner">
                <h2 class="section-title mb-40 text-center">My International Achievement</h2>

                <div class="row text-center">
                    @foreach ($internationalaward as $eachinternational)
                        <div class="col-md-12 pb-5">
                            <div class="box bg-white shadow">
                                <div class="icon fs-50 icon-color color-rose mb-20">
                                    <img data-aos="fade-up" width="100px"
                                        src="{{ asset('public/achievements/' . $eachinternational->image) }}" alt="">

                                </div>
                                <h5>{{ $eachinternational->title }}</h5>
                                <p>
                                    {!! $eachinternational->details !!}
                                </p>
                                @if($eachinternational->url)
                                 <a class="btn btn-info btn-xs" target="_blank" href="{{ $eachinternational->url }}">Video</a>
                                @endif
                               
                            </div>
                            <!--/.box -->
                        </div>
                    @endforeach
                </div>
                <!--/.row -->
            </div>
            <!-- /.container -->
        </div>
    </div>
@endsection
