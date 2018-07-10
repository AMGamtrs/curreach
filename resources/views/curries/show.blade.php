@extends('layout')


@section('content')

{{ $curry->curry_name }}

<div class="contents row">
  <div class="col-xs-6">
    <div class="container">
      <div class="showtop_img single-item">
        @foreach($curry->photos()->get() as $photo)
          <h3><img src="/images/curries/{{ $photo->image }}"></h3>
        @endforeach
      </div>
    </div>
  </div>
  <div class="col-xs-6">
    aaaaaaaaaaaaaaa
  </div>
</div>

@endsection