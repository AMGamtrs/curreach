<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Auth;
use App\User;
use App\Review;

class UsersController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth');
  }

  public function show($id)
  {
      $name = Auth::user()->name;
      // ユーザのカレーのレビューやお気に入りを送る (今後実装)
      $shop_reviews = Review::whereNotIn('shop_id', [0])->where('user_id', $id)->orderBy('created_at', 'desc')->get();
      $curry_reviews = Review::whereNotIn('curry_id', [0])->where('user_id', $id)->orderBy('created_at', 'desc')->get();
      //$curry_reviews = User::find($id)->reviews()->orderBy('created_at', 'desc')->get();
      //$curries = User::find($id)->curries()->orderBy('created_at', 'DESC')->paginate(5);
      return view('users.show')->with(array('curry_reviews' => $curry_reviews, 'shop_reviews' => $shop_reviews));
  }

  public function bookmarks()
  {
      $id = Auth::user()->id;
      $bookmarks = Auth::user()->bookmarks()->where('user_id', $id)->paginate(12);
      return view('users.bookmarks')->with('bookmarks', $bookmarks);
  }

  public function likes()
  {
      return view('users.likes');
  }

  public function profile()
  {
      return view('users.profile');
  }
}
