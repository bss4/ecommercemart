<!DOCTYPE html>

<html class="loading" lang="en" data-textdirection="ltr">

<!-- BEGIN: Head-->
<head>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">

    <meta name="description" content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">

    <meta name="keywords" content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">

    <meta name="author" content="PIXINVENT">

    <title>MMM</title>

    <link rel="apple-touch-icon" href="<?php echo WEBSITE_URL;?>app-assets/images/ico/apple-icon-120.png">

    <link rel="shortcut icon" type="image/x-icon" href="<?php echo WEBSITE_URL;?>app-assets/images/ico/favicon.ico">

    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet">



    <!-- BEGIN: Vendor CSS-->

    <link rel="stylesheet" type="text/css" href="<?php echo WEBSITE_URL;?>app-assets/vendors/css/vendors.min.css">

    <link rel="stylesheet" type="text/css" href="<?php echo WEBSITE_URL;?>app-assets/vendors/css/tables/ag-grid/ag-grid.css">

    <link rel="stylesheet" type="text/css" href="<?php echo WEBSITE_URL;?>app-assets/vendors/css/tables/ag-grid/ag-theme-material.css">

    <link rel="stylesheet" type="text/css" href="<?php echo WEBSITE_URL;?>app-assets/vendors/css/charts/apexcharts.css">

    <link rel="stylesheet" type="text/css" href="<?php echo WEBSITE_URL;?>app-assets/vendors/css/extensions/tether-theme-arrows.css">

    <link rel="stylesheet" type="text/css" href="<?php echo WEBSITE_URL;?>app-assets/vendors/css/extensions/tether.min.css">

    <link rel="stylesheet" type="text/css" href="<?php echo WEBSITE_URL;?>app-assets/vendors/css/extensions/shepherd-theme-default.css">

    <!-- END: Vendor CSS-->



    <!-- BEGIN: Theme CSS-->

    <link rel="stylesheet" type="text/css" href="<?php echo WEBSITE_URL;?>app-assets/css/bootstrap.css">

    <link rel="stylesheet" type="text/css" href="<?php echo WEBSITE_URL;?>app-assets/css/bootstrap-extended.css">

    <link rel="stylesheet" type="text/css" href="<?php echo WEBSITE_URL;?>app-assets/css/colors.css">

    <link rel="stylesheet" type="text/css" href="<?php echo WEBSITE_URL;?>app-assets/css/components.css">

    <link rel="stylesheet" type="text/css" href="<?php echo WEBSITE_URL;?>app-assets/css/themes/dark-layout.css">

    <link rel="stylesheet" type="text/css" href="<?php echo WEBSITE_URL;?>app-assets/css/themes/semi-dark-layout.css">



    <!-- BEGIN: Page CSS-->

    <link rel="stylesheet" type="text/css" href="<?php echo WEBSITE_URL;?>app-assets/css/core/menu/menu-types/vertical-menu.css">



    <link rel="stylesheet" type="text/css" href="<?php echo WEBSITE_URL;?>app-assets/css/core/colors/palette-gradient.css">

    <link rel="stylesheet" type="text/css" href="<?php echo WEBSITE_URL;?>app-assets/css/pages/app-user.css">

    <link rel="stylesheet" type="text/css" href="<?php echo WEBSITE_URL;?>app-assets/css/pages/aggrid.css">



    <link rel="stylesheet" type="text/css" href="<?php echo WEBSITE_URL;?>app-assets/css/core/colors/palette-gradient.css">

    <link rel="stylesheet" type="text/css" href="<?php echo WEBSITE_URL;?>app-assets/css/pages/dashboard-analytics.css">

    <link rel="stylesheet" type="text/css" href="<?php echo WEBSITE_URL;?>app-assets/css/pages/card-analytics.css">

    <link rel="stylesheet" type="text/css" href="<?php echo WEBSITE_URL;?>app-assets/css/plugins/tour/tour.css">

    <!-- END: Page CSS-->



    <!-- BEGIN: Custom CSS-->

    <link rel="stylesheet" type="text/css" href="<?php echo WEBSITE_URL;?>assets/css/style.css">
<script src="https://cdn.ckeditor.com/4.6.2/standard-all/ckeditor.js"></script>
    <!-- END: Custom CSS-->

    <style type="text/css">
    span.error.help-inline { color: red; }
    ._product_variation_tbl table.table { overflow: scroll; position: relative; display: block;}
    ._product_variation_tbl .col-12.col-sm-9.col-md-6.col-lg-5 { max-width: 100%;}
    span.status-warning {background: #FF9F43;color: #fff;padding: 5px;border-radius: 6%;cursor: pointer;}
    span.status-success {background: #28C76F;color: #fff;padding: 5px;border-radius: 6%;cursor: pointer;}
    span.status-danger {background: #EA5455;color: #fff;padding: 5px;border-radius: 6%;cursor: pointer;}
    </style>

</head>

<!-- END: Head-->



<!-- BEGIN: Body-->



<body class="vertical-layout vertical-menu-modern 2-columns  navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">

    <input type="hidden" name="base_url" id="base_url" value="{{route('Sellers.json')}}">
    <input type="hidden" id="account_number" value="{{config('custom.account_number')}}">

    <!-- BEGIN: Header-->

    <nav class="header-navbar navbar-expand-lg navbar navbar-with-menu floating-nav navbar-light navbar-shadow">

        <div class="navbar-wrapper">

            <div class="navbar-container content">

                <div class="navbar-collapse" id="navbar-mobile">

                    <div class="mr-auto float-left bookmark-wrapper d-flex align-items-center">

                        <ul class="nav navbar-nav">

                                <div class="bookmark-input search-input">

                                    <div class="bookmark-input-icon"><i class="feather icon-search primary"></i></div>

                                    <input class="form-control input" type="text" placeholder="Explore Vuexy..." tabindex="0" data-search="template-list">

                                    <ul class="search-list search-list-bookmark"></ul>

                                </div>

                            </li>

                        </ul>

                    </div>

                    <ul class="nav navbar-nav float-right">

                        

                        <li class="nav-item d-none d-lg-block"><a class="nav-link nav-link-expand"><i class="ficon feather icon-maximize"></i></a></li>

                        <li class="dropdown dropdown-user nav-item"><a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">

                                <div class="user-nav d-sm-flex d-none"><span class="user-name text-bold-600">{{ Auth::user()->name }}</span>
                                <span class="user-status">Available</span></div>
                                <span>

                                    @if(!empty(Auth::user()->image))

                                    <img class="round" src="<?php echo WEBSITE_URL;?>public/users/{{Auth::user()->image}}" alt="avatar" height="40" width="40">

                                    @else

                                    <img class="round" src="<?php echo WEBSITE_URL;?>app-assets/images/portrait/small/avatar-s-11.jpg" alt="avatar" height="40" width="40">

                                    @endif

                                </span>

                            </a>

                            <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="{{ route('Users.admin', Auth::user()->id) }}"><i class="feather icon-user"></i> Edit Profile</a>

                                <div class="dropdown-divider"></div><a class="dropdown-item" href="{{ route('admin.logout') }}"><i class="feather icon-power"></i> Logout</a>

                            </div>

                        </li>

                    </ul>

                </div>

            </div>

        </div>

    </nav>

    <ul class="main-search-list-defaultlist d-none">

        <li class="d-flex align-items-center"><a class="pb-25" href="#">

                <h6 class="text-primary mb-0">Files</h6>

            </a></li>

        <li class="auto-suggestion d-flex align-items-center cursor-pointer"><a class="d-flex align-items-center justify-content-between w-100" href="#">

                <div class="d-flex">

                    <div class="mr-50"><img src="<?php echo WEBSITE_URL;?>app-assets/images/icons/xls.png" alt="png" height="32"></div>

                    <div class="search-data">

                        <p class="search-data-title mb-0">Two new item submitted</p><small class="text-muted">Marketing Manager</small>

                    </div>

                </div><small class="search-data-size mr-50 text-muted">&apos;17kb</small>

            </a></li>

        <li class="auto-suggestion d-flex align-items-center cursor-pointer"><a class="d-flex align-items-center justify-content-between w-100" href="#">

                <div class="d-flex">

                    <div class="mr-50"><img src="<?php echo WEBSITE_URL;?>app-assets/images/icons/jpg.png" alt="png" height="32"></div>

                    <div class="search-data">

                        <p class="search-data-title mb-0">52 JPG file Generated</p><small class="text-muted">FontEnd Developer</small>

                    </div>

                </div><small class="search-data-size mr-50 text-muted">&apos;11kb</small>

            </a></li>

        <li class="auto-suggestion d-flex align-items-center cursor-pointer"><a class="d-flex align-items-center justify-content-between w-100" href="#">

                <div class="d-flex">

                    <div class="mr-50"><img src="<?php echo WEBSITE_URL;?>app-assets/images/icons/pdf.png" alt="png" height="32"></div>

                    <div class="search-data">

                        <p class="search-data-title mb-0">25 PDF File Uploaded</p><small class="text-muted">Digital Marketing Manager</small>

                    </div>

                </div><small class="search-data-size mr-50 text-muted">&apos;150kb</small>

            </a></li>

        <li class="auto-suggestion d-flex align-items-center cursor-pointer"><a class="d-flex align-items-center justify-content-between w-100" href="#">

                <div class="d-flex">

                    <div class="mr-50"><img src="<?php echo WEBSITE_URL;?>app-assets/images/icons/doc.png" alt="png" height="32"></div>

                    <div class="search-data">

                        <p class="search-data-title mb-0">Anna_Strong.doc</p><small class="text-muted">Web Designer</small>

                    </div>

                </div><small class="search-data-size mr-50 text-muted">&apos;256kb</small>

            </a></li>

        <li class="d-flex align-items-center"><a class="pb-25" href="#">

                <h6 class="text-primary mb-0">Members</h6>

            </a></li>

        <li class="auto-suggestion d-flex align-items-center cursor-pointer"><a class="d-flex align-items-center justify-content-between py-50 w-100" href="#">

                <div class="d-flex align-items-center">

                    <div class="avatar mr-50"><img src="<?php echo WEBSITE_URL;?>app-assets/images/portrait/small/avatar-s-8.jpg" alt="png" height="32"></div>

                    <div class="search-data">

                        <p class="search-data-title mb-0">{{ Auth::user()->name }}</p><small class="text-muted">UI designer</small>

                    </div>

                </div>

            </a></li>

        <li class="auto-suggestion d-flex align-items-center cursor-pointer"><a class="d-flex align-items-center justify-content-between py-50 w-100" href="#">

                <div class="d-flex align-items-center">

                    <div class="avatar mr-50"><img src="<?php echo WEBSITE_URL;?>app-assets/images/portrait/small/avatar-s-1.jpg" alt="png" height="32"></div>

                    <div class="search-data">

                        <p class="search-data-title mb-0">Michal Clark</p><small class="text-muted">FontEnd Developer</small>

                    </div>

                </div>

            </a></li>

        <li class="auto-suggestion d-flex align-items-center cursor-pointer"><a class="d-flex align-items-center justify-content-between py-50 w-100" href="#">

                <div class="d-flex align-items-center">

                    <div class="avatar mr-50"><img src="<?php echo WEBSITE_URL;?>app-assets/images/portrait/small/avatar-s-14.jpg" alt="png" height="32"></div>

                    <div class="search-data">

                        <p class="search-data-title mb-0">Milena Gibson</p><small class="text-muted">Digital Marketing Manager</small>

                    </div>

                </div>

            </a></li>

        <li class="auto-suggestion d-flex align-items-center cursor-pointer"><a class="d-flex align-items-center justify-content-between py-50 w-100" href="#">

                <div class="d-flex align-items-center">



                    <div class="avatar mr-50"><img src="<?php echo WEBSITE_URL;?>app-assets/images/portrait/small/avatar-s-6.jpg" alt="png" height="32"></div>

                    <div class="search-data">

                        <p class="search-data-title mb-0">Anna Strong</p><small class="text-muted">Web Designer</small>

                    </div>

                </div>

            </a></li>

    </ul>

    <ul class="main-search-list-defaultlist-other-list d-none">

        <li class="auto-suggestion d-flex align-items-center justify-content-between cursor-pointer"><a class="d-flex align-items-center justify-content-between w-100 py-50">

                <div class="d-flex justify-content-start"><span class="mr-75 feather icon-alert-circle"></span><span>No results found.</span></div>

            </a></li>

    </ul>

    <!-- END: Header-->





    <!-- BEGIN: Main Menu-->

    <div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">

        <div class="navbar-header">

            <ul class="nav navbar-nav flex-row">

                <li class="nav-item mr-auto"><a class="navbar-brand" href="{{route('admin.dashboard')}}">

                        <div class="brand-logo"></div>

                        <h2 class="brand-text mb-0">MMM</h2>

                    </a></li>

                <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="feather icon-x d-block d-xl-none font-medium-4 primary toggle-icon"></i><i class="toggle-icon feather icon-disc font-medium-4 d-none d-xl-block collapse-toggle-icon primary" data-ticon="icon-disc"></i></a></li>

            </ul>

        </div>

        <div class="shadow-bottom"></div>

        <div class="main-menu-content" id="main_content_menu">

            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">

                <li class="{{ (Request::is('admin/dashboard*') ? 'active' : '') }} nav-item"><a href="{{route('admin.dashboard')}}"><i class="feather icon-home"></i><span class="menu-title" data-i18n="Dashboard">Dashboard</span></a>

                   <!--  <ul class="menu-content">

                        <li ><a href="#"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Analytics">Dashboard</span></a>

                        </li>

                       

                    </ul> -->

                </li>

                

                <li class=" navigation-header"><span>Application</span>

                </li>

                <!-- <li class=" nav-item"><a href="#"><i class="feather icon-user"></i><span class="menu-title" data-i18n="User">User</span></a>

                    <ul class="menu-content">

                        <li><a href="app-user-list.html"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="List">List</span></a>

                        </li>

                        

                    </ul>

                </li> -->

                <li class="{{ (Request::is('admin/storetype*') ? 'active' : '') }} nav-item"><a href="{{route('StoreType.index')}}"><i class="feather icon-list"></i><span class="menu-title" data-i18n="Store">Store Type</span></a>

                    <!-- <ul class="menu-content">

                        <li><a href="#"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="List">List</span></a>

                        </li>

                        

                    </ul> -->

                </li>

                <li class="{{ (Request::is('admin/category*') ? 'active' : '') }} nav-item"><a href="{{route('Category.index')}}"><i class="feather icon-user"></i><span class="menu-title" data-i18n="Category">Category</span></a>

                  

                </li>

                <li class="{{ (Request::is('admin/sellers*') ? 'active' : '') }} nav-item"><a href="{{route('Sellers.index')}}"><i class="feather icon-user"></i><span class="menu-title" data-i18n="User">Seller</span></a>

                  

                </li>



                <li class="{{ (Request::is('admin/stores*') ? 'active' : '') }} nav-item"><a href="{{route('Stores.index')}}"><i class="feather icon-box"></i><span class="menu-title" data-i18n="User">Seller Shop</span></a>

                </li>

                <li class="{{ (Request::is('admin/themes*') ? 'active' : '') }} nav-item"><a href="{{route('Themes.index')}}"><i class="feather icon-box"></i><span class="menu-title" data-i18n="User">Themes</span></a>

                </li>



                <li class="{{ (Request::is('admin/orders*') ? 'active' : '') }} nav-item"><a href="{{route('Orders.index')}}"><i class="feather icon-shopping-cart"></i><span class="menu-title" data-i18n="User">All Orders</span></a>

                   

                </li>



                <li class="{{ (Request::is('admin/payments*') ? 'active' : '') }} nav-item"><a href="{{route('Payments.index')}}"><i class="feather icon-credit-card"></i><span class="menu-title" data-i18n="User">All Payment</span></a>

                   

                </li>





                <li class="{{ (Request::is('admin/plans*') ? 'active' : '') }} nav-item"><a href="{{route('Plans.index')}}"><i class="feather icon-package"></i><span class="menu-title" data-i18n="User">Plans</span></a>

                

                </li>

                <li class="{{ (Request::is('admin/affilate*') ? 'active' : '') }} nav-item"><a href="{{route('Affilate.index')}}"><i class="feather icon-user"></i><span class="menu-title" data-i18n="User">Affilate Users</span></a>

                 

                </li>



                <li class="{{ (Request::is('admin/setting*') ? 'active' : '') }} navigation-header"><span>Setting</span>

                </li>

                <li class="{{ (Request::is('admin/setting*') ? 'active' : '') }} nav-item"><a href="#"><i class="feather icon-user"></i><span class="menu-title" data-i18n="User">Setting</span></a>

                    <ul class="menu-content">

                       

                       <li><a href="{{route('Setting.index')}}"><i class="feather icon-circle"> </i><span class="menu-title" data-i18n="FAQ">Coin Setting</span></a>

                        </li>



                        <li><a href="{{route('TextSetting.index')}}"><i class="feather icon-circle"></i><span class="menu-title" data-i18n="FAQ">TextSetting</span></a>

                        </li>

                        

                    </ul>

                </li> 

               

            </ul>

        </div>

    </div>

    <!-- END: Main Menu-->



    <!-- BEGIN: Content-->

    <div class="app-content content">

        <div class="content-overlay"></div>

        <div class="header-navbar-shadow"></div>

        <div class="container-fluid">

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

    </div>

    <!-- END: Content-->



    <div class="sidenav-overlay"></div>

    <div class="drag-target"></div>



    <!-- BEGIN: Footer-->

    <footer class="footer footer-static footer-light ">

        <p class="clearfix text-center blue-grey lighten-2 mb-0"><span class="float-md-left d-block d-md-inline-block mt-25">COPYRIGHT &copy; <?php echo date('Y'); ?>, All rights Reserved</span>

            <button class="btn btn-primary btn-icon scroll-top" type="button"><i class="feather icon-arrow-up"></i></button>

        </p>

    </footer>

    <!-- END: Footer-->

   

    <script type="text/javascript">

        var json_obj = {


                'orders'   : '{{ route("Orders.json") }}',

                'stores'   : '{{ route("Stores.json") }}',

                'payments' : '{{ route("Payments.json") }}',

                'users'    : '{{ route("Users.json") }}',

                'base_url' : '{{ route("Plans.json") }}',

                'plan_edit' : '{{ route("Plans.edit", ":id") }}',

                'plan_view' : '{{ route("Plans.view", ":id") }}',

                'plan_delete': '{{ route("Plans.delete", ":id") }}',

                'storetype'  : '{{ route("StoreType.json") }}',

                'storetype_edit' : '{{ route("StoreType.edit", ":id") }}',

                'storetype_delete': '{{ route("StoreType.delete", ":id") }}',

                'category'  : '{{ route("Category.json") }}',

                'category_edit' : '{{ route("Category.edit", ":id") }}',

                'category_delete': '{{ route("Category.delete", ":id") }}',

                'store_catalogue_details': '{{ route("Sellers.cataloguedetails", ":id") }}',

                'store_catalogue_edit': '{{ route("Sellers.catalogueedit", ":id") }}',

                'store_catalogue_delete': '{{ route("Sellers.cataloguedelete", ":id") }}',

                'store_product_details': '{{ route("Sellers.productdetails", ":id") }}',

                'store_product_edit': '{{ route("Sellers.productedit", ":id") }}',

                'store_product_delete': '{{ route("Sellers.productdelete", ":id") }}',

                'store_details': '{{ route("Stores.view", ":id") }}',

                'store_edit': '{{ route("Stores.edit", ":id") }}',

                'store_delete': '{{ route("Stores.delete", ":id") }}',

                'themes_view': '{{ route("Themes.view", ":id") }}',

                'themes_edit': '{{ route("Themes.edit", ":id") }}',

                'themes_delete': '{{ route("Themes.delete", ":id") }}',

                'order_view': '{{ route("SellerOrder.view", ":id") }}',
                
                'order_delete': '{{ route("SellerOrder.delete", ":id") }}',

                'all_single_order_view': '{{ route("Orders.view", ":id") }}',
                
                'all_single_order_delete': '{{ route("Orders.delete", ":id") }}',

                'all_single_payment_view': '{{ route("Payments.view", ":id") }}',
                
                'all_single_payment_delete': '{{ route("Payments.delete", ":id") }}',

                'seller_payment_view': '{{ route("Sellers.paymentview", ":id") }}',

        };

        var seller = {

            'store_catalogue': '{{ route("Sellers.catalogue", ":id") }}',
            
            'store_catalogue_product': '{{ route("Sellers.storecatalogueproduct", ":id") }}',

            'store_edit'     : '{{ route("Sellers.edit", ":id") }}',

            'store_delete'   : '{{ route("Sellers.delete", ":id") }}',

            'store_view'     : '{{ route("Sellers.view", ":id") }}',

            'store_stores'   : '{{ route("Sellers.stores", ":id") }}',

            'store_orders'   : '{{ route("Sellers.orders", ":id") }}',

            'store_payments' : '{{ route("Sellers.payments", ":id") }}'

        };

        var dashboard = {

            'package_json' : '{{ route("Dashboard.json") }}'

        };

        var base_url = "<?php echo url('/');?>";





    </script>

    <!-- BEGIN: Vendor JS-->

    <script src="<?php echo WEBSITE_URL;?>app-assets/vendors/js/vendors.min.js"></script>

    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->

    <script src="<?php echo WEBSITE_URL;?>app-assets/vendors/js/tables/ag-grid/ag-grid-community.min.noStyle.js"></script>

    <!-- END: Page Vendor JS-->





    <!-- BEGIN: Theme JS-->

    <script src="<?php echo WEBSITE_URL;?>app-assets/js/core/app-menu.js"></script>

    <script src="<?php echo WEBSITE_URL;?>app-assets/js/core/app.js"></script>

    <script src="<?php echo WEBSITE_URL;?>app-assets/js/scripts/components.js"></script>

    <!-- END: Theme JS-->



    <!-- Start Datatables JS-->

    <?php if(Route::currentRouteName() == "Sellers.index"){ ?>

    <script src="<?php echo WEBSITE_URL;?>app-assets/js/scripts/pages/sellers/sellers-list.js"></script>



    <?php } elseif( Route::currentRouteName() == "Category.index" || Route::currentRouteName() == "Plans.index" ||  Route::currentRouteName() == "StoreType.index" || Route::currentRouteName() == "Affilate.index" || Route::currentRouteName() == "Sellers.catalogue" || Route::currentRouteName() == "Sellers.storecatalogueproduct" || Route::currentRouteName() == "Stores.index" || Route::currentRouteName() == "Themes.index" || Route::currentRouteName() == "Sellers.orders" || Route::currentRouteName() == "Orders.index" || Route::currentRouteName() == "Payments.index" || Route::currentRouteName() == "Sellers.payments"){ ?>

   <script src="<?php echo WEBSITE_URL;?>app-assets/js/scripts/pages/plans/plans-list.js"></script> 

    <?php } else { ?>

    <script src="<?php echo WEBSITE_URL;?>app-assets/js/scripts/pages/app-user.js"></script>

   <?php } ?>

    <!-- End Datatables JS-->



    <!-- BEGIN: Page Vendor JS-->

    <script src="<?php echo WEBSITE_URL;?>app-assets/vendors/js/charts/apexcharts.min.js"></script>

    <script src="<?php echo WEBSITE_URL;?>app-assets/vendors/js/extensions/tether.min.js"></script>

    <script src="<?php echo WEBSITE_URL;?>app-assets/vendors/js/extensions/shepherd.min.js"></script>

    <!-- END: Page Vendor JS-->





    <!-- BEGIN: Page JS-->

    <script src="<?php echo WEBSITE_URL;?>app-assets/js/scripts/pages/dashboard-analytics.js"></script>
<link rel="stylesheet" href="<?php echo WEBSITE_URL;?>frontassets/sweetalertlibrary/sweetalert.min.css">
<script src="<?php echo WEBSITE_URL;?>frontassets/sweetalertlibrary/sweetalert.min.js"></script>
   



     <!-- BEGIN: Vendor JS-->

  







    <!-- END: Page JS-->

<script type="text/javascript">

    jQuery(document).ready(function($) {

    // jQuery('#example').DataTable();



    jQuery("#main_content_menu ul#main-menu-navigation li ul li a").each(function(){

        var link = $(this);

        //alert(link.get(0).href);

        if (link.get(0).href === location.href) {

            link.parent("li").addClass("active").parents("li").addClass('open');

            return false;

        }

       

    })

} );

$(document).ready(function(){
    var maxField = 4; //Input fields increment limitation
    var addButton = $('.add_button'); //Add button selector
    var wrapper = $('.field_wrapper'); //Input field wrapper
    var fieldHTML = '<div class="row"><div class="col-sm-6"><input type="text" name="attr_name[]" class="form-control" placeholder="Size" value=""></div><div class="col-sm-6"><input type="text" name="attr_value[]" class="form-control" placeholder="S,M,L,XL" value=""></div><a href="javascript:void(0);" class="remove_button ">Remove</a></div>'; //New input field html 
    var x = 1; //Initial field counter is 1
    
    //Once add button is clicked
    $(addButton).click(function(){
        //Check maximum number of input fields
        if(x < maxField){ 
            x++; //Increment field counter
            $(wrapper).append(fieldHTML); //Add field html
        }
    });
    
    //Once remove button is clicked
    $(wrapper).on('click', '.remove_button', function(e){
        e.preventDefault();
        $(this).parent('div').remove(); //Remove field html
        x--; //Decrement field counter
    });
});


$('.radioproductvariation').on('change', function() {
     
    if( $(this).is(":checked") ){ 
    
        var val = $(this).val(); 
        if(val =='variation')
        {
            var catalogue_id = $("#catalogue_id").val();
            var base_url = $("#admin_base_url").val();
           
            $.ajax({
                    //url: "{{ route('frontend.list_cart')}}",
                    url: base_url+"/admin/catalogue-variation",
                    type: 'POST',
                    data: { _token:'{{ csrf_token() }}',catalogue_id:catalogue_id},
                    dataType: "html",       
                    success: function(response)
                    {
                         $("#cataloguevariation").html(response);
                        
                        console.log(response);
                    },
                     error: function(error){
                     console.log("error", error);
                    
                    }
                });  
        }else{

            $("#cataloguevariation").html('');
        }

    }
    
});


$('#catalogue_id').on('change', function() {
     
        var val = $('input[name="type"]:checked').val(); 
        
        if(val =='variation')
        {
            var catalogue_id = $("#catalogue_id").val();
            var base_url = $("#admin_base_url").val();
           
            $.ajax({
                    //url: "{{ route('frontend.list_cart')}}",
                    url: base_url+"/admin/catalogue-variation",
                    type: 'POST',
                    data: { _token:'{{ csrf_token() }}',catalogue_id:catalogue_id},
                    dataType: "html",       
                    success: function(response)
                    {
                         $("#cataloguevariation").html(response);
                        
                        console.log(response);
                    },
                     error: function(error){
                     console.log("error", error);
                    
                    }
                });  
        }else{

            $("#cataloguevariation").html('');
        }

});

$(document).on('click', '._delivery', function() {
     
       let id = $(this).attr("id");
       let type = $(this).data("type");
       let _url = $(this).data('url');

        $.ajax({
            //url: "{{ route('frontend.list_cart')}}",
            url: _url,
            type: 'POST',
            data: { _token:'{{ csrf_token() }}',id:id, type:type},
            dataType: "json",       
            success: function(response)
            {

                
                swal('Success', response.message, 'success');
                location.reload();
            },
            error: function(error){
              
                swal('Error', error.message, 'error');
            }
        });  
    
});

$(document).on('click', '.verifyupi', function() {
     
       let id = $(this).data("id");
       let type = $(this).data("type");
       let _url = $(this).data('url');
       let account_number = $('#account_number').val();
       
        $.ajax({
            //url: "{{ route('frontend.list_cart')}}",
            url: _url,
            type: 'POST',
            data: { _token:'{{ csrf_token() }}',id:id, type:type, acc_number:account_number},
            dataType: "json",       
            success: function(response)
            {
                if(response.status=="false")
                {
                    swal('Error', response.message, 'error');
                }else{
                    swal('Success', response.message, 'success');
                }
                
                location.reload();
            },
            error: function(error){
                
                swal('Error', error.message, 'error');
            }
        });  
    
});
</script>

</body>

<!-- END: Body-->
</html>