<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Curry;
use App\Shop;
use App\Photo;
use Image;

class CurriesController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth', ['except' => ['show', 'search']]);
  }

  public function show($id1)
  {
      $curry = Curry::find($id1);
      return view('curries.show')->with('curry', $curry);
  }

  public function search(Request $request)
  {
      // 検索フォームのキーワードをあいまい検索して、productsテーブルから20件の作品情報を取得する
      $word = $request->keyword;
      $curries = Curry::where('curry_name', 'LIKE', "%$word%")->paginate(15);
      //$products = array();
      return view('curries.search')->with(array('curries' => $curries, 'word' => $word));
  }

  public function create($id1)
  {
      $shop = Shop::find($id1);
      return view('curries.create')->with('shop', $shop);
  }

  public function store(Request $request, $id2)
  {
      // 写真を保存
      $fileName = $request->picture->getClientOriginalName();
      Image::make($request->picture)->save(public_path() . '/images/curries/' . $fileName);

      $recipe = new Curry();
      //カレーDBに入力
      $recipe->curry_name = $request->name;
      $recipe->price = $request->price;
      $pr_url = url()->previous();
      $sl = explode("shops/", $pr_url);
      $sl = explode("/curries", $sl[1]);
      $recipe->shop_id = $sl[0];
      $recipe->save();

      //写真DBに入力
      $photo = new Photo();
      $photo->image = $fileName;
      $photo->curry_id = $id2;
      $photo->save();
      return redirect('/shops/'.$id2);
  }
}
