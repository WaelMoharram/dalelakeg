@if($errors->any())
    {!! implode('', $errors->all('<div>:message</div>')) !!}
@endif

@if(isset($category->image))
    <div class="col-md-12">
        <img id="image" src="{{url($category->image)}}" style="width: 100px;border-radius: 50px;">
    </div>
@else
    <div class="col-md-12">
        <img id="image" style="width: 100px;border-radius: 50px;">
    </div>
@endif
<div class="form-group py-1 col-md-12">
    <label for="formInputRole"> {{__('Image')}}</label>
    <br>
    {!! Form::file('image',['class'=>'form-control col','placeholder'=>__("Image"),'onchange'=>"loadImage(event)"]) !!}
    {{input_error($errors,'image')}}
</div>



<div class="form-group py-1 col-md-6">
    <label for="name-ar"> {{__('Name in Arabic')}}</label>
    {!! Form::text('name[ar]',($category ? $category->getTranslation('name', 'ar') : null),['id'=>'name-ar','class'=>'form-control col','placeholder'=>__("Name in Arabic")]) !!}
    {{input_error($errors,'name[ar]')}}
</div>

<div class="form-group py-1 col-md-6">
    <label for="name-en"> {{__('Name in English')}}</label>
    {!! Form::text('name[en]',($category ? $category->getTranslation('name', 'en') : null),['id'=>'name-en','class'=>'form-control col','placeholder'=>__("Name in English")]) !!}
    {{input_error($errors,'name[en]')}}
</div>

{{--<div class="form-group py-1 col-md-12">--}}
{{--    <label for="show_in_slider"> {{__('Show in slider')}} </label>--}}
{{--    {{Form::select('show_in_slider',[0=>'No',1=>'Yes'] ,$rate??null,['class'=>'form-control mb-2','id'=>'show_in_slider',disable_on_show()])}}--}}
{{--    {{input_error($errors,'show_in_slider')}}--}}
{{--</div>--}}

{{--@if(isset($category->slider_image))--}}
{{--    <div class="col-md-12">--}}
{{--        <img id="slider_image" src="{{url($category->slider_image)}}" style="width: 100px;border-radius: 50px;">--}}
{{--    </div>--}}
{{--@else--}}
{{--    <div class="col-md-12">--}}
{{--        <img id="slider_image" style="width: 100px;border-radius: 50px;">--}}
{{--    </div>--}}
{{--@endif--}}

{{--<div class="form-group py-1 col-md-12">--}}
{{--    <label for="formInputRole"> {{__('Slider image')}}</label>--}}
{{--    <br>--}}
{{--    {!! Form::file('slider_image',['class'=>'form-control col','placeholder'=>__("Slider image"),'onchange'=>"loadSliderImage(event)"]) !!}--}}
{{--    {{input_error($errors,'slider_image')}}--}}
{{--</div>--}}


{{--<div class="form-group py-1 col-md-6">--}}
{{--    <label for="slider_text_main-en"> {{__('Slider main text in English')}}</label>--}}
{{--    {!! Form::text('slider_text_main[en]',($category->slider_text_main ? $category->getTranslation('slider_text_main', 'en') : null),['id'=>'slider_text_main-en','class'=>'form-control col','placeholder'=>__("Slider main text in English")]) !!}--}}
{{--    {{input_error($errors,'slider_text_main[en]')}}--}}
{{--</div>--}}

{{--<div class="form-group py-1 col-md-6">--}}
{{--    <label for="slider_text_main-ar"> {{__('Slider main text in Arabic')}}</label>--}}
{{--    {!! Form::text('slider_text_main[ar]',($category->slider_text_main ? $category->getTranslation('slider_text_main', 'ar') : null),['id'=>'slider_text_main-ar','class'=>'form-control col','placeholder'=>__("Slider main text in Arabic")]) !!}--}}
{{--    {{input_error($errors,'slider_text_main[ar]')}}--}}
{{--</div>--}}


{{--<div class="form-group py-1 col-md-6">--}}
{{--    <label for="slider_text_sub-en"> {{__('Slider sub text in English')}}</label>--}}
{{--    {!! Form::text('slider_text_sub[en]',($category->slider_text_sub ? $category->getTranslation('slider_text_sub', 'en') : null),['id'=>'slider_text_sub-en','class'=>'form-control col','placeholder'=>__("Slider sub text in English")]) !!}--}}
{{--    {{input_error($errors,'slider_text_sub[en]')}}--}}
{{--</div>--}}

{{--<div class="form-group py-1 col-md-6">--}}
{{--    <label for="slider_text_sub-ar"> {{__('Slider sub text in Arabic')}}</label>--}}
{{--    {!! Form::text('slider_text_sub[ar]',($category->slider_text_sub ? $category->getTranslation('slider_text_sub', 'ar') : null),['id'=>'slider_text_sub-ar','class'=>'form-control col','placeholder'=>__("Slider sub text in Arabic")]) !!}--}}
{{--    {{input_error($errors,'slider_text_sub[ar]')}}--}}
{{--</div>--}}


@section('footer')
{{--    <script>--}}
{{--        CKEDITOR.replace( 'content' );--}}
{{--    </script>--}}

<script>
    console.log('out')

    var loadImage = function(event) {
        console.log('image')

        var output = document.getElementById('image');
        output.src = URL.createObjectURL(event.target.files[0]);
        output.onload = function() {
            URL.revokeObjectURL(output.src) // free memory
        }
    };

    var loadSliderImage = function(event) {
        console.log('slider_image')

        var output = document.getElementById('slider_image');
        output.src = URL.createObjectURL(event.target.files[0]);
        output.onload = function() {
            URL.revokeObjectURL(output.src) // free memory
        }
    };

</script>
@endsection
