@if($errors->any())
    {!! implode('', $errors->all('<div>:message</div>')) !!}
@endif

<div class="form-group py-1 col-md-6">
    <label for="content_en"> {{__('Main content in English')}} </label>
    {!! Form::textarea('content_en',null,['id'=>'editor','class'=>'form-control col']) !!}
    {{input_error($errors,'content_en')}}
</div>

<div class="form-group py-1 col-md-6">
    <label for="content_ar"> {{__('Main content in Arabic')}} </label>
    {!! Form::textarea('content_ar',null,['id'=>'editor','class'=>'form-control col']) !!}
    {{input_error($errors,'content_ar')}}
</div>
<div class="form-group py-1 col-md-6">
    <label for="address_en"> {{__('Address in English')}} </label>
    {!! Form::textarea('address_en',null,['id'=>'editor','class'=>'form-control col']) !!}
    {{input_error($errors,'address_en')}}
</div>

<div class="form-group py-1 col-md-6">
    <label for="address_ar"> {{__('Address in Arabic')}} </label>
    {!! Form::textarea('address_ar',null,['id'=>'editor','class'=>'form-control col']) !!}
    {{input_error($errors,'address_ar')}}
</div>

<div class="form-group py-1 col-md-6">
    <label for="phone"> {{__('Phone')}} </label>
    {!! Form::text('phone',null,['class'=>'form-control col']) !!}
    {{input_error($errors,'phone')}}
</div>

<div class="form-group py-1 col-md-6">
    <label for="email"> {{__('Email')}} </label>
    {!! Form::email('email',null,['class'=>'form-control col']) !!}
    {{input_error($errors,'email')}}
</div>

<div class="form-group py-1 col-md-6">
    <label for="website"> {{__('Website')}} </label>
    {!! Form::text('website',null,['class'=>'form-control col']) !!}
    {{input_error($errors,'website')}}
</div>
<div class="form-group py-1 col-md-6">
    <label for="hotline"> {{__('Hotline')}} </label>
    {!! Form::text('hotline',null,['class'=>'form-control col']) !!}
    {{input_error($errors,'hotline')}}
</div>


@section('footer')
    <script>
        CKEDITOR.replace( 'content_ar' );
        CKEDITOR.replace( 'content_en' );
    </script>
@endsection
