<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNetworkingAgentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('networking_agents', function (Blueprint $table) {
            $table->id();
            $table->string('company_name')->nullable();
            $table->string('full_name')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('country')->nullable();
            $table->string('state')->nullable();
            $table->string('area')->nullable();
            $table->string('street_address')->nullable();
            $table->string('cash_out')->nullable();
            $table->string('bank')->nullable();
            $table->string('account_number')->nullable();
            $table->string('account_name')->nullable();
            $table->string('account_bank_name')->nullable();
            $table->string('card_number')->nullable();
            $table->string('card_expires')->nullable();
            $table->string('cvv')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('avatar')->default('avatar.png');
            $table->string('password')->nullable();
            $table->string('proof_of_address')->nullable();
            $table->string('valid_id')->nullable();
            $table->string('narration')->nullable();
            $table->string('card_holder_name')->nullable();
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
        //
    }
}
