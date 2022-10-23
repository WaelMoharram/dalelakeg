@if($errors->any())
    {!! implode('', $errors->all('<div>:message</div>')) !!}
@endif

@if(isset($slider->slider_image))
    <div class="col-md-12">
        <img id="slider_image" src="{{url($slider->slider_image)}}" style="width: 100px;border-radius: 50px;">
    </div>
@else
    <div class="col-md-12">
        <img id="slider_image" style="width: 100px;border-radius: 50px;">
    </div>
@endif

<div class="form-group py-1 col-md-12">
    <label for="formInputRole"> {{__('Slider image')}}</label>
    <br>
    {!! Form::file('slider_image',['class'=>'form-control col','placeholder'=>__("Slider image"),'onchange'=>"loadSliderImage(event)"]) !!}
    {{input_error($errors,'slider_image')}}
</div>


<div class="form-group py-1 col-md-6">
    <label for="slider_text_main-en"> {{__('Slider main text in English')}}</label>
    {!! Form::text('slider_text_main[en]',($slider->slider_text_main ? $slider->getTranslation('slider_text_main', 'en') : null),['id'=>'slider_text_main-en','class'=>'form-control col','placeholder'=>__("Slider main text in English")]) !!}
    {{input_error($errors,'slider_text_main[en]')}}
</div>

<div class="form-group py-1 col-md-6">
    <label for="slider_text_main-ar"> {{__('Slider main text in Arabic')}}</label>
    {!! Form::text('slider_text_main[ar]',($slider->slider_text_main ? $slider->getTranslation('slider_text_main', 'ar') : null),['id'=>'slider_text_main-ar','class'=>'form-control col','placeholder'=>__("Slider main text in Arabic")]) !!}
    {{input_error($errors,'slider_text_main[ar]')}}
</div>


<div class="form-group py-1 col-md-6">
    <label for="slider_text_sub-en"> {{__('Slider sub text in English')}}</label>
    {!! Form::text('slider_text_sub[en]',($slider->slider_text_sub ? $slider->getTranslation('slider_text_sub', 'en') : null),['id'=>'slider_text_sub-en','class'=>'form-control col','placeholder'=>__("Slider sub text in English")]) !!}
    {{input_error($errors,'slider_text_sub[en]')}}
</div>

<div class="form-group py-1 col-md-6">
    <label for="slider_text_sub-ar"> {{__('Slider sub text in Arabic')}}</label>
    {!! Form::text('slider_text_sub[ar]',($slider->slider_text_sub ? $slider->getTranslation('slider_text_sub', 'ar') : null),['id'=>'slider_text_sub-ar','class'=>'form-control col','placeholder'=>__("Slider sub text in Arabic")]) !!}
    {{input_error($errors,'slider_text_sub[ar]')}}
</div>

<div class="form-group py-1 col-md-6">
    <label for="position"> {{__('Center text')}} </label>
    {{Form::select('position',['yes'=>__('Yes'),'no'=>__('No')] ,null,['class'=>'form-control mb-2','id'=>'position'])}}
    {{input_error($errors,'position')}}
</div>

<div class="form-group py-1 col-md-6">
    <label for="color"> {{__('Text color')}} </label>
    {{Form::select('color',['dark'=>__('Normal'),'normal'=>__('Dark')] ,null,['class'=>'form-control mb-2','id'=>'color'])}}
    {{input_error($errors,'color')}}
</div>

@section('footer')
{{--    <script>--}}
{{--        CKEDITOR.replace( 'content' );--}}
{{--    </script>--}}

<script>
    console.log('out')



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
