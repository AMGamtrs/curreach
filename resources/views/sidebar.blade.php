
  <ul class="sidenav">
    <li><a href="/mapsearch/">地図から探す</a></li>

    <li class="search_free">
      フリーワード検索
      <div>
        <form class="navbar-form navbar-right" role="search" action='/csearch'>
          <!-- 検索対象指定 -->
          <input name="mode" type="radio" value="curry">カレー
          <input name="mode" type="radio" value="shop">店舗<br>
          <!-- フリーワード入力 -->
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Search" name="keyword">
          </div>
        </form>
      </div>
    </li>

    <li><a>カレー種類から探す</a>
      <ul>
        <li>
          <form name="oufu" action='/csearch'>
            <input type="hidden" name="curry_type" value="1">
            <a href="javascript:oufu.submit()">洋風カレー</a>
          </form>
        </li>
        <li>
          <form name="soup" action='/csearch'>
            <input type="hidden" name="curry_type" value="2">
            <a href="javascript:soup.submit()">スープカレー</a>
          </form>
        </li>
        <li>
          <form name="ind" action='/csearch'>
            <input type="hidden" name="curry_type" value="3">
            <a href="javascript:ind.submit()">インドカレー</a>
          </form>
        </li>
        <li>
          <form name="gotochi" action='/csearch'>
            <input type="hidden" name="curry_type" value="4">
            <a href="javascript:gotochi.submit()">ご当地カレー</a>
          </form>
        </li>
        <li>
          <form name="othercurry" action='/csearch'>
            <input type="hidden" name="curry_type" value="5">
            <a href="javascript:othercurry.submit()">その他</a>
          </form>
        </li>
      </ul>
    </li>

    <li><a>メイン具材から探す</a>
      <ul>
        <li>
          <form name="chicken" action='/csearch'>
            <input type="hidden" name="main_type" value="1">
            <a href="javascript:chicken.submit()">チキン</a>
          </form>
        </li>
        <li>
          <form name="beef" action='/csearch'>
            <input type="hidden" name="main_type" value="2">
            <a href="javascript:beef.submit()">ビーフ</a>
          </form>
        </li>
        <li>
          <form name="pork" action='/csearch'>
            <input type="hidden" name="main_type" value="3">
            <a href="javascript:pork.submit()">ポーク</a>
          </form>
        </li>
        <li>
          <form name="mutton" action='/csearch'>
            <input type="hidden" name="main_type" value="4">
            <a href="javascript:mutton.submit()">マトン</a>
          </form>
        </li>
        <li>
          <form name="seafood" action='/csearch'>
            <input type="hidden" name="main_type" value="5">
            <a href="javascript:seafood.submit()">シーフード</a>
          </form>
        </li>
        <li>
          <form name="vegetables" action='/csearch'>
            <input type="hidden" name="main_type" value="6">
            <a href="javascript:vegetables.submit()">野菜</a>
          </form>
        </li>
        <li>
          <form name="othermain" action='/csearch'>
            <input type="hidden" name="main_type" value="7">
            <a href="javascript:othermain.submit()">その他</a>
          </form>
        </li>
      </ul>
    </li>

    <li><a>ライス/ナンから探す</a>
      <ul>
        <li>
          <form name="rice" action='/csearch'>
            <input type="hidden" name="ricenaan_type" value="1">
            <a href="javascript:rice.submit()">ライス</a>
          </form>
        </li>
        <li>
          <form name="naan" action='/csearch'>
            <input type="hidden" name="ricenaan_type" value="2">
            <a href="javascript:naan.submit()">ナン</a>
          </form>
        </li>
        <li>
          <form name="othersub" action='/csearch'>
            <input type="hidden" name="ricenaan_type" value="3">
            <a href="javascript:othersub.submit()">その他</a>
          </form>
        </li>
      </ul>
    </li>

    <li><a>禁煙/喫煙の店舗を探す</a>
      <ul>
        <li>
          <form name="smoking_ng" action='/csearch'>
            <input type="hidden" name="smoking" value="1">
            <a href="javascript:rice.submit()">禁煙</a>
          </form>
        </li>
        <li>
          <form name="smoking_both" action='/csearch'>
            <input type="hidden" name="smoking" value="2">
            <a href="javascript:othersub.submit()">分煙</a>
          </form>
        </li>
        <li>
          <form name="smoking_ok" action='/csearch'>
            <input type="hidden" name="smoking" value="3">
            <a href="javascript:naan.submit()">喫煙</a>
          </form>
        </li>
      </ul>
    </li>

    <li><a>席数で店舗を探す</a>
      <ul>
        <li>
          <form name="seats_10" action='/csearch'>
            <input type="hidden" name="seats" value="1">
            <a href="javascript:rice.submit()">0〜10席</a>
          </form>
        </li>
        <li>
          <form name="seats_20" action='/csearch'>
            <input type="hidden" name="seats" value="2">
            <a href="javascript:othersub.submit()">11〜20席</a>
          </form>
        </li>
        <li>
          <form name="seats_30" action='/csearch'>
            <input type="hidden" name="seats" value="3">
            <a href="javascript:othersub.submit()">21〜30席</a>
          </form>
        </li>
        <li>
          <form name="seats_40" action='/csearch'>
            <input type="hidden" name="seats" value="4">
            <a href="javascript:othersub.submit()">31〜席</a>
          </form>
        </li>
      </ul>
    </li>


  </ul>
