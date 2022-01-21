@extends('frontend.theme1.layouts.default')   
@section('content')
<input type="hidden" value="{{ $product_data->id }}" id="productid">
<div class="sp-single sp-single-1 des_pr_layout_1 mb__60">
            <!-- breadcrumb -->

            <div class="bgbl pt__20 pb__20 lh__1">

                <div class="container">

                    <div class="row al_center">

                        <div class="col">

                            <nav class="sp-breadcrumb">

                                <a href="{{route('frontend.index',$shopid)}}">Home</a><i class="facl facl-angle-right"></i>{{ isset($product_data->name)?$product_data->name:'' }}

                            </nav>

                        </div>

                        

                    </div>

                </div>

            </div>

            <!-- end breadcrumb -->

            <div class="container container_cat cat_default">

                <div class="row product mt__40">

                    <div class="col-md-12 col-12 thumb_left">

                        <div class="row mb__50 pr_sticky_content">
                            <!-- product thumbnails -->

                            <div class="col-md-6 col-12 pr product-images img_action_zoom pr_sticky_img kalles_product_thumnb_slide">

                                <div class="row theiaStickySidebar">

                                    <div class="col-12 col-lg col_thumb">

                                        <div class="p-thumb p-thumb_ppr images sp-pr-gallery equal_nt nt_contain ratio_imgtrue position_8 nt_slider pr_carousel" data-flickity='{"initialIndex": ".media_id_001","fade":true,"draggable":">1","cellAlign": "center","wrapAround": true,"autoPlay": false,"prevNextButtons":true,"adaptiveHeight": true,"imagesLoaded": false, "lazyLoad": 0,"dragThreshold" : 6,"pageDots": false,"rightToLeft": false }'>

                                            @if($product_data->product_image)

                                            @foreach($product_data->product_image as $prod_img_val)
                                             <div class="img_ptw p_ptw p-item sp-pr-gallery__img w__100 nt_bg_lz lazyload padding-top__127_66 media_id_001" data-mdid="001" data-height="1440" data-width="1128" data-ratio="0.7833333333333333" data-mdtype="image" data-src="{{ PRODUCT_URL.$prod_img_val['image']}}" data-bgset="{{ PRODUCT_URL.$prod_img_val['image']}}" data-cap="{{ isset($product_data->name)?$product_data->name:''}}" id="product-img"></div>
                                            @endforeach
                                            @endif

                                        </div>

                                        <div class="p_group_btns pa flex">

                                            <button class="br__40 tc flex al_center fl_center show_btn_pr_gallery ttip_nt tooltip_top_left">

                                                <i class="las la-expand-arrows-alt"></i><span class="tt_txt">Click to enlarge</span>

                                            </button>

                                        </div>

                                    </div>

                                    <div class="col-12 col-lg-auto col_nav nav_medium t4_show">

                                        <div class="p-nav ratio_imgtrue row equal_nt nt_cover position_8 nt_slider pr_carousel" data-flickityjs='{"initialIndex": ".media_id_001","cellSelector": ".n-item:not(.is_varhide)","cellAlign": "left","asNavFor": ".p-thumb","wrapAround": true,"draggable": ">1","autoPlay": 0,"prevNextButtons": 0,"percentPosition": 1,"imagesLoaded": 0,"pageDots": 0,"groupCells": 3,"rightToLeft": false,"contain":  1,"freeScroll": 0}'></div>

                                        <button type="button" aria-label="Previous" class="btn_pnav_prev pe_none">

                                            <i class="las la-angle-up"></i>

                                        </button>

                                        <button type="button" aria-label="Next" class="btn_pnav_next pe_none">

                                            <i class="las la-angle-down"></i>

                                        </button>

                                    </div>

                                    <div class="dt_img_zoom pa t__0 r__0 dib"></div>

                                </div>

                            </div>

                            <!-- end product thumbnails -->



                            <!-- product detail -->

                            <div class="col-md-6 col-12 product-infors pr_sticky_su">

                                <div class="theiaStickySidebar">

                                    <div class="kalles-section-pr_summary kalles-section summary entry-summary mt__30">

                                        <h1 class="product_title entry-title fs__16">{{ isset($product_data->name)?$product_data->name:'' }}</h1>

                                        <div class="flex wrap fl_between al_center price-review">

                                            <p class="price_range" id="price_ppr">₹{{ isset($product_data->discount_price)?$product_data->discount_price:'' }} <del>₹{{ isset($product_data->price)?$product_data->price:'' }}</del></p>



                                        </div>

                                        <div class="pr_short_des">

                                            <p class="mg__0">{{ isset($product_data->description)?$product_data->description:'' }}</p>

                                        </div>
                                        
                                        <div class="btn-atc atc-slide btn_des_1 btn_txt_3">

                                            <div id="callBackVariant_ppr">
                                                @if($product_data->type!='simple')
                                            	@if($CatalogueAttributes)
                                                <div class="variations mb__40 style__circle size_medium style_color des_color_1">
                                                    <?php $k =0;?>
                                                    @foreach($CatalogueAttributes as $cata_attr_val)
                                                    
                                                    <div class="swatch is-label kalles_swatch_js">
                                                        <h4 class="swatch__title">{{ $cata_attr_val->attr_name }}:

                                                            <span class="nt_name_current user_choose_js">
                                                            <?php
                                                            if($cata_attr_val->attr_value!='')
                                                            {
                                                                $currentsizearr = explode(',',$cata_attr_val->attr_value);

                                                                echo $currentsizearr[0];
                                                            }
                                                            ?>
                                                            </span>

                                                        </h4>

                                                        <ul class="swatches-select swatch__list_pr d-flex">
                                                            @if($cata_attr_val->attr_value!='')
                                                            <li class="nt-swatch swatch_pr_item pr is-selected attribute{{$k}}" data-escape="{{$currentsizearr[0]}}" onclick="return variationfilter(this);">

                                                                <span class="swatch__value_pr">{{$currentsizearr[0]}}</span>

                                                            </li> 
                                                            <?php

                                                            for($i=1;$i<count($currentsizearr);$i++)
                                                            {?>

                                                            <li class="nt-swatch swatch_pr_item pr attribute{{$k}}" data-escape="{{$currentsizearr[$i]}}" onclick="return variationfilter(this);">

                                                                <span class="swatch__value_pr">{{$currentsizearr[$i]}}</span>

                                                            </li>

                                                            <?php }
                                                            ?>

                                                            @endif
                                                            

                                                        </ul>

                                                    </div>
                                                    <?php $k++;?>
                                                    @endforeach

                                                </div>
                                                @endif
                                                 @endif
                                                <div class="nt_cart_form variations_form variations_form_ppr">

                                                    <div class="variations_button in_flex column w__100 buy_qv_false">

                                                        <div class="flex wrap">

                                                            <div class="quantity pr mr__10 order-1 qty__true d-inline-block" id="sp_qty_ppr">

                                                                <input type="number" class="input-text qty text tc qty_pr_js qty_cart_js" name="quantity" value="1">

                                                                <div class="qty tc fs__14">

                                                                    <button type="button" class="plus db cb pa pd__0 pr__15 tr r__0">

                                                                        <i class="facl facl-plus"></i></button>

                                                                    <button type="button" class="minus db cb pa pd__0 pl__15 tl l__0">

                                                                        <i class="facl facl-minus"></i></button>

                                                                </div>

                                                            </div>

                                                            <div class="nt_add_w ts__03 pa order-3">

                                                                <a href="#" class="wishlistadd cb chp ttip_nt tooltip_top_left add_to_wishlist" onclick="return add_to_wishlist(this);" data-id="{{$product_data->id}}">

                                                                    <span class="tt_txt">Add to Wishlist</span><i class="facl facl-heart-o"></i>

                                                                </a>

                                                            </div>

                                                            <button type="submit" data-time="6000" data-ani="shake" class="single_add_to_cart_button add_to_cart button truncate w__100 mt__20 order-4 d-inline-block animated" onclick="return add_to_cart(this);" data-id="{{$product_data->id}}">

                                                                <span class="txt_add ">Add to cart</span></button>

                                                        </div>

                                                    </div>

                                                </div>

                                            </div>

                                        </div>
                                       
                                        <div id="trust_seal_ppr" class="pr_trust_seal tl_md tc">

                                            <img class="img_tr_s1 lazyload w__100 max-width__330px" src="assets/images/single-product/trust_img2.png" alt="" />

                                        </div>

                                        

                                        <div class="product_meta">

                                            <span class="sku_wrapper"><span class="cb">SKU:</span> <span class="sku value cg d-inline-block">{{isset($product_data->sku)?$product_data->sku:''}}</span></span>

                                       

                                        </div>

                                    
                                    </div>

                                </div>

                            </div>

                            <!-- end product detail -->



                        </div>

                    </div>

                </div>

            </div>



            <div class="clearfix"></div>



            <!--product recommendations section-->

            <div class="kalles-section tp_se_cdt">

                <div class="related product-extra mt__60 lazyload">

                    <div class="container">

                        <div class="wrap_title des_title_1">

                            <h3 class="section-title tc pr flex fl_center al_center fs__24 title_1">

                                <span class="mr__10 ml__10">You may also like</span></h3>

                            <span class="dn tt_divider"><span></span><i class="dn clprfalse title_1 la-gem"></i><span></span></span><span class="section-subtitle db tc sub-title"></span>

                        </div>

                        <div class="products nt_products_holder nt_slider row row_pr_1 cdt_des_1 round_cd_false nt_cover ratio_nt position_8 space_30 prev_next_0 btn_owl_1 dot_owl_1 dot_color_1 btn_vi_1 is-draggable" data-flickity='{"imagesLoaded": 0,"adaptiveHeight": 0, "contain": 1, "groupCells": "100%", "dragThreshold" : 5, "cellAlign": "left","wrapAround": true,"prevNextButtons": false,"percentPosition": 1,"pageDots": false, "autoPlay" : 0, "pauseAutoPlayOnHover" : true, "rightToLeft": false }'>

                            @if(!empty($product_like))
                            @foreach($product_like as $product_val)
                             <div class="col-lg-3 pr_animated col-md-3 col-6 mt__30 pr_grid_item product nt_pr desgin__1 done">

                                <div class="product-inner pr">

                                    <div class="product-image pr oh lazyload">

                                        <a class="d-block" href="{{ url('/').'/'.$shopid. '/single-product-detail/' . $product_val->id }}">

                                            <div class="pr_lazy_img main-img nt_img_ratio nt_bg_lz lazyload padding-top__127_571" data-bgset="{{ isset($product_val->image)?PRODUCT_URL.$product_val->image:'' }}"></div>

                                        </a>

                                        <div class="hover_img pa pe_none t__0 l__0 r__0 b__0 op__0">

                                            <div class="pr_lazy_img back-img pa nt_bg_lz lazyload padding-top__127_571" data-bgset="{{ isset($product_val->image)?PRODUCT_URL.$product_val->image:'' }}"></div>

                                        </div>

                                        <div class="nt_add_w ts__03 pa ">

                                            <a href="#" class="wishlistadd cb chp ttip_nt tooltip_right" onclick="return add_to_wishlist(this);" data-id="{{$product_val->id}}"><span class="tt_txt">Add to Wishlist</span><i class="facl facl-heart-o"></i></a>

                                        </div>

                                        <div class="hover_button op__0 tc pa flex column ts__03">

                                            <a class="pr nt_add_qv js_add_qv cd br__40 pl__25 pr__25 bgw tc dib ttip_nt tooltip_top_left" href="#" onclick="return quickview(<?php echo $product_val->id;?>)"><span class="tt_txt">Quick view</span><i class="iccl iccl-eye"></i><span>Quick view</span></a>

                                            <a href="#" class="pr pr_atc cd br__40 bgw tc dib js__qs cb chp ttip_nt tooltip_top_left" onclick="return quickview(<?php echo $product_val->id;?>)"><span class="tt_txt">Quick Shop</span><i class="iccl iccl-cart"></i><span>Quick Shop</span></a>

                                        </div>


                                    </div>

                                    <div class="product-info mt__15">

                                        <h3 class="product-title pr fs__14 mg__0 fwm">

                                            <a class="cd chp" href="{{ url('/').'/'.$shopid. '/single-product-detail/' . $product_val->id }}">{{ isset($product_val->name)?$product_val->name:'' }}</a>

                                        </h3>

                                        <span class="price dib mb__5">₹{{ isset($product_val->discount_price)?$product_val->discount_price:'' }}</span>
                                        <del class="price dib mb__5">₹{{ isset($product_val->price)?$product_val->price:'' }}</del>

                                    </div>

                                </div>

                            </div>
                            @endforeach
                            @endif
                           

                        </div>

                    </div>

                </div>

            </div>

            <!--end product recommendations section-->



        </div>    

@endsection