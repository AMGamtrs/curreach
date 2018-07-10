<?php

use Illuminate\Database\Seeder;

class PhotoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('photos')->truncate();
      $photos = array(

        array('shop_id' => '', 'curry_id' => '1', 'review_id' => '', 'image' => 'SAWA_karesarada_TP_V4.jpg'),
        array('shop_id' => '', 'curry_id' => '2', 'review_id' => '', 'image' => 'adpDSC_6546.jpg'),
        array('shop_id' => '', 'curry_id' => '3', 'review_id' => '', 'image' => 'yun_12716.jpg'),
        array('shop_id' => '1', 'curry_id' => '', 'review_id' => '', 'image' => 'PAK65_torinosutennai20130825_TP_V4.jpg'),
        array('shop_id' => '2', 'curry_id' => '', 'review_id' => '', 'image' => 'cafe-gourmande.jpg'),
      );

      DB::table('photos')->insert($photos);
    }
}
