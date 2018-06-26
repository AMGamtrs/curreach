<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ShopsController extends Controller
{
  public function index()
  {
      return view('shops.index');
  }

  public function search()
  {
      return view('currys.search');
  }

  public function create()
  {
      return view('currys.create');
  }

  public function store()
  {
      //return redirect('/');
  }
}
