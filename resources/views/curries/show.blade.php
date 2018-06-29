@extends('layout')

@section('content')
{{ $curry->curry_name }}
<div class="contents row">
  <div class="col-xs-6">
    @foreach($curry->photos()->get() as $photo)

      <img src="/images/curries/{{ $photo->image }}">
      <br>

    @endforeach
  </div>
  <div class="col-xs-6">
    aaaaaaaaaaaaaaa
  </div>




</div>
@endsection