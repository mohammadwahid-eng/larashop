@extends('layouts.guest')

@section('title')
	{{ __("Shop") }}
@endsection

@section('content')
	<div class="container">
		<div class="row">
			<!--Sidebar-->
			<div class="col-12 col-sm-12 col-md-3 col-lg-3 sidebar filterbar">
				<div class="closeFilter d-block d-md-none d-lg-none"><i class="icon icon anm anm-times-l"></i></div>
				<div class="sidebar_tags">
					<!--Categories-->
					<div class="sidebar_widget categories filter-widget">
						<div class="widget-title">
							<h2>Categories</h2>
						</div>
						<div class="widget-content">
							<ul class="sidebar_categories">
								<li class="level1 sub-level">
									<a href="#;" class="site-nav">Clothing</a>
									<ul class="sublinks">
										<li class="level2"><a href="#;" class="site-nav">Men</a></li>
									</ul>
								</li>
								<li class="lvl-1"><a href="#;" class="site-nav">Shoes</a></li>
							</ul>
						</div>
					</div>
					<!--Categories-->
					<!--Price Filter-->
					<div class="sidebar_widget filterBox filter-widget">
						<div class="widget-title">
							<h2>Price</h2>
						</div>
						<form action="#" method="post" class="price-filter">
							<div id="slider-range" class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all">
								<div class="ui-slider-range ui-widget-header ui-corner-all"></div>
								<span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0"></span>
								<span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0"></span>
							</div>
							<div class="row">
								<div class="col-6">
									<p class="no-margin"><input id="amount" type="text"></p>
								</div>
								<div class="col-6 text-right margin-25px-top">
									<button class="btn btn-secondary btn--small">filter</button>
								</div>
							</div>
						</form>
					</div>
					<!--End Price Filter-->
					<!--Size Swatches-->
					<div class="sidebar_widget filterBox filter-widget size-swacthes">
						<div class="widget-title">
							<h2>Size</h2>
						</div>
						<div class="filter-color swacth-list">
							<ul>
								<li><span class="swacth-btn checked">X</span></li>
								<li><span class="swacth-btn">XL</span></li>
							</ul>
						</div>
					</div>
					<!--End Size Swatches-->
					<!--Color Swatches-->
					<div class="sidebar_widget filterBox filter-widget">
						<div class="widget-title">
							<h2>Color</h2>
						</div>
						<div class="filter-color swacth-list clearfix">
							<span class="swacth-btn black"></span>
							<span class="swacth-btn white checked"></span>
						</div>
					</div>
					<!--End Color Swatches-->
					<!--Brand-->
					<div class="sidebar_widget filterBox filter-widget">
						<div class="widget-title">
							<h2>Brands</h2>
						</div>
						<ul>
							<li>
								<input type="checkbox" value="allen-vela" id="check1">
								<label for="check1"><span><span></span></span>Allen Vela</label>
							</li>
						</ul>
					</div>
					<!--End Brand-->
					<!--Popular Products-->
					<div class="sidebar_widget">
						<div class="widget-title">
							<h2>Popular Products</h2>
						</div>
						<div class="widget-content">
							<div class="list list-sidebar-products">
								<div class="grid">
									<div class="grid__item">
										<div class="mini-list-item">
											<div class="mini-view_image">
												<a class="grid-view-item__link" href="#">
												<img class="grid-view-item__image" src="{{ asset('themes/frontend/images/product-images/mini-product-img.jpg') }}" alt="" />
												</a>
											</div>
											<div class="details">
												<a class="grid-view-item__title" href="#">Cena Skirt</a>
												<div class="grid-view-item__meta"><span class="product-price__price"><span class="money">$173.60</span></span></div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!--End Popular Products-->
					<!--Product Tags-->
					<div class="sidebar_widget">
						<div class="widget-title">
							<h2>Product Tags</h2>
						</div>
						<div class="widget-content">
							<ul class="product-tags">
								<li><a href="#" title="Show products matching tag $100 - $400">$100 - $400</a></li>
								<li><a href="#" title="Show products matching tag Blue">Blue</a></li>
							</ul>
							<span class="btn btn--small btnview">View all</span> 
						</div>
					</div>
					<!--end Product Tags-->
				</div>
			</div>
			<!--End Sidebar-->
			<!--Main Content-->
			<div class="col-12 col-sm-12 col-md-9 col-lg-9 main-col">
				<div class="category-description">
					<h3>Category Description</h3>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing.</p>
					<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source.</p>
				</div>
				<hr>
				<div class="productList product-load-more">
					<!--Toolbar-->
					<button type="button" class="btn btn-filter d-block d-md-none d-lg-none"> Product Filters</button>
					<div class="toolbar">
						<div class="filters-toolbar-wrapper">
							<div class="row">
								<div class="col-4 col-md-4 col-lg-4 filters-toolbar__item collection-view-as d-flex justify-content-start align-items-center">
									<a href="shop-left-sidebar.html" title="Grid View" class="change-view change-view--active">
									<img src="{{ asset('themes/frontend/images/grid.jpg') }}" alt="Grid" />
									</a>
									<a href="shop-listview.html" title="List View" class="change-view">
									<img src="{{ asset('themes/frontend/images/list.jpg') }}" alt="List" />
									</a>
								</div>
								<div class="col-4 col-md-4 col-lg-4 text-center filters-toolbar__item filters-toolbar__item--count d-flex justify-content-center align-items-center">
									<span class="filters-toolbar__product-count">Showing: 22</span>
								</div>
								<div class="col-4 col-md-4 col-lg-4 text-right">
									<div class="filters-toolbar__item">
										<label for="SortBy" class="hidden">Sort</label>
										<select name="SortBy" id="SortBy" class="filters-toolbar__input filters-toolbar__input--sort">
											<option value="title-ascending" selected="selected">Sort</option>
											<option>Best Selling</option>
											<option>Alphabetically, A-Z</option>
											<option>Alphabetically, Z-A</option>
											<option>Price, low to high</option>
											<option>Price, high to low</option>
											<option>Date, new to old</option>
											<option>Date, old to new</option>
										</select>
										<input class="collection-header__default-sort" type="hidden" value="manual">
									</div>
								</div>
							</div>
						</div>
					</div>
					<!--End Toolbar-->
					<div class="grid-products grid--view-items">
						<div class="row">
							<div class="col-6 col-sm-6 col-md-4 col-lg-3 item">
								<!-- start product image -->
								<div class="product-image">
									<!-- start product image -->
									<a href="#">
										<!-- image -->
										<img class="primary blur-up lazyload" data-src="{{ asset('themes/frontend/images/product-images/product-image26.jpg') }}" src="{{ asset('themes/frontend/images/product-images/product-image26.jpg') }}" alt="image" title="product" />
										<!-- End image -->
										<!-- Hover image -->
										<img class="hover blur-up lazyload" data-src="{{ asset('themes/frontend/images/product-images/product-image26-1.jpg') }}" src="{{ asset('themes/frontend/images/product-images/product-image26-1.jpg') }}" alt="image" title="product" />
										<!-- End hover image -->
									</a>
									<!-- end product image -->
									<!-- Start product button -->
									<form class="variants add" action="#" onclick="window.location.href='cart.html'"method="post">
										<button class="btn btn-addto-cart" type="button">Add to cart</button>
									</form>
									<div class="button-set">
										<a href="javascript:void(0)" title="Quick View" class="quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
										<i class="icon anm anm-search-plus-r"></i>
										</a>
										<div class="wishlist-btn">
											<a class="wishlist add-to-wishlist" href="#" title="Add to Wishlist">
											<i class="icon anm anm-heart-l"></i>
											</a>
										</div>
										<div class="compare-btn">
											<a class="compare add-to-compare" href="compare.html" title="Add to Compare">
											<i class="icon anm anm-random-r"></i>
											</a>
										</div>
									</div>
									<!-- end product button -->
								</div>
								<!-- end product image -->
								<!--start product details -->
								<div class="product-details text-center">
									<!-- product name -->
									<div class="product-name">
										<a href="#">A-Line Jacket</a>
									</div>
									<!-- End product name -->
									<!-- product price -->
									<div class="product-price">
										<span class="price">$698.60</span>
									</div>
									<!-- End product price -->
									<div class="product-review">
										<i class="font-13 fa fa-star-o"></i>
										<i class="font-13 fa fa-star-o"></i>
										<i class="font-13 fa fa-star-o"></i>
										<i class="font-13 fa fa-star-o"></i>
										<i class="font-13 fa fa-star-o"></i>
									</div>
								</div>
								<!-- End product details -->
							</div>
						</div>
					</div>
				</div>
				<div class="infinitpaginOuter">
					<div class="infinitpagin">	
						<a href="#" class="btn loadMore">Load More</a>
					</div>
				</div>
			</div>
			<!--End Main Content-->
		</div>
	</div>
@endsection