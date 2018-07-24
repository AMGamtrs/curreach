<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Curry;
use App\Shop;
use App\Photo;
use Image;
use Storage;
use File;

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
      // 検索フォームのキーワードあいまい検索
      $word = $request->keyword;
      $ctype = $request->curry_type;
      $mtype = $request->main_type;
      $rtype = $request->ricenaan_type;
      // ジャンルで検索(カレー種類)
      if(!empty($ctype)){
        $curries = Curry::where('curry_type', $ctype)->paginate(15);
        switch ($ctype){
          case 1:
          $word = "洋風カレー";break;
          case 2:
          $word = "スープカレー";break;
          case 3:
          $word = "インドカレー";break;
          case 4:
          $word = "ご当地カレー";break;
          case 5:
          $word = "その他";break;
        }
        $word = 'カレー種類：'.$word;
      }
      // ジャンルで検索(メイン具材)
      elseif(!empty($mtype)){
        $curries = Curry::where('main_ingredient', $mtype)->paginate(15);
        switch ($mtype){
          case 1:
          $word = "チキン";break;
          case 2:
          $word = "ビーフ";break;
          case 3:
          $word = "ポーク";break;
          case 4:
          $word = "マトン";break;
          case 5:
          $word = "シーフード";break;
          case 6:
          $word = "野菜";break;
          case 7:
          $word = "その他";break;
        }
        $word = 'メイン具材：'.$word;
      }
      // ジャンルで検索(ライスorナン)
      elseif(!empty($rtype)){
        $curries = Curry::where('naan_rice', $rtype)->paginate(15);
        switch ($rtype){
          case 1:
          $word = "ライス";break;
          case 2:
          $word = "ナン";break;
          case 3:
          $word = "その他";break;
        }
        $word = 'ライス/ナン：'.$word;
      }
      else{
        $curries = Curry::where('curry_name', 'LIKE', "%$word%")->paginate(15);
      }
      return view('curries.search')->with(array('curries' => $curries, 'word' => $word, 'mode' => 0));
  }

  public function create($id1)
  {
      $shop = Shop::find($id1);
      return view('curries.create')->with('shop', $shop);
  }

  public function store(Request $request, $id1)
  {
      $recipe = new Curry();
      //カレーDBに入力
      $recipe->curry_name = $request->curry_name;
      $recipe->price = $request->price;
      $pr_url = url()->previous();
      $recipe->shop_id = $id1;
      if(!empty($request->curry_type)){
        $recipe->curry_type = $request->curry_type;
      }
      else{
        $recipe->curry_type = 0;
      }
      if(!empty($request->main_type)){
        $recipe->main_ingredient = $request->main_type;
      }
      else{
        $recipe->main_ingredient = 0;
      }
      if(!empty($request->calorie)){
        $recipe->calorie = $request->calorie;
      }
      else{
        $recipe->calorie = null;
      }
      if(!empty($request->allergies)){
        $recipe->allergies = $request->allergies;
      }
      else{
        $recipe->allergies = null;
      }
      if(!empty($request->hot_rate)){
        $recipe->hot_rate = $request->hot_rate;
      }
      else{
        $recipe->hot_rate = null;
      }
      if(!empty($request->topping)){
        $recipe->topping = $request->topping;
      }
      else{
        $recipe->topping = null;
      }
      if(!empty($request->amount)){
        $recipe->amount = $request->amount;
      }
      else{
        $recipe->amount = null;
      }
      if(!empty($request->naan_rice)){
        $recipe->naan_rice = $request->naan_rice;
      }
      else{
        $recipe->naan_rice = 0;
      }
      $recipe->save();
      
      if(!empty($request->picture)){
        $fileName = $request->picture->getClientOriginalName();
        // 写真をローカルに保存
        //Image::make($request->picture)->save(public_path() . '/images/curries/' . $fileName);
        // 写真をドライブに保存
        $fileData = File::get($request->picture);
        Storage::disk('curries_google')->put($fileName, $fileData);
        //写真DBに入力
        $photo = new Photo();
        //$photo->image = $fileName;
        $drivename = Storage::disk('curries_google')->url($fileName);
        $drivename = substr($drivename, 31, -13);
        $photo->image = $drivename;
        $photo->curry_id = $recipe->id;
        $photo->save();
      }
      return redirect('/shops/'.$id1.'/curries/'.$recipe->id);
  }
}
