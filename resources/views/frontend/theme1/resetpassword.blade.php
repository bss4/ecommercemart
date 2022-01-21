@extends('frontend.theme1.layouts.default')   

@section('content')

       <!--hero banner-->

        <div class="kalles-section page_section_heading">

            <div class="page-head tc pr oh cat_bg_img page_head_">

                <div class="parallax-inner nt_parallax_false lazyload nt_bg_lz pa t__0 l__0 r__0 b__0" data-bgset="assets/images/shop/bg-heading.jpg"></div>

                <div class="container pr z_100">

                    <h1 class="mb__5 cw">Reset Password</h1>

                </div>

            </div>

        </div>

        <!--end hero banner-->



        <!--page content-->

       <!--page content-->

        <div class="kalles-section container mb__50 cb">

            <div class="row fl_center">
                <div class="col-3 col-sm-3"></div>
                <div class="contact-form col-6 col-md-6 order-1 order-md-0">

                    <form method="post" action="{{route('resetpassword', $shopid)}}" class="contact-form">

                        @csrf
                        <h3 class="mb__20 mt__40">Reset Password</h3>
                        <input type="hidden" name="_id" value="{{ $id }}">
                        <input type="hidden" name="reset_token" value="{{ $reset_token }}">
                        <p>

                            <label for="ct-name">Password (required)</label>

                            <input required="required" type="password" id="ct-name" name="password" value="">
                            {{ $errors->first('password') }}
                        </p>

                        <p>

                            <label for="ct-email">Confirm Password (required)</label>

                            <input required="required" type="password" id="ct-email" name="passconf" value="">
                            {{ $errors->first('passconf') }}
                        </p>

                        <input type="submit" class="button w__100" value="Submit">

                    </form>

                </div>
                <div class="col-3 col-sm-3"></div>

            </div>

        </div>

        <!--end page content-->

        <!--end page content-->



    @endsection