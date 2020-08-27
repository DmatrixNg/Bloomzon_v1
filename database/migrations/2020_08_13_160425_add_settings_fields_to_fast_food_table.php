<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddSettingsFieldsToFastFoodTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('fast_food_groceries', function (Blueprint $table) {
            $table->string('shop_location')->nullable();
            $table->string('delivery_terms')->nullable();
            $table->string('terms_and_conditions')->nullable();
            $table->string('terms_of_purchase')->nullable();
            $table->string('means_of_identification')->nullable();
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
            $table->dropColumn('shop_location');
            $table->dropColumn('delivery_terms');
            $table->dropColumn('terms_and_conditions');
            $table->dropColumn('terms_of_purchase');
            $table->dropColumn('means_of_identification');
        });
    }
}
