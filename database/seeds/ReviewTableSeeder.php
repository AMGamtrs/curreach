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

        array('shop_id' => '', 'curry_id' => '1', 'rate' => '1', 'review' => 'おいしいなまはげ'),
        array('shop_id' => '', 'curry_id' => '1', 'rate' => '3', 'review' => 'おいしいあいうえお'),
        array('shop_id' => '', 'curry_id' => '1', 'rate' => '2', 'review' => 'おいしいれびゅー'),
        array('shop_id' => '', 'curry_id' => '2', 'rate' => '1', 'review' => 'おいしいじゅげむじゅげむ'),
        array('shop_id' => '', 'curry_id' => '2', 'rate' => '2', 'review' => 'おいしいなまはげ'),
        array('shop_id' => '', 'curry_id' => '3', 'rate' => '4', 'review' => 'おいしいあー'),
        array('shop_id' => '', 'curry_id' => '4', 'rate' => '5', 'review' => 'おいしいなまはげ'),
        array('shop_id' => '', 'curry_id' => '4', 'rate' => '2', 'review' => 'おいしい大地讃頌'),
        array('shop_id' => '', 'curry_id' => '5', 'rate' => '3', 'review' => 'おいしいなまはげ'),
        array('shop_id' => '', 'curry_id' => '5', 'rate' => '2', 'review' => 'おいしいスープカレー'),
        array('shop_id' => '', 'curry_id' => '6', 'rate' => '2', 'review' => 'おいしいなまはげ'),
        array('shop_id' => '', 'curry_id' => '7', 'rate' => '5', 'review' => 'おいしいこんにちは'),
        array('shop_id' => '', 'curry_id' => '8', 'rate' => '2', 'review' => 'おいしいこめがうまい'),
        array('shop_id' => '', 'curry_id' => '9', 'rate' => '5', 'review' => 'おいしいチーズもりもり'),
        array('shop_id' => '', 'curry_id' => '10', 'rate' => '4', 'review' => 'おいしいぴかぴか'),
        array('shop_id' => '', 'curry_id' => '11', 'rate' => '3', 'review' => 'おいしいかぴかぴ'),
        array('shop_id' => '', 'curry_id' => '12', 'rate' => '2', 'review' => 'おいしいれびゅーれびゅーれびゅーれびゅー'),
        array('shop_id' => '', 'curry_id' => '13', 'rate' => '4', 'review' => 'おいしいいんど'),
        array('shop_id' => '', 'curry_id' => '14', 'rate' => '5', 'review' => 'おいしいなまはげ'),
        array('shop_id' => '', 'curry_id' => '15', 'rate' => '1', 'review' => 'おいしいみみみ'),
        array('shop_id' => '', 'curry_id' => '16', 'rate' => '2', 'review' => 'おいしいげげげ'),
        array('shop_id' => '', 'curry_id' => '17', 'rate' => '3', 'review' => 'おいしいおさかな'),
        array('shop_id' => '', 'curry_id' => '18', 'rate' => '4', 'review' => 'おいしいふくじんづじぇ'),
        array('shop_id' => '', 'curry_id' => '19', 'rate' => '2', 'review' => 'おいしいねこ'),
        array('shop_id' => '', 'curry_id' => '20', 'rate' => '5', 'review' => 'おいしいいぬ'),
        array('shop_id' => '1', 'curry_id' => '', 'rate' => '1', 'review' => 'なまはげ'),
        array('shop_id' => '1', 'curry_id' => '', 'rate' => '3', 'review' => 'あいうえお'),
        array('shop_id' => '1', 'curry_id' => '', 'rate' => '2', 'review' => 'れびゅー'),
        array('shop_id' => '2', 'curry_id' => '', 'rate' => '1', 'review' => 'じゅげむじゅげむ'),
        array('shop_id' => '2', 'curry_id' => '', 'rate' => '2', 'review' => 'なまはげ'),
        array('shop_id' => '3', 'curry_id' => '', 'rate' => '4', 'review' => 'あー'),
        array('shop_id' => '4', 'curry_id' => '', 'rate' => '5', 'review' => 'なまはげ'),
        array('shop_id' => '4', 'curry_id' => '', 'rate' => '2', 'review' => '大地讃頌'),
        array('shop_id' => '5', 'curry_id' => '', 'rate' => '3', 'review' => 'なまはげ'),
        array('shop_id' => '5', 'curry_id' => '', 'rate' => '2', 'review' => 'スープカレー'),
        array('shop_id' => '6', 'curry_id' => '', 'rate' => '2', 'review' => 'なまはげ'),
        array('shop_id' => '7', 'curry_id' => '', 'rate' => '5', 'review' => 'こんにちは'),
        array('shop_id' => '8', 'curry_id' => '', 'rate' => '2', 'review' => 'こめがうまい'),
        array('shop_id' => '9', 'curry_id' => '', 'rate' => '5', 'review' => 'チーズもりもり'),
        array('shop_id' => '10', 'curry_id' => '', 'rate' => '4', 'review' => 'ぴかぴか'),
        array('shop_id' => '11', 'curry_id' => '', 'rate' => '3', 'review' => 'かぴかぴ'),
        array('shop_id' => '12', 'curry_id' => '', 'rate' => '2', 'review' => 'れびゅーれびゅーれびゅーれびゅー'),
        array('shop_id' => '13', 'curry_id' => '', 'rate' => '4', 'review' => 'いんど'),
        array('shop_id' => '14', 'curry_id' => '', 'rate' => '5', 'review' => 'なまはげ'),
        array('shop_id' => '15', 'curry_id' => '', 'rate' => '1', 'review' => 'みみみ'),
        array('shop_id' => '16', 'curry_id' => '', 'rate' => '2', 'review' => 'げげげ'),
        array('shop_id' => '17', 'curry_id' => '', 'rate' => '3', 'review' => 'おさかな'),
        array('shop_id' => '18', 'curry_id' => '', 'rate' => '4', 'review' => 'ふくじんづじぇ'),
        array('shop_id' => '19', 'curry_id' => '', 'rate' => '2', 'review' => 'ねこ'),
        array('shop_id' => '20', 'curry_id' => '', 'rate' => '5', 'review' => 'いぬ'),
      );

      DB::table('reviews')->insert($reviews);
    }
}
