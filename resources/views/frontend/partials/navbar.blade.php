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
                            <div class="logo"><a href="{{ route('home') }}"><img src="{{ $site_logo }}" alt="" title=""></a></div>
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
                                    </li>
                                    <li><a href="{{ route('about_page') }}">About us</a>
                                    </li>
                                    <li><a href="{{ route('service_page') }}">service</a>
                                    </li>
                                    <li><a href="{{ route('blog_page') }}">Blog</a>

                                    </li>
                                    <li style="float: left;"><a href="{{ route('contact_page') }}">Contact</a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>

                    <!-- Main Menu End-->
                    <div class="outer-box d-flex align-items-center flex-wrap">

                        <!-- Login Box -->

                        <!-- Button Box -->
                        <div class="header_button-box">
                            <a href="{{ route('contact_page') }}" class="theme-btn btn-style-one">
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
            <div class="nav-logo"><a href="{{ route('home') }}"><img src="{{ $site_logo }}" alt="" title=""></a></div>
            <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
        </nav>
    </div>
    <!-- End Mobile Menu -->

</header>
