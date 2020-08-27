<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateManufacturersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    // public function up()
    // {
    //     Schema::create('manufacturers', function (Blueprint $table) {
    //         $table->id();
    //         $table->string('last_name');
    //         $table->string('email')->unique();
    //         $table->timestamp('email_verified_at')->nullable();
    //         $table->string('country');
    //         $table->string('state');
    //         $table->string('area');
    //         $table->string('street_address');
    //         $table->string('billing_address');
    //         $table->string('cash_out');

    //         $table->string('bank');
    //         $table->string('account_number');
    //         $table->string('account_name');

    //         $table->string('phone_number');

    //         $table->string('profile');
    //         $table->string('terms_and_conditions');
    //         $table->string('terms_of_purchase');
    //         $table->string('policies');

    //         $table->timestamps();
    //         $table->string('password');
    //         $table->rememberToken();
    //         $table->timestamps();
    //     });
    // }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('manufacturers');
    }
}
