<tr>
    <td>{!! $loop->index +1 !!}</td>
    <td>{!! $contact->mobile !!}</td>
    <td>

                @component('dashboard.layouts.partials.buttons._delete_button',[
                            'id'=>$contact->id,
                            'route' => route('dashboard.contacts.destroy',$contact->id) ,
                            'tooltip' => __('Delete contact'),
                             ])
                @endcomponent




    </td>
</tr>

