@extends('layout')

@section('content')

<div class="container-fulid">
  <div class="row">

    <div class="col-md-2 text-center col-md-offset-1" style="background-color: #FFFFF0; border-radius:10px;  margin-bottom:20px;">
      @include('users.profileleft')
    </div>

    <div class="col-md-7 col-md-offset-1" style="background-color: #FFFFF0; border-radius:10px; margin-bottom:20px; padding:0 50px 30px;">

        <div class="page-header"><h2>送ったいいね</h2></div>

        <h3 style="margin-top:25px; margin-bottom:30px;"><span class="createpage-heading createpage-likes">いいねしたレビュー</span></h3>
        @foreach($shoplikes as $like)
          <div class="review_box clearfix">
            <div class="pull-left">
              @if(!empty($like->review->curry_id))
                <h4>{{$like->review->curry->curry_name}}</h4>
              @elseif(!empty($like->review->shop_id))
                <h4>{{$like->review->shop->shop_name}}</h4>
              @endif
              <div class="review_name">投稿者：{{ $like->review->user->name }}</div>
              <div class="review_rate">評価：{{$like->review->rate}}</div>
                <span class="star-rating">
                  <span class="star-rating-front" style="width: {{ ($like->review->rate)*2 }}0%">★★★★★</span>
                  <span class="star-rating-back">★★★★★</span>
                </span>
                <div class="review_review">{{ $like->review->review }} </div>
                @foreach($like->review->photos()->get() as $photo)
                  <div class="review_img"><img src="http://drive.google.com/uc?export=view&id={{ $photo->image }}"></div>
                @endforeach
                <div class="favorite" id="{{ $like->review->id }}">
                      <button class="btn btn-primary btn-xs fav_btn" type="button">
                        いいねしました <span class="badge">{{ $like->review->favorites()->count() }}</span>
                      </button>
                </div>
            </div>
            <div class="col-md-3 col-sm-3 pull-right">
              @if(!empty($like->review->curry_id))
              @if($like->review->curry->photos()->exists())
                <img src="http://drive.google.com/uc?export=view&id={{ $like->review->curry->photos()->first()->image }}" style="width: 100%; height: 120px; object-fit:cover;">
              @else
                <img src="/images/noimage.png" style="width: 100%; height: 100px; object-fit:cover;"/>
              @endif
              @elseif(!empty($like->review->shop_id))
              @if($like->review->shop->photos()->exists())
                <img src="http://drive.google.com/uc?export=view&id={{ $like->review->shop->photos()->first()->image }}" style="width: 100%; height: 120px; object-fit:cover;">
              @else
                <img src="/images/noimage.png" style="width: 100%; height: 100px; object-fit:cover;"/>
              @endif
              @endif
            </div>
          </div>
        @endforeach
        <div class="text-center">{{ $shoplikes->links() }}</div>
    </div>

  </div>

</div>

@endsection
