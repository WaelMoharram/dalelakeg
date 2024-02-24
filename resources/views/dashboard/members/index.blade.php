@extends('dashboard.layouts.app')
@section('title'){!! __('members') !!}@endsection
@section('header')@endsection
@section('breadcrumb')
        @include('dashboard.layouts.partials._breadcrumb',['level'=>'members'])
@endsection
@section('btn')
    <a href="{{route('dashboard.members.create',['service_id'=>request()->service_id])}}" class="btn-icon btn btn-primary btn-round btn-sm" ><i class="feather icon-plus"></i> اضافة جديد}</a>
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
                            <div class="table-responsive">
                                @include('dashboard.members.partials._table')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

