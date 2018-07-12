@extends('layout')

@section('content')
{{ $shop->shop_name }}
<div class="contents row">
  <div class="col-xs-6">
    @foreach($shop->photos()->get() as $photo)
      <img src="/images/shops/{{ $photo->image }}" style="width: 100%; height: 300px;">
      <br>
    @endforeach



    <!-- 地図を表示 -->
  
   
  </div>
  <div class="col-xs-6">
    <!-- この中にお店の詳細情報を追加していく -->

    <ul>
      <li>営業時間  {{$shop->business_hours}}</li>
      <li>席数 {{$shop->seats}}</li>
      <li>タバコ {{$shop->smoking}}</li>
      <li>公式HP・SNS {{$shop->homepage}}</li>
      <li>充電 {{$shop->charging}}</li>
      <li>Wi-Fi {{$shop->wifi}}</li>
      <li>メニュー・値段</li>
      <li>客層 {{$shop->customer}}</li>
      <li>ピーク時間 {{$shop->peak_time}}</li>
    </ul>


  </div>

  <div class="col-xs-12">

    <h2>メニュー</h2>
    <table class="table table-sm ">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">メニュー名</th>
      <th scope="col">値段</th>
      <th scope="col">写真</th>
    </tr>
  </thead>
  <tbody>
    @foreach($shop->curries()->get() as $curry)
    <tr class="menu-table">
      <th  scope="row " class="lead" style="vertical-align: middle;">1</th>
      <td class="col-md-4 lead " style="vertical-align: middle;"> {{$curry->curry_name}} </td>
      <td class="col-md-4 lead " style="vertical-align: middle;"> {{$curry->price}}</td>
      <td class="col-md-4 lead" >
        @if($curry->photos()->exists())
          <img src="/images/curries/{{ $curry->photos()->first()->image }}" style="width: 70%; height:100px;">
        @else
          <img src="/images/noimage.png" style="width: 20%; height: 100px "/>
        @endif
      </td>
    </tr>
    @endforeach
  </tbody>
</table>

    <h2>アクセス</h2>
      <p>{{$shop->address}}</p>
      <div id="map" style="width: 90%; height: 500px;"></div>

    <h2>レビュー</h2>
          {{Form::open(['url' => "/shopreview/$shop->id", 'method' => 'post', 'files' => true])}}
          <div style="margin: 8px 0">
            {{ Form::label('rate', '評価', ['style' =>  'margin-right:8;']) }}
            {{ Form::selectRange('rate', 1, 10, ['placeholder' => '評価', 'class' => 'searh__query', 'style' => 'text-align: right;']) }}
          </div>
          <div style="margin: 8px 0">
            {{ Form::file('picture') }}
          </div>
          <div style="margin: 8px 0">
            {{ Form::textarea('review', '', ['placeholder' => 'レビューを書いてね！', 'style' => 'width: 100%;height: 300px;']) }}
          </div>
          <div class="row">
            <div class="col10 push1">
              {{ Form::submit('投稿する', ['class' => 'btn btn-default']) }}
            </div>
          </div>
          {!! Form::close() !!}
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