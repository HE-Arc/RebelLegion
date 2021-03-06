<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Costume extends Model
{
  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
      'name',
      'position',
      'descriptionEN',
      'descriptionFR',
      'descriptionDE',
      'internationalRebelLegionURL',
      'thumbnailURL'
  ];

  /**
   * The users that belong to the role.
   */
  public function users()
  {
      return $this->belongsToMany('App\User');
  }

  /**
   * Get the images that owns the costume.
   */
  public function images()
  {
     return $this->hasMany('App\CostumeImage');
  }
}
