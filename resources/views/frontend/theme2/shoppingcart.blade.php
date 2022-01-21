@extends('frontend.theme2.layouts.default')   
@section('content')
 <!-- BREADCRUMB AREA START -->

    <div class="ltn__breadcrumb-area mb-80 ltn__breadcrumb-area-3 ltn__breadcrumb-color-white bg-overlay-theme-black-90 bg-image plr--9---" data-bg="<?php echo WEBSITE_URL;?>frontassets/theme2/img/bg/9.jpg">

        <div class="container">

            <div class="row">

                <div class="col-lg-12">

                    <div class="ltn__breadcrumb-inner ltn__breadcrumb-inner-2 justify-content-between">

                        <div class="section-title-area ltn__section-title-2">

                            <h1 class="section-title white-color">Cart</h1>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <!-- BREADCRUMB AREA END -->

    

    <!-- CONTACT ADDRESS AREA START -->

    <!-- SHOPING CART AREA START -->

    <div class="liton__shoping-cart-area mb-120">

        <div class="container">

            <div class="row" id="cartlistdata">

                

            </div>

        </div>

    </div>

    <!-- SHOPING CART AREA END -->
    @endsection