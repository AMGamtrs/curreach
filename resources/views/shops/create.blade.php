@extends('layout')

@section('content')
<h1>店舗を登録する</h1>
 <form action="#" method="post">
  <p>店舗名(必須)：
    <input type="text" name="name" value="" required="required" />
    <br>
   </p>
  <form method="post" enctype="multipart/form-data">
外観写真：<input type="file" name="pic">
<input type="submit" name="botan" value="アップロード">
<p><nobr>他の任意の項目：
  <input type="text" name="item"><nobr></p>
</form>
　
  
</form>
 
  <input type="submit" name="button" value="登録する">
   
@endsection
