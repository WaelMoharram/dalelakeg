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

<div class="form-group col-md-12 {{hidden_on_show()}}">
    <label for="formInputRole"> {{__('Image')}}</label>
    {!! Form::file('image',['class'=>'form-control col','placeholder'=>__("Image"),'onchange'=>"loadImage(event)"]) !!}
    {{input_error($errors,'image')}}
</div>

<div class="form-group py-1 col-md-6">
    <label for="name-ar"> {{__('Name in Arabic')}}</label>
    {!! Form::text('name[ar]',null,['id'=>'name-ar','class'=>'form-control col','placeholder'=>__("Name in Arabic")]) !!}
    {{input_error($errors,'name.ar')}}
</div>

<div class="form-group py-1 col-md-6">
    <label for="name-en"> {{__('Name in English')}}</label>
    {!! Form::text('name[en]',null,['id'=>'name-en','class'=>'form-control col','placeholder'=>__("Name in English")]) !!}
    {{input_error($errors,'name.en')}}
</div>

<div class="form-group py-1 col-md-6">
    <label for="description-ar"> {{__('Description in Arabic')}}</label>
    {!! Form::textarea('description[ar]',null,['id'=>'description-ar','class'=>'form-control col','placeholder'=>__("Description in Arabic")]) !!}
    {{input_error($errors,'description.ar')}}
</div>

<div class="form-group py-1 col-md-6">
    <label for="description-en"> {{__('Description in English')}}</label>
    {!! Form::textarea('description[en]',null,['id'=>'description-en','class'=>'form-control col','placeholder'=>__("Description in English")]) !!}
    {{input_error($errors,'description.en')}}
</div>


<div class="form-group py-1 col-md-6">
    <label for="long-description-ar"> {{__('Long description in Arabic')}} </label>
    {!! Form::textarea('long_description[ar]',null,['id'=>'long-description-ar','class'=>'form-control col']) !!}
    {{input_error($errors,'long_description.ar')}}
</div>

<div class="form-group py-1 col-md-6">
    <label for="long-description-en"> {{__('Long description in English')}} </label>
    {!! Form::textarea('long_description[en]',null,['id'=>'long-description-en','class'=>'form-control col']) !!}
    {{input_error($errors,'long_description.en')}}
</div>

@section('footer')
    <script>
        CKEDITOR.replace( 'long_description[ar]' );
        CKEDITOR.replace( 'long_description[en]' );
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


