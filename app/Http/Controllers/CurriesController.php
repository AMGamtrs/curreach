<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Curry;
use App\Shop;
use Image;

class CurriesController extends Controller
{
  /*public function __construct()
  {
    $this->middleware('auth', ['except' => ['show', 'search']]);
  }*/

  public function show($id1)
  {
      $curry = Curry::find($id1);
      return view('curries.show')->with('curry', $curry);
  }

  public function search()
  {
      return view('curries.search');
  }

  public function create($id1)
  {
      $shop = Shop::find($id1);
      return view('curries.create')->with('shop', $shop);
  }

  public function store(Request $request)
  {
      //$fileName = $request->picture->getClientOriginalName();
      //Image::make($request->picture)->save(public_path() . '/images/' . $fileName);
      $recipe = new Curry();
      //DBに入力
      $recipe->curry_name = $request->name;
      $recipe->price = $request->price;
      $pr_url = url()->previous();
      $sl = explode("shops/", $pr_url);
      $sl = explode("/curries", $sl[1]);
      $recipe->shop_id = $sl[0];
      //$recipe => $fileName,
      $recipe->save();
      //return redirect('/');
  }
}
