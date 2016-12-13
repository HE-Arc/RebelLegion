<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\UserCreateRequest;
use App\Http\Requests\UserUpdateRequest;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\View;

use App;
use App\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      //soit on fait 3 requêtes de paginate (pour les 3 tailles d'écran)
      $usersSmall = User::paginate(9);
      $usersMedium = User::paginate(24);
      $usersLarge = User::paginate(40);


      //soit on récupère la taille et quand celle-ci change on recharge (mieux?))
      //Comment?

      return view('users.index', ['usersSmall' => $usersSmall, 'usersMedium' => $usersMedium, 'usersLarge' => $usersLarge]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserCreateRequest $request)
    {
      $user = new User;
      $user->userName = $request->userName;
      $user->firstName = $request->firstName;
      $user->lastName = $request->lastName;
      $user->email = $request->email;
      $user->password = $request->password;
      $user->save();
      return redirect()->route('users.index', App::getLocale());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($locale, $id)
    {
      $user = User::find($id);
      if (!is_null($user))
      {
        return View::make('users.show')->with('user', $user);
      }
      else
      {
        App::abort(404);
      }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $user = User::find($id);
      if (!is_null($user))
      {
        return View::make('users.edit')->with('user', $user);
      }
      else
      {
        App::abort(404);
      }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserUpdateRequest $request, $id)
    {
      $user = User::find($id);
      $user->userName = $request->userName;
      $user->firstName = $request->firstName;
      $user->lastName = $request->lastName;
      $user->email = $request->email;
      $user->password = $request->password;
      $user->save();
      return redirect()->route('users.index', App::getLocale());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $user = User::find($id);
      if (!is_null($user))
      {
        $user->delete();
      }
      else
      {
        App::abort(404);
      }
      return redirect()->back();
    }
}
