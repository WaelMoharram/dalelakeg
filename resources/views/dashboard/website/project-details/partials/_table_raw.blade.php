<tr>
    <td>{!! $loop->index +1 !!}</td>

    <td>{!! $detail->content !!}</td>
    <td>
        <div class="btn-group" role="group" aria-label="Vertical button group">


            <div class="btn-group" role="group">
                @component('dashboard.layouts.partials.buttons._delete_button',[
                            'id'=>$detail->id,
                            'route' => route('dashboard.project-details.destroy',$detail->id) ,
                            'tooltip' => __('Delete detail'),
                             ])
                @endcomponent
            </div>

        </div>



    </td>
</tr>

