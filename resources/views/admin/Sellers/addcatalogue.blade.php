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
                                      <h6 class=" py-1 mb-0 font-medium-2">Add Catalogue</h6>
                                      <h2>
                                          <a href='{{ route("Sellers.catalogue",$seller_id)}}' >
                                              <button type="button" class="btn btn-primary waves-effect second-head-button">
                                                  {{ trans("messages.global.back") }}
                                              </button>
                                          </a>
                                      </h2>
                              </div>
                                <div class="seller_add_account">
                                    <div>
                                        <!-- users edit account form start -->
                                        {{ Form::model( $seller_id, ['route' => ['Sellers.cataloguesave', $seller_id], 'method' => 'post', 'role' => 'form', 'enctype' => 'multipart/form-data'] ) }}
                                            <div class="row">
                                                <div class="col-12 col-sm-6">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label>Category </label>
                                                            <select name="category" class="form-control">
                                                              @if($category)
                                                              @foreach($category as $category_val)
                                                              <option value="{{ $category_val->id }}">{{ $category_val->name }}</option>
                                                              @endforeach
                                                              @endif
                                                            </select>
                                                            <span class="error help-inline">
                                                              {{ $errors->first('category') }}
                                                            </span>
                                                        </div>
                                                    </div>
                                                  
                                                </div>

                                                <div class="col-12 col-sm-6">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label>Name</label>
                                                            <input type="text" name="name" class="form-control" placeholder="Name" value="">
                                                            <span class="error help-inline">
                                                              {{ $errors->first('name') }}
                                                            </span>
                                                        </div>
                                                    </div>
                                                  
                                                </div>

                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label>Attribute</label>
                                                            <a href="javascript:void(0);" class="add_button " title="Add field">Add more</a>
                                                            <div class="field_wrapper">
                                                              <div class="row">
                                                                <div class="col-sm-6">
                                                                  <input type="text" name="attr_name[]" class="form-control" placeholder="Color" value="">

                                                                </div>
                                                                <div class="col-sm-6">
                                                                  <input type="text" name="attr_value[]" class="form-control" placeholder="red,blue,black" value="">
                                                                </div>
                                                              </div>
                                                              <br>
                                                            </div>
                                                            
                                                        </div>
                                                    </div>
                                                  
                                                </div>


                                                <div class="col-12 d-flex flex-sm-row flex-column justify-content-end mt-1">
                                                    <button type="submit" class="btn btn-primary glow mb-1 mb-sm-0 mr-0 mr-sm-1">Save
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
@endsection