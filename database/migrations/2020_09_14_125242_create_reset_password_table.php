<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResetPasswordTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buyer_password_resets', function (Blueprint $table) {
          $table->string('email')->index();
          $table->string('token');
          $table->timestamp('created_at')->nullable();
        });
        Schema::create('admin_password_resets', function (Blueprint $table) {
          $table->string('email')->index();
          $table->string('token');
          $table->timestamp('created_at')->nullable();
        });
        Schema::create('seller_password_resets', function (Blueprint $table) {
          $table->string('email')->index();
          $table->string('token');
          $table->timestamp('created_at')->nullable();
        });
        Schema::create('manufacturer_password_resets', function (Blueprint $table) {
          $table->string('email')->index();
          $table->string('token');
          $table->timestamp('created_at')->nullable();
        });
        Schema::create('networking_agent_password_resets', function (Blueprint $table) {
          $table->string('email')->index();
          $table->string('token');
          $table->timestamp('created_at')->nullable();
        });
        Schema::create('professional_password_resets', function (Blueprint $table) {
          $table->string('email')->index();
          $table->string('token');
          $table->timestamp('created_at')->nullable();
        });
        Schema::create('shopper_password_resets', function (Blueprint $table) {
          $table->string('email')->index();
          $table->string('token');
          $table->timestamp('created_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('buyer_password_resets');
        Schema::dropIfExists('admin_password_resets');
        Schema::dropIfExists('seller_password_resets');
        Schema::dropIfExists('manufacturer_password_resets');
        Schema::dropIfExists('networking_agent_password_resets');
        Schema::dropIfExists('professional_password_resets');
        Schema::dropIfExists('shopper_password_resets');
    }
}
