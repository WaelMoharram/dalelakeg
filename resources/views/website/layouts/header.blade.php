<!-- Top Bar
    ============================================= -->
<div id="top-bar" class="transparent-topbar">
    <div class="container clearfix">

        <div class="row justify-content-between">
            <div class="col-12 col-md-auto">

                <!-- Top Links
                ============================================= -->
                <div class="top-links">
                    <ul class="top-links-container">
                        <li class="top-links-item"><a href="demo-seo.html">Home</a></li>
                        <li class="top-links-item"><a href="demo-seo-faqs.html">FAQs</a></li>
                        <li class="top-links-item"><a href="demo-seo-contact.html">Contact</a></li>
                        <li class="top-links-item"><a href="#"><img src="{{asset('assets/website')}}/demos/seo/images/flags/eng.png" alt="Lang">Eng</a>
                            <ul class="top-links-sub-menu">
                                <li class="top-links-item"><a href="#"><img src="{{asset('assets/website')}}/demos/seo/images/flags/fre.png" alt="Lang">French</a></li>
                                <li class="top-links-item"><a href="#"><img src="{{asset('assets/website')}}/demos/seo/images/flags/ara.png" alt="Lang">Arabic</a></li>
                                <li class="top-links-item"><a href="#"><img src="{{asset('assets/website')}}/demos/seo/images/flags/tha.png" alt="Lang">Thai</a></li>
                            </ul>
                        </li>
                    </ul>
                </div><!-- .top-links end -->

            </div>

            <div class="col-12 col-md-auto dark">

                <!-- Top Social
                ============================================= -->
                <ul id="top-social">
                    <li><a href="https://facebook.com/semicolonweb" class="si-facebook" target="_blank"><span class="ts-icon"><i class="icon-facebook"></i></span><span class="ts-text">Facebook</span></a></li>
                    <li><a href="https://twitter.com/__semicolon" class="si-twitter" target="_blank"><span class="ts-icon"><i class="icon-twitter"></i></span><span class="ts-text">Twitter</span></a></li>
                    <li><a href="https://youtube.com/semicolonweb" class="si-youtube" target="_blank"><span class="ts-icon"><i class="icon-youtube"></i></span><span class="ts-text">Youtube</span></a></li>
                    <li><a href="https://instagram.com/semicolonweb" class="si-instagram" target="_blank"><span class="ts-icon"><i class="icon-instagram2"></i></span><span class="ts-text">Instagram</span></a></li>
                    <li><a href="tel:+10.11.85412542" class="si-call"><span class="ts-icon"><i class="icon-call"></i></span><span class="ts-text">+10.11.85412542</span></a></li>
                    <li><a href="mailto:info@canvas.com" class="si-email3"><span class="ts-icon"><i class="icon-envelope-alt"></i></span><span class="ts-text">info@canvas.com</span></a></li>
                </ul><!-- #top-social end -->

            </div>
        </div>

    </div>
</div><!-- #top-bar end -->

<!-- Header
============================================= -->
<header id="header" class="transparent-header floating-header header-size-md">
    <div id="header-wrap">
        <div class="container">
            <div class="header-row">

                <!-- Logo
                ============================================= -->
                <div id="logo">
                    <a href="index.html" class="standard-logo" data-dark-logo="images/logo-dark.png"><img src="{{asset('assets/website')}}/images/logo.png" alt="Canvas Logo"></a>
                    <a href="index.html" class="retina-logo" data-dark-logo="images/logo-dark@2x.png"><img src="{{asset('assets/website')}}/images/logo@2x.png" alt="Canvas Logo"></a>
                </div><!-- #logo end -->

                <div class="header-misc">

                    <!-- Top Search
                    ============================================= -->
                    <div id="top-search" class="header-misc-icon">
                        <a href="#" id="top-search-trigger"><i class="icon-line-search"></i><i class="icon-line-cross"></i></a>
                    </div><!-- #top-search end -->

                    <a href="demo-seo-about.html" class="button button-rounded ms-3 d-none d-sm-block">Get Started</a>

                </div>

                <div id="primary-menu-trigger">
                    <svg class="svg-trigger" viewBox="0 0 100 100"><path d="m 30,33 h 40 c 3.722839,0 7.5,3.126468 7.5,8.578427 0,5.451959 -2.727029,8.421573 -7.5,8.421573 h -20"></path><path d="m 30,50 h 40"></path><path d="m 70,67 h -40 c 0,0 -7.5,-0.802118 -7.5,-8.365747 0,-7.563629 7.5,-8.634253 7.5,-8.634253 h 20"></path></svg>
                </div>

                @include('website.layouts.nav')
                <form class="top-search-form" action="search.html" method="get">
                    <input type="text" name="q" class="form-control" value="" placeholder="Type &amp; Hit Enter.." autocomplete="off">
                </form>

            </div>
        </div>
    </div>
    <div class="header-wrap-clone"></div>
</header><!-- #header end -->
