@extends('frontend.theme4.layouts.default')   
@section('content')
 <!-- Hero/Intro Slider Start -->
        <div class="section ">
            <div class="hero-slider swiper-container slider-nav-style-1 slider-dot-style-1">
                <!-- Hero slider Active -->
                <div class="swiper-wrapper">
                    <!-- Single slider item -->
                    <div class="hero-slide-item slider-height swiper-slide bg-color1" data-bg-image="<?php echo WEBSITE_URL;?>frontassets/theme4/assets/images/hero/bg/hero-bg-1.png">
                        <div class="container h-100">
                            <div class="row h-100">
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 align-self-center sm-center-view">
                                    <div class="hero-slide-content slider-animated-1">
                                        <span class="category">Welcome To Demo Store</span>
                                        <h2 class="title-1">Your Home <br>
                                        Smart Devices & <br>
                                         Best Solution </h2>
                                    
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 d-flex justify-content-center position-relative align-items-end">
                                    <div class="show-case">
                                        <div class="hero-slide-image">
                                            <img src="<?php echo WEBSITE_URL;?>frontassets/theme4/assets/images/hero/inner-img/hero-1-1.png" alt="" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Single slider item -->
                    <div class="hero-slide-item slider-height swiper-slide bg-color1" data-bg-image="<?php echo WEBSITE_URL;?>frontassets/theme4/assets/images/hero/bg/hero-bg-1.png">
                        <div class="container h-100">
                            <div class="row h-100">
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 align-self-center sm-center-view">
                                    <div class="hero-slide-content slider-animated-1">
                                        <span class="category">Welcome To Hmart</span>
                                        <h2 class="title-1">Your Home <br>
                                        Smart Devices & <br>
                                         Best Solution </h2>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 d-flex justify-content-center position-relative align-items-end">
                                    <div class="show-case">
                                        <div class="hero-slide-image">
                                            <img src="<?php echo WEBSITE_URL;?>frontassets/theme4/assets/images/hero/inner-img/hero-1-2.png" alt="" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Add Pagination -->
                <div class="swiper-pagination swiper-pagination-white"></div>
                <!-- Add Arrows -->
                <div class="swiper-buttons">
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
        </div>
        <!-- Hero/Intro Slider End -->
<!-- Product Area Start -->
<div class="product-area pb-100px">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="tab-content mt-60px">
                    <!-- 1st tab start -->
                    <div class="tab-pane fade show active">
                        <div class="row mb-n-30px" id="myList">
                            @if(!empty($seller_products))
                            @foreach($seller_products as $seller_product_val)
                            <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-6 mb-30px">
                                <!-- Single Prodect -->
                                <div class="product">
                                    <span class="badges">
                                        <span class="new">New</span>
                                    </span>
                                    <div class="thumb">
                                        <a href="{{ url('/').'/'.$shopid. '/single-product-detail/' . $seller_product_val->id }}" class="image">
                                            <img src="{{ PRODUCT_URL.$seller_product_val->image}}" alt="Product" />
                                            <img class="hover-image" src="{{ PRODUCT_URL.$seller_product_val->image}}" alt="Product" />
                                        </a>
                                    </div>
                                    <div class="content">
                                        <h5 class="title"><a href="{{ url('/').'/'.$shopid. '/single-product-detail/' . $seller_product_val->id }}">{{isset($seller_product_val->name)?$seller_product_val->name:''}}
                                            </a>
                                        </h5>
                                        <span class="price">
                                            <span class="new">₹{{isset($seller_product_val->discount_price)?$seller_product_val->discount_price:''}}</span>
                                        </span>
                                    </div>
                                    <div class="actions">
                                        <button title="Add To Cart" class="action" onclick="return add_to_cart(this);" data-id="{{ $seller_product_val->id}}"><i class="fa fa-shopping-basket" aria-hidden="true"></i></button>
                                        <button class="action wishlist add_to_wishlist" title="Wishlist" onclick="return add_to_wishlist(this);" data-id="{{ $seller_product_val->id}}"><i class="fa fa-heart-o" aria-hidden="true"></i></button>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            @endif
                        </div>
                        @if(!empty($seller_products) &&  count($seller_products)>8)
                        <div class="products-footer tc mt__40 loadall" >
                            <a class="se_cat_lm pr nt_cat_lm button button_default br_rd_true btn_icon_false" id="loadMore" href="#">Load More</a>
                        </div>
                        @endif
                       
                    </div>
                    <!-- 1st tab end -->
                    
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Product Area End -->
 
@endsection