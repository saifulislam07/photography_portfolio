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
                <div class="col-lg-8 offset-lg-2">
                    <h2 class="section-title text-center">Get in Touch</h2>
                    <h3 class="section-title text-center alert alert-info text-capitalize " data-aos="flip-left">If you want
                        to buy
                        pictures,
                        please contact me
                        without any
                        hesitation</h3>
                    <p class="text-center " data-aos="fade-right">You can contact me on any matter. like : Tour guide,
                        photographer, photographer guide in Bangladesh, event management, project
                        management, videography
                        etc.</p>



                    <div class="space20"></div>
                    <div class="row text-center">
                        <div class="col-md-4"> <span class="icon icon-color color-default fs-48 mb-10"><i
                                    class="si-camping_map"></i></span>
                            <p>Cantonment, Dhaka-1206, Bangladesh</p>
                        </div>
                        <!--/column -->
                        <div class="col-md-4"> <span class="icon icon-color color-default fs-48 mb-10"><i
                                    class="si-phone_phone-ringing"></i></span>
                            <p> <a href="tel:{{ $aboutme->contact }}">{{ $aboutme->contact }}</a> <br>
                                <i style="color: green" class="fab fa-viber"></i><a href="https://wa.me/8801866197041">
                                    +8801866197041</a>
                                <i style=" color: green" class="fa fa-whatsapp"></i>
                            </p>
                        </div>
                        <!--/column -->
                        <div class="col-md-4"> <span class="icon icon-color color-default fs-48 mb-10"><i
                                    class="si-mail_mail-2"></i></span>
                            <p><a class="nocolor" href="mailto:{{ $aboutme->email }}">{{ $aboutme->email }}</a><br>
                                <a class="nocolor">mainul.islam.msj@ulab.edu.bd</a>
                            </p>
                        </div>
                        <!--/column -->
                    </div>
                    <!--/.row -->
                    <div class="space30"></div>
                    <div class="form-container">
                        @if ($errors->any())
                            <div class="card">
                                <div class="card-body alert-danger">
                                    <h4 style="color: red">{{ $errors->first() }}</h4>
                                </div>
                            </div>
                            <div class="space20"></div>
                        @endif
                        <form action="{{ route('storestorycontact') }}" method="POST">
                            @csrf
                            <div class="row text-center">
                                <div class="col-md-6 pr-10">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="name" placeholder="Your name"
                                            required="required">
                                    </div>
                                    <!--/.form-group -->
                                </div>
                                <!--/column -->
                                <div class="col-md-6 pl-10">
                                    <div class="form-group">
                                        <input type="email" class="form-control" name="email" placeholder="Your e-mail"
                                            required="required">
                                    </div>
                                    <!--/.form-group -->
                                </div>
                                <!--/column -->

                                <div class="col-12">
                                    <textarea name="message" class="form-control" rows="3" placeholder="Type your message here..." required></textarea>
                                    <div class="space20"></div>
                                    <button type="submit" class="btn" data-error="Fix errors"
                                        data-processing="Sending..." data-success="Thank you!">Submit</button>
                                    <footer class="notification-box"></footer>
                                </div>
                                <!--/column -->
                            </div>
                            <!--/.row -->
                        </form>
                        <!--/.vanilla-form -->
                    </div>
                    <!--/.form-container -->
                </div>
                <!-- /column -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </div>
    </div>
@endsection
