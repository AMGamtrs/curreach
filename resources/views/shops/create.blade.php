@extends('layout')

@section('content')
<div class="contents row">
{{ Form::open(['url' => "/shops", 'method' => 'post', 'files' => true]) }}
<h3>店舗を登録する</h3>

<div class="field">
  <p>店舗名(必須)：
    <input type="text" name="name" value="" required="required" />
    <br>
  </p>
</div>

<div class="field">
外観写真：{{ Form::file('picture') }}
</div>

<div class="field">
<p><nobr>他の任意の項目：
  <input type="text" name="item"><nobr></p>
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
