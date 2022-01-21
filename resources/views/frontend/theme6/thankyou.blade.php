@extends('frontend.theme6.layouts.default')   
@section('content')
@if(Auth::user()->id)
<main id="content">
    <div class="bg-gray-200 space-bottom-3 thankyou-page">
        <div class="container">
            <div class="py-5 py-lg-7">
                <h1>Order Received</h1>
            </div>
            <div class="max-width-890 mx-auto">
                <div class="bg-white pt-6 border">
                    <h6 class="success-text">Thank you. Your order has been received.</h6>
                    <div class="border-bottom mb-4 pb-5">
                        <div class="pl-3">
                            <table class="table table-borderless mb-0 ml-1">
                                <thead>
                                    <tr>
                                        <th scope="col" class="font-size-2 font-weight-normal py-0">Order number:</th>
                                        <th scope="col" class="font-size-2 font-weight-normal py-0">Date:</th>
                                        <th scope="col" class="font-size-2 font-weight-normal py-0 text-md-center">Total: </th>
                                        <th scope="col" class="font-size-2 font-weight-normal py-0 text-md-right pr-md-9">Payment method:</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row" class="pr-0 py-0 font-weight-medium">{{ $orderdata->id }}</th>
                                        <td class="pr-0 py-0 font-weight-medium"><?php echo Date('F d,Y'); ?></td>
                                        <td class="pr-0 py-0 font-weight-medium text-md-center">₹{{ $orderdata->price }}</td>
                                        <td class="pr-md-4 py-0 font-weight-medium text-md-right">Direct bank transfer</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="border-bottom mb-3 pb-6">
                        <div class="px-3 px-md-4">
                            <div class="ml-md-2">
                                <h6 class="font-size-3 on-weight-medium mb-4 pb-1">Order Details</h6>
                                @if(!empty($orderdata->cart_value))
                                <?php $product_total_price = 0; $total=0;?>
                                @foreach(unserialize($orderdata->cart_value) as $order_value)
                                <?php
                                  $product_total_price = (isset($order_value['price'])?$order_value['price']:1) * $order_value['quantity'];
                                  $total +=$product_total_price;
                                ?>
                                <div class="d-flex justify-content-between mb-4">
                                    <div class="d-flex align-items-baseline">
                                        <div>
                                            <h6 class="font-size-2 font-weight-normal mb-1">{{ $order_value["product"]["name"] }}</h6>
                                            <span class="font-size-2 text-gray-600">{{ $order_value["product"]["sku"] }}</span>
                                        </div>
                                        <span class="font-size-2 ml-4 ml-md-8">x{{ $order_value["quantity"] }}</span>
                                    </div>
                                    @if(!empty($order_value["product"]["product_file"]))
                                   <a href='{{ PRODUCT_FILE_URL.$order_value["product"]["product_file"] }}' download class="btn btn-primary">
                                    Click Here To Download</a>
                                    @endif
                                    <span class="font-weight-medium font-size-2">₹{{ $product_total_price }}</span>
                                </div>
                                @endforeach
                                @endif
                                
                            
                            </div>
                        </div>
                    </div>
                    <div class="border-bottom mb-3 pb-4">
                        <ul class="list-unstyled px-3 pl-md-5 pr-md-4 mb-0">
                            <li class="d-flex justify-content-between py-2">
                                <span class="font-weight-medium font-size-2">Subtotal:</span>
                                <span class="font-weight-medium font-size-2">₹{{ $orderdata->price}}</span>
                            </li>
                            @if(!empty($orderdata->coupon_value) && isset($orderdata->coupon_value))
                            <?php 

                                $coupon_value = unserialize($orderdata->coupon_value);
                                $offer_type = $coupon_value->offer_type;
                                $amount_off = $coupon_value->amount_off;
                                $code = $coupon_value->code;
                                $coupon_discount = 0;

                                if($offer_type=='fix')
                                {
                                    $coupon_discount = $total - $amount_off;

                                }else
                                {
                                    $coupon_discount = ($total*$amount_off)/100;
                                }
                            ?>
                            <li class="d-flex justify-content-between py-2">
                                <span class="font-weight-medium font-size-2">Coupon Code:{{$code}}</span>
                                @if($offer_type=='fix')
                                <span class="font-weight-medium font-size-2">-₹{{$amount_off}}</span>
                                  
                                @else
                                <span class="font-weight-medium font-size-2">{{$amount_off}}%</span>
                                     
                                @endif 
                                
                            </li>
                            @endif
                            <li class="d-flex justify-content-between py-2">
                                <span class="font-weight-medium font-size-2">Shipping:</span>
                                <span class="font-weight-medium font-size-2">Free Shipping</span>
                            </li>
                            <li class="d-flex justify-content-between pt-2">
                                <span class="font-weight-medium font-size-2">Payment Method:</span>
                                <span class="font-weight-medium font-size-2">Direct bank transfer</span>
                            </li>
                        </ul>
                    </div>
                    <div class="border-bottom mb-4 pb-4">
                        <div class="px-3 pl-md-5 pr-md-4">
                            <div class="d-flex justify-content-between">
                                <span class="font-size-2 font-weight-medium">Total</span>
                                <span class="font-weight-medium fon-size-2">₹{{ isset($coupon_discount)?$coupon_discount:$total }}</span>
                            </div>
                        </div>
                    </div>
                    <div class="px-3 pl-md-5 pr-md-4 mb-6 pb-4">
                        <div class="row row-cols-1 row-cols-md-2">
                            <div class="col">
                                <div class="mb-6 mb-md-0">
                                    <h6 class="font-weight-medium font-size-22 mb-3">Billing Address</h6>
                                    <address class="d-flex flex-column mb-0">
                                        <span class="text-gray-600 font-size-2">{{$orderdata->firstname}}  {{$orderdata->lastname }}</span>
                                        <span class="text-gray-600 font-size-2">{{$orderdata->address_1}},</span>
                                        <span class="text-gray-600 font-size-2">{{$orderdata->address_2}}</span>
                                        <span class="text-gray-600 font-size-2">{{$orderdata->city}}, </span>
                                        <span class="text-gray-600 font-size-2">{{$orderdata->state}}</span>
                                        <span class="text-gray-600 font-size-2">{{$orderdata->country}}</span>
                                        <span class="text-gray-600 font-size-2">{{$orderdata->postal_code}}</span>
                                        
                                    </address>
                                </div>
                            </div>
                            <div class="col">
                                <h6 class="font-weight-medium font-size-22 mb-3">Shipping Address</h6>
                                <address class="d-flex flex-column mb-0">
                                    <span class="text-gray-600 font-size-2">{{$orderdata->firstname }} {{$orderdata->lastname }}</span>
                                    <span class="text-gray-600 font-size-2">{{$orderdata->address_1}},</span>
                                    <span class="text-gray-600 font-size-2">{{$orderdata->address_2}}</span>
                                    <span class="text-gray-600 font-size-2">{{$orderdata->city}}, </span>
                                    <span class="text-gray-600 font-size-2">{{$orderdata->state}}</span>
                                    <span class="text-gray-600 font-size-2">{{$orderdata->postal_code}}</span>
                                    <span class="text-gray-600 font-size-2">{{$orderdata->country}}</span>
                                </address>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endif
@endsection