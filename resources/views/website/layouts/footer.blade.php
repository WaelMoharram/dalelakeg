<!-- Footer
    ============================================= -->
<footer id="footer" class="border-0 bg-white">


    <!-- Copyrights
    ============================================= -->
    <div id="copyrights" style="background: url({{asset('assets/website/demos/seo/images/hero/footer.svg')}}) no-repeat top center; background-size: cover; padding-top: 70px;">
        <div class="container clearfix">

            <div class="row justify-content-between col-mb-30">
                <div class="col-12 col-lg-auto text-center text-lg-start">
{{__('All rights reserved EgMarkter')}} {{date('Y')}}  <br>
<div class="copyright-links">
    <a href="@if(app()->getLocale() == 'ar')
    {{route('blog',3)}}
    @else
    {{route('blog',4)}}
    @endif">{{__('Terms & conditions')}}</a> /
    <a href="@if(app()->getLocale() == 'ar')
    {{route('blog',5)}}
    @else
    {{route('blog',6)}}
    @endif">{{__('Privacy policy')}}</a></div>
</div>

<div class="col-12 col-lg-auto text-center text-lg-end">
{{--                    <div class="copyrights-menu copyright-links clearfix">--}}
{{--                        <a href="#">الرئيسية</a>/<a href="#">عن ايجى ماركتير</a>/<a href="#">شركاء النجاح</a>/<a href="#">اسئلة واجوية</a>/<a href="#">تواصل معنا</a>--}}
{{--                    </div>--}}
</div>
</div>

</div>
</div><!-- #copyrights end -->
</footer><!-- #footer end -->
