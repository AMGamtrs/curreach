<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $this->call('CurryTableSeeder');
      $this->call('ShopTableSeeder');
      $this->call('ReviewTableSeeder');
    }
}
