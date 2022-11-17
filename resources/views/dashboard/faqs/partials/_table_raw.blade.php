<tr>
    <td>{!! $loop->index +1 !!}</td>
    <td><i class="{{$faq->question_icon}}"></i></td>
    <td>{!! $faq->question !!}</td>
    <td>
        <div class="btn-group" role="group" aria-label="Vertical button group">

            <div class="btn-group" role="group">
                @component('dashboard.layouts.partials.buttons._edit_button',[
                        'route' => route('dashboard.faqs.edit',$faq->id),
                        'tooltip' => __('Edit faqs'),
                         ])
                @endcomponent
            </div>
            <div class="btn-group" role="group">
                @component('dashboard.layouts.partials.buttons._delete_button',[
                            'id'=>$faq->id,
                            'route' => route('dashboard.faqs.destroy',$faq->id) ,
                            'tooltip' => __('Delete faqs'),
                             ])
                @endcomponent
            </div>

        </div>



    </td>
</tr>

