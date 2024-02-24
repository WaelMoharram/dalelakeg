@extends('website.app')
@section('title'){!! $service->name !!}@endsection
@section('header')@endsection
<style>
    .content-wrap {
        position: relative;
        padding: 0px 0 !important;
        overflow: hidden;
    }
    .section {
        position: relative;
        width: 100%;
        margin: 60px 0;
        padding: 0px 0!important;
        background-color: #F9F9F9;
        overflow: hidden;
    }


</style>

@section('content')
<!-- Slider
    ============================================= -->

<section id="page-title" class="page-title-parallax page-title-center page-title-dark include-header" style="background-image: linear-gradient(to top, rgba(254,150,3,0.5), #39384D), url({{asset('assets/website/demos/seo/images/faqs-title.jpg')}}); background-size: cover; padding: 120px 0;" data-bottom-top="background-position:0px 300px;" data-top-bottom="background-position:0px -300px;">
    <div id="particles-line"></div>

    <div class="container clearfix mt-4">
        <h1>{!! $service->name !!}</h1>

    </div>

</section><!-- #page-title end -->

<!-- Content
============================================= -->
<section id="content">

    <div class="content-wrap pb-0">

        <div class="container bottommargin">
            <div class="row justify-content-center">
{{--                <div class="col-xl-6 col-lg-8 text-center">--}}
{{--                    <div class="heading-block border-bottom-0 center mx-auto">--}}

{{--                        <h3 class="nott ls0 mb-3">{!! $service->name !!}</h3>--}}

{{--                    </div>--}}
{{--                </div>--}}

                <div class="clear"></div>

                <!-- Post Content
                ============================================= -->
{{--                <div class="col-lg-10">--}}



                    {!! $service->long_description !!}
                </div>
                <div class="col-md-12">
                    <div class="section bg-transparent">
                        <div class="container">
                            <div class="row col-mb-30 align-content-stretch">
                                @foreach(\App\Models\Member::where('service_id',$service->id)->get() as $blog)
                                    <div class="col-lg-4 col-md-6 ">
                                        <a href="{{route('member',$blog->id)}}" class="card h-shadow h-translate-y-sm all-ts">
                                            <div class="card-body p-5">
                                                <div class="feature-box flex-column">
                                                    <div class="fbox-image mb-5 text-center">
                                                        @if($blog->image)
                                                        <img height="150" src="{{url($blog->image ?? '#')}}" alt="Feature Icon">
                                                        @else
                                                            <img height="150" src="{{asset('assets/website')}}/images/logo@2x.png" alt="Feature Icon">

                                                        @endif
                                                    </div>
                                                    <div class="fbox-content">
                                                        <h3 class="nott ls0 text-larger">{{$blog->title}}</h3>
                                                        <p class="text-smaller">{{$blog->description}}</p>
                                                    </div>

                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                @endforeach

                            </div>
                        </div>
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
