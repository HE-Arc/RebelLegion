<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
  use Notifiable;

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
      'userName',
      'firstName',
      'lastName',
      'email',
      'phoneNumber',
      'facebookURL',
      'isPersonalDataVisiblle',
      'isAdmin',
      'position',
      'status',
      'internationalRebelLegionURL',
      'avatarURL',
      'password'
  ];

  /**
   * The attributes that should be hidden for arrays.
   *
   * @var array
   */
  protected $hidden = [
      'password', 'remember_token',
  ];

  /**
   * The costumes that belong to the user.
   */
  public function costumes()
  {
      return $this->belongsToMany('App\Costume');
  }
}
