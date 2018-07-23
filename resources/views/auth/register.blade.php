@extends('layout')


@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-warning" style="padding:0;">
                <div class="panel-heading"><strong><span class="glyphicon glyphicon-user" aria-hidden="true"></span> 新規登録</strong></div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 col-sm-4 control-label">ユーザID<br/>(ニックネーム)</label>
                            {!! Form::open(array('files' => true)) !!}

                            <div class="col-md-6 col-sm-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('icon') ? ' has-error' : '' }}">

                            <!-- ICONアップロード -->
                            <label for="icon" class="col-md-4 col-sm-4 control-label">プロフィール画像</label>

                            <div class="col-md-6 col-sm-6">
                                <div class="field">
                                    {{ Form::file('icon') }}
                                </div>
                            </div>

                        </div>


                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 col-sm-4 control-label">メールアドレス</label>

                            <div class="col-md-6 col-sm-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                      <!-- 生年月日入力(余裕があれば実装したい) -->
                        <div class="form-group{{ $errors->has('calendar') ? ' has-error' : '' }}">
                          <label for="calendar" class="col-md-4 col-sm-4 control-label">生年月日</label>
                          <div class="col-md-6 col-sm-6">
                              <input id="calendar" type="date" class="form-control" name="calendar" max="9999-12-31" value="{{ old('calendar') }}" required>

                              @if ($errors->has('calendar'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('calendar') }}</strong>
                                  </span>
                              @endif
                          </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 col-sm-4 control-label">パスワード<br>(6文字以上)</label>

                            <div class="col-md-6 col-sm-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            <label for="password-confirm" class="col-md-4 col-sm-4 control-label">パスワード確認</label>

                            <div class="col-md-6 col-sm-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>

                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                                <button type="submit" class="btn btn-warning center-block">
                                    <i class="fa fa-btn fa-user"></i> 登録
                                </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
