<tr>
    <td>{!! $loop->index +1 !!}</td>
    <td><img src="{!! url('/').'/'.$project->image !!}" style="width: 100px; height: 100px;"></td>

    <td>{!! $project->title !!}</td>
    <td>{!! $project->content !!}</td>
    <td>
        <div class="btn-group" role="group" aria-label="Vertical button group">


            @if($project->type == 1)
                <div class="btn-group" role="group">
                    @component('dashboard.layouts.partials.buttons._project_button',[
                            'route' => route('dashboard.project-details.index',['id'=>$project->id]),
                            'tooltip' => __('show details'),
                             ])
                    @endcomponent
                </div>
            @endif
            <div class="btn-group" role="group">
                @component('dashboard.layouts.partials.buttons._edit_button',[
                        'route' => route('dashboard.projects.edit',$project->id),
                        'tooltip' => __('Edit project'),
                         ])
                @endcomponent
            </div>
            <div class="btn-group" role="group">
                @component('dashboard.layouts.partials.buttons._delete_button',[
                            'id'=>$project->id,
                            'route' => route('dashboard.projects.destroy',$project->id) ,
                            'tooltip' => __('Delete project'),
                             ])
                @endcomponent
            </div>

        </div>



    </td>
</tr>

