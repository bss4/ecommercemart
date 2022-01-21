@extends('frontend.theme1.layouts.default')   
@section('content')

<!-- main slide -->
<div class="nt_section type_slideshow type_carousel ">
    <div class="slideshow-wrapper nt_full se_height_cus_h nt_first">
        <div class="fade_flick_1 slideshow row no-gutters equal_nt nt_slider js_carousel prev_next_0 btn_owl_1 dot_owl_2 dot_color_1 btn_vi_2" data-flickity='{ "fade":0,"cellAlign": "center","imagesLoaded": 0,"lazyLoad": 0,"freeScroll": 0,"wrapAround": true,"autoPlay" : 0,"pauseAutoPlayOnHover" : true, "rightToLeft": false, "prevNextButtons": false,"pageDots": true, "contain" : 1,"adaptiveHeight" : 1,"dragThreshold" : 5,"percentPosition": 1 }'>

            <!-- first slide -->
            <div class="col-12 slideshow__slide">
                <div class="oh position-relative nt_img_txt bg-black--transparent">
                    <div class="js_full_ht4 img_slider_block kalles-slide-element__pdb-600">
                        <div class="bg_rp_norepeat bg_sz_cover lazyload item__position center center img_tran_ef pa l__0 t__0 r__0 b__0" data-bgset="<?php echo WEBSITE_URL;?>frontassets/assets/images/slide/slider-01.jpg"></div>
                    </div>
                    <div class="caption-wrap caption-w-1 pe_none z_100 tl_md tl">
                        <div class="pa_txts caption kalles-caption-layout-01 kalles-caption--midle-left">
                            <div class="left_right">
                                <h4 class="kalles-caption-layout-01__subtitle mg__0 lh__1">SUMMER 2020</h4>
                                <h3 class="kalles-caption-layout-01__title mg__0 lh__1">New Arrival Collection</h3>
                                <!-- <a class="kalles-caption-layout-01__button kalles-button--square slt4_btn button pe_auto round_false btn_icon_false" href="catalogs.html">Explore Now</a> -->
                            </div>
                        </div>
                    </div>
                    <a href="shop.html" class="pa t__0 l__0 b__0 r__0 pe_none"></a>
                </div>
            </div>
            <!-- end first slide -->

            <!-- second slide -->
            <div class="col-12 slideshow__slide">
                <div class="oh position-relative nt_img_txt bg-black--transparent">
                    <div class="js_full_ht4 img_slider_block kalles-slide-element__pdb-600">
                        <div class="bg_rp_norepeat bg_sz_cover lazyload item__position center center img_zoom pa l__0 t__0 r__0 b__0" data-bgset="<?php echo WEBSITE_URL;?>frontassets/assets/images/slide/slider-02.jpg"></div>
                    </div>
                    <div class="caption-wrap caption-w-1 pe_none z_100 tr_md tl">
                        <div class="pa_txts caption kalles-caption-layout-01 kalles-caption--midle-right">
                            <div class="right_left">
                                <h4 class="kalles-caption-layout-01__subtitle mg__0 lh__1">NEW SEASON</h4>
                                <h3 class="kalles-caption-layout-01__title mg__0 lh__1">Lookbook Collection</h3>
                               <!--  <a class="kalles-caption-layout-01__button kalles-button--square slt4_btn button pe_auto round_false btn_icon_false" href="catalogs.html">Explore Now</a> -->
                            </div>
                        </div>
                    </div>
                    <a href="shop.html" class="pa t__0 l__0 b__0 r__0 pe_none"></a>
                </div>
            </div>
            <!-- end second slide -->

            <!-- third slide -->
            <div class="col-12 slideshow__slide">
                <div class="oh position-relative nt_img_txt bg-black--transparent">
                    <div class="js_full_ht4 img_slider_block kalles-slide-element__pdb-600">
                        <div class="bg_rp_norepeat bg_sz_cover lazyload item__position center center img_tran_ef pa l__0 t__0 r__0 b__0" data-bgset="<?php echo WEBSITE_URL;?>frontassets/assets/images/slide/slider-03.jpg"></div>
                    </div>
                    <div class="caption-wrap caption-w-1 pe_none z_100 tl_md tl">
                        <div class="pa_txts caption kalles-caption-layout-01 kalles-caption--midle-left">
                            <div class="left_right">
                                <h4 class="kalles-caption-layout-01__subtitle mg__0 lh__1">SUMMER SALE</h4>
                                <h3 class="kalles-caption-layout-01__title mg__0 lh__1">Save up to 70%</h3>
                                <!-- <a class="kalles-caption-layout-01__button kalles-button--square slt4_btn button pe_auto round_false btn_icon_false" href="catalogs.html">Explore Now</a> -->
                            </div>
                        </div>
                    </div>
                    <a href="shop.html" class="pa t__0 l__0 b__0 r__0 pe_none"></a>
                </div>
            </div>
            <!-- end third slide -->

        </div>
    </div>
</div>
<!-- end main slide -->

<!-- featured collection -->
<div class="nt_section type_featured_collection tp_se_cdt">
    <div class="kalles-otp-01__feature container">
        <div class="wrap_title des_title_2">
            <h3 class="section-title tc position-relative flex fl_center al_center fs__24 title_2">
                <span class="mr__10 ml__10">TRENDING</span>
            </h3>
            <span class="dn tt_divider">
                <span></span>
                <i class="dn clprfalse title_2 la-gem"></i>
                <span></span>
            </span>
            <span class="section-subtitle db tc sub-title">Top view in this week</span>
        </div>

        <div class="products nt_products_holder row fl_center row_pr_1 cdt_des_5 round_cd_true nt_cover ratio_nt position_8 space_30" id="myList">

            @if(!empty($seller_products))
            @foreach($seller_products as $seller_product_val)
            <div class="col-lg-3 col-md-3 col-6 pr_animated done mt__30 pr_grid_item product nt_pr desgin__1">
               
                <div class="product-inner pr">
                    <div class="product-image position-relative oh lazyload">
                        <span class="tc nt_labels pa pe_none cw">
                            <span class="nt_label new">New</span>
                        </span>
                        <a class="d-block" href="{{ url('/').'/'.$shopid. '/single-product-detail/' . $seller_product_val->id }}">
                            <div class="pr_lazy_img main-img nt_img_ratio nt_bg_lz lazyload padding-top__127_571" data-bgset="{{ PRODUCT_URL.$seller_product_val->image}}"></div>
                        </a>
                        <div class="hover_img pa pe_none t__0 l__0 r__0 b__0 op__0">
                            <div class="pr_lazy_img back-img pa nt_bg_lz lazyload padding-top__127_571" data-bgset="{{ PRODUCT_URL.$seller_product_val->image}}"></div>
                        </div>
                        <div class="nt_add_w ts__03 pa ">
                            <a href="#" class="wishlistadd cb chp ttip_nt tooltip_right add_to_wishlist" onclick="return add_to_wishlist(this);" data-id="{{$seller_product_val->id}}">
                                <span class="tt_txt">Add to Wishlist</span>
                                <i class="facl facl-heart-o"></i>
                            </a>
                        </div>
                        <div class="hover_button op__0 tc pa flex column ts__03">
                            <a class="pr nt_add_qv js_add_qv cd br__40 pl__25 pr__25 bgw tc dib ttip_nt tooltip_top_left" href="#" onclick="return quickview(<?php echo $seller_product_val->id;?>)">
                                <span class="tt_txt">Quick view</span>
                                <i class="iccl iccl-eye"></i>
                                <span>Quick view</span>
                            </a>
                            <a href="#" class="pr pr_atc cd br__40 bgw tc dib js__qs cb chp ttip_nt tooltip_top_left" onclick="return quickview(<?php echo $seller_product_val->id;?>)">
                                <span class="tt_txt">Quick Shop</span>
                                <i class="iccl iccl-cart"></i>
                                <span>Quick Shop</span>
                            </a>
                        </div>
                        <div class="product-attr pa ts__03 cw op__0 tc">
                            <p class="truncate mg__0 w__100 product_size"></p>
                        </div>
                    </div>
                    <div class="product-info mt__15">
                        <h3 class="product-title position-relative fs__14 mg__0 fwm">
                            <a class="cd chp" href="{{ url('/').'/'.$shopid. '/single-product-detail/' . $seller_product_val->id }}">{{isset($seller_product_val->name)?$seller_product_val->name:''}}</a>
                        </h3>
                        <span class="price dib mb__5">
                            <del>{{isset($seller_product_val->price)?$seller_product_val->price:''}}</del>
                            <ins>₹{{isset($seller_product_val->discount_price)?$seller_product_val->discount_price:''}}</ins>
                        </span>
                        
                    </div>
                    <!-- <div class="product-info mt__15">
                        <h3 class="product-title position-relative fs__14 mg__0 fwm">
                            <a class="cd chp" href="{{ url('/').'/'.$shopid. '/single-product-detail/' . $seller_product_val->id }}">₹{{isset($seller_product_val->discount_price)?$seller_product_val->discount_price:''}}</a>
                        </h3>
                       <del class="price dib mb__5">{{isset($seller_product_val->price)?$seller_product_val->price:''}}</del> 
                    </div> -->
                </div>
            </div>
            @endforeach
            @endif
            
        </div>
        @if(!empty($seller_products) && count($seller_products)>8)
        <div class="products-footer tc mt__40" >
            <a class="se_cat_lm pr nt_cat_lm button button_default br_rd_true btn_icon_false" id="loadMore" href="#">Load More</a>
        </div>
        @endif
    </div>
</div>
<!-- end featured collection -->

<!--shipping info-->
<!-- <div class="kalles-section nt_section type_shipping kalles-section__type_shipping">
    <div class="container">
        <div class="row fl_wrap fl_wrap_md oah use_border_false">
            <div class="col-12 col-md-6 col-lg-3 mb__25 bl_1581530479619-0">
                <div class="nt_shipping nt_icon_deafult tl row no-gutters al_center_">
                    <div class="col-auto icon medium csi">
                        <i class="pegk pe-7s-car"></i>
                    </div>
                    <div class="col content">
                        <h3 class="title cd fs__14 mg__0 mb__5">FREE SHIPPING</h3>
                        <p class="mg__0">Free shipping on all US order or order above $100</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3 mb__25 bl_1581530479619-1">
                <div class="nt_shipping nt_icon_deafult tl row no-gutters al_center_">
                    <div class="col-auto icon medium csi">
                        <i class="pegk pe-7s-help2"></i>
                    </div>
                    <div class="col content">
                        <h3 class="title cd fs__14 mg__0 mb__5">SUPPORT 24/7</h3>
                        <p class="mg__0">Contact us 24 hours a day, 7 days a week</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3 mb__25 bl_1581530479619-2">
                <div class="nt_shipping nt_icon_deafult tl row no-gutters al_center_">
                    <div class="col-auto icon medium csi">
                        <i class="pegk pe-7s-refresh"></i>
                    </div>
                    <div class="col content">
                        <h3 class="title cd fs__14 mg__0 mb__5">30 DAYS RETURN</h3>
                        <p class="mg__0">Simply return it within 30 days for an exchange.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3 mb__25 bl_1581530479619-3">
                <div class="nt_shipping nt_icon_deafult tl row no-gutters al_center_">
                    <div class="col-auto icon medium csi">
                        <i class="pegk pe-7s-door-lock"></i>
                    </div>
                    <div class="col content">
                        <h3 class="title cd fs__14 mg__0 mb__5">100% PAYMENT SECURE</h3>
                        <p class="mg__0">We ensure secure payment with PEV</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->
<!--end shipping info-->    
@endsection