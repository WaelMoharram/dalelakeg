@extends('website.app')
@section('title'){!! __('Blogs') !!}@endsection
@section('header')@endsection

@section('content')

    <!-- Page Title
    ============================================= -->
    <section id="page-title">

        <div class="container clearfix">
            <h1>{{__('Blogs')}}</h1>
            <span>{{__('Blogs index')}}</span>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('home')}}">{!! __('Home') !!}</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{__('Blogs')}}</li>
            </ol>
        </div>

    </section><!-- #page-title end -->

    <!-- Content
    ============================================= -->
    <section id="content">
        <div class="content-wrap">
            <div class="container clearfix">

                <div class="clear"></div>

                <!-- Shop
                ============================================= -->
                <div id="shop" class="shop row grid-container gutter-30" data-layout="fitRows">

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


                </div><!-- #shop end -->

            </div>
        </div>
    </section><!-- #content end -->

@endsection

