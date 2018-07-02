<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Auth;
use App\User;

class UsersController extends Controller
{
  public function show($id)
  {
      $user = User::find($id);
      $name = Auth::user()->name;
      // ユーザのカレーのレビューやお気に入りを送る (今後実装)
      //$curries = User::find($id)->curries()->orderBy('created_at', 'DESC')->paginate(5);
      return view('users.show')->with(['user' =>  $user, 'name' => $name]);//(array('name' => $name, 'curries' => $curries));
  }
}
