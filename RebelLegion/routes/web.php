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

Auth::routes();

Route::group([
    'prefix' => '{lang}',
    'where' => ['lang' => '(fr|de|en)'],
    'middleware' => 'locale'
], function() {

    Route::get('', ['as' => 'index', 'uses' => 'HomeController@index']);

    Route::get('/contact', function () {
        return view('contact');
    })->name('contact');

});
