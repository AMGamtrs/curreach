<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Curry extends Model
{
    protected $fillable = ['curry_name', 'price', 'shop_id'];

    public function photos(){
      return $this->hasMany(Photo::class);
    }

    public function shop(){
      return $this->belongsTo(Shop::class);
    }

    public function reviews(){
      return $this->hasMany(Review::class);
    }
}
