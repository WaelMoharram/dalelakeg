<tr>
    <td>{!! $loop->index +1 !!}</td>
{{--    <td><img src="{!! url('/').'/'.$member->image !!}" style="width: 100px; height: 100px;"></td>--}}
    <td>{!! $memberService->title !!}</td>
    <td>
        <div class="btn-group" role="group" aria-label="Vertical button group">

            <div class="btn-group" role="group">
                @component('dashboard.layouts.partials.buttons._edit_button',[
                        'route' => route('dashboard.members.edit',$memberService->id),
                        'tooltip' => __('Edit members'),
                         ])
                @endcomponent
            </div>
            <div class="btn-group" role="group">
                @component('dashboard.layouts.partials.buttons._delete_button',[
                            'id'=>$memberService->id,
                            'route' => route('dashboard.members.destroy',$memberService->id) ,
                            'tooltip' => __('Delete members'),
                             ])
                @endcomponent
            </div>

        </div>



    </td>
</tr>

