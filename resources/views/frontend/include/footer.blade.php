     <footer>
         @php
             $aboutsme = \DB::table('aboutmes')->first();
         @endphp
         <div class="container">
             <div class="row">
                 <div class="col-lg-12 text-center ">
                     <img width="300px" src="{{ URL::to('/site_logo/' . $websetting->logo_white) }}" class="logo-small"
                         alt="">
                 </div>
                 <hr>
                 <div class="col-lg-4">
                     <div class="widget widget_recent_post">
                         <h3>Copyright Note</h3>

                         <p> {{ $websetting->copyright_note }}</p>


                     </div>
                 </div>

                 <div class="col-lg-4">
                     <h3>Contact Us</h3>
                     <div class="widget widget-address">
                         <address>
                             <span><strong>Address :</strong>&nbsp;&nbsp; {{ $websetting->address }}</span>
                             <span><strong>Phone :</strong> &nbsp;&nbsp;{{ $websetting->number }}</span>
                             <span><strong>WhatsApp: </strong> &nbsp;&nbsp;{{ $websetting->whatsapp }}</span>
                             <span><strong>Email :</strong><a
                                     href="mailto:{{ $websetting->email }}">&nbsp;&nbsp;&nbsp;{{ $websetting->email }}</a></span>
                         </address>
                     </div>
                 </div>

                 <div class="col-lg-4">
                     <div class="widget widget_recent_post">
                         <h3>Quick Menu</h3>
                         <ul>
                             <li><a href="{{ route('mypublications') }}">Publication</a></li>
                             <li><a href="{{ route('myPortfolioLinks') }}">Portfolio Links</a></li>
                             <li><a href="{{ route('mycommercials') }}">Commercial</a></li>
                             <li><a href="{{ route('tear-sheet') }}">Tear Sheet</a></li>
                             <li><a href="{{ route('myachievement') }}">Achievement</a></li>
                         </ul>
                     </div>
                 </div>
             </div>
         </div>

         <div class="subfooter">
             <div class="container text-center">
                 <div class="row">
                     <div class="col-md-4">
                         &copy; {{ $websetting->copyright }} <span
                             class="id-color">{{ $websetting->site_name }}</span>
                     </div>
                     <div class="col-md-4 text-center">
                         <span><a href="https://facebook.com/a.chobi7" style="color : #ffffff" target="_blank"
                                 rel="noopener noreferrer"><i class="fa fa-hand-pointer-o" aria-hidden="true"></i>
                                 DEVELOPED BY SAIFUL ISLAM </a> </span>
                     </div>
                     <div class="col-md-4 text-center">
                         <div class="social-icons">
                             <a target="_blank" href="{{ $socialMedia->facebook }}"><i
                                     class="fa fa-facebook fa-lg"></i></a>
                             <a target="_blank" href="{{ $socialMedia->twitter }}"><i
                                     class="fa fa-twitter fa-lg"></i></a>
                             <a target="_blank" href="{{ $socialMedia->instagram }}"><i
                                     class="fa fa-instagram fa-lg"></i></a>
                             <a target="_blank" href="{{ $socialMedia->linkedin }}"><i
                                     class="fa fa-linkedin fa-lg"></i></a>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
         <a href="#" id="back-to-top"></a>
     </footer>
