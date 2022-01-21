@extends('frontend.theme3.layouts.default')   
@section('content')
<section class="space-bottom-3">
    <div class="bg-gray-200 space-2 space-lg-0 bg-img-hero" style="background-image: url(<?php echo WEBSITE_URL;?>frontassets/theme3/assets/img/1920x588/img1.jpg);">
        <div class="container">
            <div class="js-slick-carousel u-slick" data-pagi-classes="text-center u-slick__pagination position-absolute right-0 left-0 mb-n8 mb-lg-4 bottom-0">
                <div class="js-slide">
                    <div class="hero row min-height-588 align-items-center">
                        <div class="col-lg-7 col-wd-6 mb-4 mb-lg-0">
                            <div class="media-body mr-wd-4 align-self-center mb-4 mb-md-0">
                                <p class="hero__pretitle text-uppercase font-weight-bold text-gray-400 mb-2" data-scs-animation-in="fadeInUp" data-scs-animation-delay="200">The Bookworm Editors'</p>
                                <h2 class="hero__title font-size-14 mb-4" data-scs-animation-in="fadeInUp" data-scs-animation-delay="300">
                                    <span class="hero__title-line-1 font-weight-regular d-block">Featured Books of the</span>
                                    <span class="hero__title-line-2 font-weight-bold d-block">February</span>
                                </h2>
                            </div>
                        </div>
                        <div class="col-lg-5 col-wd-6" data-scs-animation-in="fadeInRight" data-scs-animation-delay="500">
                            <img class="img-fluid" src="<?php echo WEBSITE_URL;?>frontassets/theme3/assets/img/banner-img1.png" alt="image-description">
                        </div>
                    </div>
                </div>
                <div class="js-slide">
                    <div class="hero row min-height-588 align-items-center">
                        <div class="col-lg-7 col-wd-6 mb-4 mb-lg-0">
                            <div class="media-body mr-wd-4 align-self-center mb-4 mb-md-0">
                                <p class="hero__pretitle text-uppercase font-weight-bold text-gray-400 mb-2" data-scs-animation-in="fadeInUp" data-scs-animation-delay="200">The Bookworm Editors'</p>
                                <h2 class="hero__title font-size-14 mb-4" data-scs-animation-in="fadeInUp" data-scs-animation-delay="300">
                                    <span class="hero__title-line-1 font-weight-regular d-block">Featured Books of the</span>
                                    <span class="hero__title-line-2 font-weight-bold d-block">February</span>
                                </h2>
                            </div>
                        </div>
                        <div class="col-lg-5 col-wd-6" data-scs-animation-in="fadeInRight" data-scs-animation-delay="500">
                            <img class="img-fluid" src="<?php echo WEBSITE_URL;?>frontassets/theme3/assets/img/banner-img1.png" alt="image-description">
                        </div>
                    </div>
                </div>
                <div class="js-slide">
                    <div class="hero row min-height-588 align-items-center">
                        <div class="col-lg-7 col-wd-6 mb-4 mb-lg-0">
                            <div class="media-body mr-wd-4 align-self-center mb-4 mb-md-0">
                                <p class="hero__pretitle text-uppercase font-weight-bold text-gray-400 mb-2" data-scs-animation-in="fadeInUp" data-scs-animation-delay="200">The Bookworm Editors'</p>
                                <h2 class="hero__title font-size-14 mb-4" data-scs-animation-in="fadeInUp" data-scs-animation-delay="300">
                                    <span class="hero__title-line-1 font-weight-regular d-block">Featured Books of the</span>
                                    <span class="hero__title-line-2 font-weight-bold d-block">February</span>
                                </h2>
                            </div>
                        </div>
                        <div class="col-lg-5 col-wd-6" data-scs-animation-in="fadeInRight" data-scs-animation-delay="500">
                            <img class="img-fluid" src="<?php echo WEBSITE_URL;?>frontassets/theme3/assets/img/banner-img1.png" alt="image-description">
                        </div>
                    </div>
                </div>
                <div class="js-slide">
                    <div class="hero row min-height-588 align-items-center">
                        <div class="col-lg-7 col-wd-6 mb-4 mb-lg-0">
                            <div class="media-body mr-wd-4 align-self-center mb-4 mb-md-0">
                                <p class="hero__pretitle text-uppercase font-weight-bold text-gray-400 mb-2" data-scs-animation-in="fadeInUp" data-scs-animation-delay="200">The Bookworm Editors'</p>
                                <h2 class="hero__title font-size-14 mb-4" data-scs-animation-in="fadeInUp" data-scs-animation-delay="300">
                                    <span class="hero__title-line-1 font-weight-regular d-block">Featured Books of the</span>
                                    <span class="hero__title-line-2 font-weight-bold d-block">February</span>
                                </h2>
                            </div>
                        </div>
                        <div class="col-lg-5 col-wd-6" data-scs-animation-in="fadeInRight" data-scs-animation-delay="500">
                            <img class="img-fluid" src="<?php echo WEBSITE_URL;?>frontassets/theme3/assets/img/banner-img1.png" alt="image-description">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="space-bottom-3 banner-with-product">
	<div class="container">
		<div class="col-xl-12" id="myList">
		    <header class="d-md-flex justify-content-between align-items-center mb-5">
                <h2 class="font-size-7 mb-0">Latest Books</h2>
            </header>
			<ul class="products list-unstyled row no-gutters row-cols-2 row-cols-lg-3 row-cols-wd-4 border-top border-left my-0">
			    @if(!empty($seller_products))
                 @foreach($seller_products as $seller_product_val)
				<li class="product col">
					<div class="product__inner overflow-hidden p-3 p-md-4d875">
						<div class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
							<div class="woocommerce-loop-product__thumbnail">
							    <a href="{{ url('/').'/'.$shopid. '/single-product-detail/' . $seller_product_val->id }}" class="d-block"><img src="{{ PRODUCT_URL.$seller_product_val->image}}" class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid" alt=""></a>
							</div>
							<div class="woocommerce-loop-product__body product__body pt-3 bg-white">
							
								<h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark">
							        <a href="{{ url('/').'/'.$shopid. '/single-product-detail/' . $seller_product_val->id }}">{{isset($seller_product_val->name)?$seller_product_val->name:''}}</a>
							    </h2>
								<div class="price d-flex align-items-center font-weight-medium font-size-3">
								    <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">₹</span>{{isset($seller_product_val->discount_price)?$seller_product_val->discount_price:''}}</span>
								</div>
							</div>
							<div class="product__hover d-flex align-items-center">
							    <a href="#" class="text-uppercase text-dark h-dark add_to_cart font-weight-medium mr-auto" onclick="return add_to_cart(this);" data-id="{{ $seller_product_val->id}}">
                                    <span>Add To Cart</span>
                                </a>
                                <a href="#" class="h-p-bg btn btn-outline-dark border-0 add_to_wishlist" onclick="return add_to_wishlist(this);" data-id="{{ $seller_product_val->id}}">
                                    <i class="flaticon-heart"></i>
                                </a>
							</div>
						</div>
					</div>
				</li>
				@endforeach
                @endif
			</ul>
		</div>
        @if(!empty($seller_products) && count($seller_products)>8)
	 <div class="loadall">
            <div class="products-footer tc mt__40" >
                <a class="se_cat_lm pr nt_cat_lm button button_default br_rd_true btn_icon_false" id="loadMore" href="#">Load More</a>
            </div>
       
        </div> 
        @endif
	</div>
</section>
@endsection