<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class chicken extends Model
{
    public $timestamps = false;

    public function farm(){
      return $this->belongsTo('App\Farm');
    }
}
