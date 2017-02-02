<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
Use App\UserType;

class User extends Model
{
    public $timestamps = false;
    public function userType(){
      return $this->belongsTo('App\UserType');
    }
}
