@extends('frontend.master')

@section('title')
    Service
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
        <h2>Our Services</h2>
        <ul class="bread-crumb clearfix">
            <li><a href="index.html">Home</a></li>
            <li>Our Services</li>
        </ul>
    </div>
</section>
<!-- End Page Title -->


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
                                <img src="{{ isset($service->icon_image) ? asset('upload/service_image/'. $service->icon_image) : null }}" alt="" />
                            </div>
                            <h4 class="service-block_one-heading"><a href="service-detail.html">{{ $service->title ?? '' }}</a></h4>
                            <div class="service-block_one-text">{{ $service->short_description ?? '' }}</div>
                            <div class="d-flex justify-content-between align-items-center flex-wrap">
                                <a class="service-block_one-more" href="{{ route('service_details', $service->slug) }}">Explore more <i class="flaticon-arrow"></i></a>
                                <div class="service-block_one-number">01</div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
</section>
<!-- End Services One -->


<!-- Counter One -->
<section class="counter-one">
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
<!-- End Counter One -->

<!-- CTA One -->
<section class="cta-one style-two">
    <div class="cta-one_bg" style="background-image:url({{ asset('frontend/assets/images/background/cta-bg-1.jpg') }})"></div>
    <div class="cta-one_shadow" style="background-image:url({{ asset('frontend/assets/images/background/shadow-1.png') }})"></div>
    <div class="cta-one_shadow-two" style="background-image:url({{ asset('frontend/assets/images/background/shadow-2.png') }})"></div>
    <div class="auto-container">
        <a href="https://www.youtube.com/watch?v=kxPCFljwJws" class="lightbox-video cta-one_play"><span><img src="assets/images/icons/play.png" alt="" /></span></a>
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
<!-- End Newsletter One -->
@endsection

@section('scripts')
{{-- <script>
$(document).ready((function(){$(".homeSlider").slick({autoplay:!0,autoplaySpeed:1e3,dots:!0,infinite:!0,speed:1200,slidesToShow:1,slidesToScroll:1,prevArrow:!1,nextArrow:!1})})),$(document).ready((function(){$(".productSlider").slick({autoplay:!0,autoplaySpeed:1e3,dots:!0,infinite:!0,speed:600,slidesToShow:4,slidesToScroll:1,prevArrow:!1,nextArrow:!1,responsive:[{breakpoint:1024,settings:{slidesToShow:3,slidesToScroll:3,infinite:!0,dots:!0}},{breakpoint:600,settings:{slidesToShow:2,slidesToScroll:2}},{breakpoint:480,settings:{slidesToShow:1,slidesToScroll:1}}]})}));
</script> --}}
@endsection
