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
                              <h6 class=" py-1 mb-0 font-medium-2">Add Affilate</h6>
                                <div class="seller_add_account">
                                    <div>
                                        <!-- users edit account form start -->
                                        {{ Form::open( array( 'route' => ['Affilate.save'], 'role' => 'form', 'enctype' => 'multipart/form-data', 'method' => 'post') ) }}
                                            <div class="row">
                                                <div class="col-12 col-sm-6">
                                                  <div class="form-group">
                                                      <div class="controls">
                                                          <label>Name</label>
                                                          <input type="text" name="name" class="form-control" placeholder="Name">
                                                          <span class="error help-inline">
                                                            {{ $errors->first('name') }}
                                                          </span>
                                                      </div>
                                                  </div>
                                                  <div class="form-group">
                                                      <div class="controls">
                                                          <label>Affilate Uniqe key</label>
                                                          <input type="text" name="app_id" class="form-control" placeholder="Unique Id" id="app_id">
                                                          <span class="error help-inline">
                                                            {{ $errors->first('app_id') }}
                                                          </span>
                                                      </div>
                                                      <button type="button" class="btn btn-primary" onclick="return genarate();">Genarate</button>
                                                  </div>
                                                  
                                                  <div class="form-group" style="display: none;">
                                                      <div class="controls">
                                                          <label>Aadhar</label>
                                                          <input type="file" name="aadhar_card" class="form-control" placeholder="">
                                                          <span class="error help-inline">
                                                            {{ $errors->first('aadhar') }}
                                                          </span>
                                                      </div>
                                                  </div>
                                                  <div class="form-group" style="display: none;">
                                                      <div class="controls">
                                                          <label>GST No.</label>
                                                          <input type="text" name="gst_no" class="form-control" placeholder="GST No.">
                                                          <span class="error help-inline">
                                                            {{ $errors->first('gst_no') }}
                                                          </span>
                                                      </div>
                                                  </div>
                                                </div>
                                                <div class="col-12 col-sm-6">
                                                   <div class="controls">
                                                          <label>E-mail</label>
                                                          <input type="email" name="email" class="form-control" placeholder="Email">
                                                          <span class="error help-inline">
                                                            {{ $errors->first('email') }}
                                                          </span>
                                                  </div>
                                                  <div class="form-group" style="display: none;">
                                                      <div class="controls">
                                                          <label>Pancard</label>
                                                          <input type="file" name="pancard" class="form-control" placeholder="">
                                                          <span class="error help-inline">
                                                            {{ $errors->first('pancard') }}
                                                          </span>
                                                      </div>
                                                  </div>
                                                  <div class="form-group" style="display: none;">
                                                      <div class="controls">
                                                          <label>Profile Image</label>
                                                          <input type="file" name="profile_image" class="form-control" placeholder="">
                                                      </div>
                                                  </div>
                                                </div>
                                                <div class="col-12 d-flex flex-sm-row flex-column justify-content-end mt-1">
                                                    <button type="submit" class="btn btn-primary glow mb-1 mb-sm-0 mr-0 mr-sm-1">Submit
                                                        </button>
                                                    <!-- <button type="reset" class="btn btn-outline-warning">Reset</button> -->
                                                </div>
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
    <script type="text/javascript">
      function genarate()
      {
          var r = Math.random().toString(36).substring(7);
          $('#app_id').val(r);

      }
    </script>
@endsection