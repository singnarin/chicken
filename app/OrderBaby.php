<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Farm;

class OrderBaby extends Model
{
  public $timestamps = false;
  public function farm(){
    return $this->belongsTo('App\Farm');
  }
}
