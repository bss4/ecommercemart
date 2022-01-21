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
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        @if(!empty($data))
                                        <div class="col-12 col-sm-9 col-md-6 col-lg-5">
                                            <table>
                                                <tr>
                                                    <td class="font-weight-bold">Name </td>
                                                    <td>{{isset($data->name)?$data->name:''}}</td>
                                                </tr>
                                                <tr>
                                                    <td class="font-weight-bold">Email</td>
                                                    <td>{{isset($data->email)?$data->email:''}}</td>
                                                </tr>
                                                <tr>
                                                    <td class="font-weight-bold">Affiliate Id</td>
                                                    <td>{{isset($data->affiliate_id)?$data->affiliate_id:''}}</td>
                                                </tr>
                                                <tr>
                                                    <td class="font-weight-bold">Date</td>
                                                    <td>{{isset($data->created_at)?$data->created_at:''}}</td>
                                                </tr>

                                                <tr>
                                                    <td class="font-weight-bold">Total Amount</td>
                                                    <td>{{isset($data->affiliate_amount)?$data->affiliate_amount:'0'}}</td>
                                                </tr>
                                            </table>
                                        </div>
                                        @else
                                        <div class="col-12 col-sm-9 col-md-6 col-lg-5">No record found.</div>
                                        @endif
                                        <div class="col-12 hide">
                                            <a href="#" class="btn btn-primary mr-1"><i class="feather icon-edit-1"></i> Edit</a>
                                            <a href="#"><button class="btn btn-outline-danger"><i class="feather icon-trash-2"></i> Delete</button></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- account end -->
                        <!-- information start -->
                        <div class="col-md-6 col-12 hide">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-title mb-2">Aadhar Card</div>
                                </div>
                                <div class="card-body">
                                    
                                    <div class="user_aadhar_image">
                                        <img class="users-avatar-shadow w-100 img-size rounded mb-2 pr-2 ml-1"src="{{ url('/') }}/public/documents/d">
                                    </div>
                                   
                                </div>
                            </div>
                        </div>
                        <!-- information start -->
                        <!-- social links end -->
                        <div class="col-md-6 col-12 hide">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-title mb-2">Pan Card</div>
                                </div>
                                <div class="card-body">
                                   
                                    <div class="user_pancard_image">
                                        <img class="users-avatar-shadow w-100 img-size rounded mb-2 pr-2 ml-1" src="{{ url('/') }}/public/documents/">
                                    </div>
                                   
                                </div>
                            </div>
                        </div>
                        <!-- social links end -->
                        <!-- permissions start -->
                        <div class="col-12">
                            @if(!empty($data))
                            <div class="card">
                                <div class="card-header border-bottom mx-2 px-0">
                                    <h6 class="py-1 mb-0 font-medium-2"><i class="feather icon-lock mr-50 "></i>Users
                                    </h6>
                                </div>
                                <div class="card-body px-75">
                                    <div class="table-responsive users-view-permission">
                                       <table id="affiliate_tbl" class="table table-striped table-bordered" style="width:100%">
                                           <thead>
                                               <tr>
                                                   <th>S.No</th>
                                                   <th>Name</th>
                                                   <th>Email</th>
                                                   <th>Refferal By</th>
                                                   <th>Package</th>
                                                   <th>Contact</th>
                                                   <th>INR</th>
                                               </tr>
                                           </thead>
                                           <tbody>
                                            @php
                                            $i=0;
                                            @endphp
                                            @foreach($data->affiliateseller as $affiliate)
                                            @php
                                            $i++
                                            @endphp
                                               <tr>
                                                   <td>{{$i}}</td>
                                                   <td>{{isset($affiliate->name)?$affiliate->name:''}}</td>
                                                   <td>{{isset($affiliate->email)?$affiliate->email:''}}</td>
                                                   <td>{{isset($affiliate->refferal_by)?$affiliate->refferal_by:''}}</td>
                                                   <td>{{isset($affiliate->package_type)?$plans[$affiliate->package_type]:''}}</td>
                                                   <td>{{isset($affiliate->phone)?$affiliate->phone:''}}</td>
                                                   <td>{{isset($affiliate->package_type)?1000:0}}</td>
                                               </tr>
                                            @endforeach
                                           </tbody>
                                       </table>
                                    </div>
                                </div>
                            </div>

                            @endif
                        </div>
                        <!-- permissions end -->
                    </div>
                </section>
                <!-- page users view end -->

            </div>
        </div>
    <!-- END: Content-->
@stop
