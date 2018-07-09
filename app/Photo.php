<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
  protected $fillable = ['shop_id', 'curry_id', 'review_id', 'image'];

    public function shop(){
      return $this->belongsTo(Shop::class);
    }

    public function curry(){
      return $this->belongsTo(Curry::class);
    }

    public function review(){
      return $this->belongsTo(Review::class);
    }
}
