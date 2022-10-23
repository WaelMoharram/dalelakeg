@if($errors->any())
    {!! implode('', $errors->all('<div>:message</div>')) !!}
@endif
<div class="form-group py-1 col-md-6">
    <label for="formInputRole"> {{__('Image')}}</label>
    <br>
    {!! Form::file('image',null,['class'=>'form-control col','placeholder'=>__("Image")]) !!}
    {{input_error($errors,'image')}}
</div>

<div class="form-group py-1 col-md-6">
    <label for="lang"> {{__('News language')}} </label>
    {{Form::select('lang',['ar'=>__('Arabic'),'en'=>__('English')] ,null,['class'=>'form-control mb-2','id'=>'lang','placeholder'=>__('Select News language')])}}
    {{input_error($errors,'lang')}}
</div>

<div class="form-group py-1 col-md-12">
    <label for="title"> {{__('Title')}}</label>
    {!! Form::text('title',null,['id'=>'title','class'=>'form-control col','placeholder'=>__("Title")]) !!}
    {{input_error($errors,'title')}}
</div>


<div class="form-group py-1 col-md-12">
    <label for="content"> {{__('Content')}} </label>
    {!! Form::textarea('content',null,['id'=>'editor','class'=>'form-control col']) !!}
    {{input_error($errors,'content')}}
</div>

@section('footer')
    <script>
        CKEDITOR.replace( 'content' );
    </script>
@endsection
