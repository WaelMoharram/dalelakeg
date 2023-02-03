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
                    <div class="oc-item"><a href="#"><img src="{{asset('assets/website').'/demos/business/images/clients/linkedin.svg'}}" alt="Brands"></a></div>
                    <div class="oc-item"><a href="#"><img src={{asset('assets/website').'demos/business/images/clients/nat-geo.svg'}} alt="Brands"></a></div>
                    <div class="oc-item"><a href="#"><img src={{asset('assets/website').'demos/business/images/clients/jetblue.svg'}}  alt="Brands"></a></div>
                    <div class="oc-item"><a href="#"><img src="{{asset('assets/website')}}/demos/business/images/clients/zillow.svg" alt="Brands"></a></div>
                    <div class="oc-item"><a href="#"><img src="{{asset('assets/website')}}/demos/business/images/clients/amazon.svg" alt="Brands"></a></div>
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
                        @foreach(\App\Models\Service::all()->take(3) as $service)
                        <div class="feature-box mt-5 flex-md-row-reverse text-md-end border-0">
                            <div class="fbox-icon">
                                <a href="{{route('service',$service->id)}}"><img src="{{$service->image}}" alt="Feature Icon" class="bg-transparent rounded-0"></a>
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
                        @foreach(\App\Models\Service::all()->take(3) as $service)
                            <div class="feature-box mt-5 ">
                                <div class="fbox-icon">
                                    <a href="{{route('service',$service->id)}}"><img src="{{$service->image}}" alt="Feature Icon" class="bg-transparent rounded-0"></a>
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



        <!-- Form Section
        ============================================= -->
        <div class="section m-0" style="background: url({{asset('assets/website')}}'/demos/seo/images/sections/1.jpg') no-repeat center center; background-size: cover; padding: 100px 0;">
            <div class="container">
                <div class="row justify-content-between align-items-center">

                    <div class="col-md-6">
                        <div class="heading-block border-bottom-0 bottommargin-sm">
                            <div class="badge rounded-pill badge-default">Careers</div>
                            <h3 class="nott ls0">Get your free Quote today</h3>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt dolore voluptatem assumenda quae possimus sunt dignissimos tempora officia.</p>
                    </div>

                    <div class="col-lg-6 col-md-6">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <h4 class="mb-3">Apply Now</h4>
                                <div class="form-widget">
                                    <div class="form-result"></div>
                                    <form class="row mb-0" id="template-contactform" name="template-contactform" action="include/form.php" method="post">
                                        <div class="col-12 form-group mb-3">
                                            <label for="template-contactform-name">Name:*</label>
                                            <input type="text" id="template-contactform-name" name="template-contactform-name" class="form-control input-sm required" value="">
                                        </div>
                                        <div class="col-12 form-group mb-3">
                                            <label for="template-contactform-email">Email Address:*</label>
                                            <input type="email" id="template-contactform-email" name="template-contactform-email" class="form-control input-sm required" value="">
                                        </div>
                                        <div class="col-12 form-group mb-4">
                                            <label for="template-contactform-website">Website:*</label>
                                            <input type="text" id="template-contactform-website" name="template-contactform-website" class="form-control input-sm required" value="">
                                        </div>
                                        <div class="col-12 form-group d-none">
                                            <input type="text" id="template-contactform-botcheck" name="template-contactform-botcheck" value="" class="sm-form-control" />
                                        </div>
                                        <div class="col-12 form-group mb-0">
                                            <button class="button button-rounded w-100 nott ls0 m-0" type="submit" id="template-contactform-submit" name="template-contactform-submit" value="submit">Apply Now</button>
                                        </div>

                                        <input type="hidden" name="prefix" value="template-contactform-">
                                    </form>
                                </div>
                            </div>
                        </div>
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

                    <article class="portfolio-item col-12 col-sm-6 col-md-4 pf-media pf-icons">
                        <div class="grid-inner">
                            <div class="portfolio-image">
                                <img src="{{asset('assets/website')}}/demos/seo/images/works/1.jpg" alt="The Atmosphere">
                                <div class="bg-overlay">
                                    <div class="bg-overlay-content dark" data-hover-animate="fadeIn" data-hover-speed="500">
                                        <a href="#" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeIn" data-hover-speed="500"><i class="icon-line-ellipsis"></i></a>
                                    </div>
                                    <div class="bg-overlay-bg dark" data-hover-animate="fadeIn" data-hover-speed="500"></div>
                                </div>
                            </div>
                            <div class="portfolio-desc">
                                <h3><a href="#">The Atmosphere</a></h3>
                                <span>Digital Marketing</span>
                            </div>
                        </div>
                    </article>

                    <article class="portfolio-item col-12 col-sm-6 col-md-4 pf-illustrations">
                        <div class="grid-inner">
                            <div class="portfolio-image">
                                <img src="{{asset('assets/website')}}/demos/seo/images/works/2.jpg" alt="Wavelength Structure">
                                <div class="bg-overlay">
                                    <div class="bg-overlay-content dark" data-hover-animate="fadeIn" data-hover-speed="500">
                                        <a href="#" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeIn" data-hover-speed="500"><i class="icon-line-ellipsis"></i></a>
                                    </div>
                                    <div class="bg-overlay-bg dark" data-hover-animate="fadeIn" data-hover-speed="500"></div>
                                </div>
                            </div>
                            <div class="portfolio-desc">
                                <h3>Wavelength Structure</h3>
                                <span>SEO</span>
                            </div>
                        </div>
                    </article>

                    <article class="portfolio-item col-12 col-sm-6 col-md-4 pf-graphics pf-uielements">
                        <div class="grid-inner">
                            <div class="portfolio-image">
                                <img src="{{asset('assets/website')}}/demos/seo/images/works/3.jpg" alt="Greenhouse Garden">
                                <div class="bg-overlay">
                                    <div class="bg-overlay-content dark" data-hover-animate="fadeIn" data-hover-speed="500">
                                        <a href="#" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeIn" data-hover-speed="500"><i class="icon-line-ellipsis"></i></a>
                                    </div>
                                    <div class="bg-overlay-bg dark" data-hover-animate="fadeIn" data-hover-speed="500"></div>
                                </div>
                            </div>
                            <div class="portfolio-desc">
                                <h3>Simplicity Pages</h3>
                                <span>Analytics</span>
                            </div>
                        </div>
                    </article>

                    <article class="portfolio-item col-12 col-sm-6 col-md-4 pf-icons pf-illustrations">
                        <div class="grid-inner">
                            <div class="portfolio-image">
                                <img src="{{asset('assets/website')}}/demos/seo/images/works/4.jpg" alt="Industrial Hub">
                                <div class="bg-overlay">
                                    <div class="bg-overlay-content dark" data-hover-animate="fadeIn" data-hover-speed="500">
                                        <a href="#" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeIn" data-hover-speed="500"><i class="icon-line-ellipsis"></i></a>
                                    </div>
                                    <div class="bg-overlay-bg dark" data-hover-animate="fadeIn" data-hover-speed="500"></div>
                                </div>
                            </div>
                            <div class="portfolio-desc">
                                <h3>SEO Analysis</h3>
                                <span>SEO</span>
                            </div>
                        </div>
                    </article>

                    <article class="portfolio-item col-12 col-sm-6 col-md-4 pf-uielements pf-media">
                        <div class="grid-inner">
                            <div class="portfolio-image">
                                <img src="{{asset('assets/website')}}/demos/seo/images/works/5.jpg" alt="Corporate Headquarters">
                                <div class="bg-overlay">
                                    <div class="bg-overlay-content dark" data-hover-animate="fadeIn" data-hover-speed="500">
                                        <a href="#" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeIn" data-hover-speed="500"><i class="icon-line-ellipsis"></i></a>
                                    </div>
                                    <div class="bg-overlay-bg dark" data-hover-animate="fadeIn" data-hover-speed="500"></div>
                                </div>
                            </div>
                            <div class="portfolio-desc">
                                <h3>Marketing Strategy</h3>
                                <span>Digital Marketing</span>
                            </div>
                        </div>
                    </article>

                    <article class="portfolio-item col-12 col-sm-6 col-md-4 pf-graphics pf-illustrations">
                        <div class="grid-inner">
                            <div class="portfolio-image">
                                <img src="{{asset('assets/website')}}/demos/seo/images/works/6.jpg" alt="Space Station">
                                <div class="bg-overlay">
                                    <div class="bg-overlay-content dark" data-hover-animate="fadeIn" data-hover-speed="500">
                                        <a href="#" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeIn" data-hover-speed="500"><i class="icon-line-ellipsis"></i></a>
                                    </div>
                                    <div class="bg-overlay-bg dark" data-hover-animate="fadeIn" data-hover-speed="500"></div>
                                </div>
                            </div>
                            <div class="portfolio-desc">
                                <h3>Space Station</h3>
                                <span>Social Media</span>
                            </div>
                        </div>
                    </article>

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

                    <div class="oc-item">
                        <div class="testimonial">
                            <div class="testi-image">
                                <a href="#"><img src="{{asset('assets/website')}}/demos/pet/images/testimonials/1.jpg" alt="Customer Testimonails"></a>
                            </div>
                            <div class="testi-content">
                                <p>Incidunt deleniti blanditiis quas aperiam recusandae consequatur ullam quibusdam cum libero illo rerum repellendus!</p>
                                <div class="testi-meta">
                                    John Doe
                                    <span>XYZ Inc.</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="oc-item">
                        <div class="testimonial">
                            <div class="testi-image">
                                <a href="#"><img src="{{asset('assets/website')}}/demos/pet/images/testimonials/2.jpg" alt="Customer Testimonails"></a>
                            </div>
                            <div class="testi-content">
                                <p>Natus voluptatum enim quod necessitatibus quis expedita harum provident eos obcaecati id culpa corporis molestias.</p>
                                <div class="testi-meta">
                                    Collis Ta'eed
                                    <span>Envato Inc.</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="oc-item">
                        <div class="testimonial">
                            <div class="testi-image">
                                <a href="#"><img src="{{asset('assets/website')}}/demos/pet/images/testimonials/3.jpg" alt="Customer Testimonails"></a>
                            </div>
                            <div class="testi-content">
                                <p>Natus voluptatum enim quod necessitatibus quis expedita harum provident eos obcaecati id culpa corporis molestias.</p>
                                <div class="testi-meta">
                                    Collis Ta'eed
                                    <span>Envato Inc.</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="oc-item">
                        <div class="testimonial">
                            <div class="testi-image">
                                <a href="#"><img src="{{asset('assets/website')}}/demos/pet/images/testimonials/4.jpg" alt="Customer Testimonails"></a>
                            </div>
                            <div class="testi-content">
                                <p>Natus voluptatum enim quod necessitatibus quis expedita harum provident eos obcaecati id culpa corporis molestias.</p>
                                <div class="testi-meta">
                                    Mary Jane
                                    <span>Google Inc.</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="oc-item">
                        <div class="testimonial">
                            <div class="testi-image">
                                <a href="#"><img src="{{asset('assets/website')}}/images/testimonials/5.jpg" alt="Customer Testimonails"></a>
                            </div>
                            <div class="testi-content">
                                <p>Natus voluptatum enim quod necessitatibus quis expedita harum provident eos obcaecati id culpa corporis molestias.</p>
                                <div class="testi-meta">
                                    Steve Jobs
                                    <span>Apple Inc.</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Blogs
        ============================================= -->
        <div class="container py-4">
            <div class="heading-block border-bottom-0 center">
                <div class="badge rounded-pill badge-default">Latest Articles</div>
                <h3 class="nott ls0">Recently From the Blog</h3>
            </div>

            <div class="row mt-5 clearfix">
                <div class="col-md-4">
                    <article class="entry">
                        <div class="entry-image mb-3">
                            <a href="#"><img src="{{asset('assets/website')}}/demos/seo/images/blog/1.jpg" alt="Image 3"></a>
                        </div>
                        <div class="entry-title">
                            <h3><a href="#">Top Most SEO Optizied Websites</a></h3>
                        </div>
                        <div class="entry-meta">
                            <ul>
                                <li><i class="icon-line2-user"></i><a href="#"> John Doe</a></li>
                                <li><i class="icon-calendar-times1"></i><a href="#"> 11 Mar 2021</a></li>
                            </ul>
                        </div>
                        <div class="entry-content clearfix">
                            <p>Asperiores, tenetur, blanditiis, quaerat odit ex exercitationem progressive technology through pariatur quibusdam veritatis quisquam. Efficiently communicate alternative.</p>
                        </div>
                    </article>
                </div>

                <div class="col-md-4">
                    <article class="entry">
                        <div class="entry-image mb-3">
                            <a href="#"><img src="{{asset('assets/website')}}/demos/seo/images/blog/2.jpg" alt="Image 3"></a>
                        </div>
                        <div class="entry-title">
                            <h3><a href="#">10 Recent SEO Tips for Startups</a></h3>
                        </div>
                        <div class="entry-meta">
                            <ul>
                                <li><i class="icon-line2-user"></i><a href="#"> Semicolonweb</a></li>
                                <li><i class="icon-calendar-times1"></i><a href="#"> 18 Apr 2021</a></li>
                            </ul>
                        </div>
                        <div class="entry-content clearfix">
                            <p>Interactively predominate progressive technology through distinctive materials. Progressively benchmark extensible intellectual. Exercitationem progressive technology through pariatur.</p>
                        </div>
                    </article>
                </div>

                <div class="col-md-4">
                    <article class="entry">
                        <div class="entry-image mb-3">
                            <a href="#"><img src="{{asset('assets/website')}}/demos/seo/images/blog/3.jpg" alt="Image 3"></a>
                        </div>
                        <div class="entry-title">
                            <h3><a href="#">3 Ways to Transform Your Site Into a SEO</a></h3>
                        </div>
                        <div class="entry-meta">
                            <ul>
                                <li><i class="icon-line2-user"></i><a href="#"> John Doe</a></li>
                                <li><i class="icon-calendar-times1"></i><a href="#"> 06 Aug 2021</a></li>
                            </ul>
                        </div>
                        <div class="entry-content clearfix">
                            <p>Globally synergize premium metrics with holistic e-markets. Professionally morph interoperable networks vis-a-vis value-added methods.</p>
                        </div>
                    </article>
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
