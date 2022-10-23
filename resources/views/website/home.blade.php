@extends('website.app')
@section('title'){!! __('Home') !!}@endsection
@section('header')@endsection

@section('content')

    <section id="slider" class="slider-element swiper_wrapper min-vh-60 min-vh-md-100">
        <div class="slider-inner">

            <div class="swiper-container swiper-parent">
                <div class="swiper-wrapper">
                    @foreach($sliders as $slider)
                    <div class="swiper-slide @if($slider->color == 'dark') dark @endif ">
                        <div class="container">
                            <div class="slider-caption @if($slider->position == 'yes') slider-caption-center @endif ">
                                <h2 data-animate="fadeInUp">

                                    {{$slider->slider_text_main}}

                                </h2>
                                <p class="d-none d-sm-block" data-animate="fadeInUp" data-delay="200">

                                    {{$slider->slider_text_sub}}

                                </p>
                            </div>
                        </div>
                        <div class="swiper-slide-bg" style="background-image: url('{{url($slider->slider_image)}}');"></div>
                    </div>
                    @endforeach
                </div>
                <div class="slider-arrow-left"><i class="icon-angle-left"></i></div>
                <div class="slider-arrow-right"><i class="icon-angle-right"></i></div>
                <div class="slide-number"><div class="slide-number-current"></div><span>/</span><div class="slide-number-total"></div></div>
            </div>

        </div>
    </section>


    <!-- Content
============================================= -->
    <section id="content">
        <div class="content-wrap">

            <div class="section header-stick">
                <div class="container clearfix">
                    <div class="row">

                        <div class="col-lg-9">
                            <div class="heading-block bottommargin-sm">
                                <h3>We specialize in Robust Software Solutions</h3>
                            </div>

                            <p class="mb-0">Lasting change, stakeholders development Angelina Jolie world problem solving progressive. Courageous; social entrepreneurship change; accelerate resolve pursue these aspirations asylum.</p>
                        </div>

                        <div class="col-lg-3">
                            <a href="#" class="button button-3d button-dark button-large w-100 center" style="margin-top: 30px;">{{__('Check our brands')}}</a>
                        </div>

                    </div>
                </div>
            </div>



            <div class="container clearfix">

                <div class="row col-mb-50">
                    <div class="col-lg-12">
                        <div class="fancy-title title-border">
                            <h4>{{__('Recent Posts')}}</h4>
                        </div>

                        <div class="row posts-md col-mb-30">
                            @foreach ($blogs as $blog)
                            <div class="entry col-md-4">
                                <div class="grid-inner">
                                    <div class="entry-image">
                                        <a href="{{route('blogs.show',$blog->id)}}"><img src="{{url($blog->image)}}" alt="Image"></a>
                                    </div>
                                    <div class="entry-title title-sm nott">
                                        <h3><a href="{{route('blogs.show',$blog->id)}}">{{$blog->title}}</a></h3>
                                    </div>
                                    <div class="entry-meta">
                                        <ul>
                                            <li><i class="icon-calendar3"></i>{{$blog->created_at}}</li>
{{--                                            <li><a href="blog-single.php#comments"><i class="icon-comments"></i> 13</a></li>--}}
                                        </ul>
                                    </div>
                                    <div class="entry-content">
                                        <p>{!! \Illuminate\Support\Str::limit($blog->content, 150, $end='...') !!}</p>
                                    </div>
                                </div>
                            </div>
                            @endforeach
{{--                            <div class="entry col-md-4">--}}
{{--                                <div class="grid-inner">--}}
{{--                                    <div class="entry-image">--}}
{{--                                        <a href="#"><img src="{{asset('assets/website')}}/images/magazine/thumb/14.jpg" alt="Image"></a>--}}
{{--                                    </div>--}}
{{--                                    <div class="entry-title title-sm nott">--}}
{{--                                        <h3><a href="blog-single.php">UK government weighs Tesla's Model S for its ??5 million electric vehicle fleet</a></h3>--}}
{{--                                    </div>--}}
{{--                                    <div class="entry-meta">--}}
{{--                                        <ul>--}}
{{--                                            <li><i class="icon-calendar3"></i> 10th Feb 2021</li>--}}
{{--                                            <li><a href="blog-single.php#comments"><i class="icon-comments"></i> 13</a></li>--}}
{{--                                        </ul>--}}
{{--                                    </div>--}}
{{--                                    <div class="entry-content">--}}
{{--                                        <p>Urban public institutions life-saving women and children Rockefeller combat malaria honesty. Sustainability foster immunize treatment.</p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <div class="entry col-md-4">--}}
{{--                                <div class="grid-inner">--}}
{{--                                    <div class="entry-image">--}}
{{--                                        <a href="#"><img src="{{asset('assets/website')}}/images/magazine/thumb/11.jpg" alt="Image"></a>--}}
{{--                                    </div>--}}
{{--                                    <div class="entry-title title-sm nott">--}}
{{--                                        <h3><a href="blog-single.php">Toyotas next minivan will let you shout at your kids without turning around</a></h3>--}}
{{--                                    </div>--}}
{{--                                    <div class="entry-meta">--}}
{{--                                        <ul>--}}
{{--                                            <li><i class="icon-calendar3"></i> 10th Feb 2021</li>--}}
{{--                                            <li><a href="blog-single.php#comments"><i class="icon-comments"></i> 13</a></li>--}}
{{--                                        </ul>--}}
{{--                                    </div>--}}
{{--                                    <div class="entry-content">--}}
{{--                                        <p>Medecins du Monde eradicate sustainability free expression contribution assessment expert humanitarian relief.</p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- #content end -->

@endsection

