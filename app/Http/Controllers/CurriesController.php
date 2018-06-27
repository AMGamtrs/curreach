<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Curry;

class CurriesController extends Controller
{
  /*public function __construct()
  {
    $this->middleware('auth', ['except' => ['show', 'search']]);
  }*/

  public function show()
  {
      return view('curries.show');
  }

  public function search()
  {
      return view('curries.search');
  }

  public function create()
  {
      return view('curries.create');
  }

  public function store()
  {
      //return redirect('/');
  }
}
