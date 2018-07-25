@extends('layout')

@section('content')

<div class="contents row" style="border-radius:5px; border:1px solid #ddd; margin-bottom:20px; padding:8px;">
  <div class="col-xs-12">
    <h1>{{ $shop->shop_name }}</h1>
  </div>

  <div class="col-xs-6">
      <div class="showtop_img single-item">
        @foreach($shop->photos()->get() as $photo)
        <h3>
          <img src="http://drive.google.com/uc?export=view&id={{ $photo->image }}">
        </h3>
        @endforeach
      </div>
  </div>

    <!-- 地図を表示 -->
  <div class="col-xs-6">
    <!-- この中にお店の詳細情報を追加していく -->

<div class="table-responsive">
  <h3 style="margin-bottom:15px;"><span class="showpage-heading showpage-detail">詳細情報</span></h3>

  <table class="table table-striped table-bordered table-hover table-condensed" style="table-layout:fixed;">

    <tbody>
      <tr>
        <td class="col-xs-4">営業時間</td><td class="col-xs-8">@if ($shop->business_hours == null)
          不明
        @else
          {{$shop->business_hours}}
        @endif
        </td>
      </tr>
      <tr>
        <td>席数</td><td>@if ($shop->seats == null)
          不明
        @else
          {{$shop->seats}}
        @endif
        </td>
      </tr>
      <tr>
        <td>公式HP・SNS</td><td>@if ($shop->homepage == null)
          不明
        @else
          <a class="text-warning" href="{{$shop->homepage}}" style="word-wrap: break-word;">{{$shop->homepage}}</a>
        @endif
        </td>
      </tr>
      <td>タバコ</td><td>@if ($shop->smoking == 0)
         不明
      @elseif ($shop->smoking == 1)
        可
      @elseif ($shop->smoking == 2)
        不可
      @else
        分煙
      @endif
      </td>
      </tr>
      <td>充電</td><td>@if ($shop->charging == 0)
         不明
      @elseif ($shop->charging == 1)
         あり
      @else ($shop->charging == 2)
         なし
      @endif
      </td>
      </tr>
      <td>Wi-Fi</td><td>@if ($shop->wifi == 0)
         不明
      @elseif ($shop->wifi == 1)
         あり
      @else ($shop->wifi == 2)
         なし
      @endif
      </td>
      </tr>
      <td>客層</td>
      <td>
        <div class="progress" style="margin-bottom:0;">
          @if($shop->customer == 1)
          <div class="progress-bar progress-bar-danger" style="width: 0%">
            <span class="sr-only">35% Complete (success)</span>
          </div>
          <div class="progress-bar progress-bar-info progress-bar-striped" style="width: 100%">
            男性 9割以上
          </div>
          @elseif($shop->customer == 2)
          <div class="progress-bar progress-bar-danger progress-bar-striped" style="width: 25%">
            女性 3割
          </div>
          <div class="progress-bar progress-bar-info progress-bar-striped" style="width: 75%">
            男性 7割
          </div>
          @elseif($shop->customer == 3)
          <div class="progress-bar progress-bar-danger progress-bar-striped" style="width: 50%">
            女性 5割
          </div>
          <div class="progress-bar progress-bar-info progress-bar-striped" style="width: 50%">
            男性 5割
          </div>
          @elseif($shop->customer == 4)
          <div class="progress-bar progress-bar-danger progress-bar-striped" style="width: 75%">
            女性 7割
          </div>
          <div class="progress-bar progress-bar-info progress-bar-striped" style="width: 25%">
            男性 3割
          </div>
          @elseif($shop->customer == 5)
          <div class="progress-bar progress-bar-danger progress-bar-striped" style="width: 100%">
            女性 9割以上
          </div>
          <div class="progress-bar progress-bar-info progress-bar-striped" style="width: 0%">
          </div>
          @endif
        </div>
      </td>
      </tr>
      <td>ピーク時間</td><td>@if ($shop->peak_time == null)
        不明
      @else
        {{$shop->peak_time}}
      @endif

      </td>
      </tr>
    </tbody>
  </table>

 </div><!--/table-responsive-->

</div>

  <div class="col-xs-12">
    <h3 style="margin-bottom:15px;"><span class="showpage-heading showpage-menu">メニュー</span></h3>
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

      <td class="col-md-6 col-sm-6 lead " style="vertical-align: middle;"><a class="text-warning" href="/shops/{{$shop->id}}/curries/{{$curry->id}}"> {{$curry->curry_name}} </a></td>
      <td class="col-md-3 col-sm-3 lead " style="vertical-align: middle;"> {{$curry->price}} 円</td>
      <td class="col-md-3 col-sm-3 lead" >
        <a href="/shops/{{$shop->id}}/curries/{{$curry->id}}">
        @if($curry->photos()->exists())
          <img src="http://drive.google.com/uc?export=view&id={{ $curry->photos()->first()->image }}" style="width: 100%; height: 120px; object-fit:cover;">
        @else
          <img src="/images/noimage.png" style="width: 100%; height: 100px; object-fit:cover;"/>
        @endif
        </a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
<div class="clearfix">
<a class="btn btn-warning pull-right" href="/shops/{{$shop->id}}/curries/create" role="button">カレーを追加する »</a>
</div>
    <h3 style="margin-bottom:15px;"><span class="showpage-heading showpage-access">アクセス</span></h3>
      <p>{{$shop->address}}</p>
      <div id="map" style="width: 100%; height: 500px;"></div>

    <h3 style="margin-bottom:15px;"><span class="showpage-heading showpage-review">投稿されたレビュー</span></h3>
      @foreach($shop->reviews()->get() as $review)
        <div class="review_box">
          <div class="review_name">投稿者：{{ $review->user->name }}</div>
          <div class="review_rate">評価：{{$review->rate}}</div>
            <span class="star-rating">
              <span class="star-rating-front" style="width: {{ ($review->rate)*2 }}0%">★★★★★</span>
              <span class="star-rating-back">★★★★★</span>
            </span>
          <div class="review_review">{{ $review->review }} </div>
          @foreach($review->photos()->get() as $photo)
            <div class="review_img"><img src="http://drive.google.com/uc?export=view&id={{ $photo->image }}"></div>
          @endforeach
          <div class="favorite" id="{{ $review->id }}">
            @if (Auth::check())
              @if ( $review->favorites()->where('user_id', Auth::user()->id )->exists() > 0 )
                <button class="btn btn-primary btn-xs fav_btn" type="button">
                  いいねしました <span class="badge">{{ $review->favorites()->count() }}</span>
                </button>
              @else
                <button class="btn btn-primary btn-xs no_fav_btn" type="button" onClick="fav({{ Auth::user()->id}}, {{$review->id }})">
                  いいねする <span class="badge">{{ $review->favorites()->count() }}</span>
                </button>
              @endif
            @else
              <button class="btn btn-primary btn-xs no_fav_btn login_yet" type="button">
                いいね <span class="badge">{{ $review->favorites()->count() }}</span>
              </button>
              <span>いいねするにはログインしてください</span>
            @endif
          </div>
        </div>
      @endforeach

    <h3 style="margin-bottom:15px;"><span class="showpage-heading showpage-post">レビューを投稿する</span></h3>
        <!-- ここにレビュー投稿フォーム -->
      @if (Auth::check())
          {{Form::open(['url' => "/shopreview", 'method' => 'post', 'files' => true])}}
          <div class="review_form_name">投稿者名:{{ Auth::user()->name }}</div>
          {{Form::hidden('shop_id', "$shop->id")}}
          <div class="field">
            <label>評価(5段階)</label>
            {{Form::select('rate',
              [
                '1' => '★',
                '2' => '★★',
                '3' => '★★★',
                '4' => '★★★★',
                '5' => '★★★★★'
              ], null,
              ['id' => 'rate_form']
            )}}

          </div>
          <div class="field">
            <label>感想</label><br>
            {{Form::textarea('review', "【雰囲気】\n【衛生面】\n【客対応】")}}
          </div>
          <div class="field">
            <label>写真</label><br>
              <div class="field">
                {{ Form::file('picture') }}
              </div>
          </div>
          <br>
          <br>
          <div class="actions">
            <input type="submit" value="投稿する">
          </div>
        {{ Form::close() }}
      @else
        レビューするにはログインしてください
      @endif

  </div>
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
<script>
  function fav(user_id, review_id){
    var fav_data = { user_id, review_id };
    //ajax通信でDBにいいね書き込み 結果取得
    $.ajax({
      url: '/favajax',
      type: 'GET',
      dataType: 'json',
      timeout: 1000,
      data: fav_data
    }).done(function(responseData) {
      //成功時の処理
      //いいねボタンの数字更新・クリック済みにする
      var id = responseData['review_id'];
      var count = responseData['fav_count'];
      var review_button = document.getElementById(id);
      var html = "<button class='btn btn-primary btn-xs fav_btn' type='button'>いいねしました <span class='badge'>" + count + "</span></button>"
      review_button.innerHTML = html;
    }).fail(function(error) {
            console.log(error);
    });
  }
</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script
  async defer
  src ="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_API_KEY') }}&callback=initMap">
</script>


@endsection
