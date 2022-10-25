@extends('website.app')
@section('title'){!! __('Brands') !!}@endsection
@section('header')@endsection

@section('content')

    <!-- Page Title
    ============================================= -->
    <section id="page-title">

        <div class="container clearfix">
            <h1>{{__('Brands')}}</h1>
            <span>{{__('Shop categories')}}</span>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('home')}}">{!! __('Home') !!}</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{__('Brands')}}</li>
            </ol>
        </div>

    </section><!-- #page-title end -->

    <!-- Content
    ============================================= -->
    <section id="content">
        <div class="content-wrap">

            <div id="shop-categories" class="header-stick footer-stick clearfix">

                @foreach($categories as $category)
                    <a href="{{route('items.index',['category_id'=>$category->id])}}" class="entry-image mb-0" style="background: url({{url($category->image)}}) no-repeat center center / cover; height:600px;" data-center="background-position: 50% 0px;" data-top-bottom="background-position:50% 200px;"></a>
                @endforeach
{{--                <a  href="shop-list.php" class="entry-image mb-0" style="background: url('images/shop/category/17.jpg') no-repeat center center / cover; height:600px;" data-center="background-position: 50% 0px;" data-top-bottom="background-position:50% 200px;"></a>--}}

{{--                <a href="shop-list.php" class="entry-image mb-0" style="background: url('images/shop/category/6.jpg') no-repeat center center / cover;height:600px;" data-center="background-position: 50% 0px;" data-top-bottom="background-position:50% 200px;"></a>--}}

{{--                <a href="shop-list.php" class="entry-image mb-0" style="background: url('images/shop/category/10.jpg') no-repeat center center / cover; height:600px;" data-center="background-position: 50% 0px;" data-top-bottom="background-position:50% 200px;"></a>--}}

{{--                <a href="shop-list.php" class="entry-image mb-0" style="background: url('images/shop/category/14.jpg') no-repeat center center / cover; height:600px;" data-center="background-position: 50% 0px;" data-top-bottom="background-position:50% 200px;"></a>--}}

{{--                <a href="shop-list.php" class="entry-image mb-0" style="background: url('images/shop/category/19.jpg') no-repeat center center / cover; height:600px;" data-center="background-position: 50% 0px;" data-top-bottom="background-position:50% 200px;"></a>--}}

{{--                <a href="shop-list.php" class="entry-image mb-0" style="background: url('images/shop/category/21.jpg') no-repeat center center / cover; height:600px;" data-center="background-position: 50% 0px;" data-top-bottom="background-position:50% 200px;"></a>--}}

{{--                <a href="shop-list.php" class="entry-image mb-0" style="background: url('images/shop/category/23.jpg') no-repeat center center / cover; height:600px;" data-center="background-position: 50% 0px;" data-top-bottom="background-position:50% 200px;"></a>--}}

            </div>
        </div>
    </section><!-- #content end -->


@endsection

