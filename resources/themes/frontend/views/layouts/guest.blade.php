<!DOCTYPE html>
<html class="no-js" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Larashop') }}</title>

		<!-- Favicon -->
		<link rel="shortcut icon" href="{{ asset('themes/frontend/images/favicon.png') }}">
		<!-- Plugins CSS -->
		<link rel="stylesheet" href="{{ asset('themes/frontend/css/plugins.css') }}">
		<!-- Bootstap CSS -->
		<link rel="stylesheet" href="{{ asset('themes/frontend/css/bootstrap.min.css') }}">
		<!-- Main Style CSS -->
		<link rel="stylesheet" href="{{ asset('themes/frontend/css/style.css') }}">
		<link rel="stylesheet" href="{{ asset('themes/frontend/css/responsive.css') }}">
        @stack('head')
	</head>
	<body>
        <div id="app">
            <div class="pageWrapper">
                @include('layouts.header.index')

                <!--Body Content-->
                <div id="page-content">
                    <!--Collection Banner-->
                    <div class="collection-header">
                        <div class="collection-hero">
                            <div class="collection-hero__image"><img class="blur-up lazyload" data-src="{{ asset('themes/frontend/images/cat-women2.jpg') }}" src="{{ asset('themes/frontend/images/cat-women2.jpg') }}" alt="Women" title="Women" /></div>
                            <div class="collection-hero__title-wrapper"><h1 class="collection-hero__title page-width">@yield('title', 'Title')</h1></div>
                        </div>
                    </div>
                    <!--End Collection Banner-->

                    <div class="bredcrumbWrap">
                        <div class="container breadcrumbs">
                            <a href="index.html" title="Back to the home page">Home</a><span aria-hidden="true">›</span><span>Blog Left Sidebar</span>
                        </div>
                    </div>

                    @yield('content')
                </div>
                <!--End Body Content-->
                
            </div>
            @include("layouts.footer.index")
        </div>

        <!--Scoll Top-->
        <span id="site-scroll"><i class="icon anm anm-angle-up-r"></i></span>
        <!--End Scoll Top-->

        <!-- Including Jquery -->
        <script src="{{ asset('themes/frontend/js/vendor/jquery-3.3.1.min.js') }}"></script>
        <script src="{{ asset('themes/frontend/js/vendor/jquery.cookie.js') }}"></script>
        <script src="{{ asset('themes/frontend/js/vendor/modernizr-3.6.0.min.js') }}"></script>
        <script src="{{ asset('themes/frontend/js/vendor/wow.min.js') }}"></script>
        <script src="{{ asset('themes/frontend/js/vendor/masonry.js') }}"></script>
        <!-- Including Javascript -->
        <script src="{{ asset('themes/frontend/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('themes/frontend/js/plugins.js') }}"></script>
        <script src="{{ asset('themes/frontend/js/popper.min.js') }}"></script>
        <script src="{{ asset('themes/frontend/js/lazysizes.js') }}"></script>
        <script src="{{ asset('themes/frontend/js/main.js') }}"></script>
        
        @stack('footer')
	</body>
</html>