@extends('frontend.theme2.layouts.default')   
@section('content')
<!-- BREADCRUMB AREA START -->
<div class="ltn__breadcrumb-area mb-80 ltn__breadcrumb-area-3 ltn__breadcrumb-color-white bg-overlay-theme-black-90 bg-image plr--9---" data-bg="<?php echo WEBSITE_URL;?>frontassets/theme2/img/bg/9.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="ltn__breadcrumb-inner ltn__breadcrumb-inner-2 justify-content-between">
                    <div class="section-title-area ltn__section-title-2">
                        <h1 class="section-title white-color">Contact Us</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- BREADCRUMB AREA END -->
<!-- CONTACT ADDRESS AREA START -->
<div class="ltn__contact-address-area mb-20">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="ltn__contact-address-item ltn__contact-address-item-3 box-shadow">
                    <div class="ltn__contact-address-icon">
                        <img src="<?php echo WEBSITE_URL;?>frontassets/theme2/img/icons/10.png" alt="Icon Image">
                    </div>
                    <h3>Email Address</h3>
                    <p><a href="mailto:{{ sellerdetails($shopid)->email }}">{{ sellerdetails($shopid)->email }}</a></p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="ltn__contact-address-item ltn__contact-address-item-3 box-shadow">
                    <div class="ltn__contact-address-icon">
                        <img src="<?php echo WEBSITE_URL;?>frontassets/theme2/img/icons/11.png" alt="Icon Image">
                    </div>
                    <h3>Phone Number</h3>
                    <p>+91 {{ sellerdetails($shopid)->phone }}</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="ltn__contact-address-item ltn__contact-address-item-3 box-shadow">
                    <div class="ltn__contact-address-icon">
                        <img src="<?php echo WEBSITE_URL;?>frontassets/theme2/img/icons/12.png" alt="Icon Image">
                    </div>
                    <h3>Office Address</h3>
                    <p>{{ ucfirst(sellerdetails($shopid)->address) }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- CONTACT ADDRESS AREA END -->
<!-- CONTACT MESSAGE AREA START -->
<div class="ltn__contact-message-area mb-80">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="ltn__form-box contact-form-box box-shadow white-bg">
                    <h4 class="title-2">We would love to hear from you</h4>
                    <form id="contact-form" action="{{route('frontend.contact_mail', $shopid)}}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-4">
                                <div class="input-item input-item-name ltn__custom-icon">
                                    <input type="text" name="name" placeholder="Enter your name" required="required">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="input-item input-item-email ltn__custom-icon">
                                    <input type="email" name="email" placeholder="Enter email address" required="required">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="input-item input-item-phone ltn__custom-icon">
                                    <input type="text" name="phone" pattern="[0-9\-]*"  placeholder="Enter phone number" required="required">
                                </div>
                            </div>
                        </div>
                        <div class="input-item input-item-textarea ltn__custom-icon">
                            <textarea name="message" placeholder="Enter message" required="required"></textarea>
                        </div>
                        <div class="btn-wrapper mt-0">
                            <button class="btn theme-btn-1 btn-effect-1 text-uppercase" type="submit">Submit</button>
                        </div>
                        <p class="form-messege mb-0 mt-20"></p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- CONTACT MESSAGE AREA END -->
@endsection