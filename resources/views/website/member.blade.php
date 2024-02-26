@extends('website.app')
@section('title'){!! $member->title !!}@endsection
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
    p{
        margin-bottom: 0!important;
    }


</style>

@section('content')
<!-- Slider
    ============================================= -->

<section id="page-title" class="page-title-parallax page-title-center page-title-dark include-header" style="background-image: linear-gradient(to top, rgba(254,150,3,0.5), #39384D), url({{asset('assets/website/demos/seo/images/faqs-title.jpg')}}); background-size: cover; padding: 120px 0;" data-bottom-top="background-position:0px 300px;" data-top-bottom="background-position:0px -300px;">
    <div id="particles-line"></div>

    <div class="container clearfix mt-4">
        <h1>{!! $member->title !!}</h1>

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

<br>
                <div dir="rtl" class="row">
                    <div class="col-md-3">
                        {!! $member->title !!}
                    </div>
                    <div class="col-md-4">
                        {!! $member->description !!}
                    </div>
                    <div class="col-md-3">
                        <i class="icon-envelope-alt">  {!! $member->address !!}
                    </div>
                    <div class="col-md-2">
                        <a href="https://wa.me/2{!! $member->phone !!} ">
                            <i class="icon-call"></i> {!! $member->phone !!}
                        </a>

                    </div>

                </div>

                </div>
                <div class="col-md-12">
                    <div class="section bg-transparent">
                        <div class="container">
                            <div class="row col-mb-30 align-content-stretch">
                                <table dir="rtl" class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr style="color: red;">
                                            <th scope="col">#</th>
                                            <th scope="col">{{__('الجهات الحكومية')}}</th>
                                            <th scope="col">{{__('نوع الخدمة')}}</th>
                                            <th scope="col">{{__('Duration')}}</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($services as $service)
                                        <tr>
                                            <th scope="row">{{$loop->iteration}}</th>
                                            <td><p>{{$service->title}}</p></td>
                                            <td>{!!$service->description !!}</td>
                                            <td>{{$service->duration}}</td>
                                        </tr>
                                    @endforeach
                                    <tr>
                                        <th scope="row"></th>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    </tbody>
                                </table>


                            </div>
                        </div>
                    </div>

                </div>
            <div dir="rtl" class="row">
                <div class="col-md-3">
                    {!! $member->title !!}
                </div>
                <div class="col-md-4">
                    {!! $member->description !!}
                </div>
                <div class="col-md-3">
                    <i class="icon-envelope-alt"> {!! $member->address !!}
                </div>
                <div class="col-md-2">
                    <a href="https://wa.me/2{!! $member->phone !!} ">
                        <i class="icon-call"></i>  {!! $member->phone !!}
                    </a>

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
