@extends('layout')

@section('content')

<div class="container-fulid">
  <div class="row">

    <div class="col-md-2 text-center col-md-offset-1" style="background-color: #FFFFF0; border-radius:5px;  margin-bottom:20px;">
      @include('users.profileleft')
    </div>

    <div class="col-md-7 col-md-offset-1" style="background-color: #FFFFF0; border-radius:5px; margin-bottom:20px;">
      <div class="col-md-offset-1">

        <div class="page-header"><h2>プロフィール編集</h2></div>
        <h4>プロフィール画像</h4>

        <h4>メールアドレス</h4>

        <h4>生年月日</h4>

        <h4>パスワード</h4>

        <h4>パスワード再確認</h4>
      </div>
    </div>

  </div>

</div>

@endsection
