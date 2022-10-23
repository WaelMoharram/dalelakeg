@if($errors->any())
    {!! implode('', $errors->all('<div>:message</div>')) !!}
@endif

<div class="form-group py-1 col-md-6">
    <label for="section_1_title-ar"> {{__('Title in Arabic')}}</label>
    {!! Form::text('title[ar]',($contactUs ? $contactUs->getTranslation('title', 'ar') : null),['id'=>'title-ar','class'=>'form-control col','placeholder'=>__("Title in Arabic")]) !!}
    {{input_error($errors,'title[ar]')}}
</div>

<div class="form-group py-1 col-md-6">
    <label for="title-en"> {{__('Title in English')}}</label>
    {!! Form::text('title[en]',($contactUs ? $contactUs->getTranslation('title', 'en') : null),['id'=>'title-en','class'=>'form-control col','placeholder'=>__("Title in English")]) !!}
    {{input_error($errors,'title[en]')}}
</div>


<div class="form-group py-1 col-md-12">
    <label for="section_1_icon"> {{__('Section 1 icon')}} </label>
    <select name="section_1_icon" class="form-control select-icon mb-2" id="section_1_icon">
        <option value="">@lang("Choose icon")</option>
        @foreach(\App\Models\AboutUs::ICONS_ARRAY as $icon=>$title)
            <option @if($contactUs->section_1_icon == $icon) selected @endif data-icon="{{$icon}}" value="{{$icon}}"
            >
                {{$title}}
            </option>
        @endforeach
    </select>

    {{input_error($errors,'section_1_icon')}}
</div>



<div class="form-group py-1 col-md-6">
    <label for="section_1_title-ar"> {{__('Section 1 title in Arabic')}}</label>
    {!! Form::text('section_1_title[ar]',($contactUs ? $contactUs->getTranslation('section_1_title', 'ar') : null),['id'=>'section_1_title-ar','class'=>'form-control col','placeholder'=>__("Section 1 title in Arabic")]) !!}
    {{input_error($errors,'section_1_title[ar]')}}
</div>

<div class="form-group py-1 col-md-6">
    <label for="section_1_title-en"> {{__('Section 1 title in English')}}</label>
    {!! Form::text('section_1_title[en]',($contactUs ? $contactUs->getTranslation('section_1_title', 'en') : null),['id'=>'section_1_title-en','class'=>'form-control col','placeholder'=>__("Section 1 title in English")]) !!}
    {{input_error($errors,'section_1_title[en]')}}
</div>

<div class="form-group py-1 col-md-6">
    <label for="section_1_sub_title-ar"> {{__('Section 1 sub title in Arabic')}}</label>
    {!! Form::text('section_1_sub_title[ar]',($contactUs ? $contactUs->getTranslation('section_1_sub_title', 'ar') : null),['id'=>'section_1_sub_title-ar','class'=>'form-control col','placeholder'=>__("Section 1 sub title in Arabic")]) !!}
    {{input_error($errors,'section_1_sub_title[ar]')}}
</div>

<div class="form-group py-1 col-md-6">
    <label for="section_1_sub_title-en"> {{__('Section 1 sub title in English')}}</label>
    {!! Form::text('section_1_sub_title[en]',($contactUs ? $contactUs->getTranslation('section_1_sub_title', 'en') : null),['id'=>'section_1_sub_title-en','class'=>'form-control col','placeholder'=>__("Section 1 sub title in English")]) !!}
    {{input_error($errors,'section_1_sub_title[en]')}}
</div>

<hr>



<div class="form-group py-1 col-md-12">
    <label for="section_2_icon"> {{__('Section 2 icon')}} </label>
    <select name="section_2_icon" class="form-control select-icon mb-2" id="section_2_icon">
        <option value="">@lang("Choose icon")</option>
        @foreach(\App\Models\AboutUs::ICONS_ARRAY as $icon=>$title)
            <option @if($contactUs->section_2_icon == $icon) selected @endif data-icon="{{$icon}}" value="{{$icon}}"
            >
                {{$title}}
            </option>
        @endforeach
    </select>

    {{input_error($errors,'section_2_icon')}}
</div>



<div class="form-group py-1 col-md-6">
    <label for="section_2_title-ar"> {{__('Section 2 title in Arabic')}}</label>
    {!! Form::text('section_2_title[ar]',($contactUs ? $contactUs->getTranslation('section_2_title', 'ar') : null),['id'=>'section_2_title-ar','class'=>'form-control col','placeholder'=>__("Section 2 title in Arabic")]) !!}
    {{input_error($errors,'section_2_title[ar]')}}
</div>

<div class="form-group py-1 col-md-6">
    <label for="section_2_title-en"> {{__('Section 2 title in English')}}</label>
    {!! Form::text('section_2_title[en]',($contactUs ? $contactUs->getTranslation('section_2_title', 'en') : null),['id'=>'section_2_title-en','class'=>'form-control col','placeholder'=>__("Section 2 title in English")]) !!}
    {{input_error($errors,'section_2_title[en]')}}
</div>

<div class="form-group py-1 col-md-6">
    <label for="section_2_sub_title-ar"> {{__('Section 2 sub title in Arabic')}}</label>
    {!! Form::text('section_2_sub_title[ar]',($contactUs ? $contactUs->getTranslation('section_2_sub_title', 'ar') : null),['id'=>'section_2_sub_title-ar','class'=>'form-control col','placeholder'=>__("Section 2 sub title in Arabic")]) !!}
    {{input_error($errors,'section_2_sub_title[ar]')}}
</div>

<div class="form-group py-1 col-md-6">
    <label for="section_2_sub_title-en"> {{__('Section 2 sub title in English')}}</label>
    {!! Form::text('section_2_sub_title[en]',($contactUs ? $contactUs->getTranslation('section_2_sub_title', 'en') : null),['id'=>'section_2_sub_title-en','class'=>'form-control col','placeholder'=>__("Section 2 sub title in English")]) !!}
    {{input_error($errors,'section_2_sub_title[en]')}}
</div>

<hr>




<div class="form-group py-1 col-md-12">
    <label for="section_3_icon"> {{__('Section 3 icon')}} </label>
    <select name="section_3_icon" class="form-control select-icon mb-2" id="section_3_icon">
        <option value="">@lang("Choose icon")</option>
        @foreach(\App\Models\AboutUs::ICONS_ARRAY as $icon=>$title)
            <option @if($contactUs->section_3_icon == $icon) selected @endif data-icon="{{$icon}}" value="{{$icon}}"
            >
                {{$title}}
            </option>
        @endforeach
    </select>

    {{input_error($errors,'section_3_icon')}}
</div>



<div class="form-group py-1 col-md-6">
    <label for="section_3_title-ar"> {{__('Section 3 title in Arabic')}}</label>
    {!! Form::text('section_3_title[ar]',($contactUs ? $contactUs->getTranslation('section_3_title', 'ar') : null),['id'=>'section_3_title-ar','class'=>'form-control col','placeholder'=>__("Section 3 title in Arabic")]) !!}
    {{input_error($errors,'section_3_title[ar]')}}
</div>

<div class="form-group py-1 col-md-6">
    <label for="section_3_title-en"> {{__('Section 3 title in English')}}</label>
    {!! Form::text('section_3_title[en]',($contactUs ? $contactUs->getTranslation('section_3_title', 'en') : null),['id'=>'section_3_title-en','class'=>'form-control col','placeholder'=>__("Section 3 title in English")]) !!}
    {{input_error($errors,'section_3_title[en]')}}
</div>

<div class="form-group py-1 col-md-6">
    <label for="section_3_sub_title-ar"> {{__('Section 3 sub title in Arabic')}}</label>
    {!! Form::text('section_3_sub_title[ar]',($contactUs ? $contactUs->getTranslation('section_3_sub_title', 'ar') : null),['id'=>'section_3_sub_title-ar','class'=>'form-control col','placeholder'=>__("Section 3 sub title in Arabic")]) !!}
    {{input_error($errors,'section_3_sub_title[ar]')}}
</div>

<div class="form-group py-1 col-md-6">
    <label for="section_3_sub_title-en"> {{__('Section 3 sub title in English')}}</label>
    {!! Form::text('section_3_sub_title[en]',($contactUs ? $contactUs->getTranslation('section_3_sub_title', 'en') : null),['id'=>'section_3_sub_title-en','class'=>'form-control col','placeholder'=>__("Section 3 sub title in English")]) !!}
    {{input_error($errors,'section_3_sub_title[en]')}}
</div>

<hr>



<div class="form-group py-1 col-md-12">
    <label for="section_4_icon"> {{__('Section 4 icon')}} </label>
    <select name="section_4_icon" class="form-control select-icon mb-2" id="section_4_icon">
        <option value="">@lang("Choose icon")</option>
        @foreach(\App\Models\AboutUs::ICONS_ARRAY as $icon=>$title)
            <option @if($contactUs->section_4_icon == $icon) selected @endif data-icon="{{$icon}}" value="{{$icon}}"
            >
                {{$title}}
            </option>
        @endforeach
    </select>

    {{input_error($errors,'section_4_icon')}}
</div>



<div class="form-group py-1 col-md-6">
    <label for="section_4_title-ar"> {{__('Section 4 title in Arabic')}}</label>
    {!! Form::text('section_4_title[ar]',($contactUs ? $contactUs->getTranslation('section_4_title', 'ar') : null),['id'=>'section_4_title-ar','class'=>'form-control col','placeholder'=>__("Section 4 title in Arabic")]) !!}
    {{input_error($errors,'section_4_title[ar]')}}
</div>

<div class="form-group py-1 col-md-6">
    <label for="section_4_title-en"> {{__('Section 4 title in English')}}</label>
    {!! Form::text('section_4_title[en]',($contactUs ? $contactUs->getTranslation('section_4_title', 'en') : null),['id'=>'section_4_title-en','class'=>'form-control col','placeholder'=>__("Section 4 title in English")]) !!}
    {{input_error($errors,'section_4_title[en]')}}
</div>

<div class="form-group py-1 col-md-6">
    <label for="section_4_sub_title-ar"> {{__('Section 4 sub title in Arabic')}}</label>
    {!! Form::text('section_4_sub_title[ar]',($contactUs ? $contactUs->getTranslation('section_4_sub_title', 'ar') : null),['id'=>'section_4_sub_title-ar','class'=>'form-control col','placeholder'=>__("Section 4 sub title in Arabic")]) !!}
    {{input_error($errors,'section_4_sub_title[ar]')}}
</div>

<div class="form-group py-1 col-md-6">
    <label for="section_4_sub_title-en"> {{__('Section 4 sub title in English')}}</label>
    {!! Form::text('section_4_sub_title[en]',($contactUs ? $contactUs->getTranslation('section_4_sub_title', 'en') : null),['id'=>'section_4_sub_title-en','class'=>'form-control col','placeholder'=>__("Section 4 sub title in English")]) !!}
    {{input_error($errors,'section_4_sub_title[en]')}}
</div>

<hr>

@section('footer')
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
