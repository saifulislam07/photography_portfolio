@extends('frontend.masterTemp')
@section('fmenuname')
    Story
@endsection

<style>
    img {
        max-width: 100%;
    }
</style>
@section('front-main-content')
    <div class="space20"></div>
    <div class="content-wrapper">
        <div class="wrapper light-wrapper">
            <div class="container inner pt-60">
                <div class="row">
                    <div class="space20"></div>
                    <div class="space20"></div>



                    <div class="col-md-8">


                        <h1 style="color: rgb(14, 17, 206)" class="post-title"> <i class="fa fa-book"></i>
                            {{ $LastStory->title }}</h1>

                        <div class="blog classic-view">
                            <div class="post text-center">
                                <figure class="rounded"><img src="{{ asset('public/storycover/' . $LastStory->image) }}"
                                        alt="story cover photo" />
                                </figure>


                                <div class="space40"></div>
                                <div class="post-content text-left">
                                    <h1 class="post-title">{{ $LastStory->title }}</h1>
                                    <div class="meta">
                                        <span class="date">
                                            @php
                                                echo date('d M Y', strtotime($LastStory->created_at));
                                            @endphp
                                        </span>
                                        <span class="category">
                                            <a href="#">
                                                Story Details
                                            </a>
                                        </span>
                                    </div>
                                    <p>
                                        {!! $LastStory->details !!}
                                    </p>
                                </div>
                                <!-- /.post-content -->
                            </div>
                            <!-- /.post -->

                            <!--/.row -->
                            {{-- <div class="divider-icon"><i class="si-photo_aperture"></i></div> --}}
                            <hr>
                            <div class="row mx-1">

                                <div class="col-lg-12 text-center single-b-wrap col-md-12 " id="social-links">
                                    <h5>Share it on your social media account.</h5>

                                    <ul class="social-icons social social-color aos-init aos-animate" data-aos="fade-up"
                                        data-aos-easing="linear" data-aos-duration="5000">
                                        <li>
                                            <a href="#" id="gmail-btn"><i class="fa fa-envelope-o" aria-hidden="true"
                                                    style="color: #cf3e39; font-size: 2rem"></i></a>
                                        </li>
                                        <li>
                                            <a href="#" id="facebook-btn"><i class="fa fa-facebook-square"
                                                    aria-hidden="true" style="color: #3b5998; font-size: 2rem"></i></a>
                                        </li>
                                        <li>
                                            <a href="#" id="gplus-btn"><i class="fa fa-google-plus-square"
                                                    aria-hidden="true" style="color: #dd4b39; font-size: 2rem"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" id="twitter-btn"><i class="fa fa-twitter-square"
                                                    aria-hidden="true" style="color: #1da1f2; font-size: 2rem"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" id="linkedin-btn"><i class="fa fa-linkedin-square"
                                                    aria-hidden="true" style="color: #0077b5; font-size: 2rem"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" id="whatsapp-btn"><i class="fa fa-whatsapp" aria-hidden="true"
                                                    style="color: #25d366; font-size: 2rem"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-lg-6 single-b-wrap col-md-12 mt-3">
                                    <button class="btn btn-primary" id="shareBtn" style="display: none"><i
                                            class="fa fa fa-share text-white" aria-hidden="true"></i> Share</button>
                                </div>
                            </div>
                            <hr>
                            {{-- <div class="divider-icon"><i class="si-photo_aperture"></i></div> --}}
                            {{-- <div class="sidebox widget">
                                <h3 class="widget-title"><i class="fa fa-hashtag"></i> This story Tags</h3>
                                <ul class="list-unstyled tag-list">
                                    @php
                                        $tags = $LastStory->tages;
                                        $alltags = explode(' ', $tags);
                                    @endphp

                                    @foreach ($alltags as $key => $eachtage)
                                        <li><a class="btn btn-white shadow">{{ $eachtage }}</a></li>
                                    @endforeach
                                </ul>
                            </div> --}}
                            <!-- /#comments -->
                            <div class="divider-icon"><i class="si-photo_aperture"></i></div>
                            <h4>Would you like to share your thoughts?</h4>
                            <p>Your email address will not be published. Required fields are marked *</p>
                            <div class="space20"></div>

                            @if ($errors->any())
                                <div class="card">
                                    <div class="card-body alert-danger">
                                        <h4 style="color: red">{{ $errors->first() }}</h4>
                                    </div>
                                </div>
                                <div class="space20"></div>
                            @endif

                            <form class="comment-form" action="{{ route('storestorymessage') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <input type="hidden" value="{{ $LastStory->id }}" name="story_id">
                                    <input type="text" name="name" class="form-control" placeholder="Name*"
                                        required="required">
                                </div>

                                <div class="form-group">
                                    <input type="email" name="email" class="form-control" placeholder="Email*"
                                        required="required">
                                </div>

                                <div class="form-group">
                                    <textarea name="message" class="form-control" required rows="5" placeholder="Enter your message here..."></textarea>
                                </div>
                                <button type="submit" class="btn">Submit</button>
                            </form>
                            <!-- /.comment-form -->
                        </div>
                        <!-- /.blog -->
                    </div>
                    <!--/column -->
                    <aside class="col-md-4 sidebar">
                        <div class="sidebox widget">
                            <h3 class="widget-title"><i class="fa fa-list"></i> Story list</h3>
                            <ul class="image-list">
                                @foreach ($allstory as $eachlist)
                                    <li>
                                        <a href="{{ url('viewstory', $eachlist->id) }}">
                                            <img class="circle" width="40px"
                                                src="{{ asset('/storycover/' . $eachlist->image) }}">
                                        </a>
                                        <a href="{{ url('viewstory', $eachlist->id) }}">
                                            {{ $eachlist->title }}
                                        </a>
                                    </li>
                                @endforeach


                            </ul>
                            <!-- /.image-list -->
                        </div>
                        <div class="sidebox widget">
                            <h3 data-aos="fade-up"><i class="fa fa-user"></i> About Me</h3>
                            <h5 data-aos="fade-down " style="color:rgb(24, 138, 138)">
                                {{ $aboutme->title }}</h5>
                            <figure class="rounded mb-20">
                                <img src="{{ asset('./aboutmes/' . $aboutme->storyimage) }}" alt="" />
                            </figure>
                            <p>
                                {!! Str::words($aboutme->details, 50, '<br> <a style="color :blue" href="/aboutsme">Read More</a>') !!}
                            </p>
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
                        <!-- /.widget -->

                        <!-- /.widget -->
                        <div class="sidebox widget">
                            <h3 class="widget-title"><i class="fa fa-list-alt"></i> Story Categories List</h3>
                            <ul class="unordered-list">
                                @foreach ($allcategorycount as $echocat)
                                    <li><a href="#">{{ $echocat->catname }}
                                            {{ '( ' . $echocat->total . ' )' }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>


                        <!-- /.widget -->
                        <div class="sidebox widget">
                            <h3 class="widget-title">Instagram</h3>
                            <div class="tiles tiles-s">
                                <div id="instafeed-widget" class="items row">coming soon</div>
                            </div>
                            <!--/.tiles -->
                        </div>
                        <!-- /.widget -->

                        <!-- /.widget -->
                    </aside>
                    <!-- /column .sidebar -->
                </div>
                <!--/.row -->
            </div>
            <!-- /.container -->
        </div>
    </div>



    <script type="text/javascript">
        function showReplyForm(commentId, user) {
            var x = document.getElementById(`reply-form-${commentId}`);
            var input = document.getElementById(`reply-form-${commentId}-text`);
            if (x.style.display === "none") {
                x.style.display = "block";
                input.innerText = `@${user} `;
            } else {
                x.style.display = "none";
            }
        }
        // Social Share links.
        const gmailBtn = document.getElementById('gmail-btn');
        const facebookBtn = document.getElementById('facebook-btn');
        const gplusBtn = document.getElementById('gplus-btn');
        const linkedinBtn = document.getElementById('linkedin-btn');
        const twitterBtn = document.getElementById('twitter-btn');
        const whatsappBtn = document.getElementById('whatsapp-btn');
        const socialLinks = document.getElementById('social-links');
        // posturl posttitle
        let postUrl = encodeURI(document.location.href);
        let postTitle = encodeURI('{{ $LastStory->title }}');
        facebookBtn.setAttribute("href", `https://www.facebook.com/sharer.php?u=${postUrl}`);
        twitterBtn.setAttribute("href", `https://twitter.com/share?url=${postUrl}&text=${postTitle}`);
        linkedinBtn.setAttribute("href", `https://www.linkedin.com/shareArticle?url=${postUrl}&title=${postTitle}`);
        whatsappBtn.setAttribute("href", `https://wa.me/?text=${postTitle} ${postUrl}`);
        gmailBtn.setAttribute("href", `https://mail.google.com/mail/?view=cm&su=${postTitle}&body=${postUrl}`);
        gplusBtn.setAttribute("href", `https://plus.google.com/share?url=${postUrl}`);

        // // Button
        // const shareBtn = document.getElementById('shareBtn');
        // if (navigator.share) {
        //     shareBtn.style.display = 'block';
        //     socialLinks.style.display = 'none';
        //     shareBtn.addEventListener('click', () => {
        //         navigator.share({
        //             title: postTitle,
        //             url: postUrl
        //         }).then((result) => {
        //             alert('Thank You for Sharing.')
        //         }).catch((err) => {
        //             console.log(err);
        //         });;
        //     });
        // } else {}
    </script>
@endsection
