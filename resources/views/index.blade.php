@extends('layouts.app')
@section('pageTitle', 'Social Media Likes')
@section('content')
<!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">
        <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-9 text-center">
                    <img width="500px;" src="img/prime-likes-logo.png" alt="" class="img-fluid" style="padding-bottom:25px;">
                    <h1>  Social Media Likes, Followers and Views</h1>
                    <br>
                    <h2 style="font-weight:bold;">Using the DEMO  service, you are able to receive unlimited likes, followers and views on website such as Instagram, TikTok, Twitter, Threads and Facebook.</h2>
                </div>
            </div>
            <div class="text-center">
                <a href="#pricing" class="btn-get-started scrollto">Click here to get your social media likes, followers and views</a>
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
                <h2>Get Started with your social media likes, followers and views:</h2>
                <strong>We offer unlimted likes, views and followers for social media platforms such as Instagram, TikTok, Twitter, Threads and Facebook. <br>
                    <br>Select the service you require below to get started. </strong>
            </div>
            <div class="box">
                <h3>Quickly view our services by clicking the buttons below:</h3>
                <div class="btn-wrap">
                    <a href="#Instagram" class="btn-buy" style="margin:5px;">Instagram services</a>
                    <!-- <a href="#TikTok" class="btn-buy" style="margin:5px;">  TikTok services</a>
                    <a href="#Twitter" class="btn-buy" style="margin:5px;">  Twitter services</a> -->
                    <a href="#Facebook" class="btn-buy" style="margin:5px;">Facebook services</a>
                    <!-- <a href="#Threads" class="btn-buy" style="margin:5px;">  Threads services</a> -->
                </div>
            </div>
            <br>
            <br>
            <div id="Instagram" class="row">
                <h3 style="font-weight:bold;padding-bottom:5x;">
                    <i class="bi bi-instagram"></i>Instagram Likes, Followers and Views <i class="bi bi-instagram"></i>
                </h3>
                <p>Looking to grow your followers and engagement on Instagram? Select one of the options below:</p>
                <br>
                <br>
                <div class="col-lg-4 col-md-6">
                    <div class="box">
                        <h3>Instagram Likes</h3>
                        <h4>
                            <sup>₹</sup>59
                        </h4>
                        <ul>
                            <li>✅ Instant Delivery</li>
                            <li>✅ No Password Required</li>
                            <li>✅ High Quality Likes</li>
                            <li>✅ Unlimited Use</li>
                            <strong>
                                <li>✅ Completely  </li>
                            </strong>
                        </ul>
                        <div class="btn-wrap">
                            <a href="{{ url('/instagram?value=likes') }}" class="btn-buy">Get Instagram Likes</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="box">
                        <h3>Instagram Followers</h3>
                        <h4>
                            <sup>₹</sup>59
                        </h4>
                        <ul>
                            <li>✅ Instant Delivery</li>
                            <li>✅ No Password Required</li>
                            <li>✅ High Quality Followers</li>
                            <li>✅ Unlimited Use</li>
                            <strong>
                                <li>✅ Completely  </li>
                            </strong>
                        </ul>
                        <div class="btn-wrap">
                            <a href="{{ url('/instagram?value=followers') }}" class="btn-buy">Get Instagram Followers</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="box">
                        <h3>Instagram Views</h3>
                        <h4>
                            <sup>₹</sup>59
                        </h4>
                        <ul>
                            <li>✅ Instant Delivery</li>
                            <li>✅ No Password Required</li>
                            <li>✅ High Quality Views</li>
                            <li>✅ Unlimited Use</li>
                            <strong>
                                <li>✅ Completely  </li>
                            </strong>
                        </ul>
                        <div class="btn-wrap">
                            <a href="{{ url('/instagram?value=views') }}" class="btn-buy">Get Instagram Views</a>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div id="TikTok" class="row">
                <h3 style="font-weight:bold;padding-top:40px;padding-bottom:5px;">
                    <i class="bi bi-tiktok"></i>   TikTok Likes, Followers and Views <i class="bi bi-tiktok"></i>
                </h3>
                <p>Looking to grow your followers and engagement on TikTok? Select one of the options below:</p>
                <br>
                <br>
                <div class="col-lg-4 col-md-6">
                    <div class="box">
                        <h3>  TikTok Likes</h3>
                        <h4>
                            <sup>$</sup>0
                        </h4>
                        <ul>
                            <li>✅ Instant Delivery</li>
                            <li>✅ No Password Required</li>
                            <li>✅ High Quality Likes</li>
                            <li>✅ Unlimited Use</li>
                            <strong>
                                <li>✅ Completely  </li>
                            </strong>
                        </ul>
                        <div class="btn-wrap">
                            <a href=" -tiktok-likes.html" class="btn-buy">Get   TikTok Likes</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="box">
                        <h3>  TikTok Followers</h3>
                        <h4>
                            <sup>$</sup>0
                        </h4>
                        <ul>
                            <li>✅ Instant Delivery</li>
                            <li>✅ No Password Required</li>
                            <li>✅ High Quality Followers</li>
                            <li>✅ Unlimited Use</li>
                            <strong>
                                <li>✅ Completely  </li>
                            </strong>
                        </ul>
                        <div class="btn-wrap">
                            <a href=" -tiktok-followers.html" class="btn-buy">Get   TikTok Followers</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="box">
                        <h3>  TikTok Views</h3>
                        <h4>
                            <sup>$</sup>0
                        </h4>
                        <ul>
                            <li>✅ Instant Delivery</li>
                            <li>✅ No Password Required</li>
                            <li>✅ High Quality Views</li>
                            <li>✅ Unlimited Use</li>
                            <strong>
                                <li>✅ Completely  </li>
                            </strong>
                        </ul>
                        <div class="btn-wrap">
                            <a href=" -tiktok-views.html" class="btn-buy">Get   TikTok Views</a>
                        </div>
                    </div>
                </div>
            </div> --}}
            {{-- <div id="Twitter" class="row">
                <h3 style="font-weight:bold;padding-top:40px;padding-bottom:5px;">
                    <i class="bi bi-twitter"></i>   Twitter Likes, Followers and Retweets <i class="bi bi-twitter"></i>
                </h3>
                <p>Looking to grow your followers and engagement on Twitter? Select one of the options below:</p>
                <br>
                <br>
                <div class="col-lg-4 col-md-6">
                    <div class="box">
                        <h3>  Twitter Likes</h3>
                        <h4>
                            <sup>$</sup>0
                        </h4>
                        <ul>
                            <li>✅ Instant Delivery</li>
                            <li>✅ No Password Required</li>
                            <li>✅ High Quality Likes</li>
                            <li>✅ Unlimited Use</li>
                            <strong>
                                <li>✅ Completely  </li>
                            </strong>
                        </ul>
                        <div class="btn-wrap">
                            <a href=" -twitter-likes.html" class="btn-buy">Get   Twitter Likes</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="box">
                        <h3>  Twitter Followers</h3>
                        <h4>
                            <sup>$</sup>0
                        </h4>
                        <ul>
                            <li>✅ Instant Delivery</li>
                            <li>✅ No Password Required</li>
                            <li>✅ High Quality Followers</li>
                            <li>✅ Unlimited Use</li>
                            <strong>
                                <li>✅ Completely  </li>
                            </strong>
                        </ul>
                        <div class="btn-wrap">
                            <a href=" -twitter-followers.html" class="btn-buy">Get   Twitter Followers</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="box">
                        <h3>  Twitter Retweets</h3>
                        <h4>
                            <sup>$</sup>0
                        </h4>
                        <ul>
                            <li>✅ Instant Delivery</li>
                            <li>✅ No Password Required</li>
                            <li>✅ High Quality Retweets</li>
                            <li>✅ Unlimited Use</li>
                            <strong>
                                <li>✅ Completely  </li>
                            </strong>
                        </ul>
                        <div class="btn-wrap">
                            <a href=" -twitter-retweets.html" class="btn-buy">Get   Twitter Retweets</a>
                        </div>
                    </div>
                </div>
            </div> --}}
            <div id="Facebook" class="row">
                <h3 style="font-weight:bold;padding-top:40px;padding-bottom:5px;">
                    <i class="bi bi-facebook"></i>Facebook Likes and Followers <i class="bi bi-facebook"></i>
                </h3>
                <p>Looking to grow your likes and engagement on Facebook? Select one of the options below:</p>
                <br>
                <br>
                <div class="col-lg-4 col-md-6">
                    <div class="box">
                        <h3>Facebook Likes</h3>
                        <h4>
                            <sup>$</sup>0
                        </h4>
                        <ul>
                            <li>✅ Instant Delivery</li>
                            <li>✅ No Password Required</li>
                            <li>✅ High Quality Likes</li>
                            <li>✅ Unlimited Use</li>
                            <strong>
                                <li>✅ Completely  </li>
                            </strong>
                        </ul>
                        <div class="btn-wrap">
                            <a href=" -facebook-likes.html" class="btn-buy">Get Facebook Likes</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="box">
                        <h3>Facebook Followers</h3>
                        <h4>
                            <sup>$</sup>0
                        </h4>
                        <ul>
                            <li>✅ Instant Delivery</li>
                            <li>✅ No Password Required</li>
                            <li>✅ High Quality Followers</li>
                            <li>✅ Unlimited Use</li>
                            <strong>
                                <li>✅ Completely  </li>
                            </strong>
                        </ul>
                        <div class="btn-wrap">
                            <a href=" -facebook-followers.html" class="btn-buy">Get Facebook Followers</a>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div id="Threads" class="row">
                <h3 style="font-weight:bold;padding-top:40px;padding-bottom:5px;">
                    <i class="bi bi-instagram"></i>   Threads Likes and Followers <i class="bi bi-instagram"></i>
                </h3>
                <p>Looking to grow your likes and engagement on Threads? Select one of the options below:</p>
                <br>
                <br>
                <div class="col-lg-4 col-md-6">
                    <div class="box">
                        <h3>  Threads Likes</h3>
                        <h4>
                            <sup>$</sup>0
                        </h4>
                        <ul>
                            <li>✅ Instant Delivery</li>
                            <li>✅ No Password Required</li>
                            <li>✅ High Quality Likes</li>
                            <li>✅ Unlimited Use</li>
                            <strong>
                                <li>✅ Completely  </li>
                            </strong>
                        </ul>
                        <div class="btn-wrap">
                            <a href=" -threads-likes.html" class="btn-buy">Get   Threads Likes</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="box">
                        <h3>  Threads Followers</h3>
                        <h4>
                            <sup>$</sup>0
                        </h4>
                        <ul>
                            <li>✅ Instant Delivery</li>
                            <li>✅ No Password Required</li>
                            <li>✅ High Quality Followers</li>
                            <li>✅ Unlimited Use</li>
                            <strong>
                                <li>✅ Completely  </li>
                            </strong>
                        </ul>
                        <div class="btn-wrap">
                            <a href=" -threads-followers.html" class="btn-buy">Get   Threads Followers</a>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
    </section>
    <!-- End Pricing Section -->


@endsection
