@extends('layout')

@section('content')
{{ $shop->shop_name }}
<div class="contents row">
  <div class="col-xs-6">
    @foreach($shop->photos()->get() as $photo)

      <img src="/images/shops/{{ $photo->image }}">
      <br>

    @endforeach
  </div>
  <div class="col-xs-6">
    aaaaaaaaaaaaaaa
  </div>




</div>
@endsection