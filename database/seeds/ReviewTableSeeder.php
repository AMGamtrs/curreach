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

        array('shop_id' => null, 'curry_id' => '1', 'rate' => '5', 'review' => '【おいしさ】美味しかった！バナナは案外カレーに合う！スパイシーな香りをバナナが柔らかく包みます。  【辛さ】辛さを選べる。１番マイルドなのを選んだけど、辛いのが苦手な人でも全然大丈夫です。', 'user_id' => '1'),
        array('shop_id' => null, 'curry_id' => '1', 'rate' => '3', 'review' => '【おいしさ】バナナがメインの具。意外と食べられる  【辛さ】ちょっと物足りなかった。一番辛いのを選んでもよかったかも。', 'user_id' => '2'),
        array('shop_id' => null, 'curry_id' => '1', 'rate' => '2', 'review' => 'バナナとカレーの組み合わせは人を選ぶと思う', 'user_id' => '3'),
        array('shop_id' => null, 'curry_id' => '2', 'rate' => '1', 'review' => 'あまり好みじゃなかった。', 'user_id' => '1'),
        array('shop_id' => null, 'curry_id' => '2', 'rate' => '2', 'review' => 'ふつうの味だった', 'user_id' => '2'),
        array('shop_id' => null, 'curry_id' => '3', 'rate' => '4', 'review' => 'とってもおいしかった！トッピングも充実してます', 'user_id' => '3'),
        array('shop_id' => null, 'curry_id' => '4', 'rate' => '5', 'review' => 'め ち ゃ く ち ゃ う ま い !', 'user_id' => '1'),
        array('shop_id' => null, 'curry_id' => '4', 'rate' => '2', 'review' => 'ふつうの味だった', 'user_id' => '2'),
        array('shop_id' => null, 'curry_id' => '5', 'rate' => '3', 'review' => 'おいしい。魚介たっぷりで、具が大きいのが嬉しい。辛さは普通くらい、自分にはちょっと味が濃かった。', 'user_id' => '3'),
        array('shop_id' => null, 'curry_id' => '5', 'rate' => '2', 'review' => 'ふつうの味だった', 'user_id' => '1'),
        array('shop_id' => null, 'curry_id' => '6', 'rate' => '2', 'review' => 'ふつうの味だった', 'user_id' => '2'),
        array('shop_id' => null, 'curry_id' => '7', 'rate' => '5', 'review' => '至高のカレー。いままで食べたカレーベスト3に入る味。', 'user_id' => '3'),
        array('shop_id' => null, 'curry_id' => '8', 'rate' => '2', 'review' => 'いい米つかってる', 'user_id' => '1'),
        array('shop_id' => null, 'curry_id' => '9', 'rate' => '5', 'review' => 'チーズたくさんかけるのがオススメ！', 'user_id' => '2'),
        array('shop_id' => null, 'curry_id' => '10', 'rate' => '4', 'review' => 'からさもちょうどよく、たべやすいです！', 'user_id' => '3'),
        array('shop_id' => null, 'curry_id' => '11', 'rate' => '3', 'review' => 'おいしかったです', 'user_id' => '1'),
        array('shop_id' => null, 'curry_id' => '12', 'rate' => '2', 'review' => 'ふつうの味だった', 'user_id' => '2'),
        array('shop_id' => null, 'curry_id' => '13', 'rate' => '4', 'review' => 'スパイシー！', 'user_id' => '3'),
        array('shop_id' => null, 'curry_id' => '14', 'rate' => '5', 'review' => '至高のカレー。いままで食べたカレーベスト3に入る味。', 'user_id' => '1'),
        array('shop_id' => null, 'curry_id' => '15', 'rate' => '1', 'review' => 'あまり好みじゃなかった。', 'user_id' => '2'),
        array('shop_id' => null, 'curry_id' => '16', 'rate' => '2', 'review' => 'からすぎた', 'user_id' => '3'),
        array('shop_id' => null, 'curry_id' => '17', 'rate' => '3', 'review' => 'おいしい', 'user_id' => '1'),
        array('shop_id' => null, 'curry_id' => '18', 'rate' => '4', 'review' => '深みのある味でした', 'user_id' => '2'),
        array('shop_id' => null, 'curry_id' => '19', 'rate' => '2', 'review' => 'ふつう', 'user_id' => '3'),
        array('shop_id' => null, 'curry_id' => '20', 'rate' => '5', 'review' => '至高のカレー。いままで食べたカレーベスト3に入る味。', 'user_id' => '1'),
        array('shop_id' => '1', 'curry_id' => null, 'rate' => '3', 'review' => '【雰囲気】田舎のご飯屋さん、といった雰囲気
            。気取らない感じです。ちょっとレトロな感じでカワイイ。窓際の席は海が見えるので、SNS映えするかも！【衛生面】標準的です。 【客対応】感じが良かったです。', 'user_id' => '2'),
        array('shop_id' => '1', 'curry_id' => null, 'rate' => '4', 'review' => '温かみのある店内でした。かしこまらずにカレーに集中できます。', 'user_id' => '3'),
        array('shop_id' => '1', 'curry_id' => null, 'rate' => '2', 'review' => '【雰囲気】ちょっと古い 広さは十分でした【衛生面】標準的です。【客対応】ふつう。まあ満足です。', 'user_id' => '1'),
        array('shop_id' => '2', 'curry_id' => null, 'rate' => '1', 'review' => 'ちょっと狭かったです', 'user_id' => '2'),
        array('shop_id' => '2', 'curry_id' => null, 'rate' => '2', 'review' => 'まあまあ', 'user_id' => '3'),
        array('shop_id' => '3', 'curry_id' => null, 'rate' => '4', 'review' => '一人で行っても落ち着いてカレーを楽しめます。おすすめです。', 'user_id' => '1'),
        array('shop_id' => '4', 'curry_id' => null, 'rate' => '5', 'review' => '綺麗で、店員さんも優しいです', 'user_id' => '2'),
        array('shop_id' => '4', 'curry_id' => null, 'rate' => '2', 'review' => 'ふつう', 'user_id' => '3'),
        array('shop_id' => '5', 'curry_id' => null, 'rate' => '3', 'review' => 'お洒落な店内。女子でも入りやすいです。', 'user_id' => '1'),
        array('shop_id' => '5', 'curry_id' => null, 'rate' => '2', 'review' => 'お洒落すぎて居づらい。カレー屋ぽくない。', 'user_id' => '2'),
        array('shop_id' => '6', 'curry_id' => null, 'rate' => '2', 'review' => '可もなく不可もなく。', 'user_id' => '3'),
        array('shop_id' => '7', 'curry_id' => null, 'rate' => '5', 'review' => 'エスニックな内装だけど清潔感もあってワクワクする雰囲気です。接客も満足でした', 'user_id' => '1'),
        array('shop_id' => '8', 'curry_id' => null, 'rate' => '2', 'review' => '標準的なカレー屋という感じ。', 'user_id' => '2'),
        array('shop_id' => '9', 'curry_id' => null, 'rate' => '5', 'review' => '活気があるけど、混みすぎて入れない！というほどではない', 'user_id' => '3'),
      );

      DB::table('reviews')->insert($reviews);
    }
}
