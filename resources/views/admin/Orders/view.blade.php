@extends('layouts.default')
@section('content')
<!-- BEGIN: Content-->
<div class="content-wrapper">
   <div class="content-header row">
   </div>
   <div class="content-body">
      <!-- page users view start -->
      <section class="page-users-view">
         <div class="row">
            <!-- account start -->
            <div class="col-12">
               <div class="card">
                  <div class="card-header">
                     <div class="card-title">Account</div>
                     <h2>

                          <a href='{{ route("Orders.index")}}' >

                              <button type="button" class="btn btn-primary waves-effect second-head-button">

                                  {{ trans("messages.global.back") }}

                              </button>

                          </a>

                      </h2>
                  </div>
                  <div class="card-body">
                     <div class="row">
                        <div class="col-12 col-sm-9 col-md-6 col-lg-5">
                           <table>
                              <tr>
                                 <td class="font-weight-bold">seller Name</td>
                                 <td>{{isset($modeldata->sellers->name)?$modeldata->sellers->name:''}}</td>
                              </tr>
                              <tr>
                                 <td class="font-weight-bold">User Name</td>
                                 <td>{{isset($modeldata->users->name)?$modeldata->users->name:''}}</td>
                              </tr>
                              <tr>
                                 <td class="font-weight-bold">Firstname</td>
                                 <td>{{isset($modeldata->firstname)?$modeldata->firstname:''}}</td>
                              </tr>
                              <tr>
                                <td class="font-weight-bold">last name</td>
                                <td>{{isset($modeldata->lastname )?$modeldata->lastname :''}}</td>
                              </tr>
                                <tr>
                                    <td class="font-weight-bold">Company name</td>
                                    <td>{{isset($modeldata->company_name )? ucfirst($modeldata->company_name) :''}}</td>
                                </tr>
                                <tr>
                                    <td class="font-weight-bold">Address </td>
                                    <td>{{isset($modeldata->address_1 )? ucfirst($modeldata->address_1) :''}},</td>
                                    <td>{{isset($modeldata->address_2 )? ucfirst($modeldata->address_2) :''}}</td>
                                </tr>
                                <tr>
                                    <td class="font-weight-bold">City</td>
                                    <td>{{isset($modeldata->city )? $modeldata->city :''}}</td>
                                </tr>
                              <tr>
                                 <td class="font-weight-bold">State</td>
                                 <td>{{isset($modeldata->state)?$modeldata->state:''}}</td>
                              </tr>
                              <tr>
                                 <td class="font-weight-bold">Country</td>
                                 <td>{{isset($modeldata->country)?$modeldata->country:''}}</td>
                              </tr>
                              <tr>
                                 <td class="font-weight-bold">Postal code</td>
                                 <td>{{isset($modeldata->postal_code )?$modeldata->postal_code :''}}</td>
                              </tr>
                              <tr>
                                 <td class="font-weight-bold">Phone</td>
                                 <td>{{isset($modeldata->phone )?$modeldata->phone :''}}</td>
                              </tr>
                              <tr>
                                 <td class="font-weight-bold">Email</td>
                                 <td>{{isset($modeldata->email )?$modeldata->email :''}}</td>
                              </tr>
                              <tr>
                                 <td class="font-weight-bold">Shipping Comment</td>
                                 <td>{{isset($modeldata->order_comments )?$modeldata->order_comments :''}}</td>
                              </tr>
                              <tr>
                                 <td class="font-weight-bold">Order Status</td>
                                 <td>{{isset($modeldata->status )?$modeldata->status :''}}</td>
                              </tr>
                           </table>
                        </div>
                        <div class="col-12">
                           <a href="javascript:void(0)" id="{{ $modeldata->id }}" data-type="Inprogress" data-url="{{Route('SellerOrder.statusupdate', $modeldata->id)}}" class="btn btn-primary mr-1 _delivery"><i class="feather icon-check-circle"></i> Inprogress</a>

                           <a href="javascript:void(0)" id="{{ $modeldata->id }}" data-url="{{Route('SellerOrder.statusupdate', $modeldata->id)}}" class="btn btn-info mr-1 _delivery" data-type="Return" ><i class="feather icon-slash"></i> Return</a>
                           <a href="javascript:void(0)" id="{{ $modeldata->id }}" data-url="{{Route('SellerOrder.statusupdate', $modeldata->id)}}" class="btn btn-success mr-1 _delivery" data-type="Delivered" ><i class="feather icon-slash"></i> Delivered</a>
                           <a href="javascript:void(0)" id="{{ $modeldata->id }}" data-url="{{Route('SellerOrder.statusupdate', $modeldata->id)}}" class="btn btn-primary mr-1 _delivery" data-type="Shipped" ><i class="feather icon-slash"></i> Shipped</a>
                           <a href="javascript:void(0)" id="{{ $modeldata->id }}" data-url="{{Route('SellerOrder.statusupdate', $modeldata->id)}}" class="btn btn-danger mr-1 _delivery" data-type="Cancelled" ><i class="feather icon-slash"></i> Cancelled</a>

                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- account end -->

            <div class="liton__shoping-cart-area mb-120">
              <div class="container">
                  <div class="row">
                      <div class="col-lg-12">
                          <div class="shoping-cart-inner">
                              <div class="shoping-cart-table table-responsive">
                                  <table class="table">
                                    <tr>
                                      <th>Image</th>
                                      <th>Product Name</th>
                                      <th>Product Price</th>
                                      <th>Product Quantity</th>
                                      <th>Product Subtotal</th>
                                    </tr>
                                      <tbody>
                                        <?php 
                  
                                        $total =0; $product_total_price = 0; ?>
                                         @php $total = 0 @endphp
                                         @if(unserialize($modeldata->cart_value))
                                         @foreach(unserialize($modeldata->cart_value) as $id => $details)
                                         <?php

                                          $total += (isset($details['price'])?$details['price']:1) * $details['quantity'];
                                          $product_total_price = (isset($details['price'])?$details['price']:1) * $details['quantity'];
                                         ?>
                                          <tr>
                                              <td class="cart-product-image">
                                                  <img src="{{ isset($details['product']['image'])?PRODUCT_URL.$details['product']['image']:''}}" alt="#" width="100px">
                                              </td>
                                              <td class="cart-product-info">
                                                  <h4>{{isset($details['product']['name'])?$details['product']['name']:''}}</h4>
                                              </td>
                                              <td class="cart-product-price">₹{{ isset($details['price'])?$details['price']:'' }}</td>
                                              <td class="cart-product-quantity">
                                                  <div class="cart-plus-minus">
                                                      {{ $details['quantity'] }}
                                                  </div>
                                              </td>
                                              <td class="cart-product-subtotal">₹{{ isset($product_total_price)?$product_total_price:'' }}</td>
                                          </tr>
                                          @endforeach
                                        @endif
                                      </tbody>
                                  </table>
                              </div>
                              <div class="totalprice" style="float: right;"><h1><span>Total : </span>{{ $total}}</div>
                              
                          </div>
                      </div>
                  </div>
              </div>
          </div>

         </div>
      </section>
      <!-- page users view end -->
   </div>
</div>
<!-- END: Content-->
@stop