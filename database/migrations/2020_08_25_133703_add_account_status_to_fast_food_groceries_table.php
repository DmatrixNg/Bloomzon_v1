<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddAccountStatusToFastFoodGroceriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('fast_food_groceries', function (Blueprint $table) {
            $table->string('account_status')->default('active');
            $table->string('subscription_date')->nullable();
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
            $table->dropColumn('account_status');
            $table->dropColumn('subscription_date');
        });
    }
}
