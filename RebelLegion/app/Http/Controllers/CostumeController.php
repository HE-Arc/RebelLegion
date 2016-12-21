<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\CostumeCreateRequest;
use App\Http\Requests\CostumeUpdateRequest;
use App\Http\Requests\CostumeSetThumbnailRequest;
use App\Http\Requests\CostumeAddImageRequest;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Storage;

use View;

use App;
use App\Costume;
use App\CostumeImage;

class CostumeController extends Controller
{

    public function __construct()
    {
      $this->middleware('ajax')->only('indexupdate');
    }

    /**
     * Show the form to set costume thumbnail
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function setThumbnail($locale, $id)
    {
      $costume = Costume::findOrFail($id);
      return View::make('costumes.setThumbnail')->with('costume', $costume);
    }

    /**
     * Set the costume thumbnail
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function storeThumbnail(CostumeSetThumbnailRequest $request, $locale, $id)
    {
      $costume = Costume::findOrFail($id);

      $file = $request->file('thumbnail');
      $imgOriginalName = $file->getClientOriginalName();

      $imgName = time() . $imgOriginalName;

      $firsrDir = 'costumes';
      $path = $firsrDir. '/' . $costume->id;

      if( !is_null($costume->thumbnailURL) )
      {
        $completePath = explode('/', $costume->thumbnailURL);
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
        $costume->thumbnailURL = Storage::url($path. '/' . $imgName);
        $costume->save();
      }
      return View::make('costumes.show', ['lang' => App::getLocale(), 'costume' => $costume]);
    }


    /**
     * Show the form to add costume image
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function addImage($locale, $id)
    {
      $costume = Costume::findOrFail($id);
      return View::make('costumes.addImage')->with('costume', $costume);
    }

    /**
     * Store the costume image
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function storeImage(CostumeAddImageRequest $request, $locale, $id)
    {
      $costume = Costume::findOrFail($id);
      $img = new CostumeImage;

      $file = $request->file('img');
      $imgOriginalName = $file->getClientOriginalName();

      $img->costume_id = $costume->id;
      $imgName = time() . $imgOriginalName;

      $firsrDir = 'costumes';
      $path = $firsrDir. '/' . $costume->id;

      if(Storage::putFileAs($path , $file, $imgName))
      {
        $img->url = Storage::url($path. '/' . $imgName);
        $img->save();
      }
      return redirect()->route('costumes.show', ['lang' => App::getLocale(), 'costume' => $costume]);
    }

    /**
     * Remove the costume image
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function removeImage($locale, $costumeID, $imageID)
    {
      $costume = Costume::findOrFail($costumeID);
      $img = CostumeImage::findOrFail($imageID);

      $firsrDir = 'costumes';
      $path = $firsrDir. '/' . $costume->id;

      $completePath = explode('/', $img->url);
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
      $img->delete();
      return redirect()->route('costumes.show', ['lang' => App::getLocale(), 'costume' => $costume]);
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $costumes = Costume::all();
      return view('costumes.index', ['costumes' => $costumes]);
    }

    /**
     *
     * update index with ajax request
     */
    public function indexupdate(Request $request, $lang, $costume_id){

      if ($request->ajax()) {
        $costume = Costume::findOrFail($costume_id);
        $returnHTML = view('costumes.showajax',['lang' => $lang, 'costume' => $costume])->render();
        return response()->json(array('success' => true, 'html'=>$returnHTML));
      }
      else {
        abort(404);
      }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('costumes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CostumeCreateRequest $request)
    {
      $costume = Costume::create($request->only('name',
                                                'position',
                                                'descriptionEN',
                                                'descriptionFR',
                                                'descriptionDE',
                                                'internationalRebelLegionURL',
                                                null));
      return redirect()->route('costumes.index', App::getLocale());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($locale, $id)
    {
      $costume = Costume::findOrFail($id);
      return View::make('costumes.show')->with('costume', $costume);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($locale, $id)
    {
      $costume = Costume::findOrFail($id);
      return View::make('costumes.edit')->with('costume', $costume);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CostumeUpdateRequest $request, $locale, $id)
    {
      $costume = Costume::findOrFail($id);
      $costume->name = $request->name;
      $costume->position = $request->position;
      $costume->descriptionEN = $request->descriptionEN;
      $costume->descriptionFR = $request->descriptionFR;
      $costume->descriptionDE = $request->descriptionDE;
      $costume->internationalRebelLegionURL = $request->internationalRebelLegionURL;
      $costume->save();
      return redirect()->route('costumes.index', App::getLocale());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($locale, $id)
    {
      $costume = Costume::findOrFail($id);
      $costume->delete();
      return redirect()->route('costumes.index', App::getLocale());
    }
}
