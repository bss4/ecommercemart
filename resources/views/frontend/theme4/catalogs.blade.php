@extends('frontend.theme4.layouts.default')   
@section('content')
<input type="hidden" id="catalogueid" value="{{ $id }}">
<!-- breadcrumb-area start -->
<div class="breadcrumb-area">
<div class="container">
    <div class="row align-items-center justify-content-center">
        <div class="col-12 text-center">
            <h2 class="breadcrumb-title">{{isset($cataloguedata->name)?$cataloguedata->name:''}}</h2>
            
        </div>
    </div>
</div>
</div>
<!-- breadcrumb-area end -->
<!-- Shop Page Start  -->
        <div class="shop-category-area pt-100px pb-100px">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 order-lg-last col-md-12 order-md-first">
                       
                        <!-- Shop Bottom Area Start -->
                        <div class="shop-bottom-area">

                            <!-- Tab Content Area Start -->
                                <div class="row">
                                    <div class="col">
                                        <div class="tab-content">
                                            <div class="filter-product"></div>
                                          
                                        </div>
                                    </div>
                                </div>
                                <!-- Tab Content Area End -->
                           
                        </div>
                        <!-- Shop Bottom Area End -->
                    </div>
                    <!-- Sidebar Area Start -->
                    <div class="col-lg-3 order-lg-first col-md-12 order-md-last">
                        <div class="shop-sidebar-wrap">
                            <!-- Sidebar single item -->
                                <div class="sidebar-widget">
                                    <h4 class="sidebar-title">Top Categories</h4>
                                    <div class="sidebar-widget-category">
                                        <ul>
                                            @if(menu($shopid))
                                            @foreach(menu($shopid) as $catalogue_val)
                                            <li>
                                            
                                                <a href="{{ url('/').'/'.$shopid. '/catalogs/' . $catalogue_val->id }}">{{ $catalogue_val->name}}</a>

                                            </li>
                                            @endforeach
                                            @endif
                                            
                                        </ul>
                                    </div>
                                </div>
                                <!-- Sidebar single item -->
                                <div class="sidebar-widget mt-8">
                                    <h4 class="sidebar-title">Price Filter</h4>
                                    <div class="loke_scroll">
                                                <input type="hidden" id="hidden_minimum_price" value="0" />
                                                <input type="hidden" id="hidden_maximum_price" value="10000" />
                                                <p id="price_show">0 - 10000</p>
                                                <div id="price_range"></div>
                                    </div>
                                </div>
                                @if(!empty($CatalogueAttributes))
                                        @foreach($CatalogueAttributes as $product_attr_val)
                                       
                                        <div class="col-12 col-md-12 widget">

                                            <h5 class="widget-title">Filter by {{ $product_attr_val['attr_name'] }}</h5>

                                            <div class="loke_scroll">

                                                <ul class="nt_filter_block nt_filter_styleck css_ntbar">
                                                     <?php 
                                      
                                                    $prodcut_att_value = explode(',',$product_attr_val['attr_value']);
                                                    foreach ($prodcut_att_value as $value) {?>
                                                    
                                                    <li>

                                                        <input type="checkbox" class="productDetail size" value="{{ $value }}">
                                                          {{ $value }}</a>

                                                    </li>
                                                    <?php }
                                                     ?>
                                                </ul>

                                            </div>

                                        </div>
                                       
                                        @endforeach
                                        @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Shop Page End  -->
@endsection