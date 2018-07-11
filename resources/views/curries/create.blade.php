@extends('layout')

@section('content')
<div class="contents row">
        {{ Form::open(['url' => "/shops/$shop->id/curries", 'method' => 'post', 'files' => true]) }}
            <h3>
                    カレーを登録する
            </h3>

        <div class="field">
            <label>メニュー名</label><br>
            <input type="text" name="name" placeholder="メニュー名を入力してください">
        </div>

        <div class="field">
            <label>写真</label><br>
              <div class="field">
                {{ Form::file('picture') }}
              </div>
        </div>

        <div class="field">
            <label>値段</label><br>
            <input type="text" name="price" placeholder="値段を入力してください">
        </div>

        <div class="field">
            <label>カレーの種類</label><br>
            <input type="text" name="curry_type" placeholder="カレーの種類を入力してください">
        </div>

        <div class="field">
            <label>メイン具材の種類</label><br>
            <input type="text" name="main_type" placeholder="メイン具材の種類を入力してください">
        </div>

        <div class="field">
            <label>カロリー</label><br>
            <input type="text" name="kcal" placeholder="カロリーを入力してください">
        </div>

        <div class="field">
            <label>店舗名</label><br>
            <input type="text" name="store_name" placeholder="店舗名を入力してください">
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
            <label>ナン・ライス</label><br>
            <input type="text" name="nannrice" placeholder="ナン・ライスを入力してください">
        </div>

        <div class="actions">
            <input type="submit" value="登録">
        </div>
        {{ Form::close() }}
</div>
@endsection
