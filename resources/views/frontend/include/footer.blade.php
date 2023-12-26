     <footer>
         <div class="container">
             <div class="row">
                 <div class="col-lg-3">
                     <img width="300px" src="{{ URL::to('/site_logo/' . $websetting->logo_white) }}" class="logo-small"
                         alt="">


                     We
                     are team based on Los Angeles.
                     Our expertise
                     on Interior Design. Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                     accusantium doloremque
                     laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi
                     architecto beatae
                     vitae dicta sunt explicabo.
                 </div>

                 <div class="col-lg-3">
                     <div class="widget widget_recent_post">
                         <h3>Latest News</h3>
                         <ul>
                             <li><a href="">The Essentials Interior Design Tips</a></li>
                             <li><a href="#">Functional Wall-to-Wall Shelves</a></li>
                             <li><a href="#">9 Unique Ways to Display Your TV</a></li>
                             <li><a href="#">The 5 Secrets to Minimal Design</a></li>
                             <li><a href="#">Make a Huge Impact With Multiples</a></li>
                         </ul>
                     </div>
                 </div>

                 <div class="col-lg-3">
                     <h3>Contact Us</h3>
                     <div class="widget widget-address">
                         <address>
                             <span>100 S Main St, Los Angeles, CA</span>
                             <span><strong>Phone:</strong>(208) 333 9296</span>
                             <span><strong>Fax:</strong>(208) 333 9298</span>
                             <span><strong>Email:</strong><a
                                     href="mailto:contact@archi-interior.com">contact@archi-interior.com</a></span>
                             <span><strong>Web:</strong><a href="#">http://archi-interior.com</a></span>
                         </address>
                     </div>
                 </div>

                 <div class="col-lg-3">
                     <div class="widget widget_recent_post">
                         <h3>Our Services</h3>
                         <ul>
                             <li><a href="#">Interior Design</a></li>
                             <li><a href="#">Architecture</a></li>
                             <li><a href="#">Industry</a></li>
                             <li><a href="#">Consulting</a></li>
                             <li><a href="#">Photography</a></li>
                         </ul>
                     </div>
                 </div>
             </div>
         </div>

         <div class="subfooter">
             <div class="container">
                 <div class="row">
                     <div class="col-md-4">
                         &copy; {{ $websetting->copyright }} - {{ $websetting->copyright_note }} <span
                             class="id-color">{{ $websetting->site_name }}</span>
                     </div>
                     <div class="col-md-4 text-center">
                         <span><a href="https://facebook.com/a.chobi7" style="color : #00ff68" target="_blank"
                                 rel="noopener noreferrer"><i class="fa fa-hand-pointer-o" aria-hidden="true"></i>
                                 DEVELOPED BY SAIFUL ISLAM </a> </span>
                     </div>
                     <div class="col-md-4 text-right">
                         <div class="social-icons">
                             <a href="#"><i class="fa fa-facebook fa-lg"></i></a>
                             <a href="#"><i class="fa fa-twitter fa-lg"></i></a>
                             <a href="#"><i class="fa fa-rss fa-lg"></i></a>
                             <a href="#"><i class="fa fa-google-plus fa-lg"></i></a>
                             <a href="#"><i class="fa fa-skype fa-lg"></i></a>
                             <a href="#"><i class="fa fa-dribbble fa-lg"></i></a>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
         <a href="#" id="back-to-top"></a>
     </footer>
