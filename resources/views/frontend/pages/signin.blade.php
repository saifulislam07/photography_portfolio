@extends('frontend.masterTemp')
@section('fmenuname')
    SIGN IN
@endsection
@section('front-main-content')
    <div class="content-wrapper">
        <div id="wrapper">
            <section id="subheader" data-speed="8" data-type="background">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1>Client Area</h1>
                            <ul class="crumb">
                                <li><a href="">Home</a></li>
                                <li class="sep">/</li>
                                <li>Client</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>


            <section id="section-text " style="padding-bottom: 5px!important">
                <div class="container">


                    <div class="row">
                        <div class="col-md-6">

                            <div class="tab-default">

                                <nav>
                                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                        <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab"
                                            data-bs-target="#nav-home" type="button" role="tab"
                                            aria-controls="nav-home" aria-selected="true">Login</button>
                                        <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab"
                                            data-bs-target="#nav-profile" type="button" role="tab"
                                            aria-controls="nav-profile" aria-selected="false">Registration</button>

                                    </div>
                                </nav>

                                <div class="tab-content" id="nav-tabContent">
                                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel"
                                        aria-labelledby="nav-home-tab">
                                        @if ($errors->all())
                                            @if ($errors->any())
                                                <div class="card mb-3">
                                                    <div class="card-body alert-black">
                                                        @foreach ($errors->all() as $error)
                                                            <h4
                                                                style="color: #fab702; border: 1px solid #ffffff; padding: 5px 5px">
                                                                <i style="color: #ff0000;"
                                                                    class="fa fa-exclamation-triangle"
                                                                    aria-hidden="true"></i> {{ $error }}
                                                            </h4>
                                                        @endforeach
                                                    </div>
                                                </div>
                                            @endif
                                        @endif
                                        <form class="billing-form" method="post" action="{{ route('login') }}">
                                            @csrf
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <label>Email</label>
                                                    <input type="text" name="email" class="form-control"
                                                        placeholder="Type your Email">


                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <label>Password</label>
                                                    <input type="password" name="password" class="form-control"
                                                        placeholder="Password here" />

                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-xs-6 mrg-top-5">
                                                    <span class="custom-checkbox">

                                                        <label for="1"></label>
                                                    </span> Forgat Password? <a href="#" class="cl-success"
                                                        style="color: #fab702">Click
                                                        Here</a>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="row mt-2">
                                                    <div class="col-md-12">
                                                        <button style="border: 1px solid #fab702; background: orange"
                                                            class="btn-line">Login
                                                            your account</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>

                                    </div>
                                    <div class="tab-pane fade" id="nav-profile" role="tabpanel"
                                        aria-labelledby="nav-profile-tab">
                                        <div class="col-md-12 ">
                                            <div class="sidebar-wrapper">
                                                @if ($errors->all())
                                                    @if ($errors->any())
                                                        <div class="card mb-3">
                                                            <div class="card-body alert-black">
                                                                @foreach ($errors->all() as $error)
                                                                    <h4
                                                                        style="color: #fab702; border: 1px solid #ffffff; padding: 5px 5px">
                                                                        <i style="color: #ff0000;"
                                                                            class="fa fa-exclamation-triangle"
                                                                            aria-hidden="true"></i> {{ $error }}
                                                                    </h4>
                                                                @endforeach
                                                            </div>
                                                        </div>
                                                    @endif
                                                @endif

                                                <form method="post" action="{{ route('createAccount') }}">
                                                    @csrf
                                                    <div class="row">

                                                        <div class="col-lg-12">
                                                            <label>Full Name <span style="color: orange">*</span></label>
                                                            <input type="text" name="name" value="{{ old('name') }}"
                                                                placeholder="Your full name" class="form-control" />

                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <label>Phone Number</label>
                                                            <input type="text" value="{{ old('phone') }}"
                                                                placeholder="Your Phone number" name="phone"
                                                                class="form-control" />


                                                        </div>
                                                        <div class="col-lg-12">
                                                            <label>Email <span style="color: orange">*</span></label>
                                                            <input type="email" placeholder="Your Email Addresss"
                                                                name="email" class="form-control" />

                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <label>Password <span style="color: orange">*</span></label>
                                                            <input type="password" placeholder="Password" name="password"
                                                                class="form-control" />
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <label>Confirm Password <span
                                                                    style="color: orange">*</span></label>
                                                            <input placeholder="Confirm Password" type="password"
                                                                value="{{ old('confirm_password') }}"
                                                                name="confirm_password" class="form-control" />
                                                        </div>

                                                    </div>
                                                    @error('password')
                                                        <div class="alert alert-danger" style="padding: 0;">
                                                            <strong>
                                                                {{ $message }}
                                                            </strong>
                                                            <br>
                                                        </div>
                                                    @enderror

                                                    <div class="row mt-2">
                                                        <div class="col-md-12">
                                                            <button style="border: 1px solid #fab702; background: orange"
                                                                class="btn-line">create an account</butt>
                                                        </div>
                                                    </div>
                                                </form>

                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>

                    </div>







                </div>

        </div>
        </section>
    </div>
    </div>
@endsection
