<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnDetailsShopsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('shops', function (Blueprint $table) {
            $table->text('business_hours')->nullable();
            $table->integer('seats')->nullable();
            $table->integer('smoking')->nullable();
            $table->text('homepage')->nullable();
            $table->integer('charging')->nullable();
            $table->integer('wifi')->nullable();
            $table->integer('customer')->nullable();
            $table->text('peak_time')->nullable();
        //
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('shops', function (Blueprint $table) {
            //
        });
    }
}
