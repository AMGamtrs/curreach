@extends('layout')

@section('content')

<div class="container-fulid">
  <div class="row">
    
    <div class="col-md-3 text-center col-md-offset-1" style="background-color: #FFFFF0;">
      

      <h4>hello！{{Auth::user()->name}}さん</h4>
        
        <img src="/images/users/matayoshi.jpg" alt="プロフィール写真" class="img-circle" style="width:100px;"> 
        <br>
        <br>
        <hr style="color: black;">
        <br>
        <br>
        <div class="container-fulid">
          <div class="row">
            <a href="">
              <div class="col-md-4" style="border-right: solid 1px black; height: 40px; ">
                <div>プロフィール</div>
              </div> 
            </a>

            <a href="">
              <div class="col-md-4"  style="border-right: solid 1px black;height: 40px;">
                <div>投稿一覧</div>
              </div>
            </a>

            <a href="https://tech-camp.in">
              <div class="col-md-4" height: 40px;　vertical-align: middle;>
                <div>プロフィール編集</div>
              </div>
            </a>

          </div>
        </div>
        
        <br>
        <br>
        
        <h3>今日のオススメ</h3>

            <h4>カレー写真</h4>
            <h4>カレー写真</h4>
            <h4>カレー写真</h4>
            <h4>カレー写真</h4>
            <h4>カレー写真</h4>



    </div>

    <div class="col-md-6 col-md-offset-1" style="background-color: #FFFFF0;">
      <div class="col-md-offset-1">
        
        <h2>投稿一覧</h2>
　　　　　<h3>投稿した店舗</h3>
        <table>
          <tr>
            <th>投稿日</th>
            <th>店舗名</th>
          </tr>
          <tr>
            <td>2018/07/06</td>
            <td>店舗名</td>
          </tr>
          <tr>
            <td>2014/10/03</td>
            <td>店舗名</td>
          </tr>
          <tr>
            <td>2014/09/27</td>
            <td>店舗名</td>
          </tr>
        </table>


      <h3>投稿したカレー</h3>
      <table>
          <tr>
            <th>投稿日</th>
            <th>カレー名</th>
          </tr>
          <tr>
            <td>2018/07/06</td>
            <td>カレー名</td>
          </tr>
          <tr>
            <td>2014/10/03</td>
            <td>カレー名</td>
          </tr>
          <tr>
            <td>2014/09/27</td>
            <td>カレー名</td>
          </tr>
        </table>

      　<h3>どうしましょう</h3>
       <h3>どうしましょう</h3>
       <h3>どうしましょう</h3>

      </div>
    </div>

  </div>

</div>

@endsection
