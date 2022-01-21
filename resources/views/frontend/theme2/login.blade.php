@extends('frontend.theme2.layouts.default')   
@section('content')
<!-- BREADCRUMB AREA START -->
<div class="ltn__breadcrumb-area mb-80 ltn__breadcrumb-area-3 ltn__breadcrumb-color-white bg-overlay-theme-black-90 bg-image plr--9---" data-bg="img/bg/9.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="ltn__breadcrumb-inner ltn__breadcrumb-inner-2 justify-content-between">
                    <div class="section-title-area ltn__section-title-2">
                        <h1 class="section-title white-color">Login</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- BREADCRUMB AREA END -->
<!-- LOGIN AREA START -->
<div class="ltn__login-area pb-65">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="account-login-inner">
                    <form action="{{ route('frontlogin',$shopid) }}" method="post" encyptype = "multipart/form-data"class="ltn__form-box contact-form-box">
                         @csrf
                         @if (session('message'))
                            <div class="alert {{session('class')}}">
                                {{ session('message') }}
                            </div>
                        @endif
                        <input type="text" name="email" placeholder="Email*" required>
                        <span class="error help-inline">
                          {{ $errors->first('email') }}
                        </span>
                        <input type="password" name="password" placeholder="Password*" required>
                         <span class="error help-inline">
                          {{ $errors->first('password') }}
                        </span>
                        <div class="btn-wrapper mt-0">
                            <button class="theme-btn-1 btn btn-block" type="submit">SIGN IN</button>
                        </div>
                        <div class="go-to-btn mt-20">
                            <a href="{{route('frontend.forgot',$shopid)}}"><small>FORGOTTEN YOUR PASSWORD?</small></a>
                        </div>
                        <div class="go-to-btn mt-20">
                            <a href="{{ url('/login/google') }}"><small>Login with Gmail</small></a>
                        </div>
                        <div class="go-to-btn mt-20">
                            <a href="{{ url('/login/facebook') }}"><small>Login with Facebook</small></a>
                        
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="account-create text-center pt-90">
                    <h4>DON'T HAVE AN ACCOUNT?</h4>
                    <p>Add items to your wishlistget personalised recommendations <br>
                        check out more quickly track your orders register</p>
                    <div class="btn-wrapper">
                        <a href="{{route('frontend.register',$shopid)}}" class="theme-btn-1 btn black-btn">CREATE ACCOUNT</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- LOGIN AREA END -->
@endsection