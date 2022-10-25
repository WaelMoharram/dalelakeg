@extends('website.app')
@section('title'){{$page->title}}@endsection
@section('header')@endsection

@section('content')

    <!-- Page Title
    ============================================= -->
    <section id="page-title">

        <div class="container clearfix">
            <h1>{{$page->title}}</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('home')}}">{{__('Home')}}</a></li>
                <li class="breadcrumb-item active" aria-current="page"><a href="{{route('pages.index')}}">{{__('Pages')}}</a></li>
            </ol>
        </div>

    </section><!-- #page-title end -->

    <!-- Content
    ============================================= -->
    <section id="content">
        <div class="content-wrap">
            <div class="container clearfix">

                <div class="row gutter-40 col-mb-80">
                    <!-- Post Content
                    ============================================= -->
                    <div class="postcontent col-lg-12">

                        <div class="single-post mb-0">

                            <!-- Single Post
                            ============================================= -->
                            <div class="entry clearfix">

                                <!-- Entry Title
                                ============================================= -->
                                <div class="entry-title">
                                    <h2>{{$page->title}}</h2>
                                </div><!-- .entry-title end -->

                                <!-- Entry Meta
                                ============================================= -->
                                <div class="entry-meta">
                                    <ul>
                                        <li><i class="icon-calendar3"></i>{{$page->created_at}}</li>
                                    </ul>
                                </div><!-- .entry-meta end -->

                                <!-- Entry Image
                                ============================================= -->
                                <div class="entry-image">
                                    <a href="#"><img src="{{url($page->image)}}" alt="Page Single"></a>
                                </div><!-- .entry-image end -->

                                <!-- Entry Content
                                ============================================= -->
                                <div class="entry-content mt-0">

                                    {!! $page->content !!}

                                    <div class="clear"></div>

                                </div>
                            </div><!-- .entry end -->


                        </div>

                    </div><!-- .postcontent end -->

                </div>

            </div>
        </div>
    </section>

@endsection

