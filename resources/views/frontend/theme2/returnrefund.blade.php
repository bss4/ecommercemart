@extends('frontend.theme2.layouts.default')   
@section('content')
<!-- BREADCRUMB AREA START -->
    <div class="ltn__breadcrumb-area mb-80 ltn__breadcrumb-area-3 ltn__breadcrumb-color-white bg-overlay-theme-black-90 bg-image plr--9---" data-bg="img/bg/9.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ltn__breadcrumb-inner ltn__breadcrumb-inner-2 justify-content-between">
                        <div class="section-title-area ltn__section-title-2">
                            <h1 class="section-title white-color">Return Policy</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- BREADCRUMB AREA END -->
    
    <!-- CONTACT ADDRESS AREA START -->
    <div class="ltn__contact-address-area mb-60">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                   @if(!empty($return_refund_policy))
                     
                     <?php
                        echo $return_refund_policy;
                     ?>
                     @endif
                </div>                
            </div>
        </div>
    </div>
    <!-- CONTACT ADDRESS AREA END -->
@endsection