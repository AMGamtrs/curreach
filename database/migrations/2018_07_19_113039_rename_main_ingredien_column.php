<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RenameMainIngredienColumn extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('curries', function (Blueprint $table) {
            $table->renameColumn('main_ingredien', 'main_ingredient');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('curries', function (Blueprint $table) {
            $table->renameColumn('main_ingredient', 'main_ingredien');
        });
    }
}
