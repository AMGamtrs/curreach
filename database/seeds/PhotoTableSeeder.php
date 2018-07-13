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

        array('shop_id' => null, 'curry_id' => '1', 'review_id' => null, 'image' => '1HSxvQ2U--3jTv8Y_bebYZA-P7JOD4l24'),
        array('shop_id' => null, 'curry_id' => '2', 'review_id' => null, 'image' => '1VDHCCBbr__-7HRpFLz9hyFDesJ4YHbfJ'),
        array('shop_id' => null, 'curry_id' => '3', 'review_id' => null, 'image' => '1oL52yJ9gkceam-pstegoHTnCO_FulHQO'),
        array('shop_id' => '1', 'curry_id' => null, 'review_id' => null, 'image' => '1X_cTZGTMj5ZRDJ1qx5bcIv4eDDBq-qJS'),
        array('shop_id' => '2', 'curry_id' => null, 'review_id' => null, 'image' => '1kfYl_xrJQrM8NOxCmkKlGbFyqXUV9oRr'),
      );

      DB::table('photos')->insert($photos);
    }
}
