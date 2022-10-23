@if($errors->any())
    {!! implode('', $errors->all('<div>:message</div>')) !!}
@endif

<div class="form-group col-md-12 {{hidden_on_show()}}">
    <label for="formInputRole"> {{__('Image')}}</label>
    {!! Form::file('image',null,['class'=>'form-control col','placeholder'=>__("Image ")]) !!}
    {{input_error($errors,'image')}}
</div>

<div class="form-group py-1 col-md-12">
    <label for="lang"> {{__('News language')}} </label>
    {{Form::select('lang',['ar'=>__('Arabic'),'en'=>__('English')] ,null,['class'=>'form-control mb-2','id'=>'lang','placeholder'=>__('Select News language')])}}
    {{input_error($errors,'lang')}}
</div>




<div class="form-group py-1 col-md-12">
    <label for="content"> {{__('Content')}} </label>
    {!! Form::textarea('content',null,['id'=>'editor','class'=>'form-control col']) !!}
    {{input_error($errors,'content')}}
</div>
<div class="form-group py-1 col-md-12">
    <label for="video_url"> {{__('Video URL')}} </label>
    {!! Form::text('video_url',null,['id'=>'editor','class'=>'form-control col']) !!}
    {{input_error($errors,'video_url')}}
</div>

@section('footer')
    <script>
        CKEDITOR.replace( 'content' );
    </script>
@endsection
