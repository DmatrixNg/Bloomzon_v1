<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddSubscriptionPlanToFastFoodGroceriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('fast_food_groceries', function (Blueprint $table) {
            $table->string('subscription_plan')->default('free user');
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
            $table->dropColumn('subscription_plan');
        });
    }
}
