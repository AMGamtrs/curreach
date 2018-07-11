<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    //protected $fillable = ['shop_name', 'lat', 'lng', 'address'];
    protected $guarded = ['id'];
    
    public function photos(){
      return $this->hasMany(Photo::class);
    }

    public function curries(){
      return $this->hasMany(Curry::class);
    }

    public function reviews(){
      return $this->hasMany(Review::class);
    }
}
