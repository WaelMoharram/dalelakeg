<!-- Primary Navigation
                ============================================= -->
<nav class="primary-menu with-arrows">

    <ul class="menu-container">
        @if(app()->getLocale() == 'en')
        <li class="menu-item @if(Request::is('/')) current  @endif"><a class="menu-link" href="{{route('home')}}"><div>{{__('Home')}}</div></a></li>
        <li class="menu-item"><a class="menu-link" href="@if(app()->getLocale() == 'ar')
            {{route('blog',1)}}
            @else
            {{route('blog',2)}}
            @endif"><div>
                    @if(app()->getLocale() == 'ar')
                        {{\App\Models\Blog::find(1)->title}}
                    @else
                        {{\App\Models\Blog::find(2)->title}}
                    @endif
                </div></a></li>
        <li class="menu-item mega-menu"><div class="menu-link"><div>{{__('Services')}}</div></div>
            <div class="mega-menu-content mega-menu-style-2 px-0">
                <div class="container">
                    <div class="row">
                        @foreach(\App\Models\Service::where('type','service')->orderBy('order_number')->get()->take(6) as $service)
                        <a href="{{route('service',$service->id)}}" class="mega-menu-column sub-menu-container col-lg-4 border-bottom h-bg-light py-4">
                            <div class="feature-box">
                                <div class="fbox-icon mb-2">
                                    <img src="{{url($service->image)}}" alt="Feature Icon" class="bg-transparent rounded-0">
                                </div>
                                <div class="fbox-content">
                                    <h3 class="nott ls0">{{$service->name}}</h3>
                                    <p>{{$service->description}}</p>
                                </div>
                            </div>
                        </a>
                        @endforeach
                        <div class="mega-menu-column sub-menu-container col-12 p-0">
                            <a href="{{route('services')}}" class="button button-rounded button-large nott ls0 w-100 text-center m-0 rounded-0 py-3 button-light ">{{__('View All')}} <i class="icon-line-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </li>
        <li class="menu-item @if(Request::is('faqs')) current  @endif"><a class="menu-link" href="{{route('faqs')}}"><div>{{__('FAQs')}}</div></a></li>
        <li class="menu-item"><a class="menu-link" target="_blank" href="https://wa.me/{{option('whatsapp')}}"><div>{{__('Contact')}}</div></a></li>
        @else
            <li class="menu-item"><a class="menu-link" target="_blank" href="https://wa.me/{{option('whatsapp')}}"><div>{{__('Contact')}}</div></a></li>

            <li class="menu-item @if(Request::is('faqs')) current  @endif"><a class="menu-link" href="{{route('faqs')}}"><div>{{__('FAQs')}}</div></a></li>


            <li class="menu-item mega-menu"><div class="menu-link"><div>{{__('Services')}}</div></div>
                <div class="mega-menu-content mega-menu-style-2 px-0">
                    <div class="container">
                        <div class="row">
                            @foreach(\App\Models\Service::where('type','service')->orderBy('order_number')->get()->take(6) as $service)
                                <a href="{{route('service',$service->id)}}" class="mega-menu-column sub-menu-container col-lg-4 border-bottom h-bg-light py-4">
                                    <div class="feature-box">
                                        <div class="fbox-icon mb-2">
                                            <img src="{{url($service->image)}}" alt="Feature Icon" class="bg-transparent rounded-0">
                                        </div>
                                        <div class="fbox-content">
                                            <h3 class="nott ls0">{{$service->name}}</h3>
                                            <p>{{$service->description}}</p>
                                        </div>
                                    </div>
                                </a>
                            @endforeach
                            <div class="mega-menu-column sub-menu-container col-12 p-0">
                                <a href="{{route('services')}}" class="button button-rounded button-large nott ls0 w-100 text-center m-0 rounded-0 py-3 button-light ">{{__('View All')}} <i class="icon-line-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </li>

            <li class="menu-item"><a class="menu-link" href="@if(app()->getLocale() == 'ar')
                {{route('blog',1)}}
                @else
                {{route('blog',2)}}
                @endif"><div>
                        @if(app()->getLocale() == 'ar')
                            {{\App\Models\Blog::find(1)->title}}
                        @else
                            {{\App\Models\Blog::find(2)->title}}
                        @endif
                    </div></a></li>


            <li class="menu-item @if(Request::is('/')) current  @endif"><a class="menu-link" href="{{route('home')}}"><div>{{__('Home')}}</div></a></li>



        @endif
    </ul>

</nav><!-- #primary-menu end -->
