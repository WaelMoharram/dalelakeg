@if($errors->any())
    {!! implode('', $errors->all('<div>:message</div>')) !!}
@endif
<div class="form-group py-1 col-md-12">
    <label for="formInputRole"> {{__('Image')}}</label>
    <br>
    {!! Form::file('image',null,['class'=>'form-control col','placeholder'=>__("Image")]) !!}
    {{input_error($errors,'image')}}
</div>



<div class="form-group py-1 col-md-6">
    <label for="name-ar"> {{__('Name in Arabic')}}</label>
    {!! Form::text('name.ar',null,['id'=>'name-ar','class'=>'form-control col','placeholder'=>__("Name in Arabic")]) !!}
    {{input_error($errors,'name.ar')}}
</div>

<div class="form-group py-1 col-md-6">
    <label for="name-en"> {{__('Name in English')}}</label>
    {!! Form::text('name.en',null,['id'=>'name-en','class'=>'form-control col','placeholder'=>__("Name in English")]) !!}
    {{input_error($errors,'name.en')}}
</div>

<div class="form-group py-1 col-md-12">
    <label for="show_in_slider"> {{__('Show in slider')}} </label>
    {{Form::select('show_in_slider',['No'=>0,'Yes'=>1] ,$rate??null,['class'=>'form-control mb-2','id'=>'show_in_slider',disable_on_show()])}}
    {{input_error($errors,'show_in_slider')}}
</div>

<div class="form-group py-1 col-md-12">
    <label for="formInputRole"> {{__('Slider image')}}</label>
    <br>
    {!! Form::file('slider_image',null,['class'=>'form-control col','placeholder'=>__("Slider image")]) !!}
    {{input_error($errors,'slider_image')}}
</div>

@section('footer')
{{--    <script>--}}
{{--        CKEDITOR.replace( 'content' );--}}
{{--    </script>--}}
@endsection
