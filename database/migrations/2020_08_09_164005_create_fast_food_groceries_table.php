<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFastFoodGroceriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fast_food_groceries', function (Blueprint $table) {
            $table->id();
            $table->string('company_name')->nullable();
            $table->string('full_name')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('country')->nullable();
            $table->string('state')->nullable();
            $table->string('area')->nullable();
            $table->string('street_address')->nullable();
            $table->string('shop_address')->nullable();
            $table->string('service_description')->nullable();
            $table->string('billing_address')->nullable();
            $table->string('cash_out')->nullable();
            $table->string('bank')->nullable();
            $table->string('account_number')->nullable();
            $table->string('account_name')->nullable();
            $table->string('bank_name')->nullable();
            $table->string('card_number')->nullable();
            $table->string('card_expires')->nullable();
            $table->string('cvv')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('avatar')->default('avatar.png');
            $table->string('policy')->nullable();
            $table->string('delivery_method')->nullable();
            $table->string('delivery_agent')->nullable();
            $table->string('account_type')->default('Free User');
            $table->string('password')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fast_food_groceries');
    }
}
