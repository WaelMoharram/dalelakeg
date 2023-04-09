@extends('website.app')
@section('title'){!! $blog->title !!}@endsection
@section('header')@endsection


@section('content')
<!-- Slider
    ============================================= -->

<section id="page-title" class="page-title-parallax page-title-center page-title-dark include-header" style="background-image: linear-gradient(to top, rgba(254,150,3,0.5), #39384D), url({{asset('assets/website/demos/seo/images/faqs-title.jpg')}}); background-size: cover; padding: 120px 0;" data-bottom-top="background-position:0px 300px;" data-top-bottom="background-position:0px -300px;">
    <div id="particles-line"></div>

    <div class="container clearfix mt-4">
        <h1>{!! $blog->title !!}</h1>

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

                        <h3 class="nott ls0 mb-3">{!! $blog->title !!}</h3>

                    </div>
                    <div class="entry-meta">
                        <ul>
                            <li><i class="icon-line2-user"></i><a href="#"> {{$blog->user->name}}</a></li>
                            <li><i class="icon-calendar-times1"></i><a href="#"> {{$blog->created_at}}</a></li>
                        </ul>
                    </div>
                </div>

                <div class="clear"></div>

                <!-- Post Content
                ============================================= -->
                <div class="col-lg-10">


                    <img src="{{url($blog->image)}}">

                    {!! $blog->content !!}
                </div>

            </div><!-- .postcontent end -->
        </div>

        <div class="clear"></div>


    </div>
</section><!-- #content end -->


@endsection
@push('scripts')

@endpush
