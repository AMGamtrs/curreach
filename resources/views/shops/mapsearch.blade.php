@extends('layout')

@section('content')

<div class="row">
  <div class="col-md-2 col-md-offset-1 sidebar"><!-- 左メニュー -->
    <div class="panel panel-default">
      <p>検索結果</p>
      <div class="list_box" >
        <ul class="shop_list sideMenu nav nav-sidebar">
        </ul>
        <p class="no_list"></p>
      </div>
    </div>
  </div>
  <div class="col-md-8"><!-- 右地図表示領域 -->
    <!-- 地図を表示する -->
    <div id="map" style="width: 100%; height: 500px"></div>

    <script>
      var markers = Array();
      var currentInfoWindow;
      var nowM = null;
      var shopIds = Array();
      var nowShop = null;

      function initMap(){

        var map_center = {lat: 35.6808586, lng: 139.7669568};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 15,
          center: map_center
        });

        //地図移動時にマーカ再set
        google.maps.event.addListener(map, 'idle', function(){
          setPointMarker();
        });

        //マーカを表示する
        function newMark(response){
            var i = markers.length;
            shopIds[i] = response['id'];//ajax移動対策
            //緯度経度を型変換
            var marker_lat = parseFloat(response['lat']);
            var marker_lng = parseFloat(response['lng']);
            //マーカ作成
          markers[i] = new google.maps.Marker({
              position: {lat: marker_lat, lng: marker_lng},
              map: map,
              icon: "{{ asset('assets/images/marker_small.png') }}"
          });
          //吹き出し表示
          var infoWnd = new google.maps.InfoWindow({
            content: response['shop_name'] + "<p>その他の情報<p><p><a href='/shops/"+ response['id'] +"'>店舗情報を見る</a></p>",
          });
          //マーカクリック時の処理
          google.maps.event.addListener(markers[i], "click", function(){
                //先に開いた情報ウィンドウがあれば、closeする iconも戻す
                if (currentInfoWindow) {
                  currentInfoWindow.close();
                  nowM.setIcon( "{{asset('assets/images/marker_small.png')}}" );
                }
                markers[i].setIcon("{{asset('assets/images/marker_big.png')}}");
                //情報ウィンドウを開く
                infoWnd.open(map, markers[i]);
                //開いた情報ウィンドウを記録しておく マーカも記録,移動対策に店舗IDを保存
                currentInfoWindow = infoWnd;
                nowM = markers[i];
                nowShop = response['id'];
          });
        }

        function setPointMarker(){
          //古いマーカを削除
          if(markers.length > 0){
            for (i = 0; i <  markers.length; i++) {
              markers[i].setMap(null);
            }
            //配列削除
            markers = [];
          }
          //地図の東西南北境界取得
          var bounds = map.getBounds();
          var map_latlng = {map_ne_lat:bounds.getNorthEast().lat(),
                            map_sw_lat:bounds.getSouthWest().lat(),
                            map_ne_lng:bounds.getNorthEast().lng(),
                            map_sw_lng:bounds.getSouthWest().lng()
                            };

          $.ajax({
            url: '/mapajax',
            type: 'GET',
            dataType: 'json',
            timeout: 1000,
            data: map_latlng
          }).done(function(responseData) {
            //店舗リスト削除(ウィンドウサイズ変更時対策ここに入れるとマーカ大きくならない)
            $('ul.shop_list').empty();
            var menu_n = 0;
            if(responseData.length != 0){ //範囲内に店舗があれば
              $('p.no_list').text("");
              responseData.forEach(function(response){
                newMark(response);
                //移動前にクリックしたアイコンが存在すれば表示したい////////////////////////
                if (nowM !== null){
                  if (response['id'] == nowShop){
                    var openId = shopIds.indexOf(nowShop);
                    google.maps.event.trigger(markers[openId], "click");
                  }
                }
                //ここでリスト表示する
                ShopList = $('ul.shop_list').append("<li id=" + menu_n + "><a href=\"javascript:void(0)\">" + response['shop_name'] + "</a></li>");
                menu_n = menu_n + 1;
              });
            }else{
              //店舗なし文言表示
              $('p.no_list').text("この付近の店舗は見つかりませんでした");
            }
            //リストクリック時にマーカを大きくする
            $('li').click(function(){
                var index = $(this).index();
                google.maps.event.trigger(markers[index], "click");
            });
          }).fail(function(error) {
            console.log(error);
          });
        }
      }

    </script>

  </div><!-- map -->
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script
  async defer
  src ="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_API_KEY') }}&callback=initMap">
</script>
<!--   src ="https://maps.googleapis.com/maps/api/js?key=AIzaSyAvoocj2Tn6Kc08gKXjZT5sUYfJ1KPqOwg&callback=initMap"> -->

@endsection
