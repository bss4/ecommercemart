<!DOCTYPE html>
<html lang="zxx" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ sellerdetails($shopid)->stores->name }}</title>
    <?php 
     cartsession($shopid);
     wishlistsession($shopid);
    ?> 
    <meta name="robots" content="index, follow" />
    <meta name="description" content="">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo WEBSITE_URL;?>frontassets/theme4/assets/images/favicon.ico" />
    
    <!-- CSS -->
    <link rel="stylesheet" href="<?php echo WEBSITE_URL;?>frontassets/theme4/assets/css/plugins.min.css">
    <link rel="stylesheet" href="<?php echo WEBSITE_URL;?>frontassets/theme1/assets/css/jquery-ui.css">
    <link rel="stylesheet" href="<?php echo WEBSITE_URL;?>frontassets/theme4/assets/css/style.min.css">
    <link rel="stylesheet" href="<?php echo WEBSITE_URL;?>frontassets/theme4/assets/css/style.css">
    <style type="text/css">
        #myList > div{ display:none;
        }
        #loadMore {
            cursor:pointer;
        }
        #loadMore:hover {
            color:black;
        }
        .loadall {
            display: grid;
        }
        .loadall .products-footer {
            display: flex;
            margin: 0 auto;
        }
        .loadall .products-footer a {
            color: #222;
            border-radius: 40px;
            font-size: 14px;
            font-weight: 600;
            padding: 11px 45px;
            border: 2px solid #222;
            margin-bottom: 10px;
        }
        .loadall .products-footer a:hover {
            background-color: #80b500;
            color: #fff !IMPORTANT;
            border-color: #80b500;
        }
        input.razorpay-payment-button {
            display: none;
        }
    </style>
</head>

<body>
    <input type="hidden" name="app_id" id="app_id" value="{{$shopid}}">
    <input type="hidden" value="{{ url()->current()}}" id="currentpageurl">
    <input type="hidden" value="{{ csrf_token()}}" id="csrf_token_post">
    <input type="hidden" value="{{ PRODUCT_URL }}" id="image_path_url">
    <input type="hidden" value="{{ url('/') }}" id="base_url">
    <div class="main-wrapper">
        <header>
            
            <!-- Header action area start -->
            <div class="header-bottom  d-none d-lg-block">
                <div class="container">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-lg-3 col">
                            <div class="header-logo">
                                <a href="{{route('frontend.index',$shopid)}}"><img src="{{ isset(sellerdetails($shopid)->stores->logo)?STORE_LOGO_URL.sellerdetails($shopid)->stores->logo:''}}" class="header-logo"></a>
                            </div>
                        </div>
                        <div class="col-lg-3 col">
                            <div class="header-actions">
                                <!-- Single Wedge Start -->
                                @if(!empty(Auth::user()->id))
                                <a href="{{route('frontend.wishlist',$shopid)}}" class="header-action-btn">
                                    <i class="fa fa-heart" aria-hidden="true"></i>
                                    <span class="header-action-num wishlist_count">{{  count((array) session('wishlist')) }}</span>
                                </a>
                                @endif
                                @if(Route::currentRouteName()!='frontend.checkout')
                                <!-- Single Wedge End -->
                                <a href="#offcanvas-cart" class="header-action-btn header-action-btn-cart offcanvas-toggle pr-0">
                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                    <span class="header-action-num cart_count">{{  count((array) session('cart')) }}</span>
                                    <!-- <span class="cart-amount">€30.00</span> -->
                                </a>
                                @endif
                                <a href="#offcanvas-mobile-menu" class="header-action-btn header-action-btn-menu offcanvas-toggle d-lg-none">
                                    <i class="fa fa-bars" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Header action area end -->
            <!-- Header action area start -->
            <div class="header-bottom d-lg-none sticky-nav style-1">
                <div class="container">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-lg-3 col">
                            <div class="header-logo">
                                <a href="{{route('frontend.index',$shopid)}}"><img src="{{ isset(sellerdetails($shopid)->stores->logo)?STORE_LOGO_URL.sellerdetails($shopid)->stores->logo:''}}" class="header-logo-hw"></a>
                            </div>
                        </div>
                        <div class="col-lg-6 d-none d-lg-block">
                            <div class="search-element">
                                <form action="#">
                                    <input type="text" placeholder="Search" />
                                    <button><i class="pe-7s-search"></i></button>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-3 col">
                            <div class="header-actions">
                                <!-- Single Wedge Start -->
                                @if(!empty(Auth::user()->id))
                                <a href="{{route('frontend.wishlist',$shopid)}}" class="header-action-btn offcanvas-toggle">
                                    <i class="fa fa-heart" aria-hidden="true"></i>
                                    <span class="header-action-num wishlist_count">{{  count((array) session('wishlist')) }}</span>
                                </a>
                                @endif
                                @if(Route::currentRouteName()!='frontend.checkout')
                                <!-- Single Wedge End -->
                                <a href="#offcanvas-cart" class="header-action-btn header-action-btn-cart offcanvas-toggle pr-0">
                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                    <span class="header-action-num cart_count">{{  count((array) session('cart')) }}</span>
                                    <!-- <span class="cart-amount">€30.00</span> -->
                                </a>
                                @endif
                                <a href="#offcanvas-mobile-menu" class="header-action-btn header-action-btn-menu offcanvas-toggle d-lg-none">
                                   <i class="fa fa-bars" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Header action area end -->
            <!-- header navigation area start -->
            <div class="header-nav-area d-none d-lg-block sticky-nav">
                <div class="container">
                    <div class="header-nav">
                        <div class="main-menu position-relative">
                            <ul>
                                <li class="dropdown"><a href="{{route('frontend.index',$shopid)}}">Home </a></li>
                                
                                <li class="dropdown position-static">
                                    <a href="#">Catalogue <i class="fa fa-angle-down"></i></a>
                                    <ul class="sub-menu">
                                    @if(!empty(menu($shopid)))
                                    @foreach(menu($shopid) as $cat_val)
                                        <li class="dropdown position-static" data-id="{{ $cat_val->id }}"><a href="{{ url('/').'/'.$shopid. '/catalogs/' . $cat_val->id }}" class="dropdown-item link-black-100">{{ $cat_val->name }}</a></li>
                                    @endforeach
                                    @endif
                                    </ul>
                                </li>
                                <li class="dropdown position-static">
                                    <a href="#">Info <i class="fa fa-angle-down"></i></a>
                                    <ul class="sub-menu">
                                      
                                        <li class="dropdown position-static"><a href="{{route('frontend.returnrefund',$shopid)}}" class="dropdown-item link-black-100">Return & Refund Policy</a></li>
                                        <li class="dropdown position-static"><a href="{{route('frontend.privacypolicy',$shopid)}}" class="dropdown-item link-black-100">Privacy Policy</a></li>
                                        <li class="dropdown position-static"><a href="{{route('frontend.paymentpolicy',$shopid)}}" class="dropdown-item link-black-100">Payment Policy</a></li>
                                        <li class="dropdown position-static"><a href="{{route('frontend.shippingpolicy',$shopid)}}" class="dropdown-item link-black-100">Shipping Policy</a></li>
                                        <li class="dropdown position-static"><a href="{{route('frontend.termsconditions',$shopid)}}" class="dropdown-item link-black-100">Terms & Condition</a></li>
                                    </ul>
                                </li>
                                 <li class="dropdown position-static">
                                    <a href="#">Account <i class="fa fa-angle-down"></i></a>
                                    <ul class="sub-menu">
                                        <li class="dropdown position-static"><a href="{{ route('frontend.shoppingcart',$shopid) }}" class="dropdown-item link-black-100">Cart</a></li>
                                        
                                        @if(!empty(Auth::user()->id))
                                         <li class="dropdown position-static"><a href="{{route('frontend.wishlist',$shopid)}}" class="dropdown-item link-black-100">Wishlist</a></li>
                                         <li class="dropdown position-static"><a href="{{ route('frontend.myaccount',$shopid) }}" class="dropdown-item link-black-100">My Account</a></li>
                                         <li class="dropdown position-static"><a href="{{ route('frontlogout',$shopid) }}" class="dropdown-item link-black-100">Logout</a></li>
                                        @else
                                        <li class="dropdown position-static"><a href="{{route('frontend.login',$shopid)}}" class="dropdown-item link-black-100">Login</a></li>
                                        <li class="dropdown position-static"><a href="{{route('frontend.register',$shopid)}}" class="dropdown-item link-black-100">Register</a></li>
                                        @endif
                                    </ul>
                                </li>
                                <li><a href="{{route('frontend.contact',$shopid)}}">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
           
        </header>
        <!-- offcanvas overlay start -->
        <div class="offcanvas-overlay"></div>
        <!-- offcanvas overlay end -->
        
        <!-- OffCanvas Cart Start -->
        <div id="offcanvas-cart" class="offcanvas offcanvas-cart">
            <div class="inner">
                <div class="head">
                    <span class="title">Cart</span>
                    <button class="offcanvas-close">×</button>
                </div>
                <div class="body customScroll">
                    <div id="cart_add_item">
                    </div>

                </div>
                <div class="foot">
                    <div class="total row fl_between al_center">
                    <div class="col-auto"><strong>Subtotal:</strong></div>

                    @php $total = 0 @endphp
                    @if(session('cart'))
                    @foreach(session('cart') as $id => $details)

                        @php $total += $details['price'] * $details['quantity'] @endphp

                    @endforeach
                    @endif
                    <div class="col-auto tr js_cat_ttprice">
                        <div class="cart_tot_price">₹{{$total}}</div>
                    </div>
                </div>
                    <div class="buttons mt-30px">
                        <a href="{{route('frontend.shoppingcart',$shopid)}}" class="btn btn-dark btn-hover-primary mb-30px">view cart</a>
                        <a href="{{route('frontend.checkout',$shopid)}}" class="btn btn-outline-dark current-btn">checkout</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- OffCanvas Cart End -->
        <!-- OffCanvas Menu Start -->
        <div id="offcanvas-mobile-menu" class="offcanvas offcanvas-mobile-menu">
            <button class="offcanvas-close"></button>
            <div class="user-panel">
                <ul>
                    <li><a href="tel:+91 {{ sellerdetails($shopid)->phone }}"><i class="fa fa-phone"></i> +91 {{ sellerdetails($shopid)->phone }}</a></li>
                    <li><a href="mailto:{{ sellerdetails($shopid)->email }}"><i class="fa fa-envelope-o"></i> {{ sellerdetails($shopid)->email }}</a></li>
                   
                </ul>
            </div>
            <div class="inner customScroll">
                <div class="offcanvas-menu mb-4">
                    <ul>
                        <li><a href="{{route('frontend.index',$shopid)}}"><span class="menu-text">Home</span></a>
                        </li>
                        <li><a href="#"><span class="menu-text">Catalogue</span></a>
                            <ul class="sub-menu">
                                @if(!empty(menu($shopid)))
                                    @foreach(menu($shopid) as $cat_val)
                                <li><a href="{{ url('/').'/'.$shopid. '/catalogs/' . $cat_val->id }}">{{ $cat_val->name }}</a>
                                    @endforeach
                                @endif
                            </ul>
                        </li>
                        <li><a href="#"><span class="menu-text">Info</span></a>
                            <ul class="sub-menu">
                            <li><a href="{{route('frontend.returnrefund',$shopid)}}">Return & Refund Policy</a></li>
                            <li><a href="{{route('frontend.privacypolicy',$shopid)}}">Privacy Policy</a></li>
                            <li><a href="{{route('frontend.paymentpolicy',$shopid)}}">Payment Policy</a></li>
                            <li><a href="{{route('frontend.shippingpolicy',$shopid)}}">Shipping Policy</a></li>
                            <li><a href="{{route('frontend.termsconditions',$shopid)}}">Terms & Condition</a></li>
                            </ul>
                        </li>

                        <li><a href="#"><span class="menu-text">Account</span></a>
                            <ul class="sub-menu">
                            <li><a href="{{ route('frontend.shoppingcart',$shopid) }}">Cart</a></li>
                           
                            @if(!empty(Auth::user()->id))
                             <li><a href="{{route('frontend.wishlist',$shopid)}}">Wishlist</a></li>
                             <li><a href="{{ route('frontend.myaccount',$shopid) }}">My Account</a></li>
                             <li><a href="{{ route('frontlogout',$shopid) }}">Logout</a></li>
                             @else
                              <li><a href="{{route('frontend.login',$shopid)}}">Login</a>
                            </li>
                            <li><a href="{{route('frontend.register',$shopid)}}">Register</a></li>
                            @endif
                            </ul>
                        </li>
                        <li><a href="{{route('frontend.contact',$shopid)}}">Contact Us</a></li>
                    </ul>
                </div>
               
            </div>
        </div>
        <!-- OffCanvas Menu End -->
       
        @if(Session::has('error'))
        <div class="alert alert-danger alert-dismissible" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            {{ Session::get('error') }}
        </div>
        @endif
        @if(Session::has('success'))
        <div class="alert alert-success alert-dismissible" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            {{ Session::get('success') }}
        </div>
        @endif
        @if(Session::has('flash_notice'))
        <div class="alert alert-warning alert-dismissible" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            {{ Session::get('flash_notice') }}
        </div>
        {{Session::forget('apartment_added')}}
        @endif
        @yield('content')
        
        <!-- Footer Area Start -->
        <div class="footer-area">
            <div class="footer-container">
                <div class="footer-top">
                    <div class="container">
                        <div class="row">
                            <!-- Start single blog -->
                            <div class="col-md-6 col-lg-3 mb-md-30px mb-lm-30px">
                                <div class="single-wedge">
                                    <div class="footer-logo">
                                        <a href="{{route('frontend.index',$shopid)}}"><img src="{{ isset(sellerdetails($shopid)->stores->logo)?STORE_LOGO_URL.sellerdetails($shopid)->stores->logo:''}}" class="header-logo-footer"></a>
                                    </div>
                                    <div class="widget_footer newl_des_1 footer-newsletter-section">
                                    <h3 class="widget-title fwsb flex al_center fl_between fs__16 mg__0 mb__10">
                                    <span class="txt_title">Newsletter Signup</span>
                                </h3>
                                    <p>Subscribe to our newsletter and get 10% off your first purchase</p>
                                    <form id="contact_form" class="mc4wp-form pr z_100" method="post" action="{{route('frontend.newsletter',$shopid)}}">
                                        @csrf
                                        <div class="mc4wp-form-fields">
                                            <div class="signup-newsletter-form row no-gutters pr oh ">
                                                <div class="col col_email">
                                                    <input type="email" name="email" placeholder="Your email address" value="" class="tl_md input-text" required="required">
                                                    
                                                </div>

                                                <div class="col-auto">
                                                    <button type="submit" class="btn_new_icon_false w__100 submit-btn truncate">
                                                        <span>Subscribe</span>
                                                    </button>
                                                </div>

                                            </div>
                                             {{ $errors->first('email') }}
                                        </div>

                                    </form>
                               
                                </div>
                                </div>
                            </div>
                            <!-- End single blog -->
                            <!-- Start single blog -->
                            <div class="col-md-6 col-lg-3 col-sm-6 mb-lm-30px pl-lg-60px">
                                <div class="single-wedge">
                                    <h4 class="footer-herading">Services</h4>
                                    <div class="footer-links">
                                        <div class="footer-row">

                                            <ul class="align-items-center">

                                                <li><a href="{{route('frontend.returnrefund',$shopid)}}" class="dropdown-item link-black-100">Return & Refund Policy</a></li>
                                                <li><a href="{{route('frontend.privacypolicy',$shopid)}}" class="dropdown-item link-black-100">Privacy Policy</a></li>
                                                <li><a href="{{route('frontend.paymentpolicy',$shopid)}}" class="dropdown-item link-black-100">Payment Policy</a></li>
                                                <li><a href="{{route('frontend.shippingpolicy',$shopid)}}" class="dropdown-item link-black-100">Shipping Policy</a></li>
                                                <li><a href="{{route('frontend.termsconditions',$shopid)}}" class="dropdown-item link-black-100">Terms & Condition</a></li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End single blog -->
                            <!-- Start single blog -->
                            <div class="col-md-6 col-lg-3 col-sm-6 mb-lm-30px pl-lg-40px">
                                <div class="single-wedge">
                                    <h4 class="footer-herading">Catalogue</h4>
                                    <div class="footer-links">
                                        <div class="footer-row">
                                            <ul class="align-items-center">
                                                @if(!empty(menu($shopid)))
                                                @foreach(menu($shopid) as $cat_val)

                                                  <li class="li" data-id="{{ $cat_val->id }}"><a class="single-link" href="{{ url('/').'/'.$shopid. '/catalogs/' . $cat_val->id }}">{{ $cat_val->name }}</a></li>

                                                @endforeach
                                                @endif
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End single blog -->
                            <!-- Start single blog -->
                            <div class="col-md-6 col-lg-3 col-sm-12">
                                <div class="single-wedge">
                                    <h4 class="footer-herading">Contact Info</h4>
                                    
                                    <div class="footer-links">
                                        <!-- News letter area -->
                                        <p class="address">Address: {{ ucfirst(sellerdetails($shopid)->address) }}</p>
                                        <p class="phone">Phone/Fax:<a href="tel:+91 {{ sellerdetails($shopid)->phone }}"> +91 {{ sellerdetails($shopid)->phone }}</a></p>
                                        <p class="mail">Email:<a href="mailto:{{ sellerdetails($shopid)->email }}">{{ sellerdetails($shopid)->email }}</a></p>
                                        
                                        <!-- News letter area  End -->
                                    </div>
                                </div>
                            </div>
                            <!-- End single blog -->
                        </div>
                    </div>
                </div>
                <div class="footer-bottom">
                    <div class="container">
                        <div class="line-shape-top line-height-1">
                            <div class="row flex-md-row-reverse align-items-center">
                                <div class="col-md-6 text-center text-md-end">
                                    <div class="payment-mth"></div>
                                </div>
                                <div class="col-md-6 text-center text-md-start">
                                    <p class="copy-text"> Copyright © 2021 Make My Mart, All rights reserved.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Area End -->
    </div>

    
    <!-- Modal -->
    <div class="modal modal-2 fade" id="exampleModal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="fa fa-times" aria-hidden="true"></i></button>
                    <div class="row">
                        <div class="col-lg-6 col-sm-12 col-xs-12 mb-lm-30px mb-md-30px mb-sm-30px">
                            <!-- Swiper -->
                            <div class="swiper-container gallery-top">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <img class="img-responsive m-auto" src="<?php echo WEBSITE_URL;?>frontassets/theme4/assets/images/product-image/zoom-image/1.png" alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="img-responsive m-auto" src="<?php echo WEBSITE_URL;?>frontassets/theme4/assets/images/product-image/zoom-image/2.png" alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="img-responsive m-auto" src="<?php echo WEBSITE_URL;?>frontassets/theme4/assets/images/product-image/zoom-image/3.png" alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="img-responsive m-auto" src="<?php echo WEBSITE_URL;?>frontassets/theme4/assets/images/product-image/zoom-image/4.png" alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="img-responsive m-auto" src="<?php echo WEBSITE_URL;?>frontassets/theme4/assets/images/product-image/zoom-image/5.png" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-container gallery-thumbs mt-20px slider-nav-style-1 small-nav">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <img class="img-responsive m-auto" src="<?php echo WEBSITE_URL;?>frontassets/theme4/assets/images/product-image/small-image/1.png" alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="img-responsive m-auto" src="<?php echo WEBSITE_URL;?>frontassets/theme4/assets/images/product-image/small-image/2.png" alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="img-responsive m-auto" src="<?php echo WEBSITE_URL;?>frontassets/theme4/assets/images/product-image/small-image/3.png" alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="img-responsive m-auto" src="<?php echo WEBSITE_URL;?>frontassets/theme4/assets/images/product-image/small-image/4.png" alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="img-responsive m-auto" src="<?php echo WEBSITE_URL;?>frontassets/theme4/assets/images/product-image/small-image/5.png" alt="">
                                    </div>
                                </div>
                                <!-- Add Arrows -->
                                <div class="swiper-buttons">
                                    <div class="swiper-button-next"></div>
                                    <div class="swiper-button-prev"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-12 col-xs-12" data-aos="fade-up" data-aos-delay="200">
                            <div class="product-details-content quickview-content">
                                <h2>Modern Smart Phone</h2>
                                <div class="pricing-meta">
                                    <ul class="d-flex">
                                        <li class="new-price">$20.90</li>
                                    </ul>
                                </div>
                                <div class="pro-details-rating-wrap">
                                    <div class="rating-product">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <span class="read-review"><a class="reviews" href="#">( 2 Review )</a></span>
                                </div>
                                <p class="mt-30px">Lorem ipsum dolor sit amet, consecte adipisicing elit, sed do eiusmll tempor incididunt ut labore et dolore magna aliqua. Ut enim ad mill veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip exet commodo consequat. Duis aute irure dolor</p>
                                <div class="pro-details-categories-info pro-details-same-style d-flex m-0">
                                    <span>SKU:</span>
                                    <ul class="d-flex">
                                        <li>
                                            <a href="#">Ch-256xl</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="pro-details-categories-info pro-details-same-style d-flex m-0">
                                    <span>Categories: </span>
                                    <ul class="d-flex">
                                        <li>
                                            <a href="#">Smart Device, </a>
                                        </li>
                                        <li>
                                            <a href="#">ETC</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="pro-details-categories-info pro-details-same-style d-flex m-0">
                                    <span>Tags: </span>
                                    <ul class="d-flex">
                                        <li>
                                            <a href="#">Smart Device, </a>
                                        </li>
                                        <li>
                                            <a href="#">Phone</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="pro-details-quality">
                                    <div class="cart-plus-minus">
                                        <input class="cart-plus-minus-box" type="text" name="qtybutton" value="1" />
                                    </div>
                                    <div class="pro-details-cart">
                                        <button class="add-cart"> Add To
                                            Cart</button>
                                    </div>
                                    <div class="pro-details-compare-wishlist pro-details-wishlist ">
                                        <a href="{{route('frontend.wishlist',$shopid)}}"><i class="pe-7s-like"></i></a>
                                    </div>
                                </div>
                                <div class="payment-img">
                                    <a href="#"><img src="<?php echo WEBSITE_URL;?>frontassets/theme4/assets/images/icons/payment.png" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal end -->
    <!-- Modal Cart -->
    <div class="modal customize-class fade" id="exampleModal-Cart" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body text-center">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="fa fa-times" aria-hidden="true"></i></button>
                    <div class="tt-modal-messages">
                        <i class="fa fa-check" aria-hidden="true"></i> Added to cart successfully!
                    </div>
                    <div class="tt-modal-product">
                        <div class="tt-img">
                            <img src="<?php echo WEBSITE_URL;?>frontassets/theme4/assets/images/product-image/1.png" alt="Modern Smart Phone">
                        </div>
                        <h2 class="tt-title"><a href="#">Modern Smart Phone</a></h2>
                    </div>
                </div>
            </div>
        </div>
    </div>     
    <!-- Modal wishlist -->
    <div class="modal customize-class fade" id="exampleModal-Wishlist" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body text-center">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="fa fa-times" aria-hidden="true"></i></button>
                    <div class="tt-modal-messages">
                        <i class="fa fa-check" aria-hidden="true"></i> Added to Wishlist successfully!
                    </div>
                    <div class="tt-modal-product">
                        <div class="tt-img">
                            <img src="<?php echo WEBSITE_URL;?>frontassets/theme4/assets/images/product-image/1.png" alt="Modern Smart Phone">
                        </div>
                        <h2 class="tt-title"><a href="#">Modern Smart Phone</a></h2>
                    </div>
                </div>
            </div>
        </div>
    </div>    
    <!-- Modal compare -->
    <div class="modal customize-class fade" id="exampleModal-Compare" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body text-center">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="fa fa-times" aria-hidden="true"></i></button>
                    <div class="tt-modal-messages">
                        <i class="fa fa-check" aria-hidden="true"></i> Added to compare successfully!
                    </div>
                    <div class="tt-modal-product">
                        <div class="tt-img">
                            <img src="<?php echo WEBSITE_URL;?>frontassets/theme4/assets/images/product-image/1.png" alt="Modern Smart Phone">
                        </div>
                        <h2 class="tt-title"><a href="#">Modern Smart Phone</a></h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Minify Version -->
    <script src="<?php echo WEBSITE_URL;?>frontassets/theme4/assets/js/vendor.min.js"></script>
    <script src="<?php echo WEBSITE_URL;?>frontassets/theme4/assets/js/plugins.min.js"></script>
    <script src="<?php echo WEBSITE_URL;?>frontassets/theme4/assets/js/main.min.js"></script>
    <link rel="stylesheet" href="<?php echo WEBSITE_URL;?>frontassets/sweetalertlibrary/sweetalert.min.css">
    <script src="<?php echo WEBSITE_URL;?>frontassets/sweetalertlibrary/sweetalert.min.js"></script>
    <script src="<?php echo WEBSITE_URL;?>frontassets/projectscript.js"></script>
    <script src="<?php echo WEBSITE_URL;?>frontassets/theme2/js/plugins.js"></script>
    <script type="text/javascript">
        var forgotUrl = "{{ route('forgotpassword',$shopid) }}";
    $(document).ready(function () {
    

    $(document).on("click", "._forgot_password",  function(){
            let id = document.getElementById('RecoverForm');
            let formData = new FormData(id);
            $.ajax({
                url: forgotUrl,
                type: "POST",
                data: formData,
                dataType:'json',
                contentType: false,
                processData: false,
                success:function(response){
                    if(response.status == "true")
                    {
                        swal('Success', response.message, 'success');
                        $("#RecoverForm")[0].reset();
                    }
                    else
                    {
                        swal('Error', response.message, 'error');
                    }
                },
                error:function(error){
                    swal('Error', 'Something went wrong', 'error');
                }
            })
    });


    var size_li = $("#myList > div").length;
      
    x=8;
    $('#myList > div:lt('+x+')').show();

    $('#loadMore').click(function () {
        
        x= (x+8 <= size_li) ? x+8 : size_li;
        $('#myList > div:lt('+x+')').show();
        $('#showLess').show();
        if(x == size_li){
            $('#loadMore').hide();
        }
    });
  
});
</script>
</body>

</html>