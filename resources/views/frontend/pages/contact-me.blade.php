@extends('frontend.masterTemp')
@section('fmenuname')
    CONTACT ME
@endsection
@section('front-main-content')
    <div id="content" class="no-bottom no-top">

        <section id="subheader" data-speed="8" data-type="background">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1>Contact</h1>
                        <ul class="crumb">
                            <li><a href="/">Home</a></li>
                            <li class="sep">/</li>
                            <li>Contact</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <div class="spacer-single"></div>
        <div class="container">
            <div class="row">

                <div class="col-md-8">
                    @if ($errors->all())
                        @if ($errors->any())
                            <div class="card mb-3">
                                <div class="card-body alert-black">
                                    @foreach ($errors->all() as $error)
                                        <h4 style="color: #fab702; border: 1px solid #ffffff; padding: 5px 5px">
                                            <i style="color: #ff0000;" class="fa fa-exclamation-triangle"
                                                aria-hidden="true"></i> {{ $error }}
                                        </h4>
                                    @endforeach
                                </div>
                            </div>
                        @endif
                    @endif
                    <form name="contactForm" action="{{ route('storestorycontact') }}" id='contact_form' method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-12 mb10">
                                <h3>Send Us Message</h3>
                            </div>
                            <div class="col-md-6">
                                <div id='name_error' class='error'>Please enter your name.</div>
                                <div>
                                    <input type='text' name='name' id='name' class="form-control"
                                        placeholder="Your Name *">
                                </div>

                                <div id='email_error' class='error'>Please enter your valid E-mail ID.</div>
                                <div>
                                    <input type='email' name='email' id='email' class="form-control"
                                        placeholder="Your Email *">
                                </div>

                                <div id='phone_error' class='error'>Please enter your phone number.</div>
                                <div>
                                    <input type='text' name='phone' id='phone' class="form-control"
                                        placeholder="Your Phone">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div id='message_error' class='error'>Please enter your message.</div>
                                <div>
                                    <textarea name='message' id='message' class="form-control" placeholder="Your Message *"></textarea>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="g-recaptcha" data-sitekey="copy-your-site-key-here"></div>
                                <p id='submit' class="mt20">
                                    <input type='submit' id='send_message' value='Submit Form' class="btn btn-line">
                                </p>
                            </div>
                        </div>
                    </form>

                    <div id="success_message" class='success'>
                        Your message has been sent successfully. Refresh this page if you want to send more messages.
                    </div>
                    <div id="error_message" class='error'>
                        Sorry there was an error sending your form.
                    </div>

                </div>

                <div id="sidebar" class="col-md-4">

                    <div class="widget widget_text">
                        <h3>Contact Info</h3>
                        <address>
                            <span><strong>Address </strong>&nbsp;&nbsp; {{ $websetting->address }}</span>
                            <span><strong>Phone </strong> &nbsp;&nbsp;{{ $websetting->number }}</span>
                            <span><strong>WhatsApp </strong> &nbsp;&nbsp;
                                <a href="https://wa.me/{{ $websetting->whatsapp }}" target="_blank">
                                    {{ $websetting->whatsapp }} <i style="color: green" class="fa fa-whatsapp"
                                        aria-hidden="true"></i></a>

                            </span>
                            <span><strong>Email </strong><a
                                    href="mailto:{{ $websetting->email }}">&nbsp;&nbsp;&nbsp;{{ $websetting->email }}</a></span>
                            <span><strong>Open</strong>&nbsp;&nbsp;24*7</span>
                        </address>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
