@extends('website.app')
@section('title'){!! __('Home') !!}@endsection
@section('header')@endsection


@section('content')
<!-- Slider
    ============================================= -->

<section id="slider" class="slider-element slider-parallax min-vh-60 min-vh-md-100 {{--include-header--}}">
    <div class="owl-carousel owl-carousel1 owl-theme">
        @foreach($sliders as $slider)
            <div class="item"><img src="{{$slider->slider_image}}"></div>
        @endforeach
    </div>
</section><!-- #slider end -->

<!-- Content
============================================= -->
<section id="content">


    <div class="content-wrap pt-0">

        <!-- Client Carousel
        ============================================= -->
        <div class="section bg-transparent m-0 border-bottom py-5">
            <div class="container">
                <div id="oc-clients" class="owl-carousel image-carousel carousel-widget" data-margin="100" data-loop="true" data-autoplay="5000" data-nav="false" data-pagi="false" data-items-xs="2" data-items-sm="3" data-items-md="4" data-items-lg="5" data-items-xl="6">
                    <div class="oc-item"><a href="#"><img src="{{asset('assets/website')}}/images/logo.png" alt="Brands"></a></div>
                    <div class="oc-item"><a href="#"><img src="{{asset('assets/website')}}/images/logo.png" alt="Brands"></a></div>
                    <div class="oc-item"><a href="#"><img src="{{asset('assets/website')}}/images/logo.png"  alt="Brands"></a></div>
                    <div class="oc-item"><a href="#"><img src="{{asset('assets/website')}}/images/logo.png" alt="Brands"></a></div>
                    <div class="oc-item"><a href="#"><img src="{{asset('assets/website')}}/images/logo.png" alt="Brands"></a></div>
                </div>
            </div>
        </div>

        <!-- Features
        ============================================= -->
        <div class="section bg-transparent mt-4 mb-0 pb-0">
            <div class="container">
                <div class="heading-block border-bottom-0 center mx-auto mb-0" style="max-width: 550px">
                    <div class="badge rounded-pill badge-default">{{__('Services')}}</div>
                    <h3 class="nott ls0 mb-3">{{__('What We Do')}}</h3>
                    <p>
                        @if(app()->getLocale() == 'ar')
                            {{option('services description arabic')}}
                        @else
                            {{option('services description english')}}
                        @endif
                    </p>
                </div>
                <div class="row justify-content-between align-items-center">

                    <div class="col-lg-4 col-sm-6">
                        @foreach(\App\Models\Service::where('type','service')->get()->take(3) as $service)
                        <div class="feature-box mt-5 flex-md-row-reverse text-md-end border-0">
                            <div class="fbox-icon">
                                <a href="{{route('service',$service->id)}}"><img src="{{url($service->image)}}" alt="Feature Icon" class="bg-transparent rounded-0"></a>
                            </div>
                            <div class="fbox-content">
                                <h3 class="nott ls0">{{$service->name}}</h3>
                                <p>{{$service->description}}</p>
                            </div>
                        </div>
                        @endforeach


                    </div>
                    <div class="col-lg-3 col-7 offset-3 offset-sm-0 d-sm-none d-lg-block center my-5">
                        <img src="{{asset('assets/website')}}/demos/seo/images/sections/2.png" alt="iphone" class="rounded  parallax" data-bottom-top="transform: translateY(-30px)" data-top-bottom="transform: translateY(30px)">
                    </div>

                    <div class="col-lg-4 col-sm-6">
                        @foreach(\App\Models\Service::where('type','service')->get()->take(3) as $service)
                            <div class="feature-box mt-5 ">
                                <div class="fbox-icon">
                                    <a href="{{route('service',$service->id)}}"><img src="{{url($service->image)}}" alt="Feature Icon" class="bg-transparent rounded-0"></a>
                                </div>
                                <div class="fbox-content">
                                    <h3 class="nott ls0">{{$service->name}}</h3>
                                    <p>{{$service->description}}</p>
                                </div>
                            </div>
                        @endforeach

                    </div>

                </div>
            </div>
        </div>




        <!-- Works/Projects
        ============================================= -->
        <div class="section m-0" style="background: url('{{asset('assets/website')}}/demos/seo/images/sections/5.jpg') no-repeat center center; background-size: cover;padding: 80px 0;">
            <div class="container">
                <div class="heading-block border-bottom-0 center">
                    <div class="badge rounded-pill badge-default">Completed Projects</div>
                    <h3 class="nott ls0">Our Latest Works</h3>
                </div>

                <div id="portfolio" class="portfolio row grid-container gutter-20">
                    @foreach(\App\Models\Service::where('type','work')->get()->take(6) as $work)
                    <article class="portfolio-item col-12 col-sm-6 col-md-4 pf-media pf-icons">
                        <div class="grid-inner">
                            <div class="portfolio-image">
                                <img src="{{url($work->image)}}" alt="{{$work->name}}">
                                <div class="bg-overlay">
                                    <div class="bg-overlay-content dark" data-hover-animate="fadeIn" data-hover-speed="500">
                                        <a href="{{route('service',$work->id)}}" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeIn" data-hover-speed="500"><i class="icon-line-ellipsis"></i></a>
                                    </div>
                                    <div class="bg-overlay-bg dark" data-hover-animate="fadeIn" data-hover-speed="500"></div>
                                </div>
                            </div>
                            <div class="portfolio-desc">
                                <h3><a href="{{route('service',$work->id)}}">{{$work->name}}</a></h3>
                                <span>{{$work->description}}</span>
                            </div>
                        </div>
                    </article>
@endforeach

                </div>

                <div class="center">
                    <a href="demo-seo-about.html" class="button button-large button-rounded text-capitalize ms-0 mt-5 ls0">View All Works</a>
                </div>

            </div>
        </div>



        <!-- Testimonials
        ============================================= -->
        <div class="section mt-0" style="background: url('{{asset('assets/website')}}/demos/seo/images/sections/3.jpg') no-repeat top center; background-size: cover; padding: 80px 0 70px;">
            <div class="container">
                <div class="heading-block border-bottom-0 center">
                    <div class="badge rounded-pill badge-default">Testimonials</div>
                    <h3 class="nott ls0">What Clients Says</h3>
                </div>

                <div id="oc-testi" class="owl-carousel testimonials-carousel carousel-widget clearfix" data-margin="0" data-pagi="true" data-loop="true" data-center="true" data-autoplay="5000" data-items-sm="1" data-items-md="2" data-items-xl="3">
                    @foreach(\App\Models\Client::all() as $client)
                    <div class="oc-item">
                        <div class="testimonial">
                            <div class="testi-image">
                                <a href="#"><img src="{{url($client->image)}}" alt="Customer Testimonails"></a>
                            </div>
                            <div class="testi-content">
                                <p>{{$client->description}}</p>
                                <div class="testi-meta">
                                    {{$client->name}}
                                    <span>{{$client->title}}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>

        <!-- Blogs
        ============================================= -->
        <div class="container py-4">
            <div class="heading-block border-bottom-0 center">
                <div class="badge rounded-pill badge-default">{{__('Latest Articles')}}</div>
                <h3 class="nott ls0">{{__('Recently From the Blog')}}</h3>
            </div>

            <div class="row mt-5 clearfix">
                @foreach(\App\Models\Blog::where('type','blog')->get()->take(3) as $blog)
                    <div class="col-md-4">
                    <article class="entry">
                        <div class="entry-image mb-3">
                            <a href="{{route('blog',$blog->id)}}"><img src="{{url($blog->image)}}" alt="{{$blog->title}}"></a>
                        </div>
                        <div class="entry-title">
                            <h3><a href="{{route('blog',$blog->id)}}">{{$blog->title}}</a></h3>
                        </div>
                        <div class="entry-meta">
                            <ul>
                                <li><i class="icon-line2-user"></i><a href="#"> {{$blog->user->name}}</a></li>
                                <li><i class="icon-calendar-times1"></i><a href="#"> {{$blog->created_at}}</a></li>
                            </ul>
                        </div>

                    </article>
                </div>
                @endforeach
                    <div class="center">
                        <a href="{{route('blogs')}}" class="button button-large button-rounded text-capitalize ms-0 mt-5 ls0">View All Blogs</a>
                    </div>
            </div>

        </div>


    </div>
</section><!-- #content end -->


@endsection
@push('scripts')
<script>
    var owl = $('.owl-carousel1');

    $('.owl-carousel1').owlCarousel({
        loop:true,
        margin:10,
        nav:true,
        autoplay:true,
        autoplayTimeout:7000,
        autoplayHoverPause:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:1
            }
        }
    })
    $('.play').on('click',function(){
        owl.trigger('play.owl.autoplay',[1000])
    })
    $('.stop').on('click',function(){
        owl.trigger('stop.owl.autoplay')
    })
</script>
@endpush
