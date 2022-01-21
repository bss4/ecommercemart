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
                                      <h6 class=" py-1 mb-0 font-medium-2">Edit Seller Store</h6>
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
                                        {{ Form::model( $modeldata, ['route' => ['Stores.update', $modeldata->id], 'method' => 'post', 'role' => 'form', 'enctype' => 'multipart/form-data'] ) }}
                                            <div class="row">
                                                <div class="col-12 col-sm-6">
                                                  <div class="form-group">
                                                      <div class="controls">
                                                        <label>Please Select Seller</label>
                                                         <select name="seller_id" class="form-control">
                                                           @if($sellers)
                                                           @foreach($sellers as $seller_val)
                                                            <option value="{{ $seller_val->id }}" <?php if($modeldata->seller_id == $seller_val->id){ echo "selected";}?>>{{ $seller_val->name }}</option>
                                                           @endforeach
                                                           @endif
                                                           
                                                         </select>
                                                      </div>
                                                  </div>
                                                  
                                                  <div class="form-group">
                                                      <div class="controls">
                                                          <label>Business name </label>
                                                          <input type="text" name="business_name" class="form-control" value="{{ isset($modeldata->business_name)?$modeldata->business_name:''}}" placeholder="Business Name">
                                                          <span class="error help-inline">
                                                            {{ $errors->first('business_name') }}
                                                          </span>
                                                      </div>
                                                  </div>
                                                  <div class="form-group">
                                                      <div class="controls">
                                                          <label>Store Name</label>
                                                          <input type="text" name="name" class="form-control"  value="{{ isset($modeldata->name)?$modeldata->name:''}}" placeholder="Store Name">
                                                          <span class="error help-inline">
                                                            {{ $errors->first('name') }}
                                                          </span>
                                                      </div>
                                                  </div>
                                                  <div class="form-group">
                                                      <div class="controls">
                                                          <label>City</label>
                                                          <input type="text" name="city" class="form-control" value="{{ isset($modeldata->city)?$modeldata->city:''}}" placeholder="Contact">
                                                          <span class="error help-inline">
                                                            {{ $errors->first('city') }}
                                                          </span>
                                                      </div>
                                                  </div>
                                                  <div class="form-group">
                                                      <div class="controls">
                                                          <label>State</label>
                                                          <input type="text" name="state" class="form-control" value="{{ isset($modeldata->state)?$modeldata->state:''}}" placeholder="Contact">
                                                          <span class="error help-inline">
                                                            {{ $errors->first('state') }}
                                                          </span>
                                                      </div>
                                                  </div>
                                                  <div class="form-group">
                                                      <div class="controls">
                                                        <label>Please Select Theme</label>
                                                          <select name="theme" class="form-control">
                                                            @if($themes)
                                                            @foreach($themes as $value)
                                                            <option value="{{ $value->theme_folder_name}}" <?php if($modeldata->seller['theme']==$value->theme_folder_name){ echo "selected";}?>>{{ isset($value->name)?$value->name:''}}</option>
                                                            @endforeach
                                                            @endif
                                                          </select>                    
                                                          <span class="error help-inline">
                                                            {{ $errors->first('theme') }}
                                                          </span>
                                                      </div>
                                                  </div>
                                                </div>
                                                <div class="col-12 col-sm-6">
                                                  <div class="form-group">
                                                      <div class="controls">

                                                        <label>Please Select Store Type</label>
                                                         <select name="store_type_id" class="form-control">
                                                           @if($store_type)
                                                           @foreach($store_type as $store_type_val)
                                                            <option value="{{ $store_type_val->id }}" <?php if($modeldata->store_type == $store_type_val->id){ echo "selected";}?>>{{ $store_type_val->name }}</option>
                                                           @endforeach
                                                           @endif
                                                           
                                                         </select>
                                                      </div>
                                                  </div>
                                                  
                                                  <div class="form-group">
                                                      <div class="controls">
                                                          <label>Country</label>
                                                          <input type="text" name="country" class="form-control" value="{{ isset($modeldata->country)?$modeldata->country:''}}" placeholder="Contact">
                                                          <span class="error help-inline">
                                                            {{ $errors->first('country') }}
                                                          </span>
                                                      </div>
                                                  </div>
                                                  <div class="form-group">
                                                      <div class="controls">
                                                          <label>Pin Code</label>
                                                          <input type="text" name="pin_code" class="form-control" value="{{ isset($modeldata->pin_code)?$modeldata->pin_code:''}}" placeholder="Contact">
                                                          <span class="error help-inline">
                                                            {{ $errors->first('pin_code') }}
                                                          </span>
                                                      </div>
                                                  </div>
                                                  <div class="form-group">
                                                      <div class="controls">
                                                          <label>Logo</label>
                                                          <input type="file" name="logo" class="form-control" placeholder="">
                                                          <span class="error help-inline">
                                                            {{ $errors->first('logo') }}
                                                          </span>
                                                      </div>
                                                  </div>
                                                   <div class="form-group">
                                                      <div class="controls">
                                                          <label>Shop ID</label>
                                                          <input type="text" name="app_id" class="form-control" value="{{ isset($modeldata->seller['app_id'])?$modeldata->seller['app_id']:''}}" placeholder="Shop Id">
                                                          <span class="error help-inline">
                                                            {{ $errors->first('app_id') }}
                                                          </span>
                                                      </div>
                                                  </div>
                                                </div>
                                                <div class="col-12 col-sm-12">
                                                  <div class="controls">
                                                  <label>Shipping Policy</label>
                                                    <textarea id="shipping-policy-editor" name="shipping_policy">{{ isset($modeldata->shipping_policy)?$modeldata->shipping_policy:''}}</textarea>
                                                    <script>
                                                    CKEDITOR.replace( 'shipping-policy-editor', {
                                                    height: 200,
                                                    filebrowserUploadUrl: "{{ route('Stores.ckeditorimage') }}"
                                                    });
                                                  </script>
                                                  </div>
                                                </div>
                                                <div class="col-12 col-sm-12">
                                                  <div class="controls">
                                                  <label>Return & Refund Policy</label>
                                                    <textarea id="return-refund-policy-editor" name="return_refund_policy">{{ isset($modeldata->return_refund_policy)?$modeldata->return_refund_policy:''}}</textarea>
                                                    <script>
                                                    CKEDITOR.replace( 'return-refund-policy-editor', {
                                                    height: 200,
                                                    filebrowserUploadUrl: "{{ route('Stores.ckeditorimage') }}"
                                                    });
                                                  </script>
                                                </div>
                                                </div>
                                                <div class="col-12 col-sm-12">
                                                  <div class="controls">
                                                  <label>Privacy Policy</label>
                                                    <textarea id="privacy-policy-editor" name="privacy_policy">{{ isset($modeldata->privacy_policy)?$modeldata->privacy_policy:''}}</textarea>
                                                    <script>
                                                    CKEDITOR.replace( 'privacy-policy-editor', {
                                                    height: 200,
                                                    filebrowserUploadUrl: "{{ route('Stores.ckeditorimage') }}"
                                                    });
                                                  </script>
                                                  </div>
                                                </div>
                                                <div class="col-12 col-sm-12">
                                                  <div class="controls">
                                                  <label>Term & Condition Policy</label>
                                                    <textarea id="terms-conditions-editor" name="terms_conditions">{{ isset($modeldata->terms_conditions)?$modeldata->terms_conditions:''}}</textarea>
                                                    <script>
                                                    CKEDITOR.replace( 'terms-conditions-editor', {
                                                    height: 200,
                                                    filebrowserUploadUrl: "{{ route('Stores.ckeditorimage') }}"
                                                    });
                                                  </script>
                                                  </div>
                                                </div>
                                                <div class="col-12 col-sm-12">
                                                  <div class="controls">
                                                  <label>Payments Policy</label>
                                                    <textarea id="payments-policy-editor" name="payments_policy">{{ isset($modeldata->payments_policy)?$modeldata->payments_policy:''}}</textarea>
                                                    <script>
                                                    CKEDITOR.replace( 'payments-policy-editor', {
                                                    height: 200,
                                                    filebrowserUploadUrl: "{{ route('Stores.ckeditorimage') }}"
                                                    });
                                                  </script>
                                                  </div>
                                                </div>
                                                <div class="col-12 col-sm-12">
                                                  <div class="controls">
                                                  <label>About Us</label>
                                                    <textarea id="about-us-editor" name="about_us">{{ isset($modeldata->about_us)?$modeldata->about_us:''}}</textarea>
                                                    <script>
                                                    CKEDITOR.replace( 'about-us-editor', {
                                                    height: 200,
                                                    filebrowserUploadUrl: "{{ route('Stores.ckeditorimage') }}"
                                                    });
                                                  </script>
                                                 </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <h4>Shop Working Hours</h4>
                                            </div>
                                            <div class="row">
                                                <div class="col-12 col-sm-4">
                                                  <div class="form-group">
                                                      <div class="controls">
                                                          <h4>Monday</h4>
                                                      </div>
                                                  </div>
                                                </div>
                                                <div class="col-12 col-sm-4">
                                                  <div class="form-group">
                                                      <div class="controls">
                                                          <label>Start time</label>
                                                          <input type="time" name="start_time[{{ MONDAY }}]" value="{{ isset($modeldata->shopworkingtime[0]['start_time'])?$modeldata->shopworkingtime[0]['start_time']:'' }}" class="form-control" placeholder="Contact" value="">
                                                      </div>
                                                  </div>
                                                </div>
                                                <div class="col-12 col-sm-4">
                                                  <div class="form-group">
                                                      <div class="controls">
                                                          <label>End time</label>
                                                          <input type="time" name="end_time[{{ MONDAY }}]" value="{{ isset($modeldata->shopworkingtime[0]['close_time'])?$modeldata->shopworkingtime[0]['close_time']:'' }}" class="form-control" placeholder="Contact" value="">
                                                      </div>
                                                  </div>
                                               </div>
                                            

                                                <div class="col-12 col-sm-4">
                                                  <div class="form-group">
                                                      <div class="controls">
                                                          <h4>Tuesday</h4>
                                                      </div>
                                                  </div>
                                                </div>
                                                <div class="col-12 col-sm-4">
                                                  <div class="form-group">
                                                      <div class="controls">
                                                          <label>Start time</label>
                                                          <input type="time" name="start_time[{{ TUESDAY }}]" value="{{ isset($modeldata->shopworkingtime[1]['start_time'])?$modeldata->shopworkingtime[1]['start_time']:'' }}" class="form-control" placeholder="Contact" value="">
                                                      </div>
                                                  </div>
                                                </div>
                                                <div class="col-12 col-sm-4">
                                                  <div class="form-group">
                                                      <div class="controls">
                                                          <label>End time</label>
                                                          <input type="time" name="end_time[{{ TUESDAY }}]" value="{{ isset($modeldata->shopworkingtime[1]['close_time'])?$modeldata->shopworkingtime[1]['close_time']:'' }}" class="form-control" placeholder="Contact" value="">
                                                      </div>
                                                  </div>
                                               </div>
                                              
                                              <div class="col-12 col-sm-4">
                                                  <div class="form-group">
                                                      <div class="controls">
                                                          <h4>Wednesday</h4>
                                                      </div>
                                                  </div>
                                                </div>
                                                <div class="col-12 col-sm-4">
                                                  <div class="form-group">
                                                      <div class="controls">
                                                          <label>Start time</label>
                                                          <input type="time" name="start_time[{{ WEDNESDAY }}]" value="{{ isset($modeldata->shopworkingtime[2]['start_time'])?$modeldata->shopworkingtime[2]['start_time']:'' }}" class="form-control" placeholder="Contact" value="">
                                                      </div>
                                                  </div>
                                                </div>
                                                <div class="col-12 col-sm-4">
                                                  <div class="form-group">
                                                      <div class="controls">
                                                          <label>End time</label>
                                                          <input type="time" name="end_time[{{ WEDNESDAY }}]" value="{{ isset($modeldata->shopworkingtime[2]['close_time'])?$modeldata->shopworkingtime[2]['close_time']:'' }}" class="form-control" placeholder="Contact" value="">
                                                      </div>
                                                  </div>
                                               </div>

                                               <div class="col-12 col-sm-4">
                                                  <div class="form-group">
                                                      <div class="controls">
                                                          <h4>Thrusday</h4>
                                                      </div>
                                                  </div>
                                                </div>
                                                <div class="col-12 col-sm-4">
                                                  <div class="form-group">
                                                      <div class="controls">
                                                          <label>Start time</label>
                                                          <input type="time" name="start_time[{{ THRUSDAY }}]" value="{{ isset($modeldata->shopworkingtime[3]['start_time'])?$modeldata->shopworkingtime[3]['start_time']:'' }}" class="form-control" placeholder="Contact" value="">
                                                      </div>
                                                  </div>
                                                </div>
                                                <div class="col-12 col-sm-4">
                                                  <div class="form-group">
                                                      <div class="controls">
                                                          <label>End time</label>
                                                          <input type="time" name="end_time[{{ THRUSDAY }}]" value="{{ isset($modeldata->shopworkingtime[3]['close_time'])?$modeldata->shopworkingtime[3]['close_time']:'' }}" class="form-control" placeholder="Contact" value="">
                                                      </div>
                                                  </div>
                                               </div>

                                               <div class="col-12 col-sm-4">
                                                  <div class="form-group">
                                                      <div class="controls">
                                                          <h4>Friday</h4>
                                                      </div>
                                                  </div>
                                                </div>
                                                <div class="col-12 col-sm-4">
                                                  <div class="form-group">
                                                      <div class="controls">
                                                          <label>Start time</label>
                                                          <input type="time" name="start_time[{{ FRIDAY }}]" value="{{ isset($modeldata->shopworkingtime[4]['start_time'])?$modeldata->shopworkingtime[4]['start_time']:'' }}" class="form-control" placeholder="Contact" value="">
                                                      </div>
                                                  </div>
                                                </div>
                                                <div class="col-12 col-sm-4">
                                                  <div class="form-group">
                                                      <div class="controls">
                                                          <label>End time</label>
                                                          <input type="time" name="end_time[{{ FRIDAY }}]" value="{{ isset($modeldata->shopworkingtime[4]['close_time'])?$modeldata->shopworkingtime[4]['close_time']:'' }}" class="form-control" placeholder="Contact" value="">
                                                      </div>
                                                  </div>
                                               </div>

                                               <div class="col-12 col-sm-4">
                                                  <div class="form-group">
                                                      <div class="controls">
                                                          <h4>Saturday</h4>
                                                      </div>
                                                  </div>
                                                </div>
                                                <div class="col-12 col-sm-4">
                                                  <div class="form-group">
                                                      <div class="controls">
                                                          <label>Start time</label>
                                                          <input type="time" name="start_time[{{ SATURDAY }}]" value="{{ isset($modeldata->shopworkingtime[5]['start_time'])?$modeldata->shopworkingtime[5]['start_time']:'' }}" class="form-control" placeholder="Contact" value="">
                                                      </div>
                                                  </div>
                                                </div>
                                                <div class="col-12 col-sm-4">
                                                  <div class="form-group">
                                                      <div class="controls">
                                                          <label>End time</label>
                                                          <input type="time" name="end_time[{{ SATURDAY }}]" value="{{ isset($modeldata->shopworkingtime[5]['close_time'])?$modeldata->shopworkingtime[5]['close_time']:'' }}"  class="form-control" placeholder="Contact" value="">
                                                      </div>
                                                  </div>
                                               </div>
                                               <div class="col-12 col-sm-4">
                                                  <div class="form-group">
                                                      <div class="controls">
                                                          <h4>Sunday</h4>
                                                      </div>
                                                  </div>
                                                </div>
                                                <div class="col-12 col-sm-4">
                                                  <div class="form-group">
                                                      <div class="controls">
                                                          <label>Start time</label>
                                                          <input type="time" name="start_time[{{ SUNDAY }}]" value="{{ isset($modeldata->shopworkingtime[6]['start_time'])?$modeldata->shopworkingtime[6]['start_time']:'' }}" class="form-control" placeholder="Contact" value="">
                                                      </div>
                                                  </div>
                                                </div>
                                                <div class="col-12 col-sm-4">
                                                  <div class="form-group">
                                                      <div class="controls">
                                                          <label>End time</label>
                                                          <input type="time" name="end_time[{{ SUNDAY }}]" value="{{ isset($modeldata->shopworkingtime[6]['close_time'])?$modeldata->shopworkingtime[6]['close_time']:'' }}" class="form-control" placeholder="Contact" value="">
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