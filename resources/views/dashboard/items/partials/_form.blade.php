@if($errors->any())
    {!! implode('', $errors->all('<div>:message</div>')) !!}
@endif
<div class="col-md-6">
    @if(isset($item->image1))
        <div class="col-md-12">
            <img id="image1" src="{{url($item->image1)}}" style="width: 100px;border-radius: 50px;">
        </div>
    @else
        <div class="col-md-12">
            <img id="image1" style="width: 100px;border-radius: 50px;">
        </div>
    @endif
    <div class="form-group py-1 col-md-12">
        <label for="formInputRole"> {{__('Image1')}}</label>
        <br>
        {!! Form::file('image1',['class'=>'form-control col','placeholder'=>__("Image1"),'onchange'=>"loadImage1(event)"]) !!}
        {{input_error($errors,'image1')}}
    </div>
</div>

<div class="col-md-6">
    @if(isset($item->image2))
        <div class="col-md-12">
            <img id="image2" src="{{url($item->image2)}}" style="width: 100px;border-radius: 50px;">
        </div>
    @else
        <div class="col-md-12">
            <img id="image2" style="width: 100px;border-radius: 50px;">
        </div>
    @endif
    <div class="form-group py-1 col-md-12">
        <label for="formInputRole"> {{__('Image2')}}</label>
        <br>
        {!! Form::file('image2',['class'=>'form-control col','placeholder'=>__("Image2"),'onchange'=>"loadImage2(event)"]) !!}
        {{input_error($errors,'image2')}}
    </div>
</div>


<div class="form-group py-1 col-md-6">
    <label for="name-ar"> {{__('Name in Arabic')}}</label>
    {!! Form::text('name[ar]',($item ? $item->getTranslation('name', 'ar') : null),['id'=>'name-ar','class'=>'form-control col','placeholder'=>__("Name in Arabic")]) !!}
    {{input_error($errors,'name[ar]')}}
</div>

<div class="form-group py-1 col-md-6">
    <label for="name-en"> {{__('Name in English')}}</label>
    {!! Form::text('name[en]',($item ? $item->getTranslation('name', 'en') : null),['id'=>'name-en','class'=>'form-control col','placeholder'=>__("Name in English")]) !!}
    {{input_error($errors,'name[en]')}}
</div>

<div class="form-group py-1 col-md-6">
    <label for="description-ar"> {{__('Description in Arabic')}}</label>
    {!! Form::textarea('description[ar]',($item ? $item->getTranslation('description', 'ar') : null),['id'=>'description-ar','class'=>'form-control col','placeholder'=>__("Description in Arabic")]) !!}
    {{input_error($errors,'description[ar]')}}
</div>

<div class="form-group py-1 col-md-6">
    <label for="description-en"> {{__('Description in English')}}</label>
    {!! Form::textarea('description[en]',($item ? $item->getTranslation('description', 'en') : null),['id'=>'description-en','class'=>'form-control col','placeholder'=>__("Description in English")]) !!}
    {{input_error($errors,'description[en]')}}
</div>

<div class="form-group py-1 col-md-12">
    <label for="category"> {{__('Category')}} </label>
    {{Form::select('category_id',$categories ,null,['class'=>'form-control mb-2','id'=>'category',disable_on_show()])}}
    {{input_error($errors,'category')}}
</div>

<div class="form-group py-1 col-md-6">
    <label for="price"> {{__('Price')}}</label>
    {!! Form::text('price', null,['id'=>'price','class'=>'form-control col','placeholder'=>__("Price")]) !!}
    {{input_error($errors,'price')}}
</div>

<div class="form-group py-1 col-md-6">
    <label for="sale_price"> {{__('Sale price')}}</label>
    {!! Form::text('sale_price', null,['id'=>'sale_price','class'=>'form-control col','placeholder'=>__("Sale price'")]) !!}
    {{input_error($errors,'sale_price')}}
</div>
{{--<div class="form-group py-1 col-md-12">--}}
{{--    <label for="show_in_slider"> {{__('Show in slider')}} </label>--}}
{{--    {{Form::select('show_in_slider',[0=>'No',1=>'Yes'] ,$rate??null,['class'=>'form-control mb-2','id'=>'show_in_slider',disable_on_show()])}}--}}
{{--    {{input_error($errors,'show_in_slider')}}--}}
{{--</div>--}}

{{--@if(isset($item->slider_image))--}}
{{--    <div class="col-md-12">--}}
{{--        <img id="slider_image" src="{{url($item->slider_image)}}" style="width: 100px;border-radius: 50px;">--}}
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
{{--    {!! Form::text('slider_text_main[en]',($item->slider_text_main ? $item->getTranslation('slider_text_main', 'en') : null),['id'=>'slider_text_main-en','class'=>'form-control col','placeholder'=>__("Slider main text in English")]) !!}--}}
{{--    {{input_error($errors,'slider_text_main[en]')}}--}}
{{--</div>--}}

{{--<div class="form-group py-1 col-md-6">--}}
{{--    <label for="slider_text_main-ar"> {{__('Slider main text in Arabic')}}</label>--}}
{{--    {!! Form::text('slider_text_main[ar]',($item->slider_text_main ? $item->getTranslation('slider_text_main', 'ar') : null),['id'=>'slider_text_main-ar','class'=>'form-control col','placeholder'=>__("Slider main text in Arabic")]) !!}--}}
{{--    {{input_error($errors,'slider_text_main[ar]')}}--}}
{{--</div>--}}


{{--<div class="form-group py-1 col-md-6">--}}
{{--    <label for="slider_text_sub-en"> {{__('Slider sub text in English')}}</label>--}}
{{--    {!! Form::text('slider_text_sub[en]',($item->slider_text_sub ? $item->getTranslation('slider_text_sub', 'en') : null),['id'=>'slider_text_sub-en','class'=>'form-control col','placeholder'=>__("Slider sub text in English")]) !!}--}}
{{--    {{input_error($errors,'slider_text_sub[en]')}}--}}
{{--</div>--}}

{{--<div class="form-group py-1 col-md-6">--}}
{{--    <label for="slider_text_sub-ar"> {{__('Slider sub text in Arabic')}}</label>--}}
{{--    {!! Form::text('slider_text_sub[ar]',($item->slider_text_sub ? $item->getTranslation('slider_text_sub', 'ar') : null),['id'=>'slider_text_sub-ar','class'=>'form-control col','placeholder'=>__("Slider sub text in Arabic")]) !!}--}}
{{--    {{input_error($errors,'slider_text_sub[ar]')}}--}}
{{--</div>--}}


@section('footer')
{{--    <script>--}}
{{--        CKEDITOR.replace( 'content' );--}}
{{--    </script>--}}

<script>
    console.log('out')

    var loadImage1 = function(event) {
        console.log('image1')

        var output = document.getElementById('image1');
        output.src = URL.createObjectURL(event.target.files[0]);
        output.onload = function() {
            URL.revokeObjectURL(output.src) // free memory
        }
    };


    var loadImage2 = function(event) {
        console.log('image2')

        var output = document.getElementById('image2');
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
