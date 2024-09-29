@extends('frontend.master')

@section('title')
    Agreement Details
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
        <h2>Agreement Details</h2>
        <ul class="bread-crumb clearfix">
            <li><a href="{{ route('home') }}">Home</a></li>
            <li>Agreement Details</li>
        </ul>
    </div>
</section>


<div class="sidebar-page-container left-sidebar">
    <div class="service-detail_icons" style="background-image:url(assets/images/background/service-detail_icons.png)"></div>
    <div class="auto-container">
        <div class="row clearfix">

            <!-- Content Side -->
            <div class="content-side col-lg-10 col-md-12 col-sm-12 mx-auto">
                <div class="service-detail">
                    <div class="inner-box">
                        <div class="service-detail_main-image">
                            <img src="{{ isset($agreement->image) ? asset('upload/agreement_image/'. $agreement->image) : null }}" alt="" />
                        </div>
                        <h6 class="service-detail_title">{{ $agreement->category->name ?? '' }}</h6>
                        <div class="row clearfix">
                            {!! $agreement->description ?? '' !!}
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
