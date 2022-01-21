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
                                    <div class="card-title">Theme</div>
                                    <h2>

                                        <a href='{{ route("Themes.index")}}' >

                                            <button type="button" class="btn btn-primary waves-effect second-head-button">

                                                {{ trans("messages.global.back") }}

                                            </button>

                                        </a>

                                    </h2>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="users-view-image store_view">
                                            @if(!empty($modeldata->theme_image))
                                            <img style="height: 300px;" src="{{ THEMES_IMAGE_URL.$modeldata->theme_image}}" class="users-avatar-shadow w-100 img-size rounded mb-2 pr-2 ml-1" alt="avatar">
                                            @endif
                                        </div>
                                        <div class="col-12 col-sm-9 col-md-6 col-lg-5">
                                            <table>
                                                <tr>
                                                    <td class="font-weight-bold">Theme Name</td>
                                                    <td>{{isset($modeldata->name)?$modeldata->name:''}}</td>
                                                </tr>
                                                <tr>
                                                    <td class="font-weight-bold">Theme Folder Name</td>
                                                    <td>{{isset($modeldata->theme_folder_name)?$modeldata->theme_folder_name:''}}</td>
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

            </div>
        </div>
    <!-- END: Content-->
@stop
