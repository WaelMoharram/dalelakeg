@if($errors->any())
    {!! implode('', $errors->all('<div>:message</div>')) !!}
@endif


<div class="form-group py-1 col-md-6">
    <label for="title-ar"> {{__('Title in Arabic')}}</label>
    {!! Form::text('title[ar]',($aboutUs ? $aboutUs->getTranslation('title', 'ar') : null),['id'=>'title-ar','class'=>'form-control col','placeholder'=>__("Title in Arabic")]) !!}
    {{input_error($errors,'title[ar]')}}
</div>

<div class="form-group py-1 col-md-6">
    <label for="title-en"> {{__('Title in English')}}</label>
    {!! Form::text('title[en]',($aboutUs ? $aboutUs->getTranslation('title', 'en') : null),['id'=>'title-en','class'=>'form-control col','placeholder'=>__("Title in English")]) !!}
    {{input_error($errors,'title[en]')}}
</div>

<div class="form-group py-1 col-md-6">
    <label for="content_ar"> {{__('Content in Arabic')}} </label>
    {!! Form::textarea('content[ar]',($aboutUs ? $aboutUs->getTranslation('content', 'ar') : null),['id'=>'editor','class'=>'form-control col']) !!}
    {{input_error($errors,'content[ar]')}}
</div>

<div class="form-group py-1 col-md-6">
    <label for="content_en"> {{__('Content in English')}} </label>
    {!! Form::textarea('content[en]',($aboutUs ? $aboutUs->getTranslation('content', 'en') : null),['id'=>'editor','class'=>'form-control col']) !!}
    {{input_error($errors,'content[en]')}}
</div>



<div class="form-group py-1 col-md-3">
    <label for="section_1_icon"> {{__('Section 1 icon')}} </label>
    <select name="section_1_icon" class="form-control select-icon mb-2" id="section_1_icon">
        <option value="">@lang("Choose icon")</option>
        @foreach(\App\Models\AboutUs::ICONS_ARRAY as $icon=>$title)
            <option @if($aboutUs->section_1_icon == $icon) selected @endif data-icon="{{$icon}}" value="{{$icon}}"
            >
                {{$title}}
            </option>
        @endforeach
    </select>

    {{input_error($errors,'section_1_icon')}}
</div>

<div class="form-group py-1 col-md-3">
    <label for="section_1_number"> {{__('Section 1 number')}}</label>
    {!! Form::number('section_1_number',null,['id'=>'section_1_number','class'=>'form-control col','placeholder'=>__("Section 1 number")]) !!}
    {{input_error($errors,'section_1_number')}}
</div>

<div class="form-group py-1 col-md-3">
    <label for="section_1_title-ar"> {{__('Section 1 title in Arabic')}}</label>
    {!! Form::text('section_1_title[ar]',($aboutUs ? $aboutUs->getTranslation('section_1_title', 'ar') : null),['id'=>'section_1_title-ar','class'=>'form-control col','placeholder'=>__("Section 1 title in Arabic")]) !!}
    {{input_error($errors,'section_1_title[ar]')}}
</div>

<div class="form-group py-1 col-md-3">
    <label for="section_1_title-en"> {{__('Section 1 title in English')}}</label>
    {!! Form::text('section_1_title[en]',($aboutUs ? $aboutUs->getTranslation('section_1_title', 'en') : null),['id'=>'section_1_title-en','class'=>'form-control col','placeholder'=>__("Section 1 title in English")]) !!}
    {{input_error($errors,'section_1_title[en]')}}
</div>




<div class="form-group py-1 col-md-3">
    <label for="section_2_icon"> {{__('Section 2 icon')}} </label>
    <select name="section_2_icon" class="form-control select-icon mb-2" id="section_2_icon">
        <option value="">@lang("Choose icon")</option>
        @foreach(\App\Models\AboutUs::ICONS_ARRAY as $icon=>$title)
            <option @if($aboutUs->section_2_icon == $icon) selected @endif data-icon="{{$icon}}" value="{{$icon}}"
            >
                {{$title}}
            </option>
        @endforeach
    </select>

    {{input_error($errors,'section_2_icon')}}
</div>

<div class="form-group py-1 col-md-3">
    <label for="section_2_number"> {{__('Section 2 number')}}</label>
    {!! Form::number('section_2_number',null,['id'=>'section_2_number','class'=>'form-control col','placeholder'=>__("Section 2 number")]) !!}
    {{input_error($errors,'section_2_number')}}
</div>

<div class="form-group py-1 col-md-3">
    <label for="section_2_title-ar"> {{__('Section 2 title in Arabic')}}</label>
    {!! Form::text('section_2_title[ar]',($aboutUs ? $aboutUs->getTranslation('section_2_title', 'ar') : null),['id'=>'section_2_title-ar','class'=>'form-control col','placeholder'=>__("Section 2 title in Arabic")]) !!}
    {{input_error($errors,'section_2_title[ar]')}}
</div>

<div class="form-group py-1 col-md-3">
    <label for="section_2_title-en"> {{__('Section 2 title in English')}}</label>
    {!! Form::text('section_2_title[en]',($aboutUs ? $aboutUs->getTranslation('section_2_title', 'en') : null),['id'=>'section_2_title-en','class'=>'form-control col','placeholder'=>__("Section 2 title in English")]) !!}
    {{input_error($errors,'section_2_title[en]')}}
</div>




<div class="form-group py-1 col-md-3">
    <label for="section_3_icon"> {{__('Section 3 icon')}} </label>
    <select name="section_3_icon" class="form-control select-icon mb-2" id="section_3_icon">
        <option value="">@lang("Choose icon")</option>
        @foreach(\App\Models\AboutUs::ICONS_ARRAY as $icon=>$title)
            <option @if($aboutUs->section_3_icon == $icon) selected @endif data-icon="{{$icon}}" value="{{$icon}}"
            >
                {{$title}}
            </option>
        @endforeach
    </select>

    {{input_error($errors,'section_3_icon')}}
</div>

<div class="form-group py-1 col-md-3">
    <label for="section_3_number"> {{__('Section 3 number')}}</label>
    {!! Form::number('section_3_number',null,['id'=>'section_3_number','class'=>'form-control col','placeholder'=>__("Section 3 number")]) !!}
    {{input_error($errors,'section_3_number')}}
</div>

<div class="form-group py-1 col-md-3">
    <label for="section_3_title-ar"> {{__('Section 3 title in Arabic')}}</label>
    {!! Form::text('section_3_title[ar]',($aboutUs ? $aboutUs->getTranslation('section_3_title', 'ar') : null),['id'=>'section_3_title-ar','class'=>'form-control col','placeholder'=>__("Section 3 title in Arabic")]) !!}
    {{input_error($errors,'section_3_title[ar]')}}
</div>

<div class="form-group py-1 col-md-3">
    <label for="section_3_title-en"> {{__('Section 3 title in English')}}</label>
    {!! Form::text('section_3_title[en]',($aboutUs ? $aboutUs->getTranslation('section_3_title', 'en') : null),['id'=>'section_3_title-en','class'=>'form-control col','placeholder'=>__("Section 3 title in English")]) !!}
    {{input_error($errors,'section_3_title[en]')}}
</div>






<div class="form-group py-1 col-md-3">
    <label for="section_4_icon"> {{__('Section 4 icon')}} </label>
    <select name="section_4_icon" class="form-control select-icon mb-2" id="section_4_icon">
        <option value="">@lang("Choose icon")</option>
        @foreach(\App\Models\AboutUs::ICONS_ARRAY as $icon=>$title)
            <option @if($aboutUs->section_4_icon == $icon) selected @endif data-icon="{{$icon}}" value="{{$icon}}"
            >
                {{$title}}
            </option>
        @endforeach
    </select>

    {{input_error($errors,'section_4_icon')}}
</div>

<div class="form-group py-1 col-md-3">
    <label for="section_4_number"> {{__('Section 4 number')}}</label>
    {!! Form::number('section_4_number',null,['id'=>'section_4_number','class'=>'form-control col','placeholder'=>__("Section 4 number")]) !!}
    {{input_error($errors,'section_4_number')}}
</div>

<div class="form-group py-1 col-md-3">
    <label for="section_4_title-ar"> {{__('Section 4 title in Arabic')}}</label>
    {!! Form::text('section_4_title[ar]',($aboutUs ? $aboutUs->getTranslation('section_4_title', 'ar') : null),['id'=>'section_4_title-ar','class'=>'form-control col','placeholder'=>__("Section 4 title in Arabic")]) !!}
    {{input_error($errors,'section_4_title[ar]')}}
</div>

<div class="form-group py-1 col-md-3">
    <label for="section_4_title-en"> {{__('Section 4 title in English')}}</label>
    {!! Form::text('section_4_title[en]',($aboutUs ? $aboutUs->getTranslation('section_4_title', 'en') : null),['id'=>'section_4_title-en','class'=>'form-control col','placeholder'=>__("Section 4 title in English")]) !!}
    {{input_error($errors,'section_4_title[en]')}}
</div>





@if(isset($aboutUs->image1))
    <div class="col-md-12">
        <img id="image1" src="{{url($aboutUs->image1)}}" style="width: 100%;">
    </div>
@else
    <div class="col-md-12">
        <img id="image1" style="width: 100%;">
    </div>
@endif
<div class="form-group py-1 col-md-12">
    <label for="formInputRole"> {{__('Image 1')}}</label>
    <br>
    {!! Form::file('image1',['class'=>'form-control col','placeholder'=>__("Image 1"),'onchange'=>"loadImage1(event)"]) !!}
    {{input_error($errors,'image1')}}
</div>

@if(isset($aboutUs->image2))
    <div class="col-md-12">
        <img id="image2" src="{{url($aboutUs->image2)}}" style="width: 100%;">
    </div>
@else
    <div class="col-md-12">
        <img id="image2" style="width: 100%;">
    </div>
@endif
<div class="form-group py-1 col-md-12">
    <label for="formInputRole"> {{__('Image 2')}}</label>
    <br>
    {!! Form::file('image2',['class'=>'form-control col','placeholder'=>__("Image 2"),'onchange'=>"loadImage1(event)"]) !!}
    {{input_error($errors,'image2')}}
</div>

@if(isset($aboutUs->image3))
    <div class="col-md-12">
        <img id="image3" src="{{url($aboutUs->image3)}}" style="width: 100%;">
    </div>
@else
    <div class="col-md-12">
        <img id="image3" style="width: 100%;">
    </div>
@endif
<div class="form-group py-1 col-md-12">
    <label for="formInputRole"> {{__('Image 3')}}</label>
    <br>
    {!! Form::file('image3',['class'=>'form-control col','placeholder'=>__("Image 3"),'onchange'=>"loadImage1(event)"]) !!}
    {{input_error($errors,'image3')}}
</div>

@if(isset($aboutUs->image4))
    <div class="col-md-12">
        <img id="image4" src="{{url($aboutUs->image4)}}" style="width: 100%;;">
    </div>
@else
    <div class="col-md-12">
        <img id="image4" style="width: 100%;">
    </div>
@endif
<div class="form-group py-1 col-md-12">
    <label for="formInputRole"> {{__('Image 4')}}</label>
    <br>
    {!! Form::file('image4',['class'=>'form-control col','placeholder'=>__("Image 4"),'onchange'=>"loadImage1(event)"]) !!}
    {{input_error($errors,'image4')}}
</div>

@section('footer')
    <script>
        CKEDITOR.replace( 'content[ar]' );
        CKEDITOR.replace( 'content[en]' );
    </script>
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

        var loadImage3 = function(event) {
            console.log('image3')

            var output = document.getElementById('image3');
            output.src = URL.createObjectURL(event.target.files[0]);
            output.onload = function() {
                URL.revokeObjectURL(output.src) // free memory
            }
        };

        var loadImage4 = function(event) {
            console.log('image4')

            var output = document.getElementById('image4');
            output.src = URL.createObjectURL(event.target.files[0]);
            output.onload = function() {
                URL.revokeObjectURL(output.src) // free memory
            }
        };


    </script>

    <script>
        $(function () {

            let iterator = $(".social-link").length;
            $(".social_links .repeatable").repeatable({
                addTrigger: ".social_links .add",
                deleteTrigger: ".social_links .delete",
                template: "#social_links",
                startWith: 1,
                iterator
            });
        });

        function formatText(icon) {
            return $(`<span><i class="${$(icon.element).data('icon')}"></i>${icon.text}</span>`);
        }

        $(document).on("click", ".social_links .add", function () {
            $(".select-icon").select2({
                width: "50%",
                templateSelection: formatText,
                templateResult: formatText
            });
        });
        $(".select-icon").select2({
            width: "100%",
            templateSelection: formatText,
            templateResult: formatText
        });
    </script>
@endsection
