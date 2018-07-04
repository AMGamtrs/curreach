<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>curreach</title>
        <link rel="stylesheet" href="/assets/stylesheets/bootstrap.css">
        <link rel="stylesheet" href="/assets/stylesheets/bootstrap-theme.css">
        <link rel="stylesheet" href="/css/style.css">
        <link rel="stylesheet" href="/css/sticky-footer.css">
        <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
        <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
  </head>

  <body>
<!--    <header class="header">
      <div class="header__bar row">
        <h1 class="grid-6"><a href="/">curreach</a></h1>
        @if (Auth::check())
          <div class="user_nav grid-6">
            <span>
              {{ Auth::user()->name }}
              <ul class="user__info">
                <li>
                  <a href="/users/{{ Auth::user()->id }}">マイページ</a>
                  <a href="/logout">ログアウト</a>
                </li>
              </ul>
            </span>
            <a class="post" href="/tweets/create">投稿する</a>
          </div>
        @else
          <div class="grid-6">
            <a href="/login" class="post">ログイン</a>
            <a href="/register" class="post">新規登録</a>
          </div>
        @endif
      </div>
    </header>-->

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

        @if (Auth::check())
            <ul class="nav navbar-nav navbar-right">
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">登録する <span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="#">カレー情報</a></li>
                  <li><a href="/shops/create">店舗情報</a></li>
                </ul>
              </li>
              <li><a href="/users/{{ Auth::user()->id }}">マイページ</a></li>
              <li><a href="/logout">ログアウト</a></li>
            <form class="navbar-form navbar-right" role="search">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Search">
              </div>
              <button type="submit" class="btn btn-default">検索</button>
            </form>
            </ul>

        @else
            <ul class="nav navbar-nav navbar-right">
              <li><a href="/register">新規登録</a></li>
              <li><a href="/login">ログイン</a></li>
            <form class="navbar-form navbar-right" role="search">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Search">
              </div>
              <button type="submit" class="btn btn-default">検索</button>
            </form>
            </ul>
        @endif

          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav>

      @yield('content')

<footer class="footer">
  <div class="container text-center">
    <p class="text-muted">Copyright © 2018 curreach製作委員会 All Rights Reserved.</p>
  </div>
</footer>

      <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
      <script src="/assets/javascripts/bootstrap.js"></script>
      <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
      <script type="text/javascript">
      $(function() {
  $('.slick-box3').slick({
    dots: true, // スライダー下部に表示される、ドット状のページネーションです
    infinite: true, // 無限ループ
    speed: 300, // 切り替わりのスピード
    slidesToShow: 4, //通常 1024px以上の領域では4画像表示
    slidesToScroll: 4,
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
