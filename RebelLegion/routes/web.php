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

Route::get('', function() {
    return redirect()->route('index', ['language' => App::getLocale()]);
});


// FIXME: à mettre dans Route::group
Route::get('/contact', function () {
    return view('contact');
});

Auth::routes();

Route::group([
    'prefix' => '{lang}',
    'where' => ['lang' => '(fr|de|en)'],
    'middleware' => 'locale'
], function() {

    Route::get('/login', function () {
        return view('login');
    });

    Route::get('', ['as' => 'index', 'uses' => 'HomeController@index']);


});
