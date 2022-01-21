@extends('layouts.default')
@section('content')

<!-- BEGIN: Content-->
<style type="text/css">
	input.razorpay-payment-button {
    display: none;
}
</style>
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
                        <a href="{{ route('Sellers.index')}}">
                            <button type="button" class="btn btn-primary waves-effect second-head-button">
                                Back
                            </button>
                        </a>
                    </h2>
                     
                  </div>
                  <div class="card-body">
                     <div class="row">
                        <div class="users-view-image seller_view">
                           @if(!empty($modeldata->image))
                           <img style="height: 300px;" src="{{ url('/') }}/public/documents/{{$modeldata->image}}" class="users-avatar-shadow w-100 img-size rounded mb-2 pr-2 ml-1" alt="avatar">
                           @else
                           <img style="height: 300px;" src="{{ url('/') }}/public/default_user.jpg" class="users-avatar-shadow w-100 img-size rounded mb-2 pr-2 ml-1" alt="avatar">
                           @endif
                        </div>
                        <div class="col-12 col-sm-9 col-md-6 col-lg-5">
                           <table>
                              <tr>
                                 <td class="font-weight-bold">Name</td>
                                 <td>{{isset($modeldata->name)?$modeldata->name:''}}</td>
                              </tr>
                              <tr>
                                 <td class="font-weight-bold">Email</td>
                                 <td>{{isset($modeldata->email)?$modeldata->email:''}}</td>
                              </tr>
                              <tr>
                                <td class="font-weight-bold">Store Name</td>
                                <td>{{isset($storedata->name )?$storedata->name :''}}</td>
                              </tr>
                                <tr>
                                    <td class="font-weight-bold">Buy Plan</td>
                                    <td>{{isset($package->name )? ucfirst($package->name) :''}}</td>
                                </tr>
                                <tr>
                                    <td class="font-weight-bold">Theme</td>
                                    <td>{{isset($modeldata->theme )? ucfirst($modeldata->theme) :''}}</td>
                                </tr>
                                <tr>
                                    <td class="font-weight-bold">App ID</td>
                                    <td>{{isset($modeldata->app_id )? $modeldata->app_id :''}}</td>
                                </tr>
                              <tr>
                                 <td class="font-weight-bold">GST No </td>
                                 <td>{{isset($modeldata->gst)?$modeldata->gst:''}}</td>
                              </tr>
                              <tr>
                                 <td class="font-weight-bold">Contact</td>
                                 <td>{{isset($modeldata->phone)?$modeldata->phone:''}}</td>
                              </tr>
                              <tr>
                                 <td class="font-weight-bold">Address</td>
                                 <td>{{isset($modeldata->address )?$modeldata->address :''}}</td>
                              </tr>
                           </table>
                        </div>
                        <div class="col-12">
                           <a href="{{Route('Sellers.edit', $modeldata->id)}}" class="btn btn-primary mr-1"><i class="feather icon-edit-1"></i> Edit</a>
                           <a href="{{Route('Sellers.delete', $modeldata->id)}}"><button class="btn btn-outline-danger"><i class="feather icon-trash-2"></i> Delete</button></a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- account end -->

            <!-- seller delivery account start -->
            <div class="col-12">
               <div class="card">
                  <div class="card-header">
                     <div class="card-title">Seller Bank Information</div>
                  </div>
                  
                  <div class="card-body">
                     <div class="row">
                        <div class="col-12 col-sm-9 col-md-6 col-lg-5">
                           <table>
                              <tr>
                                 <td class="font-weight-bold">Bank Name</td>
                                 <td>{{isset($SellerBank->bank_name)?$SellerBank->bank_name:''}}</td>
                              </tr>
                              <tr>
                                 <td class="font-weight-bold">IFSC Code</td>
                                 <td>{{isset($SellerBank->ifsc_code)?$SellerBank->ifsc_code:''}}</td>
                              </tr>
                              <tr>
                                <td class="font-weight-bold">Account Number</td>
                                <td>{{isset($SellerBank->account_number )?$SellerBank->account_number :''}}</td>
                              </tr>
                            <tr>
                                <td class="font-weight-bold">Account Holder Name</td>
                                <td>{{isset($SellerBank->account_holder_name )? $SellerBank->account_holder_name :''}}</td>
                              </tr>
                              <tr>
                                 <td class="font-weight-bold">Account User Gmail</td>
                                 <td>{{isset($SellerBank->account_gmail)? ucfirst($SellerBank->account_gmail):''}}</td>
                              </tr>
                              <tr>
                                 <td class="font-weight-bold">Address</td>
                                 <td>{{isset($SellerBank->address)? ucfirst($SellerBank->address):''}}</td>
                              </tr>
                              <tr>
                                 <td class="font-weight-bold">Branch</td>
                                 <td>{{isset($SellerBank->branch)? ucfirst($SellerBank->branch):''}}</td>
                              </tr>
                              <tr>
                                 <td class="font-weight-bold">Google Pay ID</td>
                                 <td>{{isset($sellerupi->google_pay_id)? $sellerupi->google_pay_id:''}}</td>

                                 @if(isset($sellerupi->google_pay_isverify) && $sellerupi->google_pay_isverify=='verified')
                                 <td>
                                 <span class="btn btn-success">Verified</span></td>
                                 @else
                                 <td>
                                 <span class="btn btn-danger">Not Verified</span></td>
                                  <td><a class="btn btn-warning verifyupi" href="javascript:void(0)" data-url="{{route('Transfermoney.verifyupi')}}" data-type="googlepay" data-id="{{ $modeldata->id }}">Click For Verify</a></td>
                                 @endif

                                 @if(isset($sellerupi->active_upi) && $sellerupi->active_upi=='googlepay')
                                 <td>
                                 <span class="btn btn-success">Active</span></td>
                                 @endif

                              </tr>
                              <tr>
                                 <td class="font-weight-bold">Phone Pay ID</td>
                                 <td>{{isset($sellerupi->phone_pay_id)? $sellerupi->phone_pay_id:''}}</td>
                                 @if(isset($sellerupi->phone_pay_isverify) && $sellerupi->phone_pay_isverify=='verified')
                                 <td>
                                 <span class="btn btn-success">Verified</span></td>
                                 @else
                                 <td>
                                 <span class="btn btn-danger">Not Verified</span></td>
                                 <td><a class="btn btn-warning verifyupi" href="javascript:void(0)" data-url="{{route('Transfermoney.verifyupi')}}" data-type="phonepay" data-id="{{ $modeldata->id }}">Click For Verify</a></td>

                                 @endif
                                 
                                 @if(isset($sellerupi->active_upi) && $sellerupi->active_upi=='phonepay')
                                 <td>
                                 <span class="btn btn-success">Active</span></td>
                                 @endif
                              </tr>
                              <tr>
                                 <td class="font-weight-bold">Paytm Pay ID</td>
                                 <td>{{isset($sellerupi->paytm_id)? $sellerupi->paytm_id:''}}</td>
                                  @if(isset($sellerupi->paytm_isverify) && $sellerupi->paytm_isverify=='verified')
                                  <td>
                                 <span class="btn btn-success">Verified</span></td>
                                 @else
                                 <td>
                                 <span class="btn btn-danger">Not Verified</span></td>
                                 <td><a class="btn btn-warning verifyupi" href="javascript:void(0)" data-url="{{route('Transfermoney.verifyupi')}}" data-type="paytm" data-id="{{ $modeldata->id }}">Click For Verify</a></td>
                                 @endif
                                 
                                 @if(isset($sellerupi->active_upi) && $sellerupi->active_upi=='paytm')
                                 <td>
                                 <span class="btn btn-success">Active</span></td>
                                 @endif
                              </tr>
                              <tr>
                                 <td class="font-weight-bold">Other Upi Pay ID</td>
                                 <td>{{isset($sellerupi->others_id)? $sellerupi->others_id:''}}</td>

                                 @if(isset($sellerupi->others_verify) && $sellerupi->others_verify=='verified')
                                 <td>
                                 <span class="btn btn-success">Verified</span></td>
                                 @else
                                 <td>
                                 <span class="btn btn-danger">Not Verified</span></td>
                                 <td><a href="javascript:void(0)" class="btn btn-warning verifyupi" data-url="{{route('Transfermoney.verifyupi')}}" data-type="other" data-id="{{ $modeldata->id }}">Click For Verify</a></td>
                                 @endif
                                 
                                 @if(isset($sellerupi->active_upi) && $sellerupi->active_upi=='other')
                                 <td>
                                 <span class="btn btn-success">Active</span></td>
                                 @endif
                              </tr>
                              <tr>
                                 <td class="font-weight-bold">Status</td>
                                 <td>  @if(isset($SellerBank->status) && $SellerBank->status == '0')
                                    <span class="status-warning">Pending</span>
                                    @elseif(isset($SellerBank->status) && $SellerBank->status == '1')
                                    <span class="status-success">Approved</span>
                                    @elseif( isset($SellerBank->status) && $SellerBank->status == '2')
                                    <span class="status-danger">Rejected</span>
                                    @endif
                                </td>
                              </tr>
                              <tr>
                                 <td class="font-weight-bold">Seller Pending  Amount</td>
                                 <td>{{isset($total_amount)?$total_amount:''}}</td>
                                 
                                 <td><span type="button" class="btn btn-outline-success"><a href="{{route('Transfermoney.trasfermoneydirectbank',$modeldata->id)}}">Bank Transfer</a></span></td>
                                 <td><span type="button" class="btn btn-outline-success"><a href="{{route('Transfermoney.trasfermoneyupi',$modeldata->id)}}">UPI Transfer</a></span></td>
                              </tr>
                              
                           </table>
                        </div>
                        @if(isset($SellerBank->status) && $SellerBank->status=='0')
                        <div class="col-12">
                           <a href="javascript:void(0)" id="{{ $modeldata->id }}" data-type="approved" data-url="{{Route('Sellers.updatebnkstatus', $modeldata->id)}}" class="btn btn-primary mr-1 _delivery"><i class="feather icon-check-circle"></i> Approve</a>
                           <a href="javascript:void(0)" id="{{ $modeldata->id }}" data-url="{{Route('Sellers.updatebnkstatus', $modeldata->id)}}" class="btn btn-danger mr-1 _delivery" data-type="rejected" ><i class="feather icon-slash"></i> Reject</a>
                        </div>
                        @endif  
                     </div>
                  </div>
                  <div>
                     
                  </div>
               </div>
            </div>
            <!-- seller delivery account end -->

            <!-- seller delivery account start -->
            <div class="col-12">
               <div class="card">
                  <div class="card-header">
                     <div class="card-title">Seller Delivered Information</div>
                  </div>
                  <div class="card-body">
                     <div class="row">
                        <div class="col-12 col-sm-9 col-md-6 col-lg-5">
                           <table>
                              <tr>
                                 <td class="font-weight-bold">Store Url</td>
                                 <td>{{isset($sellerdelivery->store_url)?$sellerdelivery->store_url:''}}</td>
                              </tr>
                              <tr>
                                 <td class="font-weight-bold">Seller Email</td>
                                 <td>{{isset($sellerdelivery->seller_email_address)?$sellerdelivery->seller_email_address:''}}</td>
                              </tr>
                              <tr>
                                <td class="font-weight-bold">Seller Contact</td>
                                <td>{{isset($sellerdelivery->contact_information )?$sellerdelivery->contact_information :''}}</td>
                              </tr>
                            <tr>
                                <td class="font-weight-bold">Seller Pickup Address</td>
                                <td>{{isset($sellerdelivery->pick_drop_address )? $sellerdelivery->pick_drop_address :''}}</td>
                              </tr>
                              <tr>
                                 <td class="font-weight-bold">Payment</td>
                                 <td>{{isset($sellerdelivery->payment_mode)? ucfirst($sellerdelivery->payment_mode):''}}</td>
                              </tr>
                              @if(!empty($sellerdelivery->status))
                              <tr>
                                 <td class="font-weight-bold">Status</td>
                                 <td>  @if($sellerdelivery->status == 'pending')
                                    <span class="status-warning">{{isset($sellerdelivery->status)?ucfirst($sellerdelivery->status):''}}</span>
                                    @elseif($sellerdelivery->status == 'approved')
                                    <span class="status-success">{{isset($sellerdelivery->status)?ucfirst($sellerdelivery->status):''}}</span>
                                    @else
                                    <span class="status-danger">{{isset($sellerdelivery->status)?ucfirst($sellerdelivery->status):''}}</span>
                                    @endif
                                </td>
                              </tr>
                              @endif
                           </table>
                        </div>
                        @if(!empty($sellerdelivery->status))
                        <div class="col-12">
                           <a href="javascript:void(0)" id="{{ $modeldata->id }}" data-type="approved" data-url="{{Route('Sellers.sellerdeliverd', $modeldata->id)}}" class="btn btn-primary mr-1 _delivery"><i class="feather icon-check-circle"></i> Approve</a>
                           <a href="javascript:void(0)" id="{{ $modeldata->id }}" data-url="{{Route('Sellers.sellerdeliverd', $modeldata->id)}}" class="btn btn-danger mr-1 _delivery" data-type="rejected" ><i class="feather icon-slash"></i> Reject</a>
                        </div>
                        @endif
                     </div>
                  </div>
               </div>
            </div>
            <!-- seller delivery account end -->

            <!-- working hours -->
            <div class="col-12">
               <div class="card">
                  <div class="card-header">
                     <div class="card-title">Seller Offers</div>
                  </div>
                  <div class="card-body">
                     <div class="row">
                        <div class="col-12 col-sm-9 col-md-6 col-lg-5">
                           <table>
                              <tr>
                                 <th>Coupon code</th>
                                 <th>Minimum Purchase Amount</th>
                                 <th>Discount</th>
                                 <th>Offer Type</th>
                                 <th>Apply Once</th>
                                 <th>Valided Date</th>
                              </tr>
                              <tbody>
                                @if(!empty($Offers))
                                @foreach($Offers as $offer_val)
                                <tr>
                                 <td>{{ isset($offer_val->code)?$offer_val->code:'' }}</td>
                                 <td>{{ isset($offer_val->minimum_purchase)?$offer_val->minimum_purchase:'' }}</td>
                                 <td>{{ isset($offer_val->amount_off)?$offer_val->amount_off:'' }}</td>
                                 <td>{{ isset($offer_val->offer_type)?$offer_val->offer_type:'' }}</td>
                                 <td>{{ isset($offer_val->apply_once)?$offer_val->apply_once:'' }}</td>
                                 <td>{{ isset($offer_val->valid_date)?$offer_val->valid_date:'' }}</td>
                                </tr>
                                @endforeach
                                @else
                                <tr>
                                  <td>Offers not found.</td>
                                </tr>
                                @endif
                              
                            </tbody>
                           </table>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- seller affelate report -->
            <div class="col-md-4">
               <div class="card">
                  <div class="card-header">
                     <div class="card-title mb-2">Total Share</div>
                  </div>
                  <div class="card-body">
                     <div class="user_aadhar_image">
                        @if($refferal_by)
                        <h1><?php echo count($refferal_by);?></h1>
                        @endif
                        
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-md-4">
               <div class="card">
                  <div class="card-header">
                     <div class="card-title mb-2">Active Seller</div>
                  </div>
                  <div class="card-body">
                     <div class="user_aadhar_image">
                        @if($active_seller_reff)
                        <h1><?php echo count($active_seller_reff);?></h1>
                        @endif
                        
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-md-4">
               <div class="card">
                  <div class="card-header">
                     <div class="card-title mb-2">Remaining Coins</div>
                  </div>
                  <div class="card-body">
                     <div class="user_aadhar_image">
                        <h1>{{ $modeldata->coin }}</h1>
                     </div>
                  </div>
               </div>
            </div>
            <!-- information start -->
            <div class="col-md-6 col-12 ">
               <div class="card">
                  <div class="card-header">
                     <div class="card-title mb-2">Aadhar Card</div>
                  </div>
                  <div class="card-body">
                     @if(!empty($modeldata->aadhar_card))
                     <div class="user_aadhar_image">
                        <img class="users-avatar-shadow w-100 img-size rounded mb-2 pr-2 ml-1"src="{{ url('/') }}/public/documents/{{$modeldata->aadhar_card}}">
                     </div>
                     @endif
                  </div>
               </div>
            </div>
            <!-- information start -->
            <!-- social links end -->
            <div class="col-md-6 col-12 ">
               <div class="card">
                  <div class="card-header">
                     <div class="card-title mb-2">Pan Card</div>
                  </div>
                  <div class="card-body">
                     @if(!empty($modeldata->pan_card))
                     <div class="user_pancard_image">
                        <img class="users-avatar-shadow w-100 img-size rounded mb-2 pr-2 ml-1" src="{{ url('/') }}/public/documents/{{$modeldata->pan_card}}">
                     </div>
                     @endif
                  </div>
               </div>
            </div>
            <!-- social links end -->
            <!-- permissions start -->
            <div class="col-12">
               <div class="card">
                  <div class="card-header border-bottom mx-2 px-0">
                     <h6 class="border-bottom py-1 mb-0 font-medium-2"><i class="feather icon-lock mr-50 "></i>Users
                     </h6>
                  </div>
                  <div class="card-body px-75">
                     <div class="table-responsive users-view-permission">
                        <table id="example" class="table table-striped table-bordered" style="width:100%">
                           <thead>
                              <tr>
                                 <th>Email</th>
                                 <th>Contact</th>
                                 <th>Refferal Id</th>
                                 <th>GST</th>
                                 <th>Status</th>
                              </tr>
                           </thead>
                           <tbody>
                              @if(!empty($refferal_by) && count($refferal_by) > 0)
                              @foreach($refferal_by as $modelvalue)
                              <tr>
                                 <td>{{isset($modelvalue->email)?$modelvalue->email:''}}</td>
                                 <td>{{isset($modelvalue->phone)?$modelvalue->phone:''}}</td>
                                 <td>{{isset($modelvalue->refferal_id)?$modelvalue->refferal_id:''}}</td>
                                 <td>{{isset($modelvalue->gst)?$modelvalue->gst:''}}</td>
                                 <td>{{isset($modelvalue->status)?$modelvalue->status:''}}</td>
                              </tr>
                              @endforeach
                              @else
                              <tr>
                                 <td colspan="5" style="text-align: center;">No data found.</td>
                              </tr>
                              @endif
                           </tbody>
                          
                        </table>
                     </div>
                  </div>
               </div>
            </div>
            <!-- permissions end -->
            <!-- permissions start -->
            <div class="col-12">
               <div class="card">
                  <div class="card-header border-bottom mx-2 px-0">
                     <h6 class="border-bottom py-1 mb-0 font-medium-2"><i class="feather icon-lock mr-50 "></i>Newsletter Users
                     </h6>
                  </div>
                  <div class="card-body px-75">
                     <div class="table-responsive users-view-permission">
                        <table id="example" class="table table-striped table-bordered" style="width:100%">
                           <thead>
                              <tr>
                                 <th>Email</th>
                                 <th>Date</th>
                              </tr>
                           </thead>
                           <tbody>
                              @if(!empty($newsletter) && count($newsletter) > 0)
                              @foreach($newsletter as $newsletter_val)
                              <tr>
                                 <td>{{isset($newsletter_val->email)?$newsletter_val->email:''}}</td>
                                 <td>{{isset($newsletter_val->created_at)?$newsletter_val->created_at:''}}</td>
                              </tr>
                              @endforeach
                              @else
                              <tr>
                                 <td colspan="5" style="text-align: center;">No data found.</td>
                              </tr>
                              @endif
                           </tbody>
                          
                        </table>
                     </div>
                  </div>
               </div>
            </div>
            <!-- permissions end -->

            <!-- permissions start -->
            <div class="col-12">
               <div class="card">
                  <div class="card-header border-bottom mx-2 px-0">
                     <h6 class="border-bottom py-1 mb-0 font-medium-2"><i class="feather icon-lock mr-50 "></i>Contact Us Users
                     </h6>
                  </div>
                  <div class="card-body px-75">
                     <div class="table-responsive users-view-permission">
                        <table id="example" class="table table-striped table-bordered" style="width:100%">
                           <thead>
                              <tr>
                                 <th>Name</th>
                                 <th>Email</th>
                                 <th>Phone</th>
                                 <th>Message</th>
                                 <th>Date</th>
                              </tr>
                           </thead>
                           <tbody>
                              @if(!empty($Contactus) && count($Contactus) > 0)
                              @foreach($Contactus as $contactus_val)
                              <tr>
                                 <td>{{isset($contactus_val->name)?$contactus_val->name:''}}</td>
                                 <td>{{isset($contactus_val->email)?$contactus_val->email:''}}</td>
                                 <td>{{isset($contactus_val->phone)?$contactus_val->phone:''}}</td>
                                 <td>{{isset($contactus_val->message)?$contactus_val->message:''}}</td>
                                 <td>{{isset($contactus_val->created_at)?$contactus_val->created_at:''}}</td>
                              </tr>
                              @endforeach
                              @else
                              <tr>
                                 <td colspan="5" style="text-align: center;">No data found.</td>
                              </tr>
                              @endif
                           </tbody>
                          
                        </table>
                     </div>
                  </div>
               </div>
            </div>
            <!-- permissions end -->
         </div>
      </section>
      <!-- page users view end -->
   </div>
</div>
<!-- END: Content-->
@stop