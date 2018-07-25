@extends('layout')

@section('content')
<div class="container container-small" style="background-color: #fff; border-radius:5px; border:1px solid #ddd; margin-bottom:20px; padding-bottom:20px;">
      {{ Form::open(['url' => "/shops/$shop->id/curries", 'method' => 'post', 'files' => true, 'class' => 'form-horizontal']) }}
          <h3 class="text-center" style="margin-top:25px; margin-bottom:30px;"><span class="createpage-heading">カレーを登録</span></h3>

          <div class="field form-group">
              <label class="col-md-4 col-sm-4 control-label">メニュー名</label>
              <div class="col-md-6 col-sm-6">
                <input class="form-control" type="text" name="curry_name" value="" required="required" >
              </div>
          </div>

          <div class="form-group field">
              <label for="icon" class="col-md-4 col-sm-4 control-label">カレー写真</label>
              <div class="col-md-6 col-sm-6">
                  {{ Form::file('picture') }}
              </div>
          </div>

          <div class="field form-group">
              <label class="col-md-4 col-sm-4 control-label">値段</label>
              <div class="col-md-5 col-sm-5">
                <div class="input-group">
                  <input class="form-control" type="text" name="price" value="" required="required" >
                  <div class="input-group-addon">円</div>
                </div>
              </div>
          </div>

          <div class="field form-group">
              <label class="col-md-4 col-sm-4 control-label">カレーの種類</label>
              <div class="col-md-6 col-sm-6">
                <select class="form-control" name="curry_type" size="1" style="height:34px;">
                  <option value="0">カレーの種類を選んでください</option>
                  <option value="1">洋風カレー</option>
                  <option value="2">スープカレー</option>
                  <option value="3">インドカレー</option>
                  <option value="4">ご当地カレー</option>
                  <option value="5">その他</option>
                </select>
              </div>
          </div>

          <div class="field form-group">
              <label class="col-md-4 col-sm-4 control-label">メイン具材の種類</label>
              <div class="col-md-6 col-sm-6">
                <select class="form-control" name="main_type" size="1" style="height:34px;">
                  <option value="0">メイン具材を選択してください</option>
                  <option value="1">チキン</option>
                  <option value="2">ビーフ</option>
                  <option value="3">ポーク</option>
                  <option value="4">マトン</option>
                  <option value="5">シーフード</option>
                  <option value="6">野菜</option>
                  <option value="7">その他</option>
                </select>
              </div>
          </div>

          <div class="field form-group">
              <label class="col-md-4 col-sm-4 control-label">カロリー</label>
              <div class="col-md-6 col-sm-6">
                <input class="form-control" type="text" name="calorie" value="">
              </div>
          </div>

          <div class="field form-group">
              <label class="col-md-4 col-sm-4 control-label">アレルギー食品</label>
              <div class="col-md-6 col-sm-6">
                <input class="form-control" type="text" name="allergies" value="">
              </div>
          </div>

          <div class="field form-group">
              <label class="col-md-4 col-sm-4 control-label">辛さ</label>
              <div class="col-md-5 col-sm-5">
                <select class="form-control" name="hot_rate" size="1" style="height:34px;">
                  <option value="1">激甘</option>
                  <option value="2">ちょい甘</option>
                  <option value="3" selected>普通</option>
                  <option value="4">ちょい辛</option>
                  <option value="5">激辛</option>
                </select>
              </div>
          </div>

          <div class="field form-group">
              <label class="col-md-4 col-sm-4 control-label">トッピング</label>
              <div class="col-md-6 col-sm-6">
                <input class="form-control" type="text" name="topping" value="">
              </div>
          </div>

          <div class="field form-group">
              <label class="col-md-4 col-sm-4 control-label">大盛り / ハーフ</label>
              <div class="col-md-5 col-sm-5">
                <select class="form-control" name="amount" size="1" style="height:34px;">
                  <option value="0">不明</option>
                  <option value="1">可</option>
                  <option value="2">不可</option>
                </select>
              </div>
          </div>

          <div class="field form-group">
              <label class="col-md-4 col-sm-4 control-label">ライス / ナン</label>
              <div class="col-md-6 col-sm-6">
                <select class="form-control" name="naan_rice" size="1" style="height:34px;">
                  <option value="0">ライスかナンを選択してください</option>
                  <option value="1">ライス</option>
                  <option value="2">ナン</option>
                  <option value="3">両方</option>
                  <option value="4">その他</option>
                </select>
              </div>
          </div>

        <div class="actions">
            <input class="center-block btn btn-default" type="submit" value="登録">
        </div>
        {{ Form::close() }}
</div>
@endsection
