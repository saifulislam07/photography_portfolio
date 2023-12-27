 <!-- header begin -->
 <header class="transparent">
     <div class="info">
         <div class="container">
             <div class="row">
                 <div class="col-md-12">
                     <div class="column">Working Hours Monday - Friday <span
                             class="id-color"><strong>08:00-16:00</strong></span></div>
                     <div class="column">Toll Free <span class="id-color"><strong>1800.899.900</strong></span></div>
                     <!-- social icons -->
                     <div class="column social">
                         <a href="#"><i class="fa fa-facebook"></i></a>
                         <a href="#"><i class="fa fa-twitter"></i></a>
                         <a href="#"><i class="fa fa-rss"></i></a>
                         <a href="#"><i class="fa fa-google-plus"></i></a>
                         <a href="#"><i class="fa fa-envelope-o"></i></a>
                     </div>
                     <!-- social icons close -->
                 </div>
             </div>
         </div>
     </div>

     <div class="container">
         <div class="row">
             <div class="col-md-12">
                 <!-- logo begin -->
                 <div id="logo">
                     <a href="/">
                         <img class="logo" src="{{ URL::to('/frontend_assets') }}/images/logo.png" alt="">
                     </a>
                 </div>
                 <!-- logo close -->

                 <!-- small button begin -->
                 <span id="menu-btn"></span>
                 <!-- small button close -->

                 <!-- mainmenu begin -->
                 <nav class="md-flex">
                     <ul id="mainmenu">
                         <li><a href="/">Home<span></span></a></li>
                         <li><a href="{{ route('aboutsme') }}">Profile</a></li>
                         <li><a href="project-wide-4-cols.html">story</a></li>
                         <li><a href="project-wide-4-cols.html">Gallery</a></li>
                         <li><a href="{{ route('myvideogallery') }}">Video</a></li>
                         <li><a href="project-wide-4-cols.html">Buy</a></li>
                         <li><a href="#">Media</a>
                             <ul>
                                 <li><a href="service-1.html">Publication</a></li>
                                 <li><a href="service-1.html">Portfolio</a></li>
                                 <li><a href="service-3.html">Commercial</a></li>
                                 <li><a href="service-4.html">tear sheed</a></li>
                                 <li><a href="service-4.html">achievement</a></li>
                                 <li><a href="service-4.html">client</a></li>
                             </ul>
                         </li>
                         <li><a href="project-wide-4-cols.html">Contact</a></li>

                     </ul>
                 </nav>

                 <!-- mainmenu close -->

             </div>

         </div>
     </div>
 </header>
 <!-- header close -->
