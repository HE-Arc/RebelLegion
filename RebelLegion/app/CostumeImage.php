<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CostumeImage extends Model
{
  /**
  * The table associated with the model.
  *
  * @var string
  */
  protected $table = 'costumeImages';

  /*
  * Get the costume of the image.
  */
  public function costume()
  {
      return $this->belongsTo('App\Costume');
  }
}
