@extends('layout')

@section('content')
<div class="contents row">
{{ Form::open(['url' => "/shops", 'method' => 'post', 'files' => true]) }}
<h3>店舗を登録する</h3>

<div class="field">
  <p>店舗名(必須)：
    <input type="text" name="name" value="" required="required" />
    <br>
  </p>
</div>

<div class="field">
外観写真：{{ Form::file('picture') }}
</div>

<div class="field">
<p><nobr>他の任意の項目：
  <input type="text" name="item"><nobr></p>
</div>

<div class="actions">
    <input type="submit" value="登録">
</div>
{{ Form::close() }}

</div>
@endsection
