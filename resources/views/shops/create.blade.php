@extends('layout')

@section('content')
<div class="container container-small" style="background-color: #fff; border-radius:10px; border:1px solid #ddd; margin-bottom:20px; padding-bottom:20px;">
{{ Form::open(['url' => "/shops", 'method' => 'post', 'files' => true, 'class' => 'form-horizontal']) }}
<h3 class="text-center" style="margin-top:25px; margin-bottom:30px;"><span class="createpage-heading">店舗を登録</span></h3>

<div class="field form-group">
    <label class="col-md-4 col-sm-4 control-label">店舗名(必須)</label>
    <div class="col-md-6 col-sm-6">
      <input class="form-control" type="text" name="name" value="" required="required" >
    </div>
</div>

<div class="form-group field">
    <label for="icon" class="col-md-4 col-sm-4 control-label">外観写真</label>
    <div class="col-md-6 col-sm-6">
        {{ Form::file('picture') }}
    </div>
</div>

<div class="field form-group">
    <label class="col-md-4 col-sm-4 control-label">住所</label>
    <div class="col-md-6 col-sm-6">
      <input class="form-control" type="text" name="address" value="">
    </div>
</div>

<div class="field form-group">
    <label class="col-md-4 col-sm-4 control-label">営業時間</label>
    <div class="col-md-6 col-sm-6">
      <input class="form-control" type="text" name="business_hours" value="">
    </div>
</div>

<div class="field form-group">
    <label class="col-md-4 col-sm-4 control-label">定休日</label>
    <div class="col-md-6 col-sm-6">
      <input class="form-control" type="text" name="regular_holiday" value="">
    </div>
</div>

<div class="field form-group">
    <label class="col-md-4 col-sm-4 control-label">座席数</label>
      <div class="col-md-5 col-sm-5">
        <div class="input-group">
          <input class="form-control" type="text" name="seats" value="">
        <div class="input-group-addon">席</div>
      </div>
  </div>
</div>

<div class="field form-group">
    <label class="col-md-4 col-sm-4 control-label">公式HP・SNS</label>
    <div class="col-md-6 col-sm-6">
      <input class="form-control" type="text" name="homepage" value="">
    </div>
</div>

<div class="field form-group">
    <label class="col-md-4 col-sm-4 control-label">ピーク時間</label>
    <div class="col-md-6 col-sm-6">
      <input class="form-control" type="text" name="peak_time" value="">
    </div>
</div>

<div class="field form-group">
    <label class="col-md-4 col-sm-4 control-label">客層</label>
    <div class="col-md-6 col-sm-6">
      男性多め←<div class="text-right pull-right">→女性多め</div><input type="range" min="1" max="5" step="1" name="customer_range">
    </div>
</div>

<div class="field form-group">
    <label class="col-md-4 col-sm-4 control-label">タバコ</label>
    <div class="col-md-5 col-sm-5">
      <select class="form-control" name="smoking" size="1" style="height:34px;">
        <option value="0">不明</option>
        <option value="1">可</option>
        <option value="2">不可</option>
        <option value="3">分煙</option>
      </select>
    </div>
</div>

<div class="field form-group">
    <label class="col-md-4 col-sm-4 control-label">充電</label>
    <div class="col-md-5 col-sm-5">
      <select class="form-control" name="charging" size="1" style="height:34px;">
        <option value="0">不明</option>
        <option value="1">あり</option>
        <option value="2">なし</option>
      </select>
    </div>
</div>

<div class="field form-group">
    <label class="col-md-4 col-sm-4 control-label">Wi-Fi</label>
    <div class="col-md-5 col-sm-5">
      <select class="form-control" name="wifi" size="1" style="height:34px;">
        <option value="0">不明</option>
        <option value="1">あり</option>
        <option value="2">なし</option>
      </select>
    </div>
</div>

<div id="map" style="height: 300px"></div>

<div class="field">
  <div class="form-group">
    {{Form::hidden('lat', '35.6808586', ['id' => 'poslat'])}}
    {{Form::hidden('lng', '139.7669568', ['id' => 'poslng'])}}
  </div>
</div>

<div class="actions">
    <input class="center-block btn btn-default" type="submit" value="登録">
</div>
{{ Form::close() }}

</div>

<script>
  function initMap(){
    var map_center = {lat: 35.6808586, lng: 139.7669568 };

    var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 15,
      center: map_center
    });

    //ドラッグ可能なマーカを追加
    var marker = new google.maps.Marker({
      draggable:true,
      position: map_center,
      map: map,
      icon: "{{ asset('assets/images/marker_small.png') }}"
    });

    //マーカークリックで吹き出し表示  住所を表示

    //マーカドラッグ後の座標を取得
    google.maps.event.addListener( marker, 'dragend', function(){
      var pos = marker.getPosition();
      var poslat = pos.lat();
      var poslng = pos.lng();
      //formに取得した座標を入れる
      document.getElementById( "poslat" ).value = poslat;
      document.getElementById( "poslng" ).value = poslng;
    });

  }
</script>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script
  async defer
  src ="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_API_KEY') }}&callback=initMap">
</script>

@endsection
