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
    public function up()
    {
        Schema::create('manufacturers', function (Blueprint $table) {
            $table->id();
            $table->string('full_name')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('country')->nullable();
            $table->string('state')->nullable();
            $table->string('area')->nullable();
            $table->string('street_address')->nullable();
            $table->string('billing_address')->nullable();
            $table->string('cash_out')->nullable();

            $table->string('bank')->nullable();
            $table->string('account_number')->nullable();
            $table->string('account_name')->nullable();

            $table->string('phone_number')->nullable();

            $table->longText('profile')->nullable();
            $table->longText('terms_and_conditions')->nullable();
            $table->longText('terms_of_purchase')->nullable();
            $table->longText('policies')->nullable();
            
            $table->longText('avatar')->default('avatar.png');

            $table->timestamps();
            $table->string('password');
            $table->rememberToken();
        });
    }

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
