<tr>
    <td>{!! $loop->index +1 !!}</td>
    <td><img src="{!! url('/').'/'.$category->image !!}" style="width: 100px; height: 100px;"></td>
    <td>{!! $category->name !!}</td>
    <td>
        <div class="btn-group" role="group" aria-label="Vertical button group">

            <div class="btn-group" role="group">
                @component('dashboard.layouts.partials.buttons._edit_button',[
                        'route' => route('dashboard.categories.edit',$category->id),
                        'tooltip' => __('Edit categories'),
                         ])
                @endcomponent
            </div>
            <div class="btn-group" role="group">
                @component('dashboard.layouts.partials.buttons._delete_button',[
                            'id'=>$category->id,
                            'route' => route('dashboard.categories.destroy',$category->id) ,
                            'tooltip' => __('Delete categories'),
                             ])
                @endcomponent
            </div>

        </div>



    </td>
</tr>

