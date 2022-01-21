<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="<?php echo WEBSITE_URL;?>frontassets/theme5/assets/images/k_favicon_32x.png">
    <title>{{ sellerdetails($shopid)->stores->name }}</title>
    <?php 
     cartsession($shopid);
     wishlistsession($shopid);
    ?>  
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Libre+Baskerville:300,300i,400,400i,500,500i&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo WEBSITE_URL;?>frontassets/theme5/assets/css/font-icon.min.css">
    <link rel="stylesheet" href="<?php echo WEBSITE_URL;?>frontassets/theme5/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo WEBSITE_URL;?>frontassets/theme1/assets/css/jquery-ui.css">
    <link rel="stylesheet" href="<?php echo WEBSITE_URL;?>frontassets/theme5/assets/css/reset.css">
    <link rel="stylesheet" href="<?php echo WEBSITE_URL;?>frontassets/theme5/assets/css/defined.css">
    <link rel="stylesheet" href="<?php echo WEBSITE_URL;?>frontassets/theme5/assets/css/base.css">
    <link rel="stylesheet" href="<?php echo WEBSITE_URL;?>frontassets/theme5/assets/css/style.css">
    <link rel="stylesheet" href="<?php echo WEBSITE_URL;?>frontassets/theme5/assets/css/home-decor.css">
     <style type="text/css">
        #myList > div{ display:none;
        }
        #loadMore {
            cursor:pointer;
        }
        #loadMore:hover {
            color:black;
        }
       
        input.razorpay-payment-button {
            display: none;
        }
    </style>
</head>
<body class="kalles-template header_full_true des_header_3 css_scrollbar lazy_icons btnt4_style_2 zoom_tp_2 css_scrollbar template-index kalles_toolbar_true hover_img2 swatch_style_rounded swatch_list_size_small label_style_rounded wrapper_full_width header_full_true hide_scrolld_true lazyload">
<input type="hidden" name="app_id" id="app_id" value="{{$shopid}}">
<input type="hidden" value="{{ url()->current()}}" id="currentpageurl">
<input type="hidden" value="{{ csrf_token()}}" id="csrf_token_post">
<input type="hidden" value="{{ PRODUCT_URL }}" id="image_path_url">
<input type="hidden" value="{{ url('/') }}" id="base_url">

<div id="nt_wrapper">

    <!-- header -->
    <header id="ntheader" class="ntheader header_5 h_icon_la">

        <div class="ntheader_wrapper pr z_200">
            <div id="kalles-section-header_5" class="kalles-section sp_header_mid">
                <div class="header__mid">
                    <div class="container">
                        <div class="row al_center css_h_se">
                            <div class="col-md-4 col-3 dn_lg">
                                <a href="#" data-id="#nt_menu_canvas" class="push_side push-menu-btn lh__1 flex al_center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="16" viewBox="0 0 30 16">
                                        <rect width="30" height="1.5"></rect>
                                        <rect y="7" width="20" height="1.5"></rect>
                                        <rect y="14" width="30" height="1.5"></rect>
                                    </svg>
                                </a>
                            </div>
                            <div class="col-5 dn db_lg">
                                <nav class="nt_navigation tl hover_side_up nav_arrow_false">
                                    <ul id="nt_menu_id" class="nt_menu in_flex wrap al_center">
                                        <li class="type_mega menu_wid_cus menu-item has-children menu_has_offsets menu_center pos_center">
                                            <a class="lh__1 flex al_center pr" href="{{route('frontend.index',$shopid)}}">Home</a>
                                        </li>                                       
                                        <li class="type_mega menu_wid_cus menu-item has-children menu_has_offsets menu_center pos_center">
                                            <a class="lh__1 flex al_center pr" href="#">Catalogs</a>
                                            <div class="sub-menu">
                                                <div class="lazy_menu lazyload">
                                                    @if(!empty(menu($shopid)))
                                                    @foreach(menu($shopid) as $cat_val)

                                                    <div class="menu-item">
                                                        <a href="{{ url('/').'/'.$shopid. '/catalogs/' . $cat_val->id }}">{{ $cat_val->name }}</a>
                                                    </div>
                                                    @endforeach
                                                    @endif
                                                    
                                                    
                                                </div>
                                            </div>
                                        </li>
                                        <li class="type_mega menu_wid_cus menu-item has-children menu_has_offsets menu_center pos_center">
                                            <a class="lh__1 flex al_center pr" href="#">Info</a>
                                            <div class="sub-menu">
                                                <div class="lazy_menu lazyload">
                                                    <div class="menu-item">
                                                        <a href="{{route('frontend.returnrefund',$shopid)}}">Return & Refund</a>
                                                    </div>
                                                    <div class="menu-item">
                                                        <a href="{{route('frontend.privacypolicy',$shopid)}}">Privacy Policy</a>
                                                    </div>
                                                    <div class="menu-item">
                                                        <a href="{{route('frontend.paymentpolicy',$shopid)}}">Payment Policy</a>
                                                    </div>
                                                    <div class="menu-item">
                                                        <a href="{{route('frontend.shippingpolicy',$shopid)}}">Shipping Policy</a>
                                                    </div>
                                                    <div class="menu-item">
                                                        <a href="{{route('frontend.termsconditions',$shopid)}}">Terms & Conditions</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="type_dropdown menu-item has-children menu_has_offsets menu_right pos_right">
                                            <a class="lh__1 flex al_center pr" href="#">Account</a>
                                            <div class="sub-menu">
                                                <div class="lazy_menu lazyload">
                                                    @if(!empty(Auth::user()->id))
                                                    <div class="menu-item">
                                                     <a href="{{ route('frontlogout',$shopid) }}" class="push_side">Logout</a>
                                                    </div>
                                                    <div class="menu-item"><a href="{{ route('frontend.myaccount',$shopid) }}" class="push_side">My Account</a></div>
                                                    @else
                                                    <div class="menu-item">
                                                    <a href="#" class="push_side" data-id="#nt_login_canvas">Login</a></div>
                                                    @endif


                                                    <div class="menu-item">
                                                        <a href="{{route('frontend.wishlist',$shopid)}}">Wishlist</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="type_dropdown menu-item has-children menu_has_offsets menu_right pos_right">
                                            <a class="lh__1 flex al_center pr" href="{{route('frontend.contact',$shopid)}}">Contact</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            <div class="col-lg-2 col-md-4 col-6 tc">
                                <div class="branding ts__05 lh__1">
                                    <a class="dib" href="{{route('frontend.index',$shopid)}}">
                                        <img src="{{ isset(sellerdetails($shopid)->stores->logo)?STORE_LOGO_URL.sellerdetails($shopid)->stores->logo:''}}" class="header-logo">
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-4 col-3 tr">
                                <div class="nt_action in_flex al_center cart_des_1">
                                   
                                   @if(!Auth::user())
                                    <div class="my-account ts__05 pr dn db_md">
                                        <a class="cb chp db push_side" href="#" data-id="#nt_login_canvas"><i class="las la-user"></i></a>
                                    </div>
                                    @else
                                     <a class="icon_like cb chp pr dn db_md js_link_wis" href="{{route('frontend.wishlist',$shopid)}}">
                                        <i class="lar la-heart pr"><span class="op__0 ts_op pa tcount bgb br__50 cw tc wishlist_count">{{  count((array) session('wishlist')) }}</span></i>
                                    </a>
                                    @endif
                                   @if(Route::currentRouteName()!='frontend.checkout')
                                    <div class="icon_cart pr">
                                        <a class="push_side pr cb chp db" href="#" data-id="#nt_cart_canvas">
                                            <i class="las la-shopping-cart pr"><span class="op__0 ts_op pa tcount bgb cart_count br__50 cw tc">{{  count((array) session('cart')) }}</span></i>
                                        </a>
                                    </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- end header -->
    <div id="nt_content">

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
     </div>
    <!-- footer -->
    <footer id="nt_footer" class="bgbl footer-1">
        <div id="kalles-section-footer_top" class="kalles-section footer__top type_instagram">
            <div class="footer__top_wrap footer_sticky_false footer_collapse_true nt_bg_overlay pr oh pb__30 pt__80">
                <div class="container pr z_100">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-12 mb__50 order-lg-1 order-1">
                            <div class="widget widget_text widget_logo">
                                <div class="widget_footer">
                                    <div class="footer-contact">
                                        <p>
                                            <a class="d-block" href="{{route('frontend.index',$shopid)}}">
                                                <img src="{{ isset(sellerdetails($shopid)->stores->logo)?STORE_LOGO_URL.sellerdetails($shopid)->stores->logo:''}}" class="header-logo-hw">
                                            </a>
                                        </p>
                                        <p>
                                            <i class="pegk pe-7s-map-marker"> </i><span>{{ ucfirst(sellerdetails($shopid)->address) }}</span>
                                        </p>
                                        <p><i class="pegk pe-7s-mail"></i>
                                            <span>
                                                <a href="mailto:{{ sellerdetails($shopid)->email }}">
                                                    <span class="__cf_email__">{{ sellerdetails($shopid)->email }}</span>
                                                </a>
                                            </span>
                                        </p>
                                        <p><i class="pegk pe-7s-call"></i> <span>+91 {{ sellerdetails($shopid)->phone }} </span></p>
                                     
                                    </div>
                                </div>                                
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-12 mb__50 order-lg-2 order-1">
                            <div class="widget widget_nav_menu">
                                <h3 class="widget-title fwsb flex al_center fl_between fs__16 mg__0 mb__10">
                                    <span class="txt_title">Catalogs</span>
                                    <span class="nav_link_icon ml__5"></span>
                                </h3>
                                <div class="menu_footer widget_footer">
                                    <ul class="menu">
                                        @if(!empty(menu($shopid)))
                                            @foreach(menu($shopid) as $cat_val)

                                            <div class="menu-item">
                                                <a href="{{ url('/').'/'.$shopid. '/catalogs/' . $cat_val->id }}">{{ $cat_val->name }}</a>
                                            </div>
                                            @endforeach
                                        @endif
                                        
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-12 mb__50 order-lg-3 order-1">
                            <div class="widget widget_nav_menu">
                                <h3 class="widget-title fwsb flex al_center fl_between fs__16 mg__0 mb__10">
                                    <span class="txt_title">Info</span>
                                    <span class="nav_link_icon ml__5"></span>
                                </h3>
                                <div class="menu_footer widget_footer">
                                    <ul class="menu">

                                        <li class="menu-item">
                                             <a href="{{route('frontend.returnrefund',$shopid)}}">Return & Refund</a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="{{route('frontend.privacypolicy',$shopid)}}">Privacy Policy</a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="{{route('frontend.paymentpolicy',$shopid)}}">Payment Policy</a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="{{route('frontend.shippingpolicy',$shopid)}}">Shipping Policy</a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="{{route('frontend.termsconditions',$shopid)}}">Terms & Conditions</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>                        
                        <div class="col-lg-3 col-md-6 col-12 mb__50 order-lg-5 order-1">
                            <div class="widget widget_text">
                                
                                <div class="widget_footer newl_des_1">
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
                    </div>
                </div>
            </div>
        </div>
        <div id="kalles-section-footer_bot" class="kalles-section footer__bot">
            <div class="footer__bot_wrap pt__20 pb__20">
                <div class="container pr tc">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-12">Copyright © 2021 Make My Mart, All rights reserved.</div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- end footer -->
</div>

<!--mask overlay-->
<div class="mask-overlay ntpf t__0 r__0 l__0 b__0 op__0 pe_none"></div>
<!--end mask overlay-->

<!--quick view-->
<div id="quick-view-tpl" class="dn">
    <div class="product-quickview single-product-content img_action_zoom kalles-quick-view-tpl">
        <div class="row product-image-summary">
             <div class="col-lg-7 col-md-6 col-12 product-images pr oh">
               <!--  <span class="tc nt_labels pa pe_none cw"><span class="onsale nt_label"><span>-34%</span></span></span> -->
                <div class="images">
                    <div class="product-images-slider tc equal_nt nt_slider nt_carousel_qv p-thumb_qv nt_contain ratio_imgtrue position_8" data-flickity='{ "fade":true,"cellSelector": ".q-item:not(.is_varhide)","cellAlign": "center","wrapAround": true,"autoPlay": false,"prevNextButtons":true,"adaptiveHeight": true,"imagesLoaded": false, "lazyLoad": 0,"dragThreshold" : 0,"pageDots": true,"rightToLeft": false }'>
                        <div data-grname="not4" data-grpvl="ntt4" class="js-sl-item q-item sp-pr-gallery__img w__100" data-mdtype="image">
                            <span class="nt_bg_lz lazyload" id="productimage"></span>
                        </div>
                       
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-md-6 col-12 summary entry-summary pr">
                <div class="summary-inner gecko-scroll-quick">
                    <div class="gecko-scroll-content-quick">
                        <div class="kalles-section-pr_summary kalles-section summary entry-summary mt__30">
                            <h1 class="product_title entry-title fs__16"></h1>
                            <div class="flex wrap fl_between al_center price-review">
                                <p class="price_range" id="price_qv">
                                    <!-- <del>$60.00</del>
                                    <ins>$40.00</ins> -->
                                </p>
                                <a href="#" class="rating_sp_kl dib">
                                    <div class="kalles-rating-result">
                                        <span class="kalles-rating-result__pipe">
                                            <span class="kalles-rating-result__start"></span>
                                            <span class="kalles-rating-result__start"></span>
                                            <span class="kalles-rating-result__start"></span>
                                            <span class="kalles-rating-result__start active"></span>
                                            <span class="kalles-rating-result__start"></span></span>
                                        <!-- <span class="kalles-rating-result__number">(12 reviews)</span> -->
                                    </div>
                                </a>
                            </div>
                            <div class="pr_short_des product-desc">
                                
                            </div>
                            <div class="btn-atc atc-slide btn_des_1 btn_txt_3">
                                <div id="callBackVariant_qv" class="nt_pink nt1_ nt2_">
                                    <div id="cart-form_qv" class="nt_cart_form variations_form variations_form_qv">
                                        <div class="variations mb__40 style__circle size_medium style_color des_color_1 variation_attr">
                                            
                                        </div>
                                        <div class="variations_button in_flex column w__100 buy_qv_false">
                                            <div class="flex wrap">
                                                <div class="quantity pr mr__10 order-1 qty__true" id="sp_qty_qv">
                                                    <input type="number" class="input-text qty text tc qty_pr_js qty_cart_js" value="1" name="quantity" inputmode="numeric">
                                                    <div class="qty tc fs__14">
                                                        <button type="button" class="plus db cb pa pd__0 pr__15 tr r__0">
                                                            <i class="facl facl-plus"></i>
                                                        </button>
                                                        <button type="button" class="minus db cb pa pd__0 pl__15 tl l__0 ">
                                                            <i class="facl facl-minus"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="nt_add_w ts__03 pa order-3">
                                                    <a href="#" class="wishlistadd cb chp ttip_nt tooltip_top_left add_to_wishlist"  onclick="return add_to_wishlist(this);"><span class="tt_txt">Add to Wishlist</span><i class="facl facl-heart-o"></i></a>
                                                </div>
                                                <button type="button" data-time='6000' data-ani='shake' class="single_add_to_cart_button add_to_cart button truncate js_frm_cart w__100 mt__20 order-4" onclick="return add_to_cart(this);">
                                                    <span class="txt_add ">Add to cart</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="trust_seal_qv" class="pr_trust_seal tl">
                                <p class="mess_cd cb mb__10 fwm tu fs_16"></p>
                                <img class="lazyload img_tr_s1 w__100" src="data:image/svg+xml,%3Csvg%20viewBox%3D%220%200%202244%20285%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E" data-src="assets/images/trust_img2.png" alt="">
                            </div>
                            <div class="product_meta">
                                <span class="sku_wrapper"><span class="cb">SKU:</span> <span class="sku value cg sku-value"></span></span>
                              
                            </div>
                          
                            <a href="#" class="btn fwsb detail_link p-0 fs__14 quick-view-pro-details"><a href='#' class="viewfulldetails">View full details</a><i class="facl facl-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--end quick view-->

<!--quick shop-->
<div id="quick-shop-tpl" class="dn">
    <div class="wrap_qs_pr buy_qs_false kalles-quick-shop">
        <div class="qs_imgs_i row al_center mb__30">
            <div class="col-auto cl_pr_img">
                <div class="pr oh qs_imgs_wrap">
                    <div class="row equal_nt qs_imgs nt_slider nt_carousel_qs p-thumb_qs" data-flickity='{"fade":false,"cellSelector":".qs_img_i","cellAlign":"center","wrapAround":true,"autoPlay":false,"prevNextButtons":false,"adaptiveHeight":true,"imagesLoaded":false,"lazyload":0,"dragThreshold":0,"pageDots":false,"rightToLeft":false}'>
                        <div class="col-12 js-sl-item qs_img_i nt_img_ratio lazyload nt_bg_lz quick-shop-product-image" data-bgset=""></div>
                        
                    </div>
                </div>
            </div>
            <div class="col cl_pr_title tc">
                <h3 class="product-title pr fs__16 mg__0 fwm quick-shop-product-name">
                    
                </h3>
                <div id="price_qs"><span class="price quick-shop-product-price price_range"></span>
                </div>
            </div>
        </div>
        <div class="qs_info_i tc">
            <div class="qs_swatch">
                <div id="callBackVariant_qs" class="nt_green nt1_xs nt2_">
                    <div id="cart-form_qs" class="nt_cart_form variations_form variations_form_qs">
                        <div class="variations mb__40 style__circle size_medium style_color des_color_1 variation_attr_quick_cart">
                            
                        </div>

                        <div class="variations_button in_flex column w__100">
                            <div class="flex al_center column">
                                <div class="quantity pr mb__15 order-1 qty__" id="sp_qty_qs">
                                    <input type="number" class="input-text qty text tc qty_pr_js qty_cart_js" step="1" min="1" max="9999" name="quantity" value="1" inputmode="numeric">
                                    <div class="qty tc fs__14">
                                        <button type="button" class="plus db cb pa pd__0 pr__15 tr r__0">
                                            <i class="facl facl-plus"></i></button>
                                        <button type="button" class="minus db cb pa pd__0 pl__15 tl l__0">
                                            <i class="facl facl-minus"></i></button>
                                    </div>
                                </div>

                                <button type="button" class="single_add_to_cart_button button truncate js_frm_cart w__100 order-4 add_to_cart" onclick="return add_to_cart(this);">
                                    <span class="txt_add ">Add to cart</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a href="" class="btn fwsb detail_link dib mt__15 quick-shop-product-details">View full details<i class="facl facl-right"></i></a>
        </div>
    </div>
</div>
<!--end quick shop-->

<!-- mini cart box -->
<div id="nt_cart_canvas" class="nt_fk_canvas dn">
    <div class="nt_mini_cart nt_js_cart flex column h__100 btns_cart_1">
        <div class="mini_cart_header flex fl_between al_center">
            <div class="h3 fwm tu fs__16 mg__0">Shopping cart</div>
            <i class="close_pp pegk pe-7s-close ts__03 cd"></i>
        </div>
        <div class="mini_cart_wrap">
            <div class="mini_cart_content fixcl-scroll">
                <div class="fixcl-scroll-content">
                    <div class="empty tc mt__40 dn"><i class="las la-shopping-bag pr mb__10"></i>
                        <p>Your cart is empty.</p>
                        <p class="return-to-shop mb__15">
                            <a class="button button_primary tu js_add_ld" href="#">Return To Shop</a>
                        </p>
                    </div>

                   
                    <div class="mini_cart_items js_cat_items lazyload" id="cart_add_item">
                       
                        
                    </div>
                    
                </div>
            </div>
            <div class="mini_cart_footer js_cart_footer">
                <div class="js_cat_dics"></div>
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
                <p class="txt_tax_ship mb__5 fs__12">Taxes, shipping and discounts codes calculated at checkout</p>
                <p class="pr db mb__5 fs__12">
                    
                    <svg class="dn scl_selected" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <path d="M9 20l-7-7 3-3 4 4L19 4l3 3z"></path>
                    </svg>
                </p>
                <a href="{{route('frontend.shoppingcart',$shopid)}}" class="button btn-cart mt__10 mb__10 js_add_ld d-inline-flex justify-content-center align-items-center cd-imp">View cart</a>
                <a href="{{route('frontend.checkout',$shopid)}}" class="button btn-checkout mt__10 mb__10 js_add_ld d-inline-flex justify-content-center align-items-center text-white">Check Out</a>
                <div class="cat_img_trust mt__10 lazyload">
                    <img class="w__100 lz_op_ef" src="<?php echo WEBSITE_URL;?>frontassets/theme1/assets/images/trust_img2.png" width="360" height="46" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end mini cart box-->

<!-- search box -->
<div id="nt_search_canvas" class="nt_fk_full dn tl tc_lg">
    <div class="nt_mini_cart flex column h__100">
        <div class="mini_cart_wrap">
            <form method="get" class="search_header mini_search_frm js_frm_search pr" role="search">
                <div class="row">
                    <div class="frm_search_cat col-auto">
                        <select name="product_type">
                            <option value="*">All Categories</option>
                            <option value="Accessories">Accessories</option>
                            <option value="Bag">Bag</option>
                            <option value="Camera">Camera</option>
                            <option value="Decor">Decor</option>
                            <option value="Earphones">Earphones</option>
                            <option value="Electric">Electric</option>
                            <option value="Furniture">Furniture</option>
                            <option value="Headphone">Headphone</option>
                            <option value="Men">Men</option>
                            <option value="Shoes">Shoes</option>
                            <option value="Speaker">Speaker</option>
                            <option value="Watch">Watch</option>
                            <option value="Women">Women</option>
                        </select>
                    </div>
                    <div class="frm_search_input pr oh col">
                        <input class="search_header__input js_iput_search" autocomplete="off" type="text" name="q" placeholder="Search for products">
                        <button class="search_header__submit js_btn_search use_jsfull hide_  pe_none" type="submit">
                            <i class="iccl iccl-search"></i></button>
                    </div>
                </div>
                <i class="close_pp pegk pe-7s-close ts__03 cd pa r__0"></i>
                <div class="ld_bar_search"></div>
            </form>
            <div class="search_header__prs fwsb cd tc">
                <span class="h_suggest">Need some inspiration?</span><span class="h_result dn">Search Result:</span><span class="h_results dn">Search Results:</span>
            </div>
            <div class="search_header__content mini_cart_content fixcl-scroll widget">
                <div class="fixcl-scroll-content product_list_widget">
                    <div class="skeleton_wrap skeleton_js row fl_center dn">
                        <div class="col-auto tc">
                            <div class="row mb__10 pb__10">
                                <div class="col-12">
                                    <div class="skeleton_img"></div>
                                </div>
                                <div class="col-12 mt__10">
                                    <div class="skeleton_txt1"></div>
                                    <div class="skeleton_txt2"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto tc">
                            <div class="row mb__10 pb__10">
                                <div class="col-12">
                                    <div class="skeleton_img"></div>
                                </div>
                                <div class="col-12 mt__10">
                                    <div class="skeleton_txt1"></div>
                                    <div class="skeleton_txt2"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto tc">
                            <div class="row mb__10 pb__10">
                                <div class="col-12">
                                    <div class="skeleton_img"></div>
                                </div>
                                <div class="col-12 mt__10">
                                    <div class="skeleton_txt1"></div>
                                    <div class="skeleton_txt2"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto tc">
                            <div class="row mb__10 pb__10">
                                <div class="col-12">
                                    <div class="skeleton_img"></div>
                                </div>
                                <div class="col-12 mt__10">
                                    <div class="skeleton_txt1"></div>
                                    <div class="skeleton_txt2"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="js_prs_search row fl_center">
                        <div class="col-auto tc">
                            <div class="row mb__10 pb__10">
                                <div class="col-12">
                                    <div class="img_fix_search">
                                        <a class="db pr oh" href="product-detail-layout-01.html"><img src="data:image/svg+xml,%3Csvg%20viewBox%3D%220%200%201128%201439%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E" class="w__100 lz_op_ef lazyload" alt="Analogue Resin Strap" data-bgset="<?php echo WEBSITE_URL;?>frontassets/theme5/assets/images/home-fashion-9/pr-s-01.jpg"></a>
                                    </div>
                                </div>
                                <div class="col-12 mt__10">
                                    <a class="product-title db" href="">Analogue Resin Strap</a>$30.00
                                </div>
                            </div>
                        </div>
                        <div class="col-auto tc">
                            <div class="row mb__10 pb__10">
                                <div class="col-12">
                                    <div class="img_fix_search">
                                        <a class="db pr oh" href="product-detail-layout-01.html"><img src="data:image/svg+xml,%3Csvg%20viewBox%3D%220%200%201128%201439%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E" class="w__100 lz_op_ef lazyload" alt="" data-bgset="<?php echo WEBSITE_URL;?>frontassets/theme5/assets/images/home-fashion-9/pr-s-02.jpg"></a>
                                    </div>
                                </div>
                                <div class="col-12 mt__10">
                                    <a class="product-title db" href="product-detail-layout-01.html">Ridley High Waist</a>$36.00
                                </div>
                            </div>
                        </div>
                        <div class="col-auto tc">
                            <div class="row mb__10 pb__10">
                                <div class="col-12">
                                    <div class="img_fix_search">
                                        <a class="db pr oh" href="product-detail-layout-01.html"><img src="data:image/svg+xml,%3Csvg%20viewBox%3D%220%200%201128%201439%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E" class="w__100 lz_op_ef lazyload" alt="" data-bgset="<?php echo WEBSITE_URL;?>frontassets/theme5/assets/images/home-fashion-9/pr-s-03.jpg"></a>
                                    </div>
                                </div>
                                <div class="col-12 mt__10">
                                    <a class="product-title db" href="product-detail-layout-01.html">Blush Beanie</a>$15.00
                                </div>
                            </div>
                        </div>
                        <div class="col-auto tc">
                            <div class="row mb__10 pb__10">
                                <div class="col-12">
                                    <div class="img_fix_search">
                                        <a class="db pr oh" href="product-detail-layout-01.html"><img src="data:image/svg+xml,%3Csvg%20viewBox%3D%220%200%201128%201439%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E" class="w__100 lz_op_ef lazyload" alt="" data-bgset="<?php echo WEBSITE_URL;?>frontassets/theme5/assets/images/home-fashion-9/pr-s-04.jpg"></a>
                                    </div>
                                </div>
                                <div class="col-12 mt__10">
                                    <a class="product-title db" href="product-detail-layout-01.html">Cluse La Boheme Rose Gold</a>
                                    <del>$60.00</del>
                                    <ins>$45.00</ins>
                                    <span class="onsale nt_label">-25%</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto tc">
                            <div class="row mb__10 pb__10">
                                <div class="col-12">
                                    <div class="img_fix_search">
                                        <a class="db pr oh" href="product-detail-layout-01.html"><img src="data:image/svg+xml,%3Csvg%20viewBox%3D%220%200%201128%201439%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E" class="w__100 lz_op_ef lazyload" alt="" data-bgset="<?php echo WEBSITE_URL;?>frontassets/theme5/assets/images/home-fashion-9/pr-s-05.jpg"></a>
                                    </div>
                                </div>
                                <div class="col-12 mt__10">
                                    <a class="product-title db" href="product-detail-layout-01.html">Mercury Tee</a>$68.00
                                </div>
                            </div>
                        </div>
                        <div class="col-auto tc">
                            <div class="row mb__10 pb__10">
                                <div class="col-12">
                                    <div class="img_fix_search">
                                        <a class="db pr oh" href="product-detail-layout-01.html"><img src="data:image/svg+xml,%3Csvg%20viewBox%3D%220%200%201128%201439%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E" class="w__100 lz_op_ef lazyload" alt="" data-bgset="<?php echo WEBSITE_URL;?>frontassets/theme5/assets/images/home-fashion-9/pr-s-06.jpg"></a>
                                    </div>
                                </div>
                                <div class="col-12 mt__10">
                                    <a class="product-title db" href="product-detail-layout-01.html">La Bohème Rose Gold</a>
                                    <del>$60.00</del>
                                    <ins>$40.00</ins>
                                    <span class="onsale nt_label">-34%</span></div>
                            </div>
                        </div>
                        <div class="col-auto tc">
                            <div class="row mb__10 pb__10">
                                <div class="col-12">
                                    <div class="img_fix_search">
                                        <a class="db pr oh" href="product-detail-layout-01.html"><img src="data:image/svg+xml,%3Csvg%20viewBox%3D%220%200%201128%201439%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E" class="w__100 lz_op_ef lazyload" alt="" data-bgset="<?php echo WEBSITE_URL;?>frontassets/theme5/assets/images/home-fashion-9/pr-s-07.jpg"></a>
                                    </div>
                                </div>
                                <div class="col-12 mt__10">
                                    <a class="product-title db" href="product-detail-layout-01.html">Cream women pants</a>$35.00
                                </div>
                            </div>
                        </div>
                        <div class="col-auto tc">
                            <div class="row mb__10 pb__10">
                                <div class="col-12">
                                    <div class="img_fix_search">
                                        <a class="db pr oh" href="product-detail-layout-01.html"><img src="data:image/svg+xml,%3Csvg%20viewBox%3D%220%200%201128%201439%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E" class="w__100 lz_op_ef lazyload" alt="" data-bgset="<?php echo WEBSITE_URL;?>frontassets/theme5/assets/images/home-fashion-9/pr-s-08.jpg"></a>
                                    </div>
                                </div>
                                <div class="col-12 mt__10">
                                    <a class="product-title db" href="product-detail-layout-01.html">Black mountain hat</a>$50.00
                                </div>
                            </div>
                        </div>
                        <div class="col-auto tc">
                            <div class="row mb__10 pb__10">
                                <div class="col-12">
                                    <div class="img_fix_search">
                                        <a class="db pr oh" href="product-detail-layout-01.html"><img src="data:image/svg+xml,%3Csvg%20viewBox%3D%220%200%201128%201439%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E" class="w__100 lz_op_ef lazyload" alt="" data-bgset="<?php echo WEBSITE_URL;?>frontassets/theme5/assets/images/home-fashion-9/pr-s-09.jpg"></a>
                                    </div>
                                </div>
                                <div class="col-12 mt__10">
                                    <a class="product-title db" href="product-detail-layout-01.html">Short Sleeved Hoodie</a>
                                    <del>$45.00</del>
                                    <ins>$30.00</ins>
                                    <span class="onsale nt_label">-34%</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto tc">
                            <div class="row mb__10 pb__10">
                                <div class="col-12">
                                    <div class="img_fix_search">
                                        <a class="db pr oh" href="product-detail-layout-01.html"><img src="data:image/svg+xml,%3Csvg%20viewBox%3D%220%200%201128%201439%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E" class="w__100 lz_op_ef lazyload" alt="" data-bgset="<?php echo WEBSITE_URL;?>frontassets/theme5/assets/images/home-fashion-9/pr-s-10.jpg"></a>
                                    </div>
                                </div>
                                <div class="col-12 mt__10">
                                    <a class="product-title db" href="product-detail-layout-01.html">Sport Sneaker</a>$35.00
                                </div>
                            </div>
                        </div>
                        <div class="col-auto tc">
                            <div class="row mb__10 pb__10">
                                <div class="col-12">
                                    <div class="img_fix_search">
                                        <a class="db pr oh" href="product-detail-layout-01.html"><img src="data:image/svg+xml,%3Csvg%20viewBox%3D%220%200%201128%201439%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E" class="w__100 lz_op_ef lazyload" alt="" data-bgset="<?php echo WEBSITE_URL;?>frontassets/theme5/assets/images/home-fashion-9/pr-s-11.jpg"></a>
                                    </div>
                                </div>
                                <div class="col-12 mt__10">
                                    <a class="product-title db" href="product-detail-layout-01.html">Men pants</a>$49.00–$56.00
                                </div>
                            </div>
                        </div>
                        <div class="col-auto tc">
                            <div class="row mb__10 pb__10">
                                <div class="col-12">
                                    <div class="img_fix_search">
                                        <a class="db pr oh" href="product-detail-layout-01.html"><img src="data:image/svg+xml,%3Csvg%20viewBox%3D%220%200%201128%201439%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E" class="w__100 lz_op_ef lazyload" alt="" data-bgset="<?php echo WEBSITE_URL;?>frontassets/theme5/assets/images/home-fashion-9/pr-s-12.jpg"></a>
                                    </div>
                                </div>
                                <div class="col-12 mt__10">
                                    <a class="product-title db" href="product-detail-layout-01.html">Skin Sweatpans</a>
                                    <del>$75.00</del>
                                    <ins>$45.00</ins>
                                    <span class="onsale nt_label">-40%</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto tc">
                            <div class="row mb__10 pb__10">
                                <div class="col-12">
                                    <div class="img_fix_search">
                                        <a class="db pr oh" href="product-detail-layout-01.html"><img src="data:image/svg+xml,%3Csvg%20viewBox%3D%220%200%201128%201439%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E" class="w__100 lz_op_ef lazyload" alt="" data-bgset="<?php echo WEBSITE_URL;?>frontassets/theme5/assets/images/home-fashion-9/pr-s-13.jpg"></a>
                                    </div>
                                </div>
                                <div class="col-12 mt__10">
                                    <a class="product-title db" href="product-detail-layout-01.html">Simple Skin T-shirt</a>$56.00
                                </div>
                            </div>
                        </div>
                        <div class="col-auto tc">
                            <div class="row mb__10 pb__10">
                                <div class="col-12">
                                    <div class="img_fix_search">
                                        <a class="db pr oh" href="product-detail-layout-01.html"><img src="data:image/svg+xml,%3Csvg%20viewBox%3D%220%200%201128%201439%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E" class="w__100 lz_op_ef lazyload" alt="" data-bgset="<?php echo WEBSITE_URL;?>frontassets/theme5/assets/images/home-fashion-9/pr-s-14.jpg"></a>
                                    </div>
                                </div>
                                <div class="col-12 mt__10">
                                    <a class="product-title db" href="product-detail-layout-01.html">Sunny Life</a>$68.00
                                </div>
                            </div>
                        </div>
                        <div class="col-auto tc">
                            <div class="row mb__10 pb__10">
                                <div class="col-12">
                                    <div class="img_fix_search">
                                        <a class="db pr oh" href="product-detail-layout-01.html"><img src="data:image/svg+xml,%3Csvg%20viewBox%3D%220%200%201128%201439%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E" class="w__100 lz_op_ef lazyload" alt="" data-bgset="<?php echo WEBSITE_URL;?>frontassets/theme5/assets/images/home-fashion-9/pr-s-15.jpg"></a>
                                    </div>
                                </div>
                                <div class="col-12 mt__10">
                                    <a class="product-title db" href="product-detail-layout-01.html">Leather White Trainers</a>$20.00
                                </div>
                            </div>
                        </div>
                        <div class="col-auto tc">
                            <div class="row mb__10 pb__10">
                                <div class="col-12">
                                    <div class="img_fix_search">
                                        <a class="db pr oh" href="product-detail-layout-01.html"><img src="data:image/svg+xml,%3Csvg%20viewBox%3D%220%200%201128%201439%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E" class="w__100 lz_op_ef lazyload" alt="" data-bgset="<?php echo WEBSITE_URL;?>frontassets/theme5/assets/images/home-fashion-9/pr-s-16.jpg"></a>
                                    </div>
                                </div>
                                <div class="col-12 mt__10">
                                    <a class="product-title db" href="product-detail-layout-01.html">Stripe Long Sleeve Top</a>$15.00
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end search box -->

<!-- login box -->
<div id="nt_login_canvas" class="nt_fk_canvas dn lazyload">
    <form id="customer_login" class="nt_mini_cart flex column h__100 is_selected" method="post" encytype ='multipart/form-data' action="{{ route('frontlogin',$shopid) }}">
         @csrf
         @if (session('message'))
            <div class="alert {{session('class')}}">
                {{ session('message') }}
            </div>
        @endif
        <div class="mini_cart_header flex fl_between al_center">
            <div class="h3 widget-title tu fs__16 mg__0">Login</div>
            <i class="close_pp pegk pe-7s-close ts__03 cd"></i></div>
        <div class="mini_cart_wrap">
            <div class="mini_cart_content fixcl-scroll">
                <div class="fixcl-scroll-content"><p class="form-row">
                    <label for="CustomerEmail">Email <span class="required">*</span></label>
                    <input type="email" name="email" id="CustomerEmail" autocomplete="email" autocapitalize="off" required>
                </p>
                    <p class="form-row">
                        <label for="CustomerPassword">Password <span class="required">*</span></label>
                        <input type="password" value="" name="password" autocomplete="current-password" id="CustomerPassword" required>
                    </p><input type="submit" class="button button_primary w__100 tu js_add_ld" value="Sign In">
                    <br>
                    <p class="mb__10 mt__20">New customer?
                        <a href="#" data-id="#RegisterForm" class="link_acc">Create your account</a>
                    </p>
                    <p>Lost password?
                        <a href="#" data-id="#RecoverForm" class="link_acc">Recover password</a>
                    </p>
                    <p>
                    <a href="{{ url('/login/google') }}" class="link_acc">Login with Gmail</a></p><p>
                    <a href="{{ url('/login/facebook') }}" class="link_acc">Login with Facebook</a></p>
                </div>
            </div>
        </div>
    </form>

     <form id="RecoverForm" class="nt_mini_cart flex column h__100" method="POST" encytype ='multipart/form-data'>
        @csrf
         @if (session('message'))
            <div class="alert {{session('class')}}">
                {{ session('message') }}
            </div>
        @endif
        <div class="mini_cart_header flex fl_between al_center">
            <div class="h3 widget-title tu fs__16 mg__0">Recover password</div>
            <i class="close_pp pegk pe-7s-close ts__03 cd"></i></div>
        <div class="mini_cart_wrap">
            <div class="mini_cart_content fixcl-scroll">
                <div class="fixcl-scroll-content">
                    <p class="form-row">
                        <label for="RecoverEmail">Email address</label>
                        <input type="email" value="" name="email" id="RecoverEmail" class="input-full" autocomplete="email" autocapitalize="off" required>
                    </p>
                    <input type="button" class="button button_primary w__100 tu js_add_ld _forgot_password" value="Reset Password">
                    <br>
                    <p class="mb__10 mt__20">Remembered your password?
                        <a href="#" data-id="#customer_login" class="link_acc">Back to login</a>
                    </p>
                </div>
            </div>
        </div>
    </form>

    <form id="RegisterForm" class="nt_mini_cart flex column h__100" method="post" encytype ='multipart/form-data' action="{{ route('registeruser',$shopid) }}">
        @csrf
        <div class="mini_cart_header flex fl_between al_center">
            <div class="h3 widget-title tu fs__16 mg__0">Register</div>
            <i class="close_pp pegk pe-7s-close ts__03 cd"></i>
        </div>
        <div class="mini_cart_wrap">
            <div class="mini_cart_content fixcl-scroll">
                <div class="fixcl-scroll-content">
                    <p class="form-row">
                        <label for="-FirstName">First Name</label>
                        <input type="text" name="first_name" id="-FirstName" autocomplete="given-name">
                        <span class="error help-inline">
                          {{ $errors->first('first_name') }}
                      </span>
                    </p>
                    <p class="form-row">
                        <label for="-LastName">Last Name</label>
                        <input type="text" name="last_name" id="-LastName" autocomplete="family-name">
                        <span class="error help-inline">
                          {{ $errors->first('last_name') }}
                        </span>
                    </p>
                    <p class="form-row">
                        <label for="-email">Email <span class="required">*</span></label>
                        <input type="email" name="email" id="-email" class="" autocapitalize="off" autocomplete="email" aria-required="true">
                        <span class="error help-inline">
                          {{ $errors->first('email') }}
                        </span>
                    </p>
                    <p class="form-row">
                        <label for="-password">Password <span class="required">*</span></label>
                        <input type="password" name="password" id="-password" class="" autocomplete="current-password" aria-required="true">
                        <span class="error help-inline">
                          {{ $errors->first('password') }}
                        </span>
                    </p>
                    <input type="submit" value="Register" class="button button_primary w__100 tu js_add_ld">
                    <br>
                    <p class="mb__10 mt__20">Already have an account?
                        <a href="#" data-id="#customer_login" class="link_acc">Login here</a>
                    </p>
                </div>
            </div>
        </div>
    </form>
</div>
<!-- end login box -->

<!-- mobile menu -->
<div id="nt_menu_canvas" class="nt_fk_canvas nt_sleft dn lazyload">
    <i class="close_pp pegk pe-7s-close ts__03 cd"></i>
    <div class="mb_nav_tabs flex al_center mb_cat_true">
        <div class="mb_nav_title pr mb_nav_ul flex al_center fl_center active" data-id="#kalles-section-mb_nav_js">
            <span class="db truncate">Menu</span>
        </div>
        <div class="mb_nav_title pr flex al_center fl_center" data-id="#kalles-section-mb_cat_js">
            <span class="db truncate">Categories</span>
        </div>
    </div>
    <div id="kalles-section-mb_nav_js" class="mb_nav_tab active">
        <div id="kalles-section-mb_nav" class="kalles-section">
            <ul id="menu_mb_ul" class="nt_mb_menu">
                <li class="menu-item">
                    <a href="{{route('frontend.index',$shopid)}}">
                        Home                        
                    </a>
                </li>                           
                <li class="menu-item menu-item-has-children only_icon_false">
                    <a href="#"><span class="nav_link_txt flex al_center">Info</span><span class="nav_link_icon ml__5"></span></a>
                    <ul class="sub-menu">
                      
                       <li class="menu-item">
                            <a href="{{route('frontend.returnrefund',$shopid)}}">Return & Refund</a>
                        </li>
                        <li class="menu-item">
                            <a href="{{route('frontend.privacypolicy',$shopid)}}">Privacy Policy</a>
                        </li>
                        <li class="menu-item">
                            <a href="{{route('frontend.paymentpolicy',$shopid)}}">Payment Policy</a>
                        </li>
                        <li class="menu-item">
                            <a href="{{route('frontend.shippingpolicy',$shopid)}}">Shipping Policy</a>
                        </li>
                        <li class="menu-item">
                            <a href="{{route('frontend.termsconditions',$shopid)}}">Terms & Conditions</a>
                        </li>
                    </ul>
                </li>

                <li class="menu-item"><a href="{{route('frontend.contact',$shopid)}}">Contact</a></li>
                <li class="menu-item menu-item-btns menu-item-wishlist">
                    <a class="js_link_wis" href="wishlist.html"><span class="iconbtns">Wishlist</span></a>
                </li>
               @if(!empty(Auth::user()->id))
               <li class="menu-item menu-item-btns menu-item-acount">
                    <a href="{{ route('frontlogout',$shopid) }}" class="push_side" data-id="#nt_login_canvas"><span class="iconbtns">Logout</span></a>
                </li>
                <li class="menu-item menu-item-btns menu-item-acount">
                    <a href="{{ route('frontend.myaccount',$shopid) }}"><span class="iconbtns">My Account</span></a>
                </li>
                
               @else
                <li class="menu-item menu-item-btns menu-item-acount">
                    <a href="#" class="push_side" data-id="#nt_login_canvas"><span class="iconbtns">Login / Register</span></a>
                </li>
                @endif
                
                <li class="menu-item menu-item-infos">
                    <p class="menu_infos_title">Need help?</p>
                    <div class="menu_infos_text">
                        <i class="pegk pe-7s-call fwb mr__10"></i> +91 {{ sellerdetails($shopid)->phone }}<br>
                        <i class="pegk pe-7s-mail fwb mr__10"></i>
                        <a class="cg" href="mailto:{{ sellerdetails($shopid)->email }}">
                            <span class="__cf_email__">{{ sellerdetails($shopid)->email }}</span>
                        </a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <div id="kalles-section-mb_cat_js" class="mb_nav_tab">
        <div id="kalles-section-mb_cat" class="kalles-section">
            <ul id="menu_mb_cat" class="nt_mb_menu">
                
                @if(!empty(menu($shopid)))
                    @foreach(menu($shopid) as $cat_val)

                    <li class="menu-item">
                        <a href="{{ url('/').'/'.$shopid. '/catalogs/' . $cat_val->id }}">{{ $cat_val->name }}</a>
                    </li>
                    @endforeach
                @endif
            </ul>
        </div>
    </div>
</div>
<!-- end mobile menu -->



<script data-cfasync="false" src="<?php echo WEBSITE_URL;?>frontassets/theme5/assets/js/email-decode.min.js"></script>
<script src="<?php echo WEBSITE_URL;?>frontassets/theme5/assets/js/jquery-3.5.1.min.js"></script>
<script src="<?php echo WEBSITE_URL;?>frontassets/theme5/assets/js/jarallax.min.js"></script>
<script src="<?php echo WEBSITE_URL;?>frontassets/theme5/assets/js/packery.pkgd.min.js"></script>
<script src="<?php echo WEBSITE_URL;?>frontassets/theme5/assets/js/jquery.hoverIntent.min.js"></script>
<script src="<?php echo WEBSITE_URL;?>frontassets/theme5/assets/js/magnific-popup.min.js"></script>
<script src="<?php echo WEBSITE_URL;?>frontassets/theme5/assets/js/flickity.pkgd.min.js"></script>
<script src="<?php echo WEBSITE_URL;?>frontassets/theme5/assets/js/lazysizes.min.js"></script>
<script src="<?php echo WEBSITE_URL;?>frontassets/theme5/assets/js/js-cookie.min.js"></script>
<script src="<?php echo WEBSITE_URL;?>frontassets/theme5/assets/js/jquery.countdown.min.js"></script>
<script src="<?php echo WEBSITE_URL;?>frontassets/theme5/assets/js/interface.js"></script>
<link rel="stylesheet" href="<?php echo WEBSITE_URL;?>frontassets/sweetalertlibrary/sweetalert.min.css">
<script src="<?php echo WEBSITE_URL;?>frontassets/sweetalertlibrary/sweetalert.min.js"></script>
<script src="<?php echo WEBSITE_URL;?>frontassets/theme1/assets/js/jquery-ui.js"></script>
<script src="<?php echo WEBSITE_URL;?>frontassets/theme1/assets/js/js-cookie.min.js"></script>
<script src="<?php echo WEBSITE_URL;?>frontassets/projectscript.js"></script>
<script src="<?php echo WEBSITE_URL;?>frontassets/theme2/js/plugins.js"></script>
<script type="text/javascript">
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
