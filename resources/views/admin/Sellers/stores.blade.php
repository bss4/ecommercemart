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
                                        <a href="{{ route('Sellers.index')}}">
                                            <button type="button" class="btn btn-primary waves-effect second-head-button">
                                                Back
                                            </button>
                                        </a>
                                    </h2>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="users-view-image store_view">
                                            @if(!empty($modeldata->logo))
                                            <img style="height: 300px;" src="{{ url('/') }}/public/documents/{{$modeldata->logo}}" class="users-avatar-shadow w-100 img-size rounded mb-2 pr-2 ml-1" alt="avatar">
                                            @else
                                            <img style="height: 300px;" src="{{ url('/') }}/public/default_user.jpg" class="users-avatar-shadow w-100 img-size rounded mb-2 pr-2 ml-1" alt="avatar">
                                            @endif
                                        </div>
                                        <div class="col-12 col-sm-9 col-md-6 col-lg-5">
                                            <table>
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
                                        {{isset($modeldata->privacy_policy )?$modeldata->privacy_policy :''}}
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
                                        {{isset($modeldata->return_refund_policy )?$modeldata->return_refund_policy :''}}
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
                                        {{isset($modeldata->shipping_policy )?$modeldata->shipping_policy :''}}
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
                                        {{isset($modeldata->terms_conditions )?$modeldata->terms_conditions :''}}
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
                                        {{isset($modeldata->payments_policy )?$modeldata->payments_policy :''}}
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
                                        {{isset($modeldata->about_us )?$modeldata->about_us :''}}
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
