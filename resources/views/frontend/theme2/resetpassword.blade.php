@extends('frontend.theme2.layouts.default')   
@section('content')
<!-- BREADCRUMB AREA START -->
<div class="ltn__breadcrumb-area mb-80 ltn__breadcrumb-area-3 ltn__breadcrumb-color-white bg-overlay-theme-black-90 bg-image plr--9---" data-bg="img/bg/9.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="ltn__breadcrumb-inner ltn__breadcrumb-inner-2 justify-content-between">
                    <div class="section-title-area ltn__section-title-2">
                        <h1 class="section-title white-color">Reset Password</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- BREADCRUMB AREA END -->
<!-- LOGIN AREA START (Register) -->
<div class="ltn__login-area pb-80">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="account-login-inner">
                    <form method="post" action="{{route('resetpassword', $shopid)}}" encytype ='multipart/form-data' id="forgot_pass" class="ltn__form-box contact-form-box">
                        @csrf
                        <input type="hidden" name="_id" value="{{ $id }}">
                        <input type="hidden" name="reset_token" value="{{ $reset_token }}">

                        <input required="required" type="password" name="password" placeholder="Enter your password" value="">
                        <span class="error help-inline">
                          {{ $errors->first('password') }}
                        </span>

                        <input required="required" type="password" name="passconf" placeholder="Enter your confirm password" value="">
                        <span class="error help-inline">
                          {{ $errors->first('passconf') }}
                        </span>

                        <div class="btn-wrapper">
                            <button class="theme-btn-1 btn reverse-color btn-block" type="submit">Reset Password</button>
                        </div>
                    </form>
                    <div class="by-agree text-center">
                        <div class="go-to-btn mt-50">
                            <a href="{{route('frontend.login',$shopid)}}">ALREADY HAVE AN ACCOUNT ?</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- LOGIN AREA END -->
@endsection