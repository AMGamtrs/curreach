@extends('layout')

@section('content')

<div class="container-fulid">
  <div class="row">

    <div class="col-md-2 text-center col-md-offset-1" style="background-color: #FFFFF0; border-radius:5px;  margin-bottom:20px;">
      @include('users.profileleft')
    </div>

    <div class="col-md-7 col-md-offset-1" style="background-color: #FFFFF0; border-radius:5px; margin-bottom:20px;">
      <div class="col-md-offset-1">

        <div class="page-header"><h2>送ったいいね</h2></div>

        <h3>いいね一覧</h3>

    </div>

  </div>

</div>

@endsection
