<!DOCTYPE html>
<html>

<!-- Mirrored from themazine.com/html/Iconsl/inconsl/projects.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 30 Aug 2024 14:12:38 GMT -->
<head>
<meta charset="utf-8">
<title>Inconsl Consulting Business HTML-5 Template | Our Projects</title>
<!-- Stylesheets -->
<link href="{{ asset('frontend/assets/css/bootstrap.css') }}" rel="stylesheet">
<link href="{{ asset('frontend/assets/css/style.css') }}" rel="stylesheet">
<link href="{{ asset('frontend/assets/css/responsive.css') }}" rel="stylesheet">

<!-- Color Switcher Mockup -->
<link href="{{ asset('frontend/assets/css/color-switcher-design.css') }}" rel="stylesheet">

<link href="https://fonts.googleapis.com/css2?family=Krona+One&amp;display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200..800&amp;display=swap" rel="stylesheet">

<link rel="shortcut icon" href="{{ asset('frontend/assets/images/favicon.png') }}" type="image/x-icon">
<link rel="icon" href="{{ asset('frontend/assets/images/favicon.png') }}" type="image/x-icon">

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

	<!-- Main Header -->
	<header class="main-header header-style-one">

		<!-- Header Top -->
		<div class="header-top">
			<div class="auto-container">
				<div class="inner-container">
					<div class="d-flex justify-content-between align-items-center flex-wrap">

						<div class="header-top_text"><span class="icon"><img src="{{ asset('frontend/assets/images/icons/icon-1.png') }}" alt="" /></span>A leading provider of Investment consulting services</div>

						<div class="right-box d-flex align-items-center flex-wrap">
							<!-- Info List -->
							<ul class="header-top_list">
								<li>
									<span class="icon flaticon-mail"></span>
									<a href="mailto:investsupport@gmail.com"> investsupport@gmail.com</a>
								</li>
								<li>
									<span class="icon flaticon-phone-call"></span>
									<a href="tel:+88-12-450-56-22"> (+88 ) 12 .450.56.22</a>
								</li>
							</ul>
						</div>

					</div>
				</div>
			</div>
		</div>

		<!-- Header Upper -->
		<div class="header-upper">
			<div class="auto-container">
				<div class="inner-container">
					<div class="d-flex justify-content-between align-items-center flex-wrap">
						<div class="nav-outer d-flex align-items-center flex-wrap">
							<!-- Logo Box -->
							<div class="logo-box">
								<div class="logo"><a href="index.html"><img src="{{ asset('frontend/assets/images/logo.svg') }}" alt="" title=""></a></div>
							</div>

							<!-- Main Menu -->
							<nav class="main-menu navbar-expand-md">
								<div class="navbar-header">
									<!-- Toggle Button -->
									<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
									</button>
								</div>

								<div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
									<ul class="navigation clearfix">
										<li><a href="{{ route('home') }}">Home</a>
											{{-- <ul>
												<li><a href="index.html">Home page 01</a></li>
												<li><a href="index-2.html">Home page 02</a></li>
												<li><a href="index-3.html">Home page 03</a></li>
												<li><a href="index-dark.html">Dark Version</a></li>
												<li class="dropdown"><a href="#">Header Styles</a>
													<ul>
														<li><a href="index.html">Header 01</a></li>
														<li><a href="index-2.html">Header 02</a></li>
														<li><a href="index-3.html">Header 03</a></li>
														<li><a href="index-4.html">Header 04</a></li>
													</ul>
												</li>
											</ul> --}}
										</li>
										<li><a href="{{ route('about_us') }}">About us</a>
											{{-- <ul>
												<li><a href="about.html">About us</a></li>
												<li><a href="faq.html">Faq's</a></li>
												<li><a href="price.html">price</a></li>
												<li><a href="team.html">team</a></li>
												<li><a href="register.html">register</a></li>
											</ul> --}}
										</li>
										<li><a href="{{ route('service_page') }}">service</a>
											{{-- <ul>
												<li><a href="services.html">services</a></li>
												<li><a href="service-detail.html">service detail</a></li>
											</ul> --}}
										</li>
                                        <li><a href="{{ route('project_page') }}">projects</a>
                                        </li>
                                        <li><a href="{{ route('blog_page') }}">Blog</a>
                                        </li>
										<li><a href="{{ route('contact_page') }}">Contact</a></li>
									</ul>
								</div>
							</nav>
						</div>

						<!-- Main Menu End-->
						<div class="outer-box d-flex align-items-center flex-wrap">

							<!-- Login Box -->
							<div class="login-box"><a href="register.html"><span class="icon flaticon-user-1"></span>Login</a></div>

							<!-- Button Box -->
							<div class="header_button-box">
								<a href="register.html" class="theme-btn btn-style-one">
									<span class="btn-wrap">
										<span class="text-one">Get Consult</span>
										<span class="text-two">Get Consult</span>
									</span>
								</a>
							</div>

							<!-- Mobile Navigation Toggler -->
							<div class="mobile-nav-toggler"><span class="icon flaticon-menu"></span></div>
						</div>

					</div>
				</div>
			</div>
		</div>
		<!--End Header Upper-->

		<!-- Mobile Menu  -->
		<div class="mobile-menu">
			<div class="menu-backdrop"></div>
			<div class="close-btn"><span class="icon flaticon-close-1"></span></div>

			<nav class="menu-box">
				<div class="nav-logo"><a href="index.html"><img src="{{ asset('frontend/assets/images/mobile-logo.png') }}" alt="" title=""></a></div>
				<div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
			</nav>
		</div>
		<!-- End Mobile Menu -->

	</header>
	<!-- End Main Header -->

	<!-- Page Title -->
    <section class="page-title">
		<div class="page-title_shapes" style="background-image:url({{ asset('frontend/assets/images/background/page-title_bg.png') }})"></div>
		<div class="page-title_bg" style="background-image:url({{ asset('frontend/assets/images/background/page-title_bg.jpg') }})"></div>
		<div class="page-title_icons" style="background-image:url({{ asset('frontend/assets/images/background/page-title_icons.png') }})"></div>
		<div class="auto-container">
			<h2>Our Projects</h2>
			<ul class="bread-crumb clearfix">
				<li><a href="index.html">Home</a></li>
				<li>Our Projects</li>
			</ul>
        </div>
    </section>
    <!-- End Page Title -->

	<!-- Project Block One -->
	<section class="project-one" style="background-image:url({{ asset('frontend/assets/images/background/project-one_bg.jpg') }})">
		<div class="project-one_icons" style="background-image:url({{ asset('frontend/assets/images/background/project-one_icons.png') }})"></div>
		<div class="auto-container">
			<div class="row clearfix">

				<!-- Case Block One -->
				<div class="case-block_two col-lg-6 col-md-6 col-sm-12">
					<div class="case-block_two-inner">
						<div class="case-block_two-image">
							<img src="{{ asset('frontend/assets/images/gallery/1.jpg') }}" alt="" />
							<div class="case-block_two-content">
								<div class="d-flex justify-content-between align-items-center flex-wrap">
									<div class="case-block_two-info">
										<div class="case-block_two-title">investment</div>
										<h4 class="case-block_two-heading"><a href="projects-detail.html">investment management</a></h4>
									</div>
									<a class="case-block_two-arrow" href="projects-detail.html"><i class="flaticon-up-right-arrow"></i></a>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Case Block One -->
				<div class="case-block_two col-lg-6 col-md-6 col-sm-12">
					<div class="case-block_two-inner">
						<div class="case-block_two-image">
							<img src="{{ asset('frontend/assets/images/gallery/2.jpg') }}" alt="" />
							<div class="case-block_two-content">
								<div class="d-flex justify-content-between align-items-center flex-wrap">
									<div class="case-block_two-info">
										<div class="case-block_two-title">Branding</div>
										<h4 class="case-block_two-heading"><a href="projects-detail.html">Case Studies & Branding</a></h4>
									</div>
									<a class="case-block_two-arrow" href="projects-detail.html"><i class="flaticon-up-right-arrow"></i></a>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Case Block One -->
				<div class="case-block_two col-lg-6 col-md-6 col-sm-12">
					<div class="case-block_two-inner">
						<div class="case-block_two-image">
							<img src="{{ asset('frontend/assets/images/gallery/3.jpg') }}" alt="" />
							<div class="case-block_two-content">
								<div class="d-flex justify-content-between align-items-center flex-wrap">
									<div class="case-block_two-info">
										<div class="case-block_two-title">Investment</div>
										<h4 class="case-block_two-heading"><a href="projects-detail.html">Return assumptions</a></h4>
									</div>
									<a class="case-block_two-arrow" href="projects-detail.html"><i class="flaticon-up-right-arrow"></i></a>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Case Block One -->
				<div class="case-block_two col-lg-6 col-md-6 col-sm-12">
					<div class="case-block_two-inner">
						<div class="case-block_two-image">
							<img src="{{ asset('frontend/assets/images/gallery/4.jpg') }}" alt="" />
							<div class="case-block_two-content">
								<div class="d-flex justify-content-between align-items-center flex-wrap">
									<div class="case-block_two-info">
										<div class="case-block_two-title">investment</div>
										<h4 class="case-block_two-heading"><a href="projects-detail.html">Investment selection</a></h4>
									</div>
									<a class="case-block_two-arrow" href="projects-detail.html"><i class="flaticon-up-right-arrow"></i></a>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Case Block One -->
				<div class="case-block_two col-lg-6 col-md-6 col-sm-12">
					<div class="case-block_two-inner">
						<div class="case-block_two-image">
							<img src="{{ asset('frontend/assets/images/gallery/5.jpg') }}" alt="" />
							<div class="case-block_two-content">
								<div class="d-flex justify-content-between align-items-center flex-wrap">
									<div class="case-block_two-info">
										<div class="case-block_two-title">fund</div>
										<h4 class="case-block_two-heading"><a href="projects-detail.html">Sustainable Investments</a></h4>
									</div>
									<a class="case-block_two-arrow" href="projects-detail.html"><i class="flaticon-up-right-arrow"></i></a>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Case Block One -->
				<div class="case-block_two col-lg-6 col-md-6 col-sm-12">
					<div class="case-block_two-inner">
						<div class="case-block_two-image">
							<img src="{{ asset('frontend/assets/images/gallery/6.jpg') }}" alt="" />
							<div class="case-block_two-content">
								<div class="d-flex justify-content-between align-items-center flex-wrap">
									<div class="case-block_two-info">
										<div class="case-block_two-title">Taxes</div>
										<h4 class="case-block_two-heading"><a href="projects-detail.html">Alternative Investments</a></h4>
									</div>
									<a class="case-block_two-arrow" href="projects-detail.html"><i class="flaticon-up-right-arrow"></i></a>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>

			<!-- Button Box -->
			<div class="project-one_button text-center">
				<div class="project-one_button-inner" style="background-image:url({{ asset('frontend/assets/images/background/project-one_bg.jpg') }})">
					<a href="projects-detail.html" class="theme-btn btn-style-one">
						<span class="btn-wrap">
							<span class="text-one">View More Projects</span>
							<span class="text-two">View More Projects</span>
						</span>
					</a>
				</div>
			</div>

		</div>
	</section>
	<!-- End Project Block One -->

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

	<!-- Footer Style -->
	<footer class="main-footer style-two alternate" style="background-image: url(assets/images/background/footer-bg_two.jpg)">
		<div class="footer-icon-six" style="background-image: url(assets/images/icons/footer-icon-6.png)"></div>
		<div class="footer-icon-seven" style="background-image: url(assets/images/icons/footer-icon-7.png)"></div>
		<div class="footer-icon-eight" style="background-image: url(assets/images/icons/footer-icon-4.png)"></div>
		<div class="auto-container">
			<div class="inner-container">
				<!-- Widgets Section -->
				<div class="widgets-section">
					<div class="row clearfix">

						<!-- Big Column -->
						<div class="big-column col-lg-6 col-md-12 col-sm-12">
							<div class="row clearfix">

								<!-- Footer Column -->
								<div class="footer-column col-lg-7 col-md-6 col-sm-12">
									<div class="footer-widget logo-widget">
										<div class="footer-logo"><a href="index.html"><img src="assets/images/logo.svg" alt="" title=""></a></div>
										<div class="main-footer_text">We are 300+ specialists across investment strategy and business.</div>

										<div class="newsletter-box style-two">
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

								<!-- Footer Column -->
								<div class="footer-column col-lg-5 col-md-6 col-sm-12">
									<div class="footer-widget links-widget">
										<h5 class="footer-title">Links</h5>
										<ul class="footer-list">
											<li><a href="#">Pricing Plan</a></li>
											<li><a href="#">About us</a></li>
											<li><a href="#">Strategy</a></li>
											<li><a href="#">Privacy Policy</a></li>
										</ul>
									</div>
								</div>

							</div>
						</div>

						<!-- Big Column -->
						<div class="big-column col-lg-6 col-md-12 col-sm-12">
							<div class="row clearfix">

								<!-- Footer Column -->
								<div class="footer-column col-lg-6 col-md-6 col-sm-12">
									<div class="footer-widget links-widget">
										<h5 class="footer-title">Company</h5>
										<ul class="footer-list">
											<li><a href="#">Faq’s</a></li>
											<li><a href="#">Meet our team</a></li>
											<li><a href="#">Case stories</a></li>
											<li><a href="#">Latest news</a></li>
											<li><a href="#">Contact</a></li>
											<li><a href="#">Careers</a></li>
										</ul>
									</div>
								</div>

								<!-- Footer Column -->
								<div class="footer-column col-lg-6 col-md-6 col-sm-12">
									<div class="footer-widget newsletter-widget">
										<h5 class="footer-title">Our Address</h5>
										<div class="main-footer_text">500 E Las Olas Blvd, Suite 319 Fort Lauderdale, FL 33301</div>
										<div class="address_info">
											oursitename@gmail.com <br>
											<a href="tel:+88-10.11.44.574">(+88) 10.11.44.574</a>
										</div>
									</div>
								</div>

							</div>
						</div>

					</div>
				</div>
			</div>

			<div class="footer-bottom">
				<div class="d-flex justify-content-between align-items-center flex-wrap">
					<div class="copyright">copyright &copy; 2024 All rights reserved</div>
					<ul class="footer-nav">
						<li><a href="#">Terms of use</a></li>
						<li><a href="#">cookies</a></li>
						<li><a href="#">Privacy Policy</a></li>
					</ul>
				</div>
			</div>

		</div>
	</footer>
	<!-- End Footer Style -->

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

<script src="{{ asset('frontend/assets/js/jquery.js') }}"></script>
<script src="{{ asset('frontend/assets/js/popper.min.js') }}"></script>
<script src="{{ asset('frontend/assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('frontend/assets/js/appear.js') }}"></script>
<script src="{{ asset('frontend/assets/js/parallax.min.js') }}"></script>
<script src="{{ asset('frontend/assets/js/tilt.jquery.min.js') }}"></script>
<script src="{{ asset('frontend/assets/js/jquery.paroller.min.js') }}"></script>
<script src="{{ asset('frontend/assets/js/wow.js') }}"></script>
<script src="{{ asset('frontend/assets/js/swiper.min.js') }}"></script>
<script src="{{ asset('frontend/assets/js/backtotop.js') }}"></script>
<script src="{{ asset('frontend/assets/js/odometer.js') }}"></script>
<script src="{{ asset('frontend/assets/js/parallax-scroll.js') }}"></script>

<script src="{{ asset('frontend/assets/js/gsap.min.js') }}"></script>
<script src="{{ asset('frontend/assets/js/SplitText.min.js') }}"></script>
<script src="{{ asset('frontend/assets/js/ScrollTrigger.min.js') }}"></script>
<script src="{{ asset('frontend/assets/js/ScrollToPlugin.min.js') }}"></script>
<script src="{{ asset('frontend/assets/js/ScrollSmoother.min.js') }}"></script>

<script src="{{ asset('frontend/assets/js/validate.js') }}"></script>
<script src="{{ asset('frontend/assets/js/magnific-popup.min.js') }}"></script>
<script src="{{ asset('frontend/assets/js/nav-tool.js') }}"></script>
<script src="{{ asset('frontend/assets/js/jquery-ui.js') }}"></script>
<script src="{{ asset('frontend/assets/js/jquery.marquee.min.js') }}"></script>
<script src="{{ asset('frontend/assets/js/script.js') }}"></script>
<script src="{{ asset('frontend/assets/js/color-settings.js') }}"></script>

<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->

</body>

<!-- Mirrored from themazine.com/html/Iconsl/inconsl/projects.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 30 Aug 2024 14:12:51 GMT -->
</html>
