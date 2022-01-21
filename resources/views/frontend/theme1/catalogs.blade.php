@extends('frontend.theme1.layouts.default')   

@section('content')

<input type="hidden" id="catalogueid" value="{{ $id }}">
    <!--shop banner-->

        <div class="kalles-section page_section_heading">

            <div class="page-head tc pr oh cat_bg_img page_head_">

                <div class="parallax-inner nt_parallax_false lazyload nt_bg_lz pa t__0 l__0 r__0 b__0" data-bgset="assets/images/shop/shop-banner.jpg"></div>

                <div class="container pr z_100">

                    <h1 class="mb__5 cw">{{isset($cataloguedata->name)?$cataloguedata->name:''}}</h1>
                    
                    <!-- <p class="mg__0">Shop through our latest selection of Women’s Clothing and Accessories.</p> -->

                </div>

            </div>

        </div>

        <!--end shop banner-->



        <div class="container container_cat pop_default cat_default mt__40 mb__40">
        <!--product container-->

            <div class="row">



                <!--left sidebar-->

                <div class="js_sidebar sidebar sidebar_nt col-lg-3 col-12 space_30 hidden_false lazyload">

                    <div id="kalles-section-sidebar_shop" class="kalles-section nt_ajaxFilter section_sidebar_shop type_instagram">

                        <div class="h3 mg__0 tu bgb cw visible-sm fs__16 pr">Sidebar<i class="close_pp pegk pe-7s-close fs__40 ml__5"></i>

                        </div>

                        <div class="cat_shop_wrap">

                            <div class="cat_fixcl-scroll">

                                <div class="cat_fixcl-scroll-content css_ntbar">

                                    <div class="row no-gutters wrap_filter">

                                        <div class="col-12 col-md-12 widget widget_product_categories cat_count_false">

                                            <h5 class="widget-title">Product Categories</h5>

                                            <ul class="product-categories">

                                                @if(menu($shopid))
                                                @foreach(menu($shopid) as $catalogue_val)
                                                <li class="cat-item">

                                                    <a href="{{ url('/').'/'.$shopid. '/catalogs/' . $catalogue_val->id }}">{{ $catalogue_val->name}}</a>

                                                </li>
                                                @endforeach
                                                @endif
                                                
                                            </ul>

                                        </div>

                                        <div class="col-12 col-md-12 widget">

                                            <h5 class="widget-title">Filter by price</h5>

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

                </div>

                <!--end left sidebar-->



                <!--main content-->

                <div class="col-lg-9 col-12">

                    <div class="kalles-section tp_se_cdt">
                        <!--products list-->
                        <div class="filter-product"></div>
                        <!--end products list-->

                    </div>

                </div>

                <!--end main content-->



            </div>

            <!--end product container-->



        </div>

@endsection