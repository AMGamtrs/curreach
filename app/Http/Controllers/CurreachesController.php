<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Shop;
use App\Curry;

class CurreachesController extends Controller
{
  public function index()
  {
      $shops = Shop::orderBy('id', 'asc')->paginate(15);
      $curries = Curry::orderBy('id', 'asc')->paginate(15);
      return view('curreaches.index')->with(array('shops' => $shops, 'curries' => $curries));
  }

}
