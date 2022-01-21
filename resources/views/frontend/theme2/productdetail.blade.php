@extends('frontend.theme2.layouts.default')   
@section('content')
<!-- BREADCRUMB AREA START -->
<div class="ltn__breadcrumb-area ltn__breadcrumb-area-3 ltn__breadcrumb-color-white bg-overlay-theme-black-90 bg-image plr--9---" data-bg="<?php echo WEBSITE_URL;?>frontassets/theme2/img/bg/9.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="ltn__breadcrumb-inner ltn__breadcrumb-inner-2 justify-content-between">
                    <div class="section-title-area ltn__section-title-2">
                        <h1 class="section-title white-color">Product Details</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- BREADCRUMB AREA END -->
<!-- SHOP DETAILS AREA START -->
<input type="hidden" value="{{ $product_data->id }}" id="productid">
<div class="ltn__shop-details-area pb-20">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12 col-lg-offset-4">
                <div class="ltn__shop-details-inner mb-60">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="ltn__shop-details-img-gallery">
                                <div class="ltn__shop-details-large-img">
                                   @if($product_data->product_image)
                                    @foreach($product_data->product_image as $prod_img_val)
                                    <div class="single-large-img">
                                        <a href="{{ PRODUCT_URL.$prod_img_val['image']}}" data-rel="lightcase:myCollection">
                                            <img src="{{ PRODUCT_URL.$prod_img_val['image']}}" alt="Image">
                                        </a>
                                    </div>
                                    @endforeach
                                    @endif
                                    
                                </div>
                                <div class="ltn__shop-details-small-img slick-arrow-2">
                                    @if($product_data->product_image)
                                    @foreach($product_data->product_image as $prod_img_val)
                                    <div class="single-small-img">
                                        <img src="{{ PRODUCT_URL.$prod_img_val['image']}}" alt="Image">
                                    </div>
                                    @endforeach
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="modal-product-info shop-details-info pl-0">
                                <h3>{{ isset($product_data->name)?$product_data->name:'' }}</h3>
                                <h3>{{ isset($product_data->unit)?$product_data->unit:'' }}</h3>
                                <div class="product-price">
                                    <span>₹{{$product_data->discount_price }}</span>
                                    <del>₹{{$product_data->price }}</del>
                                </div>
                                <div class="modal-product-meta ltn__product-details-menu-1">
                                    {{$product_data->description }}
                                </div>
                                <div class="ltn__product-details-menu-2">
                                    <ul>
                                        <li>
                                            <div class="cart-plus-minus">
                                                <input type="text" min='1' value="1" name="qtybutton" class="cart-plus-minus-box">
                                            </div>
                                        </li>
                                        <li>
                                            <a href="#" class="theme-btn-1 btn btn-effect-1 add_to_cart" title="Add to Cart"  onclick="return add_to_cart(this);" data-id="{{$product_data->id }}">
                                                <i class="fas fa-shopping-cart"></i>
                                                <span>ADD TO CART</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--<div class="col-lg-4">-->
            <!--    <aside class="sidebar ltn__shop-sidebar ltn__right-sidebar">-->
            <!--        <div class="widget ltn__banner-widget">-->
            <!--            <img src="<?php echo WEBSITE_URL;?>frontassets/theme2/img/banner/2.jpg" alt="#">-->
            <!--        </div>-->
            <!--    </aside>-->
            <!--</div>-->
            <div class="row">
                <div class="col-lg-12">
                    <!-- Shop Tab Start -->
                <div class="ltn__shop-details-tab-inner ltn__shop-details-tab-inner-2">
                    <div class="ltn__shop-details-tab-menu">
                        <div class="nav">
                           <b>Description</b>
                        </div>
                    </div>
                    <div class="tab-content">
                        <div class="ltn__shop-details-tab-content-inner">
                               {{$product_data->description }}
                            </div>
                    </div>
                </div>
                <!-- Shop Tab End -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- SHOP DETAILS AREA END -->
@endsection