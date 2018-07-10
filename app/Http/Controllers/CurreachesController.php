<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Shop;
use App\Curry;
use App\Review;
use DB;

class CurreachesController extends Controller
{
  public function index()
  {
      $shopranks = Review::whereNotIn('shop_id', [0])->select(DB::raw('count(*) as num, shop_id'))->groupBy('shop_id')->orderBy('num', 'DESC')->take(15)->get();
      $shops = $shopranks->map(function($shoprank){return Shop::find($shoprank->shop_id);});
      $curryranks = Review::whereNotIn('curry_id', [0])->select(DB::raw('count(*) as num, curry_id'))->groupBy('curry_id')->orderBy('num', 'DESC')->take(15)->get();
      $curries = $curryranks->map(function($curryrank){return Curry::find($curryrank->curry_id);});
      //$shops = Shop::orderBy('id', 'asc')->paginate(15);
      //$curries = Curry::orderBy('id', 'asc')->paginate(15);
      return view('curreaches.index')->with(array('shops' => $shops, 'curries' => $curries));
  }

}
