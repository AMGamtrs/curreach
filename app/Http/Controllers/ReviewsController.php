<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Review;
use App\Photo;
use DB;
use File;
use Storage;
use Auth;
use Image;

class ReviewsController extends Controller
{
  public function curryreview(Request $request)
  {
      $reviewdb = new Review();
      //レビューDBに入力
      $reviewdb->review = $request->review;
      $reviewdb->rate = $request->rate;
      $reviewdb->curry_id = $request->curry_id;
      $reviewdb->user_id = Auth::user()->id;
      $reviewdb->save();

      // 写真を保存
      if(!empty($request->picture)){
        $fileName = $request->picture->getClientOriginalName();
        //Image::make($request->picture)->save(public_path() . '/images/reviews/' . $fileName);
        // 写真をドライブに保存
        $fileData = File::get($request->picture);
        Storage::disk('reviews_google')->put($fileName, $fileData);
        //写真DBに入力
        $photo = new Photo();
        //$photo->image = $fileName;
        $drivename = Storage::disk('reviews_google')->url($fileName);
        $drivename = substr($drivename, 31, -13);
        $photo->image = $drivename;
        $photo->review_id = $reviewdb->id;
        $photo->save();
      }
      return redirect("/shops/".DB::table('curries')->where('id', $request->curry_id)->value('shop_id')."/curries/".$request->curry_id);
  }

  public function shopreview(Request $request)
  {
      $reviewdb = new Review();
      //レビューDBに入力
      $reviewdb->review = $request->review;
      $reviewdb->rate = $request->rate;
      $reviewdb->shop_id = $request->shop_id;
      $reviewdb->user_id = Auth::user()->id;
      $reviewdb->save();

      // 写真を保存
      if(!empty($request->picture)){
        $fileName = $request->picture->getClientOriginalName();
        //Image::make($request->picture)->save(public_path() . '/images/reviews/' . $fileName);
        // 写真をドライブに保存
        $fileData = File::get($request->picture);
        Storage::disk('reviews_google')->put($fileName, $fileData);
        //写真DBに入力
        $photo = new Photo();
        //$photo->image = $fileName;
        $drivename = Storage::disk('reviews_google')->url($fileName);
        $drivename = substr($drivename, 31, -13);
        $photo->image = $drivename;
        $photo->review_id = $reviewdb->id;
        $photo->save();
      }
      //$pre_url = url()->previous();
      return redirect("/shops/".$request->shop_id);
  }
}
