<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
       @include('front.layout.css')            
    </head>
    <body class="antialiased">
        <!-- Preloader Start -->
        <div class="se-pre-con"></div>
        <!-- Preloader Ends -->
        @include('front.layout.header-top')
        @include('front.layout.header-menu')
        
        @yield('content')
        @include('front.layout.footer')
        @include('front.layout.js')
    </body>
</html>