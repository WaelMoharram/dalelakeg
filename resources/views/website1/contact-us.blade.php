@extends('website.app')
@section('title'){!! __('Home') !!}@endsection
@section('header')@endsection

@section('content')

    <!-- Page Title
    ============================================= -->
    <section id="page-title">

        <div class="container clearfix">
            <h1>{{__('Contact')}}</h1>
            <span>{{__('Get in Touch with Us')}}</span>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('home')}}">{{__('Home')}}</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{__('Contact')}}</li>
            </ol>
        </div>

    </section><!-- #page-title end -->

    <!-- Page Sub Menu
    ============================================= -->
    <div id="page-menu">
        <div id="page-menu-wrap">
            <div class="container">
                <div class="page-menu-row">

                    <div class="page-menu-title">{{__('Contact')}} <span>{{__('Options')}}</span></div>

                    <nav class="page-menu-nav">
                        <ul class="page-menu-container">
                            @foreach($contactsUs as $one)
                            <li class="page-menu-item @if($one->id == $contactUs->id) current @endif"><a href="{{route('contact-us',['id'=>$one->id])}}"><div>{{$one->title}}</div></a></li>
                            @endforeach

                        </ul>
                    </nav>

                    <div id="page-menu-trigger"><i class="icon-reorder"></i></div>

                </div>
            </div>
        </div>
    </div><!-- #page-menu end -->

    <!-- Content
    ============================================= -->
    <section id="content">
        <div class="content-wrap">
            <div class="container clearfix">

                <div class="row align-items-stretch col-mb-50 mb-0">
                    <!-- Contact Form
                    ============================================= -->
                    <div class="col-lg-12">

                        <div class="fancy-title title-border">
                            <h3>{{__('Send us a message')}}</h3>
                        </div>

                        <div class="form-widget">

                            <div class="form-result"></div>

                            <form class="mb-0"  action="{{route('contact-form')}}" method="post">
                                @CSRF
                                <input type="hidden" name="contact_us_id" value="{{$contactUs->id}}">
                                <div class="form-process">
                                    <div class="css3-spinner">
                                        <div class="css3-spinner-scaler"></div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 form-group">
                                        <label for="template-contactform-name">{{__('Name')}} <small>*</small></label>
                                        <input required type="text" id="template-contactform-name" name="template-contactform-name" value="" class="sm-form-control required" />
                                    </div>

                                    <div class="col-md-6 form-group">
                                        <label for="template-contactform-email">{{__('Email')}} <small>*</small></label>
                                        <input required type="email" id="template-contactform-email" name="template-contactform-email" value="" class="required email sm-form-control" />
                                    </div>


                                    <div class="w-100"></div>

                                    <div class="col-12 form-group">
                                        <label for="template-contactform-message">{{__('Message')}} <small>*</small></label>
                                        <textarea required class="required sm-form-control" id="template-contactform-message" name="template-contactform-message" rows="6" cols="30"></textarea>
                                    </div>


                                    <div class="col-12 form-group">
                                        <button name="submit" type="submit"  value="Submit" class="button button-3d m-0">{{__('Submit Message')}}</button>
                                    </div>
                                </div>


                            </form>
                        </div>

                    </div><!-- Contact Form End -->


                </div>

                <!-- Contact Info
                ============================================= -->
                <div class="row col-mb-50">


                    <div class="col-sm-6 col-lg-3">
                        <div class="feature-box fbox-center fbox-bg fbox-plain">
                            <div class="fbox-icon">
                                <a href="#"><i class="{{$contactUs->section_1_icon}}"></i></a>
                            </div>
                            <div class="fbox-content">
                                <h3>{{$contactUs->section_1_title}}<span class="subtitle">{{$contactUs->section_1_sub_title}}</span></h3>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-3">
                        <div class="feature-box fbox-center fbox-bg fbox-plain">
                            <div class="fbox-icon">
                                <a href="#"><i class="{{$contactUs->section_2_icon}}"></i></a>
                            </div>
                            <div class="fbox-content">
                                <h3>{{$contactUs->section_2_title}}<span class="subtitle">{{$contactUs->section_2_sub_title}}</span></h3>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-3">
                        <div class="feature-box fbox-center fbox-bg fbox-plain">
                            <div class="fbox-icon">
                                <a href="#"><i class="{{$contactUs->section_3_icon}}"></i></a>
                            </div>
                            <div class="fbox-content">
                                <h3>{{$contactUs->section_3_title}}<span class="subtitle">{{$contactUs->section_3_sub_title}}</span></h3>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-3">
                        <div class="feature-box fbox-center fbox-bg fbox-plain">
                            <div class="fbox-icon">
                                <a href="#"><i class="{{$contactUs->section_4_icon}}"></i></a>
                            </div>
                            <div class="fbox-content">
                                <h3>{{$contactUs->section_4_title}}<span class="subtitle">{{$contactUs->section_4_sub_title}}</span></h3>
                            </div>
                        </div>
                    </div>
                </div><!-- Contact Info End -->

            </div>
        </div>
    </section><!-- #content end -->
@endsection

