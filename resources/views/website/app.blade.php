<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-textdirection="{!! app()->getLocale() == 'ar'?'rtl':'ltr' !!}" dir="{!! app()->getLocale() == 'ar'?'rtl':'ltr' !!}">
@include('website.layouts.head')

<body class="stretched">

<!-- Document Wrapper
============================================= -->
<div id="wrapper" class="clearfix">

@include('website.layouts.header')

@yield('content')

    <!-- Footer
    ============================================= -->

    @include('website.layouts.footer')
</div><!-- #wrapper end -->

<!-- Go To Top
============================================= -->
<div id="gotoTop" class="icon-angle-up"></div>

@include('website.layouts.scripts')

</body>
</html>
