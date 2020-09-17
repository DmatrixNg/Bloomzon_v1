<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddMoreSettingsFieldsToFastFoodGroceriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('fast_food_groceries', function (Blueprint $table) {
          $table->string('type_of_service')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('fast_food_groceries', function (Blueprint $table) {
          $table->dropColumn('type_of_service');

        });
    }
}
