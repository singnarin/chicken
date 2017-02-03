<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FeedFood extends Model
{
    public $timestamps = false;

    public function chicken(){
      return $this->belongsTo('Chicken');
    }
}
