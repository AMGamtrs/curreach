<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Favorite;

class FavoritesController extends Controller
{

  public function favajax(Request $request)
  {
    //DBに書き込み(一致するものがなければ)
    //DBをチェックし、ふぁぼが存在してるかチェック
    //結果をfavに入れて返却
    $fav = "ok";
    return response()->json($fav);
  }

}
