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
      $photos = [
  ['id' => '1', 'shop_id' => '1', 'curry_id' => '0', 'review_id' => '0', 'image' => 'monji_curryhonpo.jpg', ],
  ['id' => '2', 'shop_id' => '0', 'curry_id' => '1', 'review_id' => '0', 'image' => 'yaki_banana.jpg', ],
  ['id' => '3', 'shop_id' => '0', 'curry_id' => '3', 'review_id' => '0', 'image' => 'yaki_mukashi.jpg', ],
  ['id' => '4', 'shop_id' => '0', 'curry_id' => '5', 'review_id' => '0', 'image' => 'yaki_seafood.jpg', ],
  ['id' => '5', 'shop_id' => '0', 'curry_id' => '4', 'review_id' => '0', 'image' => 'camp express curry.jpg', ],
  ['id' => '6', 'shop_id' => '2', 'curry_id' => '0', 'review_id' => '0', 'image' => 'camp express shop.jpg', ],
  ['id' => '7', 'shop_id' => '0', 'curry_id' => '6', 'review_id' => '0', 'image' => 'camp express curry2.jpg', ],
  ['id' => '8', 'shop_id' => '3', 'curry_id' => '0', 'review_id' => '0', 'image' => 'hitachi_in.jpg', ],
  ['id' => '9', 'shop_id' => '0', 'curry_id' => '7', 'review_id' => '0', 'image' => 'h_in_mutton.jpg', ],
  ['id' => '10', 'shop_id' => '0', 'curry_id' => '8', 'review_id' => '0', 'image' => 'h_in_batar.jpg', ],
  ['id' => '11', 'shop_id' => '0', 'curry_id' => '9', 'review_id' => '0', 'image' => 'h_in_zag.jpg', ],
  ['id' => '12', 'shop_id' => '0', 'curry_id' => '2', 'review_id' => '0', 'image' => 'camp express curry3.jpg', ],
  ['id' => '13', 'shop_id' => '3', 'curry_id' => '0', 'review_id' => '0', 'image' => 'hitachi_in2.jpg', ],
  ['id' => '14', 'shop_id' => '1', 'curry_id' => '0', 'review_id' => '0', 'image' => 'monji_curryhonpo2.jpg', ],
  ['id' => '15', 'shop_id' => '4', 'curry_id' => '0', 'review_id' => '0', 'image' => 'hokkai_1monji.jpg', ],
  ['id' => '16', 'shop_id' => '4', 'curry_id' => '0', 'review_id' => '0', 'image' => 'hokkai_1monji2.jpg', ],
  ['id' => '17', 'shop_id' => '0', 'curry_id' => '10', 'review_id' => '0', 'image' => '1monji_ru_chiki.jpg', ],
  ['id' => '18', 'shop_id' => '0', 'curry_id' => '11', 'review_id' => '0', 'image' => '1monji_soup_vage.jpg', ],
  ['id' => '19', 'shop_id' => '5', 'curry_id' => '0', 'review_id' => '0', 'image' => 'mouyan_curry 246.jpg', ],
  ['id' => '20', 'shop_id' => '0', 'curry_id' => '12', 'review_id' => '0', 'image' => 'mouyan_curry_pork.jpg', ],
  ['id' => '21', 'shop_id' => '0', 'curry_id' => '13', 'review_id' => '0', 'image' => 'mouyan_curry_chicken.jpg', ],
  ['id' => '22', 'shop_id' => '0', 'curry_id' => '15', 'review_id' => '0', 'image' => 'mouyan_curry_ebi.jpg', ],
  ['id' => '23', 'shop_id' => '7', 'curry_id' => '0', 'review_id' => '0', 'image' => 'taj-okinawa_shop.jpg', ],
  ['id' => '24', 'shop_id' => '0', 'curry_id' => '16', 'review_id' => '0', 'image' => 'taj-okinawa_curry1.jpg', ],
  ['id' => '25', 'shop_id' => '0', 'curry_id' => '17', 'review_id' => '0', 'image' => 'taj-okinawa_curry2.jpg', ],
  ['id' => '26', 'shop_id' => '0', 'curry_id' => '14', 'review_id' => '0', 'image' => 'montan_om.jpg', ],
  ['id' => '27', 'shop_id' => '0', 'curry_id' => '14', 'review_id' => '0', 'image' => 'montan_om2.jpg', ],
  ['id' => '28', 'shop_id' => '0', 'curry_id' => '18', 'review_id' => '0', 'image' => 'montan_pork.jpg', ],
  ['id' => '29', 'shop_id' => '6', 'curry_id' => '0', 'review_id' => '0', 'image' => 'ebisu_montan.jpg', ],
  ['id' => '30', 'shop_id' => '6', 'curry_id' => '0', 'review_id' => '0', 'image' => 'ebisu_montan2.jpg', ],
  ['id' => '31', 'shop_id' => '6', 'curry_id' => '0', 'review_id' => '0', 'image' => 'ebisu_montan3.jpg', ],
  ['id' => '32', 'shop_id' => '8', 'curry_id' => '0', 'review_id' => '0', 'image' => 'tenmaya_shop.jpg', ],
  ['id' => '33', 'shop_id' => '0', 'curry_id' => '19', 'review_id' => '0', 'image' => 'tenmaya_curry1.jpg', ],
  ['id' => '34', 'shop_id' => '0', 'curry_id' => '20', 'review_id' => '0', 'image' => 'tenmaya_curry2.jpg', ],
  ['id' => '35', 'shop_id' => '9', 'curry_id' => '0', 'review_id' => '0', 'image' => 'fukuoka_kara.jpg', ],
  ['id' => '36', 'shop_id' => '9', 'curry_id' => '0', 'review_id' => '0', 'image' => 'fukuoka_kara2.jpg', ],
  ['id' => '37', 'shop_id' => '0', 'curry_id' => '21', 'review_id' => '0', 'image' => 'kara_vagem.jpg', ],
];

      DB::table('photos')->insert($photos);
    }
}
