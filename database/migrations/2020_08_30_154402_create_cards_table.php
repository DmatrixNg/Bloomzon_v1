<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cards', function (Blueprint $table) {
          $table->id();
          $table->morphs('user');
          $table->string("authorization_code")->nullable();
          $table->string("bin")->nullable();
          $table->string("last4")->nullable();
          $table->string("exp_month")->nullable();
          $table->string("exp_year")->nullable();
          $table->string("channel")->nullable();
          $table->string("card_type")->nullable();
          $table->string("bank")->nullable();
          $table->string("country_code")->nullable();
          $table->string("brand" )->nullable();
          $table->string("reusable" )->nullable();
          $table->string("signature" )->nullable();
          $table->string("account_name" )->nullable();
          $table->string("receiver_bank_account_number")->nullable();
          $table->string("receiver_bank" )->nullable();
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
        Schema::dropIfExists('cards');
    }
}
