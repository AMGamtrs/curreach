<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'birthday', 'icon'
    ];

    public function reviews(){
      return $this->hasMany(Review::class);
    }

    public function bookmarks(){
      return $this->hasMany(Bookmark::class);
    }

    public function favorites(){
      return $this->hasMany(Favorite::class);
    }

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
