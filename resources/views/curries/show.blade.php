@extends('layout')

@section('content')

<div class="contents row">
  <div class="col-xs-12">
    {{ $curry->curry_name }}
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
    詳細情報ここに書く
  </div>
</div>

<div class="contents row">
  <div class="col-xs-12">
    <h2>投稿されたレビュー</h2>
      @foreach($curry->reviews()->get() as $review)
        <p>評価：{{$review->rate}} {{ $review->review }} </p>
      @endforeach
  </div>
</div>

<div class="contents row">
  <div class="col-xs-12">
    <h2>レビューを投稿する</h2>
        <!-- ここにレビュー投稿フォーム -->
      @if (Auth::check())
        {{ Form::open(['url' => "/curryreview", 'method' => 'get', 'files' => true]) }}
          投稿者名:{{ Auth::user()->name }}
          {{Form::hidden('curry_id', "$curry->id")}}
          <div class="field">
            <label>評価(5段階)</label><br>
            <input type="text" name="rate" placeholder="評価">
          </div>
          テキスト(上記評価に連動？)
          <div class="field">
            <label>感想</label><br>
            <input type="text" name="review" placeholder="感想を入力してください">
          </div>
<!--           <div class="field">
            <label>写真</label><br>
              <div class="field">
                {{ Form::file('picture') }}
              </div>
          </div>
 -->          <div class="actions">
            <input type="submit" value="登録">
          </div>
        {{ Form::close() }}
      @else
        レビューするにはログインしてください
      @endif

  </div>
</div>

@endsection