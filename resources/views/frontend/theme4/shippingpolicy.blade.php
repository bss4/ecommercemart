@extends('frontend.theme4.layouts.default')   
@section('content')
<!-- breadcrumb-area start -->
<div class="breadcrumb-area">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-12 text-center">
                <h2 class="breadcrumb-title">Terms and Conditions</h2>
              
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb-area end -->
<main id="content">
    <div class="container">
        <div class="space-bottom-1 pt-100px pb-100px">
            <div class="pb-lg-4">
                @if(!empty($shipping_policy))
           
               <?php
                        echo  $shipping_policy;
                  ?>
               @endif
            </div>
        </div>
    </div>
</main>

@endsection