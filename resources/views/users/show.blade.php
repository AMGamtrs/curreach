@extends('layout')

@section('content')

<div class="container-fulid">
  <div class="row">

    <div class="col-md-2 text-center col-md-offset-1" style="background-color: #FFFFF0; border-radius:10px; margin-bottom:20px;">
      @include('users.profileleft')
    </div>

    <div class="col-md-7 col-md-offset-1" style="background-color: #FFFFF0; border-radius:10px; margin-bottom:20px; padding:0 50px 30px;">

      <div class="page-header"><h2>投稿レビュー</h2></div>

        <h3 style="margin-top:25px; margin-bottom:30px;"><span class="createpage-heading createpage-knife">店舗のレビュー</span></h3>
        <div class="clearfix">
          @foreach ($shop_reviews as $review)
          <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
              <div class="textonphoto">
                <a href="/shops/{{$review->shop->id}}">
                  @if($review->shop->photos()->exists())
                    <img src="http://drive.google.com/uc?export=view&id={{$review->shop->photos()->first()->image}}" alt="{{$review->shop->shop_name}}" style="height:120px;"/>
                  @else
                    <img src="http://drive.google.com/uc?export=view&id=1FWi7Bz-kfcYlSyibXfSF0-o92NJG3-li" style="height:120px;"/>
                  @endif
                </a>
                <p style="width:100%">
                  {{$review->shop->shop_name}}<br/>
                  <span class="star-rating">
                    <span class="star-rating-front" style="width: {{(round($review->shop->reviews()->avg('rate')))*2}}0%">★★★★★</span>
                    <span class="star-rating-back">★★★★★</span>
                  </span>
                </p>
                <div class="caption overflow-hidden">
                  <div style="text-overflow: ellipsis;white-space: nowrap;overflow: hidden;font-size: 12px;">
                    {{$review->review}}
                  </div>
                </div>
              </div>
            </div>
          </div>
          @endforeach
        </div>

        {{ $shop_reviews->links() }}

        <h3 style="margin-top:25px; margin-bottom:30px;"><span class="createpage-heading createpage-knife">カレーのレビュー</span></h3>
        <div class="clearfix">
        @foreach ($curry_reviews as $review)
        <div class="col-sm-6 col-md-4">
          <div class="thumbnail">
            <div class="textonphoto">
              <a href="/shops/{{$review->curry->shop_id}}/curries/{{$review->curry->id}}">
                @if($review->curry->photos()->exists())
                  <img src="http://drive.google.com/uc?export=view&id={{$review->curry->photos()->first()->image}}" alt="{{$review->curry->curry_name}}" style="height:120px;"/>
                @else
                  <img src="http://drive.google.com/uc?export=view&id=1FWi7Bz-kfcYlSyibXfSF0-o92NJG3-li" style="height:120px;"/>
                @endif
              </a>
              <p style="width:100%">
                {{$review->curry->curry_name}}<br/>
                <span class="star-rating">
                  <span class="star-rating-front" style="width: {{(round($review->curry->reviews()->avg('rate')))*2}}0%">★★★★★</span>
                  <span class="star-rating-back">★★★★★</span>
                </span>
              </p>
              <div class="caption overflow-hidden">
                <div style="text-overflow: ellipsis;white-space: nowrap;overflow: hidden;font-size: 12px;">
                  {{$review->review}}
                </div>
              </div>
            </div>
          </div>
        </div>
        @endforeach
      </div>

      <div class="text-center">
        {{ $curry_reviews->links() }}
      </div>

    </div>

  </div>

</div>

@endsection
