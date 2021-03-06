<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOldOrderDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('old_order_details', function (Blueprint $table) {
            $table->id();
            $table->integer('buyer_id')->nullable();
            $table->integer('order_id')->unsigned();
            $table->integer('seller_id')->unsigned();
            $table->integer('product_id')->unsigned();
            $table->string('order_type')->nullable();
            $table->mediumText('product');
            $table->string('status')->default('new');
            $table->string('shopper_status')->default('yet_to_arrive');
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
        Schema::dropIfExists('order_details');
    }
}
