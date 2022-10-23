<tr>
    <td>{!! $loop->index +1 !!}</td>
    <td>{!! $event->content !!}</td>
    <td><a href="{{url($event->video_url)}}"><i class="feather icon-youtube"></i></a></td>
    <td>
        <div class="btn-group" role="group" aria-label="Vertical button group">

            <div class="btn-group" role="group">
                @component('dashboard.layouts.partials.buttons._edit_button',[
                        'route' => route('dashboard.events.edit',$event->id),
                        'tooltip' => __('Edit events'),
                         ])
                @endcomponent
            </div>
            <div class="btn-group" role="group">
                @component('dashboard.layouts.partials.buttons._delete_button',[
                            'id'=>$event->id,
                            'route' => route('dashboard.events.destroy',$event->id) ,
                            'tooltip' => __('Delete events'),
                             ])
                @endcomponent
            </div>

        </div>



    </td>
</tr>

