@extends('frontend.theme3.layouts.default')   
@section('content')
<!-- BREADCRUMB AREA START -->
<input type="hidden" id="catalogueid" value="{{ $id }}">
<div class="page-header border-bottom mb-8">
            <div class="container">
                <div class="d-md-flex justify-content-between align-items-center py-4">
                    <h1 class="page-title font-size-3 font-weight-medium m-0 text-lh-lg">{{isset($cataloguedata->name)?$cataloguedata->name:''}}</h1>
                </div>
            </div>
</div>
<div class="site-content space-bottom-3" id="content">
            <div class="container">
                <div class="row">
                    <div id="primary" class="categories-primary-content content-area order-2">
                        <div class="shop-control-bar d-lg-flex justify-content-between align-items-center mb-5 text-center text-md-left">
                           
                            
                        </div>
                        <!-- <div class="tab-content filter-product" id="pills-tabContent">
                          
                        </div> -->
                        <div class="filter-product"></div>
                      
                    </div>
                    <div id="secondary" class="categories-secondary-content sidebar widget-area order-1" role="complementary">
                        <div id="widgetAccordion">
                            <div id="woocommerce_product_categories-2" class="widget p-4d875 border woocommerce widget_product_categories">
                                <div id="widgetHeadingOne" class="widget-head">
                                    <a class="d-flex align-items-center justify-content-between text-dark" href="#" data-toggle="collapse" data-target="#widgetCollapseOne" aria-expanded="true" aria-controls="widgetCollapseOne">
                                        <h3 class="widget-title mb-0 font-weight-medium font-size-3">Product Categories</h3>
                                        <svg class="mins" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="15px" height="2px">
                                            <path fill-rule="evenodd" fill="rgb(22, 22, 25)" d="M0.000,-0.000 L15.000,-0.000 L15.000,2.000 L0.000,2.000 L0.000,-0.000 Z" />
                                        </svg>
                                        <svg class="plus" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="15px" height="15px">
                                            <path fill-rule="evenodd" fill="rgb(22, 22, 25)" d="M15.000,8.000 L9.000,8.000 L9.000,15.000 L7.000,15.000 L7.000,8.000 L0.000,8.000 L0.000,6.000 L7.000,6.000 L7.000,-0.000 L9.000,-0.000 L9.000,6.000 L15.000,6.000 L15.000,8.000 Z" />
                                        </svg>
                                    </a>
                                </div>
                                <div id="widgetCollapseOne" class="mt-3 widget-content collapse show" aria-labelledby="widgetHeadingOne" data-parent="#widgetAccordion">
                                    <ul class="product-categories">
                                        @if(menu($shopid))
                                        @foreach(menu($shopid) as $catalogue_val)
                                        <li class="cat-item cat-item-9 cat-parent">
                                        
                                            <a href="{{ url('/').'/'.$shopid. '/catalogs/' . $catalogue_val->id }}">{{ $catalogue_val->name}}</a>

                                        </li>
                                        @endforeach
                                        @endif
                                        
                                    </ul>
                                </div>
                            </div>
                           
                            <div id="Authors" class="widget widget_search widget_author p-4d875 border">
                                <div id="widgetHeading21" class="widget-head">
                                    <a class="d-flex align-items-center justify-content-between text-dark" href="#" data-toggle="collapse" data-target="#widgetCollapse21" aria-expanded="true" aria-controls="widgetCollapse21">
                                        <h3 class="widget-title mb-0 font-weight-medium font-size-3">Filter by price</h3>
                                        <svg class="mins" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="15px" height="2px">
                                            <path fill-rule="evenodd" fill="rgb(22, 22, 25)" d="M0.000,-0.000 L15.000,-0.000 L15.000,2.000 L0.000,2.000 L0.000,-0.000 Z" />
                                        </svg>
                                        <svg class="plus" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="15px" height="15px">
                                            <path fill-rule="evenodd" fill="rgb(22, 22, 25)" d="M15.000,8.000 L9.000,8.000 L9.000,15.000 L7.000,15.000 L7.000,8.000 L0.000,8.000 L0.000,6.000 L7.000,6.000 L7.000,-0.000 L9.000,-0.000 L9.000,6.000 L15.000,6.000 L15.000,8.000 Z" />
                                        </svg>
                                    </a>
                                </div>
                                <div id="widgetCollapse21" class="mt-4 widget-content collapse show" aria-labelledby="widgetHeading21" data-parent="#widgetAccordion">
                                    
                                    <input type="hidden" id="hidden_minimum_price" value="0" />
                                    <input type="hidden" id="hidden_maximum_price" value="10000" />
                                    <p id="price_show">0 - 10000</p>
                                    <div id="price_range"></div>
                                    
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
</div>
@endsection