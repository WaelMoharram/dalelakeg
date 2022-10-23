@if($errors->any())
    {!! implode('', $errors->all('<div>:message</div>')) !!}
@endif

<div class="form-group py-1 col-md-6">
    <label for="title_en"> {{__('Title in English')}}</label>
    {!! Form::text('title_en',null,['id'=>'title_en','class'=>'form-control col','placeholder'=>__("Title in English")]) !!}
    {{input_error($errors,'title_en')}}
</div>

<div class="form-group py-1 col-md-6">
    <label for="title_ar"> {{__('Title in Arabic')}}</label>
    {!! Form::text('title_ar',null,['id'=>'title_ar','class'=>'form-control col','placeholder'=>__("Title in Arabic")]) !!}
    {{input_error($errors,'title_ar')}}
</div>




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

