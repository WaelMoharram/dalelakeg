<tr>
    <td>{!! $loop->index +1 !!}</td>
    <td><img src="{!! url('/').'/'.$blog->image !!}" style="width: 100px; height: 100px;"></td>
    <td>{!! $blog->title !!}</td>
    <td>{!! $blog->content !!}</td>
    <td>{!! $blog->lang == 'ar' ? __('Arabic') : __('English') !!}</td>
    <td>
        <div class="btn-group" role="group" aria-label="Vertical button group">

            <div class="btn-group" role="group">
                @component('dashboard.layouts.partials.buttons._edit_button',[
                        'route' => route('dashboard.blogs.edit',$blog->id),
                        'tooltip' => __('Edit blogs'),
                         ])
                @endcomponent
            </div>
            <div class="btn-group" role="group">
                @component('dashboard.layouts.partials.buttons._delete_button',[
                            'id'=>$blog->id,
                            'route' => route('dashboard.blogs.destroy',$blog->id) ,
                            'tooltip' => __('Delete blogs'),
                             ])
                @endcomponent
            </div>

        </div>



    </td>
</tr>

