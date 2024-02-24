<tr>
    <td>{!! $loop->index +1 !!}</td>
    <td><img src="{!! url('/').'/'.$service->image !!}" style="width: 100px; height: 100px;"></td>
    <td>{!! $service->name !!}</td>
    <td>{!! $service->views !!}</td>
    <td>

        <div class="btn-group" role="group" aria-label="Vertical button group">
            <div class="btn-group" role="group">

            <a href="{{route('dashboard.members.index',['service_id',$service->id])}}" data-toggle="tooltip" data-placement="top" title="{{$tooltip}}"
               class="btn btn-md btn-info">
                <i class="fa fa-plus"></i> الاعضاء
            </a>
            </div>

            <div class="btn-group" role="group">
                @component('dashboard.layouts.partials.buttons._edit_button',[
                        'route' => route('dashboard.services.edit',$service->id),
                        'tooltip' => __('Edit services'),
                         ])
                @endcomponent
            </div>
            <div class="btn-group" role="group">
                @component('dashboard.layouts.partials.buttons._delete_button',[
                            'id'=>$service->id,
                            'route' => route('dashboard.services.destroy',$service->id) ,
                            'tooltip' => __('Delete services'),
                             ])
                @endcomponent
            </div>

        </div>



    </td>
</tr>

