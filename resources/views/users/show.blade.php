@extends('layout')

@section('content')

<div class="container-fulid">
  <div class="row">

    <div class="col-md-2 text-center col-md-offset-1" style="background-color: #FFFFF0; border-radius:5px; margin-bottom:20px;">
      @include('users.profileleft')
    </div>

    <div class="col-md-7 col-md-offset-1" style="background-color: #FFFFF0; border-radius:5px; margin-bottom:20px;">
      <div class="col-md-offset-1">

        <div class="page-header"><h2>投稿レビュー</h2></div>

        <h3>店舗のレビュー</h3>
<div class="col-md-offset-1">
        @foreach ($shop_reviews as $review)
          <div class="media">
            <div class="media-left">
              <a href="#">
      @if($review->shop->photos()->exists())
        <img src="http://drive.google.com/uc?export=view&id={{$review->shop->photos()->first()->image}}" alt="{{$review->shop->shop_name}}" style="width:120px;height:120px;object-fit:cover;"/>
      @else
        <img src="http://drive.google.com/uc?export=view&id=1FWi7Bz-kfcYlSyibXfSF0-o92NJG3-li"/>
      @endif
    </a>
  </div>
  <div class="media-body">
    <h4 class="media-heading">{{$review->shop->shop_name}}</h4>
    <p>{{$review->review}}</p>
  </div>
</div>
@endforeach
</div>

        <h3>カレーのレビュー</h3>

        @foreach ($curry_reviews as $review)
        <div class="col-sm-6 col-md-4">
          <div class="thumbnail">
            @if($review->curry->photos()->exists())
              <img src="http://drive.google.com/uc?export=view&id={{$review->curry->photos()->first()->image}}" alt="{{$review->curry->curry_name}}"/>
            @else
              <img src="http://drive.google.com/uc?export=view&id=1FWi7Bz-kfcYlSyibXfSF0-o92NJG3-li"/>
            @endif
            <div class="caption overflow-hidden">
              <h4>{{$review->curry->curry_name}}</h4>
            </div>
          </div>
        </div>
        @endforeach
      </div>

    </div>

  </div>

</div>

@endsection
