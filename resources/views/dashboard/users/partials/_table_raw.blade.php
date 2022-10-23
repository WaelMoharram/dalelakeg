<tr>
    <td>{!! $loop->index +1 !!}</td>
    <td>{!! $user->name !!}</td>
    <td>{!! $user->email !!}</td>
    <td>

        <div class="btn-group" role="group" aria-label="Vertical button group">
            <div class="btn-group" role="group">
            @component('dashboard.layouts.partials.buttons._show_button',[
                    'route' => route('dashboard.users.show',$user->id),
                    'tooltip' => __('Show '.$user['name']),
                     ])
            @endcomponent
            </div>
            <div class="btn-group" role="group">
        @component('dashboard.layouts.partials.buttons._edit_button',[
                    'route' => route('dashboard.users.edit',$user->id),
                    'tooltip' => __('Edit '.$user['name']),
                     ])
            @endcomponent
            </div>

                    <div class="btn-group" role="group">
                        @component('dashboard.layouts.partials.buttons._delete_button',[
                                        'id'=>$user->id,
                                        'route' => route('dashboard.users.destroy',$user->id) ,
                                        'tooltip' => __('Delete'),
                                         ])
                        @endcomponent
            </div>

                    <div class="btn-group" role="group">
                        @if($user->status == 1)
                            @component('dashboard.layouts.partials.buttons._suspend',[
                                        'id'=>$user->id,
                                        'route' => route('dashboard.users.suspend',$user->id) ,
                                        'tooltip' => __('De-active'),
                                         ])
                            @endcomponent
                        @else
                            @component('dashboard.layouts.partials.buttons._activate',[
                                'id'=>$user->id,
                                'route' => route('dashboard.users.suspend',$user->id) ,
                                'tooltip' => __('Active'),
                                 ])
                            @endcomponent
                        @endif
                    </div>
                </div>
        </div>



    </td>
</tr>

