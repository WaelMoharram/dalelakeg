<tr>
    <td>{!! $loop->index +1 !!}</td>
    <td><img src="{!! url('/').'/'.$slider->slider_image !!}" style="width: 100px; height: 100px;"></td>
    <td>{!! $slider->slider_text_main !!}</td>
    <td>{!! $slider->slider_text_sub !!}</td>
    <td>
        <div class="btn-group" role="group" aria-label="Vertical button group">

            <div class="btn-group" role="group">
                @component('dashboard.layouts.partials.buttons._edit_button',[
                        'route' => route('dashboard.sliders.edit',$slider->id),
                        'tooltip' => __('Edit sliders'),
                         ])
                @endcomponent
            </div>
            <div class="btn-group" role="group">
                @component('dashboard.layouts.partials.buttons._delete_button',[
                            'id'=>$slider->id,
                            'route' => route('dashboard.sliders.destroy',$slider->id) ,
                            'tooltip' => __('Delete sliders'),
                             ])
                @endcomponent
            </div>

        </div>



    </td>
</tr>

