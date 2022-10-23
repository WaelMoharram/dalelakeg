<?php

Route::name('dashboard.')->middleware(['language', 'auth:web'])->prefix('dashboard')->group(function () {

    Route::get('/', function () {
        return redirect(route('dashboard.home'));
    });
    Route::get('lang-ar', function () {
        session()->put('lang', 'ar');
        return back();
    })->name('lang-ar');

    Route::get('lang-en', function () {
        session()->put('lang', 'en');
        return back();
    })->name('lang-en');

    Route::get('home', 'HomeController@index')->name('home');

    Route::put('home/update/{id}', 'HomeController@update')->name('home.update');
    Route::get('home/edit', 'HomeController@edit')->name('home.edit');

    Route::get('switch-theme', 'UserController@switchTheme')->name('switch-admin-theme');

    Route::resource('users', 'UserController');

    Route::get('users.suspend','UserController@suspend')->name('users.suspend');
    Route::resource('categories', 'CategoryController');
    Route::resource('items', 'ItemController');
    Route::resource('blogs', 'BlogController');
    Route::resource('pages', 'PageController');
    Route::resource('about-us', 'AboutUsController');
    Route::resource('sliders', 'SliderController');


    Route::resource('contact-us', 'ContactUsController');

    Route::resource('system-options', 'OptionController')->only([
        'index', 'edit','update'
    ]);
//    Route::prefix('website')->group(function () {
//        //Route::resource('about-us', 'Website\AboutUsController');
////        Route::resource('contact-us', 'Website\ContactUsController');
//        Route::resource('main-info', 'Website\MainInfoController');
//        Route::resource('services', 'Website\ServiceController');
//        Route::resource('company-services', 'Website\CompanyServiceController');
//        Route::resource('healthcare-services', 'Website\HealthcareServiceController');
//        Route::resource('personal-services', 'Website\PersonalServiceController');
//        Route::resource('provider-services', 'Website\ProviderServiceController');
//        Route::resource('news', 'Website\NewsController');
//        Route::resource('events', 'Website\EventController');
//        Route::resource('partners', 'Website\PartnerController');
//        Route::resource('projects', 'Website\ProjectController');
//        Route::resource('project-details', 'Website\ProjectDetailController');
//        Route::resource('contacts', 'Website\ContactController');
//
//    });







});
