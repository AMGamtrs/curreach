<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Shop;
use App\Photo;
use Image;

class ShopsController extends Controller
{
  /*public function __construct()
  {
    $this->middleware('auth', ['except' => ['show', 'mapsearch']]);
  }*/

  public function show($id)
  {
      $shop = Shop::find($id);
      return view('shops.show')->with('shop', $shop);
  }

  public function mapsearch()
  {
      return view('shops.mapsearch');
  }

  public function create()
  {
      return view('shops.create');
  }

  public function store(Request $request)
  {
    // 写真を保存
      $fileName = $request->picture->getClientOriginalName();
      Image::make($request->picture)->save(public_path() . '/images/shops/' . $fileName);
      $shop = new Shop();
      //店舗DBに入力
      $shop->shop_name = $request->name;
      $shop->lat = "";
      $shop->lng = "";
      $shop->save();

      //写真DBに入力
      $photo = new Photo();
      $photo->image = $fileName;
      $photo->shop_id=$shop->id;
      $photo->save();
      //return redirect('/');
  }
}
