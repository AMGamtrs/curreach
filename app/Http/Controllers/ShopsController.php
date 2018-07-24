<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Shop;
use App\Photo;
use Image;
use Storage;
use File;
use DB;

class ShopsController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth', ['except' => ['show', 'search', 'mapsearch', 'mapajax']]);
  }

  public function show($id)
  {
      $shop = Shop::find($id);
      return view('shops.show')->with('shop', $shop);
  }

  public function search(Request $request)
  {
      $word = $request->keyword;
      $register = $request->register;
      // カレー登録のための検索時
      if(!empty($register)){
        $shops = Shop::where('shop_name', 'LIKE', "%$word%")->paginate(15);
        return view('curries.search')->with(array('shops' => $shops, 'word' => $word, 'mode' => 1));
      }
      else{
        $shops = Shop::where('shop_name', 'LIKE', "%$word%")->paginate(15);
        return view('curries.search')->with(array('shops' => $shops, 'word' => $word, 'mode' => 2));
      }
  }

  public function mapsearch()
  {
      return view('shops.mapsearch');
  }

  public function mapajax(Request $request)
  {

    $req_ne_lat = floatval($request['map_ne_lat']);
    $req_sw_lat = floatval($request['map_sw_lat']);
    $req_ne_lng = floatval($request['map_ne_lng']);
    $req_sw_lng = floatval($request['map_sw_lng']);

//    mysql用
//    $shops = DB::select(DB::raw("SELECT s.*, p.shop_id, p.image FROM shops AS s LEFT JOIN photos AS p ON s.id = p.shop_id
//                                  WHERE lat<$req_ne_lat AND lat>$req_sw_lat AND lng<$req_ne_lng AND lng>$req_sw_lng GROUP BY id ORDER BY id DESC LIMIT 20"));
    $shops = DB::select(DB::raw("SELECT DISTINCT ON(id) s.*, p.shop_id, p.image FROM shops AS s LEFT JOIN photos AS p ON s.id = p.shop_id
                                  WHERE lat<$req_ne_lat AND lat>$req_sw_lat AND lng<$req_ne_lng AND lng>$req_sw_lng  ORDER BY id DESC LIMIT 20"));

     return response()->json($shops);
  }

  public function create()
  {
      return view('shops.create');
  }

  public function store(Request $request)
  {
      $shop = new Shop();
      //店舗DBに入力
      $shop->shop_name = $request->name;
      $shop->lat = $request->lat;
      $shop->lng = $request->lng;
      $shop->customer = $request->customer_range;
      if(!empty($request->address)){
        $shop->address = $request->address;
      }
      else{
        $shop->address = null;
      }
      if(!empty($request->business_hours)){
        $shop->business_hours = $request->business_hours;
      }
      else{
        $shop->business_hours = null;
      }
      if(!empty($request->regular_holiday)){
        $shop->regular_holiday = $request->regular_holiday;
      }
      else{
        $shop->regular_holiday = null;
      }
      if(!empty($request->seats)){
        $shop->seats = $request->seats;
      }
      else{
        $shop->seats = null;
      }
      if(!empty($request->homepage)){
        $shop->homepage = $request->homepage;
      }
      else{
        $shop->homepage = null;
      }
      if(!empty($request->smoking)){
        $shop->smoking = $request->smoking;
      }
      else{
        $shop->smoking = null;
      }
      if(!empty($request->charging)){
        $shop->charging = $request->charging;
      }
      else{
        $shop->charging = null;
      }
      if(!empty($request->wifi)){
        $shop->wifi = $request->wifi;
      }
      else{
        $shop->wifi = null;
      }
      if(!empty($request->peak_time)){
        $shop->peak_time = $request->peak_time;
      }
      else{
        $shop->peak_time = null;
      }
      $shop->save();

      if(!empty($request->picture)){
        $fileName = $request->picture->getClientOriginalName();
        // 写真をローカルに保存
        //Image::make($request->picture)->save(public_path() . '/images/shops/' . $fileName);
        // 写真をドライブに保存
        $fileData = File::get($request->picture);
        Storage::disk('shops_google')->put($fileName, $fileData);
        //写真DBに入力
        $photo = new Photo();
        //$photo->image = $fileName;
        $drivename = Storage::disk('shops_google')->url($fileName);
        $drivename = substr($drivename, 31, -13);
        $photo->image = $drivename;
        $photo->shop_id = $shop->id;
        $photo->save();
      }
      return redirect('/shops/'.$shop->id);
  }
}
