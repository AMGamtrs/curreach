@extends('layout')

@section('content')
<div class="container-fluid">
  <div class="row">

    <div class="col-md-2 col-md-offset-1 sidebar2 sideover">
      @include('sidebar')
    </div>

    <div class="col-md-8">

    <!-- カレー検索モード -->
    @if($mode == 0)
    <div class="page-header">
      <h1><small>「{{$word}}」の検索結果</small></h1>
    </div>
    <div class="search_sort">
      <!-- 検索結果ソート条件 -->
      <div>並び替え</div>
      {{ Form::open(['url' => "/csearch", 'method' => 'get']) }}
        {{Form::radio('sort', 'value_desc', true,['class' => 'sort_button']) }}価格が安い順
        {{Form::radio('sort', 'value_asc', false,['class' => 'sort_button']) }}価格が高い順<br>
        {{Form::radio('sort', 'abc_asc', false,['class' => 'sort_button']) }}あいうえお順(昇順)
        {{Form::radio('sort', 'abc_desc', false,['class' => 'sort_button']) }}あいうえお順(降順)
        {{Form::hidden('mode', $mode)}}
        {{Form::hidden('word', $word)}}
        {{Form::submit()}}
      {{ Form::close() }}
    </div><!-- search_sort -->
    @foreach ($curries as $curry)
    <div class="col-sm-6 col-md-4">
      <div class="thumbnail">
        @if($curry->photos()->exists())
          <img src="http://drive.google.com/uc?export=view&id={{$curry->photos()->first()->image}}" alt="{{$curry->curry_name}}"/>
        @else
          <img src="http://drive.google.com/uc?export=view&id=1FWi7Bz-kfcYlSyibXfSF0-o92NJG3-li"/>
        @endif
        <div class="caption overflow-hidden">
          <h4>{{$curry->curry_name}}</h4>
          <p>{{$curry->shop->shop_name}}</p>
          <p>{{$curry->price}}円</p>
          <p><a href="/shops/{{$curry->shop_id}}/curries/{{$curry->id}}" class="btn btn-warning" role="button">詳しくみる</a></p>
        </div>
      </div>
    </div>
    @endforeach
    <!-- カレー登録モード -->
    @elseif($mode == 1)
    <div class="page-header">
      <div class="alert alert-danger" role="alert">
        <strong><span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span> カレーを登録する店舗を選択してください</strong>
      </div>
    </div>
      <div class="search_sort">
      <!-- 検索結果ソート条件 -->
      <div>並び替え</div>
      {{ Form::open(['url' => "/ssearch", 'method' => 'get']) }}
        {{Form::radio('sort', 'abc_asc', false,['class' => 'sort_button']) }}あいうえお順(昇順)
        {{Form::radio('sort', 'abc_desc', false,['class' => 'sort_button']) }}あいうえお順(降順)
        {{Form::hidden('mode', $mode)}}
        {{Form::hidden('word', $word)}}
        {{Form::submit()}}
      {{ Form::close() }}
      </div><!-- search_sort -->
    @foreach ($shops as $shop)
    <div class="col-sm-6 col-md-4">
      <div class="thumbnail">
        @if($shop->photos()->exists())
          <img src="http://drive.google.com/uc?export=view&id={{$shop->photos()->first()->image}}" alt="{{$shop->shop_name}}"/>
        @else
          <img src="http://drive.google.com/uc?export=view&id=1FWi7Bz-kfcYlSyibXfSF0-o92NJG3-li"/>
        @endif
        <div class="caption overflow-hidden">
          <h4>{{$shop->shop_name}}</h4>
          <p class="rows3">{{$shop->address}}</p>
          <p><a href="/shops/{{$shop->id}}" class="btn btn-warning" role="button">詳しくみる</a></p>
        </div>
      </div>
    </div>
    @endforeach
    @elseif($mode == 2)
    <!-- 店舗検索モード -->
      <div class="page-header">
        <h1><small>「{{$word}}」の検索結果</small></h1>
      </div>
      <div class="search_sort">
        <!-- 検索結果ソート条件 -->
        <div>並び替え</div>
        {{ Form::open(['url' => "/ssearch", 'method' => 'get']) }}
          {{Form::radio('sort', 'abc_asc', false,['class' => 'sort_button']) }}あいうえお順(昇順)
          {{Form::radio('sort', 'abc_desc', false,['class' => 'sort_button']) }}あいうえお順(降順)
          {{Form::hidden('mode', $mode)}}
          {{Form::hidden('word', $word)}}
          {{Form::submit()}}
        {{ Form::close() }}
      </div><!-- search_sort -->
      @foreach ($shops as $shop)
      <div class="col-sm-6 col-md-4">
        <div class="thumbnail">
          @if($shop->photos()->exists())
            <img src="http://drive.google.com/uc?export=view&id={{$curry->photos()->first()->image}}" alt="{{$curry->curry_name}}"/>
          @else
            <img src="http://drive.google.com/uc?export=view&id=1FWi7Bz-kfcYlSyibXfSF0-o92NJG3-li"/>
          @endif
          <div class="caption overflow-hidden">
            <h4>{{$shop->curry_name}}</h4>
            <p>{{$shop->address}}</p>
            <p><a href="/shops/{{$shop->id}}" class="btn btn-warning" role="button">詳しくみる</a></p>
          </div>
        </div>
      </div>
      @endforeach
    @endif
  </div>
  </div>

</div>

<!-- ページネーション -->
<div class="text-center">
@if($mode == 0)
{{ $curries->links() }}
@elseif($mode == 1)
{{ $shops->links() }}
@endif
</div>
@endsection
