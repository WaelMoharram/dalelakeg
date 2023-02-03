@extends('website.app')
@section('title'){!! __('Home') !!}@endsection
@section('header')@endsection


@section('content')
<!-- Slider
    ============================================= -->

<section id="page-title" class="page-title-parallax page-title-center page-title-dark include-header" style="background-image: linear-gradient(to top, rgba(254,150,3,0.5), #39384D), url({{asset('assets/website/demos/seo/images/faqs-title.jpg')}}); background-size: cover; padding: 120px 0;" data-bottom-top="background-position:0px 300px;" data-top-bottom="background-position:0px -300px;">
    <div id="particles-line"></div>

    <div class="container clearfix mt-4">
        <div class="badge rounded-pill border border-light text-light">{{__('All your Questions answered in one place')}}</div>
        <h1>{{__('Frequently Asked Questions')}}</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">{{__('Home')}}</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{__('FAQs')}}</li>
        </ol>
    </div>

</section><!-- #page-title end -->

<!-- Content
============================================= -->
<section id="content">

    <div class="content-wrap pb-0">

        <div class="container bottommargin">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-8 text-center">
                    <div class="heading-block border-bottom-0 center mx-auto">
                        <div class="badge rounded-pill badge-default">{{__('How can we help you?')}}</div>
                        <h3 class="nott ls0 mb-3">{{__('Frequently Asked Questions')}}</h3>

                    </div>
                </div>

                <div class="clear"></div>

                <!-- Post Content
                ============================================= -->
                <div class="col-lg-10">



                    <div id="faqs" class="faqs">
                        @foreach($faqs as $faq)
                            <div class="toggle faq pb-3 mb-4 ">
                                                    <div class="toggle-header">
                                                        <div class="toggle-icon color">
                                                            <i class="toggle-closed  {{$faq->question_icon}}"></i>
                                                            <i class="toggle-open  {{$faq->question_icon}}"></i>
                                                        </div>
                                                        <div class="toggle-title fw-semibold ps-1">
                                                            {{$faq->question}}
                                                        </div>
                                                        <div class="toggle-icon color">
                                                            <i class="toggle-closed icon-chevron-down text-black-50"></i>
                                                            <i class="toggle-open icon-chevron-up color"></i>
                                                        </div>
                                                    </div>
                                                    <div class="toggle-content text-black-50 ps-4">{!! $faq->answer !!}</div>
                                                </div>
                        @endforeach
                    </div>

                </div>

            </div><!-- .postcontent end -->
        </div>

        <div class="clear"></div>


    </div>
</section><!-- #content end -->


@endsection
@push('scripts')

@endpush
