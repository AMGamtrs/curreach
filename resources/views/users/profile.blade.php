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

        {{ Form::open(['url' => "/users/reedit", 'method' => 'post', 'files' => true, 'class' => 'form-horizontal']) }}
        <h4>プロフィール画像</h4>
        <div class="form-group clearfix">
            <!-- ICONアップロード -->
            <div class="col-md-offset-1 col-md-6 col-sm-6">
                <div class="field">
                    {{ Form::file('icon') }}
                </div>
            </div>
            <div class="actions col-md-2 col-sm-2">
                <input class="btn btn-default" type="submit" value="修正" data-toggle=”modal” data-target=”#myModal“>
            </div>
        </div>
        {{ Form::close() }}

        {{ Form::open(['url' => "/users/reedit", 'method' => 'post', 'files' => true, 'class' => 'form-horizontal']) }}
        <h4>メールアドレス</h4>
        <div class="form-group clearfix">
            <div class="col-md-offset-1 col-md-6 col-sm-6">
              <input class="form-control" type="text" name="email" value="{{Auth::user()->email}}">
            </div>
            <div class="actions col-md-2 col-sm-2">
                <input class="btn btn-default" type="submit" value="修正" data-toggle=”modal” data-target=”#myModal“>
            </div>
        </div>
        {{ Form::close() }}

        {{ Form::open(['url' => "/users/reedit", 'method' => 'post', 'files' => true, 'class' => 'form-horizontal']) }}
        <h4>生年月日</h4>
        <div class="form-group clearfix">
          <div class="col-md-offset-1 col-md-6 col-sm-6">
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

        {{ Form::open(['url' => "/users/reedit", 'method' => 'post', 'files' => true, 'class' => 'form-horizontal']) }}
        <h4>パスワード</h4>
        <div class="field form-group clearfix">
            <div class="col-md-offset-1 col-md-6 col-sm-6">
              <input class="form-control" type="password" name="password" autocomplete="off">
            </div>
        </div>
        {{ Form::close() }}

        <h4>パスワード変更</h4>
        <div class="row">
            <div class="form-group col-md-offset-1 col-sm-3">
              <input type="password" data-minlength="6" class="form-control" id="inputPassword" placeholder="パスワードを入力" data-required-error="パスワードの入力は必須です" required>
              <div class="help-block">6文字以上で設定してください。</div>
            </div>
            <div class="form-group col-sm-3">
              <input type="password" class="form-control" id="inputPasswordConfirm" data-match="#inputPassword" data-required-error="確認用パスワードの入力は必須です" data-match-error="パスワードが一致しません" placeholder="確認用パスワードを入力" required>
              <div class="help-block with-errors"></div>
            </div>
          </div>
      </div>
    </div>

  </div>

</div>

<!-- モーダル・ダイアログ -->
<div class="modal fade" id="myModal" tabindex="-1">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"><span>×</span></button>
				<h4 class="modal-title">タイトル</h4>
			</div>
			<div class="modal-body">
				本文
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">閉じる</button>
				<button type="button" class="btn btn-primary">ボタン</button>
			</div>
		</div>
	</div>
</div>

@endsection
