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
        <li><a href="/detailedsearch/">詳しい検索</a></li>
      </ul>
    </div>
    </div>
    <div class="col-md-8">
      <div class="panel panel-default">
        <div>
          <h2 class="lead">人気の店舗</h2>
          <ul class="slick-box3">
            <li><img src="images/shops/PAK65_torinosutennai20130825_TP_V4.jpg" alt=""/></li>
            <li><img src="images/shops/PAK65_torinosutennai20130825_TP_V4.jpg" alt=""/></li>
            <li><img src="images/shops/PAK65_torinosutennai20130825_TP_V4.jpg" alt=""/></li>
            <li><img src="images/shops/PAK65_torinosutennai20130825_TP_V4.jpg" alt=""/></li>
            <li><img src="images/shops/PAK65_torinosutennai20130825_TP_V4.jpg" alt=""/></li>
            <li><img src="images/shops/PAK65_torinosutennai20130825_TP_V4.jpg" alt=""/></li>
          </ul>
        </div>
        <hr>
        <div>
          <h2 class="lead">人気のカレー</h2>
          <ul class="slick-box3">
            <li><img src="images/curries/SAWA_karesarada_TP_V4.jpg" alt=""/></li>
            <li><img src="images/curries/SAWA_karesarada_TP_V4.jpg" alt=""/></li>
            <li><img src="images/curries/SAWA_karesarada_TP_V4.jpg" alt=""/></li>
            <li><img src="images/curries/SAWA_karesarada_TP_V4.jpg" alt=""/></li>
            <li><img src="images/curries/SAWA_karesarada_TP_V4.jpg" alt=""/></li>
            <li><img src="images/curries/SAWA_karesarada_TP_V4.jpg" alt=""/></li>
          </ul>
        </div>
      </div>

    </div>
  </div>
</div>


@endsection
