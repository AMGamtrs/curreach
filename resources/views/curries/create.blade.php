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

        <div class="actions">
            <input type="submit" value="登録">
        </div>
        {{ Form::close() }}
</div>
@endsection
