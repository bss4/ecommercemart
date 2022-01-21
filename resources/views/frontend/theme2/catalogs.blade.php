@extends('frontend.theme2.layouts.default')   
@section('content')
<!-- BREADCRUMB AREA START -->
<input type="hidden" id="catalogueid" value="{{ $id }}">
<div class="ltn__breadcrumb-area ltn__breadcrumb-area-3 ltn__breadcrumb-color-white bg-overlay-theme-black-90 bg-image plr--9---" data-bg="img/bg/9.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="ltn__breadcrumb-inner ltn__breadcrumb-inner-2 justify-content-between">
                    <div class="section-title-area ltn__section-title-2">
                        <h1 class="section-title white-color">{{isset($cataloguedata->name)?$cataloguedata->name:''}}</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- BREADCRUMB AREA END -->
<!-- PRODUCT DETAILS AREA START -->
<div class="ltn__product-area ltn__product-gutter mb-20">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="ltn__shop-options">
                    <ul>
                        <li>
                            <div class="ltn__grid-list-tab-menu ">
                                <div class="nav">
                                    <a class="active show" data-toggle="tab" href="#liton_product_grid"><i class="fas fa-th-large"></i></a>
                                    <a data-toggle="tab" href="#liton_product_list"><i class="fas fa-list"></i></a>
                                </div>
                            </div>
                        </li>
                      <!--   <li>
                           <div class="showing-product-number text-right">
                                <span>Showing 1–12 of 18 results</span>
                            </div> 
                        </li> -->
                        <li>
                           <div class="short-by text-center">
                                <select class="nice-select">
                                    <option>Default Sorting</option>
                                    <option>Sort by popularity</option>
                                    <option>Sort by new arrivals</option>
                                    <option>Sort by price: low to high</option>
                                    <option>Sort by price: high to low</option>
                                </select>
                            </div> 
                        </li>
                    </ul>
                </div>
                
                <!--products list-->
                        <div class="filter-product"></div>
                <!--end products list-->
                <!-- <div class="ltn__pagination-area text-center">
                    <div class="ltn__pagination">
                        <ul>
                            <li><a href="#"><i class="fas fa-angle-double-left"></i></a></li>
                            <li><a href="#">1</a></li>
                            <li class="active"><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">...</a></li>
                            <li><a href="#">10</a></li>
                            <li><a href="#"><i class="fas fa-angle-double-right"></i></a></li>
                        </ul>
                    </div>
                </div> -->
            </div>
            <!-- <div class="col-lg-4">
                <aside class="sidebar ltn__shop-sidebar ltn__right-sidebar">
                   
                    <div class="widget ltn__banner-widget">
                        <a href="shop.html"><img src="<?php //echo WEBSITE_URL;?>frontassets/theme2/img/banner/banner-2.jpg" alt="#"></a>
                    </div>
                </aside>
            </div> -->
        </div>
    </div>
</div>
<!-- PRODUCT DETAILS AREA END -->
@endsection