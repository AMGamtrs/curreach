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
      <div class="showtop_img single-item">
        @foreach($curry->photos()->get() as $photo)
          <h3><img src="/images/curries/{{ $photo->image }}"></h3>
        @endforeach
      </div>
    </div>
  </div>
  <div class="col-xs-6">
    詳細情報
    <table class="details">
      <tr>
        <td>価格</td><td>{{ $curry->price }}</td>
      </tr>
      <tr>
        <td>種類</td><td>{{ $curry->curry_type }}</td>
      </tr>
      <tr>
        <td>メイン具材</td><td>{{ $curry->main_ingredien }}</td>
      </tr>
      <tr>
        <td>カロリー</td><td>{{ $curry->calorie }}</td>
      </tr>
      <tr>
        <td>アレルギー食材</td><td>{{ $curry->allergies }}</td>
      </tr>
      <tr>
        <td>辛さ</td><td>{{ $curry->hot_rate }}</td>
      </tr>
      <tr>
        <td>トッピング</td><td>{{ $curry->topping }}</td>
      </tr>
      <tr>
        <td>量</td><td>{{ $curry->amount }}</td>
      </tr>
      <tr>
        <td>ナンor米</td><td>{{ $curry->naan_rice }}</td>
      </tr>
    </table>
  </div>
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
            <div class="review_img"><img src="/images/reviews/{{ $photo->image }}"></div>
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
              ['id' => 'rate_form', 'onchange' => 'selectChange("rate_form")']
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
            <input type="submit" value="登録">
          </div>
        {{ Form::close() }}
      @else
        レビューするにはログインしてください
      @endif

  </div>
</div>


<script lang="JavaScript">
function selectChange(id) {
  //選択した評価をテキストボックスに入れる
  var obj = document.getElementById(id);
  var idx = obj.selectedIndex;//インデックス番号を取得
  console.log(idx);
  var str = obj.options[idx].text;
  if(idx == 0){
    str =  "\nいまいち";
  }else if (idx == 1){
    str =  "\nふつう";
  }else if (idx == 2){
    str = "\nまあまあおいしい";
  }else if (idx == 3){
    str = "\nおいしい";
  }else if (idx == 4){
    str = "\nサイコー！";
  }
  document.rform.review.value = "【おいしさ】" + str + "\n\n【辛さ】";
}
</script>

@endsection