@extends('frontend.master')

@section('title')
    About Us
@endsection

@section('styles')
    <style>

    </style>
@endsection

@section('content')
<!-- Page Title -->
<section class="page-title">
    <div class="page-title_shapes" style="background-image:url({{ asset('frontend/assets/images/background/page-title_bg.png') }})"></div>
    <div class="page-title_bg" style="background-image:url({{ asset('frontend/assets/images/background/page-title_bg.jpg') }})"></div>
    <div class="page-title_icons" style="background-image:url({{ asset('frontend/assets/images/background/page-title_icons.png') }})"></div>
    <div class="auto-container">
        <h2>About Us</h2>
        <ul class="bread-crumb clearfix">
            <li><a href="index.html">Home</a></li>
            <li>About</li>
        </ul>
    </div>
</section>
<!-- End Page Title -->

<!-- Experiance One -->
<section class="experiance-one">
    <div class="auto-container">
        <div class="inner-container">
            <div class="row clearfix">

                <!-- Left Column -->
                <div class="left-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="pattern-layer" style="background-image:url({{ asset('frontend/assets/images/background/cta-pattern.png') }})"></div>
                        <h3>30 yers+</h3>
                        <div class="text">We’ve experience more than 30+ years with success.</div>
                    </div>
                </div>

                <!-- Right Column -->
                <div class="right-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <h3>$2.4b+</h3>
                        <div class="text">Total trading volume over time</div>
                        <a class="arrow" href="#">
                            <i class="flaticon-up-right-arrow"></i>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- End Experiance One -->

<!-- Choose One -->
<section class="choose-one">
    <div class="auto-container">
        <div class="row clearfix">

            <!-- Content Column -->
            <div class="choose-one_image-column col-lg-6 col-md-12 col-sm-12">
                <div class="choose-one_image-outer">
                    <div class="choose-one_image">
                        <img src="{{ asset('frontend/assets/images/resource/choose.jpg') }}" alt="" />
                    </div>
                    <div class="choose-one_rating d-flex align-items-center">
                        <div class="choose-one_star">5.0 <i class="fa fa-star"></i></div>
                        <div>
                            <h3>clutch</h3>
                            <div class="rating-text">Top digital marketing agencies in the world</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Content Column -->
            <div class="choose-one_content-column col-lg-6 col-md-12 col-sm-12">
                <div class="choose-one_content-outer">
                    <!-- Sec Title -->
                    <div class="sec-title">
                        <div class="sec-title_title">Why choose us?</div>
                        <h2 class="sec-title_heading">Brand & Design Team Inspiring Every Pixel</h2>
                        <div class="sec-title_text">There are many variations of passages of in free market to available, but the majority have suffered alteration words nor again is there anyone who loves or pursues or desirest</div>
                    </div>

                    <!-- Content Box -->
                    <div class="choose-one_feature-content">
                        <!-- Choose Block One -->
                        <div class="choose-block_one">
                            <h4>Our Mission</h4>
                            We help our clients succeed by creating brand identities digital experiences.
                        </div>
                        <!-- Choose Block One -->
                        <div class="choose-block_one">
                            <h4>Our Vision</h4>
                            We help our clients succeed by creating brand identities digital experiences.
                        </div>
                    </div>

                    <!-- Button Box -->
                    <div class="choose-one_button">
                        <a href="contact.html" class="theme-btn btn-style-one">
                            <span class="btn-wrap">
                                <span class="text-one">About agency</span>
                                <span class="text-two">About agency</span>
                            </span>
                        </a>
                    </div>

                    <!-- Growth Box -->
                    <div class="growth-box" style="background-image:url({{ asset('frontend/assets/images/background/growth-bg.jpg') }})">
                        <div class="growth-box_inner d-flex justify-content-between align-items-center flex-wrap">
                        <div class="growth-box_icon" style="background-image:url({{ asset('frontend/assets/images/icons/growth-icon.png') }})"></div>
                            <div>
                                <h3>Growth</h3>
                                <div class="text">Our Digital Strategists will help you in <br> building your digital solutions right.</div>
                            </div>
                            <div class="growth-arrow_box">
                                <a class="arrow" href="#"><i class="flaticon-arrow-2"></i></a>
                                Drop us a line
                            </div>
                        </div>
                    </div>
                    <!-- End Growth Box -->

                </div>
            </div>

        </div>
    </div>
</section>
<!-- End Choose One -->

<!-- Counter One / Style Three -->
<section class="counter-one style-three">
    <div class="auto-container">
        <div class="row clearfix">

            <!-- Counter Column -->
            <div class="counter-block_one col-xl-3 col-lg-6 col-md-6 col-sm-6">
                <div class="counter-block_one-inner wow flipInX" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="counter-block_one-counter"><span class="odometer" data-count="125"></span>+</div>
                    <div class="counter-block_one-text">Active partner</div>
                </div>
            </div>

            <!-- Counter Column -->
            <div class="counter-block_one col-xl-3 col-lg-6 col-md-6 col-sm-6">
                <div class="counter-block_one-inner wow flipInX" data-wow-delay="150ms" data-wow-duration="1500ms">
                    <div class="counter-block_one-counter">$<span class="odometer" data-count="4"></span>%</div>
                    <div class="counter-block_one-text">Low interest rate</div>
                </div>
            </div>

            <!-- Counter Column -->
            <div class="counter-block_one col-xl-3 col-lg-6 col-md-6 col-sm-6">
                <div class="counter-block_one-inner wow flipInX" data-wow-delay="300ms" data-wow-duration="1500ms">
                    <div class="counter-block_one-counter"><span class="odometer" data-count="30"></span>+</div>
                    <div class="counter-block_one-text">Digital award</div>
                </div>
            </div>

            <!-- Counter Column -->
            <div class="counter-block_one col-xl-3 col-lg-6 col-md-6 col-sm-6">
                <div class="counter-block_one-inner wow flipInX" data-wow-delay="450ms" data-wow-duration="1500ms">
                    <div class="counter-block_one-counter"><span class="odometer" data-count="97"></span>%</div>
                    <div class="counter-block_one-text">Design-to-code success</div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- End Counter One / Style Three -->

<!-- Team One -->
<section class="team-one">
    <div class="team-one_icon" style="background-image:url({{ asset('frontend/assets/images/icons/icon-13.png') }})"></div>
    <div class="auto-container">
        <!-- Sec Title -->
        <div class="sec-title d-flex justify-content-between align-items-center flex-wrap">
            <div class="left-box">
                <div class="sec-title_title text-center">Our Talent Team</div>
                <h4 class="sec-title_heading text-center">Meet Our Professional <br> Talent Team</h4>
            </div>
            <div class="right-box">
                <a class="team-one_review" href="#">View All Team</a>
            </div>
        </div>

        <div class="row clearfix">

            <!-- Team Block One -->
            @if ($teams)
                @foreach ($teams as $team)
                    <div class="team-block_one col-lg-4 col-md-6 col-sm-12">
                        <div class="team-block_one-inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="team-block_one-image">
                                <img src="{{ isset($team->image) ? asset('upload/team_image/'. $team->image) : null }}" alt= ""/ >
                            </div>
                            <div class="team-block_one-content">
                                <h5 class="team-block_one-heading"><a href="team-detail.html">{{ $team->name ?? '' }}</a></h5>
                                <div class="team-block_one-designation">{{ $team->designation ?? '' }}</div>
                                <div class="team-block_one-rating">
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                </div>
                                <div class="team-block_one-letter">{{ substr($team->name, 0, 1) }}</div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>

    </div>
</section>
<!-- End Team One -->


<!-- About Two -->
<section class="about-two style-two">
    <div class="auto-container">
        <div class="row clearfix">

            <!-- Content Column -->
            <div class="about-two_content-column col-lg-7 col-md-12 col-sm-12">
                <div class="about-two_content-outer">
                    <!-- Sec Title -->
                    <div class="sec-title">
                        <div class="sec-title_title">about us</div>
                        <h2 class="sec-title_heading">We Design Exclusive Digital Products</h2>
                        <div class="sec-title_text">There are many variations of passages of in free market to available, but the majority have suffered alteration words nor again is there anyone who loves or pursues or desirest</div>
                    </div>

                    <!-- About List -->
                    <ul class="about-two_list">
                        <li><i><img src="{{ asset('frontend/assets/images/icons/check.svg') }}" alt="" /></i>We know that good design means good business.</li>
                        <li><i><img src="{{ asset('frontend/assets/images/icons/check.svg') }}" alt="" /></i>Check out Business Planning Options</li>
                        <li><i><img src="{{ asset('frontend/assets/images/icons/check.svg') }}" alt="" /></i>Balancing ethical responsibilities with commercial realities</li>
                    </ul>

                    <!-- Button Box -->
                    <div class="about-two_button">
                        <a href="contact.html" class="theme-btn btn-style-one">
                            <span class="btn-wrap">
                                <span class="text-one">About agency</span>
                                <span class="text-two">About agency</span>
                            </span>
                        </a>
                    </div>

                </div>
            </div>

            <!-- Image Column -->
            <div class="about-two_image-column col-lg-5 col-md-12 col-sm-12">
                <div class="about-two_image-outer">
                    <div class="about-two_image">
                        <img src="{{ asset('frontend/assets/images/resource/about-2.jpg') }}" alt="" />
                    </div>
                    <div class="mission-box">
                        <h3 class="mission-box_title">Our Mission</h3>
                        <div class="mission-box_text">Tell us about yours and start executing it today with a trusted software development service provider.</div>
                        <div class="mission-box-drop d-flex justify-content-between align-items-center flex-wrap">
                            <a class="mission-box_line" href="#">Drop us a line</a>
                            <a class="mission-box_arrow" href="#">
                                <i class="flaticon-arrow-2"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- End About Two -->

<!-- Testimonial One -->
<section class="testimonial-one style-two">
    <div class="testimonial-one_icon" style="background-image:url({{ asset('frontend/assets/images/icons/icon-6.png') }})"></div>
    <div class="testimonial-one_icon-two" style="background-image:url({{ asset('frontend/assets/images/icons/icon-7.png') }})"></div>
    <div class="auto-container">
        <!-- Sec Title -->
        <div class="sec-title d-flex justify-content-between align-items-center flex-wrap">
            <div class="left-box">
                <div class="sec-title_title">TESTIMONIAL</div>
                <h2 class="sec-title_heading">Client Review What <br> People Say</h2>
            </div>
            <div class="right-box">
                <a class="testimonial-one_review" href="#">View All Client Review</a>
            </div>
        </div>

        <div class="two-item_carousel swiper-container">
            <div class="swiper-wrapper">

                <!-- Slide -->
                <div class="swiper-slide">
                    <!-- Testimonial Block One -->
                    <div class="testimonial-block_one">
                        <div class="testimonial-block_one-inner">
                            <div class="d-flex justify-content-between align-items-center flex-wrap">
                                <div class="testimonial-block_one-quote">
                                    <i class="flaticon-right-quote"></i>
                                </div>
                                <div class="testimonial-block_one-title">Great agency</div>
                            </div>
                            <div class="testimonial-block_one-text">I have received financial advice from incinsl Investment Planners since 2022, and my experience has been excellent.</div>
                            <div class="d-flex justify-content-between align-items-center flex-wrap">
                                <div class="testimonial-block_one-author">
                                    <div class="testimonial-block_one-author_image">
                                        <img src="{{ asset('frontend/assets/images/resource/author-1.png') }}" alt="" />
                                    </div>
                                    Golan Adam
                                    <span>Investment consultant</span>
                                </div>
                                <div class="testimonial-block_one-rating">
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide -->
                <div class="swiper-slide">
                    <!-- Testimonial Block One -->
                    <div class="testimonial-block_one">
                        <div class="testimonial-block_one-inner">
                            <div class="d-flex justify-content-between align-items-center flex-wrap">
                                <div class="testimonial-block_one-quote">
                                    <i class="flaticon-right-quote"></i>
                                </div>
                                <div class="testimonial-block_one-title">Awesome agency services</div>
                            </div>
                            <div class="testimonial-block_one-text">I have received financial advice from incinsl Investment Planners since 2022, and my experience has been excellent.</div>
                            <div class="d-flex justify-content-between align-items-center flex-wrap">
                                <div class="testimonial-block_one-author">
                                    <div class="testimonial-block_one-author_image">
                                        <img src="{{ asset('frontend/assets/images/resource/author-2.png') }}" alt="" />
                                    </div>
                                    Mahfuz Riad
                                    <span>Investment consultant</span>
                                </div>
                                <div class="testimonial-block_one-rating">
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide -->
                <div class="swiper-slide">
                    <!-- Testimonial Block One -->
                    <div class="testimonial-block_one">
                        <div class="testimonial-block_one-inner">
                            <div class="d-flex justify-content-between align-items-center flex-wrap">
                                <div class="testimonial-block_one-quote">
                                    <i class="flaticon-right-quote"></i>
                                </div>
                                <div class="testimonial-block_one-title">Great agency</div>
                            </div>
                            <div class="testimonial-block_one-text">I have received financial advice from incinsl Investment Planners since 2022, and my experience has been excellent.</div>
                            <div class="d-flex justify-content-between align-items-center flex-wrap">
                                <div class="testimonial-block_one-author">
                                    <div class="testimonial-block_one-author_image">
                                        <img src="{{ asset('frontend/assets/images/resource/author-1.png') }}" alt="" />
                                    </div>
                                    Golan Adam
                                    <span>Investment consultant</span>
                                </div>
                                <div class="testimonial-block_one-rating">
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
</section>
<!-- End Testimonial One -->

<!-- CTA One -->
<section class="cta-one style-two">
    <div class="cta-one_bg" style="background-image:url({{ asset('frontend/assets/images/background/cta-bg-1.jpg') }})"></div>
    <div class="cta-one_shadow" style="background-image:url({{ asset('frontend/assets/images/background/shadow-1.png') }})"></div>
    <div class="cta-one_shadow-two" style="background-image:url({{ asset('frontend/assets/images/background/shadow-2.png') }})"></div>
    <div class="auto-container">
        <a href="https://www.youtube.com/watch?v=kxPCFljwJws" class="lightbox-video cta-one_play"><span><img src="{{ asset('frontend/') }}images/icons/play.png" alt="" /></span></a>
    </div>
</section>
<!-- End CTA One -->

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
@endsection

@section('scripts')
{{-- <script>
$(document).ready((function(){$(".homeSlider").slick({autoplay:!0,autoplaySpeed:1e3,dots:!0,infinite:!0,speed:1200,slidesToShow:1,slidesToScroll:1,prevArrow:!1,nextArrow:!1})})),$(document).ready((function(){$(".productSlider").slick({autoplay:!0,autoplaySpeed:1e3,dots:!0,infinite:!0,speed:600,slidesToShow:4,slidesToScroll:1,prevArrow:!1,nextArrow:!1,responsive:[{breakpoint:1024,settings:{slidesToShow:3,slidesToScroll:3,infinite:!0,dots:!0}},{breakpoint:600,settings:{slidesToShow:2,slidesToScroll:2}},{breakpoint:480,settings:{slidesToShow:1,slidesToScroll:1}}]})}));
</script> --}}
@endsection
