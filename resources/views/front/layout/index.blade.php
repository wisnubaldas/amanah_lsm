<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
       @include('front.layout.css')            
    </head>
    <body class="antialiased">
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TAG"
            height="0" width="0" style="display:none;visibility:hidden" id="gtmanager"></iframe></noscript>
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