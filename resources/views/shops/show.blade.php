@extends('layout')

@section('content')
{{ $shop->shop_name }}
<div class="contents row">
  <div class="col-xs-6">
      <div class="showtop_img single-item">
    @foreach($shop->photos()->get() as $photo)
<<<<<<< HEAD
    <h3>
      <img src="/images/shops/{{ $photo->image }}">
      </h3>
=======
      <img src="/images/shops/{{ $photo->image }}" style="width: 100%; height: 300px;">
      <br>
>>>>>>> 6955ceaaebd119da68026d887ec3e0a50b6267b4
    @endforeach
  </div>



    <!-- 地図を表示 -->
  
   
  </div>
  <div class="col-xs-6">
    <!-- この中にお店の詳細情報を追加していく -->

<div class="table-responsive">
  <h3>詳細情報</h3>

  <table class="table table-striped table-bordered table-hover">
    <thead>

    </thead>
    <tbody>
      <tr>
        <td>営業時間</td><td>{{$shop->business_hours}}</td>
      </tr>
      <tr>
        <td>席数</td><td>{{$shop->seats}}</td>
      </tr>
      <tr>
        <td>タバコ</td><td>{{$shop->smoking}}</td>
      </tr>
      <td>公式HP・SNS</td><td>{{$shop->homepage}}</td>
      </tr>
      <td>充電</td><td>{{$shop->charging}}</td>
      </tr>
      <td>Wi-Fi</td><td>{{$shop->wifi}}</td>
      </tr>
      <td>客層</td><td>{{$shop->customer}}</td>
      </tr>
      <td>ピーク時間</td><td>{{$shop->peak_time}}</td>
      </tr>
    </tbody>
  </table>
</div><!--/table-responsive-->


  </div>

  <div class="col-xs-12">

    <h2>メニュー</h2>
    <table class="table table-sm ">
  <thead>
    <tr>
      <th scope="col">商品名</th>
      <th scope="col">値段</th>
      <th scope="col">写真</th>
    </tr>
  </thead>
  <tbody>
    @foreach($shop->curries()->get() as $curry)
    <tr class="menu-table">

      <td class="col-md-4 lead " style="vertical-align: middle;"> {{$curry->curry_name}} </td>
      <td class="col-md-4 lead " style="vertical-align: middle;"> {{$curry->price}}</td>
      <td class="col-md-4 lead" >
        @if($curry->photos()->exists())
          <img src="/images/curries/{{ $curry->photos()->first()->image }}" style="width: 70%; height:120px;">
        @else
          <img src="/images/noimage.png" style="width: 70%; height: 120px "/>
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