<tr>
    <td>{!! $loop->index +1 !!}</td>
    <td><img src="{!! url('/').'/'.$partner->image !!}" style="width: 100px; height: 100px;"></td>
    <td>
        <div class="btn-group" role="group" aria-label="Vertical button group">

            <div class="btn-group" role="group">
                @component('dashboard.layouts.partials.buttons._edit_button',[
                        'route' => route('dashboard.partners.edit',$partner->id),
                        'tooltip' => __('Edit partner'),
                         ])
                @endcomponent
            </div>
            <div class="btn-group" role="group">
                @component('dashboard.layouts.partials.buttons._delete_button',[
                            'id'=>$partner->id,
                            'route' => route('dashboard.partners.destroy',$partner->id) ,
                            'tooltip' => __('Delete partner'),
                             ])
                @endcomponent
            </div>

        </div>



    </td>
</tr>

