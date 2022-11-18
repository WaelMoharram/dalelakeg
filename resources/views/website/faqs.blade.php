@extends('website.app')
@section('title'){!! __('Home') !!}@endsection
@section('header')@endsection


@section('content')
<!-- Slider
    ============================================= -->

<section id="page-title" class="page-title-parallax page-title-center page-title-dark include-header" style="background-image: linear-gradient(to top, rgba(254,150,3,0.5), #39384D), url({{asset('assets/website/demos/seo/images/faqs-title.jpg')}}); background-size: cover; padding: 120px 0;" data-bottom-top="background-position:0px 300px;" data-top-bottom="background-position:0px -300px;">
    <div id="particles-line"></div>

    <div class="container clearfix mt-4">
        <div class="badge rounded-pill border border-light text-light">All your Questions answered in one place</div>
        <h1>Frequently Asked Questions</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">FAQs</li>
        </ol>
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
                        <div class="badge rounded-pill badge-default">How can we help you?</div>
                        <h3 class="nott ls0 mb-3">Frequently Asked Questions</h3>
                        <p>Dynamically provide access to resource-leveling mindshare vis-a-vis bricks-and-clicks ideas authoritatively.</p>
                    </div>
                </div>

                <div class="clear"></div>

                <!-- Post Content
                ============================================= -->
                <div class="col-lg-10">

                    <div class="grid-filter-wrap justify-content-center">
                        <ul class="grid-filter style-4 customjs">

                            <li class="activeFilter"><a href="#" class="fw-semibold" data-filter="all">All</a></li>
                            <li><a href="#" class="fw-semibold" data-filter=".faq-marketplace">Marketplace</a></li>
                            <li><a href="#" class="fw-semibold" data-filter=".faq-authors">Authors</a></li>
                            <li><a href="#" class="fw-semibold" data-filter=".faq-legal">Legal</a></li>
                            <li><a href="#" class="fw-semibold" data-filter=".faq-itemdiscussion">Item Discussion</a></li>
                            <li><a href="#" class="fw-semibold" data-filter=".faq-affiliates">Affiliates</a></li>
                            <li><a href="#" class="fw-semibold" data-filter=".faq-miscellaneous">Miscellaneous</a></li>

                        </ul>
                    </div>

                    <div class="clear"></div>

                    <div id="faqs" class="faqs">

                        <div class="toggle faq pb-3 mb-4 faq-marketplace faq-authors">
                            <div class="toggle-header">
                                <div class="toggle-icon color">
                                    <i class="toggle-closed icon-question-sign"></i>
                                    <i class="toggle-open icon-question-sign"></i>
                                </div>
                                <div class="toggle-title fw-semibold ps-1">
                                    How do I become an author?
                                </div>
                                <div class="toggle-icon color">
                                    <i class="toggle-closed icon-chevron-down text-black-50"></i>
                                    <i class="toggle-open icon-chevron-up color"></i>
                                </div>
                            </div>
                            <div class="toggle-content text-black-50 ps-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, dolorum, vero ipsum molestiae minima odio quo voluptate illum excepturi quam cum voluptates doloribus quae nisi tempore necessitatibus dolores ducimus enim libero eaque explicabo suscipit animi at quaerat aliquid ex expedita perspiciatis? Saepe, aperiam, nam unde quas beatae vero vitae nulla.</div>
                        </div>

                        <div class="toggle faq pb-3 mb-4 faq-authors faq-miscellaneous">
                            <div class="toggle-header">
                                <div class="toggle-icon color">
                                    <i class="toggle-closed icon-comments-alt"></i>
                                    <i class="toggle-open icon-comments-alt"></i>
                                </div>
                                <div class="toggle-title fw-semibold ps-1">
                                    Helpful Resources for Authors
                                </div>
                                <div class="toggle-icon color">
                                    <i class="toggle-closed icon-chevron-down text-black-50"></i>
                                    <i class="toggle-open icon-chevron-up color"></i>
                                </div>
                            </div>
                            <div class="toggle-content text-black-50 ps-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, dolorum, vero ipsum molestiae minima odio quo voluptate illum excepturi quam cum voluptates doloribus quae nisi tempore necessitatibus dolores ducimus enim libero eaque explicabo suscipit animi at quaerat aliquid ex expedita perspiciatis? Saepe, aperiam, nam unde quas beatae vero vitae nulla.</div>
                        </div>

                        <div class="toggle faq pb-3 mb-4 faq-miscellaneous">
                            <div class="toggle-header">
                                <div class="toggle-icon color">
                                    <i class="toggle-closed icon-lock3"></i>
                                    <i class="toggle-open icon-lock3"></i>
                                </div>
                                <div class="toggle-title fw-semibold ps-1">
                                    How much money can I make?
                                </div>
                                <div class="toggle-icon color">
                                    <i class="toggle-closed icon-chevron-down text-black-50"></i>
                                    <i class="toggle-open icon-chevron-up color"></i>
                                </div>
                            </div>
                            <div class="toggle-content text-black-50 ps-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, dolorum, vero ipsum molestiae minima odio quo voluptate illum excepturi quam cum voluptates doloribus quae nisi tempore necessitatibus dolores ducimus enim libero eaque explicabo suscipit animi at quaerat aliquid ex expedita perspiciatis? Saepe, aperiam, nam unde quas beatae vero vitae nulla.</div>
                        </div>

                        <div class="toggle faq pb-3 mb-4 faq-authors faq-legal faq-itemdiscussion">
                            <div class="toggle-header">
                                <div class="toggle-icon color">
                                    <i class="toggle-closed icon-download-alt"></i>
                                    <i class="toggle-open icon-download-alt"></i>
                                </div>
                                <div class="toggle-title fw-semibold ps-1">
                                    Can I offer my items for free on a promotional basis?
                                </div>
                                <div class="toggle-icon color">
                                    <i class="toggle-closed icon-chevron-down text-black-50"></i>
                                    <i class="toggle-open icon-chevron-up color"></i>
                                </div>
                            </div>
                            <div class="toggle-content text-black-50 ps-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, dolorum, vero ipsum molestiae minima odio quo voluptate illum excepturi quam cum voluptates doloribus quae nisi tempore necessitatibus dolores ducimus enim libero eaque explicabo suscipit animi at quaerat aliquid ex expedita perspiciatis? Saepe, aperiam, nam unde quas beatae vero vitae nulla.</div>
                        </div>

                        <div class="toggle faq pb-3 mb-4 faq-marketplace faq-authors">
                            <div class="toggle-header">
                                <div class="toggle-icon color">
                                    <i class="toggle-closed icon-ok"></i>
                                    <i class="toggle-open icon-ok"></i>
                                </div>
                                <div class="toggle-title fw-semibold ps-1">
                                    An Introduction to the Marketplaces for Authors
                                </div>
                                <div class="toggle-icon color">
                                    <i class="toggle-closed icon-chevron-down text-black-50"></i>
                                    <i class="toggle-open icon-chevron-up color"></i>
                                </div>
                            </div>
                            <div class="toggle-content text-black-50 ps-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, dolorum, vero ipsum molestiae minima odio quo voluptate illum excepturi quam cum voluptates doloribus quae nisi tempore necessitatibus dolores ducimus enim libero eaque explicabo suscipit animi at quaerat aliquid ex expedita perspiciatis? Saepe, aperiam, nam unde quas beatae vero vitae nulla.</div>
                        </div>

                        <div class="toggle faq pb-3 mb-4 faq-affiliates faq-miscellaneous">
                            <div class="toggle-header">
                                <div class="toggle-icon color">
                                    <i class="toggle-closed icon-money"></i>
                                    <i class="toggle-open icon-money"></i>
                                </div>
                                <div class="toggle-title fw-semibold ps-1">
                                    How does the Tuts+ Premium affiliate program work?
                                </div>
                                <div class="toggle-icon color">
                                    <i class="toggle-closed icon-chevron-down text-black-50"></i>
                                    <i class="toggle-open icon-chevron-up color"></i>
                                </div>
                            </div>
                            <div class="toggle-content text-black-50 ps-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, dolorum, vero ipsum molestiae minima odio quo voluptate illum excepturi quam cum voluptates doloribus quae nisi tempore necessitatibus dolores ducimus enim libero eaque explicabo suscipit animi at quaerat aliquid ex expedita perspiciatis? Saepe, aperiam, nam unde quas beatae vero vitae nulla.</div>
                        </div>

                        <div class="toggle faq pb-3 mb-4 faq-legal faq-itemdiscussion">
                            <div class="toggle-header">
                                <div class="toggle-icon color">
                                    <i class="toggle-closed icon-picture"></i>
                                    <i class="toggle-open icon-picture"></i>
                                </div>
                                <div class="toggle-title fw-semibold ps-1">
                                    What Images, Videos, Code or Music Can I Use in my Items?
                                </div>
                                <div class="toggle-icon color">
                                    <i class="toggle-closed icon-chevron-down text-black-50"></i>
                                    <i class="toggle-open icon-chevron-up color"></i>
                                </div>
                            </div>
                            <div class="toggle-content text-black-50 ps-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, dolorum, vero ipsum molestiae minima odio quo voluptate illum excepturi quam cum voluptates doloribus quae nisi tempore necessitatibus dolores ducimus enim libero eaque explicabo suscipit animi at quaerat aliquid ex expedita perspiciatis? Saepe, aperiam, nam unde quas beatae vero vitae nulla.</div>
                        </div>

                        <div class="toggle faq pb-3 mb-4 faq-legal faq-authors faq-itemdiscussion">
                            <div class="toggle-header">
                                <div class="toggle-icon color">
                                    <i class="toggle-closed icon-file3"></i>
                                    <i class="toggle-open icon-file3"></i>
                                </div>
                                <div class="toggle-title fw-semibold ps-1">
                                    Can I use trademarked names in my items?
                                </div>
                                <div class="toggle-icon color">
                                    <i class="toggle-closed icon-chevron-down text-black-50"></i>
                                    <i class="toggle-open icon-chevron-up color"></i>
                                </div>
                            </div>
                            <div class="toggle-content text-black-50 ps-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, dolorum, vero ipsum molestiae minima odio quo voluptate illum excepturi quam cum voluptates doloribus quae nisi tempore necessitatibus dolores ducimus enim libero eaque explicabo suscipit animi at quaerat aliquid ex expedita perspiciatis? Saepe, aperiam, nam unde quas beatae vero vitae nulla.</div>
                        </div>

                        <div class="toggle faq pb-3 mb-4 faq-affiliates">
                            <div class="toggle-header">
                                <div class="toggle-icon color">
                                    <i class="toggle-closed icon-bar-chart"></i>
                                    <i class="toggle-open icon-bar-chart"></i>
                                </div>
                                <div class="toggle-title fw-semibold ps-1">
                                    Tips for Increasing Your Referral Income
                                </div>
                                <div class="toggle-icon color">
                                    <i class="toggle-closed icon-chevron-down text-black-50"></i>
                                    <i class="toggle-open icon-chevron-up color"></i>
                                </div>
                            </div>
                            <div class="toggle-content text-black-50 ps-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, dolorum, vero ipsum molestiae minima odio quo voluptate illum excepturi quam cum voluptates doloribus quae nisi tempore necessitatibus dolores ducimus enim libero eaque explicabo suscipit animi at quaerat aliquid ex expedita perspiciatis? Saepe, aperiam, nam unde quas beatae vero vitae nulla.</div>
                        </div>

                        <div class="toggle faq pb-3 mb-4 faq-authors faq-itemdiscussion">
                            <div class="toggle-header">
                                <div class="toggle-icon color">
                                    <i class="toggle-closed icon-phone3"></i>
                                    <i class="toggle-open icon-phone3"></i>
                                </div>
                                <div class="toggle-title fw-semibold ps-1">
                                    How can I get support for an item which isn't working correctly?
                                </div>
                                <div class="toggle-icon color">
                                    <i class="toggle-closed icon-chevron-down text-black-50"></i>
                                    <i class="toggle-open icon-chevron-up color"></i>
                                </div>
                            </div>
                            <div class="toggle-content text-black-50 ps-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, dolorum, vero ipsum molestiae minima odio quo voluptate illum excepturi quam cum voluptates doloribus quae nisi tempore necessitatibus dolores ducimus enim libero eaque explicabo suscipit animi at quaerat aliquid ex expedita perspiciatis? Saepe, aperiam, nam unde quas beatae vero vitae nulla.</div>
                        </div>

                        <div class="toggle faq pb-3 mb-4 faq-marketplace faq-itemdiscussion">
                            <div class="toggle-header">
                                <div class="toggle-icon color">
                                    <i class="toggle-closed icon-credit"></i>
                                    <i class="toggle-open icon-credit"></i>
                                </div>
                                <div class="toggle-title fw-semibold ps-1">
                                    How do I pay for items on the Marketplaces?
                                </div>
                                <div class="toggle-icon color">
                                    <i class="toggle-closed icon-chevron-down text-black-50"></i>
                                    <i class="toggle-open icon-chevron-up color"></i>
                                </div>
                            </div>
                            <div class="toggle-content text-black-50 ps-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, dolorum, vero ipsum molestiae minima odio quo voluptate illum excepturi quam cum voluptates doloribus quae nisi tempore necessitatibus dolores ducimus enim libero eaque explicabo suscipit animi at quaerat aliquid ex expedita perspiciatis? Saepe, aperiam, nam unde quas beatae vero vitae nulla.</div>
                        </div>

                    </div>

                </div>

            </div><!-- .postcontent end -->
        </div>

        <div class="clear"></div>

        <!-- Form Section
        ============================================= -->
        <div class="section mb-3" style="background: url('demos/seo/images/sections/1.jpg') no-repeat center center; background-size: cover; padding: 100px 0;">
            <div class="container">
                <div class="row justify-content-between align-items-center">

                    <div class="col-md-4">
                        <div class="heading-block border-bottom-0 bottommargin-sm">
                            <div class="badge rounded-pill badge-default">Careers</div>
                            <h3 class="nott ls0">Get your free Quote today</h3>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt dolore voluptatem assumenda quae possimus sunt dignissimos tempora officia.</p>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <h4 class="mb-3">Apply Now</h4>
                                <div class="form-widget">
                                    <div class="form-result"></div>
                                    <form class="row mb-0" id="template-contactform" name="template-contactform" action="include/form.php" method="post">
                                        <div class="col-12 form-group mb-3">
                                            <label for="template-contactform-name">Name:*</label>
                                            <input type="text" id="template-contactform-name" name="template-contactform-name" class="form-control input-sm required" value="">
                                        </div>
                                        <div class="col-12 form-group mb-3">
                                            <label for="template-contactform-email">Email Address:*</label>
                                            <input type="email" id="template-contactform-email" name="template-contactform-email" class="form-control input-sm required" value="">
                                        </div>
                                        <div class="col-12 form-group mb-4">
                                            <label for="template-contactform-website">Website:*</label>
                                            <input type="text" id="template-contactform-website" name="template-contactform-website" class="form-control input-sm required" value="">
                                        </div>
                                        <div class="col-12 form-group mb-0">
                                            <button class="button button-rounded w-100 nott ls0 m-0" type="submit" id="template-contactform-submit" name="template-contactform-submit" value="submit">Apply Now</button>
                                        </div>

                                        <input type="hidden" name="prefix" value="template-contactform-">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 mt-5 mt-md-0 center">
                        <a href="https://www.youtube.com/watch?v=P3Huse9K6Xs" data-lightbox="iframe" class="play-icon shadow"><i class="icon-play"></i></a>
                    </div>

                </div>

            </div>
        </div>
    </div>
</section><!-- #content end -->


@endsection
@push('scripts')

@endpush
