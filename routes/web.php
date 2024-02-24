<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::middleware(['language'])->group(function () {

    Route::get('lang-ar', function () {
        session()->put('lang', 'ar');
        return back();
    })->name('lang-ar');

    Route::get('lang-en', function () {
        session()->put('lang', 'en');
        return back();
    })->name('lang-en');
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('/faqs', [HomeController::class, 'faqs'])->name('faqs');
    Route::get('/blogs', [HomeController::class, 'blogs'])->name('blogs');
    Route::get('/blog/{id}', [HomeController::class, 'blog'])->name('blog');

    Route::get('/about-us', [HomeController::class, 'aboutUs'])->name('about-us');
    Route::get('/contact-us', [HomeController::class, 'contactUs'])->name('contact-us');
    Route::get('/contact-form', [HomeController::class, 'contactForm'])->name('contact-form');

    Route::get('/works', [HomeController::class, 'works'])->name('works');

    Route::get('/services', [HomeController::class, 'services'])->name('services');

    Route::get('/service/{id}', [HomeController::class, 'service'])->name('service');

    Route::get('/images', [HomeController::class, 'images'])->name('images');
    Route::get('/member', [HomeController::class, 'member'])->name('member');


});
//
//Route::get('/dashboard', function () {
//    return view('dashboard');
//})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
