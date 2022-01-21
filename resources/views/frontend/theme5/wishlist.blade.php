@extends('frontend.theme5.layouts.default')   

@section('content')

       <!--shop banner-->

        <div class="kalles-section page_section_heading">

            <div class="page-head tc pr oh page_head_wis_heading">

                <div class="parallax-inner nt_parallax_false lazyload nt_bg_lz pa t__0 l__0 r__0 b__0" data-bgset="<?php echo WEBSITE_URL;?>frontassets/assets/images/shop/shop-banner.jpg"></div>

                <div class="container pr z_100">

                    <p class="mg__0">View your wishlist products</p>

                </div>

            </div>

        </div>

        <!--end shop banner-->



        <div id="kalles-section-wishlist_page" class="container container_cat pop_default cat_default mt__40 mb__20">



            <!--product section-->

            <div class="row">

                <div class="col-lg-12 col-12">

                    <div class="kalles-section tp_se_cdt">

                        <!--products list-->

                        <div class="on_list_view_false prs_wis products nt_products_holder row fl_center row_pr_1 cdt_des_1 round_cd_false nt_cover ratio_nt position_8 space_30 nt_default" id="wishlistdata">

                            
                        </div>

                        <!--end products list-->

                    </div>

                </div>

            </div>

            <!--end product section-->



        </div>



@endsection