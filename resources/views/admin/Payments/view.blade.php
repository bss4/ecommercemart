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

                          <a href='{{ route("Payments.index")}}' >

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
                                 <td class="font-weight-bold">Transaction Id</td>
                                 <td>{{isset($modeldata->transaction_id)?$modeldata->transaction_id:''}}</td>
                              </tr>
                              <tr>
                                <td class="font-weight-bold">Order ID</td>
                                <td>{{isset($modeldata->order_id )?$modeldata->order_id :''}}</td>
                              </tr>
                                <tr>
                                    <td class="font-weight-bold">Payment Mode</td>
                                    <td>{{isset($modeldata->payment_mode )? ucfirst($modeldata->payment_mode) :''}}</td>
                                </tr>
                               
                                <tr>
                                    <td class="font-weight-bold">Amount</td>
                                    <td>{{isset($modeldata->amount )? $modeldata->amount :''}}</td>
                                </tr>
                              <tr>
                                 <td class="font-weight-bold">Status</td>
                                 <td>{{isset($modeldata->status)?$modeldata->status:''}}</td>
                              </tr>
                           </table>
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