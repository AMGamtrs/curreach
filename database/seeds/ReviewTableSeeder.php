<?php

use Illuminate\Database\Seeder;

class ReviewTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('reviews')->truncate();
      $reviews = array(

        array('shop_id' => null, 'curry_id' => '1', 'rate' => '1', 'review' => 'おいしいなまはげ', 'user_id' => '1'),
        array('shop_id' => null, 'curry_id' => '1', 'rate' => '3', 'review' => 'おいしいあいうえお', 'user_id' => '2'),
        array('shop_id' => null, 'curry_id' => '1', 'rate' => '2', 'review' => 'おいしいれびゅー', 'user_id' => '3'),
        array('shop_id' => null, 'curry_id' => '2', 'rate' => '1', 'review' => 'おいしいじゅげむじゅげむ', 'user_id' => '1'),
        array('shop_id' => null, 'curry_id' => '2', 'rate' => '2', 'review' => 'おいしいなまはげ', 'user_id' => '2'),
        array('shop_id' => null, 'curry_id' => '3', 'rate' => '4', 'review' => 'おいしいあー', 'user_id' => '3'),
        array('shop_id' => null, 'curry_id' => '4', 'rate' => '5', 'review' => 'おいしいなまはげ', 'user_id' => '1'),
        array('shop_id' => null, 'curry_id' => '4', 'rate' => '2', 'review' => 'おいしい大地讃頌', 'user_id' => '2'),
        array('shop_id' => null, 'curry_id' => '5', 'rate' => '3', 'review' => 'おいしいなまはげ', 'user_id' => '3'),
        array('shop_id' => null, 'curry_id' => '5', 'rate' => '2', 'review' => 'おいしいスープカレー', 'user_id' => '1'),
        array('shop_id' => null, 'curry_id' => '6', 'rate' => '2', 'review' => 'おいしいなまはげ', 'user_id' => '2'),
        array('shop_id' => null, 'curry_id' => '7', 'rate' => '5', 'review' => 'おいしいこんにちは', 'user_id' => '3'),
        array('shop_id' => null, 'curry_id' => '8', 'rate' => '2', 'review' => 'おいしいこめがうまい', 'user_id' => '1'),
        array('shop_id' => null, 'curry_id' => '9', 'rate' => '5', 'review' => 'おいしいチーズもりもり', 'user_id' => '2'),
        array('shop_id' => null, 'curry_id' => '10', 'rate' => '4', 'review' => 'おいしいぴかぴか', 'user_id' => '3'),
        array('shop_id' => null, 'curry_id' => '11', 'rate' => '3', 'review' => 'おいしいかぴかぴ', 'user_id' => '1'),
        array('shop_id' => null, 'curry_id' => '12', 'rate' => '2', 'review' => 'おいしいれびゅーれびゅーれびゅーれびゅー', 'user_id' => '2'),
        array('shop_id' => null, 'curry_id' => '13', 'rate' => '4', 'review' => 'おいしいいんど', 'user_id' => '3'),
        array('shop_id' => null, 'curry_id' => '14', 'rate' => '5', 'review' => 'おいしいなまはげ', 'user_id' => '1'),
        array('shop_id' => null, 'curry_id' => '15', 'rate' => '1', 'review' => 'おいしいみみみ', 'user_id' => '2'),
        array('shop_id' => null, 'curry_id' => '16', 'rate' => '2', 'review' => 'おいしいげげげ', 'user_id' => '3'),
        array('shop_id' => null, 'curry_id' => '17', 'rate' => '3', 'review' => 'おいしいおさかな', 'user_id' => '1'),
        array('shop_id' => null, 'curry_id' => '18', 'rate' => '4', 'review' => 'おいしいふくじんづじぇ', 'user_id' => '2'),
        array('shop_id' => null, 'curry_id' => '19', 'rate' => '2', 'review' => 'おいしいねこ', 'user_id' => '3'),
        array('shop_id' => null, 'curry_id' => '20', 'rate' => '5', 'review' => 'おいしいいぬ', 'user_id' => '1'),
        array('shop_id' => '1', 'curry_id' => null, 'rate' => '1', 'review' => 'なまはげ', 'user_id' => '2'),
        array('shop_id' => '1', 'curry_id' => null, 'rate' => '3', 'review' => 'あいうえお', 'user_id' => '3'),
        array('shop_id' => '1', 'curry_id' => null, 'rate' => '2', 'review' => 'れびゅー', 'user_id' => '1'),
        array('shop_id' => '2', 'curry_id' => null, 'rate' => '1', 'review' => 'じゅげむじゅげむ', 'user_id' => '2'),
        array('shop_id' => '2', 'curry_id' => null, 'rate' => '2', 'review' => 'なまはげ', 'user_id' => '3'),
        array('shop_id' => '3', 'curry_id' => null, 'rate' => '4', 'review' => 'あー', 'user_id' => '1'),
        array('shop_id' => '4', 'curry_id' => null, 'rate' => '5', 'review' => 'なまはげ', 'user_id' => '2'),
        array('shop_id' => '4', 'curry_id' => null, 'rate' => '2', 'review' => '大地讃頌', 'user_id' => '3'),
        array('shop_id' => '5', 'curry_id' => null, 'rate' => '3', 'review' => 'なまはげ', 'user_id' => '1'),
        array('shop_id' => '5', 'curry_id' => null, 'rate' => '2', 'review' => 'スープカレー', 'user_id' => '2'),
        array('shop_id' => '6', 'curry_id' => null, 'rate' => '2', 'review' => 'なまはげ', 'user_id' => '3'),
        array('shop_id' => '7', 'curry_id' => null, 'rate' => '5', 'review' => 'こんにちは', 'user_id' => '1'),
        array('shop_id' => '8', 'curry_id' => null, 'rate' => '2', 'review' => 'こめがうまい', 'user_id' => '2'),
        array('shop_id' => '9', 'curry_id' => null, 'rate' => '5', 'review' => 'チーズもりもり', 'user_id' => '3'),
      );

      DB::table('reviews')->insert($reviews);
    }
}
