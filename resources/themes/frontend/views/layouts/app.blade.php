<!DOCTYPE html>
<html class="no-js" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<!-- CSRF Token -->
		<meta name="csrf-token" content="{{ csrf_token() }}">

		<title>{{ config('app.name', 'Laravel') }}</title>

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
					<div class="page section-header text-center">
						<div class="page-title">
							<div class="wrapper">
								<h1 class="page-width">@yield('title', 'My Account')</h1>
							</div>
						</div>
					</div>

					<div class="bredcrumbWrap">
						<div class="container breadcrumbs">
							<a href="index.html" title="Back to the home page">Home</a><span aria-hidden="true">›</span><span>Blog Left Sidebar</span>
						</div>
					</div>

					<div class="container">
						<div class="row">
							<!--Sidebar-->
							<div class="col-12 col-sm-12 col-md-3 col-lg-3 sidebar">
								@include('customer.sidebar')
							</div>
							<!--End Sidebar-->
							
							<!--Main Content-->
							<div class="col-12 col-sm-12 col-md-9 col-lg-9 main-col">
								@if (session('status'))
									<div class="alert alert-success" role="alert">
										{{ session('status') }}
									</div>
								@endif
								@yield('content')
							</div>
							<!--End Main Content-->
						</div>
					</div>
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