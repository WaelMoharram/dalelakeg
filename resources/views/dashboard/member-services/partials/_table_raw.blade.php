<tr>
    <td>{!! $loop->index +1 !!}</td>
{{--    <td><img src="{!! url('/').'/'.$member->image !!}" style="width: 100px; height: 100px;"></td>--}}
    <td>{!! $memberService->title !!}</td>
    <td>
        <div class="btn-group" role="group" aria-label="Vertical button group">

            <div class="btn-group" role="group">
                @component('dashboard.layouts.partials.buttons._edit_button',[
                        'route' => route('dashboard.member-services.edit',$memberService->id),
                        'tooltip' => __('Edit member-services'),
                         ])
                @endcomponent
            </div>
            <div class="btn-group" role="group">
                @component('dashboard.layouts.partials.buttons._delete_button',[
                            'id'=>$memberService->id,
                            'route' => route('dashboard.member-services.destroy',$memberService->id) ,
                            'tooltip' => __('Delete member-services'),
                             ])
                @endcomponent
            </div>

        </div>



    </td>
</tr>

