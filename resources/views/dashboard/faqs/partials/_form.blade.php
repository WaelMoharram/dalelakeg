@if($errors->any())
    {!! implode('', $errors->all('<div>:message</div>')) !!}
@endif
<div class="form-group py-1 col-md-12">
    <label for="icon"> {{__('Icon')}}</label>

<select name="question_icon" class="form-control col select-icon">
    <option value="">@lang("Choose icon")</option>
    @foreach(\App\Models\FAQs::ICONS_ARRAY as $icon=>$title)
        <option data-icon="{{$icon}}"
                value="{{$icon}}"
                @if($icon ==$faq->question_icon) selected @endif
        >
            {{$title}}
        </option>
    @endforeach
</select>
    {{input_error($errors,'question_icon')}}

</div>
{{--<div class="form-group py-1 col-md-6">--}}
{{--    <label for="question_icon"> {{__('FAQ icon')}} </label>--}}
{{--    {{Form::select('question_icon',[\App\Models\FAQs::ICONS_ARRAY] ,null,['class'=>'form-control mb-2','id'=>'question_icon','placeholder'=>__('Select Icon')])}}--}}
{{--    {{input_error($errors,'question_icon')}}--}}
{{--</div>--}}

<div class="form-group py-1 col-md-6">
    <label for="question-ar"> {{__('Question in Arabic')}}</label>
    {!! Form::text('question[ar]',($faq ? $gaq->getTranslation('question', 'ar') : null),['id'=>'question-ar','class'=>'form-control col','placeholder'=>__("Question in Arabic")]) !!}
    {{input_error($errors,'question.ar')}}
</div>

<div class="form-group py-1 col-md-6">
    <label for="question-en"> {{__('Question in English')}}</label>
    {!! Form::text('question[en]',($faq ? $gaq->getTranslation('question', 'en') : null),['id'=>'question-en','class'=>'form-control col','placeholder'=>__("Question in English")]) !!}
    {{input_error($errors,'question.en')}}
</div>


<div class="form-group py-1 col-md-6">
    <label for="answer-ar"> {{__('Answer in Arabic')}} </label>
    {!! Form::textarea('answer[ar]',($faq ? $gaq->getTranslation('answer', 'ar') : null),['id'=>'answer-ar','class'=>'form-control col']) !!}
    {{input_error($errors,'answer.ar')}}
</div>

<div class="form-group py-1 col-md-6">
    <label for="answer-en"> {{__('Answer in English')}} </label>
    {!! Form::textarea('answer[en]',($faq ? $gaq->getTranslation('question', 'en') : null),['id'=>'answer-en','class'=>'form-control col']) !!}
    {{input_error($errors,'answer.en')}}
</div>

@section('footer')
    <script>
        CKEDITOR.replace( 'answer[ar]' );
        CKEDITOR.replace( 'answer[en]' );
    </script>

    <script>
        $(function () {
            function formatText(icon) {
                return $(`<span><i class="${$(icon.element).data('icon')}"></i>${icon.text}</span>`);
            };
            $(".select-icon").select2({
                // width: "50%",
                templateSelection: formatText,
                templateResult: formatText
            });
        })
    </script>
@endsection
