 <header>
     <div class="info">
         <div class="container">
             <div class="row">
                 <div class="col-md-12">
                     <div class="column">Working Hours Monday - Friday <span
                             class="id-color"><strong>08:00-16:00</strong></span></div>
                     <div class="column">Toll Free <span class="id-color"><strong>1800.899.900</strong></span>
                     </div>
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

     <div class="container-fluid header-container">
         <div class="row">
             <div class="col-md-12">
                 <div class="de-header-flex">
                     <!-- logo begin -->
                     <div id="logo">
                         <a href="/">
                             <img width="300px" src="{{ URL::to('/site_logo/' . $websetting->logo_white) }}"
                                 class="logo-small" alt="">
                         </a>
                     </div>
                     <span id="menu-btn"></span>
                     @php
                         $current_route = Route::current()->getName();
                         $menuItems = App\Models\menu::where('status', 'Active')->get();

                     @endphp
                     <style>
                         .submenu {
                             display: none;
                             position: absolute;
                             background-color: #fff;
                             box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
                         }

                         li:hover .submenu {
                             display: block;
                         }
                     </style>
                     <nav class="md-flex">
                         <ul id="mainmenu">
                             <li><a href="menu route">menu title</a></li>
                             <li><a href="menu route">menu title</a></li>
                             <li><a href="menu route">menu title</a></li>
                             <li><a href="menu route">menu title</a></li>
                             <li><a href="menu route">menu title</a></li>
                             <li><a href="menu route">menu title</a></li>
                             <li><a href="menu route">menu title</a></li>
                             <li><a href="#">menu title</a>
                                 <ul>
                                     <li><a href="menu route">menu title</a></li>
                                     <li><a href="menu route"> menu title</a></li>
                                     <li><a href="menu route"> menu title</a></li>
                                     <li><a href="menu route"> menu title</a></li>
                                     <li><a href="menu route"> menu title</a></li>
                                     <li><a href="menu route"> menu title</a></li>
                                 </ul>
                             </li>
                             <li><a href="menu route">Contact</a></li>
                         </ul>
                     </nav>
                     <div id='de-extra-menu'>
                         <a class="d-cart-icon" href="shop-cart.html">
                             <i class="fa fa-shopping-basket"></i>
                             <span class="d-cart-icon-count">5</span>
                         </a>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </header>
