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
    if(Session::has('lang'))
    {
      $lang = Session::get('lang');
    }
    else {
      $lang = App::getLocale();
    }
    return redirect()->route('index', $lang);
});

Route::get('home', function() {
    return RedirectController::redirectWithLang('home');
});

Route::get('password/reset', function() {
    return RedirectController::redirectWithLang('passwordreset');
});

Route::get('password/reset/{token}', function() {
    return RedirectController::redirectWithLang('passwordresettoken');
});

Route::get('login', function() {
    return RedirectController::redirectWithLang('login');
});

Route::get('contact', function () {
    return RedirectController::redirectWithLang('contact');
});

Route::get('members/{userid}', function($userid) {
    return RedirectController::redirectWithLangParam('/members/', $userid);
});

Route::get('/account/tab{tab_id}', function($tab_id) {
    return RedirectController::redirectWithLangParam('/account/tab', $tab_id);
})->where(['tab_id' => '[1-3]']);

//Ajouter costume
Route::post('apply/upload', 'ApplyController@upload');

// Login route
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

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

    Route::get('langchange', function($lang) {
      $paramsArray = session('currentRouteParams');
      $paramsArray['lang'] = $lang;
      return redirect()->route(session('currentRouteName'), $paramsArray);
    })->name('langchange');

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
