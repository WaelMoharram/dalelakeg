@extends('dashboard.layouts.app')
@section('title'){!! __('Edit works') !!}@endsection
@section('header')@endsection
@section('breadcrumb')
    @include('dashboard.layouts.partials._breadcrumb',['level'=>'works'])
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
                            {!! Form::model($service,['method'=>'put','route'=>['dashboard.works.update',$service->id],'class'=>'form','enctype' => 'multipart/form-data']  ) !!}
                            @csrf()
                            <div class="row">
                                @include('dashboard.works.partials._form')
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

