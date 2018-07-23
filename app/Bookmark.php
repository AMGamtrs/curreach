<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bookmark extends Model
{
  protected $fillable = ['curry_id', 'user_id'];

  public function curry(){
    return $this->belongsTo(Curry::class);
  }

  public function user(){
    return $this->belongsTo(User::class);
  }
}
