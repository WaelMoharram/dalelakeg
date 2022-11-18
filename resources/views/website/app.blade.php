<!DOCTYPE html>
<html  dir="ltr">

@include('website.layouts.head')


<body class="stretched">

<!-- Document Wrapper
============================================= -->
<div id="wrapper" class="clearfix">
@include('website.layouts.header')
@yield('content')

@include('website.layouts.footer')


</div><!-- #wrapper end -->

<!-- Go To Top
============================================= -->
<div id="gotoTop" class="icon-angle-up"></div>
@include('website.layouts.scripts')

@stack('scripts')

</body>
</html>
