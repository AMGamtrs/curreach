@extends('layout')



@section('content')
<!--　▼ ジャンボトロン　 -->
    <div class="jumbotron topimg">
      <div class="text-center container">
        <h1>Welcom to curreach</h1>
        <p>curreachはカレー好きの皆様に寄り添う専門情報サイトです</p>
        <a class="btn btn-warning btn-lg" href="#" role="button">Learn more »</a>
      </div>
    </div>
<!--　▲ ジャンボトロン　 -->

<div class="container-fluid">
  <div class="row">

    <div class="col-md-2 col-md-offset-1 sidebar">
      <div class="panel panel-default">
      <p>Sidebar</p>
      <ul class="sideMenu nav nav-sidebar">
        <li><a href="/mapsearch/">地図から探す</a></li>
        <li><a href="/detailedsearch/">カレーを検索</a></li>
      </ul>
    </div>
    </div>

    <div class="col-md-8">
      <div class="panel panel-default">
        <div>
          <h2 class="lead">人気の店舗</h2>
          <ul class="slick-box3">
            @foreach ($shops as $shop)
              <li><a href="/shops/{{$shop->id}}">
                @if($shop->photos()->exists())
                  <img src="/images/shops/{{$shop->photos()->first()->image}}" alt="{{$shop->shop_name}}"/>
                @else
                  <img src="/images/noimage.png"/>
                @endif
              </a></li>
            @endforeach
          </ul>
        </div>
        <hr>
        <div>
          <h2 class="lead">人気のカレー</h2>
          <ul class="slick-box3">
            @foreach ($curries as $curry)
              <li><a href="/shops/{{$curry->shop_id}}/curries/{{$curry->id}}">
                @if($curry->photos()->exists())
                  <img src="/images/curries/{{$curry->photos()->first()->image}}" alt="{{$curry->curry_name}}"/>
                @else
                  <img src="/images/noimage.png"/>
                @endif
              </a></li>
            @endforeach
          </ul>
        </div>
      </div>

    </div>
  </div>
</div>


@endsection
