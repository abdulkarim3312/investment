@extends('frontend.master')

@section('title')
    About Us
@endsection

@section('styles')
    <style>

    </style>
@endsection

@section('content')
<section class="page-title">
    <div class="page-title_shapes" style="background-image:url({{ asset('frontend/assets/images/background/page-title_bg.png') }})"></div>
    <div class="page-title_bg" style="background-image:url({{ asset('frontend/assets/images/background/page-title_bg.jpg') }})"></div>
    <div class="page-title_icons" style="background-image:url({{ asset('frontend/assets/images/background/page-title_icons.png') }})"></div>
    <div class="auto-container">
        <h2>Service Detail</h2>
        <ul class="bread-crumb clearfix">
            <li><a href="index.html">Home</a></li>
            <li>Service Detail</li>
        </ul>
    </div>
</section>


<div class="sidebar-page-container left-sidebar">
    <div class="service-detail_icons" style="background-image:url(assets/images/background/service-detail_icons.png)"></div>
    <div class="auto-container">
        <div class="row clearfix">

            <!-- Sidebar Side -->
            <div class="sidebar-side col-lg-4 col-md-12 col-sm-12">
                <aside class="sidebar">

                    <!-- Services Widget -->
                    <div class="sidebar-widget services-widget">
                        <div class="widget-content">
                            <h6 class="sidebar-title">Services</h6>
                            <ul class="service-list">
                                <li class="active"><a href="#">Investment Consulting</a></li>
                                <li><a href="#">Risk Management</a></li>
                                <li><a href="#">Advisory investment</a></li>
                                <li><a href="#">Financial intermediary</a></li>
                                <li><a href="#">Digital Marketing</a></li>
                                <li><a href="#">Policy Statements</a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- About Widget -->
                    <div class="sidebar-widget about-widget">
                        <div class="widget-content" style="background-image:url(assets/images/background/about-widget_pattern.png)">
                            <div class="author_image">
                                <img src="assets/images/resource/author-6.png" alt ="" />
                            </div>
                            <h6 class="about-widget_title">Wiliam Adam</h6>
                            <div class="about-widget_designation">Founder Agency</div>
                            <div class="about-widget_text">“Great News Nam libero tempore, cum soluta nobis est eligendi optio cumque quo minus id quod maxime”</div>
                        </div>
                    </div>

                    <!-- Support Widget -->
                    <div class="sidebar-widget support-widget">
                        <div class="widget-content">
                            <h4 class="support-widget_title">Growing with Smart Ideas</h4>
                            <div class="support-widget_text">Contact an expert Advanced Business analytics</div>
                            <div class="support-widget_button">
                                <a href="#" class="theme-btn">Quick Support</a>
                            </div>
                        </div>
                    </div>

                </aside>
            </div>

            <!-- Content Side -->
            <div class="content-side col-lg-8 col-md-12 col-sm-12">
                <div class="service-detail">
                    <div class="inner-box">
                        <div class="service-detail_main-image">
                            <img src="assets/images/resource/services.jpg" alt="" />
                        </div>
                        <h2 class="service-detail_title">Investment Consulting</h2>
                        <p>Financial management is crucial to business success, but not everyone knows where to start or how to proceed. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. </p>
                        <div class="row clearfix">
                            <!-- Column -->
                            <div class="column col-lg-6 col-md-6 col-sm-12">
                                <h3 class="service-detail_subtitle">We Know the Markets</h3>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered on alteration in some form strategy & planning</p>
                                <div class="service-detail_steps">
                                    <!-- Step Block One -->
                                    <div class="step-block_one">
                                        <div class="step-block_one-inner">
                                            <div class="step-block_one-number">01</div>
                                            <h6 class="step-block_one-title">Policy Statements</h6>
                                            <p>Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur</p>
                                        </div>
                                    </div>
                                    <!-- Step Block One -->
                                    <div class="step-block_one">
                                        <div class="step-block_one-inner">
                                            <div class="step-block_one-number">02</div>
                                            <h6 class="step-block_one-title">Market Fund Reserch</h6>
                                            <p>Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Column -->
                            <div class="column col-lg-6 col-md-6 col-sm-12">
                                <div class="service-detail_image-two">
                                    <img src="assets/images/resource/services-1.jpg" alt="" />
                                </div>
                            </div>
                        </div>

                        <!-- Content -->
                        <div class="service-detail_content">
                            <div class="row clearfix">
                                <!-- Column -->
                                <div class="column col-lg-7 col-md-6 col-sm-12">
                                    <h4>Performance</h4>
                                    <p>Lorem ipsum dolor sit amet consect etur adipiscing elit sed do eiusmod</p>
                                    <ul class="service-detail_list">
                                        <li><i class="flaticon-check-mark-1"></i>Investment selection</li>
                                        <li><i class="flaticon-check-mark-1"></i>Business consulting and Individual equity digital advisory</li>
                                    </ul>
                                </div>
                                <!-- Column -->
                                <div class="column col-lg-5 col-md-6 col-sm-12">
                                    <h4>Challange</h4>
                                    <p>Lorem ipsum dolor sit amet consect etur adipiscing elit sed do eiusmod</p>
                                    <ul class="service-detail_list">
                                        <li><i class="flaticon-check-mark-1"></i>Multi-manager asset allotment</li>
                                        <li><i class="flaticon-check-mark-1"></i>Benefits of working with fort pitt capital group</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- End Content -->

                        <div class="service-detail_ratio-outer">
                            <div class="service-detail_ratio">
                                <div class="service-detail_ratio-inner">
                                    <div class="service-detail_ratio-percent">90%</div>
                                    <h4>Success Ratio</h4>
                                    <p>Do you dream of owning your own business? You’re not alone Can I cover my business debts with my current cash flow</p>
                                </div>
                            </div>
                            <div class="service-detail_ratio">
                                <div class="service-detail_ratio-inner">
                                    <div class="service-detail_ratio-percent">5%</div>
                                    <h4>Fail ratio</h4>
                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- Newsletter One -->
<section class="newsletter-one style-two">
    <div class="auto-container">
        <div class="inner-container">
            <div class="row clearfix">
                <!-- Title Column -->
                <div class="newsletter-one_title-column col-lg-7 col-md-12 col-sm-12">
                    <div class="newsletter-one_title-outer">
                        <div class="newsletter-one_title">Lets Work Together</div>
                        <h3 class="newsletter-one_heading">Subsrcibe for our upcoming <br> latest articles</h3>
                    </div>
                </div>
                <!-- Form Column -->
                <div class="newsletter-one_form-column col-lg-5 col-md-12 col-sm-12">
                    <div class="newsletter-one_form-outer">
                        <div class="newsletter-box">
                            <form method="post" action="https://themazine.com/html/Iconsl/inconsl/contact.html">
                                <div class="form-group">
                                    <label>Email Address</label>
                                    <input type="email" name="search-field" value="" placeholder="name145@gmail.com" required>
                                    <button type="submit" class="theme-btn">Subscribe <i class="flaticon-arrow"></i></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Newsletter One -->
@endsection

@section('scripts')
{{-- <script>
$(document).ready((function(){$(".homeSlider").slick({autoplay:!0,autoplaySpeed:1e3,dots:!0,infinite:!0,speed:1200,slidesToShow:1,slidesToScroll:1,prevArrow:!1,nextArrow:!1})})),$(document).ready((function(){$(".productSlider").slick({autoplay:!0,autoplaySpeed:1e3,dots:!0,infinite:!0,speed:600,slidesToShow:4,slidesToScroll:1,prevArrow:!1,nextArrow:!1,responsive:[{breakpoint:1024,settings:{slidesToShow:3,slidesToScroll:3,infinite:!0,dots:!0}},{breakpoint:600,settings:{slidesToShow:2,slidesToScroll:2}},{breakpoint:480,settings:{slidesToShow:1,slidesToScroll:1}}]})}));
</script> --}}
@endsection
