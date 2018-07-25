<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
  protected $fillable = ['shop_id', 'curry_id', 'rate', 'review', 'user_id'];

    public function shop(){
      return $this->belongsTo(Shop::class);
    }

    public function curry(){
      return $this->belongsTo(Curry::class);
    }

    public function user(){
      return $this->belongsTo(User::class);
    }

    public function photos(){
      return $this->hasMany(Photo::class);
    }

    public function favorites(){
      return $this->hasMany(Favorite::class);
    }
}
