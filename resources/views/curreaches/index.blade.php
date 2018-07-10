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



<div class="col-md-2 col-md-offset-1 sidebar sideover">
        <div class="panel panel-default">
      <h4>Sidebar</h4>
<ul class="sidenav">
<li><a href="/mapsearch/">地図から探す</a></li>
<li><a>カレー種類から探す</a>
<ul>
  <li>
    <form name="oufu" action='/search'>
      <input type="hidden" name="curry_type" value="1">
      <a href="javascript:oufu.submit()">洋風カレー</a>
    </form>
  </li>
  <li>
    <form name="soup" action='/search'>
      <input type="hidden" name="curry_type" value="2">
      <a href="javascript:soup.submit()">スープカレー</a>
    </form>
  </li>
  <li>
    <form name="ind" action='/search'>
      <input type="hidden" name="curry_type" value="3">
      <a href="javascript:ind.submit()">インドカレー</a>
    </form>
  </li>
  <li>
    <form name="gotochi" action='/search'>
      <input type="hidden" name="curry_type" value="4">
      <a href="javascript:gotochi.submit()">ご当地カレー</a>
    </form>
  </li>
  <li>
    <form name="othercurry" action='/search'>
      <input type="hidden" name="curry_type" value="5">
      <a href="javascript:othercurry.submit()">その他</a>
    </form>
  </li>
</ul>
</li>
<li><a>メイン食材から探す</a>
<ul>
  <li>
    <form name="chicken" action='/search'>
      <input type="hidden" name="main_type" value="1">
      <a href="javascript:chicken.submit()">チキン</a>
    </form>
  </li>
  <li>
    <form name="beef" action='/search'>
      <input type="hidden" name="main_type" value="2">
      <a href="javascript:beef.submit()">ビーフ</a>
    </form>
  </li>
  <li>
    <form name="pork" action='/search'>
      <input type="hidden" name="main_type" value="3">
      <a href="javascript:pork.submit()">ポーク</a>
    </form>
  </li>
  <li>
    <form name="mutton" action='/search'>
      <input type="hidden" name="main_type" value="4">
      <a href="javascript:mutton.submit()">マトン</a>
    </form>
  </li>
  <li>
    <form name="seafood" action='/search'>
      <input type="hidden" name="main_type" value="5">
      <a href="javascript:seafood.submit()">シーフード</a>
    </form>
  </li>
  <li>
    <form name="vegetables" action='/search'>
      <input type="hidden" name="main_type" value="6">
      <a href="javascript:vegetables.submit()">野菜</a>
    </form>
  </li>
  <li>
    <form name="othermain" action='/search'>
      <input type="hidden" name="main_type" value="7">
      <a href="javascript:othermain.submit()">その他</a>
    </form>
  </li>
</ul>
</li>
<li><a>カレー/ナンから探す</a>
<ul>
  <li>
    <form name="rice" action='/search'>
      <input type="hidden" name="ricenaan_type" value="1">
      <a href="javascript:rice.submit()">ライス</a>
    </form>
  </li>
  <li>
    <form name="naan" action='/search'>
      <input type="hidden" name="ricenaan_type" value="2">
      <a href="javascript:naan.submit()">ナン</a>
    </form>
  </li>
  <li>
    <form name="othersub" action='/search'>
      <input type="hidden" name="ricenaan_type" value="3">
      <a href="javascript:othersub.submit()">その他</a>
    </form>
  </li>
</ul>
</li>
</ul>
</div>
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

 <div class="col-md-2 col-md-offset-1 sidebar">
      <div class="panel panel-default">
      <p>Sidebar</p>
      <ul class="sideMenu nav nav-sidebar">
        <li><a href="/mapsearch/">地図から探す</a></li>
        <li><a href="/detailedsearch/">カレーを検索</a></li>

      </ul>
    </div>
    </div> -->




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
