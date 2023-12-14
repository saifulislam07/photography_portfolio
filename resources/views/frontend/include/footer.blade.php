   <footer class="dark-wrapper inverse-text">
       @php
           $aboutmes = \App\Models\Aboutme::first();
       @endphp

       <div class="container inner pt-60 pb-30 text-center">
           <div class="row">
               <div class="col-md-10 offset-md-1">
                   <div class="row">
                       <div class="col-md-4">
                           <div class="widget">
                               <h3 class="widget-title">Location</h3>
                               <address class="mb-0"> Cantonment ,Dhaka -1206, Bangladesh
                               </address>
                           </div>
                           <!-- /.widget -->
                       </div>
                       <!-- /column -->
                       <div class="col-md-4">
                           <div class="widget">
                               <h3 class="widget-title">Follow</h3>
                               <ul class="social social-mute social-s">


                                   <li><a target="_blank"
                                           href="@if (isset($socialMedia)) ) {
                                                              echo  $socialMedia->facebook; @endif"><i
                                               class="fa fa-facebook"></i></a></li>
                                   <li><a target="_blank"
                                           href="@if (isset($socialMedia)) ) {
                                                               echo $socialMedia->instagram; @endif"><i
                                               class="fa fa-instagram"></i></a></li>
                                   <li><a target="_blank"
                                           href=" @if (isset($socialMedia)) ) {
                                                               echo $socialMedia->twitter; @endif"><i
                                               class="fa fa-twitter"></i></a></li>
                                   <li><a target="_blank"
                                           href=" @if (isset($socialMedia)) {
                                                               echo $socialMedia->linkedin; @endif"><i
                                               class="fa fa-linkedin"></i></a></li>

                               </ul>
                           </div>
                           <!-- /.widget -->
                       </div>
                       <!-- /column -->
                       <div class="col-md-4">
                           <div class="widget">
                               <h3 class="widget-title">Contact</h3>
                               <a style="color: white" href="mailto:" class="nocolor"></a> <br />
                               <a style="color: red" href="tel:"></a>
                           </div>
                           <!-- /.widget -->
                       </div>
                       <!-- /column -->
                   </div>
                   <!-- /.row -->
               </div>
               <!-- /column -->
           </div>
           <!-- /.row -->
           <div class="space30"></div>
           <p class="text-center">© 2023 Mainul Islam. All rights reserved. - Developed by <a
                   style="color: rgb(17, 108, 212)" target="_blank" href="https://www.facebook.com/a.chobi7/">SAIFUL
                   ISLAM</a></p>
       </div>
       <!-- /.container -->
   </footer>
