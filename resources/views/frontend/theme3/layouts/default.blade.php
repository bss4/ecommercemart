<!DOCTYPE html>
<html lang="en">
<head>

    <title>{{ sellerdetails($shopid)->stores->name }}</title>
     <?php 
     cartsession($shopid);
     wishlistsession($shopid);
    ?>  
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="shortcut icon" href="<?php echo WEBSITE_URL;?>frontassets/theme3/assets/img/favicon.png">

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo WEBSITE_URL;?>frontassets/theme3/assets/vendor/font-awesome/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="<?php echo WEBSITE_URL;?>frontassets/theme3/assets/vendor/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="<?php echo WEBSITE_URL;?>frontassets/theme3/assets/vendor/animate.css/animate.css">
    <link rel="stylesheet" href="<?php echo WEBSITE_URL;?>frontassets/theme3/assets/vendor/bootstrap-select/dist/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="<?php echo WEBSITE_URL;?>frontassets/theme3/assets/vendor/slick-carousel/slick/slick.css" />
    <link rel="stylesheet" href="<?php echo WEBSITE_URL;?>frontassets/theme3/assets/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css">
    <link rel="stylesheet" href="<?php echo WEBSITE_URL;?>frontassets/theme3/assets/css/style.css">
    <link rel="stylesheet" href="<?php echo WEBSITE_URL;?>frontassets/theme3/assets/css/theme.css">


<script src="<?php echo WEBSITE_URL;?>frontassets/theme2/js/plugins.js"></script>
     <style type="text/css">
        #myList > div{ display:none;
        }
        #loadMore {
            cursor:pointer;
        }
        #loadMore:hover {
            color:black;
        }
        .loadall {
            display: grid;
        }
        .loadall .products-footer {
            display: flex;
            margin: 0 auto;
        }
        .loadall .products-footer a {
            color: #222;
            border-radius: 40px;
            font-size: 14px;
            font-weight: 600;
            padding: 11px 45px;
            border: 2px solid #222;
            margin-bottom: 10px;
        }
        .loadall .products-footer a:hover {
            background-color: #80b500;
            color: #fff !IMPORTANT;
            border-color: #80b500;
        }
        input.razorpay-payment-button {
            display: none;
        }
    </style>
</head>
<body>
<input type="hidden" name="app_id" id="app_id" value="{{$shopid}}">
<input type="hidden" value="{{ url()->current()}}" id="currentpageurl">
<input type="hidden" value="{{ csrf_token()}}" id="csrf_token_post">
<input type="hidden" value="{{ PRODUCT_URL }}" id="image_path_url">
<input type="hidden" value="{{ url('/') }}" id="base_url">

<header id="site-header" class="site-header__v1">
        <div class="topbar border-bottom d-none d-md-block">
            <div class="container-fluid px-2 px-md-5 px-xl-8d75">
                <div class="topbar__nav d-md-flex justify-content-between align-items-center">
                    <ul class="topbar__nav--left nav ml-md-n3">
                        <li class="nav-item"><a href="tel:+1246-345-0695" class="nav-link link-black-100"><i class="glph-icon flaticon-phone mr-2"></i>+91 {{ sellerdetails($shopid)->phone }}</a></li>
                    </ul>
                    <ul class="topbar__nav--right nav mr-md-n3">
                         @if(!empty(Auth::user()->id))
                        <li class="nav-item"><a href="{{route('frontend.wishlist', $shopid)}}" class="nav-link link-black-100"><i class="glph-icon flaticon-heart"><span class="op__0 ts_op pa tcount bgb br__50 cw tc wishlist_count">{{  count((array) session('wishlist')) }}</span></i></a></li> 
                      
                         @else
                        <li class="nav-item">
                            <a id="sidebarNavToggler" href="javascript:;" role="button" class="nav-link link-black-100" aria-controls="sidebarContent" aria-haspopup="true" aria-expanded="false" data-unfold-event="click" data-unfold-hide-on-scroll="false" data-unfold-target="#sidebarContent" data-unfold-type="css-animation" data-unfold-overlay='{"className": "u-sidebar-bg-overlay", "background": "rgba(0, 0, 0, .7)", "animationSpeed": 500}' data-unfold-animation-in="fadeInRight" data-unfold-animation-out="fadeOutRight" data-unfold-duration="500">
                                <i class="glph-icon flaticon-user"></i>
                            </a>

                        </li>
                        @endif
                        @if(Route::currentRouteName()!='frontend.checkout')
                        <li class="nav-item icon_cart">
                            <a id="sidebarNavToggler1" href="javascript:;" role="button" class="nav-link link-black-100 position-relative" aria-controls="sidebarContent1" aria-haspopup="true" aria-expanded="false" data-unfold-event="click" data-unfold-hide-on-scroll="false" data-unfold-target="#sidebarContent1" data-unfold-type="css-animation" data-unfold-overlay='{
                            "className": "u-sidebar-bg-overlay",
                            "background": "rgba(0, 0, 0, .7)",
                            "animationSpeed": 500
                        }' data-unfold-animation-in="fadeInRight" data-unfold-animation-out="fadeOutRight" data-unfold-duration="500">
                        <span class="position-absolute bg-dark width-16 height-16 rounded-circle d-flex align-items-center justify-content-center text-white font-size-n9 right-0 cart_count">{{  count((array) session('cart')) }}</span>
                        <i class="glph-icon flaticon-icon-126515"></i>
                      </a>
                    </li>
                    @endif
            </ul>
        </div>
    </div>
</div>
<div class="masthead border-bottom position-relative" style="margin-bottom: -1px;">
    <div class="container-fluid px-3 px-md-5 px-xl-8d75 py-2 py-md-0">
        <div class="d-flex align-items-center position-relative flex-wrap">
            <div class="offcanvas-toggler mr-4 mr-lg-8">
                <a id="sidebarNavToggler2" href="javascript:;" role="button" class="cat-menu" aria-controls="sidebarContent2" aria-haspopup="true" aria-expanded="false" data-unfold-event="click" data-unfold-hide-on-scroll="false" data-unfold-target="#sidebarContent2" data-unfold-type="css-animation" data-unfold-overlay='{
                "className": "u-sidebar-bg-overlay",
                "background": "rgba(0, 0, 0, .7)",
                "animationSpeed": 100
            }' data-unfold-animation-in="fadeInLeft" data-unfold-animation-out="fadeOutLeft" data-unfold-duration="100">
            <svg width="20px" height="18px">
                <path fill-rule="evenodd" fill="rgb(25, 17, 11)" d="M-0.000,-0.000 L20.000,-0.000 L20.000,2.000 L-0.000,2.000 L-0.000,-0.000 Z" />
                <path fill-rule="evenodd" fill="rgb(25, 17, 11)" d="M-0.000,8.000 L15.000,8.000 L15.000,10.000 L-0.000,10.000 L-0.000,8.000 Z" />
                <path fill-rule="evenodd" fill="rgb(25, 17, 11)" d="M-0.000,16.000 L20.000,16.000 L20.000,18.000 L-0.000,18.000 L-0.000,16.000 Z" />
            </svg>
        </a>
    </div>
    <div class="site-branding pr-md-4">
        <a href="{{route('frontend.index',$shopid)}}" class="d-block mb-1"><img src="{{ isset(sellerdetails($shopid)->stores->logo)?STORE_LOGO_URL.sellerdetails($shopid)->stores->logo:''}}" class="header-logo"></a>
    </div>
    <div class="site-navigation mr-auto d-none d-xl-block">
        <ul class="nav">
            <li class="nav-item dropdown">
                <a id="homeDropdownInvoker" href="{{route('frontend.index',$shopid)}}" class="nav-link link-black-100 mx-4 px-0 py-5 font-weight-medium active border-bottom border-primary border-width-2">
                    Home
                </a>
            </li>
            <li class="nav-item dropdown">
                <a id="blogDropdownInvoker" href="#" class="dropdown-toggle nav-link link-black-100 mx-4 px-0 py-5 font-weight-medium d-flex align-items-center" aria-haspopup="true" aria-expanded="false" data-unfold-event="hover" data-unfold-target="#blogDropdownMenu" data-unfold-type="css-animation" data-unfold-duration="200" data-unfold-delay="50" data-unfold-hide-on-scroll="true" data-unfold-animation-in="slideInUp" data-unfold-animation-out="fadeOut">
                    Catalogue
                </a>
                <ul id="blogDropdownMenu" class="dropdown-unfold dropdown-menu font-size-2 rounded-0 border-gray-900" aria-labelledby="blogDropdownInvoker">
                    @if(!empty(menu($shopid)))
                    @foreach(menu($shopid) as $cat_val)

                        <li data-id="{{ $cat_val->id }}"><a href="{{ url('/').'/'.$shopid. '/catalogs/' . $cat_val->id }}" class="dropdown-item link-black-100">{{ $cat_val->name }}</a></li>

                    @endforeach
                    @endif
                   
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a id="blogDropdownvokerinfo" href="#" class="dropdown-toggle nav-link link-black-100 mx-4 px-0 py-5 font-weight-medium d-flex align-items-center" aria-haspopup="true" aria-expanded="false" data-unfold-event="hover" data-unfold-target="#blogDropdowninfo" data-unfold-type="css-animation" data-unfold-duration="200" data-unfold-delay="50" data-unfold-hide-on-scroll="true" data-unfold-animation-in="slideInUp" data-unfold-animation-out="fadeOut">
                    Info
                </a>
                <ul id="blogDropdowninfo" class="dropdown-unfold dropdown-menu font-size-2 rounded-0 border-gray-900" aria-labelledby="blogDropdownvokerinfo">

                    <li><a href="{{route('frontend.returnrefund',$shopid)}}" class="dropdown-item link-black-100">Return & Refund Policy</a></li>
                    <li><a href="{{route('frontend.privacypolicy',$shopid)}}" class="dropdown-item link-black-100">Privacy Policy</a></li>
                    <li><a href="{{route('frontend.paymentpolicy',$shopid)}}" class="dropdown-item link-black-100">Payment Policy</a></li>
                    <li><a href="{{route('frontend.shippingpolicy',$shopid)}}" class="dropdown-item link-black-100">Shipping Policy</a></li>
                    <li><a href="{{route('frontend.termsconditions',$shopid)}}" class="dropdown-item link-black-100">Terms & Condition</a></li>

                </ul>
            </li>

            <li class="nav-item dropdown">
                <a  id="blogDropdownvokeracc" href="#" class="dropdown-toggle nav-link link-black-100 mx-4 px-0 py-5 font-weight-medium d-flex align-items-center" aria-haspopup="true" aria-expanded="false" data-unfold-event="hover" data-unfold-target="#blogDropdownacc" data-unfold-type="css-animation" data-unfold-duration="200" data-unfold-delay="50" data-unfold-hide-on-scroll="true" data-unfold-animation-in="slideInUp" data-unfold-animation-out="fadeOut">
                    Account
                </a>
                <ul id="blogDropdownacc" class="dropdown-unfold dropdown-menu font-size-2 rounded-0 border-gray-900" aria-labelledby="blogDropdownvokeracc">

                    <li><a href="{{ route('frontend.shoppingcart',$shopid) }}" class="dropdown-item link-black-100">Cart</a></li>
                    @if(!empty(Auth::user()->id))
                     <li><a href="{{route('frontend.wishlist',$shopid)}}" class="dropdown-item link-black-100">Wishlist</a></li>
                     <li><a href="{{ route('frontend.myaccount',$shopid) }}" class="dropdown-item link-black-100">My Account</a></li>
                     <li><a href="{{ route('frontlogout',$shopid) }}" class="dropdown-item link-black-100">Logout</a></li>
                     
                    @endif

                </ul>
            </li>
           
            <li class="nav-item"><a href="{{route('frontend.contact',$shopid)}}" class="nav-link link-black-100 mx-4 px-0 py-5 font-weight-medium border-primary">Contact Us</a></li>     
            
        </ul>
    </div>
    <ul class="d-md-none nav mr-md-n3 ml-auto">
        @if(!empty(Auth::user()->id))
        <li class="nav-item"><a href="{{route('frontend.wishlist', $shopid)}}" class="nav-link link-black-100 "><i class="glph-icon flaticon-heart"><span class="op__0 ts_op pa tcount bgb br__50 cw tc wishlist_count">{{  count((array) session('wishlist')) }}</span></i></a></li>
        @if(Route::currentRouteName()!='frontend.checkout')
        <li class="nav-item"><a href="{{route('frontend.shoppingcart', $shopid)}}" class="nav-link link-black-100 "><i class="fa fa-shopping-cart"><span class="op__0 ts_op pa tcount bgb br__50 cw tc cart_count">{{  count((array) session('cart')) }}</span></i></a></li>
        @endif
         @else
        <li class="nav-item">
            <a id="sidebarNavToggler" href="javascript:;" role="button" class="nav-link link-black-100" aria-controls="sidebarContent" aria-haspopup="true" aria-expanded="false" data-unfold-event="click" data-unfold-hide-on-scroll="false" data-unfold-target="#sidebarContent" data-unfold-type="css-animation" data-unfold-overlay='{"className": "u-sidebar-bg-overlay", "background": "rgba(0, 0, 0, .7)", "animationSpeed": 500}' data-unfold-animation-in="fadeInRight" data-unfold-animation-out="fadeOutRight" data-unfold-duration="500">
                <i class="glph-icon flaticon-user"></i>
            </a>

        </li>
        @endif
</ul>

</div>
</div>
</div>
</header>

<aside id="sidebarContent9" class="u-sidebar u-sidebar__lg" aria-labelledby="sidebarNavToggler9">
    <div class="u-sidebar__scroller">
        <div class="u-sidebar__container">
            <div class="u-header-sidebar__footer-offset">

                <div class="d-flex align-items-center position-absolute top-0 right-0 z-index-2 mt-5 mr-md-6 mr-4">
                    <button type="button" class="close ml-auto" aria-controls="sidebarContent9" aria-haspopup="true" aria-expanded="false" data-unfold-event="click" data-unfold-hide-on-scroll="false" data-unfold-target="#sidebarContent9" data-unfold-type="css-animation" data-unfold-animation-in="fadeInRight" data-unfold-animation-out="fadeOutRight" data-unfold-duration="500">
                        <span aria-hidden="true">Close <i class="fas fa-times ml-2"></i></span>
                    </button>
                </div>


                <div class="js-scrollbar u-sidebar__body">
                    <div class="u-sidebar__content u-header-sidebar__content">
                        <form class="" action="{{ route('frontlogin',$shopid) }}" method="post" encytype ='multipart/form-data'>

                            <div id="login1" data-target-group="idForm1">

                                <header class="border-bottom px-4 px-md-6 py-4">
                                    <h2 class="font-size-3 mb-0 d-flex align-items-center"><i class="flaticon-user mr-3 font-size-5"></i>Account</h2>
                                </header>
                                @csrf
								@if (session('message'))
								<div class="alert {{session('class')}}">
								    {{ session('message') }}
								</div>
								@endif
                                <div class="p-4 p-md-6">

                                    <div class="form-group mb-4">
                                        <div class="js-form-message js-focus-state">
                                            <label id="signinEmailLabel9" class="form-label" for="signinEmail9">Username or email *</label>
                                            <input type="email" class="form-control rounded-0 height-4 px-4" name="email" id="signinEmail9" placeholder="creativelayers088@gmail.com" aria-label="creativelayers088@gmail.com" aria-describedby="signinEmailLabel9" required>
                                        </div>
                                    </div>


                                    <div class="form-group mb-4">
                                        <div class="js-form-message js-focus-state">
                                            <label id="signinPasswordLabel9" class="form-label" for="signinPassword9">Password *</label>
                                            <input type="password" class="form-control rounded-0 height-4 px-4" name="password" id="signinPassword9" placeholder="" aria-label="" aria-describedby="signinPasswordLabel9" required>
                                        </div>
                                    </div>

                                    <div class="d-flex justify-content-between mb-5 align-items-center">

                                        <div class="js-form-message">
                                            <div class="custom-control custom-checkbox d-flex align-items-center text-muted">
                                                <input type="checkbox" class="custom-control-input" id="termsCheckbox1" name="termsCheckbox1" required>
                                                <label class="custom-control-label" for="termsCheckbox1">
                                                    <span class="font-size-2 text-secondary-gray-700">
                                                        Remember me
                                                    </span>
                                                </label>
                                            </div>
                                        </div>

                                        <a class="js-animation-link text-dark font-size-2 t-d-u link-muted font-weight-medium" href="javascript:;" data-target="#forgotPassword1" data-link-group="idForm1" data-animation-in="fadeIn">Forgot Password?</a>
                                        <p class="mb__10 mt__20">Google Login?
                                        <a href="{{ url('/login/google') }}" >Login with Gmail</a>
                                        </p>
                                        <p class="mb__10 mt__20">Facebook Login?
                                        <a href="{{ url('/login/facebook') }}" >Login with Facebook</a>
                                        </p>
                                    </div>
                                    <div class="mb-4d75">
                                        <button type="submit" class="btn btn-block py-3 rounded-0 btn-dark">Sign In</button>
                                    </div>
                                    <div class="mb-2">
                                        <a href="javascript:;" class="js-animation-link btn btn-block py-3 rounded-0 btn-outline-dark font-weight-medium" data-target="#signup1" data-link-group="idForm1" data-animation-in="fadeIn">Create Account</a>
                                    </div>
                                </div>
                            </div>

                            <div id="signup1" style="display: none; opacity: 0;" data-target-group="idForm1">

                                <header class="border-bottom px-4 px-md-6 py-4">
                                    <h2 class="font-size-3 mb-0 d-flex align-items-center"><i class="flaticon-resume mr-3 font-size-5"></i>Create Account</h2>
                                </header>

                                <div class="p-4 p-md-6">

                                    <div class="form-group mb-4">
                                        <div class="js-form-message js-focus-state">
                                            <label id="signinEmailLabel11" class="form-label" for="signinEmail11">Email *</label>
                                            <input type="email" class="form-control rounded-0 height-4 px-4" name="email" id="signinEmail11" placeholder="creativelayers088@gmail.com" aria-label="creativelayers088@gmail.com" aria-describedby="signinEmailLabel11" required>
                                        </div>
                                    </div>


                                    <div class="form-group mb-4">
                                        <div class="js-form-message js-focus-state">
                                            <label id="signinPasswordLabel11" class="form-label" for="signinPassword11">Password *</label>
                                            <input type="password" class="form-control rounded-0 height-4 px-4" name="password" id="signinPassword11" placeholder="" aria-label="" aria-describedby="signinPasswordLabel11" required>
                                        </div>
                                    </div>


                                    <div class="form-group mb-4">
                                        <div class="js-form-message js-focus-state">
                                            <label id="signupConfirmPasswordLabel9" class="form-label" for="signupConfirmPassword9">Confirm Password *</label>
                                            <input type="password" class="form-control rounded-0 height-4 px-4" name="confirmPassword" id="signupConfirmPassword9" placeholder="" aria-label="" aria-describedby="signupConfirmPasswordLabel9" required>
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <button type="submit" class="btn btn-block py-3 rounded-0 btn-dark">Create Account</button>
                                    </div>
                                    <div class="text-center mb-4">
                                        <span class="small text-muted">Already have an account?</span>
                                        <a class="js-animation-link small" href="javascript:;" data-target="#login1" data-link-group="idForm1" data-animation-in="fadeIn">Login
                                        </a>
                                    </div>
                                </div>
                            </div>


                            <div id="forgotPassword1" style="display: none; opacity: 0;" data-target-group="idForm1">

                                <header class="border-bottom px-4 px-md-6 py-4">
                                    <h2 class="font-size-3 mb-0 d-flex align-items-center"><i class="flaticon-question mr-3 font-size-5"></i>Forgot Password?</h2>
                                </header>

                                <div class="p-4 p-md-6">

                                    <div class="form-group mb-4">
                                        <div class="js-form-message js-focus-state">
                                            <label id="signinEmailLabel33" class="form-label" for="signinEmail33">Email *</label>
                                            <input type="email" class="form-control rounded-0 height-4 px-4" name="email" id="signinEmail33" placeholder="creativelayers088@gmail.com" aria-label="creativelayers088@gmail.com" aria-describedby="signinEmailLabel33" required>
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <button type="submit" class="btn btn-block py-3 rounded-0 btn-dark">Recover Password</button>
                                    </div>
                                    <div class="text-center mb-4">
                                        <span class="small text-muted">Remember your password?</span>
                                        <a class="js-animation-link small" href="javascript:;" data-target="#login1" data-link-group="idForm1" data-animation-in="fadeIn">Login
                                        </a>
                                    </div>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</aside>


<aside id="sidebarContent" class="u-sidebar u-sidebar__lg" aria-labelledby="sidebarNavToggler">
    <div class="u-sidebar__scroller">
        <div class="u-sidebar__container">
            <div class="u-header-sidebar__footer-offset">

                <div class="d-flex align-items-center position-absolute top-0 right-0 z-index-2 mt-5 mr-md-6 mr-4">
                    <button type="button" class="close ml-auto" aria-controls="sidebarContent" aria-haspopup="true" aria-expanded="false" data-unfold-event="click" data-unfold-hide-on-scroll="false" data-unfold-target="#sidebarContent" data-unfold-type="css-animation" data-unfold-animation-in="fadeInRight" data-unfold-animation-out="fadeOutRight" data-unfold-duration="500">
                        <span aria-hidden="true">Close <i class="fas fa-times ml-2"></i></span>
                    </button>
                </div>


                <div class="js-scrollbar u-sidebar__body">
                    <div class="u-sidebar__content u-header-sidebar__content">
                            <div id="login" data-target-group="idForm">

                                <header class="border-bottom px-4 px-md-6 py-4">
                                    <h2 class="font-size-3 mb-0 d-flex align-items-center"><i class="flaticon-user mr-3 font-size-5"></i>Account</h2>
                                </header>
                               
								
                                <form class="" action="{{ route('frontlogin',$shopid) }}" method="post" encytype ='multipart/form-data'>
                                     @csrf
                                     @if (session('message'))
                                <div class="alert {{session('class')}}">
                                    {{ session('message') }}
                                </div>
                                @endif
                                <div class="p-4 p-md-6">

                                    <div class="form-group mb-4">
                                        <div class="js-form-message js-focus-state">
                                            <label id="signinEmailLabel" class="form-label" for="signinEmail">Username or email *</label>
                                            <input type="email" class="form-control rounded-0 height-4 px-4" name="email" id="signinEmail" placeholder="creativelayers088@gmail.com" aria-label="creativelayers088@gmail.com" aria-describedby="signinEmailLabel" required>
                                        </div>
                                    </div>


                                    <div class="form-group mb-4">
                                        <div class="js-form-message js-focus-state">
                                            <label id="signinPasswordLabel" class="form-label" for="signinPassword">Password *</label>
                                            <input type="password" class="form-control rounded-0 height-4 px-4" name="password" id="signinPassword" placeholder="" aria-label="" aria-describedby="signinPasswordLabel" required>
                                        </div>
                                    </div>

                                    <div class="d-flex justify-content-between mb-5 align-items-center">

                                        <a class="js-animation-link text-dark font-size-2 t-d-u link-muted font-weight-medium" href="javascript:void(0)" data-target="#forgotPassword" data-link-group="idForm" data-animation-in="fadeIn">Forgot Password?</a>

                                        <a href="{{ url('/login/google') }}" ><small>Login with Gmail</small></a>
                                        <a href="{{ url('/login/facebook') }}" ><small>Login with Facebook</small></a>
                                        
                                    </div>
                                    <div class="mb-4d75">
                                        <button type="submit" class="btn btn-block py-3 rounded-0 btn-dark">Sign In</button>
                                    </div>
                                    <div class="mb-2">
                                        <a href="javascript:;" class="js-animation-link btn btn-block py-3 rounded-0 btn-outline-dark font-weight-medium" data-target="#signup" data-link-group="idForm" data-animation-in="fadeIn">Create Account</a>
                                    </div>
                                </div>
                                </form>
                            </div>

                            <div id="signup" style="display: none; opacity: 0;" data-target-group="idForm">

                                <header class="border-bottom px-4 px-md-6 py-4">
                                    <h2 class="font-size-3 mb-0 d-flex align-items-center"><i class="flaticon-resume mr-3 font-size-5"></i>Create Account</h2>
                                </header>

                                <div class="p-4 p-md-6">
                                	<form method="post" encytype ='multipart/form-data' action="{{ route('registeruser',$shopid) }}">
                                	@csrf
                                    <div class="form-group mb-4">
                                        <div class="js-form-message js-focus-state">
                                            <label class="form-label" for="signinEmail1">First Name</label>
                                            <input type="text" class="form-control rounded-0 height-4 px-4" name="first_name" placeholder="First Name" required>
                                             <span class="error help-inline">
					                          {{ $errors->first('first_name') }}
					                      </span>
                                        </div>
                                    </div>

                                    <div class="form-group mb-4">
                                        <div class="js-form-message js-focus-state">
                                            <label  class="form-label" for="signinEmail1">Last Name</label>
                                            <input type="text" class="form-control rounded-0 height-4 px-4" name="last_name" placeholder="Last Name" required>
                                            <span class="error help-inline">
					                          {{ $errors->first('last_name') }}
					                      </span>
                                        </div>
                                    </div>

                                    <div class="form-group mb-4">
                                        <div class="js-form-message js-focus-state">
                                            <label id="signinEmailLabel1" class="form-label" for="signinEmail1">Email *</label>
                                            <input type="email" class="form-control rounded-0 height-4 px-4" name="email" id="signinEmail1" placeholder="Email" required>
                                            {{ $errors->first('email') }}
                                        </div>
                                    </div>


                                    <div class="form-group mb-4">
                                        <div class="js-form-message js-focus-state">
                                            <label id="signinPasswordLabel1" class="form-label" for="signinPassword1">Password *</label>
                                            <input type="password" class="form-control rounded-0 height-4 px-4" name="password" id="signinPassword1" placeholder="password" aria-label="" aria-describedby="signinPasswordLabel1" required>
                                            <span class="error help-inline">
					                          {{ $errors->first('password') }}
					                        </span>
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <button type="submit" class="btn btn-block py-3 rounded-0 btn-dark">Create Account</button>
                                    </div>
                                	</form>
                                    <div class="text-center mb-4">
                                        <span class="small text-muted">Already have an account?</span>
                                        <a class="js-animation-link small" href="javascript:;" data-target="#login" data-link-group="idForm" data-animation-in="fadeIn">Login
                                        </a>
                                    </div>
                                </div>
                            </div>


                            <div id="forgotPassword" data-target-group="idForm">

                                <header class="border-bottom px-4 px-md-6 py-4">
                                    <h2 class="font-size-3 mb-0 d-flex align-items-center"><i class="flaticon-question mr-3 font-size-5"></i>Forgot Password?</h2>
                                </header>

                                <div class="p-4 p-md-6">
                                    <form id="RecoverForm" method="POST" encytype ='multipart/form-data'>
                                        @csrf
                                         @if (session('message'))
                                            <div class="alert {{session('class')}}">
                                                {{ session('message') }}
                                            </div>
                                        @endif
                                    <div class="form-group mb-4">
                                        <div class="js-form-message js-focus-state">
                                            <label id="signinEmailLabel3" class="form-label" for="signinEmail3">Email *</label>
                                            <input type="email"  id="RecoverEmail" class="form-control rounded-0 height-4 px-4" name="email" id="signinEmail3" placeholder="" aria-label="" aria-describedby="signinEmailLabel3" required>
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <button type="submit" class="btn btn-block py-3 rounded-0 btn-dark _forgot_password">Recover Password</button>
                                    </div>
                                </form>

                                    <div class="text-center mb-4">
                                        <span class="small text-muted">Remember your password?</span>
                                        <a class="js-animation-link small" href="javascript:;" data-target="#login" data-link-group="idForm" data-animation-in="fadeIn">Login
                                        </a>
                                    </div>
                                </div>
                            </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
</aside>


<aside id="sidebarContent1" class="u-sidebar u-sidebar__xl" aria-labelledby="sidebarNavToggler1">
    <div class="u-sidebar__scroller js-scrollbar">
        <div class="u-sidebar__container">
            <div class="u-header-sidebar__footer-offset">

                <div class="d-flex align-items-center position-absolute top-0 right-0 z-index-2 mt-5 mr-md-6 mr-4">
                    <button type="button" class="close ml-auto" aria-controls="sidebarContent1" aria-haspopup="true" aria-expanded="false" data-unfold-event="click" data-unfold-hide-on-scroll="false" data-unfold-target="#sidebarContent1" data-unfold-type="css-animation" data-unfold-animation-in="fadeInRight" data-unfold-animation-out="fadeOutRight" data-unfold-duration="500">
                        <span aria-hidden="true">Close <i class="fas fa-times ml-2"></i></span>
                    </button>
                </div>


                <div class="u-sidebar__body">
                    <div class="u-sidebar__content u-header-sidebar__content">

                        <header class="border-bottom px-4 px-md-6 py-4">
                            <h2 class="font-size-3 mb-0 d-flex align-items-center"></h2>
                        </header>
                        <div id="cart_add_item">
                        
                        </div>
                        <div class="px-4 py-5 px-md-6 d-flex justify-content-between align-items-center font-size-3">
                            <h4 class="mb-0 font-size-3">Subtotal:</h4>
                            @php $total = 0 @endphp
                            @if(session('cart'))
                            @foreach(session('cart') as $id => $details)

                                @php $total += $details['price'] * $details['quantity'] @endphp

                            @endforeach
                            @endif
                            <div class="font-weight-medium cart_tot_price">₹{{$total}}</div>
                        </div>
                        <div class="px-4 mb-8 px-md-6">
                            <a href="{{route('frontend.shoppingcart',$shopid)}}" class="btn btn-block rounded-0 btn-outline-dark mb-4">View Cart</a>
                            <a href="{{route('frontend.checkout',$shopid)}}" class="btn btn-block rounded-0 btn-dark">Checkout</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</aside>


<aside id="sidebarContent2" class="u-sidebar u-sidebar__md u-sidebar--left" aria-labelledby="sidebarNavToggler2">
    <div class="u-sidebar__scroller js-scrollbar">
        <div class="u-sidebar__container">
            <div class="u-header-sidebar__footer-offset">

                <div class="u-sidebar__body">
                    <div class="u-sidebar__content u-header-sidebar__content">

                        <header class="border-bottom px-4 px-md-5 py-4 d-flex align-items-center justify-content-between">
                            <h2 class="font-size-3 mb-0"><img src="{{ isset(sellerdetails($shopid)->stores->logo)?STORE_LOGO_URL.sellerdetails($shopid)->stores->logo:''}}" class="header-logo-hw"></h2>

                            <div class="d-flex align-items-center">
                                <button type="button" class="close ml-auto" aria-controls="sidebarContent2" aria-haspopup="true" aria-expanded="false" data-unfold-event="click" data-unfold-hide-on-scroll="false" data-unfold-target="#sidebarContent2" data-unfold-type="css-animation" data-unfold-animation-in="fadeInLeft" data-unfold-animation-out="fadeOutLeft" data-unfold-duration="500">
                                    <span aria-hidden="true"><i class="fas fa-times ml-2"></i></span>
                                </button>
                            </div>

                        </header>

                        <div class="border-bottom">
                            <div class="zeynep pt-4">
                                <ul>
                                    <li class="has-submenu">
                                        <a href="{{route('frontend.index',$shopid)}}" data-submenu="off-pages">Home</a>
                                    </li>
                                    <li class="has-submenu">
                                        <a href="#" data-submenu="art-photo">Catalogue</a>
                                        <div id="art-photo" class="submenu">
                                            <div class="submenu-header" data-submenu-close="art-photo">
                                                <a href="#">Catalogue</a>
                                            </div>
                                            <ul>
                                                @if(!empty(menu($shopid)))
                                                @foreach(menu($shopid) as $cat_val)

                                                    <li data-id="{{ $cat_val->id }}"><a href="{{ url('/').'/'.$shopid. '/catalogs/' . $cat_val->id }}" >{{ $cat_val->name }}</a></li>

                                                @endforeach
                                                @endif                                               
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="has-submenu">
                                        <a href="#" data-submenu="account">Account</a>
                                        <div id="account" class="submenu">
                                            <div class="submenu-header" data-submenu-close="account">
                                                <a href="#">Account</a>
                                            </div>
                                            <ul>
                                                <li><a href="{{ route('frontend.shoppingcart',$shopid) }}">Cart</a></li>
                                                @if(!empty(Auth::user()->id))
                                                 <li><a href="{{route('frontend.wishlist',$shopid)}}" >Wishlist</a></li>
                                                 <li><a href="{{ route('frontend.myaccount',$shopid) }}">My Account</a></li>
                                                 <li><a href="{{ route('frontlogout',$shopid) }}">Logout</a></li>
                                                @endif                                             
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="has-submenu">
                                        <a href="{{route('frontend.contact',$shopid)}}" data-submenu="off-pages">Contact</a>
                                    </li>
                                    
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</aside>


@if(Session::has('error'))
<div class="alert alert-danger alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    {{ Session::get('error') }}
</div>
@endif
@if(Session::has('success'))
<div class="alert alert-success alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    {{ Session::get('success') }}
</div>
@endif
@if(Session::has('flash_notice'))
<div class="alert alert-warning alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    {{ Session::get('flash_notice') }}
</div>
{{Session::forget('apartment_added')}}
@endif

@yield('content')




<!-- <div class="site-features border-top space-1d625 bg-dark-1">
<div class="container">
<ul class="list-unstyled my-0 list-features overflow-auto d-flex align-items-center justify-content-between">
<li class="list-feature flex-shrink-0 flex-shrink-lg-1">
<div class="media d-block d-lg-flex text-center text-lg-left pr-5 pr-xl-0">
<div class="feature__icon font-size-14 text-primary text-lh-xs mb-3 mb-lg-0">
<i class="glyph-icon flaticon-delivery"></i>
</div>
<div class="media-body ml-4">
<h4 class="feature__title font-size-3 text-white">Free Delivery</h4>
<p class="feature__subtitle m-0 text-white">Orders over $100</p>
</div>
</div>
</li>
<li class="separator border-xl-left h-fixed-80 opacity-sm" aria-hidden="true" role="presentation"></li>
<li class="list-feature flex-shrink-0 flex-shrink-lg-1">
<div class="media d-block d-lg-flex text-center text-lg-left pr-5 pr-xl-0">
<div class="feature__icon font-size-14 text-primary text-lh-xs mb-3 mb-lg-0">
<i class="glyph-icon flaticon-credit"></i>
</div>
<div class="media-body ml-4">
<h4 class="feature__title font-size-3 text-white">Secure Payment</h4>
<p class="feature__subtitle m-0 text-white">100% Secure Payment</p>
</div>
</div>
</li>
<li class="separator border-xl-left h-fixed-80 opacity-sm" aria-hidden="true" role="presentation"></li>
<li class="list-feature flex-shrink-0 flex-shrink-lg-1">
<div class="media d-block d-lg-flex text-center text-lg-left pr-5 pr-xl-0">
<div class="feature__icon font-size-14 text-primary text-lh-xs mb-3 mb-lg-0">
<i class="glyph-icon flaticon-warranty"></i>
</div>
<div class="media-body ml-4">
<h4 class="feature__title font-size-3 text-white">Money Back Guarantee</h4>
<p class="feature__subtitle m-0 text-white">Within 30 Days</p>
</div>
</div>
</li>
<li class="separator border-xl-left h-fixed-80 opacity-sm" aria-hidden="true" role="presentation"></li>
<li class="list-feature flex-shrink-0 flex-shrink-lg-1">
<div class="media d-block d-lg-flex text-center text-lg-left pr-5 pr-xl-0">
<div class="feature__icon font-size-14 text-primary text-lh-xs mb-3 mb-lg-0">
<i class="glyph-icon flaticon-help"></i>
</div>
<div class="media-body ml-4">
<h4 class="feature__title font-size-3 text-white">24/7 Support</h4>
<p class="feature__subtitle m-0 text-white">Within 1 Business Day</p>
</div>
</div>
</li>
</ul>
</div>
</div> -->


<footer class="site-footer_v4">
<div class="space-top-3 bg-dark-1 border-top border-gray-710">
<div class="pb-5 space-bottom-lg-3">
<div class="container">
<div class="row">
<div class="col-lg-4">
<div class="pb-6 pb-lg-0">
<h4 class="font-size-3 font-weight-medium mb-2 mb-xl-5 pb-xl-1 text-white">Contact Us</h4>
<p>
<a class="d-block" href="{{route('frontend.index',$shopid)}}">
<img src="{{ isset(sellerdetails($shopid)->stores->logo)?STORE_LOGO_URL.sellerdetails($shopid)->stores->logo:''}}" class="header-logo-hw">
</a>
</p>
<address class="font-size-2 mb-5">
 <span class="mb-2 font-weight-normal text-gray-450">
{{ ucfirst(sellerdetails($shopid)->address) }}
</span>
</address>
<div class="mb-4 h-white">
<a href="mailto:{{ sellerdetails($shopid)->email }}" class="font-size-2 d-block text-gray-450 mb-1">{{ sellerdetails($shopid)->email }}</a>
<a href="tel:+91 {{ sellerdetails($shopid)->phone }}" class="font-size-2 d-block text-gray-450">+91 {{ sellerdetails($shopid)->phone }}</a>
</div>

</div>
</div>

<div class="col-lg-2">
<div class="mb-6 mb-lg-0">
<h4 class="font-size-3 font-weight-medium mb-2 mb-xl-5 pb-xl-1 text-white">Catalogue</h4>
<ul class="list-unstyled mb-0">
   
    @if(!empty(menu($shopid)))
    @foreach(menu($shopid) as $cat_val)

        <li class="h-white pb-2" data-id="{{ $cat_val->id }}">
        <a class="font-size-2 text-gray-450 widgets-hover transition-3d-hover" href="{{ url('/').'/'.$shopid. '/catalogs/' . $cat_val->id }}">{{ $cat_val->name }}</a>
        </li>
    @endforeach
    @endif

</ul>
</div>
</div>
<div class="col-lg-2">
<div class="mb-6 mb-lg-0">
<h4 class="font-size-3 font-weight-medium mb-2 mb-xl-5 pb-xl-1 text-white">Info</h4>
<ul class="list-unstyled mb-0">
<li class="h-white py-2">
<a class="font-size-2 text-gray-450 widgets-hover transition-3d-hover" href="{{route('frontend.returnrefund',$shopid)}}">Return & Refund</a>
</li>
<li class="h-white py-2">
 <a class="font-size-2 text-gray-450 widgets-hover transition-3d-hover" href="{{route('frontend.privacypolicy',$shopid)}}">Privacy Policy</a>
</li>
<li class="h-white py-2">
<a class="font-size-2 text-gray-450 widgets-hover transition-3d-hover" href="{{route('frontend.paymentpolicy',$shopid)}}">Payment Policy</a>
</li>
<li class="h-white py-2">
<a class="font-size-2 text-gray-450 widgets-hover transition-3d-hover" href="{{route('frontend.shippingpolicy',$shopid)}}">Shipping Policy</a>
</li>

<li class="h-white py-2">
<a class="font-size-2 text-gray-450 widgets-hover transition-3d-hover" href="{{route('frontend.termsconditions',$shopid)}}">Terms & Conditions</a>
</li>

 </ul>
</div>
</div>
<div class="col-lg-4">

<div class="mb-6">
<div class="mb-5">
<h5 class="font-size-3 font-weight-medium text-white mb-2 mb-xl-5 pb-xl-1">Join Our Newsletter
</h5>
</div>
<form class="js-validate js-form-message border border-gray-710" novalidate="novalidate" id="contact_form" method="post" action="{{route('frontend.newsletter',$shopid)}}"
>
@csrf
<div class="input-group">
<input type="email" class="form-control placeholder-color-1 py-4d75 font-size-2 pl-4 rounded-0 bg-transparent border-0" name="email" id="subscribeSrEmail" placeholder="Enter email" aria-label="Your email" required="" data-msg="Please enter a valid email address.">

<button type="submit" class="btn bg-white rounded-0 px-4 text-dark-1 py-2 font-weight-medium m-1">Subscribe
</button>
</div>
{{ $errors->first('email') }}
</form>
</div>

<div>


</div>
</div>
</div>
</div>
</div>
<div class="space-1 border-top border-gray-710">
<div class="container">
<div class="text-center align-items-center">
    <p class="mb-3 mb-md-0 font-size-2 text-gray-450">Copyright © 2021 Make My Mart, All rights reserved.
</p>
</div>
</div>
</div>
</div>
</footer>

<script src="<?php echo WEBSITE_URL;?>frontassets/theme3/assets/vendor/jquery/dist/jquery.min.js"></script>
<script src="<?php echo WEBSITE_URL;?>frontassets/theme3/assets/vendor/jquery-migrate/dist/jquery-migrate.min.js"></script>
<script src="<?php echo WEBSITE_URL;?>frontassets/theme3/assets/vendor/popper.js/dist/umd/popper.min.js"></script>
<script src="<?php echo WEBSITE_URL;?>frontassets/theme3/assets/vendor/bootstrap/bootstrap.min.js"></script>
<link rel="stylesheet" href="<?php echo WEBSITE_URL;?>frontassets/theme1/assets/css/jquery-ui.css">

<script src="<?php echo WEBSITE_URL;?>frontassets/theme3/assets/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
<script src="<?php echo WEBSITE_URL;?>frontassets/theme3/assets/vendor/slick-carousel/slick/slick.min.js"></script>
<script src="<?php echo WEBSITE_URL;?>frontassets/theme3/assets/vendor/multilevel-sliding-mobile-menu/dist/jquery.zeynep.js"></script>
<script src="<?php echo WEBSITE_URL;?>frontassets/theme3/assets/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>

<script src="<?php echo WEBSITE_URL;?>frontassets/theme3/assets/js/hs.core.js"></script>
<script src="<?php echo WEBSITE_URL;?>frontassets/theme3/assets/js/components/hs.unfold.js"></script>
<script src="<?php echo WEBSITE_URL;?>frontassets/theme3/assets/js/components/hs.malihu-scrollbar.js"></script>
<script src="<?php echo WEBSITE_URL;?>frontassets/theme3/assets/js/components/hs.header.js"></script>
<script src="<?php echo WEBSITE_URL;?>frontassets/theme3/assets/js/components/hs.slick-carousel.js"></script>
<script src="<?php echo WEBSITE_URL;?>frontassets/theme3/assets/js/components/hs.selectpicker.js"></script>
<script src="<?php echo WEBSITE_URL;?>frontassets/theme3/assets/js/components/hs.show-animation.js"></script>
<script src="<?php echo WEBSITE_URL;?>frontassets/theme1/assets/js/jquery-ui.js"></script>
<link rel="stylesheet" href="<?php echo WEBSITE_URL;?>frontassets/sweetalertlibrary/sweetalert.min.css">
<script src="<?php echo WEBSITE_URL;?>frontassets/sweetalertlibrary/sweetalert.min.js"></script>
<script src="<?php echo WEBSITE_URL;?>frontassets/projectscript.js"></script>

<script>
$(document).on('ready', function () {
    // initialization of unfold component
    $.HSCore.components.HSUnfold.init($('[data-unfold-target]'));

    // initialization of slick carousel
    $.HSCore.components.HSSlickCarousel.init('.js-slick-carousel');

    // initialization of header
    $.HSCore.components.HSHeader.init($('#header'));

    // initialization of malihu scrollbar
    $.HSCore.components.HSMalihuScrollBar.init($('.js-scrollbar'));

    // initialization of show animations
    $.HSCore.components.HSShowAnimation.init('.js-animation-link');

    // init zeynepjs
    var zeynep = $('.zeynep').zeynep({
        onClosed: function () {
            // enable main wrapper element clicks on any its children element
            $("body main").attr("style", "");

            console.log('the side menu is closed.');
        },
        onOpened: function () {
            // disable main wrapper element clicks on any its children element
            $("body main").attr("style", "pointer-events: none;");

            console.log('the side menu is opened.');
        }
    });

    // handle zeynep overlay click
    $(".zeynep-overlay").click(function () {
        zeynep.close();
    });

    // open side menu if the button is clicked
    $(".cat-menu").click(function () {
        if ($("html").hasClass("zeynep-opened")) {
            zeynep.close();
        } else {
            zeynep.open();
        }
    });
});

var forgotUrl = "{{ route('forgotpassword',$shopid) }}";
$(document).ready(function () {

    $(document).on("click", "._forgot_password",  function(){
        let id = document.getElementById('RecoverForm');
        let formData = new FormData(id);
        $.ajax({
            url: forgotUrl,
            type: "POST",
            data: formData,
            dataType:'json',
            contentType: false,
            processData: false,
            success:function(response){
                if(response.status == "true")
                {
                    swal('Success', response.message, 'success');
                    $("#RecoverForm")[0].reset();
                }
                else
                {
                    swal('Error', response.message, 'error');
                }
            },
            error:function(error){
                swal('Error', 'Something went wrong', 'error');
            }
        })
    });

    var size_li = $("#myList > div").length;
      
    x=8;
    $('#myList > div:lt('+x+')').show();

    $('#loadMore').click(function () {
        
        x= (x+8 <= size_li) ? x+8 : size_li;
        $('#myList > div:lt('+x+')').show();
        $('#showLess').show();
        if(x == size_li){
            $('#loadMore').hide();
        }
    });
   
});
</script>
</body>
</html>
