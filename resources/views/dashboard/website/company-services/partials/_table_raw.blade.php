<tr>
    <td>{!! $loop->index +1 !!}</td>
    <td><img src="{!! url('/').'/'.$service->image !!}" style="width: 100px; height: 100px;"></td>
    <td>{!! $service->content !!}</td>
    <td>
        <div class="btn-group" role="group" aria-label="Vertical button group">

            <div class="btn-group" role="group">
                @component('dashboard.layouts.partials.buttons._edit_button',[
                        'route' => route('dashboard.company-services.edit',$service->id),
                        'tooltip' => __('Edit service'),
                         ])
                @endcomponent
            </div>
            <div class="btn-group" role="group">
                @component('dashboard.layouts.partials.buttons._delete_button',[
                            'id'=>$service->id,
                            'route' => route('dashboard.company-services.destroy',$service->id) ,
                            'tooltip' => __('Delete service'),
                             ])
                @endcomponent
            </div>

        </div>



    </td>
</tr>

