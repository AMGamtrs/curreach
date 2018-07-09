<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
  protected $fillable = ['shop_id', 'curry_id', 'rate', 'review'];

    public function shop(){
      return $this->belongsTo(Shops::class);
    }

    public function curry(){
      return $this->belongsTo(Curry::class);
    }

    public function photos(){
      return $this->hasMany(Photo::class);
    }
}
