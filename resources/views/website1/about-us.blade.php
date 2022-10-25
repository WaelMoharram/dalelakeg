@extends('website.app')
@section('title'){!! __('Home') !!}@endsection
@section('header')@endsection

@section('content')

    <!-- Page Title
    ============================================= -->
    <section id="page-title" class="page-title-mini">

        <div class="container clearfix">
            <h1>{{__('About Us')}}</h1>
            <span>{{__('Everything you need to know about us')}}</span>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('home')}}">{{__('Home')}}</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{__('About Us')}}</li>
            </ol>
        </div>

    </section><!-- #page-title end -->

    <!-- Content
    ============================================= -->
    <section id="content">
        <div class="content-wrap">
            <div class="container clearfix">

                <div class="row col-mb-80 mb-0">

                    <div class="col-12">

                        <div class="heading-block center border-bottom-0">
                            <h2>{{$aboutUs->title}}</h2>
                            <span>{!! $aboutUs->content !!}</span>
                        </div>

{{--                        <div class="fslider" data-pagi="false" data-animation="fade">--}}
{{--                            <div class="flexslider">--}}
{{--                                <div class="slider-wrap">--}}
{{--                                    <div class="slide"><a href="#"><img src="{{url($aboutUs->image1)}}" alt="About Image"></a></div>--}}
{{--                                    <div class="slide"><a href="#"><img src="{{url($aboutUs->image2)}}" alt="About Image"></a></div>--}}
{{--                                    <div class="slide"><a href="#"><img src="{{url($aboutUs->image3)}}" alt="About Image"></a></div>--}}
{{--                                    <div class="slide"><a href="#"><img src="{{url($aboutUs->image4)}}" alt="About Image"></a></div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

                    </div>

                    <div class="col-lg-3 center" data-animate="bounceIn">
                        <i class="i-plain i-xlarge mx-auto mb-0 {{$aboutUs->section_1_icon}}"></i>
                        <div class="counter counter-large" style="color: #3498db;"><span data-from="0" data-to="{{$aboutUs->section_1_number}}" data-refresh-interval="50" data-speed="2000"></span></div>
                        <h5>{{$aboutUs->section_1_title}}</h5>
                    </div>

                    <div class="col-lg-3 center" data-animate="bounceIn">
                        <i class="i-plain i-xlarge mx-auto mb-0 {{$aboutUs->section_2_icon}}"></i>
                        <div class="counter counter-large" style="color: #3498db;"><span data-from="0" data-to="{{$aboutUs->section_2_number}}" data-refresh-interval="50" data-speed="2000"></span></div>
                        <h5>{{$aboutUs->section_2_title}}</h5>
                    </div>

                    <div class="col-lg-3 center" data-animate="bounceIn">
                        <i class="i-plain i-xlarge mx-auto mb-0 {{$aboutUs->section_3_icon}}"></i>
                        <div class="counter counter-large" style="color: #3498db;"><span data-from="0" data-to="{{$aboutUs->section_3_number}}" data-refresh-interval="50" data-speed="2000"></span></div>
                        <h5>{{$aboutUs->section_3_title}}</h5>
                    </div>

                    <div class="col-lg-3 center" data-animate="bounceIn">
                        <i class="i-plain i-xlarge mx-auto mb-0 {{$aboutUs->section_4_icon}}"></i>
                        <div class="counter counter-large" style="color: #3498db;"><span data-from="0" data-to="{{$aboutUs->section_4_number}}" data-refresh-interval="50" data-speed="2000"></span></div>
                        <h5>{{$aboutUs->section_4_title}}</h5>
                    </div>


                </div>




            </div>

        </div>
    </section><!-- #content end -->
@endsection

