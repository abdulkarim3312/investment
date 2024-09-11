@extends('frontend.master')

@section('title')
    Home
@endsection

@section('styles')
    <style>

    </style>
@endsection

@section('content')
<section class="slider-one">
    <div class="slider-one_icon" style="background-image:url({{ asset('frontend/assets/images/main-slider/star.png') }})"></div>
    <div class="main-slider swiper-container">
        <div class="swiper-wrapper">
            <!-- Slide -->
            <div class="swiper-slide">
                <div class="auto-container">
                    <div class="row clearfix">
                        <div class="slider-one_content-column col-xl-8 col-lg-12 col-md-12 col-sm-12">
                            <div class="slider-one_content-outer">
                                <h1 class="slider-one_heading">{{ $sliderTitle->title ?? '' }}</h1>
                                <div class="slider-one_options d-flex align-items-center flex-wrap">
                                    <!-- Button Box -->
                                    <div class="slider_button-box">
                                        <a href="{{ route('contact_page') }}" class="theme-btn btn-style-two">
                                            <span class="btn-wrap">
                                                <span class="text-one">Discover More</span>
                                                <span class="text-two">Discover More</span>
                                            </span>
                                        </a>
                                    </div>
                                    <!-- Expert Box -->
                                    <div class="slider-one_experts">
                                        30+ <span>Our Expert Advisor</span>
                                    </div>
                                    <!-- Team Box -->
                                    <ul class="banner-one_team">
                                        <li><img src="{{ asset('frontend/assets/images/main-slider/team-1.jpg') }}" alt="" /></li>
                                        <li><img src="{{ asset('frontend/assets/images/main-slider/team-2.png') }}" alt="" /></li>
                                        <li><img src="{{ asset('frontend/assets/images/main-slider/team-3.png') }}" alt="" /></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="slider-one_image-column col-xl-4 col-lg-12 col-md-12 col-sm-12">
                            <div class="slider-one_image-outer">
                                <div class="slider-one_image">
                                    <img src="{{ asset('frontend/assets/images/main-slider/image-1.png') }}" alt="" />
                                </div>
                                <div class="slider-one_circle">
                                    <img src="{{ asset('frontend/assets/images/main-slider/circle_image.png') }}" alt="" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide -->
            <div class="swiper-slide">
                <div class="auto-container">
                    <div class="row clearfix">
                        <div class="slider-one_content-column col-xl-8 col-lg-12 col-md-12 col-sm-12">
                            <div class="slider-one_content-outer">
                                <h1 class="slider-one_heading">{{ $sliderTitle->title ?? '' }}</h1>
                                <div class="slider-one_options d-flex align-items-center flex-wrap">
                                    <!-- Button Box -->
                                    <div class="slider_button-box">
                                        <a href="contact.html" class="theme-btn btn-style-two">
                                            <span class="btn-wrap">
                                                <span class="text-one">Discover More</span>
                                                <span class="text-two">Discover More</span>
                                            </span>
                                        </a>
                                    </div>
                                    <!-- Expert Box -->
                                    <div class="slider-one_experts">
                                        30+ <span>Our Expert Advisor</span>
                                    </div>
                                    <!-- Team Box -->
                                    <ul class="banner-one_team">
                                        <li><img src="{{ asset('frontend/assets/images/main-slider/team-1.jpg') }}" alt="" /></li>
                                        <li><img src="{{ asset('frontend/assets/images/main-slider/team-2.png') }}" alt="" /></li>
                                        <li><img src="{{ asset('frontend/assets/images/main-slider/team-3.png') }}" alt="" /></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="slider-one_image-column col-xl-4 col-lg-12 col-md-12 col-sm-12">
                            <div class="slider-one_image-outer">
                                <div class="slider-one_image">
                                    <img src="{{ asset('frontend/assets/images/main-slider/image-1.png') }}" alt="" />
                                </div>
                                <div class="slider-one_circle">
                                    <img src="{{ asset('frontend/assets/images/main-slider/circle_image.png') }}" alt="" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide -->
            <div class="swiper-slide">
                <div class="auto-container">
                    <div class="row clearfix">
                        <div class="slider-one_content-column col-xl-8 col-lg-12 col-md-12 col-sm-12">
                            <div class="slider-one_content-outer">
                                <h1 class="slider-one_heading">{{ $sliderTitle->title ?? '' }}</h1>
                                <div class="slider-one_options d-flex align-items-center flex-wrap">
                                    <!-- Button Box -->
                                    <div class="slider_button-box">
                                        <a href="contact.html" class="theme-btn btn-style-two">
                                            <span class="btn-wrap">
                                                <span class="text-one">Discover More</span>
                                                <span class="text-two">Discover More</span>
                                            </span>
                                        </a>
                                    </div>
                                    <!-- Expert Box -->
                                    <div class="slider-one_experts">
                                        30+ <span>Our Expert Advisor</span>
                                    </div>
                                    <!-- Team Box -->
                                    <ul class="banner-one_team">
                                        <li><img src="{{ asset('frontend/assets/images/main-slider/team-1.jpg') }}" alt="" /></li>
                                        <li><img src="{{ asset('frontend/assets/images/main-slider/team-2.png') }}" alt="" /></li>
                                        <li><img src="{{ asset('frontend/assets/images/main-slider/team-3.png') }}" alt="" /></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="slider-one_image-column col-xl-4 col-lg-12 col-md-12 col-sm-12">
                            <div class="slider-one_image-outer">
                                <div class="slider-one_image">
                                    <img src="{{ asset('frontend/assets/images/main-slider/image-1.png') }}" alt="" />
                                </div>
                                <div class="slider-one_circle">
                                    <img src="{{ asset('frontend/assets/images/main-slider/circle_image.png') }}" alt="" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- End Main Slider Section -->

<!-- Services One -->
<section class="services-one">
    <div class="auto-container">
        <div class="row clearfix">

            <!-- Service Block One -->
            @if ($services)
                @foreach ($services as $service)
                    <div class="service-block_one col-lg-4 col-md-6 col-sm-12">
                        <div class="service-block_one-inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="service-block_one-icon">
                                <img src="{{ isset($service->icon_image) ? asset('upload/service_image/'.$service->icon_image) : null }}" alt="" />
                            </div>
                            <h4 class="service-block_one-heading"><a href="service-detail.html">{{ $service->title ?? '' }}</a></h4>
                            <div class="service-block_one-text">{{ $service->short_description ?? '' }}</div>
                            <div class="d-flex justify-content-between align-items-center flex-wrap">
                                <a class="service-block_one-more" href="service-detail.html">Explore more <i class="flaticon-arrow"></i></a>
                                <div class="service-block_one-number">0{{ $loop->iteration }}</div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
</section>
<!-- End Services One -->

<!-- About One -->
<section class="about-one">
    <div class="auto-container">
        <div class="row clearfix">

            <!-- Content Column -->
            <div class="about-one_content-column col-lg-7 col-md-12 col-sm-12">
                <div class="about-one_content-outer">
                    <!-- Sec Title -->
                    <div class="sec-title">
                        <div class="sec-title_title">about us</div>
                        <h2 class="sec-title_heading">{{ $aboutUs->title ?? '' }}</h2>
                        <div class="sec-title_text">{{ $aboutUs->short_title ?? '' }}</div>
                    </div>

                    <!-- Skills -->
                    <div class="default-skills">

                        <!-- Skill Item -->
                        <div class="default-skill-item">
                            <div class="default-count-box count-box"><span class="count-text" data-speed="2000" data-stop="75">0</span>% Consulting Success</div>
                            <div class="default-skill-bar">
                                <div class="default-bar-inner">
                                    <div class="default-bar progress-line" data-width="75">
                                        <div class="default-skill-percentage"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- About List -->
                    <ul class="about-one_list">
                        <li><i class="flaticon-right-1"></i>Check out Business Planning Options</li>
                        <li><i class="flaticon-right-1"></i>Balancing ethical responsibilities with commercial realities</li>
                    </ul>

                    <!-- Button Box -->
                    <div class="about-one_button">
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
            <div class="about-one_image-column col-lg-5 col-md-12 col-sm-12">
                <div class="about-one_image-outer">
                    <div class="about-one_image">
                        <img src="{{ isset($aboutUs->image) ? asset('upload/about_us/'.$aboutUs->image) : null }}" alt="" />
                        <div class="about-one_counter">
                            <img src="{{ asset('frontend/assets/images/icons/about-one_counter.png') }}" alt="" />
                            <div class="about-one_counter-content">
                                <div class="about-one_counter count-box"><span class="count-text" data-speed="2000" data-stop="130">0</span>k+ <i>Consulting Services</i></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- End About One -->

<!-- Experiance One -->
<section class="experiance-one">
    <div class="auto-container">
        <div class="inner-container">
            <div class="row clearfix">

                <!-- Left Column -->
                <div class="left-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="pattern-layer" style="background-image:url(assets/images/background/cta-pattern.png)"></div>
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

<!-- Faq One -->
<section class="faq-one">
    <div class="auto-container">
        <div class="row clearfix">

            <!-- Content Column -->
            <div class="faq-one_content-column col-lg-5 col-md-12 col-sm-12">
                <div class="faq-one_content-outer">
                    <!-- Sec Title -->
                    <div class="sec-title">
                        <div class="sec-title_title">We can help</div>
                        <h2 class="sec-title_heading">{{ $faqHeader->title ?? '' }}</h2>
                        <div class="sec-title_text">{{ $faqHeader->short_title ?? '' }}</div>
                    </div>
                    <div class="faq-one_image">
                        <img src="{{ isset($faqHeader->image) ? asset('upload/faq_header/'.$faqHeader->image) : null }}" alt="" />
                    </div>
                </div>
            </div>

            <!-- Image Column -->
            <div class="faq-one_accordian-column col-lg-7 col-md-12 col-sm-12">
                <div class="faq-one_accordian-outer">

                    <!-- Accordion Box -->
                    <ul class="accordion-box">

                        @foreach ($faqs as $faq)
                            <li class="accordion block active-block">
                                <div class="acc-btn active"><div class="icon-outer"><span class="icon icon-plus fa fa-plus"></span> <span class="icon icon-minus fa fa-minus"></span></div>{{ $faq->question ?? ''}}</div>
                                <div class="acc-content current">
                                    <div class="content">
                                        <div class="text">{{ $faq->answer ?? ''}}</div>
                                    </div>
                                </div>
                            </li>
                        @endforeach

                        <!-- Block -->
                        <li class="accordion block">
                            <div class="acc-btn"><div class="icon-outer"><span class="icon icon-plus fa fa-plus"></span> <span class="icon icon-minus fa fa-minus"></span></div>What are the challenges of Financial Inclusion?</div>
                            <div class="acc-content">
                                <div class="content">
                                    <div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</div>
                                </div>
                            </div>
                        </li>

                        <!-- Block -->
                        <li class="accordion block">
                            <div class="acc-btn"><div class="icon-outer"><span class="icon icon-plus fa fa-plus"></span> <span class="icon icon-minus fa fa-minus"></span></div>What is investment planning?</div>
                            <div class="acc-content">
                                <div class="content">
                                    <div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</div>
                                </div>
                            </div>
                        </li>

                        <!-- Block -->
                        <li class="accordion block">
                            <div class="acc-btn"><div class="icon-outer"><span class="icon icon-plus fa fa-plus"></span> <span class="icon icon-minus fa fa-minus"></span></div>Who can I talk to with questions about my bill?</div>
                            <div class="acc-content">
                                <div class="content">
                                    <div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</div>
                                </div>
                            </div>
                        </li>

                        <!-- Block -->
                        <li class="accordion block">
                            <div class="acc-btn"><div class="icon-outer"><span class="icon icon-plus fa fa-plus"></span> <span class="icon icon-minus fa fa-minus"></span></div>How can I pay my portion of my bill?</div>
                            <div class="acc-content">
                                <div class="content">
                                    <div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</div>
                                </div>
                            </div>
                        </li>

                    </ul>

                </div>
            </div>

        </div>
    </div>
</section>
<!-- End Faq One -->

<!-- News One -->
<section class="news-one">
    <div class="auto-container">
        <!-- Sec Title -->
        <div class="sec-title centered">
            <div class="sec-title_title">Our Blog update</div>
            <h2 class="sec-title_heading">Latest Updates To <br> Our Insight Stories</h2>
        </div>

        <div class="two-item_carousel swiper-container">
            <div class="swiper-wrapper">

                <!-- Slide -->
                <div class="swiper-slide">
                    <!-- News Block One -->
                    <div class="news-block_one">
                        <div class="news-block_one-inner">
                            <div class="d-flex justify-content-between align-items-center flex-wrap">
                                <ul class="news-block_one-meta">
                                    <li><a href="#">15 Nov 2024</a></li>
                                    <li><a href="#">Finance</a></li>
                                </ul>
                                <div class="news-block_one-share">
                                    <i class="flaticon-share-2"></i>
                                </div>
                            </div>
                            <h4 class="news-block_one-heading"><a href="news-detail.html">Contingent Convertible Bonds Since the Recent Banking Crisis</a></h4>
                            <div class="news-block_one-text">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit sed quia consequuntur magni dolores eos qui dolor sit amet consect </div>
                            <div class="d-flex justify-content-between align-items-center flex-wrap">
                                <a class="news-block_one-more" href="news-detail.html"><span>more</span><i class="flaticon-arrow"></i></a>
                                <div class="news-block_one-author">
                                    <div class="news-block_one-author_image">
                                        <img src="{{ asset('frontend/assets/images/resource/author-3.png') }}" alt="" />
                                    </div>
                                    <span>Post By</span>
                                    Rashed Kobir
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide -->
                <div class="swiper-slide">
                    <!-- News Block One -->
                    <div class="news-block_one">
                        <div class="news-block_one-inner">
                            <div class="d-flex justify-content-between align-items-center flex-wrap">
                                <ul class="news-block_one-meta">
                                    <li><a href="#">15 Nov 2024</a></li>
                                    <li><a href="#">Finance</a></li>
                                </ul>
                                <div class="news-block_one-share">
                                    <i class="flaticon-share-2"></i>
                                </div>
                            </div>
                            <h4 class="news-block_one-heading"><a href="news-detail.html">Core Fixed Income Investing in a Challenging Bond Market</a></h4>
                            <div class="news-block_one-text">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit sed quia consequuntur magni dolores eos qui dolor sit amet consect </div>
                            <div class="d-flex justify-content-between align-items-center flex-wrap">
                                <a class="news-block_one-more" href="news-detail.html"><span>more</span><i class="flaticon-arrow"></i></a>
                                <div class="news-block_one-author">
                                    <div class="news-block_one-author_image">
                                        <img src="{{ asset('frontend/assets/images/resource/author-3.png') }}" alt="" />
                                    </div>
                                    <span>Post By</span>
                                    Rashed Kobir
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- End News One -->

<!-- Newsletter One -->
<section class="newsletter-one">
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
