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

                                      <h6 class=" py-1 mb-0 font-medium-2">Edit Catalogue</h6>

                                      <h2>

                                          <a href='{{route("Sellers.storecatalogueproduct",$modeldata->seller_id) }}' >

                                              <button type="button" class="btn btn-primary waves-effect second-head-button">

                                                  {{ trans("messages.global.back") }}

                                              </button>

                                          </a>

                                      </h2>

                              </div>

                                <div class="seller_add_account">

                                    <div>

                                        <!-- users edit account form start -->

                                        {{ Form::model( $modeldata, ['route' => ['Sellers.productupdate', $modeldata->id], 'method' => 'post', 'role' => 'form', 'enctype' => 'multipart/form-data'] ) }}

                                            <div class="row">

                                                 <div class="col-12 col-sm-6">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label>Catalogue</label>
                                                            <select name="catalogue_id" class="form-control" id="catalogue_id" disabled>
                                                              @if($catalogue_list)
                                                              @foreach($catalogue_list as $catalogue_list_val)
                                                              <option value="{{ $catalogue_list_val->id }}" <?php if($modeldata->catalogue_id == $catalogue_list_val->id){ echo "selected";}?>>{{ $catalogue_list_val->name }}</option>
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
                                                            <input type="text" name="name" class="form-control" placeholder="Name" value="{{$modeldata->name}}">
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
                                                            <input type="text" name="sku" class="form-control" placeholder="Sku" value="{{ $modeldata->sku }}">
                                                            <span class="error help-inline">
                                                              {{ $errors->first('sku') }}
                                                            </span>
                                                        </div>
                                                    </div>
                                                  
                                                </div>

                                                <div class="col-12 col-sm-6">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label>Product Unit</label>
                                                            <input type="text" name="unit" class="form-control" placeholder="kg,lbs,pics" value="{{ $modeldata->unit }}">
                                                            <span class="error help-inline">
                                                              {{ $errors->first('unit') }}
                                                            </span>
                                                        </div>
                                                    </div>
                                                  
                                                </div>
                                               
                                                <div class="col-12 col-sm-6">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label>Product description</label>
                                                            <input type="text" name="description" class="form-control" placeholder="Description" value="{{ $modeldata->description }}">
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
                                                            <input type="number" name="price" placeholder="00.00" value="{{ $modeldata->price }}" class="form-control">
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
                                                            <input type="number" name="discount_price" placeholder="00.00" value="{{ $modeldata->discount_price }}" class="form-control">
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
                                                            <input type="number" name="product_stock_qty" min="1" placeholder='1' value="{{ $modeldata->product_stock_qty }}" class="form-control">
                                                            <span class="error help-inline">
                                                              {{ $errors->first('product_stock_qty') }}
                                                            </span>
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

                                                <div class="col-12 col-sm-6">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label>Product Status</label>
                                                           <input type="radio" name="status" value="1" <?php if($modeldata->status==1){ echo "checked";}?>>Active
                                                            <input type="radio" name="status" value="0" <?php if($modeldata->status==0){ echo "checked";}?>>Deactive
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
                                                            <input type="radio" name="type" value="simple" <?php if($modeldata->type=='simple'){ echo "checked";}?> class="radioproductvariation" disabled>Simple
                                                            <input type="radio" name="type" value="variation" <?php if($modeldata->type=='variation'){ echo "checked";}?> class="radioproductvariation" disabled>Variation
                                                            <span class="error help-inline">
                                                              {{ $errors->first('type') }}
                                                            </span>
                                                        </div>
                                                    </div>
                                                  
                                                </div>

                                                    @if(!empty($modeldata->productsvariations) && $modeldata->type=='variation')
                                                   
                                                    @foreach($modeldata->productsvariations as $value)
                                                    <input type="hidden" name="catalogue_variation_id[]" value="{{ $value->id }}">
                                                    <!--<div class="row">-->
                                                    @if($value->attr_value1)
                                                    <div class="col-12 col-sm-3">
                                                    <div class="form-group">
                                                    <div class="controls">
                                                    <input type="text" name="attr_value1[]" value="{{ $value->attr_value1 }}" class="form-control" readonly>
                                                    </div>
                                                    </div>
                                                    </div>
                                                    @endif
                                                    @if($value->attr_value2)
                                                    <div class="col-12 col-sm-3">
                                                    <div class="form-group">
                                                    <div class="controls">
                                                    <input type="text" name="attr_value2[]" value="{{ $value->attr_value2 }}" class="form-control" readonly>
                                                    </div>
                                                    </div>
                                                    </div>
                                                    @endif
                                                    @if($value->attr_value3)
                                                    <div class="col-12 col-sm-3">
                                                    <div class="form-group">
                                                    <div class="controls">
                                                    <input type="text" name="attr_value3[]" value="{{ $value->attr_value3 }}" class="form-control" readonly>
                                                    </div>
                                                    </div>
                                                    </div>
                                                    @endif
                                                    @if($value->attr_value4)
                                                    <div class="col-12 col-sm-3">
                                                    <div class="form-group">
                                                    <div class="controls">
                                                    <input type="text" name="attr_value4[]" value="{{ $value->attr_value4 }}" class="form-control" readonly>
                                                    </div>
                                                    </div>
                                                    </div>
                                                    @endif
                                                    <div class="col-12 col-sm-3">
                                                    <div class="form-group">
                                                    <div class="controls">
                                                    <input type="text" name="variation_sku[]" value="{{ $value->sku }}" placeholder="Sku" class="form-control">
                                                    </div>
                                                    </div>
                                                    </div>
                                                    <div class="col-12 col-sm-3">
                                                    <div class="form-group">
                                                    <div class="controls">
                                                    <input type="number" min="0" name="variation_price[]" value="{{ $value->price }}" placeholder="Price" class="form-control">
                                                    </div>
                                                    </div>
                                                    </div>
                                                    <div class="col-12 col-sm-3">
                                                    <div class="form-group">
                                                    <div class="controls">
                                                    <input type="number" min="0" name="variation_discount_price[]" value="{{ $value->discount_price }}" placeholder="Discount Price" class="form-control">
                                                    </div>
                                                    </div>
                                                    </div>
                                                    <div class="col-12 col-sm-3">
                                                    <div class="form-group">
                                                    <div class="controls">
                                                    <input type="number" name="variation_stock[]" value="{{ $value->product_stock_qty }}" placeholder="Stock" class="form-control" min="1">
                                                    </div>
                                                    </div>
                                                    </div>
                                                    <div class="col-12 col-sm-3">
                                                    <div class="form-group">
                                                    <div class="controls">
                                                    <input type="file" name="variation_image[]">
                                                    </div>
                                                    </div>
                                                    </div>
                                                    <!--</div>-->
                                                    @endforeach
                                                    @endif
                                                
                                                <div class="col-12 d-flex flex-sm-row flex-column justify-content-end mt-1">

                                                    <button type="submit" class="btn btn-primary glow mb-1 mb-sm-0 mr-0 mr-sm-1">Update

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