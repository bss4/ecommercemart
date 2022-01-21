 @extends('layouts.default')   
@section('content')
<!-- BEGIN: Content-->
    <div>
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <!-- users edit start -->
                <section class="users-edit">
                    <div class="card">
                        <div class="card-content">
                            <div class="card-body">
                              <div class="card-header">
                                      <h6 class=" py-1 mb-0 font-medium-2">Edit Store Theme</h6>
                                      <h2>
                                          <a href='{{ route("$modelName.index")}}' >
                                              <button type="button" class="btn btn-primary waves-effect second-head-button">
                                                  {{ trans("messages.global.back") }}
                                              </button>
                                          </a>
                                      </h2>
                              </div>
                                <div class="seller_add_account">
                                    <div>
                                        <!-- users edit account form start -->
                                        {{ Form::model( $modeldata, ['route' => ['Themes.update', $modeldata->id], 'method' => 'post', 'role' => 'form', 'enctype' => 'multipart/form-data'] ) }}
                                            <div class="row">
                                                <div class="col-12 col-sm-6">
                                                 
                                                  <div class="form-group">
                                                      <div class="controls">
                                                          <label>Theme name</label>
                                                          <input type="text" name="name" class="form-control" value="{{ isset($modeldata->name)?$modeldata->name:''}}" placeholder="Theme Name">
                                                          <span class="error help-inline">
                                                            {{ $errors->first('name') }}
                                                          </span>
                                                      </div>
                                                  </div>
                                                  <div class="form-group">
                                                      <div class="controls">
                                                          <label>Theme Folder Name</label>
                                                          <input type="text" name="theme_folder_name" class="form-control"  value="{{ isset($modeldata->theme_folder_name)?$modeldata->theme_folder_name:''}}" placeholder="Theme Folder Name" id="noSpacesField">
                                                          <span>Note:- Theme Folder Name like:- theme1 ,theme2 etc.</span>
                                                          <span class="error help-inline">
                                                            {{ $errors->first('theme_folder_name') }}
                                                          </span>
                                                      </div>
                                                  </div>
                                                  
                                                </div>
                                                <div class="col-12 col-sm-6">
                                                 
                                                  <div class="form-group">
                                                      <div class="controls">
                                                          <label>Theme Image</label>
                                                          <input type="file" name="theme_image" class="form-control" placeholder="">
                                                          <span class="error help-inline">
                                                            {{ $errors->first('theme_image') }}
                                                          </span>
                                                      </div>
                                                  </div>
                                                 

                                                </div>
                                            </div>
                                            
                                            <div class="col-12 d-flex flex-sm-row flex-column justify-content-end mt-1">
                                                <button type="submit" class="btn btn-primary glow mb-1 mb-sm-0 mr-0 mr-sm-1">Update
                                                    </button>
                                            </div>
                                            
                                       {{ Form::close() }}
                                        <!-- users edit account form ends -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- users edit ends -->

            </div>
        </div>
    </div>
  
    <!-- END: Content--> 
@endsection