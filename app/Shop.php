<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    public function photos(){
      return $this->hasMany(Photo::class);
    }

    public function curries(){
      return $this->hasMany(Curry::class);
    }
}
