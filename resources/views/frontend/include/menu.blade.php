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
                             $current_route == 'remove.from.cart')
                         <style>
                             .dropdown {
                                 margin-left: 6px;
                                 margin-top: 20px;
                                 float: right;
                                 padding-right: 30px;
                             }

                             .dropdown .dropdown-menu {
                                 padding: 20px;
                                 top: 30px !important;
                                 width: 350px !important;
                                 left: -110px !important;
                                 box-shadow: 0px 5px 30px black;
                             }

                             .total-header-section {
                                 border-bottom: 1px solid #d2d2d2;
                             }

                             .total-section p {
                                 margin-bottom: 20px;
                             }

                             .cart-detail {
                                 padding: 15px 0px;
                             }

                             .cart-detail-img img {
                                 width: 100%;
                                 height: 100%;
                                 padding-left: 15px;
                             }

                             .cart-detail-product p {
                                 margin: 0px;
                                 color: #000;
                                 font-weight: 500;
                             }

                             .cart-detail .price {
                                 font-size: 12px;
                                 margin-right: 10px;
                                 font-weight: 500;
                             }

                             .cart-detail .count {
                                 color: #C2C2DC;
                             }

                             .checkout {
                                 border-top: 1px solid #d2d2d2;
                                 padding-top: 15px;
                             }

                             .checkout .btn-primary {
                                 border-radius: 50px;
                                 height: 50px;
                             }

                             .dropdown-menu:before {
                                 content: " ";
                                 position: absolute;
                                 top: -20px;
                                 right: 50px;
                                 border: 10px solid transparent;
                                 border-bottom-color: #fff;
                             }
                         </style>


                         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
                         <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
                         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
                         {{-- cart action --}}
                         <div class="dropdown">
                             <button type="button" class="btn btn-info" data-toggle="dropdown">
                                 <i class="fa fa-shopping-cart" aria-hidden="true"></i> Cart <span
                                     class="badge badge-pill badge-danger">{{ count((array) session('cart')) }}</span>
                             </button>
                             <div class="dropdown-menu">
                                 <div class="row total-header-section">
                                     <div class="col-lg-6 col-sm-6 col-6">
                                         <i class="fa fa-shopping-cart" aria-hidden="true"></i> <span
                                             class="badge badge-pill badge-danger">{{ count((array) session('cart')) }}</span>
                                     </div>
                                     @php $total = 0 @endphp
                                     @foreach ((array) session('cart') as $id => $details)
                                         @php $total += $details['price'] * $details['quantity'] @endphp
                                     @endforeach
                                     <div class="col-lg-6 col-sm-6 col-6 total-section text-right">
                                         <p>Total: <span class="text-info">$ {{ $total }}</span></p>
                                     </div>
                                 </div>
                                 @if (session('cart'))
                                     @foreach (session('cart') as $id => $details)
                                         @php
                                             //dd($details);
                                         @endphp
                                         <div class="row cart-detail">
                                             <div class="col-lg-4 col-sm-4 col-4 cart-detail-img">
                                                 image
                                             </div>
                                             <div class="col-lg-8 col-sm-8 col-8 cart-detail-product">
                                                 <p>{{ $details['title'] }}</p>
                                                 <span class="price text-info"> ${{ $details['price'] }}</span> <span
                                                     class="count"> Quantity:{{ $details['quantity'] }}</span>
                                             </div>
                                         </div>
                                     @endforeach
                                 @endif
                                 <div class="row">
                                     <div class="col-lg-12 col-sm-12 col-12 text-center checkout">
                                         <a href="{{ route('cart') }}" class="btn btn-primary btn-block">View all</a>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     @endif


                 </nav>
                 @if ($current_route == 'buyphoto')
                     <div class="container">

                         @if (session('success'))
                             <div class="alert alert-success">
                                 {{ session('success') }}
                             </div>
                         @endif

                     </div>
                 @endif


                 <!-- mainmenu close -->














             </div>

         </div>
     </div>
 </header>
 <!-- header close -->
