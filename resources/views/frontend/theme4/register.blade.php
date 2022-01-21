@extends('frontend.theme4.layouts.default')   
@section('content')
<!-- BREADCRUMB AREA START -->
<div class="ltn__breadcrumb-area mb-80 ltn__breadcrumb-area-3 ltn__breadcrumb-color-white bg-overlay-theme-black-90 bg-image plr--9---" data-bg="img/bg/9.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="ltn__breadcrumb-inner ltn__breadcrumb-inner-2 justify-content-between">
                    <div class="section-title-area ltn__section-title-2">
                        <h1 class="section-title white-color">Register</h1>
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
                    <form method="post" encytype ='multipart/form-data' action="{{ route('registeruser',$shopid) }}" class="ltn__form-box contact-form-box">
                        @csrf
                        <input type="text" name="first_name" placeholder="First Name" required>
                        <span class="error help-inline">
                          {{ $errors->first('first_name') }}
                        </span>

                        <input type="text" name="last_name" placeholder="Last Name" required>
                        <span class="error help-inline">
                          {{ $errors->first('last_name') }}
                         </span>
                        <input type="email" name="email" placeholder="Email*" required>
                        <span class="error help-inline">
                          {{ $errors->first('email') }}
                        </span>
                        <input type="password" name="password" placeholder="Password*" required>
                         <span class="error help-inline">
                          {{ $errors->first('password') }}
                        </span>
                        <input type="password" name="confirmpassword" placeholder="Confirm Password*" required>
                        <label class="checkbox-inline">
                            <input type="checkbox" value="">
                            By clicking "create account", I consent to the <a href="{{route('frontend.privacypolicy',$shopid)}}">privacy policy</a>.
                        </label>
                        <div class="btn-wrapper">
                            <button class="theme-btn-1 btn reverse-color btn-block" type="submit">CREATE ACCOUNT</button>
                        </div>
                    </form>
                    <div class="by-agree text-center">
                        <div class="already-account-btn">
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