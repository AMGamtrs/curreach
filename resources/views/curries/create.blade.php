@extends('layout')

@section('content')
<div class="contents row">
        {{ Form::open(['url' => "/shops/$shop->id/curries", 'method' => 'post', 'files' => true, 'class' => 'form-horizontal']) }}
            <h3>
                    カレーを登録する
            </h3>

        <div class="field">
            <label>メニュー名</label><br>
            <input type="text" name="name" placeholder="メニュー名を入力してください" required>
        </div>

        <div class="field">
            <label>写真</label><br>
              <div class="field">
                {{ Form::file('picture') }}
              </div>
        </div>

        <div class="field">
            <label>値段</label><br>
            <input type="text" name="price" placeholder="値段を入力してください" required>
        </div>

        <div class="field">
            <label>カレーの種類</label><br>
            <select name="curry_type">
              <option value="1">洋風カレー</option>
              <option value="2">スープカレー</option>
              <option value="3">インドカレー</option>
              <option value="4">ご当地カレー</option>
              <option value="5">その他</option>
            </select>
        </div>

        <div class="field">
            <label>メイン具材の種類</label><br>
            <select name="main_type">
              <option value="1">チキン</option>
              <option value="2">ビーフ</option>
              <option value="3">ポーク</option>
              <option value="4">マトン</option>
              <option value="5">シーフード</option>
              <option value="6">野菜</option>
              <option value="7">その他</option>
            </select>
        </div>

        <div class="field">
            <label>カロリー</label><br>
            <input type="text" name="kcal" placeholder="カロリーを入力してください">
        </div>

        <div class="field">
            <label>アレルギー食品</label><br>
            <input type="text" name="allergy" placeholder="アレルギー食品を入力してください">
        </div>

        <div class="field">
            <label>辛さ</label><br>
            <input type="text" name="hotflavor" placeholder="辛さを入力してください">
        </div>

        <div class="field">
            <label>トッピング</label><br>
            <input type="text" name=" topping" placeholder="トッピングを入力してください">
        </div>

        <div class="field">
            <label>大盛り・ハーフ</label><br>
            <input type="text" name="size" placeholder="大盛り・ハーフを入力してください">
        </div>

        <div class="field">
            <label>ライス・ナン</label><br>
            <select name="naanrice">
              <option value="1">ライス</option>
              <option value="2">ナン</option>
              <option value="3">その他</option>
            </select>
        </div>

        <div class="actions">
            <input type="submit" value="登録">
        </div>
        {{ Form::close() }}
</div>
@endsection
