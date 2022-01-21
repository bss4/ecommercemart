@extends('layouts.default')   
@section('content')
<!-- BEGIN: Content-->
<input type="hidden" name="admin_base_url" value="{{ url('/') }}" id="admin_base_url">
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
                                      <h6 class=" py-1 mb-0 font-medium-2">Add Product</h6>
                                      <h2>
                                          <a href='{{ route("Sellers.storecatalogueproduct",$seller_id)}}' >
                                              <button type="button" class="btn btn-primary waves-effect second-head-button">
                                                  {{ trans("messages.global.back") }}
                                              </button>
                                          </a>
                                      </h2>
                              </div>
                                <div class="seller_add_account">
                                    <div>
                                        <!-- users edit account form start -->
                                        {{ Form::model( $seller_id, ['route' => ['Sellers.productsave', $seller_id], 'method' => 'post', 'role' => 'form', 'enctype' => 'multipart/form-data'] ) }}
                                            <div class="row">
                                                <div class="col-12 col-sm-6">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label>Catalogue <span class="text-danger">*</span></label>
                                                            <select name="catalogue_id" class="form-control" id="catalogue_id">
                                                              @if($catalogue_list)
                                                              @foreach($catalogue_list as $catalogue_list_val)
                                                              <option value="{{ $catalogue_list_val->id }}">{{ $catalogue_list_val->name }}</option>
                                                              @endforeach
                                                              @endif
                                                            </select>
                                                            <span class="error help-inline">
                                                              {{ $errors->first('catalogue_id') }}
                                                            </span>
                                                        </div>
                                                    </div>
                                                  
                                                </div>

                                                <div class="col-12 col-sm-6">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label>Product Name</label>
                                                            <input type="text" name="name" class="form-control" placeholder="Name" value="">
                                                            <span class="error help-inline">
                                                              {{ $errors->first('name') }}
                                                            </span>
                                                        </div>
                                                    </div>
                                                  
                                                </div>
                                                <div class="col-12 col-sm-6">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label>Product Sku</label>
                                                            <input type="text" name="sku" class="form-control" placeholder="Sku" value="">
                                                            <span class="error help-inline">
                                                              {{ $errors->first('sku') }}
                                                            </span>
                                                        </div>
                                                    </div>
                                                  
                                                </div>
                                                @if($sellerdata->theme == 'theme2' && $sellerdata->theme == 'theme5')
                                                <div class="col-12 col-sm-6">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label>Product Unit</label>
                                                            <input type="text" name="unit" class="form-control" placeholder="kg,lbs,pics" value="">
                                                            
                                                            <span class="error help-inline">
                                                              {{ $errors->first('sku') }}
                                                            </span>
                                                        </div>
                                                    </div>
                                                  
                                                </div>
                                                @endif
                                                <div class="col-12 col-sm-6">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label>Product description</label>
                                                            <input type="text" name="description" class="form-control" placeholder="Description" value="">
                                                            <span class="error help-inline">
                                                              {{ $errors->first('description') }}
                                                            </span>
                                                        </div>
                                                    </div>
                                                  
                                                </div>

                                                <div class="col-12 col-sm-6">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label>Product Price</label>
                                                            <input type="number" name="price" value="" placeholder="00.00" class="form-control">
                                                            <span class="error help-inline">
                                                              {{ $errors->first('price') }}
                                                            </span>
                                                        </div>
                                                    </div>
                                                  
                                                </div>
                                                <div class="col-12 col-sm-6">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label>Product Discount Price</label>
                                                            <input type="number" name="discount_price" placeholder="00.00" value="" class="form-control">
                                                            <span class="error help-inline">
                                                              {{ $errors->first('discount_price') }}
                                                            </span>
                                                        </div>
                                                    </div>
                                                  
                                                </div>

                                                <div class="col-12 col-sm-6">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label>Product Stock</label>
                                                            <input type="text" name="product_stock_qty" min="1"placeholder="1" value="" class="form-control">
                                                            <span class="error help-inline">
                                                              {{ $errors->first('product_stock_qty') }}
                                                            </span>
                                                            <span class="text-warning">*Please copy and paste <b>isAlways</b> in to product stock if  product quantity is unlimited*</span>
                                                        </div>
                                                    </div>
                                                  
                                                </div>

                                                 <div class="col-12 col-sm-6">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label>Product Image</label>
                                                            <input type="file" name="image[]" class="form-control" placeholder="Sku" value="">
                                                            <span class="error help-inline">
                                                              {{ $errors->first('image') }}
                                                            </span>
                                                        </div>
                                                    </div>
                                                  
                                                </div>
                                                @if($sellerdata->theme == 'theme3')
                                                <div class="col-12 col-sm-6">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label>Product File</label>
                                                            <input type="file" name="product_file" class="form-control" placeholder="Pdf,Mp3,Csv" value="">
                                                            <span class="error help-inline">
                                                              {{ $errors->first('product_file') }}
                                                            </span>
                                                        </div>
                                                    </div>
                                                  
                                                </div>
                                                @endif
                                                <div class="col-12 col-sm-6">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label>Product Status</label>
                                                           <input type="radio" name="status" value="1" checked>Active
                                                            <input type="radio" name="status" value="0">Deactive
                                                            <span class="error help-inline">
                                                              {{ $errors->first('status') }}
                                                            </span>
                                                        </div>
                                                    </div>
                                                  
                                                </div>

                                                <div class="col-12 col-sm-12">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label>Product Type</label>
                                                            @if($sellerdata->theme == 'theme1' || $sellerdata->theme == 'theme4' || $sellerdata->theme == 'theme5')
                                                            <input type="radio" name="type" value="simple"  class="radioproductvariation" checked>Simple
                                                            <input type="radio" name="type" value="variation" class="radioproductvariation">Variation
                                                            @else
                                                            <input type="radio" name="type" value="simple"  class="radioproductvariation" checked>Simple
                                                            @endif

                                                           
                                                            <span class="error help-inline">
                                                              {{ $errors->first('type') }}
                                                            </span>
                                                        </div>
                                                    </div>
                                                  
                                                </div>
                                                <div class="col-12 col-sm-12">
                                                    <div id="cataloguevariation">
                                                    
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