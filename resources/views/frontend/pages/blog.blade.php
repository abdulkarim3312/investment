@extends('frontend.master')

@section('title')
    Blog
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
        <h2>Blog Grid</h2>
        <ul class="bread-crumb clearfix">
            <li><a href="index.html">Home</a></li>
            <li>Blog Grid</li>
        </ul>
    </div>
</section>
<!-- End Page Title -->

<!-- News Three -->
<section class="news-three">
    <div class="news-three_icons" style="background-image:url({{ asset('frontend/assets/images/background/news-three_icons.png') }})"></div>
    <div class="auto-container">
        <div class="row clearfix">

            <!-- News Block One -->
            @if ($blogs)
                @foreach ($blogs as $blog)
                    <div class="news-block_two col-xl-4 col-lg-6 col-md-6 col-sm-12">
                        <div class="news-block_two-inner">
                            <div class="d-flex justify-content-between align-items-center flex-wrap">
                                <ul class="news-block_two-meta">
                                    <li><a href="#">{{ \Carbon\Carbon::parse($blog ? $blog->updated_at: '')->format('d F Y')}}</a></li>
                                </ul>
                                <div class="news-block_two-share">
                                    <i class="flaticon-share-2"></i>
                                </div>
                            </div>
                            <h4 class="news-block_two-heading"><a href="news-detail.html">{{ $blog->title ?? '' }}</a></h4>
                            <div class="news-block_two-text">{{ $blog->short_description ?? '' }}</div>
                            <div class="d-flex justify-content-between align-items-center flex-wrap">
                                <span>Post By:</span>
                                    <b>{{ $blog->user_name ?? '' }}</b>

                                <a class="news-block_two-more" href="{{ route('blog_details', $blog->slug) }}"><span>more</span><i class="flaticon-arrow"></i></a>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
</section>
<!-- End News Three -->

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
