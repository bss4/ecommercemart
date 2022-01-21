@extends('frontend.theme5.layouts.default')   
@section('content')
        <!-- main slide -->
        <div class="kalles-section nt_section type_image_text_overlay">
            <div class="kalles-decor__slide-banner nt_full txt_shadow_false se_height_cus_h nt_first">
                <div class="row equal_nt">
                    <div class="col-12">
                        <div class="nt_img_txt oh pr middle center">
                            <div class="js_full_ht4 lazyload item__position bg_rp_norepeat bg_sz_cover center" data-bgset="<?php echo WEBSITE_URL;?>frontassets/theme5/assets/images/main-slide.jpg"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end main slide -->

        <!-- bestselling products-->
        <div class="kalles-decor__bestselling-product-wrap kalles-section nt_section type_featured_collection tp_se_cdt">
            <div class="kalles-decor__bestselling-product-inner nt_full">
                <div class="wrap_title des_title_8">
                    <h3 class="section-title tc pr flex fl_center al_center fs__24 title_8">
                        <span class="mr__10 ml__10">best selling products</span>
                    </h3>
                    <span class="dn tt_divider"><span></span><i class="dn clprfalse title_8 la-gem"></i><span></span></span>
                   
                </div>
                <div class="products nt_products_holder row fl_center row_pr_2 cdt_des_2 round_cd_false nt_cover ratio1_1 position_8 space_30 equal_nt" id="myList">
                    @if(!empty($seller_products))
                    @foreach($seller_products as $seller_product_val)
                        <div class="col-lg-2 col-md-3 col-6 pr_animated done mt__30 pr_grid_item product nt_pr desgin__2 tc">
                            <div class="product-inner pr">
                                <div class="product-image pr oh lazyload">
                                    <a class="db" href="{{ url('/').'/'.$shopid. '/single-product-detail/' . $seller_product_val->id }}">
                                        <div class="pr_lazy_img main-img nt_img_ratio nt_bg_lz lazyload padding-top__100" data-bgset="{{ PRODUCT_URL.$seller_product_val->image}}"></div>
                                    </a>
                                    <div class="nt_add_w ts__03 pa ">
                                        <a href="#" onclick="return add_to_wishlist(this);" data-id="{{$seller_product_val->id}}" class="wishlistadd cb chp ttip_nt tooltip_right add_to_wishlist">
                                            <span class="tt_txt">Add to Wishlist</span><i class="facl facl-heart-o"></i>
                                        </a>
                                    </div>
                                    <div class="hover_button op__0 tc pa flex column ts__03">
                                        <a class="pr nt_add_qv js_add_qv cd br__40 pl__25 pr__25 bgw tc dib ttip_nt tooltip_top_left" href="#" onclick="return quickview(<?php echo $seller_product_val->id;?>)">
                                            <span class="tt_txt">Quick view</span><i class="iccl iccl-eye"></i><span>Quick view</span>
                                        </a>
                                         <a href="#" class="pr pr_atc cd br__40 bgw tc dib js__qs cb chp ttip_nt tooltip_top_left" onclick="return quickview(<?php echo $seller_product_val->id;?>)">
                                            <span class="tt_txt">Quick Shop</span>
                                            <i class="iccl iccl-cart"></i>
                                            <span>Quick Shop</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="product-info mt__15">
                                    <h3 class="product-title pr fs__14 mg__0 fwm">
                                        <a class="cd chp" href="{{ url('/').'/'.$shopid. '/single-product-detail/' . $seller_product_val->id }}">{{isset($seller_product_val->name)?$seller_product_val->name:''}}</a>
                                    </h3>
                                    <span class="price dib mb__5">₹{{isset($seller_product_val->discount_price)?$seller_product_val->discount_price:''}}</span>
                                    <del>₹{{isset($seller_product_val->price)?$seller_product_val->price:''}}</del>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    @endif
                </div>
                @if(!empty($seller_products) &&  count($seller_products)>8)
                <div class="products-footer tc mt__40">
                    <a class="se_cat_lm pr nt_cat_lm button button_dark br_rd_false btn_icon_true" href="#" id="loadMore">Load More</a>
                </div>
                @endif
                
            </div>
        </div>
        <!-- end bestselling products-->

        <!--shipping info-->
        <div class="kalles-section nt_section type_shipping bg-white">
            <div class="kalles-decor__shipping-info container">
                <div class="row fl_wrap fl_wrap_md oah use_border_false">
                    <div class="col-12 col-md-6 col-lg-3 mb__25">
                        <div class="nt_shipping nt_icon_deafult tl row no-gutters al_center_">
                            <div class="col-auto icon large csi"><i class="las la-plane"></i></div>
                            <div class="col content">
                                <h3 class="title cd fs__14 mg__0 mb__5">Free Shipping</h3>
                                <p class="mg__0">Free shipping for all US order</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3 mb__25">
                        <div class="nt_shipping nt_icon_deafult tl row no-gutters al_center_">
                            <div class="col-auto icon large csi"><i class="las la-life-ring"></i></div>
                            <div class="col content">
                                <h3 class="title cd fs__14 mg__0 mb__5">Support 24/7</h3>
                                <p class="mg__0">we support 24 hours a day</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3 mb__25">
                        <div class="nt_shipping nt_icon_deafult tl row no-gutters al_center_">
                            <div class="col-auto icon large csi"><i class="las la-sync-alt"></i></div>
                            <div class="col content">
                                <h3 class="title cd fs__14 mg__0 mb__5">30 days return</h3>
                                <p class="mg__0">you have 30 days to return</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3 mb__25">
                        <div class="nt_shipping nt_icon_deafult tl row no-gutters al_center_">
                            <div class="col-auto icon large csi"><i class="las la-shield-alt"></i></div>
                            <div class="col content">
                                <h3 class="title cd fs__14 mg__0 mb__5">Payment 100% Secure</h3>
                                <p class="mg__0">Payment 100% Secure</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end shipping info-->

     
@endsection