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
        <h2>Blog Details</h2>
        <ul class="bread-crumb clearfix">
            <li><a href="index.html">Home</a></li>
            <li>Blog Details</li>
        </ul>
    </div>
</section>


<section>
    <div class="sidebar-page-container style-two">
        <div class="service-detail_icons" style="background-image:url({{ asset('frontend/assets/images/background/service-detail_icons.png') }})"></div>
        <div class="auto-container">
            <div class="row clearfix">

                <!-- Content Side -->
                <div class="content-side col-lg-8 col-md-12 col-sm-12">
                    <div class="news-detail">
                        <div class="news-detail_inner">
                            <div class="news-detail_image">
                                <ul class="news-detail_meta">
                                    <li>{{ \Carbon\Carbon::parse($blog ? $blog->updated_at: '')->format('d F Y')}}</li>
                                </ul>
                                <img src="{{ isset($blog->image) ? asset('upload/blog_image/'. $blog->image) : null }}" alt="" />
                            </div>
                            <div class="news-detail_content">
                                <h4 class="news-detail_heading">{{ $blog->title ?? '' }}</h4>
                                <div class="info-box">
                                    <div class="d-flex justify-content-between align-items-center flex-wrap">
                                        <span>Post By:<b>  {{ $blog->user_name ?? '' }}</b></span>
                                    </div>
                                </div>
                                <h5>{{ $blog->short_description ?? '' }}</h5>
                                <h4 class="news-detail_subheading">leadership skills</h4>
                                <p>{!! $blog->description ?? '' !!}</p>
                                <div class="row clearfix">
                                    <div class="column col-lg-6 col-md-6 col-sm-12">
                                        <ul class="news-detail_list">
                                            <li><i class="flaticon-check-mark"></i>Leadership & productivity</li>
                                            <li><i class="flaticon-check-mark"></i>Lorem Ipsum available, but the majo <br> have suffered alteration</li>
                                        </ul>
                                    </div>
                                    <div class="column col-lg-6 col-md-6 col-sm-12">
                                        <ul class="news-detail_list">
                                            <li><i class="flaticon-check-mark"></i>Project & changedelivery</li>
                                            <li><i class="flaticon-check-mark"></i>Leadership, training & development</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Sidebar Side -->
                <div class="sidebar-side col-lg-4 col-md-12 col-sm-12">
                    <aside class="sidebar">

                        <!-- Services Widget -->
                        <div class="sidebar-widget services-widget">
                            <div class="widget-content">
                                <h6 class="sidebar-title">Services</h6>
                                <ul class="service-list">
                                    @foreach ($services as  $key => $service)
                                        @if($key == 0)
                                            <li class="active"><a href="#">{{ $service->title ?? ''  }}<span>0{{ $loop->iteration }}</span></a></li>
                                        @else
                                            <li><a href="#">{{ $service->title ?? ''  }}<span>0{{ $loop->iteration }}</span></a></li>
                                        @endif
                                    @endforeach
                                </ul>
                            </div>
                        </div>

                        <!-- Post Widget -->
                        <div class="sidebar-widget post-widget">
                            <div class="widget-content">
                                <h6 class="sidebar-title">Latest Post</h6>
                                @foreach ($blogs as $blog)
                                    <div class="post">
                                        <div class="thumb"><a href="blog-detail.html"><img src="{{ isset($blog->image) ? asset('upload/blog_image/'. $blog->image) : null }}" alt=""></a></div>
                                        <div class="post-date">{{ \Carbon\Carbon::parse($blog ? $blog->updated_at: '')->format('d F, Y')}}</div>
                                        <h6><a href="{{ route('blog_details', $blog->slug) }}">{{ $blog->title ?? '' }}</a></h6>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <!-- Support Widget -->
                        <div class="sidebar-widget support-widget">
                            <div class="widget-content">
                                <h4 class="support-widget_title">Growing with Smart Ideas</h4>
                                <div class="support-widget_text">Contact an expert Advanced Business analytics</div>
                                <div class="support-widget_button">
                                    <a href="{{ route('contact_page') }}" class="theme-btn">Quick Support</a>
                                </div>
                            </div>
                        </div>

                    </aside>
                </div>

            </div>
        </div>
    </div>
</section>

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
