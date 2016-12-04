<?php

namespace App\Http\Controllers;

use Input;
use Validator;
use Redirect;
use Illuminate\Http\Request;
use Session;

class ApplyController extends Controller {

  public function upload(Request $request) {
    // getting all of the post data
    $file = $request->all();

    // setting up rules
    $rules = array(
      'title' => 'required|min:6|max:30',
      'description' => 'required|min:30|max:400',
      'image_upload' => 'required|image|max:10000',
      'image_upload_secondary' => 'image|max:10000'
    );

    // doing the validation, passing post data, rules and the messages
    $validator = Validator::make($file, $rules);

    if ($validator->fails()) {
      // send back to the page with the input data and errors
      return Redirect::to('/account/tab2')->withInput()->withErrors($validator);
    }
    else {
      // checking file is valid.
      if (Input::file('image_upload')->isValid()) {
        $destinationPath = 'img/uploads'; // upload path
        $extension = Input::file('image_upload')->getClientOriginalExtension(); // getting image extension
        $fileName = rand(11111,99999).'.'.$extension; // renameing image
        Input::file('image_upload')->move($destinationPath, $fileName); // uploading file to given path


        if(Input::hasFile('image_upload_secondary') && Input::file('image_upload_secondary')->isValid())
        {
          $destinationPath = 'img/uploads'; // upload path
          $extension = Input::file('image_upload_secondary')->getClientOriginalExtension(); // getting image extension
          $fileName = rand(11111,99999).'.'.$extension; // renameing image
          Input::file('image_upload_secondary')->move($destinationPath, $fileName); // uploading file to given path

          //save in database with secondary image
        }
        else {
          //save in database without secondary image
        }

        // sending back with success message
        return Redirect::to('/account/tab2')->with('success', 'Upload successfully');
      }
      else {
        // sending back with error message.
        return Redirect::to('/account/tab2')->with('error', 'uploaded file is not valid');
      }

    }
  }



}
