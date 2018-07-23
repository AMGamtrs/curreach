<?php

use Illuminate\Database\Seeder;

class BookmarkTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('bookmarks')->truncate();
      $bookmarks = [
  ['id' => '1', 'curry_id' => '1', 'user_id' => '1', ],
  ['id' => '2', 'curry_id' => '2', 'user_id' => '1', ],
  ['id' => '3', 'curry_id' => '3', 'user_id' => '1', ],
  ['id' => '4', 'curry_id' => '2', 'user_id' => '2', ],
  ['id' => '5', 'curry_id' => '3', 'user_id' => '2', ],
  ['id' => '6', 'curry_id' => '5', 'user_id' => '2', ],
  ['id' => '7', 'curry_id' => '6', 'user_id' => '2', ],
  ['id' => '8', 'curry_id' => '7', 'user_id' => '2', ],
  ['id' => '9', 'curry_id' => '8', 'user_id' => '2', ],
  ['id' => '10', 'curry_id' => '9', 'user_id' => '2', ],
  ['id' => '11', 'curry_id' => '10', 'user_id' => '2', ],
  ['id' => '12', 'curry_id' => '11', 'user_id' => '2', ],
  ['id' => '13', 'curry_id' => '12', 'user_id' => '2', ],
  ['id' => '14', 'curry_id' => '16', 'user_id' => '2', ],
  ['id' => '15', 'curry_id' => '17', 'user_id' => '2', ],
  ['id' => '16', 'curry_id' => '19', 'user_id' => '2', ],
  ['id' => '17', 'curry_id' => '20', 'user_id' => '2', ],
  ['id' => '18', 'curry_id' => '2', 'user_id' => '3', ],
  ['id' => '19', 'curry_id' => '5', 'user_id' => '3', ],
];

      DB::table('bookmarks')->insert($bookmarks);
    }
}
