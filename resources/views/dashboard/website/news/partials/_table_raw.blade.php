<tr>
    <td>{!! $loop->index +1 !!}</td>
    <td><img src="{!! url('/').'/'.$new->image !!}" style="width: 100px; height: 100px;"></td>
    <td>{!! $new->title !!}</td>
    <td>{!! $new->content !!}</td>
    <td>
        <div class="btn-group" role="group" aria-label="Vertical button group">

            <div class="btn-group" role="group">
                @component('dashboard.layouts.partials.buttons._edit_button',[
                        'route' => route('dashboard.news.edit',$new->id),
                        'tooltip' => __('Edit news'),
                         ])
                @endcomponent
            </div>
            <div class="btn-group" role="group">
                @component('dashboard.layouts.partials.buttons._delete_button',[
                            'id'=>$new->id,
                            'route' => route('dashboard.news.destroy',$new->id) ,
                            'tooltip' => __('Delete news'),
                             ])
                @endcomponent
            </div>

        </div>



    </td>
</tr>

