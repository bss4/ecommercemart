@extends('frontend.theme5.layouts.default')   

@section('content')

      <!--hero banner-->

        <div class="kalles-section page_section_heading">

            <div class="page-head tc pr oh cat_bg_img page_head_">

                <div class="parallax-inner nt_parallax_false lazyload nt_bg_lz pa t__0 l__0 r__0 b__0" data-bgset="assets/images/shop/bg-heading.jpg"></div>

                <div class="container pr z_100">

                    <h1 class="mb__5 cw">Shipping Policy</h1>

                </div>

            </div>

        </div>

        <!--end hero banner-->



        <!--page content-->

        <div class="container mt__40 mb__40 cb">

            <div class="kalles-term-exp mb__30">

                @if(!empty($shipping_policy))
                 <?php echo $shipping_policy;?>
                 @endif

            </div>

        </div>

        <!--end page content-->



    @endsection