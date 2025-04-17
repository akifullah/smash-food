<!DOCTYPE html>
<html lang="en">
    @include('frontend.includes.head')
    @yield('styles')
    <style>
        .dark-footer .widget_nav_menu a:before{
            display: none;
        }
    </style>
<body>

     @include('frontend.includes.header')

     @yield('content')

    @include('frontend.includes.footer')
    @include('frontend.includes.scripts')
    @yield('js')
    
</body>
</html>