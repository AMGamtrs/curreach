<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Curry extends Model
{
    public function photos(){
      return $this->hasMany(Photo::class);
    }

    public function shop(){
      return $this->belongsTo(Shop::class);
    }
}
