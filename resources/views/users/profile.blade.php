@extends('layout')

@section('content')

<div class="container-fulid">
  <div class="row">

    <div class="col-md-2 text-center col-md-offset-1" style="background-color: #FFFFF0; border-radius:10px;  margin-bottom:20px;">
      @include('users.profileleft')
    </div>

    <div class="col-md-7 col-md-offset-1" style="background-color: #FFFFF0; border-radius:10px; margin-bottom:20px; padding:0 50px 30px;">

        <div class="page-header"><h2>プロフィール編集</h2></div>
        <ul class="list-unstyled">
          <li>
            {{ Form::open(['url' => "/users/reedit", 'method' => 'post', 'files' => true, 'class' => 'form-horizontal']) }}
            <h3 style="margin-top:25px; margin-bottom:30px;"><span class="showpage-heading showpage-icon">プロフィール画像</span></h3>
            <div class="form-group clearfix">
              <!-- ICONアップロード -->
              <div class="col-md-offset-1 col-md-5 col-sm-5">
                <div class="field">
                    {{ Form::file('icon') }}
                </div>
              </div>
              <div class="actions col-md-2 col-sm-2">
                <input class="btn btn-default" type="submit" value="修正">
              </div>
            </div>
            {{ Form::close() }}
          </li>
          <li>
            {{ Form::open(['url' => "/users/reedit", 'method' => 'post', 'files' => true, 'class' => 'form-horizontal']) }}
            <h3 style="margin-top:25px; margin-bottom:30px;"><span class="showpage-heading showpage-mail">メールアドレス</span></h3>
            <div class="form-group clearfix">
              <div class="col-md-offset-1 col-md-5 col-sm-5">
                <input class="form-control" type="text" name="email" value="{{Auth::user()->email}}">
              </div>
              <div class="actions col-md-2 col-sm-2">
                <input class="btn btn-default" type="submit" value="修正">
              </div>
            </div>
            {{ Form::close() }}
          </li>
          <li>
            {{ Form::open(['url' => "/users/reedit", 'method' => 'post', 'files' => true, 'class' => 'form-horizontal']) }}
            <h3 style="margin-top:25px; margin-bottom:30px;"><span class="showpage-heading showpage-birth">生年月日</span></h3>
            <div class="form-group clearfix">
              <div class="col-md-offset-1 col-md-5 col-sm-5">
                <input id="calendar" type="date" class="form-control" name="calendar" max="9999-12-31" value="{{Auth::user()->birthday}}">
                @if ($errors->has('calendar'))
                  <span class="help-block">
                      <strong>{{ $errors->first('calendar') }}</strong>
                  </span>
                @endif
              </div>
              <div class="actions col-md-2 col-sm-2">
                <input class="btn btn-default" type="submit" value="修正">
              </div>
            </div>
            {{ Form::close() }}
          </li>
        </ul>
<!--
        {{ Form::open(['url' => "/users/reedit", 'method' => 'post', 'files' => true, 'class' => 'form-horizontal']) }}
        <h4>パスワード変更(6文字以上)</h4>
          <div class="form-group clearfix">
            <div class="col-md-offset-1 col-md-3">
              <input type="password" data-minlength="6" class="form-control" id="inputPassword" placeholder="パスワードを入力" data-required-error="パスワードの入力は必須です" required>
            </div>
            <div class="form-group col-md-3">
              <input type="password" class="form-control" id="inputPasswordConfirm" data-match="#inputPassword" data-required-error="確認用パスワードの入力は必須です" data-match-error="パスワードが一致しません" placeholder="確認用パスワードを入力" required>
              <div class="help-block with-errors"></div>
            </div>
            <div class="actions col-md-3 col-sm-3">
                <input class="btn btn-default" type="submit" value="修正">
            </div>
          </div>
        {{ Form::close() }} -->

    </div>

  </div>

</div>

@endsection
