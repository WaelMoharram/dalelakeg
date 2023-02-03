<!-- BEGIN: Main Menu-->
<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
            <li class="nav-item mr-auto"><a class="navbar-brand" href="{{route('dashboard.home')}}">
                    <div class="brand-logo"></div>
                    <h2 class="brand-text mb-0">EgMarkter</h2>
                </a></li>
            <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="feather icon-x d-block d-xl-none font-medium-4 primary toggle-icon"></i><i class="toggle-icon feather icon-disc font-medium-4 d-none d-xl-block primary" data-ticon="icon-disc"></i></a></li>
        </ul>
    </div>
    <div class="shadow-bottom"></div>
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            <li class=" nav-item @if(Request::is('dashboard/home')) active open  @endif">
                <a href="{{route('dashboard.home')}}">
                    <i class="feather icon-home"></i><span class="menu-title" data-i18n="Dashboard">{{__('Home')}}</span>
                </a>
            </li>






            <li class=" nav-item @if(Request::is('dashboard/users')) active open  @endif">
                <a href="{{route('dashboard.users.index')}}">
                    <i class="feather icon-users"></i><span class="menu-item" data-i18n="Fixed navbar">{{__('Users')}}</span>
                </a>
            </li>


            <li class=" nav-item @if(Request::is('dashboard/sliders')) active open  @endif">
                <a href="{{route('dashboard.sliders.index')}}">
                    <i class="feather icon-image"></i><span class="menu-item" data-i18n="Fixed navbar">{{__('Sliders')}}</span>
                </a>
            </li>

            <li class=" nav-item @if(Request::is('dashboard/faqs')) active open  @endif">
                <a href="{{route('dashboard.faqs.index')}}">
                    <i class="feather icon-image"></i><span class="menu-item" data-i18n="Fixed navbar">{{__('FAQs')}}</span>
                </a>
            </li>

{{--            <li class=" nav-item @if(Request::is('dashboard/categories')) active open  @endif">--}}
{{--                <a href="{{route('dashboard.categories.index')}}">--}}
{{--                    <i class="feather icon-folder"></i><span class="menu-item" data-i18n="Fixed navbar">{{__('Categories')}}</span>--}}
{{--                </a>--}}
{{--            </li>--}}

            <li class=" nav-item @if(Request::is('dashboard/services')) active open  @endif">
                <a href="{{route('dashboard.services.index')}}">
                    <i class="feather icon-image"></i><span class="menu-item" data-i18n="Fixed navbar">{{__('Services')}}</span>
                </a>
            </li>
            <li class=" nav-item @if(Request::is('dashboard/works')) active open  @endif">
                <a href="{{route('dashboard.works.index')}}">
                    <i class="feather icon-image"></i><span class="menu-item" data-i18n="Fixed navbar">{{__('Works')}}</span>
                </a>
            </li>


            <li class=" nav-item @if(Request::is('dashboard/blogs')) active open  @endif">
                <a href="{{route('dashboard.blogs.index')}}">
                    <i class="feather icon-layers"></i><span class="menu-item" data-i18n="Fixed navbar">{{__('Blogs')}}</span>
                </a>
            </li>

            <li class=" nav-item @if(Request::is('dashboard/pages')) active open  @endif">
                <a href="{{route('dashboard.pages.index')}}">
                    <i class="feather icon-layers"></i><span class="menu-item" data-i18n="Fixed navbar">{{__('Pages')}}</span>
                </a>
            </li>


{{--            <li class=" nav-item @if(Request::is('dashboard/about-us/edit')) active open  @endif">--}}
{{--                <a href="{{route('dashboard.about-us.edit',1)}}">--}}
{{--                    <i class="feather icon-map"></i><span class="menu-item" data-i18n="Fixed navbar">{{__('About us page')}}</span>--}}
{{--                </a>--}}
{{--            </li>--}}

{{--            <li class=" nav-item @if(Request::is('dashboard/contact-us')) active open  @endif">--}}
{{--                <a href="{{route('dashboard.contact-us.index')}}">--}}
{{--                    <i class="feather icon-phone-call"></i><span class="menu-item" data-i18n="Fixed navbar">{{__('Contact us Sections')}}</span>--}}
{{--                </a>--}}
{{--            </li>--}}

            <li class=" nav-item @if(Request::is('dashboard/system-options')) active open  @endif">
                <a href="{{route('dashboard.system-options.index')}}">
                    <i class="feather icon-phone-call"></i><span class="menu-item" data-i18n="Fixed navbar">{{__('System options')}}</span>
                </a>
            </li>


{{--            <li class=" nav-item ">--}}
{{--                            <a href="#"><i class="feather icon-zap"></i><span class="menu-title" data-i18n="Starter kit">{{__('Website Manage')}}</span></a>--}}
{{--                            <ul class="menu-content">--}}



{{--                                <li class="@if(Request::is('dashboard/website/about-us/edit')) active open  @endif">--}}
{{--                                    <a href="{{route('dashboard.about-us.edit',1)}}">--}}
{{--                                        <i></i><span class="menu-item" data-i18n="Fixed navbar">{{__('About us page')}}</span>--}}
{{--                                    </a>--}}
{{--                                </li>--}}

{{--                                <li class="@if(Request::is('dashboard/website/contact-us/edit')) active open  @endif">--}}
{{--                                    <a href="{{route('dashboard.contact-us.edit',1)}}">--}}
{{--                                        <i></i><span class="menu-item" data-i18n="Fixed navbar">{{__('Contact us page')}}</span>--}}
{{--                                    </a>--}}
{{--                                </li>--}}



{{--                                <li class="@if(Request::is('dashboard/website/news')) active open  @endif">--}}
{{--                                    <a href="{{route('dashboard.news.index')}}">--}}
{{--                                        <i></i><span class="menu-item" data-i18n="Fixed navbar">{{__('News')}}</span>--}}
{{--                                    </a>--}}
{{--                                </li>--}}
{{--                                <li class="@if(Request::is('dashboard/website/events')) active open  @endif">--}}
{{--                                    <a href="{{route('dashboard.events.index')}}">--}}
{{--                                        <i></i><span class="menu-item" data-i18n="Fixed navbar">{{__('Events')}}</span>--}}
{{--                                    </a>--}}
{{--                                </li>--}}

{{--                                <li class="@if(Request::is('dashboard/website/services')) active open  @endif">--}}
{{--                                    <a href="{{route('dashboard.services.index')}}">--}}
{{--                                        <i></i><span class="menu-item" data-i18n="Fixed navbar">{{__('Services')}}</span>--}}
{{--                                    </a>--}}
{{--                                </li>--}}

{{--                                <li class="@if(Request::is('dashboard/website/company-services')) active open  @endif">--}}
{{--                                    <a href="{{route('dashboard.company-services.index')}}">--}}
{{--                                        <i></i><span class="menu-item" data-i18n="Fixed navbar">{{__('Company services')}}</span>--}}
{{--                                    </a>--}}
{{--                                </li>--}}

{{--                                <li class="@if(Request::is('dashboard/website/personal-services')) active open  @endif">--}}
{{--                                    <a href="{{route('dashboard.personal-services.index')}}">--}}
{{--                                        <i></i><span class="menu-item" data-i18n="Fixed navbar">{{__('Personal services')}}</span>--}}
{{--                                    </a>--}}
{{--                                </li>--}}

{{--                                <li class="@if(Request::is('dashboard/website/healthcare-services')) active open  @endif">--}}
{{--                                    <a href="{{route('dashboard.healthcare-services.index')}}">--}}
{{--                                        <i></i><span class="menu-item" data-i18n="Fixed navbar">{{__('Healthcare services')}}</span>--}}
{{--                                    </a>--}}
{{--                                </li>--}}

{{--                                <li class="@if(Request::is('dashboard/website/provider-services')) active open  @endif">--}}
{{--                                    <a href="{{route('dashboard.provider-services.index')}}">--}}
{{--                                        <i></i><span class="menu-item" data-i18n="Fixed navbar">{{__('Provider services')}}</span>--}}
{{--                                    </a>--}}
{{--                                </li>--}}

{{--                                <li class="@if(Request::is('dashboard/website/partners')) active open  @endif">--}}
{{--                                    <a href="{{route('dashboard.partners.index')}}">--}}
{{--                                        <i></i><span class="menu-item" data-i18n="Fixed navbar">{{__('Partners')}}</span>--}}
{{--                                    </a>--}}
{{--                                </li>--}}

{{--                                <li class="@if(Request::is('dashboard/website/projects')) active open  @endif">--}}
{{--                                    <a href="{{route('dashboard.projects.index')}}">--}}
{{--                                        <i></i><span class="menu-item" data-i18n="Fixed navbar">{{__('Projects')}}</span>--}}
{{--                                    </a>--}}
{{--                                </li>--}}



{{--                                <li class="@if(Request::is('dashboard/website/contacts')) active open  @endif">--}}
{{--                                    <a href="{{route('dashboard.contacts.index')}}">--}}
{{--                                        <i></i><span class="menu-item" data-i18n="Fixed navbar">{{__('Message contacts')}}</span>--}}
{{--                                    </a>--}}
{{--                                </li>--}}



{{--                                <li class="@if(Request::is('dashboard/website/main-info/')) active open  @endif">--}}
{{--                                    <a href="{{route('dashboard.main-info.edit',1)}}">--}}
{{--                                        <i></i><span class="menu-item" data-i18n="Fixed navbar">{{__('Main information')}}</span>--}}
{{--                                    </a>--}}
{{--                                </li>--}}



{{--                            </ul>--}}
{{--                        </li>--}}

        </ul>
    </div>
</div>
<!-- END: Main Menu-->
