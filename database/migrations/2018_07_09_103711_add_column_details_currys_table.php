<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnDetailsCurrysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('curries', function (Blueprint $table) {
           $table->integer('curry_type')->nullable();
           $table->integer('main_ingredien')->nullable();
           $table->integer('calorie')->nullable();
           $table->integer('allergies')->nullable();
           $table->integer('hot_rate')->nullable();
           $table->text('topping')->nullable();
           $table->integer('amount')->nullable();
           $table->integer('naan_rice')->nullable(); //
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('currys', function (Blueprint $table) {
            //
        });
    }
}
