<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>curreach</title>
        <link rel="stylesheet" href="/assets/stylesheets/bootstrap.css">
        <link rel="stylesheet" href="/assets/stylesheets/bootstrap-theme.css">
        <link rel="stylesheet" href="/css/sticky-footer.css">
        <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
        <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
        <link rel="stylesheet" href="/css/style.css">
        <link rel="stylesheet" href="/css/show.css">
  </head>

  <body>
    <div class="wrap">
      <nav class="navbar navbar-default navbar-curry">
        <div class="container-fluid">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/"><img class="logo" src="/images/logo.png" alt="カレーリーチ"></a>
          </div>

            <ul class="nav navbar-nav navbar-right">
              @if (Auth::check())
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">登録する <span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                  <li>
                    <form name="curryregister" action='/ssearch'>
                      <a href="javascript:curryregister.submit()">カレー情報</a>
                      <input type="hidden" name="register" value="1">
                    </form>
                  </li>
                  <li><a href="/shops/create">店舗情報</a></li>
                </ul>
              </li>
              <li><a href="/users/{{ Auth::user()->id }}">マイページ</a></li>
              <li><a href="/logout">ログアウト</a></li>
              @else
              <li><a href="/register">新規登録</a></li>
              <li><a href="/login">ログイン</a></li>
              @endif
            <form class="navbar-form navbar-right" role="search" action='/csearch'>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Search" name="keyword">
              </div>
              <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search" aria-hidden="true" style="font-size:14px;"></span></button>
            </form>
            </ul>
          </div><!-- /.container-fluid -->
        </nav>

      @yield('content')

      <footer class="footer">
        <div class="container text-center">
          <p class="text-muted">Copyright © 2018 curreach製作委員会 All Rights Reserved.</p>
        </div>
      </footer>
    </div>

      <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
      <script src="/assets/javascripts/bootstrap.js"></script>
      <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
      <script type="text/javascript">
      $(function() {

    $('.single-item').slick({
      accessibility: true,
      autoplay: true,
      autoplaySpeed: 1500,
      infinite: true,
      dots: true,
      fade: true,
      arrows: false,
    });

  $('.slick-box3').slick({
    dots: true, // スライダー下部に表示される、ドット状のページネーションです
    infinite: true, // 無限ループ
    speed: 300, // 切り替わりのスピード
    slidesToShow: 4, //通常 1024px以上の領域では4画像表示
    slidesToScroll: 4,
    arrows: false,
    responsive: [{
      breakpoint: 1300,settings: { //601px～1024pxでは3画像表示
        slidesToShow: 3,
        slidesToScroll: 3,
      }
    },
    {
      breakpoint: 600,settings: { //481px～600pxでは2画像表示
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,settings: {//480px以下では1画像表示
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }]
  });
});
      </script>

  </body>
</html>
