<table class="table table-striped dataex-html5-selectors">
    <thead>
    <tr>
        <th scope="col">{{__('#') }}</th>
        <th scope="col">{{__('Image')}}</th>
        <th scope="col">{{__('Title')}}</th>
        <th scope="col">{{__('Content')}}</th>
        <th scope="col">{{__('Options')}}</th>
    </thead>
    <tbody>
    @foreach($news as $new)
        @include('dashboard.website.news.partials._table_raw')
    @endforeach
    </tbody>
    <tfoot>
    <tr>
        <th scope="col">{{__('#') }}</th>
        <th scope="col">{{__('Image')}}</th>
        <th scope="col">{{__('Title')}}</th>
        <th scope="col">{{__('Content')}}</th>
        <th scope="col">{{__('Options')}}</th>
    </tr>
    </tfoot>
</table>

