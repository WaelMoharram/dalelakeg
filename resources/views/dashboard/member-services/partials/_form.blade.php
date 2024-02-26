@if($errors->any())
    {!! implode('', $errors->all('<div>:message</div>')) !!}
@endif


<div class="form-group py-1 col-md-6">
    <label for="title-ar"> {{__('Title in Arabic')}}</label>
    {!! Form::text('title[ar]',($memberService ? $memberService->getTranslation('title', 'ar') : null),['id'=>'title-ar','class'=>'form-control col','placeholder'=>__("Title in Arabic")]) !!}
    {{input_error($errors,'title.ar')}}
</div>


<div class="form-group py-1 col-md-6">
    <label for="title-en"> {{__('Title in English')}}</label>
    {!! Form::text('title[en]',($memberService ? $memberService->getTranslation('title', 'en') : null),['id'=>'title-en','class'=>'form-control col','placeholder'=>__("Title in English")]) !!}
    {{input_error($errors,'title.en')}}
</div>

<div class="form-group py-1 col-md-6">
    <label for="description-ar"> {{__('Description in Arabic')}}</label>
    {!! Form::textarea('description[ar]',($memberService ? $memberService->getTranslation('description', 'ar') : null),['id'=>'description-ar','class'=>'form-control col','placeholder'=>__("Description in Arabic")]) !!}
    {{input_error($errors,'description.ar')}}
</div>

<div class="form-group py-1 col-md-6">
    <label for="description-en"> {{__('Description in English')}}</label>
    {!! Form::textarea('description[en]',($memberService ? $memberService->getTranslation('description', 'en') : null),['id'=>'description-en','class'=>'form-control col','placeholder'=>__("Description in English")]) !!}
    {{input_error($errors,'description.en')}}
</div>


<div class="form-group py-1 col-md-12">
    <label for="duration"> {{__('Duration')}}</label>
    {!! Form::number('duration',null,['id'=>'duration','class'=>'form-control col','placeholder'=>__("Duration")]) !!}
    {{input_error($errors,'duration')}}
</div>

<input type="hidden" name="member_id" value="{{$memberService->member_id ?? request()->member_id}}">

@section('footer')

{{--    <script>--}}
{{--        CKEDITOR.replace( 'description-ar' );--}}
{{--        CKEDITOR.replace( 'description-en' );--}}
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

    </script>
@endsection


