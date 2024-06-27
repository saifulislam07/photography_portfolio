@extends('frontend.masterTemp')
@section('fmenuname')
    Forgot Password
@endsection

@section('front-main-content')
    <div class="content-wrapper">
        <div id="wrapper">
            <section id="subheader" data-speed="8" data-type="background">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1> Forgot Password</h1>
                            <ul class="crumb">
                                <li><a href="/">Home</a></li>
                                <li class="sep">/</li>
                                <li> Forgot Password</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>

            <div id="content" class="no-top no-bottom">
                <!-- section begin -->
                <section id="section-portfolio" class="no-top no-bottom" aria-label="section-portfolio">
                    <div class="container mb-4">

                        <div class="spacer-single"></div>

                        <!-- portfolio filter begin -->
                        <div class="row">


                            <div class="row justify-content-center">
                                <div class="col-md-8">
                                    <div class="card">
                                        <div class="card-body">
                                            <div>Reset Password</div>
                                            <hr>

                                            @if (Session::has('message'))
                                                <div class="alert alert-success" role="alert">
                                                    {{ Session::get('message') }}
                                                </div>
                                            @endif

                                            <form action="{{ route('forget.password.post') }}" method="POST">
                                                @csrf
                                                <div class="form-group row">
                                                    <label for="email_address" class="col-md-4 col-form-label ">E-Mail
                                                        Address</label>
                                                    <div class="col-md-6">
                                                        <input type="text" id="email_address" class="form-control"
                                                            name="email" required autofocus>
                                                        @if ($errors->has('email'))
                                                            <span class="text-danger">{{ $errors->first('email') }}</span>
                                                        @endif
                                                    </div>

                                                </div>
                                                <div class="form-group row offset-md-4 mt-2">
                                                    <div class="col-md-6">

                                                        <button type="submit" class="btn btn-primary ">
                                                            Send Password Reset Link
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </section>
            </div>
        </div>
    </div>
@endsection
