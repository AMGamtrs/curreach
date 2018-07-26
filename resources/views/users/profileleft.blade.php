<h4>hello! {{Auth::user()->name}}さん</h4>

<div style="height:120px;">
  @if(!empty(Auth::user()->icon))
    <img src="http://drive.google.com/uc?export=view&id={{ Auth::user()->icon }}" alt="プロフィール写真" class="img-circle" style="width:100px;">
  @else
    <img src="/images/profile.png" alt="プロフィール写真" class="img-circle grayscale" style="width:120px;">
  @endif
</div>

  <hr style="color: black;">

  <div class="list-group">
    @if(Request::path() == "users/".Auth::user()->id)
      <a href="/users/{{Auth::user()->id}}" class="list-group-item list-group-item-warning">
    @else
      <a href="/users/{{Auth::user()->id}}" class="list-group-item">
    @endif
        <span class="glyphicon glyphicon-comment" aria-hidden="true"></span><strong> 投稿レビュー</strong
      </a>
    @if(Request::path() == "users/".Auth::user()->id."/likes")
      <a href="/users/{{Auth::user()->id}}/likes" class="list-group-item list-group-item-warning">
    @else
      <a href="/users/{{Auth::user()->id}}/likes" class="list-group-item">
    @endif
        <span class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></span><strong> 送ったいいね</strong>
      </a>
<!--
    @if(Request::path() == "users/".Auth::user()->id."/bookmarks")
      <a href="/users/{{Auth::user()->id}}/bookmarks" class="list-group-item list-group-item-warning">
    @else
      <a href="/users/{{Auth::user()->id}}/bookmarks" class="list-group-item">
    @endif
        <span class="glyphicon glyphicon-bookmark" aria-hidden="true"></span><strong> ブックマーク一覧</strong>
      </a>
-->
    @if(Request::path() == "users/".Auth::user()->id."/profile")
      <a href="/users/{{Auth::user()->id}}/profile" class="list-group-item list-group-item-warning">
    @else
      <a href="/users/{{Auth::user()->id}}/profile" class="list-group-item">
    @endif
        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span><strong> プロフィール編集</strong>
      </a>

  </div>
