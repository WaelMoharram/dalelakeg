@if($errors->any())
    {!! implode('', $errors->all('<div>:message</div>')) !!}
@endif


<div class="form-group py-1 col-md-6">
    <label for="home_ready_for_help_title_ar"> {{__('home_ready_for_help_title_ar')}}</label>
    {!! Form::text('home_ready_for_help_title_ar',null,['id'=>'home_ready_for_help_title_ar','class'=>'form-control col','placeholder'=>__("home_ready_for_help_title_ar")]) !!}
    {{input_error($errors,'home_ready_for_help_title_ar')}}
</div>
<div class="form-group py-1 col-md-6">
    <label for="home_ready_for_help_title_en"> {{__('home_ready_for_help_title_en')}}</label>
    {!! Form::text('home_ready_for_help_title_en',null,['id'=>'home_ready_for_help_title_en','class'=>'form-control col','placeholder'=>__("home_ready_for_help_title_en")]) !!}
    {{input_error($errors,'home_ready_for_help_title_en')}}
</div>

<div class="form-group py-1 col-md-6">
    <label for="home_ready_for_help_content_ar"> {{__('home_ready_for_help_content_ar')}}</label>
    {!! Form::text('home_ready_for_help_content_ar',null,['id'=>'home_ready_for_help_content_ar','class'=>'form-control col','placeholder'=>__("home_ready_for_help_content_ar")]) !!}
    {{input_error($errors,'home_ready_for_help_content_ar')}}
</div>
<div class="form-group py-1 col-md-6">
    <label for="home_ready_for_help_content_en"> {{__('home_ready_for_help_content_en')}}</label>
    {!! Form::text('home_ready_for_help_content_en',null,['id'=>'home_ready_for_help_content_en','class'=>'form-control col','placeholder'=>__("home_ready_for_help_content_en")]) !!}
    {{input_error($errors,'home_ready_for_help_content_en')}}
</div>

<div class="form-group py-1 col-md-6">
    <label for="home_mission_ar"> {{__('home_mission_ar')}}</label>
    {!! Form::text('home_mission_ar',null,['id'=>'address_en','class'=>'form-control col','placeholder'=>__("home_mission_ar")]) !!}
    {{input_error($errors,'home_mission_ar')}}
</div>
<div class="form-group py-1 col-md-6">
    <label for="home_mission_en"> {{__('home_mission_en')}}</label>
    {!! Form::text('home_mission_en',null,['id'=>'address_en','class'=>'form-control col','placeholder'=>__("home_mission_en")]) !!}
    {{input_error($errors,'home_mission_en')}}
</div>
<div class="form-group py-1 col-md-6">
    <label for="home_message_ar"> {{__('home_message_ar')}}</label>
    {!! Form::text('home_message_ar',null,['id'=>'address_en','class'=>'form-control col','placeholder'=>__("home_message_ar")]) !!}
    {{input_error($errors,'home_message_ar')}}
</div>
<div class="form-group py-1 col-md-6">
    <label for="home_message_en"> {{__('home_message_en')}}</label>
    {!! Form::text('home_message_en',null,['id'=>'address_en','class'=>'form-control col','placeholder'=>__("home_message_en")]) !!}
    {{input_error($errors,'home_message_en')}}
</div>
<div class="form-group py-1 col-md-6">
    <label for="home_vision_ar"> {{__('home_vision_ar')}}</label>
    {!! Form::text('home_vision_ar',null,['id'=>'address_en','class'=>'form-control col','placeholder'=>__("home_vision_ar")]) !!}
    {{input_error($errors,'home_vision_ar')}}
</div>
<div class="form-group py-1 col-md-6">
    <label for="home_vision_en"> {{__('home_vision_en')}}</label>
    {!! Form::text('home_vision_en',null,['id'=>'address_en','class'=>'form-control col','placeholder'=>__("home_vision_en")]) !!}
    {{input_error($errors,'home_vision_en')}}
</div>

<div class="form-group py-1 col-md-6">
    <label for="events_title_ar"> {{__('events_title_ar')}}</label>
    {!! Form::text('events_title_ar',null,['id'=>'address_en','class'=>'form-control col','placeholder'=>__("events_title_ar")]) !!}
    {{input_error($errors,'events_title_ar')}}
</div>
<div class="form-group py-1 col-md-6">
    <label for="events_title_en"> {{__('events_title_en')}}</label>
    {!! Form::text('events_title_en',null,['id'=>'address_en','class'=>'form-control col','placeholder'=>__("events_title_en")]) !!}
    {{input_error($errors,'events_title_en')}}
</div>

<div class="form-group py-1 col-md-6">
    <label for="events_content1_ar"> {{__('events_content1_ar')}}</label>
    {!! Form::text('events_content1_ar',null,['id'=>'address_en','class'=>'form-control col','placeholder'=>__("events_content1_ar")]) !!}
    {{input_error($errors,'events_content1_ar')}}
</div>
<div class="form-group py-1 col-md-6">
    <label for="events_content1_en"> {{__('events_content1_en')}}</label>
    {!! Form::text('events_content1_en',null,['id'=>'address_en','class'=>'form-control col','placeholder'=>__("events_content1_en")]) !!}
    {{input_error($errors,'events_content1_en')}}
</div>

<div class="form-group py-1 col-md-6">
    <label for="events_content2_ar"> {{__('events_content2_ar')}}</label>
    {!! Form::text('events_content2_ar',null,['id'=>'address_en','class'=>'form-control col','placeholder'=>__("events_content2_ar")]) !!}
    {{input_error($errors,'events_content2_ar')}}
</div>
<div class="form-group py-1 col-md-6">
    <label for="events_content2_en"> {{__('events_content2_en')}}</label>
    {!! Form::text('events_content2_en',null,['id'=>'address_en','class'=>'form-control col','placeholder'=>__("events_content2_en")]) !!}
    {{input_error($errors,'events_content2_en')}}
</div>

<div class="form-group py-1 col-md-4">
    <label for="app_store_url"> {{__('app_store_url')}}</label>
    {!! Form::text('app_store_url',null,['id'=>'app_store_url','class'=>'form-control col','placeholder'=>__("app_store_url")]) !!}
    {{input_error($errors,'app_store_url')}}
</div>
<div class="form-group py-1 col-md-4">
    <label for="google_play_url"> {{__('google_play_url')}}</label>
    {!! Form::text('google_play_url',null,['id'=>'google_play_url','class'=>'form-control col','placeholder'=>__("google_play_url")]) !!}
    {{input_error($errors,'google_play_url')}}
</div>

<div class="form-group py-1 col-md-4">
    <label for="facebook"> {{__('Facebook URL')}}</label>
    {!! Form::text('facebook',null,['id'=>'facebook','class'=>'form-control col','placeholder'=>__("Facebook URL")]) !!}
    {{input_error($errors,'facebook')}}
</div>

<div class="form-group py-1 col-md-4">
    <label for="twitter"> {{__('Twitter URL')}}</label>
    {!! Form::text('twitter',null,['id'=>'twitter','class'=>'form-control col','placeholder'=>__("Twitter URL")]) !!}
    {{input_error($errors,'twitter')}}
</div>

<div class="form-group py-1 col-md-4">
    <label for="instagram"> {{__('Instagram URL')}}</label>
    {!! Form::text('instagram',null,['id'=>'instagram','class'=>'form-control col','placeholder'=>__("Instagram URL")]) !!}
    {{input_error($errors,'instagram')}}
</div>


