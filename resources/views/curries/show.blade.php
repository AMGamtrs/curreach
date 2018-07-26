@extends('layout')

@section('content')

<div class="contents row" style="border-radius:5px; border:1px solid #ddd; margin-bottom:20px; padding:8px;">
  <div class="col-xs-12">
    <h1>{{ $curry->curry_name }}</h1>
    <p>
      <a class="text-warning" href="/shops/{{ $curry->shop->id }}">{{ $curry->shop->shop_name }}</a>
    </p>
  </div>

  <div class="col-xs-6">
    <div class="container">

      @if($curry->photos()->exists())
            <div class="showtop_img single-item">
        @foreach($curry->photos()->get() as $photo)
          <h3><img src="http://drive.google.com/uc?export=view&id={{ $photo->image }}"></h3>
        @endforeach
      </div>
      @else
          <img src="http://drive.google.com/uc?export=view&id=1FWi7Bz-kfcYlSyibXfSF0-o92NJG3-li"/>
      @endif

    </div>
  </div>

<div class="col-xs-6">
    <!-- この中にお店の詳細情報を追加していく -->
<div class="table-responsive">
  <h3 style="margin-bottom:15px;"><span class="showpage-heading showpage-detail">詳細情報</span></h3>
  <table class="table table-striped table-bordered table-hover table-condensed">
    <thead>
    </thead>
    <tbody>
      <tr>
        <td class="col-xs-5">価格</td><td>{{ $curry->price }}円</td>
      </tr>
      <tr>
        <td>種類</td><td>@if ($curry->curry_type == 0)
         不明
      @elseif ($curry->curry_type == 1)
        洋風カレー
      @elseif ($curry->curry_type == 2)
        スープカレー
      @elseif ($curry->curry_type == 3)
        インドカレー
      @elseif ($curry->curry_type == 4)
        ご当地カレー
      @elseif ($curry->curry_type == 5)
        その他
      @endif
      </td>
      </tr>
      <tr>
        <td>メイン具材</td><td>@if ($curry->main_ingredient == 0)
         不明
      @elseif ($curry->main_ingredient == 1)
        チキン
      @elseif ($curry->main_ingredient == 2)
        ビーフ
      @elseif ($curry->main_ingredient == 3)
        ポーク
      @elseif ($curry->main_ingredient == 4)
        マトン
      @elseif ($curry->main_ingredient == 5)
        シーフード
      @elseif ($curry->main_ingredient == 6)
        野菜
      @elseif ($curry->main_ingredient == 7)
        その他
      @endif</td>
      </tr>
      <tr>
        <td>カロリー</td><td>@if(!empty($curry->calorie))
          {{ $curry->calorie }}kcal
          @else
          不明
          @endif
          </td>
      </tr>
      <tr>
        <td>アレルギー食材</td><td>@if(!empty($curry->allergies))
          {{ $curry->allergies }}
          @else
          不明
          @endif
        </td>
      </tr>
      <tr>
        <td>辛さ</td><td>@if ($curry->hot_rate == 0)
         不明
      @elseif ($curry->hot_rate == 1)
        激甘
      @elseif ($curry->hot_rate == 2)
        ちょい甘
      @elseif ($curry->hot_rate == 3)
        普通
      @elseif ($curry->hot_rate == 4)
        ちょい辛
      @elseif ($curry->hot_rate == 5)
        激辛
      @endif</td>
      </tr>
      <tr>
        <td>トッピング</td><td>@if(!empty($curry->topping))
          {{ $curry->topping }}
          @else
          不明
          @endif
        </td>
      </tr>
      <tr>
        <td>大盛り・ハーフ</td><td>@if ($curry->amount == 0)
         不明
      @elseif ($curry->amount == 1)
        可
      @elseif ($curry->amount == 2)
        不可
      @endif</td>
      </tr>
      <tr>
        <td>ライスorナン</td><td>@if ($curry->naan_rice == 0)
         不明
      @elseif ($curry->naan_rice == 1)
        ライス
      @elseif ($curry->naan_rice == 2)
        ナン
      @elseif ($curry->naan_rice == 3)
        両方
      @elseif ($curry->naan_rice == 4)
        その他
      @endif</td>
      </tr>
    </tbody>
  </table>
 </div><!--/table-responsive-->
</div>


  <div class="col-xs-12">
    <h3 style="margin-bottom:15px;"><span class="showpage-heading showpage-review">投稿されたレビュー</span></h3>
      @foreach($curry->reviews()->get() as $review)
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
      @if (count($curry->reviews()->get())==0)
       まだレビューがありません
      @endif
  </div>


  <div class="col-xs-12">
    <h3 style="margin-bottom:15px;"><span class="showpage-heading showpage-post">レビューを投稿する</span></h3>
        <!-- ここにレビュー投稿フォーム -->
      @if (Auth::check())
        {{ Form::open(['url' => "/curryreview", 'method' => 'post', 'files' => true, 'name' => "rform"]) }}
          <div class="review_form_name">投稿者名:{{ Auth::user()->name }}</div>
          {{Form::hidden('curry_id', "$curry->id")}}
          <div class="field">
            <label>おいしさ(5段階)</label>
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
            {{Form::textarea('review', "【おいしさ】\n【辛さ】")}}
          </div>
          <div class="field">
            <label>写真</label><br>
              <div class="field">
                {{ Form::file('picture') }}
              </div>
          </div>
          <br>

          <div class="actions">
            <input type="submit" value="投稿する">
          </div>

          <br>
        {{ Form::close() }}
      @else
        レビューするにはログインしてください
      @endif

  </div>

</div>

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

@endsection
