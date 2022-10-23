<tr>
    <td>{!! $loop->index +1 !!}</td>
    <td><img src="{!! url('/').'/'.$feedback->image !!}" style="width: 100px; height: 100px;"></td>
    <td>{!! $feedback->name !!}</td>
    <td>{!! $feedback->title !!}</td>
    <td>{!! $feedback->text !!}</td>
    <td>
        <div class="btn-group" role="group" aria-label="Vertical button group">

            <div class="btn-group" role="group">
                @component('dashboard.layouts.partials.buttons._edit_button',[
                        'route' => route('dashboard.feedbacks.edit',$feedback->id),
                        'tooltip' => __('Edit feedback'),
                         ])
                @endcomponent
            </div>
            <div class="btn-group" role="group">
                @component('dashboard.layouts.partials.buttons._delete_button',[
                            'id'=>$feedback->id,
                            'route' => route('dashboard.feedbacks.destroy',$feedback->id) ,
                            'tooltip' => __('Delete feedback'),
                             ])
                @endcomponent
            </div>

        </div>



    </td>
</tr>

