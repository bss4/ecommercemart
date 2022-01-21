@extends('frontend.theme4.layouts.default')   
@section('content')
<!-- breadcrumb-area start -->
<div class="breadcrumb-area">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-12 text-center">
                <h2 class="breadcrumb-title">Single Product</h2>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb-area end -->
<!-- Product Details Area Start -->
<div class="product-details-area pt-100px pb-100px">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-sm-12 col-xs-12 mb-lm-30px mb-md-30px mb-sm-30px">
                <!-- Swiper -->
                <div class="swiper-container zoom-top">
                    <div class="swiper-wrapper">
                        @if($product_data->product_image)
                        @foreach($product_data->product_image as $prod_img_val)
                        <div class="swiper-slide">
                            <img class="img-responsive m-auto" src="{{ PRODUCT_URL.$prod_img_val['image']}}" alt="">
                        </div>
                           @endforeach
                        @endif
                    </div>
                </div>
                <div class="swiper-container mt-20px zoom-thumbs slider-nav-style-1 small-nav">
                    <div class="swiper-wrapper">
                        @if($product_data->product_image)
                        @foreach($product_data->product_image as $prod_img_val)
                        <div class="swiper-slide">
                            <img class="img-responsive m-auto" src="{{ PRODUCT_URL.$prod_img_val['image']}}" alt="">
                        </div>
                           @endforeach
                        @endif
                       
                    </div>
                    <!-- Add Arrows -->
                    <div class="swiper-buttons">
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-sm-12 col-xs-12" data-aos="fade-up" data-aos-delay="200">
                <div class="product-details-content quickview-content ml-25px">
                    <h2>{{ isset($product_data->name)?$product_data->name:'' }}</h2>
                    <div class="pricing-meta">
                        <ul class="d-flex">
                            <li class="new-price">₹{{ isset($product_data->discount_price)?$product_data->discount_price:'' }}</li>
                        </ul>
                    </div>
                    
                    <p class="mt-30px">{{ isset($product_data->description)?$product_data->description:'' }}</p>
                    
                    <div class="pro-details-categories-info pro-details-same-style d-flex m-0">
                        <span>SKU:</span>
                        <ul class="d-flex">
                            <li>
                               {{isset($product_data->sku)?$product_data->sku:''}}
                            </li>
                        </ul>
                    </div>
                   
                    <div class="pro-details-quality">
                        <div class="cart-plus-minus">
                            <input class="cart-plus-minus-box qty_pr_js qty_cart_js" type="text" name="qtybutton" value="1" />
                        </div>
                        <div class="pro-details-cart">
                            <button class="add-cart" onclick="return add_to_cart(this);" data-id="{{$product_data->id}}"> Add To
                                Cart</button>
                        </div>
                        <div class="pro-details-compare-wishlist pro-details-wishlist ">
                            <a href="#"  onclick="return add_to_wishlist(this);" data-id="{{$product_data->id}}"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
                <!-- product details description area start -->
                <div class="description-review-wrapper">
                    <div class="description-review-topbar nav">
                        <button data-bs-toggle="tab" data-bs-target="#des-details2">Information</button>
                        <button class="active" data-bs-toggle="tab" data-bs-target="#des-details1">Description</button>
                    </div>
                    <div class="tab-content description-review-bottom">
                        <div id="des-details2" class="tab-pane">
                            <div class="product-anotherinfo-wrapper text-start">
                                <ul>
                                    <li><span>Name</span> {{ isset($product_data->name)?$product_data->name:'' }}</li>
                                    <li><span>SKU</span>{{ isset($product_data->sku)?$product_data->sku:'' }}</li>
                                    <li><span>Price</span>₹{{ isset($product_data->discount_price)?$product_data->discount_price:'' }}</li>
                                    
                                </ul>
                            </div>
                        </div>
                        <div id="des-details1" class="tab-pane active">
                            <div class="product-description-wrapper">
                                {{ isset($product_data->description)?$product_data->description:'' }}
                            </div>
                        </div>
                        <div id="des-details3" class="tab-pane">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="review-wrapper">
                                        <div class="single-review">
                                            <div class="review-img">
                                                <img src="assets/images/review-image/1.png" alt="" />
                                            </div>
                                            <div class="review-content">
                                                <div class="review-top-wrap">
                                                    <div class="review-left">
                                                        <div class="review-name">
                                                            <h4>White Lewis</h4>
                                                        </div>
                                                        <div class="rating-product">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                    </div>
                                                    <div class="review-left">
                                                        <a href="#">Reply</a>
                                                    </div>
                                                </div>
                                                <div class="review-bottom">
                                                    <p>
                                                        Vestibulum ante ipsum primis aucibus orci luctustrices posuere
                                                        cubilia Curae Suspendisse viverra ed viverra. Mauris ullarper
                                                        euismod vehicula. Phasellus quam nisi, congue id nulla.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single-review child-review">
                                            <div class="review-img">
                                                <img src="assets/images/review-image/2.png" alt="" />
                                            </div>
                                            <div class="review-content">
                                                <div class="review-top-wrap">
                                                    <div class="review-left">
                                                        <div class="review-name">
                                                            <h4>White Lewis</h4>
                                                        </div>
                                                        <div class="rating-product">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                    </div>
                                                    <div class="review-left">
                                                        <a href="#">Reply</a>
                                                    </div>
                                                </div>
                                                <div class="review-bottom">
                                                    <p>Vestibulum ante ipsum primis aucibus orci luctustrices posuere
                                                        cubilia Curae Sus pen disse viverra ed viverra. Mauris ullarper
                                                        euismod vehicula.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- product details description area end -->
            </div>
        </div>
    </div>
</div>
<!-- Product Area Start -->
<div class="product-area related-product">
    <div class="container">
        <!-- Section Title & Tab Start -->
        <div class="row">
            <div class="col-12">
                <div class="section-title text-center m-0">
                    <h2 class="title">Related Products</h2>
                </div>
            </div>
        </div>
        <!-- Section Title & Tab End -->
        <div class="row">
            <div class="col">
                <div class="new-product-slider swiper-container slider-nav-style-1">
                    <div class="swiper-wrapper">
                        @if(!empty($product_like))
                            @foreach($product_like as $product_val)
                        <div class="swiper-slide">
                            <!-- Single Prodect -->
                            <div class="product">
                                <span class="badges">
                                <span class="new">New</span>
                                </span>
                                <div class="thumb">
                                    <a href="{{ url('/').'/'.$shopid. '/single-product-detail/' . $product_val->id }}" class="image">
                                        <img src="{{ isset($product_val->image)?PRODUCT_URL.$product_val->image:'' }}" alt="Product" />
                                        <img class="hover-image" src="{{ isset($product_val->image)?PRODUCT_URL.$product_val->image:'' }}" alt="Product" />
                                    </a>
                                </div>
                                <div class="content">
                                  
                                    <h5 class="title"><a href="{{ url('/').'/'.$shopid. '/single-product-detail/' . $product_val->id }}">{{ isset($product_val->name)?$product_val->name:'' }}
                                        </a>
                                    </h5>
                                    <span class="price">
                                    <span class="new">₹{{ isset($product_val->discount_price)?$product_val->discount_price:'' }}</span>
                                    </span>
                                </div>
                                <div class="actions">
                                        <button title="Add To Cart" class="action add-to-cart" onclick="return add_to_cart(this);" data-id="{{$product_val->id}}"><i class="fa fa-shopping-basket" aria-hidden="true"></i></button>
                                        <button class="action wishlist" title="Wishlist"  onclick="return add_to_wishlist(this);" data-id="{{$product_data->id}}"><i class="fa fa-heart-o" aria-hidden="true"></i></button>
                                                                                  
                                    </div>
                            </div>
                        </div>
                        @endforeach
                            @endif
                     
                    </div>
                    <!-- Add Arrows -->
                    <div class="swiper-buttons">
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Product Area End -->
@endsection