@extends('frontend.theme4.layouts.default')   
@section('content')
 <!-- breadcrumb-area start -->
        <div class="breadcrumb-area">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-12 text-center">
                        <h2 class="breadcrumb-title">Contact Us</h2>
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb-area end -->
        <!-- Contact Area Start -->
        <div class="contact-area">
            <div class="container">
                <div class="contact-wrapper">
                    <div class="row">
                        <div class="col-12">
                            <div class="contact-form">
                                <div class="contact-title mb-30">
                                    <h2 class="title">Send A Quest</h2>
                                </div>
                                <form class="contact-form-style" id="contact-form" action="{{route('frontend.contact_mail', $shopid)}}" method="post">
                                    @csrf
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <input name="name" placeholder="Name*" type="text" />
                                        </div>
                                        <div class="col-lg-6">
                                            <input name="email" placeholder="Email*" type="email" />
                                        </div>
                                        <div class="col-lg-12">
                                            <input name="phone" placeholder="Phone*" pattern="[0-9\-]*" type="text" />
                                        </div>
                                        <div class="col-lg-12 text-center">
                                            <textarea name="message" placeholder="Your Message*"></textarea>
                                            <button class="btn btn-primary" type="submit">Send Message</button>
                                        </div>
                                    </div>
                                </form>
                                <p class="form-messege"></p>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="contact-info">
                                <div class="single-contact">
                                    <div class="icon-box">
                                        <img src="<?php echo WEBSITE_URL;?>frontassets/theme4/assets/images/icons/contact-1.png" alt="">
                                    </div>
                                    <div class="info-box">
                                        <h5 class="title">Address</h5>
                                        <p>{{ ucfirst(sellerdetails($shopid)->address) }}</p>
                                    </div>
                                </div>
                                <div class="single-contact">
                                    <div class="icon-box">
                                        <img src="<?php echo WEBSITE_URL;?>frontassets/theme4/assets/images/icons/contact-2.png" alt="">
                                    </div>
                                    <div class="info-box">
                                        <h5 class="title">Phone No</h5>
                                        <p><a href="tel:+91 {{ sellerdetails($shopid)->phone }}">+91 {{ sellerdetails($shopid)->phone }}</a></p>
                                        
                                    </div>
                                </div>
                                <div class="single-contact m-0">
                                    <div class="icon-box">
                                        <img src="<?php echo WEBSITE_URL;?>frontassets/theme4/assets/images/icons/contact-3.png" alt="">
                                    </div>
                                    <div class="info-box">
                                        <h5 class="title">Email/Web</h5>
                                        <p><a href="mailto:{{ sellerdetails($shopid)->email }}">{{ sellerdetails($shopid)->email }}</a></p>
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact Area End -->
        
@endsection