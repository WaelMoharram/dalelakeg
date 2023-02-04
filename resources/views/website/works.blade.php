@extends('website.app')
@section('title'){!! __('Works') !!}@endsection
@section('header')@endsection


@section('content')
<!-- Slider
    ============================================= -->

<section id="page-title" class="page-title-parallax page-title-center page-title-dark include-header" style="background-image: linear-gradient(to top, rgba(254,150,3,0.5), #39384D), url({{asset('assets/website/demos/seo/images/faqs-title.jpg')}}); background-size: cover; padding: 120px 0;" data-bottom-top="background-position:0px 300px;" data-top-bottom="background-position:0px -300px;">
    <div id="particles-line"></div>

    <div class="container clearfix mt-4">
        <div class="container clearfix mt-4">

            <h1> {{__('Works')}} </h1>

        </div>

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

                        <h3 class="nott ls0 mb-3">{!! __('Works') !!}</h3>

                    </div>
                </div>

                <div class="clear"></div>

                <!-- Post Content
                ============================================= -->
                <div class="col-lg-12">



                    <!-- Features
				============================================= -->
                    <div class="section bg-transparent">
                        <div class="container">
                            <div class="row col-mb-30 align-content-stretch">
                            @foreach($works as $blog)
                                <div class="col-lg-4 col-md-6 ">
                                    <a href="{{route('service',$blog->id)}}" class="card h-shadow h-translate-y-sm all-ts">
                                        <div class="card-body p-5">
                                            <div class="feature-box flex-column">
                                                <div class="fbox-image mb-5 text-center">
                                                    <img height="150" src="{{url($blog->image)}}" alt="Feature Icon">
                                                </div>
                                                <div class="fbox-content">
                                                    <h3 class="nott ls0 text-larger">{{$blog->name}}</h3>
                                                    <p class="text-smaller">{{$blog->description}}</p>
                                                </div>

                                            </div>
                                        </div>
                                    </a>
                                </div>
                                @endforeach
                                <div class="d-flex">
                                    {!! $works->links() !!}
                                </div>
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
