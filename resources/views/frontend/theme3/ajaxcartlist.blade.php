<input type="hidden" id="currentUser" value="<?php if(!empty(Auth::user()->id)){ echo Auth::user()->id;}?>">
<div class="col-12 col-md-6 cart_actions tl_md tc mb__30">
    <form method="post" action="javascript:void(0);" >
     @csrf
    <div class="coupon-code-box">
        <label>Have a coupon? <em>Click here to enter your code.</em></label>
        <input type="hidden" name="app_id" id="app_id" value="{{$shopid}}">
        <input type="text" name="coupon_name" id="couponcode" value="" placeholder="Coupon code">
        <button  type="submit" id="apply_coupon_code" class="btn theme-btn-2 btn-effect-2">Apply Coupon</button>
        
    </div>
    </form>
</div>

<div class="col-lg-12">

                     <form action="#" method="post" class="frm_cart_ajax_true frm_cart_page nt_js_cart pr oh " id="update_cart_form">
               
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="hidden" name="app_id" id="app_id" value="{{$shopid}}">
                    <div class="shoping-cart-inner">

                        <div class="shoping-cart-table table-responsive">

                            <table class="table">

                                <thead>

                                    <th class="cart-product-remove">Remove</th>

                                    <th class="cart-product-image">Image</th>

                                    <th class="cart-product-info">Product</th>

                                    <th class="cart-product-price">Price</th>

                                    <th class="cart-product-quantity">Quantity</th>

                                    <th class="cart-product-subtotal">Subtotal</th>

                                </thead>

                                <tbody>
                                    <?php 
                  
                                       $total =0; $product_total_price = 0; ?>
                                        @php $total = 0 @endphp

                                        @foreach($cart_data as $id => $details)
                                        <?php

                                         $total += (isset($details['price'])?$details['price']:1) * $details['quantity'];
                                         $product_total_price = (isset($details['price'])?$details['price']:1) * $details['quantity'];
                                    ?>
                                    <tr>
                                        <input type="hidden" name="product_id[]" value="{{ $details['product']['id'] }}">
                                        
                                        <td class="cart-product-remove" onclick="return removeCart(<?php echo isset($details['product']['id'])?$details['product']['id']:'';?>);" >x</td>

                                        <td class="cart-product-image">

                                            <a href="{{url('/').'/'.$shopid.'/single-product-detail/'.$details['product_id']}}"><img src="{{ isset($details['product']['image'])?PRODUCT_URL.$details['product']['image']:''}}" alt="#"></a>

                                        </td>

                                        <td class="cart-product-info">

                                            <h4><a href="{{url('/').'/'.$shopid.'/single-product-detail/'.$details['product_id']}}">{{isset($details['product']['name'])?$details['product']['name']:''}}</a></h4>

                                        </td>

                                        <td class="cart-product-price">₹{{ isset($details['price'])?$details['price']:'' }}</td>

                                        <td class="cart-product-quantity">

                                            <div class="cart-plus-minus">
                                                 
                                               <input type="number" min="1" name="quantity[]" class="cart-plus-minus-box" value="{{ $details['quantity'] }}">


                                            </div>

                                        </td>

                                        <td class="cart-product-subtotal">₹{{ $product_total_price }}</td>

                                    </tr>
                                    @endforeach
                                    <tr class="cart-coupon-row">


                                        <td colspan="6">

                                            <button class="btn theme-btn-2 btn-effect-2" id="updatecart">Update Cart</button>

                                        </td>

                                    </tr>

                                </tbody>

                            </table>

                        </div>

                        <div class="shoping-cart-total mt-50">

                            <h4>Cart Totals</h4>

                            <table class="table">

                                <tbody>

                                    <tr>

                                        <td>Cart Subtotal</td>

                                        <td>₹{{ $total }}</td>

                                    </tr>
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
                                        <tr>
                                            <td>Coupon:{{$code}}</td>
                                           
                                            @if($offer_type=='fix')
                                            
                                                
                                                <td class="coupon_price">-₹{{$amount_off}}<a href="#" class="remove_coupon">[Remove]</a></td>
                                                

                                            
                                            @else
                                            
                                                <td class="coupon_price">{{$amount_off}}%<a href="#" class="remove_coupon">[Remove]</a></td>
                                                
                                            
                                            @endif 
                                        </tr>      
                                    </form>
                                    @endif
                                    <tr>

                                        <td>Shipping and Handing</td>

                                        <td>₹00.00</td>

                                    </tr>

                                  

                                    <tr>

                                        <td><strong>Order Total</strong></td>

                                        <td><strong>₹{{isset($coupon_discount)?$coupon_discount:$total}}</strong></td>

                                    </tr>

                                </tbody>

                            </table>

                            <div class="btn-wrapper text-right">

                                <a href="{{route('frontend.checkout',$shopid)}}" class="theme-btn-1 btn btn-effect-1">Proceed to checkout</a>

                            </div>

                        </div>

                    </div>
                </form>
                </div>