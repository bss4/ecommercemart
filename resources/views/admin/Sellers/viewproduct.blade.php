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
                     <div class="card-title">Product Details</div>
                     <h2>
                        <a href='{{ route("Sellers.storecatalogueproduct",$modeldata->seller_id)}}' >
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
                                 <td class="font-weight-bold">Product Name</td>
                                 <td>{{isset($modeldata->name)?$modeldata->name:''}}</td>
                              </tr>
                              <tr>
                                 <td class="font-weight-bold">Product Sku</td>
                                 <td>{{isset($modeldata->sku)?$modeldata->sku:''}}</td>
                              </tr>
                              <tr>
                                 <td class="font-weight-bold">Product Unit</td>
                                 <td>{{isset($modeldata->unit)?$modeldata->unit:''}}</td>
                              </tr>
                              <tr>
                                 <td class="font-weight-bold">Product Description </td>
                                 <td>{{isset($modeldata->description)?$modeldata->description:''}}</td>
                              </tr>
                              <tr>
                                 <td class="font-weight-bold">Product Type</td>
                                 <td>{{isset($modeldata->type)?$modeldata->type:''}}</td>
                              </tr>
                              <tr>
                                 <td class="font-weight-bold">Product Price</td>
                                 <td>{{isset($modeldata->price)?$modeldata->price:''}}</td>
                              </tr>
                              <tr>
                                 <td class="font-weight-bold">Product Discount Price</td>
                                 <td>{{isset($modeldata->discount_price)?$modeldata->discount_price:''}}</td>
                              </tr>
                              <tr>
                                 <td class="font-weight-bold">Product Stock</td>
                                 <td>{{isset($modeldata->product_stock_qty)?$modeldata->product_stock_qty:''}}</td>
                              </tr>
                              <tr>
                                 <td class="font-weight-bold">Product Status</td>
                                 <td>
                                    <?php if($modeldata->status==0){
                                       echo "Deactive";
                                       }else{ echo "Active";}?>
                                 </td>
                              </tr>
                              <tr>
                                 <td class="font-weight-bold">Created Date</td>
                                 <td>{{isset($modeldata->created_at)?$modeldata->created_at:''}}</td>
                              </tr>
                           </table>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- account end -->
         </div>
      </section>
      <!-- page users view end -->
      <!-- page users view start -->
      <section class="page-users-view">
         <div class="row">
            <!-- account start -->
            <div class="col-12 card">
               <div class="card-header">
                  <div class="card-title">Product Images</div>
               </div>
               <div class="row">
                  @if($modeldata->product_image)
                  @foreach($modeldata->product_image as $image_val)
                  <div class="col-sm-4">
                     <div class="card">
                        <div class="card-body">
                           @if(!empty($image_val->image))
                           <div class="user_aadhar_image">
                              <img class="users-avatar-shadow w-100 img-size rounded mb-2 pr-2 ml-1"src="{{ PRODUCT_URL.$image_val->image}}">
                           </div>
                           @endif
                        </div>
                     </div>
                  </div>
                  @endforeach
                  @endif
               </div>
            </div>
            <!-- account end -->
            <div class="col-12 card">
               <div class="card-header">
                  <div class="card-title">Product File</div>
               </div>
               <div class="row">
                  @if($modeldata->product_file)
                  <div class="col-sm-4">
                     <div class="card">
                        <div class="card-body">
                           @if(!empty($modeldata->product_file))
                           <div class="user_aadhar_image">
                              <img class="users-avatar-shadow w-100 img-size rounded mb-2 pr-2 ml-1"src="{{ PRODUCT_FILE_URL.'mp3.png'}}">
                           </div>
                           @endif
                        </div>
                     </div>
                  </div>
                  @endif
               </div>
            </div>
         </div>
      </section>
      <!-- page users view end -->
      <!-- page users view start -->
      @if($modeldata->productsvariations)
      <section class="page-users-view">
         <div class="row">
            <!-- account start -->
            <div class="col-12">
               <div class="card">
                  <div class="card-header">
                     <div class="card-title">Product Variations</div>
                  </div>
                  <div class="card-body _product_variation_tbl">
                     <div class="row">
                        <div class="col-12 col-sm-9 col-md-6 col-lg-5">
                           <table class="table">
                              <thead>
                                 <tr>
                                    <th>Product Sku</th>
                                    <th>Product Price</th>
                                    <th>Product Unit</th>
                                    <th>Product Discount Price</th>
                                    <th>Product Stock</th>
                                    <th>Product Image</th>
                                    <th>Product File</th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                 </tr>
                              </thead>
                              <tbody>
                                 @foreach($modeldata->productsvariations as $product_variation_val)
                                 @if(!empty($product_variation_val->price))
                                 <tr>
                                    @if($product_variation_val->sku)
                                    <td class="font-weight-bold">{{ isset($product_variation_val->sku)?$product_variation_val->sku:'' }}</td>
                                    @endif
                                    @if($product_variation_val->price)
                                    <td class="font-weight-bold">{{ isset($product_variation_val->price)?$product_variation_val->price:'' }}</td>
                                    @endif
                                    @if($product_variation_val->unit)
                                    <td class="font-weight-bold">{{ isset($product_variation_val->unit)?$product_variation_val->unit:'' }}</td>
                                    @endif
                                    @if($product_variation_val->discount_price && !empty($product_variation_val->discount_price))
                                    <td class="font-weight-bold">{{ $product_variation_val->discount_price }}</td>
                                    @else
                                    <td class="font-weight-bold">0</td>
                                    @endif
                                    @if($product_variation_val->product_stock_qty)
                                    <td class="font-weight-bold">{{ isset($product_variation_val->product_stock_qty)?$product_variation_val->product_stock_qty:'' }}</td>
                                    @endif
                                    @if($product_variation_val->image)
                                    @if(!empty($product_variation_val->image))
                                    <td class="font-weight-bold">
                                       <img class="users-avatar-shadow w-100 img-size rounded mb-2 pr-2 ml-1"src="{{ PRODUCT_URL.$product_variation_val->image}}">
                                    </td>
                                    @endif
                                    @endif
                                    @if($product_variation_val->product_file)
                                    @if(!empty($product_variation_val->product_file))
                                    <td class="font-weight-bold">
                                       <img class="users-avatar-shadow w-100 img-size rounded mb-2 pr-2 ml-1"src="{{ PRODUCT_FILE_URL.'mp3.png'}}">
                                    </td>
                                    @endif
                                    @endif
                                    @if($product_variation_val->attr_value1)
                                    <td class="font-weight-bold">{{ isset($product_variation_val->attr_value1)?$product_variation_val->attr_value1:'' }}</td>
                                    @endif
                                    @if($product_variation_val->attr_value2)
                                    <td class="font-weight-bold">{{ isset($product_variation_val->attr_value2)?$product_variation_val->attr_value2:'' }}</td>
                                    @endif
                                    @if($product_variation_val->attr_value3)
                                    <td class="font-weight-bold">{{ isset($product_variation_val->attr_value3)?$product_variation_val->attr_value3:'' }}</td>
                                    @endif
                                    @if($product_variation_val->attr_value4)
                                    <td class="font-weight-bold">{{ isset($product_variation_val->attr_value4)?$product_variation_val->attr_value4:'' }}</td>
                                    @endif
                                 </tr>
                                 @endif
                                 @endforeach
                              </tbody>
                           </table>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- account end -->
         </div>
      </section>
      @endif
      <!-- page users view end -->
   </div>
</div>
<!-- END: Content-->
@stop