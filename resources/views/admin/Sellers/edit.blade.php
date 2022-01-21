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
                                      <h6 class=" py-1 mb-0 font-medium-2">Edit Seller</h6>
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
                                        {{ Form::model( $modeldata, ['route' => ['Sellers.update', $modeldata->id], 'method' => 'post', 'role' => 'form', 'enctype' => 'multipart/form-data'] ) }}
                                            <div class="row">
                                                <div class="col-12 col-sm-6">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label>E-mail</label>
                                                            <input type="email" name="email" class="form-control" placeholder="Email" value="{{isset($modeldata->email)?$modeldata->email:''}}">
                                                            <span class="error help-inline">
                                                              {{ $errors->first('email') }}
                                                            </span>
                                                        </div>
                                                    </div>
                                                  <div class="form-group">
                                                      <div class="controls">
                                                          <label>Aadhar</label>
                                                          <input type="file" name="aadhar_card" class="form-control" placeholder="">
                                                          <span class="error help-inline">
                                                            {{ $errors->first('aadhar') }}
                                                          </span>
                                                      </div>
                                                        @if(!empty($modeldata->aadhar_card))
                                                        <div class="controls">

                                                          <img src="{{ url('/') }}/public/documents/{{$modeldata->aadhar_card}}" style="width: 100px;height: 100px;">
                                                        </div>
                                                       @endif
                                                  </div>  

                                                  <div class="form-group">
                                                      <div class="controls">
                                                          <label>GST No.</label>
                                                          <input type="text" name="gst_no" class="form-control" placeholder="GST No." value="{{isset($modeldata->gst)?$modeldata->gst:''}}">
                                                          <span class="error help-inline">
                                                            {{ $errors->first('gst_no') }}
                                                          </span>
                                                      </div>
                                                  </div>

                                                  <div class="form-group">
                                                      <div class="controls">
                                                          <label>Address</label>
                                                          <input type="text" name="address" class="form-control" placeholder="Address" value="{{isset($modeldata->address)?$modeldata->address:''}}">
                                                          <span class="error help-inline">
                                                            {{ $errors->first('address') }}
                                                          </span>
                                                      </div>
                                                  </div>                                                 
                                             
                                                </div>
                                                <div class="col-12 col-sm-6">
                                                  <div class="form-group">
                                                      <div class="controls">
                                                          <label>Name</label>
                                                          <input type="text" name="name" class="form-control" placeholder="Name" value="{{isset($modeldata->name)?$modeldata->name:''}}">
                                                          <span class="error help-inline">
                                                            {{ $errors->first('name') }}
                                                          </span>
                                                      </div>
                                                  </div>
                                                  <div class="form-group">
                                                      <div class="controls">
                                                          <label>Contact</label>
                                                          <input type="text" name="contact" class="form-control" placeholder="Contact" value="{{isset($modeldata->phone)?$modeldata->phone:''}}">
                                                          <span class="error help-inline">
                                                            {{ $errors->first('contact') }}
                                                          </span>
                                                      </div>
                                                  </div>
                                                  <div class="form-group">
                                                      <div class="controls">
                                                          <label>Pancard</label>
                                                          <input type="file" name="pancard" class="form-control" placeholder="">
                                                          <span class="error help-inline">
                                                            {{ $errors->first('pancard') }}
                                                          </span>
                                                      </div>
                                                      @if(!empty($modeldata->pan_card))
                                                      <div class="controls">
                                                          <img src="{{ url('/') }}/public/documents/{{$modeldata->pan_card}}" style="width: 100px;height: 100px;">
                                                      </div>
                                                      @endif
                                                  </div>    
                                                  <div class="form-group">
                                                      <div class="controls">
                                                          <label>Profile Image</label>
                                                          <input type="file" name="profile_image" class="form-control" placeholder="">
                                                          <span class="error help-inline">
                                                            {{ $errors->first('profile_image') }}
                                                          </span>
                                                      </div>
                                                      @if(!empty($modeldata->image))
                                                      <div class="controls">
                                                          <img src="{{ url('/') }}/public/documents/{{$modeldata->image}}" style="width: 100px;height: 100px;">
                                                      </div>
                                                      @endif
                                                  </div>                                              
                                                </div>
                                                </div>
                                                <div class="col-12 d-flex flex-sm-row flex-column justify-content-end mt-1">
                                                    <button type="submit" class="btn btn-primary glow mb-1 mb-sm-0 mr-0 mr-sm-1">Update
                                                        </button>
                                                    <!-- <button type="reset" class="btn btn-outline-warning">Reset</button> -->
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