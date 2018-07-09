<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Review;
use App\Photo;
use Auth;

class ReviewsController extends Controller
{
  public function curryreview(Request $request)
  {
      // 写真を保存
      $fileName = $request->picture->getClientOriginalName();
      Image::make($request->picture)->save(public_path() . '/images/reviwes/' . $fileName);

      $review = new Reviews();
      //レビューDBに入力
      $review->テキスト = $request->name;
      $review->評価 = $request->price;
      $review->user_id = Auth::user()->id;
      $review->save();

      //写真DBに入力
      $photo = new Photo();
      $photo->image = $fileName;
      $photo->review_id = $review->id;
      $photo->save();
      //return redirect('/');
  }
}
