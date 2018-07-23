@extends('layout')

@section('content')

<div class="container-fulid">
  <div class="row">

    <div class="col-md-2 text-center col-md-offset-1" style="background-color: #FFFFF0; border-radius:5px;  margin-bottom:20px;">
      @include('users.profileleft')
    </div>

    <div class="col-md-7 col-md-offset-1" style="background-color: #FFFFF0; border-radius:5px; margin-bottom:20px;">
      <div class="col-md-offset-1 clearfix">

        <div class="page-header"><h2>ブックマーク</h2></div>

       <h3>ブックマークしたカレー</h3>
       @foreach ($bookmarks as $bookmark)
       <div class="col-sm-4 col-md-3">
         <a href="/shops/{{$bookmark->curry->shop->id}}/curries/{{$bookmark->curry->id}}" class="thumbnail thumbnail-bookmark">
           @if($bookmark->curry->photos()->exists())
             <img src="http://drive.google.com/uc?export=view&id={{$bookmark->curry->photos()->first()->image}}" alt="{{$bookmark->curry->curry_name}}"/>
           @else
             <img src="http://drive.google.com/uc?export=view&id=1FWi7Bz-kfcYlSyibXfSF0-o92NJG3-li"/>
           @endif
          </a>
       </div>
       @endforeach

      </div>

      <div class="text-center">
        {{ $bookmarks->links() }}
      </div>

    </div>

  </div>

</div>

@endsection
