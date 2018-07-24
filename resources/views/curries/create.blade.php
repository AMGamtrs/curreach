@extends('layout')

@section('content')
<div class="contents row" style="border-radius:5px; border:1px solid #ddd; margin-bottom:20px;">
        {{ Form::open(['url' => "/shops/$shop->id/curries", 'method' => 'post', 'files' => true, 'class' => 'form-horizontal']) }}
            <h3>
                    カレーを登録する
            </h3>

        <div class="field">
            <p><span class="col-1">メニュー名</span>
              <span class="col-2"><input type="text" name="curry_name" value="" required="required" ></span><br>
            </p>
        </div>

        <div class="field">
            <label>写真</label><br>
              <div class="field">
                {{ Form::file('picture') }}
              </div>
        </div>

        <div class="field">
            <p><span class="col-1">値段</span>
              <span class="col-2"><input type="text" name="price" value="" required="required" ></span><br>
            </p>
        </div>

        <div class="field">
            <p><span class="col-1">カレーの種類</span>
            <span class="col-2"><select name="curry_type">
              <option value="0">カレーの種類を選択してください</option>
              <option value="1">洋風カレー</option>
              <option value="2">スープカレー</option>
              <option value="3">インドカレー</option>
              <option value="4">ご当地カレー</option>
              <option value="5">その他</option>
            </select></span>
            </p>
        </div>

        <div class="field">
            <p><span class="col-1">メイン具材の種類</span>
            <span class="col-2"><select name="main_type">
              <option value="0">メイン具材を選択してください</option>
              <option value="1">チキン</option>
              <option value="2">ビーフ</option>
              <option value="3">ポーク</option>
              <option value="4">マトン</option>
              <option value="5">シーフード</option>
              <option value="6">野菜</option>
              <option value="7">その他</option>
            </select></span>
            </p>
        </div>

        <div class="field">
            <p><span class="col-1">カロリー</span>
              <span class="col-2"><input type="text" name="calorie" value=""></span><br>
            </p>
        </div>

        <div class="field">
            <p><span class="col-1">アレルギー食品</span>
              <span class="col-2"><input type="text" name="allergies" value=""></span><br>
            </p>
        </div>

        <div class="field">
            <p><span class="col-1">辛さ</span>
            <span class="col-2"><select name="hot_rate">
              <option value="0">辛さを選択してください</option>
              <option value="1">激甘</option>
              <option value="2">ちょい甘</option>
              <option value="3">普通</option>
              <option value="4">ちょい辛</option>
              <option value="5">激辛</option>
            </select></span>
            </p>
        </div>

        <div class="field">
            <p><span class="col-1">トッピング</span>
              <span class="col-2"><input type="text" name="topping" value=""></span><br>
            </p>
        </div>

        <div class="field">
            <p><span class="col-1">大盛り / ハーフ</span>
            <span class="col-2"><select name="amount" size="1">
              <option value="0">不明</option>
              <option value="1">可</option>
              <option value="2">不可</option>
            </select></span>
            </p>
        </div>

        <div class="field">
            <p><span class="col-1">ライス / ナン</span>
            <span class="col-2"><select name="naan_rice">
              <option value="0">ライス又はナンを選択してください</option>
              <option value="1">ライス</option>
              <option value="2">ナン</option>
              <option value="3">両方</option>
              <option value="4">その他</option>
            </select></span>
            </p>
        </div>

        <div class="actions">
            <input type="submit" value="登録">
        </div>
        {{ Form::close() }}
</div>
@endsection
