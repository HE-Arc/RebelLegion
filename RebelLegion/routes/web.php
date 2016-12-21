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
// Route::post('register', 'Auth\RegisterController@register');
//
// // Password Reset Routes...
// Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail');
// Route::post('password/reset', 'Auth\ResetPasswordController@reset');

Route::group([
    'prefix' => '{lang}',
    'where' => ['lang' => '(fr|de|en)'],
    'middleware' => 'locale'
], function() {

  /***************************************************************************
  *                     Authentication
  ***************************************************************************/


  Auth::routes();

  Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('passwordReset');

  Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('sendResetLinkEmail');
  Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('passwordResetPost');

  /***************************************************************************
  *                     Index
  ***************************************************************************/

  Route::get('', ['as' => 'index', 'uses' => 'HomeController@index']);

  /***************************************************************************
  *                     Users
  ***************************************************************************/
  Route::get('users/{user}/setAvatar', 'UserController@setAvatar')
  ->name('users.setAvatar');

  Route::post('users/{user}/storeAvatar', 'UserController@storeAvatar')
  ->name('users.storeAvatar');

  Route::get('users/{user}/addCostume', 'UserController@addCostume')
  ->name('users.addCostume');

  Route::post('users/{user}/addCostume', 'UserController@storeCostume')
  ->name('users.storeCostume');

  Route::post('users/{user}/removeCostume/{costume}',
   'UserController@removeCostume')->name('users.removeCostume');

  Route::resource('users', 'UserController');

  /***************************************************************************
  *                     Costumes
  ***************************************************************************/

  Route::get('costumes/{costume}/setThumbnail', 'CostumeController@setThumbnail')
  ->name('costumes.setThumbnail');

  Route::post('costumes/{costume}/storeThumbnail', 'CostumeController@storeThumbnail')
  ->name('costumes.storeThumbnail');

  Route::get('costumes/{costume}/addImage', 'CostumeController@addImage')
  ->name('costumes.addImage');

  Route::post('costumes/{costume}/storeImage', 'CostumeController@storeImage')
  ->name('costumes.storeImage');

  Route::post('costumes/{costume}/removeImage/{image}', 'CostumeController@removeImage')
  ->name('costumes.removeImage');

  //Ajax request on costume.index
  Route::post('/costumes/updateindex/{costume_id}', 'CostumeController@indexupdate');

  Route::resource('costumes', 'CostumeController');

// Route::get('members/{userid}', function ($lang, $userid) {
//       $user = User::find($userid);
//       if(isset($user)){
//         return view('membercard', ['user' => $user] );
//       }
//       else{
//         return redirect('');
//       }
//   })->name('membercard');

  /***************************************************************************
  *                     About us
  ***************************************************************************/

  Route::get('/aboutus', function () {
    return view('aboutus');
  })->name('aboutus');

  /***************************************************************************
  *                     Contacts
  ***************************************************************************/

  Route::get('/contact', function () {
      return view('contact');
  })->name('contact');

  Route::get('contact', function () {
      return view('contact');
  })->name('contact');
});
