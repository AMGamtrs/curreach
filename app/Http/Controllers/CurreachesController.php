<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class CurreachesController extends Controller
{
  public function index()
  {
      return view('curreachs.index');
  }

}
