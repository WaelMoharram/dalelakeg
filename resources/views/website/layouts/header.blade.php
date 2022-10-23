{{--
<div id="top-bar">
    <div class="container">

        <div class="row justify-content-between align-items-center">
            <div class="col-12 col-md-auto">
                <p class="mb-0 py-2 text-center text-md-start"><strong>{{__('Call')}}:</strong> {{option('main phone')}} | <strong>Email:</strong> {{option('main email')}}</p>
            </div>

            <div class="col-12 col-md-auto">

                <!-- Top Links
                ============================================= -->
                <div class="top-links on-click">
                    <ul class="top-links-container">
--}}
{{--                        @if(App::isLocale('ar')) <a class="menu-link" href="{{route('lang-en')}}"><div>English</div><span>Switch to English</span></a> @else <a class="menu-link"  href="{{route('lang-ar')}}"> <div>العربية</div><span>حول للغة العربية</span></a> @endif--}}{{--


                        @if(App::isLocale('ar'))
                            <li class="top-links-item"><a href="#">عربى</a>
                                <ul class="top-links-sub-menu">
                                    <li class="top-links-item"><a href="{{route('lang-en')}}">English</a></li>
                                </ul>
                            </li>
                        @else
                            <li class="top-links-item"><a href="#">En</a>
                                <ul class="top-links-sub-menu">
                                    <li class="top-links-item"><a href="{{route('lang-ar')}}">عربى</a></li>
                                </ul>
                            </li>
                        @endif
                        @if(!auth()->check())
                        <li class="top-links-item"><a href="#">Login</a>
                            <div class="top-links-section">
                                <form method="post" action="{{ route('login') }}" id="top-login" autocomplete="off">
                                    @csrf
                                    <div class="form-group">
                                        <label>{{__('Email')}}</label>
                                        <input name="email" type="email" class="form-control" placeholder="{{__('Email address')}}" required="">
                                        @error('email')
                                        <span class="invalid-feedback" style="display: block;" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>{{__('Password')}}</label>
                                        <input name="password" type="password" class="form-control" placeholder="{{__('Password')}}" required="">
                                        @error('password')
                                        <span class="invalid-feedback" style="display: block;" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                        @enderror
                                    </div>
                                    <div class="form-group form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="top-login-checkbox">
                                        <label class="form-check-label" for="top-login-checkbox">{{__('Remember Me')}}</label>
                                    </div>
                                    <button class="btn btn-danger w-100" type="submit">{{__('Sign in')}}</button>
                                </form>
                            </div>
                        </li>
                        @else
                            <li class="top-links-item"><a href="#">Hello {{auth()->user()->name}}</a>
                                <ul class="top-links-sub-menu">
                                    <li class="top-links-item"><a href="#">{{__('Profile')}}</a></li>
                                    <li class="top-links-item">
                                <form method="post" action="{{route('logout')}}">
                                    {{ csrf_field() }}
                                    <button type=submit class="dropdown-item">
                                        {!! __('Log out') !!}
                                    </button>
                                </form>
                            </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div><!-- .top-links end -->

            </div>
        </div>

    </div>
</div><!-- #top-bar end -->
--}}


<!-- Header
		============================================= -->
<header id="header" class="full-header" data-sticky-logo-height="74" data-menu-padding="32">
    <div id="header-wrap">
        <div class="container">
            <div class="header-row">

                <!-- Logo
                ============================================= -->
                <div id="logo">
                    <a href="{{route('home')}}" class="standard-logo" data-dark-logo="{{asset('assets/website')}}/images/logo/logo-new.png"><img src="{{asset('assets/website')}}/images/logo/logo-new.png" alt="Canvas Logo"></a>
                    <a href="{{route('home')}}" class="retina-logo" data-dark-logo="{{asset('assets/website')}}/images/logo/logo-new.png"><img src="{{asset('assets/website')}}/images/logo/logo-new.png" alt="Canvas Logo"></a>
                </div><!-- #logo end -->

                <div class="header-misc">

                    <!-- Top Search
                    ============================================= -->

                    <!-- Top Cart
                    ============================================= -->
{{--                    @if(auth()->check())--}}
{{--                    <div id="top-cart" class="header-misc-icon d-none d-sm-block">--}}
{{--                        <a href="#" id="top-cart-trigger"><i class="icon-line-bag"></i><span class="top-cart-number">5</span></a>--}}
{{--                        <div class="top-cart-content">--}}
{{--                            <div class="top-cart-title">--}}
{{--                                <h4>{{__('Shopping cart')}}</h4>--}}
{{--                            </div>--}}
{{--                            <div class="top-cart-items">--}}
{{--                                <div class="top-cart-item">--}}
{{--                                    <div class="top-cart-item-image">--}}
{{--                                        <a href="#"><img src="{{asset('assets/website')}}/images/shop/small/1.jpg" alt="Blue Round-Neck Tshirt" /></a>--}}
{{--                                    </div>--}}
{{--                                    <div class="top-cart-item-desc">--}}
{{--                                        <div class="top-cart-item-desc-title">--}}
{{--                                            <a href="#">Blue Round-Neck Tshirt with a Button</a>--}}
{{--                                            <span class="top-cart-item-price d-block">$19.99</span>--}}
{{--                                        </div>--}}
{{--                                        <div class="top-cart-item-quantity">x 2</div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="top-cart-item">--}}
{{--                                    <div class="top-cart-item-image">--}}
{{--                                        <a href="#"><img src="{{asset('assets/website')}}/images/shop/small/6.jpg" alt="Light Blue Denim Dress" /></a>--}}
{{--                                    </div>--}}
{{--                                    <div class="top-cart-item-desc">--}}
{{--                                        <div class="top-cart-item-desc-title">--}}
{{--                                            <a href="#">Light Blue Denim Dress</a>--}}
{{--                                            <span class="top-cart-item-price d-block">$24.99</span>--}}
{{--                                        </div>--}}
{{--                                        <div class="top-cart-item-quantity">x 3</div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="top-cart-action">--}}
{{--                                <span class="top-checkout-price">$114.95</span>--}}
{{--                                <a href="#" class="button button-3d button-small m-0">{{__('View cart')}}</a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div><!-- #top-cart end -->--}}
{{--                    @else--}}
{{--                        <div id="top-cart" class="header-misc-icon d-none d-sm-block">--}}
{{--                            <a href="#" id="top-cart-trigger"><i class="icon-line-bag"></i><span class="top-cart-number">5</span></a>--}}
{{--                            <div class="top-cart-content">--}}
{{--                                <div class="top-cart-title">--}}
{{--                                    <h4>{{__('SLogin')}}</h4>--}}
{{--                                </div>--}}
{{--                                <div class="top-cart-items">--}}
{{--                                    <div class="top-cart-item">--}}
{{--                                        <div class="top-cart-item-image">--}}
{{--                                            <a href="#"><img src="{{asset('assets/website')}}/images/shop/small/1.jpg" alt="Blue Round-Neck Tshirt" /></a>--}}
{{--                                        </div>--}}
{{--                                        <div class="top-cart-item-desc">--}}
{{--                                            <div class="top-cart-item-desc-title">--}}
{{--                                                <a href="#">Blue Round-Neck Tshirt with a Button</a>--}}
{{--                                                <span class="top-cart-item-price d-block">$19.99</span>--}}
{{--                                            </div>--}}
{{--                                            <div class="top-cart-item-quantity">x 2</div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="top-cart-item">--}}
{{--                                        <div class="top-cart-item-image">--}}
{{--                                            <a href="#"><img src="{{asset('assets/website')}}/images/shop/small/6.jpg" alt="Light Blue Denim Dress" /></a>--}}
{{--                                        </div>--}}
{{--                                        <div class="top-cart-item-desc">--}}
{{--                                            <div class="top-cart-item-desc-title">--}}
{{--                                                <a href="#">Light Blue Denim Dress</a>--}}
{{--                                                <span class="top-cart-item-price d-block">$24.99</span>--}}
{{--                                            </div>--}}
{{--                                            <div class="top-cart-item-quantity">x 3</div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="top-cart-action">--}}
{{--                                    <span class="top-checkout-price">$114.95</span>--}}
{{--                                    <a href="#" class="button button-3d button-small m-0">{{__('View cart')}}</a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div><!-- #top-cart end -->--}}
{{--                        @endif--}}
                </div>

                <div id="primary-menu-trigger">
                    <svg class="svg-trigger" viewBox="0 0 100 100"><path d="m 30,33 h 40 c 3.722839,0 7.5,3.126468 7.5,8.578427 0,5.451959 -2.727029,8.421573 -7.5,8.421573 h -20"></path><path d="m 30,50 h 40"></path><path d="m 70,67 h -40 c 0,0 -7.5,-0.802118 -7.5,-8.365747 0,-7.563629 7.5,-8.634253 7.5,-8.634253 h 20"></path></svg>
                </div>
                @include('website.layouts.nav')





            </div>
        </div>
    </div>
    <div class="header-wrap-clone"></div>
</header><!-- #header end -->
