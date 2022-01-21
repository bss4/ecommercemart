@extends('frontend.theme2.layouts.default')   
@section('content')

<!-- SLIDER AREA START (slider-3) -->
<div class="ltn__slider-area ltn__slider-3  section-bg-1">
    <div class="ltn__slide-one-active slick-slide-arrow-1 slick-slide-dots-1">
        <!-- ltn__slide-item -->
        <div class="ltn__slide-item ltn__slide-item-2 ltn__slide-item-3">
            <div class="ltn__slide-item-inner">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 align-self-center">
                            <div class="slide-item-info">
                                <div class="slide-item-info-inner ltn__slide-animation">
                                    <div class="slide-video mb-50 d-none">
                                        <a class="ltn__video-icon-2 ltn__video-icon-2-border" href="https://www.youtube.com/embed/tlThdr3O5Qo" data-rel="lightcase:myCollection">
                                            <i class="fa fa-play"></i>
                                        </a>
                                    </div>
                                    <h6 class="slide-sub-title animated"><img src="<?php echo WEBSITE_URL;?>frontassets/theme2/img/icons/icon-img/1.png" alt="#"> 100% genuine Products</h6>
                                    <h1 class="slide-title animated ">Tasty & Healthy <br>  Organic Food</h1>
                                    <div class="slide-brief animated d-none">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
                                    </div>
                                   
                                </div>
                            </div>
                            <div class="slide-item-img">
                                <img src="<?php echo WEBSITE_URL;?>frontassets/theme2/img/slider/23.png" alt="#">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ltn__slide-item -->
        <div class="ltn__slide-item ltn__slide-item-2 ltn__slide-item-3">
            <div class="ltn__slide-item-inner  text-right">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 align-self-center">
                            <div class="slide-item-info">
                                <div class="slide-item-info-inner ltn__slide-animation">
                                    <h6 class="slide-sub-title animated"><img src="<?php echo WEBSITE_URL;?>frontassets/theme2/img/icons/icon-img/1.png" alt="#"> 100% genuine Products</h6>
                                    <h1 class="slide-title animated ">Our Garden's  Most <br>   Favorite Food</h1>
                                    <div class="slide-brief animated">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
                                    </div>
                                 
                                </div>
                            </div>
                            <div class="slide-item-img slide-img-left">
                                <img src="<?php echo WEBSITE_URL;?>frontassets/theme2/img/slider/21.png" alt="#">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--  -->
    </div>
</div>
<!-- SLIDER AREA END -->

<!-- PRODUCT AREA START (product-item-3) -->
<div class="ltn__product-area ltn__product-gutter pt-40 pb-40">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title-area ltn__section-title-2 text-center">
                    <h1 class="section-title">Our Products</h1>
                </div>
            </div>
        </div>
        <div class="row ltn__tab-product-slider-one-active--- slick-arrow-1" id="myList">
             @if(!empty($seller_products))
            @foreach($seller_products as $seller_product_val)
            <!-- ltn__product-item -->
            <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                <div class="ltn__product-item ltn__product-item-3 text-left">
                    <div class="product-img">
                        <a href="{{ url('/').'/'.$shopid. '/single-product-detail/' . $seller_product_val->id }}"><img src="{{ PRODUCT_URL.$seller_product_val->image}}" alt="#"></a>
                        <div class="product-badge">
                            <ul>
                                <li class="sale-badge">New</li>
                            </ul>
                        </div>
                        <div class="product-hover-action">
                            <ul>
                                <li>
                                    <a href="#" title="Quick View" data-toggle="modal" data-target="#quick_view_modal" onclick="return quickview(<?php echo $seller_product_val->id;?>)" data-product-id="{{$seller_product_val->id}}">
                                        <i class="far fa-eye"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" title="Add to Cart" onclick="return add_to_cart(this)" data-id="{{ $seller_product_val->id}}">
                                        <i class="fas fa-shopping-cart"></i>
                                    </a>
                                </li>                                    
                            </ul>
                        </div>
                    </div>
                    <div class="product-info">
                        <div class="product-ratting">
                            <ul>
                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                <li><a href="#"><i class="far fa-star"></i></a></li>
                            </ul>
                        </div>
                        <h2 class="product-title"><a href="{{ url('/').'/'.$shopid. '/single-product-detail/' . $seller_product_val->id }}">{{isset($seller_product_val->name)?$seller_product_val->name:''}}</a></h2>
                        <h2 class="product-title"><a href="{{ url('/').'/'.$shopid. '/single-product-detail/' . $seller_product_val->id }}">{{isset($seller_product_val->unit)?$seller_product_val->unit:''}}</a></h2>
                        <div class="product-price">
                            <span>₹{{isset($seller_product_val->discount_price)?$seller_product_val->discount_price:''}}</span>
                            <del>₹{{isset($seller_product_val->price)?$seller_product_val->price:''}}</del>
                            
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            @endif
        </div>
        @if(!empty($seller_products) && count($seller_products)>8)
        <div class="loadall">
        <div class="products-footer tc mt__40" >
            <a class="se_cat_lm pr nt_cat_lm button button_default br_rd_true btn_icon_false" id="loadMore" href="#">Load More</a>
        </div>
        </div>
        @endif
    </div>
</div>
<!-- PRODUCT AREA END -->

@endsection