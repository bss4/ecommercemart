@extends('frontend.theme2.layouts.default')   
@section('content')
<!-- BREADCRUMB AREA START -->
<div class="ltn__breadcrumb-area mb-80 ltn__breadcrumb-area-3 ltn__breadcrumb-color-white bg-overlay-theme-black-90 bg-image plr--9---" data-bg="<?php echo WEBSITE_URL;?>frontassets/theme2/img/bg/9.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="ltn__breadcrumb-inner ltn__breadcrumb-inner-2 justify-content-between">
                    <div class="section-title-area ltn__section-title-2">
                        <h1 class="section-title white-color">Wishlist</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- BREADCRUMB AREA END -->
    <!-- WISHLIST AREA START -->
<div class="liton__wishlist-area mb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-12" id="wishlistdata">
                
            </div>
        </div>
    </div>
</div>
<!-- WISHLIST AREA START -->
@endsection