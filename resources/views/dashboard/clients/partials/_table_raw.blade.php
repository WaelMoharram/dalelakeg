<tr>
    <td>{!! $loop->index +1 !!}</td>
    <td><img src="{!! url('/').'/'.$client->image !!}" style="width: 100px; height: 100px;"></td>
    <td>{!! $client->name !!}</td>
    <td>
        <div class="btn-group" role="group" aria-label="Vertical button group">

            <div class="btn-group" role="group">
                @component('dashboard.layouts.partials.buttons._edit_button',[
                        'route' => route('dashboard.clients.edit',$client->id),
                        'tooltip' => __('Edit clients'),
                         ])
                @endcomponent
            </div>
            <div class="btn-group" role="group">
                @component('dashboard.layouts.partials.buttons._delete_button',[
                            'id'=>$client->id,
                            'route' => route('dashboard.clients.destroy',$client->id) ,
                            'tooltip' => __('Delete clients'),
                             ])
                @endcomponent
            </div>

        </div>



    </td>
</tr>

