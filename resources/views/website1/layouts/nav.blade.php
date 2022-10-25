<!-- Primary Navigation
						============================================= -->
<nav class="primary-menu sub-title">

    <ul class="menu-container">
        <li class="menu-item">
            <a class="menu-link" href="{{route('home')}}"><div>{{__('Home')}}</div><span>{{__('Home page')}}</span></a>
        </li>
        <li class="menu-item">
            <a class="menu-link" href="{{route('blogs.index')}}"><div>{{__('Blog')}}</div><span>{{__('Out of the Box')}}</span></a>
        </li>
        <li class="menu-item">
            <a class="menu-link" href="{{route('categories.index')}}"><div>{{__('Brands')}}</div><span>{{__('Shop categories')}}</span></a>
        </li>


        <li class="menu-item">
            <a class="menu-link" href="{{route('contact-us')}}"><div>{{__('Contact us')}}</div><span>{{__('Get in Touch')}}</span></a>
        </li>
        <li class="menu-item">

        <li class="menu-item">
            <a class="menu-link" href="{{route('about-us')}}"><div>{{__('About us')}}</div><span>{{__('About us')}}</span></a>
        </li>

        <li class="menu-item">

            @if(App::isLocale('ar')) <a class="menu-link" href="{{route('lang-en')}}"><div>English</div><span>Switch to English</span></a> @else <a class="menu-link"  href="{{route('lang-ar')}}"> <div>العربية</div><span>حول للغة العربية</span></a> @endif

        </li>
    </ul>

</nav><!-- #primary-menu end -->
