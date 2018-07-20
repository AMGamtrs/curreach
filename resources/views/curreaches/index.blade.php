@extends('layout')



@section('content')
<!--　▼ ジャンボトロン　 -->
    <div class="jumbotron topimg">
      <div class="text-center container">
        <h1>Welcome to curreach</h1>
        <p>curreachはカレー好きの皆様に寄り添う専門情報サイトです</p>
        <a class="btn btn-warning btn-lg" href="/about" role="button">About us »</a>
      </div>
    </div>
<!--　▲ ジャンボトロン　 -->

<div class="container-fluid">
  <div class="row">

    <div class="col-md-2 col-md-offset-1 sideover" style="background-color:#F7E7B0; font-weight:bold;">
      <h3 class="text-center" style="font-weight:100; font-family: cursive;">カレー検索</h3>
      <h4 class="text-center" style="font-weight:100; font-family: cursive;">* curry search *</h4>

      @include('sidebar')
    </div>

<!--
<div class="col-md-2 col-md-offset-1 sidebar">
      <div class="panel panel-default">
      <p>Sidebar</p>
      <ul class="sideMenu nav nav-sidebar">
        <a href="/mapsearch/"><li>●地図から探す</li></a>
        <li>カレーの種類から探す</li>
        <li>メインの食材から探す</li>
        <li>カレー/ナンから探す</li>
        <a href="/detailedsearch/"><li>カレーを検索</li></a>
      </ul>
    </div>
    </div>
-->

    <div class="col-md-8">
      <div class="panel panel-default">
        <div>
          <span class="glyphicon glyphicon-cutlery glyphicon-h" aria-hidden="true"></span>
          <h2 class="lead top-h2">人気の店舗</h2>
          <ul class="slick-box3">
            @foreach ($shops as $shop)
              <li>
                <div class="textonphoto">
                  <a href="/shops/{{$shop->id}}">
                    @if($shop->photos()->exists())
                      <img src="http://drive.google.com/uc?export=view&id={{$shop->photos()->first()->image}}" alt="{{$shop->shop_name}}"/>
                    @else
                      <img src="http://drive.google.com/uc?export=view&id=1FWi7Bz-kfcYlSyibXfSF0-o92NJG3-li"/>
                    @endif
                    <p>
                      {{$shop->shop_name}}<br/>
                      <span class="star-rating">
                        <span class="star-rating-front" style="width: {{(round($shop->reviews()->avg('rate')))*2}}0%">★★★★★</span>
                        <span class="star-rating-back">★★★★★</span>
                      </span>
                    </p>
                  </a>
                </div>
              </li>
            @endforeach
          </ul>
        </div>
        <hr>
        <div>
          <span class="glyphicon glyphicon-cutlery glyphicon-h" aria-hidden="true"></span>
          <h2 class="lead top-h2">人気のカレー</h2>
          <ul class="slick-box3">
            @foreach ($curries as $curry)
              <li>
                <div class="textonphoto">
                  <a href="/shops/{{$curry->shop_id}}/curries/{{$curry->id}}">
                    @if($curry->photos()->exists())
                      <img src="http://drive.google.com/uc?export=view&id={{$curry->photos()->first()->image}}" alt="{{$curry->curry_name}}"/>
                    @else
                      <img src="http://drive.google.com/uc?export=view&id=1FWi7Bz-kfcYlSyibXfSF0-o92NJG3-li"/>
                    @endif
                    <p>
                      {{$curry->curry_name}}<br/>
                      <span class="star-rating">
                        <span class="star-rating-front" style="width: {{(round($curry->reviews()->avg('rate')))*2}}0%">★★★★★</span>
                        <span class="star-rating-back">★★★★★</span>
                      </span>
                    </p>
                  </a>
                </div>
              </li>
            @endforeach
          </ul>
        </div>
      </div>

    </div>
  </div>
</div>


@endsection
