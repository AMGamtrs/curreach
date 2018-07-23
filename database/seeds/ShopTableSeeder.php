<?php

use Illuminate\Database\Seeder;

class ShopTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('shops')->truncate();
      $shops = [
  ['id' => '1', 'shop_name' => '伽哩本舗 門司港レトロ店', 'lat' => '33.945993', 'lng' => '130.961614', 'address' => '福岡県北九州市門司区港町9-2 阿波屋ビル２F', 'business_hours' => '月～金11:00～15:00（14:30 O.S)/17:00～20:00（L.O)/土・日・祝11：00～20:00(L.O)夏季7/25から8/31は21:00(L.O)', 'seats' => '30', 'smoking' => '1', 'homepage' => 'http://www.curry-honpo.com/', 'charging' => '2', 'wifi' => '2', 'customer' => '3', 'peak_time' => '12:00〜14:00', ],
  ['id' => '2', 'shop_name' => 'camp express 品川店', 'lat' => '35.628576', 'lng' => '139.739392', 'address' => '東京都港区高輪3-26-27 ecute品川South1F', 'business_hours' => '月～土/7:00～22:30/日・祝/8:00～21:30', 'seats' => '20', 'smoking' => '0', 'homepage' => 'http://www.nre.co.jp/shop/tabid/221/brnid/16/Default.aspx', 'charging' => '2', 'wifi' => '2', 'customer' => '4', 'peak_time' => null, ],
  ['id' => '3', 'shop_name' => 'アイ エヌ キッチン 日立店', 'lat' => '36.59198', 'lng' => '140.657797', 'address' => '茨城県日立市幸町１丁目１２−１', 'business_hours' => '11:00～15:00 17:00～24:00', 'seats' => null, 'smoking' => null, 'homepage' => null, 'charging' => '1', 'wifi' => '1', 'customer' => '2', 'peak_time' => null, ],
  ['id' => '4', 'shop_name' => '一文字咖喱店', 'lat' => '43.035287', 'lng' => '141.43278', 'address' => '北海道札幌市白石区本通17-南2-4 ストーンビル本通17 1F', 'business_hours' => '11:00～15:00(L.O.14:30)/17:30～21:00(L.O.20:30)/※スープがなくなり次第終了。', 'seats' => '11', 'smoking' => '0', 'homepage' => null, 'charging' => '2', 'wifi' => '2', 'customer' => '3', 'peak_time' => '12:00〜14:00', ],
  ['id' => '5', 'shop_name' => 'もうやんカレー　246 渋谷店', 'lat' => '35.660723', 'lng' => '139.706255', 'address' => '東京都渋谷区渋谷1-7-5 青山セブンハイツ　1F', 'business_hours' => '月〜土/11:30〜15:30/18:00〜23:30', 'seats' => '58', 'smoking' => '1', 'homepage' => 'http://www.moyan.jp/', 'charging' => '2', 'wifi' => '2', 'customer' => '2', 'peak_time' => '12:00〜14:00', ],
  ['id' => '6', 'shop_name' => 'モンタンベール', 'lat' => '35.647944', 'lng' => '139.713058', 'address' => '東京都渋谷区恵比寿1-16-29 デリス第2ビル 1F', 'business_hours' => '[月～土]11:30～15:00（L.O.14:30）／18:00～22:00（L.O.21:30）', 'seats' => null, 'smoking' => '0', 'homepage' => 'http://montenvers.jp/', 'charging' => '2', 'wifi' => '2', 'customer' => '4', 'peak_time' => '13:00〜14:00', ],
  ['id' => '7', 'shop_name' => 'タージオキナワ', 'lat' => '26.327774', 'lng' => '127.762828', 'address' => '沖縄県中頭郡北谷町伊平４５８−１', 'business_hours' => '10:00〜22:00', 'seats' => '100', 'smoking' => '0', 'homepage' => 'https://tabelog.com/okinawa/A4703/A470304/47010971/', 'charging' => '2', 'wifi' => '2', 'customer' => '3', 'peak_time' => '12:00〜13:00/20:00〜21:00', ],
  ['id' => '8', 'shop_name' => '天馬屋', 'lat' => '35.66098', 'lng' => '139.668199', 'address' => '東京都世田谷区北沢２-１２-１２ 桑田ビル１F', 'business_hours' => '11:00〜22:30', 'seats' => '40', 'smoking' => '0', 'homepage' => 'http://www.n-rs.co.jp/', 'charging' => '2', 'wifi' => '2', 'customer' => '3', 'peak_time' => null, ],
  ['id' => '9', 'shop_name' => 'Spice&Dining KALA', 'lat' => '33.817444', 'lng' => '130.715275', 'address' => '福岡県中間市東中間1-3-7 Kタウン 1F', 'business_hours' => '◆ランチ（完全予約制、当日午前11時まで受付）11:30～15:00（14:30 L.O.）/◆ディナー（完全予約制１日１組のみ（１週間前以上要予約））☎090-7159-3045：石川 18:00～ Close', 'seats' => '10', 'smoking' => '0', 'homepage' => 'https://www.facebook.com/KALAindia', 'charging' => '2', 'wifi' => '2', 'customer' => '3', 'peak_time' => null, ],
];

      DB::table('shops')->insert($shops);
    }
}
