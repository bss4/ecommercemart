@extends('frontend.theme3.layouts.default')   
@section('content')

<!-- ====== MAIN CONTENT ====== -->
    <div class="page-header border-bottom">
        <div class="container">
            <div class="d-md-flex justify-content-between align-items-center py-4">
                <h1 class="page-title font-size-3 font-weight-medium m-0 text-lh-lg">Shop Single</h1>

            </div>
        </div>
    </div>
    <div class="site-content" id="content">
        <div class="container">
            <div class="row  space-top-2">
                <div id="primary" class="single-primary-content content-area">
                    <main id="main" class="site-main ">
                        <div class="product">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-5 woocommerce-product-gallery woocommerce-product-gallery--with-images images">
                                        <figure class="woocommerce-product-gallery__wrapper mb-0">
                                            <div class="js-slick-carousel u-slick"
                                            data-pagi-classes="text-center u-slick__pagination my-4">
                                            @if($product_data->product_image)

                                            @foreach($product_data->product_image as $prod_img_val)
                                                <div class="js-slide">
                                                    <img src="{{ PRODUCT_URL.$prod_img_val['image']}}" alt="Image Description" class="mx-auto img-fluid">
                                                </div>
                                                @endforeach
                                            @endif
                                            </div>
                                        </figure>
                                    </div>
                                    <div class="col-lg-7 pl-lg-0 summary entry-summary">
                                        <div class="px-lg-4 px-xl-6">
                                            <h1 class="product_title entry-title font-size-7 mb-3">{{ isset($product_data->name)?$product_data->name:'' }}</h1>
                                           

                                            <div class="woocommerce-product-details__short-description font-size-2 mb-4">
                                               {{ isset($product_data->description)?$product_data->description:'' }}
                                            </div>

                                            <p class="price font-size-22 font-weight-medium mb-4">
                                                <span class="woocommerce-Price-amount amount">
                                                    <span class="woocommerce-Price-currencySymbol">₹</span>{{ isset($product_data->discount_price)?$product_data->discount_price:'' }}
                                                </span>
                                            </p>

                                            <form class="cart d-md-flex align-items-center">
                                             

                                                <button name="add-to-cart" value="7145" class="btn btn-dark border-0 rounded-0 p-3 btn-block ml-md-4 single_add_to_cart_button button alt" onclick="return add_to_cart(this);" data-id="{{$product_data->id}}">Add To Cart</button>

                                            </form>
                                        </div>
                                        <div class="px-lg-4 px-xl-7 py-5 d-flex align-items-center">
                                            <ul class="list-unstyled nav">
                                                <li class="mr-6 mb-4 mb-md-0">
                                                    <a href="#" class="h-primary add_to_wishlist" onclick="return add_to_wishlist(this);" data-id="{{$product_data->id}}"><i class="flaticon-heart mr-2"></i> Add to Wishlist</a>
                                                </li>
                                               
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Features Section -->
                            <div class="woocommerce-tabs wc-tabs-wrapper mb-10 row">
                                <!-- Nav Classic -->
                                <ul class="col-lg-4 col-xl-3 pt-9 border-top d-lg-block tabs wc-tabs nav justify-content-lg-center flex-nowrap flex-lg-wrap overflow-auto overflow-lg-visble" id="pills-tab" role="tablist">
                                    <li class="flex-shrink-0 flex-lg-shrink-1 nav-item mb-3">
                                        <a class="py-1 d-inline-block nav-link font-weight-medium active" id="pills-one-example1-tab" data-toggle="pill" href="#pills-one-example1" role="tab" aria-controls="pills-one-example1" aria-selected="true">
                                            Description
                                        </a>
                                    </li>
                                    <li class="flex-shrink-0 flex-lg-shrink-1 nav-item mb-3">
                                        <a class="py-1 d-inline-block nav-link font-weight-medium" id="pills-two-example1-tab" data-toggle="pill" href="#pills-two-example1" role="tab" aria-controls="pills-two-example1" aria-selected="false">
                                            Product Details
                                        </a>
                                    </li>                                   
                                    
                                </ul>
                                <!-- End Nav Classic -->

                                <!-- Tab Content -->
                                <div class="tab-content col-lg-8 col-xl-9 border-top" id="pills-tabContent">
                                    <div class="woocommerce-Tabs-panel panel entry-content wc-tab tab-pane fade border-left pl-4 pt-4 pl-lg-6 pt-lg-6 pl-xl-9 pt-xl-9 show active" id="pills-one-example1" role="tabpanel" aria-labelledby="pills-one-example1-tab">
                                        {{ isset($product_data->description)?$product_data->description:'' }}
                                    </div>
                                    <div class="woocommerce-Tabs-panel panel entry-content wc-tab tab-pane fade border-left pl-4 pt-4 pl-lg-6 pt-lg-6 pl-xl-9 pt-xl-9" id="pills-two-example1" role="tabpanel" aria-labelledby="pills-two-example1-tab">
                                        <!-- Mockup Block -->
                                        <div class="table-responsive mb-4">
                                            <table class="table table-hover table-borderless">
                                                <tbody>
                                                    <tr>
                                                        <th class="px-4 px-xl-5">Name: </th>
                                                        <td class="">{{ isset($product_data->name)?$product_data->name:'' }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th class="px-4 px-xl-5">Price</th>
                                                        <td>₹{{ isset($product_data->discount_price)?$product_data->discount_price:'' }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th class="px-4 px-xl-5">SKU</th>
                                                        <td>{{isset($product_data->sku)?$product_data->sku:''}}</td>
                                                    </tr>
                                                  
                                                </tbody>
                                            </table>
                                        </div>
                                        <!-- End Mockup Block -->
                                    </div>
                                   
                                </div>
                                <!-- End Tab Content -->
                            </div>
                            <!-- End Features Section -->

                        </div>
                    </main>
                </div>
                <div id="secondary" class="single-secondary-content sidebar widget-area order-1" role="complementary">
                    <div id="widgetAccordion">
                       
                        <div class="widget border mb-5">
                            <!-- Features Section -->
                            <div class="site-features">
                                <ul class="list-unstyled my-0 list-features">
                                    <li class="list-feature p-4d875">
                                        <div class="media d-md-block d-xl-flex text-center text-xl-left">
                                            <div class="feature__icon font-size-10 text-primary text-lh-xs mb-md-3 mb-lg-0">
                                                <i class="glyph-icon flaticon-delivery"></i>
                                            </div>
                                            <div class="media-body ml-xl-4">
                                                <h4 class="feature__title h6 mb-1 text-dark">Free Delivery</h4>
                                                <p class="feature__subtitle m-0 text-dark">Orders over $100</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-feature p-4d875 border-top">
                                        <div class="media  d-md-block d-xl-flex text-center text-xl-left">
                                            <div class="feature__icon font-size-10 text-primary text-lh-xs mb-md-3 mb-lg-0">
                                                <i class="glyph-icon flaticon-credit"></i>
                                            </div>
                                            <div class="media-body ml-xl-4">
                                                <h4 class="feature__title h6 mb-1 text-dark">Secure Payment</h4>
                                                <p class="feature__subtitle m-0 text-dark">100% Secure Payment</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-feature p-4d875 border-top">
                                        <div class="media  d-md-block d-xl-flex text-center text-xl-left">
                                            <div class="feature__icon font-size-10 text-primary text-lh-xs mb-md-3 mb-lg-0">
                                                <i class="glyph-icon flaticon-warranty"></i>
                                            </div>
                                            <div class="media-body ml-xl-4">
                                                <h4 class="feature__title h6 mb-1 text-dark">Money Back Guarantee</h4>
                                                <p class="feature__subtitle m-0 text-dark">Within 30 Days</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-feature p-4d875 border-top">
                                        <div class="media d-md-block d-xl-flex text-center text-xl-left">
                                            <div class="feature__icon font-size-10 text-primary text-lh-xs mb-md-3 mb-lg-0">
                                                <i class="glyph-icon flaticon-help"></i>
                                            </div>
                                            <div class="media-body ml-xl-4">
                                                <h4 class="feature__title h6 mb-1 text-dark">24/7 Support</h4>
                                                <p class="feature__subtitle m-0 text-dark">Within 1 Business Day</p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <!-- End Features Section -->
                        </div>
                    </div>
                </div>
            </div>
            <section class="space-bottom-3">
                <div class="container">
                    <header class="mb-5 d-md-flex justify-content-between align-items-center">
                        <h2 class="font-size-7 mb-3 mb-md-0">Customers Also Considered</h2>
                    </header>

                     <div class="js-slick-carousel products no-gutters border-top border-left border-right"
                            data-arrows-classes="u-slick__arrow u-slick__arrow-centered--y"
                            data-arrow-left-classes="fas fa-chevron-left u-slick__arrow-inner u-slick__arrow-inner--left ml-lg-n10"
                            data-arrow-right-classes="fas fa-chevron-right u-slick__arrow-inner u-slick__arrow-inner--right mr-lg-n10"
                            data-slides-show="5"
                            data-responsive='[{
                               "breakpoint": 1500,
                               "settings": {
                                 "slidesToShow": 4
                               }
                            },{
                               "breakpoint": 1199,
                               "settings": {
                                 "slidesToShow": 3
                               }
                            }, {
                               "breakpoint": 992,
                               "settings": {
                                 "slidesToShow": 2
                               }
                            }, {
                               "breakpoint": 554,
                               "settings": {
                                 "slidesToShow": 2
                               }
                            }]'>
                            @if(!empty($product_like))
                            @foreach($product_like as $product_val)
                            <div class="product">
                                <div class="product__inner overflow-hidden p-3 p-md-4d875">
                                    <div class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                                        <div class="woocommerce-loop-product__thumbnail">
                                            <a href="{{ url('/').'/'.$shopid. '/single-product-detail/' . $product_val->id }}" class="d-block"><img src="{{ isset($product_val->image)?PRODUCT_URL.$product_val->image:'' }}" class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid" alt="image-description"></a>
                                        </div>
                                        <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                                            <div class="text-uppercase font-size-1 mb-1 text-truncate"><a href="{{ url('/').'/'.$shopid. '/single-product-detail/' . $product_val->id }}">{{ isset($product_val->name)?$product_val->name:'' }}</a></div>
                                            <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark"><a href="{{ url('/').'/'.$shopid. '/single-product-detail/' . $product_val->id }}"></a>{{ isset($product_val->description)?$product_val->description:'' }}</h2>
                                           
                                            <div class="price d-flex align-items-center font-weight-medium font-size-3">
                                                <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">₹</span>{{ isset($product_val->discount_price)?$product_val->discount_price:'' }}</span>
                                            </div>
                                        </div>
                                        <div class="product__hover d-flex align-items-center">
                                            <a href="#" class="text-uppercase text-dark h-dark font-weight-medium mr-auto" onclick="return add_to_cart(this);" data-id="{{$product_val->id}}">
                                                <span class="product__add-to-cart">Add To Cart</span>
                                                <span class="product__add-to-cart-icon font-size-4"><i class="flaticon-icon-126515"></i></span>
                                            </a>
                                            
                                            <a href="#" class="h-p-bg btn btn-outline-primary border-0" onclick="return add_to_wishlist(this);" data-id="{{$product_data->id}}">
                                                <i class="flaticon-heart"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                             @endforeach
                            @endif
                    </div>
                </div>
            </section>
        </div>
    </div>
    <!-- ====== END MAIN CONTENT ====== -->
@endsection