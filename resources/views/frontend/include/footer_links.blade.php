 </div>
 </div>

 <!-- Javascript Files
    ================================================== -->
 <script src="{{ asset('frontend_assets/js/plugins.js') }}"></script>
 <script src="{{ asset('frontend_assets/js/designesia.js') }}"></script>

 <!-- SLIDER REVOLUTION SCRIPTS  -->
 <script src="{{ asset('frontend_assets/rs-plugin/js/jquery.themepunch.plugins.min.js') }}"></script>
 <script src="{{ asset('frontend_assets/rs-plugin/js/jquery.themepunch.revolution.min.js') }}"></script>
 <script>
     $(document).ready(function() {
         $('.pagination li').removeClass('page-item');
         $('.pagination li').removeClass('disabled');
         $('.pagination li a').removeClass('page-link');
         $('.pagination li span').replaceWith(function() {
             return $("<a />").append($(this).contents());
         });

     });
 </script>
 @yield('extra_js')
 </body>

 </html>
