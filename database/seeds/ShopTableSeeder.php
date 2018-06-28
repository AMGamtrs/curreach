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
        array('shop_name' => 'A店', 'lat' => '35.6808586', 'lng' => '139.7669568'),
        array('shop_name' => 'B店', 'lat' => '35.6808486', 'lng' => '139.7669468'),
        array('shop_name' => 'C店', 'lat' => '35.6808386', 'lng' => '139.7669368'),
        array('shop_name' => 'D店', 'lat' => '35.6808286', 'lng' => '139.7669268'),
        array('shop_name' => 'E店', 'lat' => '35.6808186', 'lng' => '139.7669168'),
        array('shop_name' => 'F店', 'lat' => '35.6808586', 'lng' => '139.7669068'),
        array('shop_name' => 'G店', 'lat' => '35.6808486', 'lng' => '139.7668968'),
        array('shop_name' => 'H店', 'lat' => '35.6808386', 'lng' => '139.7668868'),
        array('shop_name' => 'I店', 'lat' => '35.6808286', 'lng' => '139.7668768'),
        array('shop_name' => 'J店', 'lat' => '35.6808186', 'lng' => '139.7668668'),
        array('shop_name' => 'K店', 'lat' => '35.6808586', 'lng' => '139.7668568'),
        array('shop_name' => 'L店', 'lat' => '35.6808486', 'lng' => '139.7668468'),
        array('shop_name' => 'N店', 'lat' => '35.6808386', 'lng' => '139.7668368'),
        array('shop_name' => 'M店', 'lat' => '35.6808286', 'lng' => '139.7668268'),
        array('shop_name' => 'O店', 'lat' => '35.6808186', 'lng' => '139.7668168'),
        array('shop_name' => 'P店', 'lat' => '35.6808586', 'lng' => '139.7668068'),
        array('shop_name' => 'Q店', 'lat' => '35.6808486', 'lng' => '139.7667968'),
        array('shop_name' => 'R店', 'lat' => '35.6808386', 'lng' => '139.7667868'),
        array('shop_name' => 'S店', 'lat' => '35.6808286', 'lng' => '139.7667768'),
        array('shop_name' => 'T店', 'lat' => '35.6808186', 'lng' => '139.7667668'),
      );

      DB::table('shops')->insert($shops);
    }
}
