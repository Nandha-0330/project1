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
                            <a href="{{ url('/instagram_likes?value=likes') }}" class="btn-buy">Get Instagram Likes</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="box">
                        <h3>Instagram Followers</h3>
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
                            <a href="{{ url('/instagram_likes?value=followers') }}" class="btn-buy">Get Instagram Followers</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="box">
                        <h3>Instagram Views</h3>
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
                            <a href=" -instagram-views.html" class="btn-buy">Get Instagram Views</a>
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
    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div class="container">
            <div class="section-title">
                <h2>About DEMO </h2>
                <p>DEMO  has been designed from the ground up to enable anyone to get as many social media followers, likes and views as they want, for  . </p>
            </div>
            <div class="row content">
                <div class="col-lg-6">
                    <p> Are you tired of trying to get more likes, followers and views on social media without having any luck? <strong>Well look no further</strong>. With <strong>
                            <a href="index.html">DEMO </a>
                        </strong>, you are able to get as many as you require, for  , to help you increase your social media profile's engagement and reach. </p>
                    <ul>
                        <li>
                            <i class="ri-check-double-line"></i> Fast,   and unlimited social media likes, followers and views.
                        </li>
                        <li>
                            <i class="ri-check-double-line"></i> No password required, ever.
                        </li>
                        <li>
                            <i class="ri-check-double-line"></i> Instant delivery with high quality results.
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0">
                    <p>
                        <strong>We know how hard it can be to grow your presence on social media. </strong>
                        <br> I'm sure all of us have worked hard to create stunning content for our audience, spent time researching the perfect hashtags, only to be left with low follower counts and low numbers of likes and views. <br>
                        <br>
                        <strong> Get the views, likes and followers that you deserve </strong>by using the DEMO  website. This service is <strong>100%  </strong> and allows you to boost your social media presence and engagement to take your account
                        to the next level.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- End About Section -->
    <!-- ======= FAQs Section ======= -->
    <section id="faqs" class="about">
        <div class="container">
            <div class="section-title">
                <h2>Frequently Asked Questions</h2>
            </div>
            <div class="row content">
                <div class="col-lg-6">
                    <strong>Is this service  ?</strong>
                    <p>Yes, the DEMO  service is 100%  .</p>
                    <br>
                    <strong>Is this service safe to use?</strong>
                    <p>Yes, the DEMO  service has been tested by thousands of people without any issues.</p>
                    <br>
                    <strong>Are the likes/follows/views etc from real people?</strong>
                    <p>Yes, the DEMO  service only delivers likes, follows, views etc from real people and accounts. No fakes or bots.</p>
                    <br>
                </div>
                <div class="col-lg-6">
                    <strong>Do you need my password?</strong>
                    <p>No, the DEMO  service will never ask for your social media password for maximum security.</p>
                    <br>
                    <strong>How quickly will I see the results?</strong>
                    <p>Almost instantly. The DEMO  service aims to deliver all social media requests within a couple of minutes, however, during busy periods it could take up to an hour. </p>
                    <br>
                    <strong>How often can I use this service?</strong>
                    <p>As often as you want. The DEMO  service has been designed to allow users to request as many   social media services as they like. </p>
                    <br>
                </div>
            </div>
        </div>
    </section>
    <!-- End FAQs Section -->


@endsection
