@extends('layout')

@section('content')

      <div class="container">
        <div class="row">
          <div class="text-center">

<div class="contents row">
    <h2>ログイン</h2>

    {{ Form::open() }}
        <div class="field">
            <label>メールアドレスまたはID</label><br>
            <input type="email" name="email" autofocus="autofocus">
        </div>

        <div class="field">
            <label>パスワード</label><br>
            <input type="password" name="password" autocomplete="off">
        </div>


        <div class="field">
            <label>Remember me</label><br>
            <input type="checkbox" value="1" name="記憶する">
        </div>


        <div class="actions">
            <input type="submit" value="ログイン">
        </div>
    {{ Form::close() }}
</div>

          </div>
        </div>
      </div>


@endsection
