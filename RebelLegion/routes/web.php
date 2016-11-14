<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');


Route::get('/contact', function () {
    return view('contact');
});

Route::get('setLocale/{locale}', function ($locale) {
    App::setLocale($locale);
    echo App::getLocale();
    return redirect()->back();
})->name('setLanguage');
