<table class="table table-striped dataex-html5-selectors">
    <thead>
    <tr>
        <th scope="col">{{__('#') }}</th>
        <th scope="col">{{__('Name')}}</th>
        <th scope="col">{{__('Description')}}</th>
        <th scope="col">{{__('Options')}}</th>
    </thead>
    <tbody>
    @foreach($memberServices as $memberService)
        @include('dashboard.member-services.partials._table_raw')
    @endforeach
    </tbody>
    <tfoot>
    <tr>
        <th scope="col">{{__('#') }}</th>
        <th scope="col">{{__('Name')}}</th>
        <th scope="col">{{__('Description')}}</th>
        <th scope="col">{{__('Options')}}</th>
    </tr>
    </tfoot>
</table>

