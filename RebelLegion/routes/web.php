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

use App\User;
use Illuminate\Pagination\Paginator;

Route::get('', function() {
    return redirect()->route('index', ['language' => App::getLocale()]);
});

Route::get('/home', 'HomeController@index');

Route::group([
    'prefix' => '{lang}',
    'where' => ['lang' => '(fr|de|en)'],
    'middleware' => 'locale'
], function() {


    Auth::routes();

    Route::get('password/reset', 'Auth\ResetPasswordController@showResetForm')->name('passwordReset');
    Route::post('password/reset', 'Auth\PasswordController@reset')->name('passwordReset');



    Route::get('', ['as' => 'index', 'uses' => 'HomeController@index']);

    Route::resource('users', 'UserController');

    Route::get('/contact', function () {
        return view('contact');
    })->name('contact');

    Route::get('/costumes', function () {
      $usersSmall = User::paginate(3);
      $usersMedium = User::paginate(6);
      $usersLarge = User::paginate(8);
      $users = User::take(30)->get(); //On n'en prend que 30 pour les tests, sinon faire User::all()

      //dd($users[1]['id'], $users[2], count($users));

      //soit on récupère la taille et quand celle-ci change on recharge (mieux?))
      //Comment?

    return view('costumes', ['usersSmall' => $usersSmall, 'usersMedium' => $usersMedium, 'usersLarge' => $usersLarge, "i" => 0/*, 'users' => $users*/]);

  })->name('costumes');

  Route::get('/aboutus', function () {
      return view('aboutus');
  })->name('aboutus');

  //Route::get('/home', 'HomeController@index')->name('home');

});


/*Route::group(['middleware' => 'auth'], function () {

});*/

Route::get('/account/tab{tab_id}',
  function($tab_id) {
    return view('account', ['tab_id' => $tab_id]);
  }
)->middleware('auth')->where(['tab_id' => '[1-3]']);

Route::post('apply/upload', 'ApplyController@upload');
