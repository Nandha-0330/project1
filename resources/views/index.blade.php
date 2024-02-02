@extends('layouts.app')
@section('pageTitle', 'Social Media Likes')
@section('content')
<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center">
    <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">
        <div class="row justify-content-center">
            <div class="col-xl-7 col-lg-9 text-center">
                <img width="500px;" src="img/prime-likes-logo.png" alt="" class="img-fluid" style="padding-bottom:25px;">
                <h1>Jeranyt - Boost Your Social Media Presence</h1>
                <br>
                <h2 style="font-weight:bold;">With Jeranyt, you can receive unlimited likes, followers, and views on platforms like Instagram, TikTok, Twitter, Threads, and Facebook.</h2>
            </div>
        </div>
        <div class="text-center">
            <a href="#pricing" class="btn-get-started scrollto">Click here to boost your social media presence</a>
        </div>
    </div>
</section>

    <!-- End Hero -->
    <main id="main"></main>
    <!-- End #main -->
    <!-- ======= Services Section ======= -->


    <section id="pricing" class="pricing">
        <div class="container">
            <div class="section-title">
                <h2>Enhance Your Social Media Presence Today:</h2>
                <strong>Unlimited likes, views, and followers for your favorite platforms: Instagram, TikTok, Twitter, Threads, and Facebook.<br>
                Choose your service below and start growing your social media presence.</strong>
            </div>
            <div class="box">
                <h3>Explore Our Services:</h3>
                <div class="btn-wrap">
                    <a href="#Instagram" class="btn-buy" style="margin:5px;">Explore Instagram Services</a>
                    <!-- <a href="#TikTok" class="btn-buy" style="margin:5px;">Explore TikTok Services</a>
                    <a href="#Twitter" class="btn-buy" style="margin:5px;">Explore Twitter Services</a> -->
                    <a href="#Facebook" class="btn-buy" style="margin:5px;">Explore Facebook Services</a>
                    <a href="#Youtube" class="btn-buy" style="margin:5px;">Explore Youtube Services</a>
                    <!-- <a href="#Threads" class="btn-buy" style="margin:5px;">Explore Threads Services</a> -->
                </div>
            </div>
            <br>
            <br>
            <div id="Instagram" class="row">
                <h3 style="font-weight:bold;padding-bottom:5x;">
                    <i class="bi bi-instagram"></i>Supercharge Your Instagram Presence! <i class="bi bi-instagram"></i>
                </h3>
                <p>Elevate your Instagram game with our exclusive services tailored just for you. Ready to skyrocket your likes, followers, and views? Choose your boost below:</p>
                <br>
                <br>
                <div class="col-lg-4 col-md-6">
                    <div class="box">
                        <h3>Boost Your Likes</h3>
                        <h4>
                            <sup>₹</sup>39+
                        </h4>
                        <ul>
                            <li>🚀 Instant Likes Delivery</li>
                            <li>🔒 No Password Required</li>
                            <li>🌟 High Quality Likes</li>
                            <li>🔄 Unlimited Use</li>
                            <strong>
                                <li>✅ Completely Safe</li>
                            </strong>
                        </ul>
                        <div class="btn-wrap">
                            <a href="{{ url('/instagram?value=likes') }}" class="btn-buy">Get More Likes Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="box">
                        <h3>Skyrocket Your Followers</h3>
                        <h4>
                            <sup>₹</sup>39+
                        </h4>
                        <ul>
                            <li>🚀 Instant Followers Delivery</li>
                            <li>🔒 No Password Required</li>
                            <li>🌟 High Quality Followers</li>
                            <li>🔄 Unlimited Use</li>
                            <strong>
                                <li>✅ Completely Safe</li>
                            </strong>
                        </ul>
                        <div class="btn-wrap">
                            <a href="{{ url('/instagram?value=followers') }}" class="btn-buy">Get More Followers Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="box">
                        <h3>Boost Your Views</h3>
                        <h4>
                            <sup>₹</sup>39+
                        </h4>
                        <ul>
                            <li>🚀 Instant Views Delivery</li>
                            <li>🔒 No Password Required</li>
                            <li>🌟 High Quality Views</li>
                            <li>🔄 Unlimited Use</li>
                            <strong>
                                <li>✅ Completely Safe</li>
                            </strong>
                        </ul>
                        <div class="btn-wrap">
                            <a href="{{ url('/instagram?value=views') }}" class="btn-buy">Get More Views Now</a>
                        </div>
                    </div>
                </div>
            </div>
            <div id="Facebook" class="row">
                <h3 style="font-weight:bold;padding-top:40px;padding-bottom:5px;">
                    <i class="bi bi-facebook"></i>Facebook Likes and Followers <i class="bi bi-facebook"></i>
                </h3>
                <p>Looking to grow your likes and engagement on Facebook? Select one of the options below:</p>
                <br>
                <br>
                <div class="col-lg-4 col-md-6">
                    <div class="box">
                    <h3>Skyrocket Your Followers</h3>
                        <h4>
                            <sup>₹</sup>90+
                        </h4>
                        <ul>
                            <li>🚀 Instant Followers Delivery</li>
                            <li>🔒 No Password Required</li>
                            <li>🌟 High Quality Followers</li>
                            <li>🔄 Unlimited Use</li>
                            <strong>
                             <li>✅ Completely Safe</li>
                            </strong>
                        </ul>
                        <div class="btn-wrap">
                            <a href="{{ url('/facebook?value=followers') }}" class="btn-buy">Get Facebook Followers</a>
                        </div>
                    </div>
                </div>
            </div>
            <div id="Youtube" class="row">
                <h3 style="font-weight:bold;padding-top:40px;padding-bottom:5px;">
                    <i class="bi bi-youtube"></i>Youtube <i class="bi bi-youtube"></i>
                </h3>
                <p>Looking to grow your Subscribers and engagement on Youtube? Select one of the options below:</p>
                <br>
                <br>
                <div class="col-lg-4 col-md-6">
                    <div class="box">
                        <h3>Skyrocket Your Subscribers</h3>
                        <h4>
                            <sup>₹</sup>590+
                        </h4>
                        <ul>
                            <li>🚀 Instant Subscribers Delivery</li>
                            <li>🔒 No Password Required</li>
                            <li>🌟 High Quality Subscribers</li>
                            <li>🔄 Unlimited Use</li>
                            <strong>
                             <li>✅ Completely Safe</li>
                            </strong>
                        </ul>
                        <div class="btn-wrap">
                            <a href="{{ url('/youtube?value=subscribers') }}" class="btn-buy">Get Youtube Subscribers</a>
                        </div>
                    </div>
                </div>
                
            </div>
            
        </div>
    </section>
    <!-- End Pricing Section -->


@endsection
