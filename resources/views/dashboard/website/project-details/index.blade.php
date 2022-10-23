@extends('dashboard.layouts.app')
@section('title'){!! __('Project details') !!}@endsection
@section('header')@endsection
@section('breadcrumb')
        @include('dashboard.layouts.partials._breadcrumb',['level'=>'project-details'])
@endsection
@section('btn')
        @include('dashboard.layouts.partials._add_modal_icon',['route'=>'project-details'])
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
                                @include('dashboard.website.project-details.partials._table')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Modal -->
    <div class="modal fade text-left" id="addModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel1">{{__('Add')}}</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                {!! Form::open(['method'=>'post','route'=>'dashboard.project-details.store','class'=>'form','enctype' => 'multipart/form-data']) !!}
                <div class="modal-body">

                    {{ csrf_field() }}
                    @include('dashboard.website.project-details.partials._form')
                </div>
                <div class="modal-footer">

                        <button type="submit" class="btn btn-success">{!! __('submit') !!}</button>


                    <button type="button" class="btn btn-primary" data-dismiss="modal">{{__('Close')}}</button>
                </div>
                </form>
            </div>
        </div>
    </div>

@endsection

