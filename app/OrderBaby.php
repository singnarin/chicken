<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderBaby extends Model
{
  public $timestamps = false;

  public function farm(){
    return $this->belongTo('Farm');
  }
}
