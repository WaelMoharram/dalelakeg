<tr>
    <td>{!! $loop->index +1 !!}</td>
    <td><img src="{!! url('/').'/'.$page->image !!}" style="width: 100px; height: 100px;"></td>
    <td>{!! $page->title !!}</td>
    <td>{!! $page->content !!}</td>
    <td>{!! $page->lang == 'ar' ? __('Arabic') : __('English') !!}</td>
    <td>
        <div class="btn-group" role="group" aria-label="Vertical button group">

            <div class="btn-group" role="group">
                @component('dashboard.layouts.partials.buttons._edit_button',[
                        'route' => route('dashboard.pages.edit',$page->id),
                        'tooltip' => __('Edit pages'),
                         ])
                @endcomponent
            </div>
            @if($page->id >4)
            <div class="btn-group" role="group">
                @component('dashboard.layouts.partials.buttons._delete_button',[
                            'id'=>$page->id,
                            'route' => route('dashboard.pages.destroy',$page->id) ,
                            'tooltip' => __('Delete pages'),
                             ])
                @endcomponent
            </div>
                @endif

        </div>



    </td>
</tr>

