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

<!-- About One -->
<section class="about-one mt-5">
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
                                <h5 class="team-block_one-heading"><a href="#">{{ $team->name ?? '' }}</a></h5>
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
