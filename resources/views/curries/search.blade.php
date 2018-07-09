@extends('layout')

@section('content')
<div class="container">
  <div class="row">

    <div class="page-header">
      <h1><small>「{{$word}}」の検索結果</small></h1>
    </div>

    @foreach ($curries as $curry)
    <div class="col-sm-6 col-md-4">
      <div class="thumbnail">
        @if($curry->photos()->exists())
          <img src="/images/curries/{{$curry->photos()->first()->image}}" alt="{{$curry->curry_name}}"/>
        @else
          <img src="/images/noimage.png"/>
        @endif
        <div class="caption">
          <h3>{{$curry->curry_name}}</h3>
          <p>{{$curry->shop->shop_name}}</p>
          <p>{{$curry->price}}円</p>
          <p><a href="#" class="btn btn-warning" role="button">詳しくみる</a></p>
        </div>
      </div>
    </div>
    @endforeach
  </div>

</div>
<div class="text-center">
{{ $curries->links() }}
</div>
@endsection
