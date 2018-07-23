@extends('layout')

@section('content')
<div class="contents row">
{{ Form::open(['url' => "/shops", 'method' => 'post', 'files' => true]) }}
<h3>店舗を登録する</h3>

<div class="field">
  <p><span class="col-1">店舗名(必須)</span>
    <span class="col-2">
      <input type="text" name="name" value="" required="required" >
    </span><br>
  </p>
</div>

<div class="field">
外観写真{{ Form::file('picture') }}
</div>

<div class="field">
<p><span class="col-1">住所</span>
  <span class="col-2"><input type="text" name="address"></span>
</p>
</div>

<div class="field">
<p><span class="col-1">営業時間</span>
  <span class="col-2"><input type="text" name="business_hours"></span>
</p>
</div>

<div class="field">
<p><span class="col-1">定休日</span>
  <span class="col-2"><input type="text" name="regular_holiday"></span>
</p>
</div>

<div class="field">
<p><span class="col-1">座席数</span>
  <span class="col-2"><input type="text" name="seats"></span>
</p>
</div>

<div class="field">
<p><span class="col-1">公式HP・SNS</span>
  <span class="col-2"><input type="text" name="homepage"></span>
</p>
</div>

<div class="field">
<p><span class="col-1">ピーク時間</span>
  <span class="col-2"><input type="text" name="peak_time"></span>
</p>
</div>

<div class="field">
<p><span class="col-1">客層</span>
  <span class="col-2">
    <form action="xxx.php" method="post">
      <label>男性多め←→女性多め<input type="range" min="1" max="5" step="1" name="customer_range">
      </label>
    </form>
  </span>
</p>
</div>

<div class="field">
<p><span class="col-1">タバコ</span>
  <span class="col-2">
    <select name="smoking" size="1">
      <option value="0">可</option>
      <option value="1">不可</option>
      <option value="2">分煙</option>
    </select>
  </span>
</p>
</div>

<div class="field">
<p><span class="col-1">充電</span>
  <span class="col-2">
    <select name="charging" size="1">
      <option value="0">不明</option>
      <option value="1">あり</option>
      <option value="2">なし</option>

    </select>
  </span>
</p>
</div>

<div class="field">
<p><span class="col-1">Wi-Fi</span>
  <span class="col-2">
    <select name="wifi" size="1">
      <option value="0">不明</option>
      <option value="1">あり</option>
      <option value="2">なし</option>
    </select>
  </span>
</p>
</div>

<div id="map" style="width: 90%; height: 300px"></div>

<div class="field">
  <div class="form-group">
    {{Form::hidden('lat', '35.6808586', ['id' => 'poslat'])}}
    {{Form::hidden('lng', '139.7669568', ['id' => 'poslng'])}}
  </div>
</div>

<div class="actions">
    <input type="submit" value="登録">
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
