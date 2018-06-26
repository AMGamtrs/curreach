<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    public function shop(){
      return $this->belongsTo(Shop::class);
    }

    public function curry(){
      return $this->belongsTo(Curry::class);
    }
}
