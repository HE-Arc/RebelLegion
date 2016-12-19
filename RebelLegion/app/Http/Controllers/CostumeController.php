<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\CostumeCreateRequest;
use App\Http\Requests\CostumeUpdateRequest;

use Illuminate\Pagination\Paginator;
use View;

use App;
use App\Costume;

class CostumeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $costumes = Costume::paginate(9);
      return view('costumes.index', ['costumes' => $costumes]);
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
