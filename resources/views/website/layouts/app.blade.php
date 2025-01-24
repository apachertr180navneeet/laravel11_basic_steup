<!DOCTYPE html>
<html lang="en" ng-app="{{ config('app.name') }}" lang="en" class="light-style layout-menu-fixed layout-compact" dir="ltr" data-theme="theme-default" data-assets-path="../assets/" data-template="vertical-menu-template-free">
    <head>
        <meta charset="utf-8" />
        <title>Laravel 11 basic</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
        <meta name="description" content="" />
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <link rel="stylesheet" href="{{asset('assets/admin/vendor/fonts/boxicons.css')}}" />
        <!-- Favicon -->
        <link rel="icon" href="{{asset('website/assets/images/favicon.webp')}}" />

        <!-- CSS ============================================ -->

        <!-- Font Family CSS -->
        <link rel="preconnect" href="https://fonts.googleapis.com/" />
        <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin />
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet" />

        <!-- Vendor & Plugins CSS (Please remove the comment from below vendor.min.css & plugins.min.css for better website load performance and remove css files from avobe) -->

        <link rel="stylesheet" href="{{asset('website/assets/css/vendor/vendor.min.css')}}" />
        <link rel="stylesheet" href="{{asset('website/assets/css/plugins/plugins.min.css')}}" />

        <!-- Main Style CSS -->
        <link rel="stylesheet" href="{{asset('website/assets/css/style.css')}}" />
        @yield('style')
        <style></style>
    </head>
    <body>
        @include('website.layouts.elements.header')
        <div id="main-wrapper">
            @yield('content')
            @include('website.layouts.elements.footer')
        </div>
        
        
        @include('website.layouts.elements.mobilemenu')

    

        <!-- JS
        ============================================ -->
        <!-- Modernizer JS -->
        <script src="{{asset('website/assets/js/vendor/modernizr-2.8.3.min.js')}}"></script>

        <!-- jQuery JS -->
        <script src="{{asset('website/assets/js/vendor/jquery-3.5.1.min.js')}}"></script>
        <script src="{{asset('website/assets/js/vendor/jquery-migrate-3.3.0.min.js')}}"></script>

        <!-- Bootstrap JS -->
        <script src="{{asset('website/assets/js/vendor/bootstrap.min.js')}}"></script>

        <!-- Plugins JS (Please remove the comment from below plugins.min.js for better website load performance and remove plugin js files from avobe) -->

        <script src="{{asset('website/assets/js/plugins/plugins.min.js')}}"></script>

        <!-- Main JS -->
        <script src="{{asset('website/assets/js/main.js')}}"></script>
    </body>
</html>
