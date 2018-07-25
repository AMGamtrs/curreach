<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Favorite;

class FavoritesController extends Controller
{

  public function favajax(Request $request)
  {
    $review_id = $request->review_id;
    $user_id = $request->user_id;
    //DBに書き込み(一致するものがなければ)
    $favorite = new Favorite();
    $favorite = Favorite::firstOrNew(['review_id' => $review_id, 'user_id' => $user_id]);
    $favorite->save();
    //DBをチェックし、ふぁぼ数をチェック
    $favs = Favorite::where('review_id', $review_id)->count();
    //結果をfavに入れて返却
    $fav_result = array( "review_id"=>$review_id ,"fav_count"=>$favs);
    return response()->json($fav_result);
  }

}
