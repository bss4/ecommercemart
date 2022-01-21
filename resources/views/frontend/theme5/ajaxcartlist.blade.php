<input type="hidden" id="currentUser" value="<?php if(!empty(Auth::user()->id)){ echo Auth::user()->id;}?>">
<div class="col-12 col-md-6 cart_actions tl_md tc order-md-2 order-2 mb__50">
    <form method="post" action="javascript:void(0);" >
     @csrf
    <div class="coupon-code-box">
        <label>Have a coupon? <em>Click here to enter your code.</em></label>
        <input type="hidden" name="app_id" id="app_id" value="{{$shopid}}">
        <input type="text" name="coupon_name" id="couponcode" value="" placeholder="Coupon code">
        <button  type="submit" id="apply_coupon_code">Apply Coupon</button>
        
    </div>
    </form>
</div>
 <form action="#" method="post" class="frm_cart_ajax_true frm_cart_page nt_js_cart pr oh " id="update_cart_form">
               
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" name="app_id" id="app_id" value="{{$shopid}}">
                <div class="cart_header">

                    <div class="row al_center">

                        <div class="col-5">Product</div>

                        <div class="col-3 tc">Price</div>

                        <div class="col-2 tc">Quantity</div>

                        <div class="col-2 tc tr_md">Total</div>

                    </div>

                </div>

                <div class="cart_items js_cat_items">
                   
                   <?php 
                  
                   $total =0; $product_total_price = 0; ?>
                    @php $total = 0 @endphp
                    @if($cart_data)
                    @foreach($cart_data as $id => $details)
                    <?php

                     $total += (isset($details['price'])?$details['price']:1) * $details['quantity'];
                     $product_total_price = (isset($details['price'])?$details['price']:1) * $details['quantity'];
                    ?>
                   
                    <div class="cart_item js_cart_item">

                        <div class="ld_cart_bar"></div>

                        <div class="row al_center">

                            <div class="col-12 col-md-12 col-lg-5">

                                <div class="page_cart_info flex al_center">

                                    <a href="{{url('/').'/single-product-detail/'.$details['product']['id']}}">

                                        <img class="lazyload w__100 lz_op_ef" src="{{PRODUCT_URL.$details['product']['image']}}" data-src="{{PRODUCT_URL.$details['product']['image']}}" alt="">

                                    </a>

                                    <div class="mini_cart_body ml__15">

                                        <h5 class="mini_cart_title mg__0 mb__5"><a href="product-detail-layout-01.html">{{isset($details['product']['name'])?$details['product']['name']:''}}</a></h5>

                                        <div class="mini_cart_meta"><p class="cart_selling_plan"></p></div>

                                        <div class="mini_cart_tool mt__10">

                                            <a href="#" class="cart_ac_remove js_cart_rem ttip_nt tooltip_top_right" onclick="return removeCart(<?php echo isset($details['product']['id'])?$details['product']['id']:'';?>);" ><span class="tt_txt">Remove this item</span>

                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">

                                                    <polyline points="3 6 5 6 21 6"></polyline>

                                                    <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>

                                                    <line x1="10" y1="11" x2="10" y2="17"></line>

                                                    <line x1="14" y1="11" x2="14" y2="17"></line>

                                                </svg>

                                            </a>

                                        </div>

                                    </div>

                                </div>

                            </div>

                            <div class="col-12 col-md-4 col-lg-3 tc__ tc_lg">

                                <div class="cart_meta_prices price">

                                    <div class="cart_price">₹{{ isset($details['price'])?$details['price']:'' }}</div>

                                </div>

                            </div>

                            <div class="col-12 col-md-4 col-lg-2 tc mini_cart_actions">

                                <div class="quantity pr mr__10 qty__true quantity_data">
                                    <input type="hidden" name="product_id[]" value="{{ $details['product']['id'] }}">
                                    <input type="number" name="quantity[]" class="input-text qty text tc qty_cart_js" value="{{ $details['quantity'] }}">
                                    

                                    <div class="qty tc fs__14">

                                        <button type="button" class="plus db cb pa pd__0 pr__15 tr r__0" >

                                            <i class="facl facl-plus"></i></button>

                                        <button type="button" class="minus db cb pa pd__0 pl__15 tl l__0 qty_1" >

                                            <i class="facl facl-minus"></i></button>

                                    </div>

                                </div>

                            </div>

                            <div class="col-12 col-md-4 col-lg-2 tc__ tr_lg">

                                <span class="cart-item-price fwm cd js_tt_price_it">₹{{ isset($product_total_price)?$product_total_price:'' }}</span>

                            </div>

                        </div>

                    </div>
                    @endforeach
                    @endif
                </div>

                <div class="cart__footer mt__60 mb__60">

                    <div class="row">

                        <div class="col-12 tr_md tc order-md-4 order-4 col-md-12">

                            <div class="total row in_flex fl_between al_center cd fs__18 tu">

                                <div class="col-auto"><strong>Subtotal:</strong></div>

                                <div class="col-auto tr js_cat_ttprice fs__20 fwm">

                                    <div class="cart_tot_price">₹{{$total}}</div>

                                </div>

                            </div>

                            <div class="clearfix"></div>
                             @if(!empty(session('coupon_session')))

                                    <?php
                                        $offer_type = session('coupon_session')->offer_type;
                                        $amount_off = session('coupon_session')->amount_off;
                                        $code = session('coupon_session')->code;
                                        $coupon_discount = 0;

                                        if($offer_type=='fix')
                                        {
                                            $coupon_discount = $total - $amount_off;

                                        }else
                                        {
                                            $coupon_discount = ($total*$amount_off)/100;
                                        }
                                        
                                    ?>
                                    <form method="post" action="javascript:void(0);">
                                        @csrf
                                        <div class="total row in_flex fl_between al_center cd fs__18 tu">

                                            <div class="col-auto">Coupon:{{$code}}</div>

                                            @if($offer_type=='fix')
                                            
                                                <div class="col-auto tr js_cat_ttprice fs__20 fwm">

                                                    <div class="coupon_price">-₹{{$amount_off}}<a href="#" class="remove_coupon">[Remove]</a></div>

                                                </div>
                                            
                                            @else
                                                <div class="col-auto tr js_cat_ttprice fs__20 fwm">

                                                    <div class="coupon_price">{{$amount_off}}%<a href="#" class="remove_coupon">[Remove]</a></div>

                                                </div>
                                                
                                            
                                            @endif 
                                        </div>      
                                    </form>
                                    @endif
                                <div class="clearfix"></div>
                                 <div class="total row in_flex fl_between al_center cd fs__18 tu">

                                    <div class="col-auto"><strong>Total Amount:</strong></div>

                                    <div class="col-auto tr js_cat_ttprice fs__20 fwm">

                                        <div class="cart_tot_price">₹{{isset($coupon_discount)?$coupon_discount:$total}}</div>

                                    </div>

                                </div>

                                <div class="clearfix"></div>
                             <p class="db txt_tax_ship mb__5">Taxes, shipping and discounts codes calculated at checkout</p>

                           

                            <div class="clearfix"></div>

                            <button type="submit" name="update" class="button btn_update mt__10 mb__10 js_add_ld w__100" id="updatecart">Update Cart</button>

                            <a href="{{route('frontend.checkout',$shopid)}}" class="btn_checkout button button_primary tu mt__10 mb__10 js_add_ld w__100 justify-content-center align-items-center d-inline-flex">Check Out</a>

                            <div class="clearfix"></div>

                            <div class="cat_img_trust mt__10">

                                <img class="lz_op_ef lazyload w-50" src="assets/images/shopping-cart/cart_image.png" alt="">

                            </div>

                        </div>

                    </div>

                </div>

            </form>  