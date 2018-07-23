@extends('layout')

@section('content')

<div class="contents row">
  <div class="col-xs-12">
    <h1>{{ $curry->curry_name }}</h1>
    <p>
      <a href="/shops/{{ $curry->shop->id }}">{{ $curry->shop->shop_name }}</a>
    </p>
  </div>
</div>

<div class="contents row">
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
  <h3>詳細情報</h3>
  <table class="table table-striped table-bordered table-hover">
    <thead>
    </thead>
    <tbody>
      <tr>
        <td>価格</td><td>{{ $curry->price }}円</td>
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
        <td>大盛り・ハーフ</td><td>@if ($curry->hot_rate == 0)
         不明
      @elseif ($curry->hot_rate == 1)
        可
      @elseif ($curry->hot_rate == 2)
        不可
      @endif</td>
      </tr>
      <tr>
        <td>ナンor米</td><td>@if ($curry->naan_rice == 0)
         不明
      @elseif ($curry->naan_rice == 1)
        ナン
      @elseif ($curry->naan_rice == 2)
        ライス
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


<div class="contents row">
  <div class="col-xs-12">
    <h2>投稿されたレビュー</h2>
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
        </div>
      @endforeach
  </div>
</div>

<div class="contents row">
  <div class="col-xs-12">
    <h2>レビューを投稿する</h2>
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
          <div class="actions">
            <input type="submit" value="投稿する">
          </div>
        {{ Form::close() }}
      @else
        レビューするにはログインしてください
      @endif

  </div>
</div>
</div>

@endsection
