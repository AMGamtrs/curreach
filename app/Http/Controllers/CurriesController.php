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

  public function show($id1, $id2)
  {
      $curry = Curry::where('shop_id', $id1)->find($id2);
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

  public function store(Request $request, $id1)
  {
      // 写真を保存
      $fileName = $request->picture->getClientOriginalName();
      Image::make($request->picture)->save(public_path() . '/images/curries/' . $fileName);

      $recipe = new Curry();
      //カレーDBに入力
      $recipe->curry_name = $request->name;
      $recipe->price = $request->price;
      $pr_url = url()->previous();
      $recipe->shop_id = $id1;
      $recipe->save();

      //写真DBに入力
      $photo = new Photo();
      $photo->image = $fileName;
      $photo->curry_id = $recipe->id;
      $photo->save();
      return redirect('/shops/'.$id1.'/curries/'.$recipe->id);
  }
}
