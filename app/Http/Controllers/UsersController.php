<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Auth;
use App\User;
use App\Review;
use DB;
use Image;
use Storage;
use File;

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
      $shop_reviews = Review::whereNotIn('shop_id', [0])->where('user_id', $id)->orderBy('created_at', 'desc')->paginate(6, ["*"], 'shop');
      $curry_reviews = Review::whereNotIn('curry_id', [0])->where('user_id', $id)->orderBy('created_at', 'desc')->paginate(6, ["*"], 'curry');
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
      $id = Auth::user()->id;
      $shoplikes = Auth::user()->favorites()->where('favorites.user_id', $id)->orderBy('updated_at', 'DESC')->paginate(5);
      //$shoplikes = DB::table('favorites')->join('reviews', 'favorites.user_id', '=', 'reviews.id')->where('reviews.id', $id)->whereNotNull('reviews.shop_id')->get();
      return view('users.likes')->with('shoplikes', $shoplikes);
  }

  public function profile()
  {
      return view('users.profile');
  }

  public function reedit(Request $request)
  {
      //メールアドレスを変更
      if(!empty($request->email)){
        User::where('id', Auth::user()->id)->update(['email' => $request->email]);
      }
      //プロフィール画像を変更
      if(!empty($request->icon)){
        $fileName = $request->icon->getClientOriginalName();
        // 写真をドライブに保存
        $fileData = File::get($request->icon);
        Storage::disk('users_google')->put($fileName, $fileData);
        //写真DBに入力
        //$photo->image = $fileName;
        $drivename = Storage::disk('users_google')->url($fileName);
        $drivename = substr($drivename, 31, -13);
        User::where('id', Auth::user()->id)->update(['icon' => $drivename]);
      }
      //誕生日を変更
      elseif(!empty($request->calendar)){
        User::where('id', Auth::user()->id)->update(['birthday' => $request->calendar]);
      }
      return redirect('/users/'.Auth::user()->id.'/profile');
  }
}
