@extends('frontend.theme3.layouts.default')   
@section('content')
<main id="content">
    <div class="container">
        <div class="space-bottom-1 space-bottom-lg-2 space-bottom-xl-3">
            <div class="pb-lg-4">
                <div class="py-4 py-lg-5 py-xl-8">
                    <h6 class="font-weight-medium font-size-7 font-size-xs-25 text-center">My Account</h6>
                </div>
                
               
            


<!-- WISHLIST AREA START -->
<div class="liton__wishlist-area pb-70">

    <div class="container">

        <div class="row">

            <div class="col-lg-12">

                <!-- PRODUCT TAB AREA START -->

                <div class="ltn__product-tab-area">

                    <div class="container">

                        <div class="row">

                            <div class="col-lg-4">

                                <div class="ltn__tab-menu-list mb-50">

                                    <div class="nav">

                                        <a class="active show" data-toggle="tab" href="#liton_tab_1_1">Dashboard <i class="fas fa-home"></i></a>

                                        <a data-toggle="tab" href="#liton_tab_1_2">Orders <i class="fas fa-file-alt"></i></a>

                                        <!-- <a data-toggle="tab" href="#liton_tab_1_4">address <i class="fas fa-map-marker-alt"></i></a> -->

                                        <a data-toggle="tab" href="#liton_tab_1_5">Account Details <i class="fas fa-user"></i></a>

                                        <a href="{{ route('frontlogout',$shopid) }}">Logout <i class="fas fa-sign-out-alt"></i></a>

                                    </div>

                                </div>

                            </div>

                            <div class="col-lg-8">

                                <div class="tab-content">

                                    <div class="tab-pane fade active show" id="liton_tab_1_1">

                                        <div class="ltn__myaccount-tab-content-inner">

                                            <p>Hello <strong>{{ Auth::user()->name }}</strong> </p>

                                            <p>From your account dashboard you can view your <span>recent orders</span>, manage your <span>shipping and billing addresses</span>, and <span>edit your password and account details</span>.</p>

                                        </div>

                                    </div>

                                    <div class="tab-pane fade" id="liton_tab_1_2">

                                        <div class="ltn__myaccount-tab-content-inner">

                                            <div class="table-responsive">

                                                <table class="table">

                                                    <thead>

                                                        <tr>

                                                            <th>Order</th>

                                                            <th>Date</th>

                                                            <th>Status</th>

                                                            <th>Total</th>

                                                            <th>Action</th>

                                                        </tr>

                                                    </thead>

                                                    <tbody>
                                                        @if($orders_list)
                                                        <?php $i=1;?>
                                                        @foreach($orders_list as $order_val)
                                                        <tr>

                                                            <td>{{ $i++ }}</td>

                                                            <td>{{ $order_val->created_at }}</td>

                                                            <td>{{ $order_val->status }}</td>

                                                            <td>₹{{ $order_val->price }}</td>
                                                            <td><a href="{{ url('/').'/'.$shopid. '/order-view/' . $order_val->id }}">View</a></td>

                                                        </tr>
                                                        @endforeach
                                                        @else
                                                        <tr>Order data empty!</tr>
                                                        @endif
                                                        
                                                    </tbody>

                                                </table>

                                            </div>

                                        </div>

                                    </div>

                                    <div class="tab-pane fade" id="liton_tab_1_3">

                                        <div class="ltn__myaccount-tab-content-inner">

                                            <div class="table-responsive">

                                                <table class="table">

                                                    <thead>

                                                        <tr>

                                                            <th>Product</th>

                                                            <th>Date</th>

                                                            <th>Expire</th>

                                                            <th>Download</th>

                                                        </tr>

                                                    </thead>

                                                    <tbody>

                                                        <tr>

                                                            <td>Carsafe - Car Service PSD Template</td>

                                                            <td>Nov 22, 2020</td>

                                                            <td>Yes</td>

                                                            <td><a href="#"><i class="far fa-arrow-to-bottom mr-1"></i> Download File</a></td>

                                                        </tr>

                                                        <tr>

                                                            <td>Carsafe - Car Service HTML Template</td>

                                                            <td>Nov 10, 2020</td>

                                                            <td>Yes</td>

                                                            <td><a href="#"><i class="far fa-arrow-to-bottom mr-1"></i> Download File</a></td>

                                                        </tr>

                                                        <tr>

                                                            <td>Carsafe - Car Service WordPress Theme</td>

                                                            <td>Nov 12, 2020</td>

                                                            <td>Yes</td>

                                                            <td><a href="#"><i class="far fa-arrow-to-bottom mr-1"></i> Download File</a></td>

                                                        </tr>

                                                    </tbody>

                                                </table>

                                            </div>

                                        </div>

                                    </div>

                                    <div class="tab-pane fade" id="liton_tab_1_4">

                                        <div class="ltn__myaccount-tab-content-inner">

                                            <p>The following addresses will be used on the checkout page by default.</p>

                                            <div class="row">

                                                <div class="col-md-6 col-12 learts-mb-30">

                                                    <h4>Billing Address <small><a href="#">edit</a></small></h4>

                                                    <address>

                                                        <p><strong>Alex Tuntuni</strong></p>

                                                        <p>1355 Market St, Suite 900 <br>

                                                            San Francisco, CA 94103</p>

                                                        <p>Mobile: (123) 456-7890</p>

                                                    </address>

                                                </div>

                                                <div class="col-md-6 col-12 learts-mb-30">

                                                    <h4>Shipping Address <small><a href="#">edit</a></small></h4>

                                                    <address>

                                                        <p><strong>Alex Tuntuni</strong></p>

                                                        <p>1355 Market St, Suite 900 <br>

                                                            San Francisco, CA 94103</p>

                                                        <p>Mobile: (123) 456-7890</p>

                                                    </address>

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                    <div class="tab-pane fade" id="liton_tab_1_5">

                                        <div class="ltn__myaccount-tab-content-inner">

                                            <div class="ltn__form-box">

                                                <form action="{{ route('frontend.myaccountupdate',$shopid)}}" method="POST">
                                                    @csrf
                                                    <div class="row mb-50">

                                                        <div class="col-md-6">

                                                            <label>First name:</label>

                                                            <input type="text" name="first_name" value="{{ Auth::user()->first_name }}">
                                                            <span class="error help-inline">
                                                              {{ $errors->first('first_name') }}
                                                            </span>
                                                        </div>

                                                        <div class="col-md-6">

                                                            <label>Last name:</label>

                                                            <input type="text" name="last_name" value="{{ Auth::user()->last_name }}">
                                                            <span class="error help-inline">
                                                              {{ $errors->first('last_name') }}
                                                            </span>
                                                        </div>

                                                        <div class="col-md-6">

                                                            <label>Display Name:</label>

                                                            <input type="text" name="display_name" placeholder="Ethan" value="{{Auth::user()->name}}">
                                                            <span class="error help-inline">
                                                              {{ $errors->first('display_name') }}
                                                            </span>

                                                        </div>

                                                        <div class="col-md-6">

                                                            <label>Display Email:</label>

                                                            <input type="email" name="email" placeholder="example@example.com" value="{{ Auth::user()->email }}">
                                                            <span class="error help-inline">
                                                              {{ $errors->first('email') }}
                                                            </span>
                                                        </div>

                                                    </div>

                                                    <fieldset>

                                                        <legend>Password change (leave blank to leave unchanged)</legend>

                                                        <div class="row">

                                                            <div class="col-md-12">

                                                                <label>Current password :</label>

                                                                <input type="password" name="old_password">
                                                                <span class="error help-inline">
                                                                  {{ $errors->first('old_password') }}
                                                                </span>
                                                                <label>New password :</label>

                                                                <input type="password" name="new_password">
                                                                <span class="error help-inline">
                                                                  {{ $errors->first('new_password') }}
                                                                </span>
                                                                <label>Confirm new password:</label>

                                                                <input type="password" name="confirm_password">
                                                                 <span class="error help-inline">
                                                                  {{ $errors->first('confirm_password') }}
                                                                </span>

                                                            </div>

                                                        </div>

                                                    </fieldset>

                                                    <div class="btn-wrapper">

                                                        <button type="submit" class="btn theme-btn-1 btn-effect-1 text-uppercase">Save Changes</button>

                                                    </div>

                                                </form>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

                <!-- PRODUCT TAB AREA END -->

            </div>

        </div>

    </div>
</div>
<!-- WISHLIST AREA START -->
</div>
        </div>
    </div>
</main>
@endsection