<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ShopsController extends Controller
{
  public function show()
  {
      return view('shops.index');
  }

  public function mapsearch()
  {
      return view('shops.mapsearch');
  }

  public function create()
  {
      return view('shops.create');
  }

  public function store()
  {
      //return redirect('/');
  }
}
