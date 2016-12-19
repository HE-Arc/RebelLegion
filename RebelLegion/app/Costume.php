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
      'name', 'size'
  ];

  /**
   * The users that belong to the role.
   */
  public function users()
  {
      return $this->belongsToMany('App\User');
  }
}
