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
                                    <div class="card-title">Shop</div>
                                    <h2>

                                        <a href='{{ route("Stores.index")}}' >

                                            <button type="button" class="btn btn-primary waves-effect second-head-button">

                                                {{ trans("messages.global.back") }}

                                            </button>

                                        </a>

                                    </h2>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="users-view-image store_view">
                                            @if(!empty($modeldata->logo))
                                            <img style="height: 300px;" src="{{ STORE_LOGO_URL.$modeldata->logo}}" class="users-avatar-shadow w-100 img-size rounded mb-2 pr-2 ml-1" alt="avatar">
                                            @endif
                                        </div>
                                        <div class="col-12 col-sm-9 col-md-6 col-lg-5">
                                            <table>
                                                <tr>
                                                    <td class="font-weight-bold">Business Name</td>
                                                    <td>{{isset($modeldata->business_name)?$modeldata->business_name:''}}</td>
                                                </tr>
                                                <tr>
                                                    <td class="font-weight-bold">Store Name</td>
                                                    <td>{{isset($modeldata->name)?$modeldata->name:''}}</td>
                                                </tr>
                                                <tr>
                                                    <td class="font-weight-bold">Store Type</td>
                                                    <td>{{isset($modeldata->storetype->name)?$modeldata->storetype->name:''}}</td>
                                                </tr>
                                            </table>
                                        </div>
                                        
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- account end -->

                         <!-- working hours -->
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-title">Shop Working Time</div>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-12 col-sm-9 col-md-6 col-lg-5">
                                            <table>
                                                <tr>
                                                    <th>Week Name</th>
                                                    <th>Opening Time</th>
                                                    <th>Closing Time</th>
                                                </tr>
                                                <tr>
                                                    <td class="font-weight-bold">Monday</td>
                                                    <td>{{ isset($modeldata->shopworkingtime[0]['start_time'])?$modeldata->shopworkingtime[0]['start_time']:'Closed' }}</td>
                                                    <td>{{ isset($modeldata->shopworkingtime[0]['close_time'])?$modeldata->shopworkingtime[0]['close_time']:'Closed' }}</td>
                                                </tr>
                                                 <tr>
                                                    <td class="font-weight-bold">Tuesday</td>
                                                    <td>{{ isset($modeldata->shopworkingtime[1]['start_time'])?$modeldata->shopworkingtime[1]['start_time']:'Closed' }}</td>

                                                    <td>{{ isset($modeldata->shopworkingtime[1]['close_time'])?$modeldata->shopworkingtime[1]['close_time']:'Closed' }}</td>
                                                </tr>
                                                <tr>
                                                    <td class="font-weight-bold">Wednesday</td>
                                                    <td>{{ isset($modeldata->shopworkingtime[2]['start_time'])?$modeldata->shopworkingtime[2]['start_time']:'Closed' }}</td>

                                                    <td>{{ isset($modeldata->shopworkingtime[2]['close_time'])?$modeldata->shopworkingtime[2]['close_time']:'Closed' }}</td>
                                                </tr>
                                                <tr>
                                                    <td class="font-weight-bold">Thrusday</td>
                                                    <td>{{ isset($modeldata->shopworkingtime[3]['start_time'])?$modeldata->shopworkingtime[3]['start_time']:'Closed' }}</td>

                                                    <td>{{ isset($modeldata->shopworkingtime[3]['close_time'])?$modeldata->shopworkingtime[3]['close_time']:'Closed' }}</td>
                                                </tr>
                                                <tr>
                                                    <td class="font-weight-bold">Friday</td>
                                                    <td>{{ isset($modeldata->shopworkingtime[4]['start_time'])?$modeldata->shopworkingtime[4]['start_time']:'Closed' }}</td>

                                                    <td>{{ isset($modeldata->shopworkingtime[4]['close_time'])?$modeldata->shopworkingtime[4]['close_time']:'Closed' }}</td>
                                                </tr>

                                                <tr>
                                                    <td class="font-weight-bold">Saturday</td>
                                                    <td>{{ isset($modeldata->shopworkingtime[5]['start_time']) ? $modeldata->shopworkingtime[5]['start_time'] : 'Closed' }}</td>

                                                    <td>{{ isset($modeldata->shopworkingtime[5]['close_time'])?$modeldata->shopworkingtime[5]['close_time']:'Closed' }}</td>
                                                </tr>

                                                <tr>
                                                    <td class="font-weight-bold">Sunday</td>
                                                    <td>{{ isset($modeldata->shopworkingtime[6]['start_time'])?$modeldata->shopworkingtime[6]['start_time']:'Closed' }}</td>

                                                    <td>{{ isset($modeldata->shopworkingtime[6]['close_time'])?$modeldata->shopworkingtime[6]['close_time']:'Closed' }}</td>
                                                </tr>
                                            </table>
                                        </div>
                                       
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- seller affelate report -->
                        
                        <!-- information start -->
                        <div class="col-md-6 col-12 ">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-title mb-2">Location</div>
                                </div>
                                <div class="card-body">
                                    <table>
                                        <tr>
                                            <td class="font-weight-bold">Address: </td>
                                            <td>{{isset($modeldata->address)?$modeldata->address:''}}</td>
                                        </tr>
                                         <tr>
                                            <td class="font-weight-bold">City: </td>
                                            <td>{{isset($modeldata->city)?$modeldata->city:''}}</td>
                                        </tr>
                                        <tr>
                                            <td class="font-weight-bold">State: </td>
                                            <td>{{isset($modeldata->state)?$modeldata->state:''}}</td>
                                        </tr>
                                        <tr>
                                            <td class="font-weight-bold">Pincode: </td>
                                            <td>{{isset($modeldata->pin_code )?$modeldata->pin_code :''}}</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- information start -->
                        <!-- social links end -->
                        <div class="col-md-6 col-12 ">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-title mb-2">General Setting</div>
                                </div>
                                <div class="card-body">
                                    <table>
                                        <tr>
                                            <td class="font-weight-bold">Theme Color: </td>
                                            <td>{{isset($modeldata->theme_color)?$modeldata->theme_color:''}}</td>
                                        </tr>
                                         <tr>
                                            <td class="font-weight-bold">Tag Line: </td>
                                            <td>{{isset($modeldata->tag_line)?$modeldata->tag_line:''}}</td>
                                        </tr>
                                        <tr>
                                            <td class="font-weight-bold">Slide Show: </td>
                                            <td>{{isset($modeldata->slideshow)?$modeldata->slideshow:''}}</td>
                                        </tr>
                                        <tr>
                                            <td class="font-weight-bold">Explore More: </td>
                                            <td>{{isset($modeldata->explore_more )?$modeldata->explore_more :''}}</td>
                                        </tr>
                                        <tr>
                                            <td class="font-weight-bold">New Arrival: </td>
                                            <td>{{isset($modeldata->new_arrival)?$modeldata->new_arrival:''}}</td>
                                        </tr>
                                        <tr>
                                            <td class="font-weight-bold">Single Product: </td>
                                            <td>{{isset($modeldata->single_product)?$modeldata->single_product:''}}</td>
                                        </tr>
                                        <tr>
                                            <td class="font-weight-bold">Recommended For You: </td>
                                            <td>{{isset($modeldata->recommended_for_you)?$modeldata->recommended_for_you:''}}</td>
                                        </tr>
                                        <tr>
                                            <td class="font-weight-bold">Customer Review: </td>
                                            <td>{{isset($modeldata->customer_review)?$modeldata->customer_review:''}}</td>
                                        </tr>
                                        <tr>
                                            <td class="font-weight-bold">Status: </td>
                                            <td>{{isset($modeldata->status)?$modeldata->status:''}}</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- social links end -->

                        <!-- privacy policy end -->
                        <div class="col-md-6 col-12 ">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-title mb-2">Privacy Policy</div>
                                </div>
                                <div class="card-body">
                                    <div class="privacy_policy">
                                        <?php
                                        if(!empty($modeldata->privacy_policy))
                                        {
                                              echo  $str = substr($modeldata->privacy_policy, 0, 500) . '...';
                                        }
                                        ?>
                                      
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- privacy policy end -->
                        <!-- retrun & refund policy start -->
                        <div class="col-md-6 col-12 ">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-title mb-2">Return & Refund Policy</div>
                                </div>
                                <div class="card-body">
                                    <div class="privacy_policy">
                                        <?php
                                        if(!empty($modeldata->return_refund_policy))
                                        {
                                            echo  $str = substr($modeldata->return_refund_policy, 0, 500) . '...';
                                        }
                                        ?>
                                      
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- retrun & refund policy end -->
                        <!-- shipping policy start -->
                        <div class="col-md-6 col-12 ">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-title mb-2">Shipping Policy</div>
                                </div>
                                <div class="card-body">
                                    <div class="privacy_policy">
                                        <?php
                                        if(!empty($modeldata->shipping_policy))
                                        {
                                           
                                            echo  $str = substr($modeldata->shipping_policy, 0, 500) . '...';
                                        }
                                        ?>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- shipping policy end -->
                        <!-- term & condition policy start -->
                        <div class="col-md-6 col-12 ">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-title mb-2">Term & Condition Policy</div>
                                </div>
                                <div class="card-body">
                                    <div class="privacy_policy">
                                        <?php
                                        if(!empty($modeldata->terms_conditions))
                                        {
                                             
                                            echo  $str = substr($modeldata->terms_conditions, 0, 500) . '...';
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- term & condition end -->
                        <!-- payment policy start -->
                        <div class="col-md-6 col-12 ">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-title mb-2">Payments Policy</div>
                                </div>
                                <div class="card-body">
                                    <div class="privacy_policy">
                                        <?php
                                        if(!empty($modeldata->payments_policy))
                                        {

                                              echo  $str = substr($modeldata->payments_policy, 0, 500) . '...';
                                        }
                                        ?>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- privacy policy end -->
                        <!-- about us start -->
                        <div class="col-md-6 col-12 ">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-title mb-2">About Us</div>
                                </div>
                                <div class="card-body">
                                    <div class="privacy_policy">
                                        <?php
                                        if(!empty($modeldata->about_us))
                                        {
                                             
                                               echo  $str = substr($modeldata->about_us, 0, 500) . '...';
                                        }
                                        ?>
                                        
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- about us end -->
                      
                    </div>
                </section>
                <!-- page users view end -->

            </div>
        </div>
    <!-- END: Content-->
@stop
