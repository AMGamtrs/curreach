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
      $shops = array(
        array('shop_name' => 'A店', 'lat' => '35.6890000', 'lng' => '139.7669568'),
        array('shop_name' => 'B店', 'lat' => '35.6880000', 'lng' => '139.7669568'),
        array('shop_name' => 'C店', 'lat' => '35.6870000', 'lng' => '139.7669568'),
        array('shop_name' => 'D店', 'lat' => '35.6860000', 'lng' => '139.7669568'),
        array('shop_name' => 'E店', 'lat' => '35.6850000', 'lng' => '139.7669568'),
        array('shop_name' => 'F店', 'lat' => '35.6840000', 'lng' => '139.7669568'),
        array('shop_name' => 'G店', 'lat' => '35.6830000', 'lng' => '139.7669568'),
        array('shop_name' => 'H店', 'lat' => '35.6820000', 'lng' => '139.7669568'),
        array('shop_name' => 'I店', 'lat' => '35.6810000', 'lng' => '139.7669568'),
        array('shop_name' => 'J店', 'lat' => '35.6800000', 'lng' => '139.7669568'),
        array('shop_name' => 'K店', 'lat' => '35.6890000', 'lng' => '139.7665568'),
        array('shop_name' => 'L店', 'lat' => '35.6880000', 'lng' => '139.7665568'),
        array('shop_name' => 'N店', 'lat' => '35.6870000', 'lng' => '139.7665568'),
        array('shop_name' => 'M店', 'lat' => '35.6860000', 'lng' => '139.7665568'),
        array('shop_name' => 'O店', 'lat' => '35.6850000', 'lng' => '139.7665568'),
        array('shop_name' => 'P店', 'lat' => '35.6840000', 'lng' => '139.7665568'),
        array('shop_name' => 'Q店', 'lat' => '35.6830000', 'lng' => '139.7665568'),
        array('shop_name' => 'R店', 'lat' => '35.6820000', 'lng' => '139.7665568'),
        array('shop_name' => 'S店', 'lat' => '35.6810000', 'lng' => '139.7665568'),
        array('shop_name' => 'T店', 'lat' => '35.6800000', 'lng' => '139.7665568'),
      );

      DB::table('shops')->insert($shops);
    }
}
