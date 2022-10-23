<tr>
    <td>{!! $loop->index +1 !!}</td>
    <td><img src="{!! url('/').'/'.$item->image1 !!}" style="width: 100px; height: 100px;"></td>
    <td>{!! optional($item->category)->name !!}</td>
    <td>{!! $item->name !!}</td>
    <td>{!! $item->price !!} {{__('LE')}}</td>
    <td>{!! $item->sale_price ?? 0 !!} {{__('LE')}}</td>
    <td>
        <div class="btn-group" role="group" aria-label="Vertical button group">

            <div class="btn-group" role="group">
                @component('dashboard.layouts.partials.buttons._edit_button',[
                        'route' => route('dashboard.items.edit',$item->id),
                        'tooltip' => __('Edit items'),
                         ])
                @endcomponent
            </div>
            <div class="btn-group" role="group">
                @component('dashboard.layouts.partials.buttons._delete_button',[
                            'id'=>$item->id,
                            'route' => route('dashboard.items.destroy',$item->id) ,
                            'tooltip' => __('Delete items'),
                             ])
                @endcomponent
            </div>

        </div>



    </td>
</tr>

