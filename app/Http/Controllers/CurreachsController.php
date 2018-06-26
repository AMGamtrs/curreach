<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class CurreachsController extends Controller
{
  public function index()
  {
      return view('curreachs.index');
  }

}
