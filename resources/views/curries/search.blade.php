@extends('layout')

@section('content')
<div class="container-fluid">
  <div class="row">

    <div class="col-md-2 col-md-offset-1 sidebar2 sideover">
      @include('sidebar')
    </div>

    <div class="col-md-8">

    <div class="page-header">
      <h1><small>「{{$word}}」の検索結果</small></h1>
    </div>

    @foreach ($curries as $curry)
    <div class="col-sm-6 col-md-4">
      <div class="thumbnail">
        @if($curry->photos()->exists())
          <img src="http://drive.google.com/uc?export=view&id={{$curry->photos()->first()->image}}" alt="{{$curry->curry_name}}"/>
        @else
          <img src="http://drive.google.com/uc?export=view&id=1FWi7Bz-kfcYlSyibXfSF0-o92NJG3-li"/>
        @endif
        <div class="caption">
          <h3>{{$curry->curry_name}}</h3>
          <p>{{$curry->shop->shop_name}}</p>
          <p>{{$curry->price}}円</p>
          <p><a href="/shops/{{$curry->shop_id}}/curries/{{$curry->id}}" class="btn btn-warning" role="button">詳しくみる</a></p>
        </div>
      </div>
    </div>
    @endforeach
  </div>
  </div>

</div>
<div class="text-center">
{{ $curries->links() }}
</div>
@endsection
