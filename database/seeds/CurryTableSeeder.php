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
      $curries = array(
        array('curry_name' => 'あ カレー', 'price' => '500 ', 'shop_id' => '1'),
        array('curry_name' => 'い カレー', 'price' => '600 ', 'shop_id' => '2'),
        array('curry_name' => 'う カレー', 'price' => '700 ', 'shop_id' => '3'),
        array('curry_name' => 'え カレー', 'price' => '800 ', 'shop_id' => '4'),
        array('curry_name' => 'お カレー', 'price' => '900 ', 'shop_id' => '5'),
        array('curry_name' => 'か カレー', 'price' => '1000', 'shop_id' => '6'),
        array('curry_name' => 'き カレー', 'price' => '1200', 'shop_id' => '7'),
        array('curry_name' => 'く カレー', 'price' => '500 ', 'shop_id' => '8'),
        array('curry_name' => 'け カレー', 'price' => '600 ', 'shop_id' => '9'),
        array('curry_name' => 'こ カレー', 'price' => '700 ', 'shop_id' => '10'),
        array('curry_name' => 'さ カレー', 'price' => '800 ', 'shop_id' => '11'),
        array('curry_name' => 'し カレー', 'price' => '900 ', 'shop_id' => '12'),
        array('curry_name' => 'す カレー', 'price' => '1000', 'shop_id' => '13'),
        array('curry_name' => 'せ カレー', 'price' => '1200', 'shop_id' => '14'),
        array('curry_name' => 'そ カレー', 'price' => '850 ', 'shop_id' => '15'),
        array('curry_name' => 'た カレー', 'price' => '500 ', 'shop_id' => '16'),
        array('curry_name' => 'ち カレー', 'price' => '600 ', 'shop_id' => '17'),
        array('curry_name' => 'つ カレー', 'price' => '700 ', 'shop_id' => '18'),
        array('curry_name' => 'て カレー', 'price' => '800 ', 'shop_id' => '19'),
        array('curry_name' => 'と カレー', 'price' => '900 ', 'shop_id' => '20'),
        array('curry_name' => 'な カレー', 'price' => '1000', 'shop_id' => '1'),
        array('curry_name' => 'に カレー', 'price' => '1200', 'shop_id' => '2'),
        array('curry_name' => 'ぬ カレー', 'price' => '420 ', 'shop_id' => '3'),
        array('curry_name' => 'ね カレー', 'price' => '500 ', 'shop_id' => '4'),
        array('curry_name' => 'の カレー', 'price' => '600 ', 'shop_id' => '5'),
        array('curry_name' => 'は カレー', 'price' => '700 ', 'shop_id' => '6'),
        array('curry_name' => 'ひ カレー', 'price' => '800 ', 'shop_id' => '7'),
        array('curry_name' => 'ふ カレー', 'price' => '900 ', 'shop_id' => '8'),
        array('curry_name' => 'へ カレー', 'price' => '1000', 'shop_id' => '9'),
        array('curry_name' => 'ほ カレー', 'price' => '1200', 'shop_id' => '10'),
        array('curry_name' => 'ま カレー', 'price' => '1050', 'shop_id' => '11'),
        array('curry_name' => 'み カレー', 'price' => '500 ', 'shop_id' => '12'),
        array('curry_name' => 'む カレー', 'price' => '600 ', 'shop_id' => '13'),
        array('curry_name' => 'め カレー', 'price' => '700 ', 'shop_id' => '14'),
        array('curry_name' => 'も カレー', 'price' => '800 ', 'shop_id' => '15'),
        array('curry_name' => 'や カレー', 'price' => '900 ', 'shop_id' => '16'),
        array('curry_name' => 'うぃカレー', 'price' => '1000', 'shop_id' => '17'),
        array('curry_name' => 'ゆ カレー', 'price' => '1200', 'shop_id' => '18'),
        array('curry_name' => 'うぇカレー', 'price' => '400 ', 'shop_id' => '19'),
        array('curry_name' => 'よ カレー', 'price' => '600 ', 'shop_id' => '20'),
      );

      DB::table('curries')->insert($curries);
    }
}
