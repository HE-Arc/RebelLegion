<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\UserCreateRequest;
use App\Http\Requests\UserUpdateRequest;
use App\Http\Requests\UserAddCostumeRequest;

use Illuminate\Pagination\Paginator;
use View;

use App;
use App\User;
use App\Costume;

class UserController extends Controller
{

    /**
     * Show the form to add a costume to an user
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function addCostume($locale, $id)
    {
      $user = User::findOrFail($id);
      $costumes = Costume::all();

      $user_costumes = $user->costumes();

      $plucked_costumes_IDS = $costumes->pluck('id');
      $plucked_user_costumes_IDS = $user_costumes->pluck('costume_id');
      $costumes_IDS = $plucked_costumes_IDS->diff($plucked_user_costumes_IDS);

      $costumes = [];
      if( count($costumes_IDS) > 0 )
      {
        foreach ($costumes_IDS as $costumes_ID)
        {
          array_push($costumes, Costume::find($costumes_ID));
        }
      }

      return View::make('users.addCostume')
                  ->with('costumes', $costumes)
                  ->with('user', $user);
    }

    /**
     * Store an existing costume to an user
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function storeCostume(UserAddCostumeRequest $request, $locale, $id)
    {
      echo $id.'</br>';
      echo $request->name;
      $user = User::findOrFail($id);
      $costume = Costume::where('name', $request->name)->first();

      $user->costumes()->attach($costume->id);

      return redirect()->route('users.show', ['lang' => App::getLocale(), 'user' => $user->id]);
    }

    /**
     * Remove a costume of an user
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function removeCostume($locale, $user_ID, $costume_ID)
    {
      $user = User::findOrFail($user_ID);
      $costume = Costume::findOrFail($costume_ID);

      $user->costumes()->detach($costume->id);

      return redirect()->back();
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $usersSmall = User::paginate(9);
      return view('users.index', ['usersSmall' => $usersSmall]);
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
      $user = User::create($request->only('userName', 'firstName', 'lastName', 'email', 'password'));
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
      $user = User::findOrFail($id);
      return View::make('users.show')->with('user', $user);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($locale, $id)
    {
      $user = User::findOrFail($id);
      return View::make('users.edit')->with('user', $user);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserUpdateRequest $request, $locale, $id)
    {
      $user = User::findOrFail($id);
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
    public function destroy($locale, $id)
    {
      $user = User::findOrFail($id);
      $user->delete();
      return redirect()->route('users.index', App::getLocale());
    }
}
