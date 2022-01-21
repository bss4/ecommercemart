@extends('frontend.theme1.layouts.default')   

@section('content')
    <!-- hero title -->

        <div class="kalles-section page_section_heading">

            <div class="page-head tc pr oh page_bg_img page_head_cart_heading">

                <div class="parallax-inner nt_parallax_false nt_bg_lz pa t__0 l__0 r__0 b__0 lazyload" data-bgset="<?php echo WEBSITE_URL;?>frontassets/theme1/assets/images/shopping-cart/shopping-cart-head.jpg">

                </div>

                <div class="container pr z_100"><h1 class="tu mb__10 cw">Checkout</h1></div>

            </div>

        </div>

        <!-- end hero title -->



        <!--cart section-->

        <div class="kalles-section cart_page_section container mt__60 mb__40">

            <div class="frm_cart_page check-out_calculator">
                <form method="post" action="{{route('frontend.order',$shopid)}}" enctype="multipart/form-data">
                     @csrf

                     <?php 
              
                        $total =0;
                        $product_total_price = 0; 

                        foreach((array) session('cart') as $id => $details)
                        {
                            $total += (isset($details['price'])?$details['price']:1) * $details['quantity'];

                        }

                        
                        if(!empty(session('coupon_session')))
                        {
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

                        }else
                        {
                            $coupon_discount = $total;
                        }
                       
                         $newtotal = $coupon_discount*100;   
                        
                    ?>
                    @if(Auth::user() && $total>0)
                    <script src="https://checkout.razorpay.com/v1/checkout.js"
                                            data-key="{{ config('custom.razor_key') }}"
                                            data-amount="{{$newtotal}}"
                                            data-name="Demo Payment Page"
                                            data-description="CodeHunger"
                                            data-image="{{ asset('/image/nice.png') }}"
                                            data-prefill.name="name"
                                            data-prefill.email="email"
                                            data-theme.color="#9FE2BF">
                    </script>
                    @endif 
                <div class="row">

                    <div class="col-12 col-md-6 col-lg-7">

                        <div class="checkout-section">

                            <h3 class="checkout-section__title">Billing details</h3>

                            <div class="row">

                                <p class="checkout-section__field col-lg-6 col-12">

                                    <label for="f-name">First name</label>

                                    <input type="text" id="f-name" name="first_name" value="" required>

                                </p>

                                <p class="checkout-section__field col-lg-6 col-12">

                                    <label for="l-name">Last name</label>

                                    <input type="text" id="l-name" name="last_name" value="" required>

                                </p>

                                <p class="checkout-section__field col-12">

                                    <label for="company">Company name (optional)</label>

                                    <input type="text" id="company" value="" name="company_name">

                                </p>

                                <p class="checkout-section__field col-12">

                                    <label for="address_country_ship_2">Country / Region *</label>

                                    <select id="address_country_ship_2" class="form-control" name="country" required>

                                        <option value="">---</option>

                                        <option value="United States" selected="">United States</option>

                                        <option value="United Kingdom">United Kingdom</option>

                                        <option value="Italy">Italy</option>

                                        <option value="Germany">Germany</option>

                                        <option value="France">France</option>

                                        <option value="Spain">Spain</option>

                                        <option value="Australia">Australia</option>

                                        <option value="Finland">Finland</option>

                                        <option value="Austria">Austria</option>

                                        <option value="Belgium">Belgium</option>

                                        <option value="Brazil">Brazil</option>

                                        <option value="Canada">Canada</option>

                                        <option value="Chile">Chile</option>

                                        <option value="Cuba">Cuba</option>

                                        <option value="India">India</option>

                                        <option value="Indonesia">Indonesia</option>

                                        <option value="Japan">Japan</option>

                                    </select>

                                </p>

                                <p class="checkout-section__field col-12">

                                    <label for="address_01">Street address *</label>

                                    <input type="text" id="address_01" value="" class="mb__20" name="address_1" placeholder="House number and street name" required>

                                    <input type="text" id="address_02" value="" name="address_2" placeholder="Apartment, suite, unit, etc. (optional)">

                                </p>
                                <p class="checkout-section__field col-12">

                                    <label for="address_province_ship" id="address_province_label">State *</label>
                                    <select name="state" id="address_province_ship" class="form-control" required>
                                        <option value="Andhra Pradesh">Andhra Pradesh</option>
                                        <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                                        <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                        <option value="Assam">Assam</option>
                                        <option value="Bihar">Bihar</option>
                                        <option value="Chandigarh">Chandigarh</option>
                                        <option value="Chhattisgarh">Chhattisgarh</option>
                                        <option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
                                        <option value="Daman and Diu">Daman and Diu</option>
                                        <option value="Delhi">Delhi</option>
                                        <option value="Lakshadweep">Lakshadweep</option>
                                        <option value="Puducherry">Puducherry</option>
                                        <option value="Goa">Goa</option>
                                        <option value="Gujarat">Gujarat</option>
                                        <option value="Haryana">Haryana</option>
                                        <option value="Himachal Pradesh">Himachal Pradesh</option>
                                        <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                                        <option value="Jharkhand">Jharkhand</option>
                                        <option value="Karnataka">Karnataka</option>
                                        <option value="Kerala">Kerala</option>
                                        <option value="Madhya Pradesh">Madhya Pradesh</option>
                                        <option value="Maharashtra">Maharashtra</option>
                                        <option value="Manipur">Manipur</option>
                                        <option value="Meghalaya">Meghalaya</option>
                                        <option value="Mizoram">Mizoram</option>
                                        <option value="Nagaland">Nagaland</option>
                                        <option value="Odisha">Odisha</option>
                                        <option value="Punjab">Punjab</option>
                                        <option value="Rajasthan">Rajasthan</option>
                                        <option value="Sikkim">Sikkim</option>
                                        <option value="Tamil Nadu">Tamil Nadu</option>
                                        <option value="Telangana">Telangana</option>
                                        <option value="Tripura">Tripura</option>
                                        <option value="Uttar Pradesh">Uttar Pradesh</option>
                                        <option value="Uttarakhand">Uttarakhand</option>
                                        <option value="West Bengal">West Bengal</option>
                                    </select>

                                </p>
                                <p class="checkout-section__field col-12">

                                    <label for="address_03">Town / City</label>

                                    <input type="text" id="address_03" value="" name="city" required>

                                </p>

                                <p class="checkout-section__field col-12">

                                    <label for="address_zip_ship_2">Postal/Zip Code</label>

                                    <input type="text" id="address_zip_ship_2" name="postal_code" required/>

                                </p>

                                <p class="checkout-section__field col-12">

                                    <label for="address_phone">Phone</label>

                                    <input type="tel" pattern="[0-9\-]*" id="address_phone" name="phone" required/>

                                </p>

                                <p class="checkout-section__field col-12">

                                    <label for="address_amail">Email</label>

                                    <input type="email" id="address_amail" name="email" required/>

                                </p>

                            </div>

                        </div>

                        <div class="checkout-section">

                            <h3 class="checkout-section__title">Shipping Details</h3>

                            <div class="row">

                                <p class="checkout-section__field col-12">

                                    <label for="order_comments" class="">Order notes (optional)</label>

                                    <textarea id="order_comments" name="order_comments" placeholder="Notes about your order, e.g. special notes for delivery." rows="2" cols="5" name="order_comments"></textarea>

                                </p>

                            </div>

                        </div>



                    </div>

                    <div class="col-12 col-md-6 col-lg-5 mt__50 mb__80 mt-md-0 mb-md-0">

                        <div class="order-review__wrapper">

                            <h3 class="order-review__title">Your order</h3>

                            <div class="checkout-order-review">

                                <table class="checkout-review-order-table">

                                    <thead>

                                    <tr>

                                        <th class="product-name">Product</th>

                                        <th class="product-total">Subtotal</th>

                                    </tr>

                                    </thead>

                                    <tbody>
                                    <?php 
              
                                        $total =0; $product_total_price = 0; ?>
                                        @php $total = 0 @endphp

                                        @foreach((array) session('cart') as $id => $details)
                                        <?php

                                        $total += (isset($details['price'])?$details['price']:1) * $details['quantity'];

                                        $product_total_price = (isset($details['price'])?$details['price']:1) * $details['quantity'];
                                    ?>

                                    <tr class="cart_item">

                                        <td class="product-name">{{isset($details['name'])?$details['name']:''}}<strong class="product-quantity">× {{$details['quantity']}}</strong>

                                        </td>

                                        <td class="product-total"><span class="cart_price">₹{{ $product_total_price }}</span></td>

                                    </tr>
                                     @endforeach

                                    </tbody>

                                    <tfoot>

                                    <tr class="cart-subtotal cart_item">

                                        <th>Subtotal</th>

                                        <td><span class="cart_price">₹{{$total}}</span></td>

                                    </tr>
                                    @if(!empty(session('coupon_session')))
                                   
                                    <tr class="cart_item">

                                        <th>Coupon Code :{{$code}}</th>
                                        @if($offer_type=='fix')
                                            <td><span class="">-₹{{$amount_off}}</span></td>
                                        
                                        @else
                                            <td><span class="">{{$amount_off}}%</span></td>
                                            
                                        @endif 
                                        

                                    </tr>
                                    @endif
                                    <tr class="cart_item">

                                        <th>Shipping</th>

                                        <td><span class="cart_price">₹0.00</span></td>

                                    </tr>

                                    <tr class="order-total cart_item">

                                        <th>Total</th>

                                        <td><strong><span class="cart_price amount">₹{{isset($coupon_discount)?$coupon_discount:$total}}</span></strong></td>

                                    </tr>

                                    </tfoot>

                                </table>

                                <div class="checkout-payment">

                                    <label class="checkout-payment__confirm-terms-and-conditions">

                                        <input type="checkbox" name="terms" id="terms" required>

                                        <span>I have read and agree to the website <a href="{{ route('frontend.termsconditions',$shopid)}}" class="terms-and-conditions-link">terms and conditions</a></span>&nbsp;<span class="required">*</span>

                                    </label>

                                    
                                    <button type="submit" class="button button_primary btn checkout-payment__btn-place-order">Place order</button> 
                                  
                                </div>

                            </div>

                        </div>

                    </div>

                </div>
                </form>
            </div>

        </div>

        <!--end cart section-->

@endsection