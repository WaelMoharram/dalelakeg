<tr>
    <td>{!! $loop->index +1 !!}</td>
    <td>{!! $contactUs->title !!}</td>

    <td>
        <div class="btn-group" role="group" aria-label="Vertical button group">

            <div class="btn-group" role="group">
                @component('dashboard.layouts.partials.buttons._edit_button',[
                        'route' => route('dashboard.contact-us.edit',$contactUs->id),
                        'tooltip' => __('Edit contact us'),
                         ])
                @endcomponent
            </div>
            <div class="btn-group" role="group">
                @component('dashboard.layouts.partials.buttons._delete_button',[
                            'id'=>$contactUs->id,
                            'route' => route('dashboard.contact-us.destroy',$contactUs->id) ,
                            'tooltip' => __('Delete contact us'),
                             ])
                @endcomponent
            </div>

        </div>



    </td>
</tr>

