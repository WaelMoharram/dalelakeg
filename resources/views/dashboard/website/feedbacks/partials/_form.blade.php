@if($errors->any())
    {!! implode('', $errors->all('<div>:message</div>')) !!}
@endif
<div class="form-group py-1 col-md-12">
    <label for="formInputRole"> {{__('Image')}}</label>
    {!! Form::file('image',null,['class'=>'form-control col','placeholder'=>__("Image")]) !!}
    {{input_error($errors,'image')}}
</div>

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
    <label for="name_en"> {{__('Name in English')}}</label>
    {!! Form::text('name_en',null,['id'=>'name_en','class'=>'form-control col','placeholder'=>__("Name in English")]) !!}
    {{input_error($errors,'name_en')}}
</div>

<div class="form-group py-1 col-md-6">
    <label for="name_ar"> {{__('Name in Arabic')}}</label>
    {!! Form::text('name_ar',null,['id'=>'name_ar','class'=>'form-control col','placeholder'=>__("Name in Arabic")]) !!}
    {{input_error($errors,'name_ar')}}
</div>


<div class="form-group py-1 col-md-6">
    <label for="text_en"> {{__('Text in English')}}</label>
    {!! Form::text('text_en',null,['id'=>'text_en','class'=>'form-control col','placeholder'=>__("Text in English")]) !!}
    {{input_error($errors,'text_en')}}
</div>

<div class="form-group py-1 col-md-6">
    <label for="text_ar"> {{__('Text in Arabic')}}</label>
    {!! Form::text('text_ar',null,['id'=>'text_ar','class'=>'form-control col','placeholder'=>__("Text in Arabic")]) !!}
    {{input_error($errors,'text_ar')}}
</div>



<div class="form-group py-1 col-md-6">
    <label for="youtube"> {{__('Youtube video code - if exist')}}</label>
    {!! Form::text('youtube',null,['id'=>'youtube','class'=>'form-control col','placeholder'=>__("Code")]) !!}
    {{input_error($errors,'youtube')}}
</div>



