@include('frontend.include.header')

<div class="wrapper">
    @include('frontend.include.menu')
    {{-- @include('frontend.include.slider') --}}

    @yield('front-main-content')

    @include('frontend.include.clients')
    @include('frontend.include.footer')
    @include('frontend.include.footer_links')
