@extends('layout')



@section('content')
<!--　▼ ジャンボトロン　 -->
    <div class="jumbotron">
      <div class="text-center container">
        <h1 class="text-white">Welcom to curreach</h1>
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
<!--          <div class="card-deck">
  <div class="card">
    <img class="card-img-top img-responsive" src="images/shops/PAK65_torinosutennai20130825_TP_V4.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src=".../100px200/" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src=".../100px200/" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
</div>-->
        </div>
        <hr>
        <div><h2 class="lead">人気のカレー</h2></div>
      </div>

    </div>
  </div>
</div>

@endsection
