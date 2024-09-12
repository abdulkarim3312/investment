@extends('frontend.master')

@section('title')
    Service Details
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
                                @foreach ($services as  $key => $service)
                                    @if($key == 0)
                                        <li class="active"><a href="{{ route('service_details',$service->slug) }}">{{ $service->title ?? ''  }}<span>0{{ $loop->iteration }}</span></a></li>
                                    @else
                                        <li><a href="{{ route('service_details',$service->slug) }}">{{ $service->title ?? ''  }}<span>0{{ $loop->iteration }}</span></a></li>
                                    @endif
                                @endforeach
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
                                <a href="{{ route('contact_page') }}" class="theme-btn">Quick Support</a>
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
                            <img src="{{ isset($serviceItem->image) ? asset('upload/service_image/'. $serviceItem->image) : null }}" alt="" />
                        </div>
                        <h3 class="service-detail_title">{{ $serviceItem->title ?? '' }}</h3>
                        <h5>{{ $serviceItem->short_description ?? '' }}</h5>
                        <div class="row clearfix">
                            {!! $serviceItem->description ?? '' !!}
                        </div>

                        <!-- Content -->
                        {{-- <div class="service-detail_content">
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
                        </div> --}}
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
@endsection
