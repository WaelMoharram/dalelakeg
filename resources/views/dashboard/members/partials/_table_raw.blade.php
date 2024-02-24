<tr>
    <td>{!! $loop->index +1 !!}</td>
    <td><img src="{!! url('/').'/'.$member->image !!}" style="width: 100px; height: 100px;"></td>
    <td>{!! $member->title !!}</td>
    <td>
        <div class="btn-group" role="group" aria-label="Vertical button group">

            <div class="btn-group" role="group">

                <a href="{{route('dashboard.member-services.index',['member_id'=>$member->id])}}" data-toggle="tooltip" data-placement="top"
                   class="btn btn-md btn-info">
                    <i class="fa fa-plus"></i> الخدمات
                </a>
            </div>


            <div class="btn-group" role="group">
                @component('dashboard.layouts.partials.buttons._edit_button',[
                        'route' => route('dashboard.members.edit',$member->id),
                        'tooltip' => __('Edit members'),
                         ])
                @endcomponent
            </div>
            <div class="btn-group" role="group">
                @component('dashboard.layouts.partials.buttons._delete_button',[
                            'id'=>$member->id,
                            'route' => route('dashboard.members.destroy',$member->id) ,
                            'tooltip' => __('Delete members'),
                             ])
                @endcomponent
            </div>

        </div>



    </td>
</tr>

