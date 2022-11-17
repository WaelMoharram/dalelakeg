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

<div class="form-group py-1 col-md-12">
    <label for="question"> {{__('Question')}}</label>
    {!! Form::text('question',null,['id'=>'question','class'=>'form-control col','placeholder'=>__("Question")]) !!}
    {{input_error($errors,'question')}}
</div>


<div class="form-group py-1 col-md-12">
    <label for="answer"> {{__('Answer')}} </label>
    {!! Form::textarea('answer',null,['id'=>'answer','class'=>'form-control col']) !!}
    {{input_error($errors,'answer')}}
</div>

@section('footer')
    <script>
        CKEDITOR.replace('answer');
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
