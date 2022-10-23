@if($errors->any())
    {!! implode('', $errors->all('<div>:message</div>')) !!}
@endif
@if(isset($user->image))
    <div class="col-md-12">
        <img id="image" src="{{url($user->image)}}" style="width: 100px;border-radius: 50px;">
    </div>
@else
    <div class="col-md-12">
        <img id="image" style="width: 100px;border-radius: 50px;">
    </div>
@endif

<div class="form-group col-md-6 {{hidden_on_show()}}">
    <label for="formInputRole"> {{__('Image')}}</label>
    {!! Form::file('image',['class'=>'form-control col','placeholder'=>__("Image"),'onchange'=>"loadImage(event)"]) !!}
    {{input_error($errors,'image')}}
</div>
<div class="form-group py-1 col-md-6">
    <label for="lang"> {{__('Page language')}} </label>
    {{Form::select('lang',['ar'=>__('Arabic'),'en'=>__('English')] ,null,['class'=>'form-control mb-2','id'=>'lang','placeholder'=>__('Select Page language')])}}
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
