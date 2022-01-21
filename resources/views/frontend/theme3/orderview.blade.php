@extends('frontend.theme3.layouts.default')   
@section('content')
<!-- BREADCRUMB AREA START -->
<div class="ltn__breadcrumb-area mb-80 ltn__breadcrumb-area-3 ltn__breadcrumb-color-white bg-overlay-theme-black-90 bg-image plr--9---" data-bg="img/bg/9.jpg">

        <div class="container">

            <div class="row">

                <div class="col-lg-12">

                    <div class="ltn__breadcrumb-inner ltn__breadcrumb-inner-2 justify-content-between">

                        <div class="section-title-area ltn__section-title-2">

                            <h1 class="section-title white-color">My Order</h1>

                        </div>

                    </div>

                </div>

            </div>

        </div>
</div>
<!-- BREADCRUMB AREA END -->

<!-- WISHLIST AREA START -->
<div class="liton__wishlist-area pb-70">

    <div class="container">

        <div class="row">

            <div class="col-lg-12">

                <!-- PRODUCT TAB AREA START -->

                <div class="ltn__product-tab-area">

                    <div class="container">

                        <div class="row">


                            <div class="col-lg-12">

                                <div class="tab-content">

                                   <div class="table-responsive">

                                                <table class="table">
                                                     <thead>

                                                        <th class="cart-product-image">Image</th>

                                                        <th class="cart-product-info">Product Name</th>

                                                        <th class="cart-product-price">Price</th>

                                                        <th class="cart-product-quantity">Quantity</th>

                                                        <th class="cart-product-subtotal">Subtotal</th>

                                                    </thead>
                                                    <tbody>
                                                        <?php 
                  
                                                       $total =0; $product_total_price = 0; ?>
                                                        @php $total = 0 @endphp
                                                       <?php $cartval = $orders_list->cart_value;
                                                        $unserialize_val = unserialize($cartval);

                                                       ?>
                                                       @if($unserialize_val)
                                                       @foreach($unserialize_val as $val)
                                                        <?php

                                                             $total += (isset($val['price'])?$val['price']:1) * $val['quantity'];
                                                             $product_total_price = (isset($val['price'])?$val['price']:1) * $val['quantity'];
                                                        ?>
                                                       <tr>
                                                        <td class="cart-product-image">
                                                        <img src="{{ isset($val['product']['image'])?PRODUCT_URL.$val['product']['image']:''}}" alt="#">
                                                        </td>
                                                        <td class="cart-product-info">

                                                        <h4>{{isset($val['product']['name'])?$val['product']['name']:''}}</h4>

                                                        </td>
                                                        <td class="cart-product-price">₹{{ isset($val['price'])?$val['price']:'' }}</td>
                                                        <td class="cart-product-quantity">{{ isset($val['quantity'])?$val['quantity']:'0' }}</td>
                                                        @if(!empty($order_value["product"]["product_file"]))
                                                        <td class="cart-product-quantity">
                                                       <a href='{{ PRODUCT_FILE_URL.$val["product"]["product_file"] }}' download class="btn btn-primary">
                                                        Click Here To Download</a>
                                                        </td>
                                                        @endif
                                                        <td class="cart-product-subtotal">₹{{ $product_total_price }}</td>
                                                       </tr>
                                                       @endforeach
                                                       @else
                                                       <tr>Data not found!</tr>
                                                       @endif
                                                        
                                                        
                                                    </tbody>

                                                </table>

                                            </div>

                                             <div class="shoping-cart-total">

                                                

                                                <table class="table">

                                                    <tbody>

                                                        <tr>

                                                            <td><strong>Order Total</strong></td>

                                                            <td><strong>₹{{ $total }}</strong></td>

                                                        </tr>

                                                    </tbody>

                                                </table>


                                            </div>
                                </div>

                            </div>

                        </div>

                    </div>

                </div>

                <!-- PRODUCT TAB AREA END -->

            </div>

        </div>

    </div>
</div>
<!-- WISHLIST AREA START -->
@endsection