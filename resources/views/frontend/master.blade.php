<!DOCTYPE html>
<html>

<!-- Mirrored from themazine.com/html/Iconsl/inconsl/index-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 30 Aug 2024 14:07:32 GMT -->
<head>
<meta charset="utf-8">
<title>@yield('title') - {{ env('APP_NAME') }}</title>
<!-- Stylesheets -->

@include('frontend.partials.styles')
@yield('styles')
<style>
    #navbar .navigation  li {
        float: right !important;
    }
</style>
<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

</head>

<body>

<div class="page-wrapper">

	<!-- Preloader -->
    {{-- <div class="preloader"></div> --}}
	<!-- End Preloader -->

	<!-- Cursor -->
	<div class="cursor"></div>
	<div class="cursor-follower"></div>
	<!-- Cursor End -->

	@include('frontend.partials.navbar')

	@yield('content')

	@include('frontend.partials.footer')

	<!-- Options Palate -->
	<div class="color-palate">
		<div class="color-trigger">
			<i class="fa fa-gear"></i>
		</div>
		<div class="color-palate-head">
			<h6>Choose Options</h6>
		</div>
		<h6>RTL Version</h6>
		<ul class="rtl-version option-box"> <li class="rtl">RTL Version</li> <li>LTR Version</li> </ul>
		<h6>Boxed Version</h6>
		<ul class="box-version option-box"> <li class="box">Boxed</li> <li>Full width</li></ul>
		<h6>Want Sticky Header</h6>
		<ul class="header-version option-box"> <li class="box">No</li> <li>Yes</li></ul>
	</div>
	<!-- End Options Palate -->

</div>
<!-- End PageWrapper -->

<div class="progress-wrap">
	<svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
		<path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"/>
	</svg>
</div>

@include('frontend.partials.scripts')
@yield('scripts')
</body>
</html>
