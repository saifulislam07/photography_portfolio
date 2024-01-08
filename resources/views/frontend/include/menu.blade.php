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
                         <img width="300px" src="{{ URL::to('/site_logo/' . $websetting->logo_white) }}"
                             class="logo-small" alt="">
                     </a>
                 </div>
                 <!-- logo close -->

                 <!-- small button begin -->
                 <span id="menu-btn"></span>
                 <!-- small button close -->

                 @php
                     $current_route = Route::current()->getName();
                 @endphp

                 <!-- mainmenu begin -->
                 <nav class="md-flex">
                     <ul id="mainmenu">
                         <li><a href="/">Home<span></span></a></li>
                         <li><a href="{{ route('aboutsme') }}">Profile</a></li>
                         <li><a href="{{ route('photostory') }}">story</a></li>
                         <li><a href="{{ route('mygallery') }}">Gallery</a></li>
                         <li><a href="{{ route('myvideogallery') }}">Video</a></li>
                         <li><a href="{{ route('buyphoto') }}">Buy</a></li>
                         <li><a href="#">Media</a>
                             <ul>
                                 <li><a href="{{ route('mypublications') }}">Publication</a></li>
                                 <li><a href="{{ route('myPortfolioLinks') }}">Portfolio Links</a></li>
                                 <li><a href="{{ route('mycommercials') }}">Commercial</a></li>
                                 <li><a href="{{ route('tear-sheet') }}">tear sheet</a></li>
                                 <li><a href="{{ route('myachievement') }}">achievement</a></li>
                                 <li><a href="{{ route('myclients') }}">client</a></li>
                             </ul>
                         </li>
                         <li><a href="{{ route('contacts') }}">Contact</a></li>

                     </ul>


                     @if (
                         $current_route == 'buyphoto' ||
                             $current_route == 'cart' ||
                             $current_route == 'add.to.cart' ||
                             $current_route == 'update.cart' ||
                             $current_route == 'remove.from.cart' ||
                             $current_route == 'buyPhotoDetails')
                         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
                         <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
                         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
                         {{-- cart action --}}

                         <div id='de-extra-menu'>
                             <a class="d-cart-icon" href="{{ route('cart') }}">
                                 <i class="fa fa-shopping-basket"></i>
                                 <span class="d-cart-icon-count">{{ count((array) session('cart')) }}</span>
                             </a>
                         </div>
                     @endif
                 </nav>
             </div>
         </div>
     </div>
 </header>
 <!-- header close -->
