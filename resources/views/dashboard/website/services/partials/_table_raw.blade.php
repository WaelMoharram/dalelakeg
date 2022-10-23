<tr>
    <td>{!! $loop->index +1 !!}</td>
    <td>{!! $service->title !!}</td>
    <td>{!! $service->content !!}</td>
    <td>
        <div class="btn-group" role="group" aria-label="Vertical button group">

            <div class="btn-group" role="group">
                @component('dashboard.layouts.partials.buttons._edit_button',[
                        'route' => route('dashboard.services.edit',$service->id),
                        'tooltip' => __('Edit service'),
                         ])
                @endcomponent
            </div>
            <div class="btn-group" role="group">
                @component('dashboard.layouts.partials.buttons._delete_button',[
                            'id'=>$service->id,
                            'route' => route('dashboard.services.destroy',$service->id) ,
                            'tooltip' => __('Delete service'),
                             ])
                @endcomponent
            </div>

        </div>



    </td>
</tr>

