<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\UserCreateRequest;
use App\Http\Requests\UserUpdateRequest;
use App\Http\Requests\UserAddCostumeRequest;
use App\Http\Requests\UserSetAvatarRequest;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Storage;

use View;

use App;
use App\User;
use App\Costume;

class UserController extends Controller
{

    /**
     * Show the form to set user avatar
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function setAvatar($locale, $id)
    {
      $user = User::findOrFail($id);
      return View::make('users.setAvatar')->with('user', $user);
    }

    /**
     * Set the user avatar
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function storeAvatar(UserSetAvatarRequest $request, $locale, $id)
    {
      $user = User::findOrFail($id);

      $file = $request->file('avatar');
      $imgOriginalName = $file->getClientOriginalName();

      $imgName = time() . $imgOriginalName;

      $firsrDir = 'avatars';
      $path = $firsrDir. '/' . $user->id;

      if( !is_null($user->avatarURL) )
      {
        $completePath = explode('/', $user->avatarURL);
        $storageImagePath = $completePath[2].'/'.$completePath[3].'/'.$completePath[4];

        //Delete previous avatar from storage
        //Delete parent directories if they're empty
        if(Storage::has($storageImagePath))
        {
          Storage::delete($storageImagePath);

          $files = Storage::files($path);
          if( count($files) == 0)
          {
            Storage::deleteDirectory($path);

            //check all files because other user's avatar may exist
            $files = Storage::allFiles($firsrDir);
            if( count($files) == 0)
            {
              Storage::deleteDirectory($firsrDir);
            }
          }
        }
      }

      //put new avatar on storage
      if(Storage::putFileAs($path , $file, $imgName))
      {
        $user->avatarURL = Storage::url($path. '/' . $imgName);
        $user->save();
      }

      return View::make('users.show')->with('user', $user);
    }

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
      $usersMedium = User::paginate(24);
      $usersLarge = User::paginate(40);
      return view('users.index', ['usersSmall' => $usersSmall,
                                  'usersMedium' => $usersMedium,
                                  'usersLarge' => $usersLarge]);
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
      $personalData = is_null($request->isPersonalDataVisible) ? false : true;
      $isAdmin = is_null($request->isAdmin) ? false : true;
      $user = User::create([
          'userName' => $request['userName'],
          'firstName' => $request['firstName'],
          'lastName' => $request['lastName'],
          'email' => $request['email'],
          'phoneNumber' => $request['phoneNumber'],
          'facebookURL' => $request['facebookURL'],
          'isPersonalDataVisible' => $personalData,
          'isAdmin' => $isAdmin,
          'position' => $request['position'],
          'status' => $request['status'],
          'internationalRebelLegionURL' => $request['internationalRebelLegionURL'],
          'avatarURL' => null,
          'password' => bcrypt($request['password']),
      ]);

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
      $user->phoneNumber = $request->phoneNumber;
      $user->facebookURL = $request->facebookURL;
      $user->isPersonalDataVisible = is_null($request->isPersonalDataVisible) ? false : true;
      $user->isAdmin = is_null($request->isAdmin) ? false : true;
      $user->position = $request->position;
      $user->status = $request->status;
      $user->internationalRebelLegionURL = $request->internationalRebelLegionURL;
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
