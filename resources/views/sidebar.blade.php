
  <ul class="sidenav">
    <li><a href="/mapsearch/">地図から探す</a></li>

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

  </ul>
