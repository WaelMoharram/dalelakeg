<table class="table table-striped dataex-html5-selectors">
    <thead>
    <tr>
        <th scope="col">{{__('#') }}</th>
        <th scope="col">{{__('Main image')}}</th>
        <th scope="col">{{__('Category')}}</th>
        <th scope="col">{{__('Name')}}</th>
        <th scope="col">{{__('Price')}}</th>
        <th scope="col">{{__('Sale price')}}</th>
        <th scope="col">{{__('Options')}}</th>
    </thead>
    <tbody>
    @foreach($items as $item)
        @include('dashboard.items.partials._table_raw')
    @endforeach
    </tbody>
    <tfoot>
    <tr>
        <th scope="col">{{__('#') }}</th>
        <th scope="col">{{__('Main image')}}</th>
        <th scope="col">{{__('Category')}}</th>
        <th scope="col">{{__('Name')}}</th>
        <th scope="col">{{__('Price')}}</th>
        <th scope="col">{{__('Sale price')}}</th>
        <th scope="col">{{__('Options')}}</th>
    </tr>
    </tfoot>
</table>

