@extends('dashboard.layouts.app')
@section('title'){!! __('Create comapny service') !!}@endsection
@section('header')@endsection
@section('breadcrumb')
    @include('dashboard.layouts.partials._breadcrumb',['level'=>'company-services'])
@endsection
@section('content')
    <section id="column-selectors">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">@yield('title')</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body card-dashboard">
                            {!! Form::open(['method'=>'post','route'=>'dashboard.company-services.store','class'=>'form','enctype' => 'multipart/form-data']) !!}
                            @csrf()
                            <div class="row">
                                @include('dashboard.website.company-services.partials._form')
                                @component('dashboard.layouts.partials.buttons._save_button',[])
                                @endcomponent
                            </div>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('js-validation')
    <script type="text/javascript" src="{{ asset('vendor/jsvalidation/js/jsvalidation.js')}}"></script>
    {!! JsValidator::formRequest('App\Http\Requests\Website\CompanyServiceRequest', '.form'); !!}
@endsection
