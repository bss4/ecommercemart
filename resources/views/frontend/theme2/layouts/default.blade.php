<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>{{ sellerdetails($shopid)->stores->name }}</title>
        <?php 
         cartsession($shopid);
         wishlistsession($shopid);
        ?> 
        <meta name="robots" content="noindex, follow" />
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Place favicon.png in the root directory -->
        <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon" />
        <!-- Font Icons css -->
        <link rel="stylesheet" href="<?php echo WEBSITE_URL;?>frontassets/theme2/css/font-icons.css">
        <!-- plugins css -->
        <link rel="stylesheet" href="<?php echo WEBSITE_URL;?>frontassets/theme2/css/plugins.css">
            <!-- Main Stylesheet -->
        <link rel="stylesheet" href="<?php echo WEBSITE_URL;?>frontassets/theme2/css/style.css">
        <!-- Responsive css -->
        <link rel="stylesheet" href="<?php echo WEBSITE_URL;?>frontassets/theme2/css/responsive.css">
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
        <!-- Add your site or application content here -->
    <!-- Body main wrapper start -->
    <div class="body-wrapper">
        <!-- HEADER AREA START (header-5) -->
        <header class="ltn__header-area ltn__header-5 ltn__header-transparent gradient-color-4---">
            <!-- ltn__header-middle-area start -->
            <div class="ltn__header-middle-area ltn__header-sticky ltn__sticky-bg-white plr--9---">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="site-logo-wrap">
                                <div class="site-logo">
                                    <a href="{{route('frontend.index',$shopid)}}"><img src="{{ isset(sellerdetails($shopid)->stores->logo)?STORE_LOGO_URL.sellerdetails($shopid)->stores->logo:''}}" class="header-logo"></a>
                                </div>
                            </div>
                        </div>
                        <div class="col header-menu-column menu-color-white---">
                            <div class="header-menu d-none d-xl-block">
                                <nav>
                                    <div class="ltn__main-menu">
                                        <ul>
                                            <li><a href="{{route('frontend.index',$shopid)}}">Home</a></li>
                                            <li class="menu-icon">
                                                <a href="#">Catalogs</a>
                                                <ul class="sub-menu ltn__sub-menu-col-2---">
                                                    @if(!empty(menu($shopid)))
                                                    @foreach(menu($shopid) as $cat_val)

                                                     <li><a href="{{ url('/').'/'.$shopid. '/catalogs/' . $cat_val->id }}">{{ $cat_val->name }}</a></li>

                                                    @endforeach
                                                    @endif
                                                  
                                                </ul>
                                            </li>
                                            <li class="menu-icon">
                                                <a href="#">Info</a>
                                                <ul class="sub-menu ltn__sub-menu-col-2---">
                                                    <li><a href="{{route('frontend.returnrefund',$shopid)}}">Return & Refund Policy</a></li>
                                                    <li><a href="{{route('frontend.privacypolicy',$shopid)}}">Privacy Policy</a></li>
                                                    <li><a href="{{route('frontend.paymentpolicy',$shopid)}}">Payment Policy</a></li>
                                                    <li><a href="{{route('frontend.shippingpolicy',$shopid)}}">Shipping Policy</a></li>
                                                    <li><a href="{{route('frontend.termsconditions',$shopid)}}">Terms & Condition</a></li>
                                                </ul>
                                            </li>  
                                            <li class="menu-icon">
                                                <a href="#">Account</a>
                                                <ul>
                                                     <li><a href="{{ route('frontend.shoppingcart',$shopid) }}">Cart</a></li>
                                                     
                                                     
                                                     @if(!empty(Auth::user()->id))
                                                     <li><a href="{{route('frontend.wishlist',$shopid)}}">Wishlist</a></li>
                                                     <li><a href="{{ route('frontend.myaccount',$shopid) }}">My Account</a></li>
                                                     <li><a href="{{ route('frontlogout',$shopid) }}" class="push_side">Logout</a></li>
                                                    @else
                                                   
                                                     <li><a href="{{route('frontend.login',$shopid)}}">Sign in</a></li>
                                                     <li><a href="{{route('frontend.register',$shopid)}}">Register</a></li>
                                                     @endif
                                                </ul>
                                            </li>                                    
                                            <li><a href="{{route('frontend.contact', $shopid)}}">Contact</a></li>  
                                        </ul>
                                    </div>
                                </nav>
                            </div>
                        </div>
                        <div class="ltn__header-options ltn__header-options-2">
                          
                            <!-- user-menu -->
                            <div class="ltn__drop-menu user-menu">
                                <ul>
                                    <li>
                                        <a href="#"><i class="icon-user"></i></a>
                                        <ul>
                                            @if(!empty(Auth::user()->id))
                                            <li><a href="{{route('frontend.myaccount',$shopid)}}">My Account</a></li>
                                            <li><a href="{{route('frontend.wishlist',$shopid)}}">Wishlist</a></li>
                                             <li><a href="{{ route('frontlogout',$shopid) }}" class="push_side">Logout</a></li>
                                            @else
                                           
                                             <li><a href="{{route('frontend.login',$shopid)}}">Sign in</a></li>
                                             <li><a href="{{route('frontend.register',$shopid)}}">Register</a></li>
                                             @endif
                                            
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <!-- mini-cart -->
                            @if(Route::currentRouteName()!='frontend.checkout')
                            <div class="mini-cart-icon icon_cart">
                                <a href="#ltn__utilize-cart-menu" class="ltn__utilize-toggle">
                                    <i class="icon-shopping-cart"></i>
                                    <sup class="cart_count">{{  count((array) session('cart')) }}</sup>
                                </a>
                            </div>
                            @endif
                            <!-- mini-cart -->
                            <!-- Mobile Menu Button -->
                            <div class="mobile-menu-toggle d-xl-none">
                                <a href="#ltn__utilize-mobile-menu" class="ltn__utilize-toggle">
                                    <svg viewBox="0 0 800 600">
                                        <path d="M300,220 C300,220 520,220 540,220 C740,220 640,540 520,420 C440,340 300,200 300,200" id="top"></path>
                                        <path d="M300,320 L540,320" id="middle"></path>
                                        <path d="M300,210 C300,210 520,210 540,210 C740,210 640,530 520,410 C440,330 300,190 300,190" id="bottom" transform="translate(480, 320) scale(1, -1) translate(-480, -318) "></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ltn__header-middle-area end -->
        </header>
        <!-- HEADER AREA END -->
        <!-- Utilize Cart Menu Start -->
        <div id="ltn__utilize-cart-menu" class="ltn__utilize ltn__utilize-cart-menu">
            <div class="ltn__utilize-menu-inner ltn__scrollbar">
                <div class="ltn__utilize-menu-head">
                    <span class="ltn__utilize-menu-title">Cart</span>
                    <button class="ltn__utilize-close">×</button>
                </div>
                <div class="mini-cart-product-area ltn__scrollbar" id="cart_add_item">
                    
                </div>
                <div class="mini-cart-footer">
                    <div class="mini-cart-sub-total">
                         @php $total = 0 @endphp

                        @foreach((array) session('cart') as $id => $details)

                            @php $total += $details['price'] * $details['quantity'] @endphp
                        @endforeach
                        <h5>Subtotal: <span class="cart_tot_price">₹ {{$total}}</span></h5>
                    </div>
                    <div class="btn-wrapper">
                        <a href="{{route('frontend.shoppingcart',$shopid)}}" class="theme-btn-1 btn btn-effect-1">View Cart</a>
                        <a href="{{route('frontend.checkout',$shopid)}}" class="theme-btn-2 btn btn-effect-2">Checkout</a>
                    </div>
                    
                </div>
            </div>
        </div>
        <!-- Utilize Cart Menu End -->
        <!-- Utilize Mobile Menu Start -->
        <div id="ltn__utilize-mobile-menu" class="ltn__utilize ltn__utilize-mobile-menu">
            <div class="ltn__utilize-menu-inner ltn__scrollbar">
                <div class="ltn__utilize-menu-head">
                    <div class="site-logo">
                        <a href="{{route('frontend.index',$shopid)}}"><img src="{{ isset(sellerdetails($shopid)->stores->logo)?STORE_LOGO_URL.sellerdetails($shopid)->stores->logo:''}}" class="header-logo-hw"></a>
                    </div>
                    <button class="ltn__utilize-close">×</button>
                </div>
                <div class="ltn__utilize-menu">
                    <ul>
                        <li><a href="#">Catalogs</a>
                            <ul class="sub-menu">
                                @if(!empty(menu($shopid)))
                                @foreach(menu($shopid) as $cat_val)

                                 <li><a href="{{ url('/').'/'.$shopid. '/catalogs/' . $cat_val->id }}">{{ $cat_val->name }}</a></li>

                                @endforeach
                                @endif
                            </ul>
                        </li>
                        <li><a href="#">Info</a>
                            <ul class="sub-menu">
                                <li><a href="{{route('frontend.returnrefund',$shopid)}}">Return & Refund Policy</a></li>
                                <li><a href="{{route('frontend.privacypolicy',$shopid)}}">Privacy Policy</a></li>
                                <li><a href="{{route('frontend.paymentpolicy',$shopid)}}">Payment Policy</a></li>
                                <li><a href="{{route('frontend.shippingpolicy',$shopid)}}">Shipping Policy</a></li>
                                <li><a href="{{route('frontend.termsconditions',$shopid)}}">Terms & Condition</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Account</a>
                            <ul class="sub-menu">
                                 <li><a href="cart.html">Cart</a></li>
                                 <li><a href="{{route('frontend.wishlist',$shopid)}}">Wishlist</a></li>
                                 <li><a href="{{route('frontend.myaccount',$shopid)}}">My Account</a></li>
                                 @if(!empty(Auth::user()->id))
                                 <li><a href="{{ route('frontlogout',$shopid) }}" class="push_side">Logout</a></li>
                                @else
                               
                                 <li><a href="{{route('frontend.login',$shopid)}}">Sign in</a></li>
                                 <li><a href="{{route('frontend.register',$shopid)}}">Register</a></li>
                                 @endif
                            </ul>
                        </li>
                        <li><a href="{{route('frontend.contact', $shopid)}}">Contact</a></li>
                    </ul>
                </div>
               
            </div>
        </div>
        <!-- Utilize Mobile Menu End -->
        <div class="ltn__utilize-overlay"></div>
        <div id="nt_content">
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
        </div>
    <!-- FOOTER AREA START -->
        <footer class="ltn__footer-area  ">
            <div class="footer-top-area  section-bg-1 plr--5">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-3 col-md-6 col-sm-6 col-12">
                            <div class="footer-widget footer-about-widget">
                                <div class="footer-logo">
                                    <div class="site-logo">
                                        <img src="{{ isset(sellerdetails($shopid)->stores->logo)?STORE_LOGO_URL.sellerdetails($shopid)->stores->logo:''}}" class="header-logo-footer">
                                    </div>
                                </div>
                               
                                <div class="footer-address">
                                    <ul>
                                        <li>
                                            <div class="footer-address-icon">
                                                <i class="icon-placeholder"></i>
                                            </div>
                                            <div class="footer-address-info">
                                                <p>{{ ucfirst(sellerdetails($shopid)->address) }}</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="footer-address-icon">
                                                <i class="icon-call"></i>
                                            </div>
                                            <div class="footer-address-info">
                                                <p><a href="tel:+91 {{ sellerdetails($shopid)->phone }}">+91 {{ sellerdetails($shopid)->phone }}</a></p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="footer-address-icon">
                                                <i class="icon-mail"></i>
                                            </div>
                                            <div class="footer-address-info">
                                                <p><a href="mailto:{{ sellerdetails($shopid)->email }}">{{ sellerdetails($shopid)->email }}</a></p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                              
                            </div>
                        </div>
                        <div class="col-xl-2 col-md-6 col-sm-6 col-12">
                            <div class="footer-widget footer-menu-widget clearfix">
                                <h4 class="footer-title">Catalogs</h4>
                                <div class="footer-menu">
                                    <ul>
                                        @if(!empty(menu($shopid)))
                                        @foreach(menu($shopid) as $cat_val)

                                         <li><a href="{{ url('/').'/'.$shopid. '/catalogs/' . $cat_val->id }}">{{ $cat_val->name }}</a></li>

                                        @endforeach
                                        @endif
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-md-6 col-sm-6 col-12">
                            <div class="footer-widget footer-menu-widget clearfix">
                                <h4 class="footer-title">Info</h4>
                                <div class="footer-menu">
                                    <ul>
                                        <li><a href="{{route('frontend.returnrefund', $shopid)}}">Return & Refund Policy</a></li>
                                        <li><a href="{{route('frontend.privacypolicy', $shopid)}}">Privacy Policy</a></li>
                                        <li><a href="{{route('frontend.paymentpolicy', $shopid)}}">Payment Policy</a></li>
                                        <li><a href="{{route('frontend.shippingpolicy', $shopid)}}">Shipping Policy</a></li>
                                        <li><a href="{{route('frontend.termsconditions', $shopid)}}">Terms & Condition</a></li>
                                         <li><a href="{{route('frontend.contact', $shopid)}}">Contact</a></li>  
                                    </ul>
                                </div>
                            </div>
                        </div>
                       
                        <div class="col-xl-3 col-md-6 col-sm-12 col-12">
                            <div class="footer-widget footer-newsletter-widget">
                                <h4 class="footer-title">Newsletter</h4>
                                <p>Subscribe to our weekly Newsletter and receive updates via email.</p>
                                <div class="footer-newsletter">
                                    <form method="post" action="{{route('frontend.newsletter',$shopid)}}">
                                         @csrf
                                        <input type="email" name="email" placeholder="Email*" required="required">
                                        <div class="btn-wrapper">
                                            <button class="theme-btn-1 btn" type="submit"><i class="fas fa-location-arrow"></i></button>
                                        </div>
                                        {{ $errors->first('email') }}
                                    </form>
                                </div>
                                

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ltn__copyright-area ltn__copyright-2 section-bg-2  ltn__border-top-2--- plr--5">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6 col-12">
                            <div class="ltn__copyright-design clearfix">
                                <p>Copyright © 2021 Make My Mart, All rights reserved.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- FOOTER AREA END -->
        <!-- MODAL AREA START (Quick View Modal) -->
        <div class="ltn__modal-area ltn__quick-view-modal-area">
            <div class="modal fade" id="quick_view_modal" tabindex="-1">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                <!-- <i class="fas fa-times"></i> -->
                            </button>
                        </div>
                        <div class="modal-body">
                             <div class="ltn__quick-view-modal-inner">
                                 <div class="modal-product-item">
                                    <div class="row">
                                        <div class="col-lg-6 col-12">
                                            <div class="modal-product-img">
                                                <img src="" alt="#" id="productimage" class="productimage_theme2"> 
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-12">
                                            <div class="modal-product-info">
                                             
                                                <h3 class="product_title"></h3>
                                                <div class="product-price" id="price_qv">
                                                    
                                                </div>
                                             
                                                <div class="ltn__product-details-menu-2">
                                                    <ul>
                                                        <li>
                                                            <div class="cart-plus-minus">
                                                                <input type="text" value="1" name="qtybutton" class="cart-plus-minus-box qty_pr_js  ty_cart_js qty_cart_js">
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="theme-btn-1 btn btn-effect-1 add_to_cart" title="Add to Cart"  onclick="return add_to_cart(this);">
                                                                <i class="fas fa-shopping-cart"></i>
                                                                <span>ADD TO CART</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="ltn__product-details-menu-3">
                                                    <ul>
                                                        <li>
                                                            <a href="#" class="add_to_wishlist" title="Wishlist" data-toggle="modal" onclick="return add_to_wishlist(this);" >
                                                                <i class="far fa-heart"></i>
                                                                <span>Add to Wishlist</span>
                                                            </a>
                                                        </li>
                                                      
                                                    </ul>
                                                </div>
                                                <hr>
                                               
                                            </div>
                                        </div>
                                    </div>
                                 </div>
                             </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- MODAL AREA END -->
        <!-- MODAL AREA START (Add To Cart Modal) -->
        <div class="ltn__modal-area ltn__add-to-cart-modal-area">
            <div class="modal fade" id="add_to_cart_modal" tabindex="-1">
                <div class="modal-dialog modal-md" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                             <div class="ltn__quick-view-modal-inner">
                                 <div class="modal-product-item">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="modal-product-img">
                                                <img src="<?php echo WEBSITE_URL;?>frontassets/theme2/img/product/1.png" alt="#">
                                            </div>
                                             <div class="modal-product-info">
                                                <h5><a href="{{route('frontend.productdetail', $shopid)}}">Vegetables Juices</a></h5>
                                                <p class="added-cart"><i class="fa fa-check-circle"></i>  Successfully added to your Cart</p>
                                                <div class="btn-wrapper">
                                                    <a href="{{route('frontend.shoppingcart', $shopid)}}" class="theme-btn-1 btn btn-effect-1">View Cart</a>
                                                    <a href="{{route('frontend.checkout', $shopid)}" class="theme-btn-2 btn btn-effect-2">Checkout</a>
                                                </div>
                                             </div>
                                             <!-- additional-info -->
                                             <div class="additional-info d-none---">
                                                <p>We want to give you <b>10% discount</b> for your first order, <br>  Use (LoveBroccoli) discount code at checkout</p>
                                                <div class="payment-method">
                                                    <img src="<?php echo WEBSITE_URL;?>frontassets/theme2/img/icons/payment.png" alt="#">
                                                </div>
                                             </div>
                                        </div>
                                    </div>
                                 </div>
                             </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- MODAL AREA END -->
       
    </div>
    <!-- Body main wrapper end -->
        <!-- preloader area start -->
        <div class="preloader d-none" id="preloader">
            <div class="preloader-inner">
                <div class="spinner">
                    <div class="dot1"></div>
                    <div class="dot2"></div>
                </div>
            </div>
        </div>
        <!-- preloader area end -->
        <!-- All JS Plugins -->
<script src="<?php echo WEBSITE_URL;?>frontassets/theme2/js/plugins.js"></script>
<!-- Main JS -->
<script src="<?php echo WEBSITE_URL;?>frontassets/theme2/js/main.js"></script>
<link rel="stylesheet" href="<?php echo WEBSITE_URL;?>frontassets/sweetalertlibrary/sweetalert.min.css">
<script src="<?php echo WEBSITE_URL;?>frontassets/sweetalertlibrary/sweetalert.min.js"></script>
<script src="<?php echo WEBSITE_URL;?>frontassets/projectscript.js"></script>
<script type="text/javascript">
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