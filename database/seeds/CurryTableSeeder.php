<?php

use Illuminate\Database\Seeder;

class CurryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('curries')->truncate();
      $curries = [
  ['id' => '1', 'curry_name' => 'バナナの焼きカレー', 'price' => '850', 'shop_id' => '1', 'curry_type' => '4', 'main_ingredient' => '7', 'calorie' => null, 'allergies' => null, 'hot_rate' => '2', 'topping' => null, 'amount' => '1', 'naan_rice' => '1', ],
  ['id' => '2', 'curry_name' => 'シーフードと彩り野菜のタイ風グリーンカレー', 'price' => '1190', 'shop_id' => '2', 'curry_type' => '5', 'main_ingredient' => '5', 'calorie' => null, 'allergies' => null, 'hot_rate' => '3', 'topping' => null, 'amount' => '0', 'naan_rice' => '1', ],
  ['id' => '3', 'curry_name' => '昔の焼きカレー', 'price' => '950', 'shop_id' => '1', 'curry_type' => '4', 'main_ingredient' => '2', 'calorie' => null, 'allergies' => null, 'hot_rate' => '3', 'topping' => null, 'amount' => '1', 'naan_rice' => '1', ],
  ['id' => '4', 'curry_name' => '朝のスパイシーチキンカレー', 'price' => '690', 'shop_id' => '2', 'curry_type' => '1', 'main_ingredient' => '1', 'calorie' => null, 'allergies' => null, 'hot_rate' => '4', 'topping' => null, 'amount' => '0', 'naan_rice' => '1', ],
  ['id' => '5', 'curry_name' => 'シーフードの焼きカレー', 'price' => '1050', 'shop_id' => '1', 'curry_type' => '4', 'main_ingredient' => '5', 'calorie' => null, 'allergies' => null, 'hot_rate' => '3', 'topping' => null, 'amount' => '1', 'naan_rice' => '1', ],
  ['id' => '6', 'curry_name' => '1日分の野菜カレー', 'price' => '990', 'shop_id' => '2', 'curry_type' => '3', 'main_ingredient' => '6', 'calorie' => null, 'allergies' => null, 'hot_rate' => '3', 'topping' => null, 'amount' => '0', 'naan_rice' => '1', ],
  ['id' => '7', 'curry_name' => 'マトンカレー（ランチセット）', 'price' => '650', 'shop_id' => '3', 'curry_type' => '3', 'main_ingredient' => '4', 'calorie' => null, 'allergies' => null, 'hot_rate' => null, 'topping' => null, 'amount' => '1', 'naan_rice' => '2', ],
  ['id' => '8', 'curry_name' => 'バターチキンカレー（ランチセット）', 'price' => '650', 'shop_id' => '3', 'curry_type' => '3', 'main_ingredient' => '1', 'calorie' => null, 'allergies' => null, 'hot_rate' => null, 'topping' => null, 'amount' => '1', 'naan_rice' => '2', ],
  ['id' => '9', 'curry_name' => 'ザグチキンカレー（ランチセット）', 'price' => '650', 'shop_id' => '3', 'curry_type' => '3', 'main_ingredient' => '1', 'calorie' => null, 'allergies' => null, 'hot_rate' => null, 'topping' => null, 'amount' => '1', 'naan_rice' => '2', ],
  ['id' => '10', 'curry_name' => 'ルーカリーチキン', 'price' => '900', 'shop_id' => '4', 'curry_type' => '1', 'main_ingredient' => '1', 'calorie' => null, 'allergies' => null, 'hot_rate' => null, 'topping' => null, 'amount' => '0', 'naan_rice' => '1', ],
  ['id' => '11', 'curry_name' => 'スープカリーベジタブル', 'price' => '1150', 'shop_id' => '4', 'curry_type' => '2', 'main_ingredient' => '6', 'calorie' => null, 'allergies' => null, 'hot_rate' => null, 'topping' => null, 'amount' => '0', 'naan_rice' => '1', ],
  ['id' => '12', 'curry_name' => 'ポークカレー', 'price' => '900', 'shop_id' => '5', 'curry_type' => '1', 'main_ingredient' => '3', 'calorie' => null, 'allergies' => null, 'hot_rate' => null, 'topping' => null, 'amount' => '0', 'naan_rice' => '1', ],
  ['id' => '13', 'curry_name' => 'チキンカレー', 'price' => '900', 'shop_id' => '5', 'curry_type' => '1', 'main_ingredient' => '1', 'calorie' => null, 'allergies' => null, 'hot_rate' => null, 'topping' => null, 'amount' => '0', 'naan_rice' => '1', ],
  ['id' => '14', 'curry_name' => 'フワッとオムレツカレー', 'price' => '1080', 'shop_id' => '6', 'curry_type' => '5', 'main_ingredient' => '1', 'calorie' => null, 'allergies' => null, 'hot_rate' => null, 'topping' => null, 'amount' => '0', 'naan_rice' => '1', ],
  ['id' => '15', 'curry_name' => 'エビカレー', 'price' => '900', 'shop_id' => '5', 'curry_type' => '1', 'main_ingredient' => '5', 'calorie' => null, 'allergies' => null, 'hot_rate' => null, 'topping' => null, 'amount' => '0', 'naan_rice' => '1', ],
  ['id' => '16', 'curry_name' => 'チキンバターマサラ', 'price' => '1000', 'shop_id' => '7', 'curry_type' => '3', 'main_ingredient' => '1', 'calorie' => null, 'allergies' => null, 'hot_rate' => null, 'topping' => null, 'amount' => '0', 'naan_rice' => '2', ],
  ['id' => '17', 'curry_name' => 'ベジタブルカレー', 'price' => '950', 'shop_id' => '7', 'curry_type' => '3', 'main_ingredient' => '6', 'calorie' => null, 'allergies' => null, 'hot_rate' => null, 'topping' => null, 'amount' => '0', 'naan_rice' => '2', ],
  ['id' => '18', 'curry_name' => 'やわらか焼きポークカレー', 'price' => '1100', 'shop_id' => '6', 'curry_type' => '1', 'main_ingredient' => '3', 'calorie' => null, 'allergies' => null, 'hot_rate' => null, 'topping' => null, 'amount' => '0', 'naan_rice' => '1', ],
  ['id' => '19', 'curry_name' => '半熟卵カレーパン', 'price' => '250', 'shop_id' => '8', 'curry_type' => '5', 'main_ingredient' => '1', 'calorie' => null, 'allergies' => '1', 'hot_rate' => null, 'topping' => null, 'amount' => '2', 'naan_rice' => '4', ],
  ['id' => '20', 'curry_name' => 'バターチキンカレー', 'price' => '850', 'shop_id' => '8', 'curry_type' => '3', 'main_ingredient' => '1', 'calorie' => null, 'allergies' => null, 'hot_rate' => null, 'topping' => null, 'amount' => '0', 'naan_rice' => '1', ],
  ['id' => '21', 'curry_name' => 'ベジタリアン・ミールス', 'price' => '2000', 'shop_id' => '9', 'curry_type' => '3', 'main_ingredient' => '6', 'calorie' => null, 'allergies' => null, 'hot_rate' => null, 'topping' => null, 'amount' => '0', 'naan_rice' => '1', ],
  ['id' => '22', 'curry_name' => 'とろとろポークと旬野菜13品目のカレー', 'price' => '1050', 'shop_id' => '12', 'curry_type' => '2', 'main_ingredient' => '3', 'calorie' => null, 'allergies' => null, 'hot_rate' => '3', 'topping' => null, 'amount' => '0', 'naan_rice' => '1', ],
  ['id' => '23', 'curry_name' => 'MOMOと野菜のスープカレー', 'price' => '990', 'shop_id' => '13', 'curry_type' => '2', 'main_ingredient' => '6', 'calorie' => null, 'allergies' => null, 'hot_rate' => '3', 'topping' => null, 'amount' => '0', 'naan_rice' => '1', ],
];

      DB::table('curries')->insert($curries);
    }
}
