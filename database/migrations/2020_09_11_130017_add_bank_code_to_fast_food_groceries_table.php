<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddBankCodeToFastFoodGroceriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('fast_food_groceries', function (Blueprint $table) {
            $table->string('bank_code')->nullable();
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
            $table->dropColumn('bank_code');
        });
    }
}
