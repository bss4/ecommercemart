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
                                    <div class="card-title">Catalogue Details</div>
                                    <h2>

                                          <a href='{{ route("Sellers.catalogue",$modeldata->seller_id)}}' >

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
                                                    <td class="font-weight-bold">Catalogue Name</td>
                                                    <td>{{isset($modeldata->name)?$modeldata->name:''}}</td>
                                                </tr>
                                                <tr>
                                                    <td class="font-weight-bold">Category Name</td>
                                                    <td>{{isset($modeldata->category['name'])?$modeldata->category['name']:''}}</td>
                                                </tr>
                                                 <tr>
                                                    <td class="font-weight-bold">Status </td>
                                                    <td>{{isset($modeldata->status)?$modeldata->status:''}}</td>
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
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-title">Catalogue Attribute</div>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-12 col-sm-9 col-md-6 col-lg-5">
                                            <table>
                                                @if($modeldata->catalogueattributes)
                                                @foreach($modeldata->catalogueattributes as $catalogueattributes_val)

                                                <tr>
                                                    <td class="font-weight-bold">{{ isset($catalogueattributes_val->attr_name)?$catalogueattributes_val->attr_name:'' }}</td>
                                                    <td>{{ isset($catalogueattributes_val->attr_value)?$catalogueattributes_val->attr_value:'' }}</td>
                                                </tr>

                                                @endforeach
                                                @endif
                                                
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
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-title">Catalogue Variations</div>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-12 col-sm-9 col-md-6 col-lg-5">
                                            <table>
                                                @if($modeldata->catalougevariations)
                                             
                                                @foreach($modeldata->catalougevariations as $catalougevariations_val)

                                                <tr>

                                                    @if($catalougevariations_val->attr_value1)
                                                     <td class="font-weight-bold">{{ isset($catalougevariations_val->attr_value1)?$catalougevariations_val->attr_value1:'' }}</td>
                                                    @endif

                                                    @if($catalougevariations_val->attr_value2)
                                                     <td class="font-weight-bold">{{ isset($catalougevariations_val->attr_value2)?$catalougevariations_val->attr_value2:'' }}</td>
                                                    @endif

                                                    @if($catalougevariations_val->attr_value3)
                                                     <td class="font-weight-bold">{{ isset($catalougevariations_val->attr_value3)?$catalougevariations_val->attr_value3:'' }}</td>
                                                    @endif

                                                    @if($catalougevariations_val->attr_value4)
                                                     <td class="font-weight-bold">{{ isset($catalougevariations_val->attr_value4)?$catalougevariations_val->attr_value4:'' }}</td>
                                                    @endif
                                                   
                                                </tr>

                                                @endforeach
                                                @endif
                                                
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

            </div>
        </div>
    <!-- END: Content-->
@stop
