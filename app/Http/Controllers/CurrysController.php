<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class CurrysController extends Controller
{
  public function show()
  {
      return view('currys.show');
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
