<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDeliveryAgentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('delivery_agents', function (Blueprint $table) {
                $table->id();
                $table->string('full_name')->nullable();
                $table->string('status')->default('active');
                $table->string('username')->nullable()->uniqid();
                $table->string('email')->unique();
                $table->timestamp('email_verified_at')->nullable();
                $table->string('country')->nullable();
                $table->string('state')->nullable();
                $table->string('area')->nullable();
                $table->string('street_address')->nullable();
                $table->string('billing_address')->nullable();
                $table->string('password')->nullable();
                $table->string('security_pin')->nullable();
                $table->string('phone_number')->nullable();
                $table->string('bank_name')->nullable();
                $table->string('account_number')->nullable();
                $table->string('account_name')->nullable();
                $table->string('card_expires')->nullable();
                $table->string('card_number')->nullable();
                $table->string('zip_code')->nullable();
                $table->string('cvv')->nullable();
                $table->integer('points')->default(0);
                $table->string('avatar')->default('avatar.png');
                $table->dateTime('last_login')->nullable();
                $table->rememberToken();
                $table->timestamps();
                $table->softDeletes();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('delivery_agents');
    }
}
