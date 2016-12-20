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

use App\Http\Controllers\RedirectController;
use App\User;

Route::get('', function() {
    return redirect()->route('index', App::getLocale());
});



//Ajouter costume
Route::post('apply/upload', 'ApplyController@upload');



// Registration Routes...
Route::post('register', 'Auth\RegisterController@register');

// Password Reset Routes...
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');

Route::group([
    'prefix' => '{lang}',
    'where' => ['lang' => '(fr|de|en)'],
    'middleware' => 'locale'
], function() {



    //Ajax request on costume.index
    Route::post('/costumes/updateindex/{costume_id}', 'CostumeController@indexupdate');

    // Login route
    Route::post('login', 'Auth\LoginController@login');
    Route::post('logout', 'Auth\LoginController@logout')->name('logout');

    Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
    Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');

    Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('passwordreset');
    Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('passwordresettoken');

    Route::get('', function () {
        return view('welcome');
    })->name('index');

    Route::group(['middleware' => 'auth'], function () {
      Route::get('home', 'HomeController@index')->name('home');

      Route::get('/account/tab{tab_id}',
        function($lang, $tab_id) {
          return view('account', ['tab_id' => $tab_id]);
        }
      )->where(['tab_id' => '[1-3]'])->name('account');

    });

    Route::get('contact', function () {
        return view('contact');
    })->name('contact');


    Route::get('costumes', function () {
      $usersSmall = User::paginate(3);
      $usersMedium = User::paginate(6);
      $usersLarge = User::paginate(8);
      $users = User::take(30)->get(); //On n'en prend que 30 pour les tests, sinon faire User::all()

      //dd($users[1]['id'], $users[2], count($users));
    Route::get('users/{user}/addCostume', 'UserController@addCostume')
    ->name('users.addCostume');

    Route::post('users/{user}/addCostume', 'UserController@storeCostume')
    ->name('users.storeCostume');


      return view('members', ['usersSmall' => $usersSmall, 'usersMedium' => $usersMedium, 'usersLarge' => $usersLarge]);
  })->name('members');

    Route::post('users/{user}/removeCostume/{costume}',
     'UserController@removeCostume')->name('users.removeCostume');

    Route::resource('users', 'UserController');


    Route::resource('costumes', 'CostumeController');

    Route::get('/contact', function () {
        return view('contact');
    })->name('contact');

Route::get('members/{userid}', function ($lang, $userid) {
      $user = User::find($userid);
      if(isset($user)){
        return view('membercard', ['user' => $user] );
      }
      else{
        return redirect('');
      }
  })->name('membercard');Route::get('/aboutus', function () {      return view('aboutus');
  })->name('aboutus');

});
