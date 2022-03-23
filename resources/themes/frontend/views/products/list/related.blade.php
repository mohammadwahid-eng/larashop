<!--Related Product Slider-->
<div class="related-product grid-products">
    <header class="section-header">
        <h2 class="section-header__title text-center h2"><span>Related Products</span></h2>
        <p class="sub-heading">You can stop autoplay, increase/decrease aniamtion speed and number of grid to show and products from store admin.</p>
    </header>
    <div class="productPageSlider">
        <div class="col-12 item">
            <!-- start product image -->
            <div class="product-image">
                <!-- start product image -->
                <a href="#">
                    <!-- image -->
                    <img class="primary blur-up lazyload" data-src="{{ asset('themes/frontend/images/product-images/product-image1.jpg') }}" src="{{ asset('themes/frontend/images/product-images/product-image1.jpg') }}" alt="image" title="product">
                    <!-- End image -->
                    <!-- Hover image -->
                    <img class="hover blur-up lazyload" data-src="{{ asset('themes/frontend/images/product-images/product-image1-1.jpg') }}" src="{{ asset('themes/frontend/images/product-images/product-image1-1.jpg') }}" alt="image" title="product">
                    <!-- End hover image -->
                    <!-- product label -->
                    <div class="product-labels rectangular"><span class="lbl on-sale">-16%</span> <span class="lbl pr-label1">new</span></div>
                    <!-- End product label -->
                </a>
                <!-- end product image -->

                <!-- Start product button -->
                <form class="variants add" action="#" onclick="window.location.href='cart.html'"method="post">
                    <button class="btn btn-addto-cart" type="button" tabindex="0">Select Options</button>
                </form>
                <div class="button-set">
                    <a href="#" title="Quick View" class="quick-view" tabindex="0">
                        <i class="icon anm anm-search-plus-r"></i>
                    </a>
                    <div class="wishlist-btn">
                        <a class="wishlist add-to-wishlist" href="wishlist.html">
                            <i class="icon anm anm-heart-l"></i>
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
                    <a href="#">Edna Dress</a>
                </div>
                <!-- End product name -->
                <!-- product price -->
                <div class="product-price">
                    <span class="old-price">$500.00</span>
                    <span class="price">$600.00</span>
                </div>
                <!-- End product price -->
                
                <div class="product-review">
                    <i class="font-13 fa fa-star"></i>
                    <i class="font-13 fa fa-star"></i>
                    <i class="font-13 fa fa-star"></i>
                    <i class="font-13 fa fa-star-o"></i>
                    <i class="font-13 fa fa-star-o"></i>
                </div>
                <!-- Variant -->
                <ul class="swatches">
                    <li class="swatch medium rounded"><img src="{{ asset('themes/frontend/images/product-images/variant1.jpg') }}" alt="image" /></li>
                    <li class="swatch medium rounded"><img src="{{ asset('themes/frontend/images/product-images/variant2.jpg') }}" alt="image" /></li>
                    <li class="swatch medium rounded"><img src="{{ asset('themes/frontend/images/product-images/variant3.jpg') }}" alt="image" /></li>
                    <li class="swatch medium rounded"><img src="{{ asset('themes/frontend/images/product-images/variant4.jpg') }}" alt="image" /></li>
                    <li class="swatch medium rounded"><img src="{{ asset('themes/frontend/images/product-images/variant5.jpg') }}" alt="image" /></li>
                    <li class="swatch medium rounded"><img src="{{ asset('themes/frontend/images/product-images/variant6.jpg') }}" alt="image" /></li>
                </ul>
                <!-- End Variant -->
            </div>
            <!-- End product details -->
        </div>
    </div>
</div>
<!--End Related Product Slider-->