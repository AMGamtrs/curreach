@extends('layout')

@section('content')
<div class="contents row">
    <h2>新規登録</h2>

    {{ Form::open() }}
        <div class="field">
            <label>ユーザID(ニックネーム)<label><br>
            <input type='text' name="name" autofocus="autofocus">
        </div>

        <div class="field">
            <label>メールアドレス</label><br>
            <input type="email" name="email">
        </div>

<form>
  <div>
    <label for="password_1">パスワード:</label>
  </div>
  <div>
    <input type="password" id="password_1" required />
  </div>
  <div>
    <label for="passwordConfirm_1">メーパスワード確認用:</label>
  </div>
  <div>
    <input type="password" id="passwordConfirm_2" required oninput="CheckPassword_1(this)" />
  </div>
  <p>
    <input type="submit" id="submit">
  </p>
</form>

<script language="JavaScript" type="text/javascript">
<!--
  function CheckPassword_1(input){
    var password = password_1.value; //パスワードフォームの値を取得
    var passwordConfirm = input.value; //パスワード確認用フォームの値を取得(引数input)

    // パスワードの一致確認
    if(password != passwordConfirm){
      input.setCustomValidity('パスワードが一致しません'); // エラーメッセージのセット
    }else{
      input.setCustomValidity(''); // エラーメッセージのクリア
    }
  }
// -->
</script>

@endsection
