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
                                      <h6 class=" py-1 mb-0 font-medium-2">Add Plan</h6>
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
                                        {{ Form::open( array( 'route' => ['Plans.save'], 'role' => 'form' ) ) }}
                                         
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
                                                  
                                             
                                                </div>
                                                <div class="col-12 col-sm-6">
                                                  <div class="form-group">
                                                      <div class="controls">
                                                          <label>Price</label>
                                                          <input type="text" name="price" class="form-control" placeholder="Price">
                                                          <span class="error help-inline">
                                                            {{ $errors->first('price') }}
                                                          </span>
                                                      </div>
                                                  </div>
                                                </div>
                                                <div class="col-12 col-sm-12">
                                                  <div class="controls">
                                                  <label>Description</label>
                                                    <textarea id="plan-description-editor" name="description"></textarea>
                                                    <script>
                                                    CKEDITOR.replace( 'plan-description-editor', {
                                                    height: 200,
                                                    });
                                                  </script>
                                                </div>
                                                </div>
                                                <div class="col-12 d-flex flex-sm-row flex-column justify-content-end mt-1">
                                                    <button type="submit" class="btn btn-primary glow mb-1 mb-sm-0 mr-0 mr-sm-1">Submit
                                                        </button>
                                                  
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
@endsection