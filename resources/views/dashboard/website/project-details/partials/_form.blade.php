@if($errors->any())
    {!! implode('', $errors->all('<div>:message</div>')) !!}
@endif
<input type="hidden" name="project_id" value="{{request()->id}}">


<div class="form-group py-1 col-md-6">
    <label for="content_en"> {{__('Content in English')}} </label>
    {!! Form::textarea('content_en',null,['id'=>'content_en','class'=>'form-control col']) !!}
    {{input_error($errors,'content_en')}}
</div>

<div class="form-group py-1 col-md-6">
    <label for="content_ar"> {{__('Content in Arabic')}} </label>
    {!! Form::textarea('content_ar',null,['id'=>'content_ar','class'=>'form-control col']) !!}
    {{input_error($errors,'content_ar')}}
</div>

