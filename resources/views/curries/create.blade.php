@extends('layout')

@section('content')
<div class="contents row">
        {{ Form::open(['url' => '/curries', 'method' => 'post']) }}
            <h3>
                    カレーを登録する
            </h3>

        <div class="field">
            <label>メニュー名</label><br>
            <input type="text" name="name" placeholder="メニュー名を入力してください">
        </div>
        <div class="field">
            <label>写真</label><br>
            <input type="text" name="picture" placeholder="写真を入力してください">
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