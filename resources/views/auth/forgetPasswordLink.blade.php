@extends('frontend.masterTemp')
@section('fmenuname')
    Password Link
@endsection

@section('front-main-content')
    <div class="content-wrapper">
        <div id="wrapper">
            <section id="subheader" data-speed="8" data-type="background">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1> Reset Password</h1>
                            <ul class="crumb">
                                <li><a href="/">Home</a></li>
                                <li class="sep">/</li>
                                <li> Reset Password</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>


            <div class="cotainer">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">Reset Password</div>
                            <div class="card-body">

                                <form action="{{ route('reset.password.post') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="token" value="{{ $token }}">

                                    <div class="form-group row mb-1">
                                        <label for="email_address" class="col-md-4 col-form-label text-md-right">E-Mail
                                            Address</label>
                                        <div class="col-md-6">
                                            <input type="text" id="email_address" class="form-control" name="email"
                                                required autofocus>
                                            @if ($errors->has('email'))
                                                <span class="text-danger">{{ $errors->first('email') }}</span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group row mb-1">
                                        <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>
                                        <div class="col-md-6">
                                            <input type="password" id="password" class="form-control" name="password"
                                                required autofocus>
                                            @if ($errors->has('password'))
                                                <span class="text-danger">{{ $errors->first('password') }}</span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group row mb-1">
                                        <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Confirm
                                            Password</label>
                                        <div class="col-md-6">
                                            <input type="password" id="password-confirm" class="form-control"
                                                name="password_confirmation" required autofocus>
                                            @if ($errors->has('password_confirmation'))
                                                <span
                                                    class="text-danger">{{ $errors->first('password_confirmation') }}</span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group  row offset-md-4">
                                        <div class="col-md-6">
                                            <button type="submit" class="btn btn-primary">
                                                Reset Password
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
    </div>
@endsection
