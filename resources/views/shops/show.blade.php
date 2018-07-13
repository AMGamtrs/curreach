@extends('layout')

@section('content')
{{ $shop->shop_name }}
<div class="contents row">
  <div class="col-xs-6">
      <div class="showtop_img single-item">
    @foreach($shop->photos()->get() as $photo)
    <h3>
      <img src="/images/shops/{{ $photo->image }}">
      </h3>
    @endforeach
  </div>

    <!-- 地図を表示 -->
    <p>アクセス</p>
    <div id="map" style="width: 90%; height: 500px"></div>
  </div>
  <div class="col-xs-6">
    aaaaaaaaaaaaaaa
  </div>
</div><!-- row -->

<script>
  function initMap(){
    var shop_lat = {{$shop->lat}};
    var shop_lng = {{$shop->lng}};
    var map_center = {lat: shop_lat, lng: shop_lng };

    var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 15,
      center: map_center
    });

    var marker = new google.maps.Marker({
      position: map_center,
      map: map,
      icon: "{{ asset('assets/images/marker_small.png') }}"
    });
  }
</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script
  async defer
  src ="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_API_KEY') }}&callback=initMap">
</script>


@endsection