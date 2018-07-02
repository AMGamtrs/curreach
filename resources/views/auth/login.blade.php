@extends('layout')

@section('content')

      <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-warning">
                    <div class="panel-heading">ログイン</div>
                    <div class="panel-body">

    {{ Form::open(['class' => 'form-horizontal']) }}
        <div class="field form-group">
            <label class="col-md-4 control-label">メールアドレスまたはID</label>
            <div class="col-md-6">
              <input class="form-control" type="email" name="email" autofocus="autofocus">
            </div>
        </div>

        <div class="field form-group">
            <label class="col-md-4 control-label">パスワード</label>
            <div class="col-md-6">
              <input class="form-control" type="password" name="password" autocomplete="off">
            </div>
        </div>


        <div class="field form-group text-center">
            <label>Remember me</label>
            <input type="checkbox" value="1" name="記憶する">
        </div>


        <div class="actions form-group">
          <div class="col-md-6 col-md-offset-4 col-sm-offset-4">
          <button type="submit" class="btn btn-warning">
              <i class="fa fa-btn fa-user"></i> ログイン
          </button>
          </div>
        </div>
    {{ Form::close() }}

      </div>
</div>
          </div>
        </div>
      </div>


@endsection
