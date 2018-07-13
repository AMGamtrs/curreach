<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Review;
use App\Photo;
use Auth;
use Image;

class ReviewsController extends Controller
{
  public function curryreview(Request $request)
  {
      // 写真を保存
      $fileName = $request->picture->getClientOriginalName();
      Image::make($request->picture)->save(public_path() . '/images/reviews/' . $fileName);

      $reviewdb = new Review();
      //レビューDBに入力
      $reviewdb->review = $request->review;
      $reviewdb->rate = $request->rate;
      $reviewdb->curry_id = $request->curry_id;
      $reviewdb->user_id = Auth::user()->id;
      $reviewdb->save();

      //写真DBに入力
      $photo = new Photo();
      $photo->image = $fileName;
      $photo->review_id = $reviewdb->id;
      $photo->save();
      return redirect('/');
  }

  public function shopreview(Request $request)
  {
      // 写真を保存
      $fileName = $request->picture->getClientOriginalName();
      Image::make($request->picture)->save(public_path() . '/images/reviews/' . $fileName);

      $reviewdb = new Reviews();
      //レビューDBに入力
      $reviewdb->review = $request->review;
      $review->rate = $request->rate;
      $review->user_id = Auth::user()->id;
      $review->save();

      //写真DBに入力
      $photo = new Photo();
      $photo->image = $fileName;
      $photo->review_id = $reviewdb->id;
      $photo->save();
      return redirect('/');
  }
}
