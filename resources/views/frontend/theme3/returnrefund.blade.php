@extends('frontend.theme3.layouts.default')   
@section('content')
<main id="content">
    <div class="container">
        <div class="space-bottom-1 space-bottom-lg-2 space-bottom-xl-3">
            <div class="pb-lg-4">
                <div class="py-4 py-lg-5 py-xl-8">
                    <h6 class="font-weight-medium font-size-7 font-size-xs-25 text-center">Return Policy</h6>
                </div>
                @if(!empty($return_refund_policy))
                    <?php
                      echo  $return_refund_policy;
                    ?>
                @endif
               
            </div>
        </div>
    </div>
</main>
@endsection